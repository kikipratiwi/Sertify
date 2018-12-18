// TODO refactor+clean up

const moment = require('moment')
const wait = require('promise-wait')
const tc = require('truffle-contract')
const detectNetwork = require('web3-detect-network')
const {soliditySHA3} = require('ethereumjs-abi')
const {sha3} = require('ethereumjs-util')
const Buffer = require('buffer/').Buffer
const Web3WsProvider = require('web3-providers-ws')
const arrayBufferToBuffer = require('arraybuffer-to-buffer')

const source = require('../../build/contracts/DocStamp.json')

let instance = null
let account = null

let addresses = {
  mainnet: '0xd749c968399b8cbdf2ce95d1f87c1c38157c579a',
  rinkeby: '0x3b41bc65821962b9ac60c8151ba0ae593e4e3078'
}

/**
 * ON LOAD
 */

// wait for MetaMask to inject script
window.addEventListener('load', onLoad)

async function onLoad () {
  try {
    await init()

    if (getAccount()) {
      setUpEvents()
    } else {
      // TODO: not use innerHTML
      //publisherInfo.innerHTML = `Please install or unlock MetaMask to update your list of sellers`
    }
  } catch (error) {
    alert(error.message)
  }
}

let network = 'mainnet'

//inisialisasi
async function init () {
  contract = tc(source)                 // load contract

  // wait for web3 to load
  await wait(1000)

  const {id:netId, type:netType} = await detectNetwork(getProvider())   // mendapatkan provider jaringan dan di assign ke netId dan netType
  if (!(netType === 'mainnet' || netType === 'rinkeby')) {              // hanya provider jaringan rinkeby / ethereum yg dapat mengakses
    alert('Only Mainnet or Rinkeby Testnet is currencly supported')
  } else {
    network = netType
  }

  provider = getProvider()  // mendapatkan provider dan di assign ke variabel provider
  contract.setProvider(provider)  // jadikan isi variabel provider (rinkeby / mainnet ethereum) menjadi provider yang digunakan oleh Sertify

  contractAddress = addresses[network]      // mendapatkan address dari network yg di gunakan

  document.querySelector('#networkType').innerHTML = network    // assign nama network ke id #networkType (untuk di tampilkan di page Sertify)
  document.querySelector('#etherscanLink').href = `https://${network === 'mainnet' ? '' : `${network}.`}etherscan.io/address/${contractAddress}`  // menampilkan alamat etherscan dari network yg digunakan

  instance = await contract.at(contractAddress)   // get contract
  account = getAccount()                          // mendapatkan akun yang digunakan oleh user

  if (!window.web3) {
    window.web3 = new window.Web3(provider)     // instansiasi web3
  }
}

/**
 * fungsi untuk mendapatkan PROVIDER yang digunakan (Rinkeby atau Mainnet)
 */

function getProvider () {
  if (window.web3) {
    return window.web3.currentProvider
  }

  const providerUrl = `https://${network}.infura.io:443`
  const provider = new window.Web3.providers.HttpProvider(providerUrl) 

  return provider
}

// mengambil socket provider (Rinkeby atau Mainnet) yang digunakan
function getWebsocketProvider () {
  // https://github.com/ethereum/web3.js/issues/1119
  if (!window.Web3.providers.WebsocketProvider.prototype.sendAsync) {
    window.Web3.providers.WebsocketProvider.prototype.sendAsync = window.Web3.providers.WebsocketProvider.prototype.send
  }

  return new window.Web3.providers.WebsocketProvider(`wss://${network}.infura.io/ws`)
}

// mengambil akun yang digunakan oleh user
function getAccount () {
  if (window.web3) {
    return window.web3.defaultAccount || window.web3.eth.accounts[0]
  }
}

/**
 * LOGS
 */

async function setUpEvents () {

  const ws = new Web3WsProvider(`wss://${network}.infura.io/ws`);
  ws.sendAsync = ws.send
  const contract = tc(source)
  const provider = ws //getWebsocketProvider()
  contract.setProvider(provider)

  const instance = await contract.deployed()

  instance.allEvents({fromBlock: 0, toBlock: 'latest'})
  .watch(function (error, log) {
    if (error) {
      console.error(error)
      return false
    }

    handleLog(log)
  })
}

function handleLog(log) {
  const name = log.event
  const args = log.args

  eventsLog.innerHTML += `<li>${name} ${JSON.stringify(args)}</li>`
}

if (!window.Promise) {
  alert('Promise support is required')
}

