document.getElementById("readtxt").addEventListener('change', function(){
    var fr = new FileReader();
    fr.onload = function(){
        document.getElementById("verifySigInput").value = this.result;
    }
    fr.readAsText(this.files[0])
})