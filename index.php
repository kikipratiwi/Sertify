



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
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <!-- font Open Sans -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script src="main.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
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
                    <a class="ml-3 button-purple nav-link font-weight-bold" href="how.php" style="color:#FBBF5B">PELAJARI LEBIH LANJUT</a>
                </div>
                <div class="col-md-3">
                    <div style="margin-top:200px">
                      <!-- Ersaad -->
                          <div class="text-center signup animated fadeInLeft text-white">
                            <div class="pt-3">
                              <h3 class="mt-3 mb-2 font-weight-bold" style="color:#FBBF5B">SIGN UP</h3>
                            </div>
                            <div class="w3-row mt-2 ml-5" style="padding-left: 45px;">
                              <a href="javascript:void(0)" onclick="openCity(event, 'user-registration');" style="text-align:center;">
                                <div class="w3-third tablink w3-bottombar w3-border-red w3-padding" style="width:120px;">Pengguna</div>
                              </a>
                              <a href="javascript:void(0)" onclick="openCity(event, 'corporate-registration');" style="text-align:center;">
                                <div class="w3-third tablink w3-bottombar w3-padding" style="width:120px;">Perusahaan</div>
                              </a>
                            </div>
                            <form id="user-form" action="registration-user.php" method="POST">
                              <div id="user-registration" class="w3-container user w3-border-red">
                                <div style="padding: 20px;" >
                                  <label for="email">Email</label>
                                  <input class="form-control mb-2" type="email" id="mail" name="email" style="width:100%;">
                                  <label for="pass">Password</label>
                                  <input class="form-control mb-2" type="password" id="pass" name="password" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                                  <p style="font-size: 10px;">&nbsp; Min 8 Karakter, harus memiliki kombinasi dari huruf kapital, angka dan simbol</p>
                                  <label for="repass">Re-type Password</label>
                                  <input class="form-control mb-2" type="password" id="confirm password" name="confirm_password">
                                </div>
                                <div class="mt-2">
                                  <button type="submit" class="btn button-rpeach font-weight-bold mb-2" style="border: 0px; color:#682B5F; font-size: 12pt; height: 50px; width: 150px; border-radius: 50px;">Sign Up</button>
                                  <p style="font-size: 12px;">Sudah memiliki akun? <a routerLink="login"><span class="font-weight-bol" style="color:#FBBF5B">Login</span></a></p>
                                </div>
                              </div>
                            </form>
                            <form action="registration-corporate.php" method="POST">
                              <div id="corporate-registration" class="w3-container user" style="display:none">
                                <div style="padding: 20px;" >
                                  <label for="email">ID Perusahaan</label>
                                  <input class="form-control mb-2" type="text" id="email" name="email" style="width:100%;">
                                  <label for="pass">Password</label>
                                  <input class="form-control mb-2" type="password" id="pass" name="password" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                                  <p style="font-size: 10px;">&nbsp; Min 8 Karakter, harus memiliki kombinasi dari huruf kapital, angka dan simbol</p>
                                  <label for="repass">Re-type Password</label>
                                  <input class="form-control mb-2" type="password" id="confirm password" name="confirm_password">
                                </div>
                                <div class="mt-2">
                                  <button type="submit" class="btn button-rpeach font-weight-bold mb-2" style="border: 0px; color:#682B5F; font-size: 12pt; height: 50px; width: 150px; border-radius: 50px;">Sign Up</button>
                                  <p style="font-size: 12px;">Sudah memiliki akun? <a routerLink="login"><span class="font-weight-bol" style="color:#FBBF5B">Login</span></a></p>
                                </div>
                              </div>
                            </form>
                        </div>
                      </div>
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

     <script>
      function openCity(evt, userType) {
          var i, x, tablinks;
          x = document.getElementsByClassName("user");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
          }
          document.getElementById(userType).style.display = "block";
          evt.currentTarget.firstElementChild.className += " w3-border-red";
        }
    </script>
  </body>
</html>