if (!window.FileReader) {
  alert('FileReader support is required')
}

if (!window.crypto) {
  alert('Browser crypto support is required')
}

const eventsLog = document.querySelector('#eventsLog')

/**
 * STAMP FORM
 */

const stampFileInput = document.querySelector('#stampFile') // Variabel untuk input dokumen
const stampOutHash = document.querySelector('#stampHash')   // Variabel untuk hasil hashing
const stampForm = document.querySelector('#stampForm')      // Variabel untuk stamp / submit form

stampFileInput.addEventListener('change', handleStampFile, false)
stampForm.addEventListener('submit', handleStampForm, false)

// fungsi untuk generate hash dari file
async function handleStampFile (event) {
  stampOutHash.value = ''
  const file = event.target.files[0]                // dokumen di simpan ke variabel file
  const hash = await fileToSha3(file)               // generate hash dokumen dengan format sha3

  stampOutHash.value = hash                         // assign hasil hash ke variabel
}

// fungsi untuk meng-handle form stamp dokumen
async function handleStampForm (event) {
  event.preventDefault()
  const target = event.target

  if (!account) {       // mengecek apakah user sudah terhubung dengan network (rinkeby atau mainnet)
    alert('Please connect MetaMask account set to Rinkeby network')
    return false
  }

  const hash = stampOutHash.value   // assign hasil hash dari dokumen ke variabel

  if (!hash) {          // mengecek apakah dokumen sudah di upload atau belum
    alert('Please select the document')
    return false
  }

  target.classList.toggle('loading', true)    // memberi efek loading saat stamp
  await stampDoc(hash)                        // stamp dokumen dengan parameter input nilai hash dokumen
  target.classList.toggle('loading', false)   // menghilangkan efek loading saat stamp
}

// fungsi untuk stamp dokumen
async function stampDoc (hash) {
  try {
    const exists = await instance.exists(hash, {from: account}) // mengecek ketersediaan dokumen

    if (exists) { // pengecekan apakah dokumen sudah di stamp atau belum
      // alert('This document already exists as being stamped')
      $('#notification').html('This document already exists as being stamped')
      return false
    }

    const value = await instance.stamp(hash, {from: account})   // stamp dokumen parameter input berupa hash dan alamat akun
    alert('Successfully stamped document')
  } catch (error) {
    alert(error)
  }
}

/**
 * STAMP CHECK FORM
 */

const checkForm = document.querySelector('#checkForm')          // variabel untuk form check stamper
const checkFile = document.querySelector('#checkFile')          // variabel untuk menampung dokumen
const checkHash = document.querySelector('#checkHash')          // variabel untuk menampung hash dari dokumen
const checkStamper = document.querySelector('#checkStamper')    // variabel untuk menampung siapa stamper dokumen
const checkDatetime = document.querySelector('#checkDatetime')  // variabel untuk menampung timestamp kapan dokumen di stamp
checkFile.addEventListener('change', handleCheckFile, false)
checkForm.addEventListener('submit', handleCheckForm, false)

// fungsi untuk generate hash dari file
async function handleCheckFile (event) {
  checkHash.value = ''
  const file = event.target.files[0]    // dokumen di simpan ke variabel file

  const hash = await fileToSha3(file)   // generate hash dokumen dengan format sha3
  checkHash.value = hash                // assign hasil hash ke variabel
}

// fungsi untuk meng-handle form check stamper
async function handleCheckForm (event) {
  event.preventDefault()

  checkStamper.value = ''
  checkDatetime.value = ''

  const hash = checkHash.value

  if (!hash) {          // mengecek apakah dokumen sudah di upload atau belum
    alert('Please select the document')
    return false
  }

  const exists = await instance.exists(hash, {from: account})   // assign status ketersediaan (sudah di stamp) dokumen di smart contract

  if (!exists) {  // mengecek apakah dokumen sudah di stamp atau belum pada smart contract
    alert('Document does not exist in smart contract')
    return false
  }

  try {
    const stamper = await instance.getStamper(hash, {from: account})        // assign alamat stamper dokumen ke dalam variabel
    const timestamp = await instance.getTimestamp(hash, {from: account})    // assign timestamp kapan dokumen di stamp
    const date = moment.unix(timestamp).format('YYYY-MM-DD hh:mmA')         // memberi pemformatan dari timestamp dan di assign ke variabel date

    checkStamper.value = stamper      // assign alamat stamper ke checkStamper (untuk di tampilkan di page sertify)
    checkDatetime.value = date        // assign timestamp ke checkDatetime (untuk di tampilkan di page sertify)
  } catch (error) {
    alert(error)
  }
}

