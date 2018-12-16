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
<body>
  <!-- Header -->
  <?php require'header.php' ?>
  <div class="bg1">
      <main class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
              <div class="col-md-6 ml-5" style="color:darkslategray">
                  <div class="col-md-6" style="margin-top:250px;">
                    <h2 class="font-weight-bold" style="color:#682B5F">VERIFIKASI  <br>& SIMPAN SERTIFIKATMU SELAMANYA </h2>
                  </div>
                  <div class="line-text"></div>
                  <div class="col-md-10">
                      <p class="font-weight-bold" style="color:#682B5F">Sertify hadir sebagai interface yang menghubungkan Anda dengan teknologi pencatatan transaksi terintegrasi modern, 
                        Blockchain. Dengan menggunakan blockchain, Anda tidak perlu khawatir akan adanya pemalsuan dan Anda tidak perlu melegalisir 
                        data yang Anda miliki berulang kali.</p>
                  </div>
                  <a class="ml-3 button-purple nav-link font-weight-bold" href="#" style="color:#FBBF5B">PELAJARI LEBIH LANJUT</a>
              </div>
              <div class="col-md-3">
                  <!-- method="POST" action="process/registration.php" -->
                  <form id="register-form" style="margin-top:200px;" >
                    <!-- Ersaad -->
                        <div class="text-center signup animated fadeInLeft text-white">
                          <div class="pt-3">
                            <h3 class="mt-3 mb-2 font-weight-bold" style="color:#FBBF5B">SIGN UP</h3>
                          </div>
                          <div style="padding: 20px;">
                            <label for="email">Email</label>
                            <input class="form-control mb-2" type="password" id="email" name="email">
                            <label for="pass">Password</label>
                            <input class="form-control mb-2" type="password" id="pass" name="pass">
                            <label for="repass">Re-type Password</label>
                            <input class="form-control mb-2" type="password" id="repass" name="repass">
                          </div>
                          <div class="mt-2">
                              <button type="submit" class="btn button-rpeach font-weight-bold mb-2" style="border: 0px; color:#682B5F; font-size: 12pt; height: 50px; width: 140px; border-radius: 50px;">Sign Up</button>
                              <p style="font-size: 12px;">Sudah memiliki akun? <a href="login.html"><span class="font-weight-bold" style="color:#FBBF5B">Masuk</span></a></p>
                            </div>
                      </div>
                    </form>
              </div>
          </div>
          <div class="row mt-5"></div>
            
            <script src="validation.js"></script>
      
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
  </div>
</body>
</html>

