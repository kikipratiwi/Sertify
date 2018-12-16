<?php
  include "process/connection.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sertify | Upload Sertifikat</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="/bootswatch.com/4/darkly/bootstrap.min.css">
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
<body background="assets/img/bg-home.jpg">
  <!-- Header -->
  <div class="navbar navbar-expand-lg navbar-dark nav-gradient nav-size-md gap fixed-top">
  
      <!-- Logo Brand Navbar -->  
      <div class="col-xl-2">
          <a href="index.html" class="navbar-brand" style="margin-left:80px"><img style="height: 40px;" src="assets/img/sertify-logotype.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      </div>
        
        <!-- Navbar -->
        <div class="col-xl-7 d-flex justify-content-center margin-top-xs collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.html">F.A.Q</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="how.html">HOW IT WORKS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="corporate.html">CORPORATE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pricing.html">PRICING</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">UPLOAD</a>
              </li>
          </ul>
        </div>
      <!-- Button -->
          <ul class="col-xl-3 nav navbar-nav mt-4 mr-3">
              <li class="nav-item">
                <a class="button-rpeach font-weight-bold nav-link" href="login.html">LOG IN</a>
              </li>
              <li>
                <a class="button-rpeach font-weight-bold nav-link" href="index.html">SIGN UP</a>
              </li>
            </ul>
    </div>
  <main id="content" class="font1">
    <div class="container-fluid">
      <!--Ini adalah tingkat 2-->
      <div class="row pt-5 mt-5"></div>
        <div class="row  pt-2 mt-2" style="margin-left:120px;">
            <div class="col-md-6">
             <img class="img-upload" src="assets/img/upload.png" alt="">
            </div>
            <div class="col-md-5">
              <div class="upload-box text-center ml-5">
                  <form action="process/certificate-upload.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="user_id" value=1>
                      <div class="form-group row align-middle">
                          <label for="staticEmail" class="col-sm-2 col-form-label font-weight-bold">Nomor Sertifikat</label>
                          <div class="col-sm-10">
                            <input  class="form-control" placeholder="001/,....." name="certificate_number">
                          </div>
                      </div>                            
                      <div class="form-group row">
                        <label for="exampleFormControlSelect1" class ="col-sm-2 col-form-label font-weight-bold">Penerbit</label>
                        <div class="col-sm-10">
                            <select name="agency" class="form-control" id="exampleFormControlSelect1">
                              <?php
                                  $query = "SELECT id,name FROM agencies";
                                  $db = mysqli_query($conn, $query);

                                  while ( $d=mysqli_fetch_assoc($db)) {
                                    echo "<option value='".$d['id']."'>".$d['name']."</option>";
                                  }
                              ?>
                            </select>
                        </div>
                      </div>
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" name="certificate_file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" style="width:400px;">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                      <div>
                        <button type="submit" name="upload" class="btn button-rpeach font-weight-bold" style="border-radius:50px; width: 140px; font-size: 12pt;">Submit</button>
                      </div>
                </form>
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
  </main>    
</body>
</html>


<!-- Java Script Preview Image -->
<script type="text/javascript">
  function previewImage(event){

      var reader = new FileReader();
      var imageField = document.getElementById("image-field");

      reader.onload = function(){
          if (reader.readyState == 2){
              imageField.src = reader.result;
          }
      } 
      reader.readAsDataURL(event.target.files[0]);
  }
</script>