/**
 * STAMP GEN SIG FORM
 */

const genSigForm = document.querySelector('#genSigForm')            // variabel untuk form check stamper
const genSigFile = document.querySelector('#genSigFile')            // variabel untuk menampung dokumen
const genSigHash = document.querySelector('#genSigHash')            // variabel untuk menampung digital signature dari dokumen  
genSigForm.addEventListener('submit', handleGenSigForm, false)

// fungsi untuk menghandle generate signatur
async function handleGenSigForm (event) {
  event.preventDefault()

  genSigHash.value = ''
  const file = genSigFile.files[0]    // dokumen di simpan ke variabel file
  const hash = await fileToSha3(file) // generate hash dokumen dengan format sha3

  const exists = await instance.exists(hash, {from: account})

  if (!exists) {        // mengecek apakah dokumen sudah di stamp atau belum pada smart contract
    alert('Please stamp document before generating signature')
    return false
  }

  if (!account) {       // mengecek apakah user sudah terhubung dengan network (rinkeby atau mainnet)
    alert('Please connect MetaMask account set to Rinkeby network')
    return false
  }

  const stamper = await instance.getStamper(hash, {from: account})    //  mendapatkan alamat stamper dokumen

  if (stamper !== account) {    //  mengecek apakah alamat user sama dengan stamper
    alert('You are not the stamper of this document')   // (syarat generate signature adalah stamper yang meng generate signature)
    return false
  }

  // generate digital signature
  web3.eth.sign(account, hash, (error, sig) => {
    genSigHash.value = sig      // assign digital signature ke dalam variabel genSigHash (untuk di tampilkan di page Sertify)
  });
}


/**
 * STAMP VERIFY SIG FORM
 */

const verifySigForm = document.querySelector('#verifySigForm')      // variabel untuk form verifikasi signature
const verifySigFile = document.querySelector('#verifySigFile')      // variabel untuk menampung dokumen
const verifySigInput = document.querySelector('#verifySigInput')    // variabel untuk menampung digital signature dari dokumen
const verifySigOut = document.querySelector('#verifySigOut')        // variavel untuk menampung hash dari dokumen
verifySigForm.addEventListener('submit', handleVerifySigForm, false)

async function handleVerifySigForm (event) {
  event.preventDefault()

  verifySigOut.innerHTML = ''
  const file = verifySigFile.files[0]   // dokumen di simpan ke variabel file

  const hash = await fileToSha3(file)   // generate hash dokumen dengan format sha3
  const sig = verifySigInput.value      // assign digital signature ke variabel sig

  const exists = await instance.exists(hash, {from: account})   // assign status ketersediaan (sudah di stamp) dokumen di smart contract

  if (!exists) {  // mengecek apakah dokumen sudah di stamp atau belum pada smart contract
    alert('There is no record for this document')
    return false
  }

  if (!sig) {     // mengecek apakah signature sudah di isi atau belum
    alert('Please input signature string')
    return false
  }

  const addr = await instance.getStamper(hash)    // mengambil alamat stamper dari dokumen    
  const isSigner = await instance.ecverify(hash, sig, addr, {from: account})    // memverifikasi apakah hash dokumen cocok dengan signature yang di stamp

  let output = `<span class="red">✘ ${addr} <strong>IS NOT</strong> signer of ${hash}</span>`   // jika signature tidak cocok dengan dokumen

  if (isSigner) {
    output = `<span class="green">✔ ${addr} <strong>IS</strong> signer of ${hash}</span>`       // jika signature cocok dengan dokumen
  }

  verifySigOut.innerHTML = output       // tampilkan hasil verifikasi di page Sertify
}

/**
 * HELPERS
 */

function fileToBuffer (file) {
  return new Promise(function (resolve, reject) {
    const reader = new FileReader()
    const readFile = function(event) {
      const buffer = reader.result
      resolve(buffer)
    }

    reader.addEventListener('load', readFile)
    reader.readAsArrayBuffer(file)
  })
}

// fungsi untuk generate hash sha3 dari buffer
async function bufferToSha3 (buffer) {
  return `0x${sha3(buffer).toString('hex')}`
}

async function fileToSha3 (file) {                        
  const buffer = await fileToBuffer(file)                 // load dari buffer ke variabel
  const hash = bufferToSha3(arrayBufferToBuffer(buffer))  // konversi dari variabel buffer ke bentuk hash sha3

  return hash   // return isi variabel hash
}

