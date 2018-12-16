<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sertify</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="//bootswatch.com/4/darkly/bootstrap.min.css">
  <!-- Font Awesome -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
  <!-- font Open Sans -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script src="main.js"></script>
</head>
<body style="height:770px;">
  <!-- Header -->
 <?php require'header.php' ?>

    <div class="bg1">
        <div class="container" style="padding-top:220px;">
            <div class="animated fadeInDown" id="accordion">
              <div>
                <div class="panel shadow align-middle" id="headingOne" >
                  <h5 class="mb-0">
                    <div class="collapsed qhead" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Apa itu Sertify?
                    </div>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse card" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body q1">
                    Sertify adalah layanan aplikasi web yang memungkinkan untuk meverifikasi sertifikat pengguna.
                    Hal ini di dasarkan pada teknologi blockchain sebagai alat untuk melindungi dan mevalidasi data(sertifikat).            
                  </div>
                </div>
              </div>
              <br>
              <div>
                <div class="panel shadow" id="headingTwo">
                  <h5 class="mb-0">
                    <div class="collapsed qhead" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Mengapa Sertify menggunakan blockchain?
                    </div>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse card" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body q2">
                    Aplikasi ini menyimpan data sertifikat yang penting, karena data tersebut diperlukan pengguna 
                    untuk pengalaman pekerjaan atau bukti kerja pada perusahaan terkait. 
                    Kami menggunakan blockchain karena pada aplikasi ini akan menyimpan hasil verifikasi di blockchain, 
                    dan tersimpan selamanya.
                  </div>
                </div>
              </div>
            <br>
              <div>
                <div class="panel shadow" id="headingThree">
                  <h5 class="mb-0">
                    <div class="collapsed qhead" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Bagaimana untuk melihat data sertifikat yang sudah tersimpan?
                    </div>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse card" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body q3">
                    Pada aplikasi ini ada fitur(page) yang akan menampilkan riwayat penyimpanan data yang telah di validasi 
                    oleh perusahaan berisi hash value dan transaction ID untuk membuka isi blockchain di website yang 
                    menyediakannya.
                  </div>
                </div>
              </div>
            <br>
              <div>
                <div class="panel shadow amy-crisp-gradient" id="headingFour">
                  <h5 class="mb-0">
                    <div class="collapsed qhead" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Bagaimana jika data sertifikat hilang pada blockchain?
                    </div>
                  </h5>
                </div>
                <div id="collapseFour" class="collapse card" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body q4">
                    Data tidak akan hilang, karena kelebihan memakai blockchain. Data yang telah di validasi akan tersimpan pada 
                    blockchain, dimana penyimpanan tersebut itu selamanya karena blockchain akan melindungi sebuah data yang 
                    telah tersimpan sehingga lebih aman.  
                  </div>
                </div>
              </div>
            <br>
              <div>
                <div class="panel shadow dusty-grass-gradient" id="headingFive">
                  <h5 class="mb-0">
                    <div class="collapsed qhead" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Bisakah saya mencoba Sertify sebelum saya memutuskan membeli?
                    </div>
                  </h5>
                </div>
                <div id="collapseFive" class="collapse card" aria-labelledby="headingFive" data-parent="#accordion">
                  <div class="card-body q5">
                    Kami memberi user baru sebesar 3 kredit balance dari harga per document, jadi user bisa mencoba dengan 3 document. 
                    Selanjutnya harus bayar.            
                  </div>
                </div>
              </div>
            <br>
            <div>
              <div class="panel shadow aqua-gradient" id="headingSix">
                <h5 class="mb-0">
                  <div class="collapsed qhead" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Berapa lama waku dari upload dokumen sampai tervalidasi ?      
                  </div>
                </h5>
              </div>
              <div id="collapseSix" class="collapse card" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body q6">
                    Dokumen akan tervalidasi maksimal 3 hari, di karenakan Sertify 
                    memberikan maksimal waktu 3 hari mevalidasi untuk perusahaan yang bersangkutan.
                </div>
              </div>
            </div>
            </div>
          </div>
          
          <footer id="footer" class="page-footer unique-color-dark mt-4 fixed-bottom" style="height:35px;">
              <!--/.Footer Links-->
              <!-- Copyright-->
              <div class="footer-copyright py-2 text-center" style="font-size:10pt;">
                © 2018 Copyright:
                <a href="https://mail.google.com/mail/u/1/#inbox">
                  Jurusan Teknik Komputer dan Informatika - Politeknik Negeri Bandung<strong> Kelompok - B2</strong>
                </a>
              </div>
              <!--/.Copyright -->
          </footer>
    </div>  
</body>

  <!-- Rahmadi -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</html>