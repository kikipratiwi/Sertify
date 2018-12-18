<?php
    session_start();
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
<?php require'header.php' ?>
  <main id="content" class="font1">
    <div class="container-fluid">
      <!--Ini adalah tingkat 2-->
      <div class="row pt-5 mt-5"></div>
        <div class="row  pt-2 mt-2" style="margin-left:70px;">
            <div class="col-md-6">
             <img class="" src="assets/img/upload.png" alt="" style="width:700px;">
            </div>
            <div class="col-md-5">
              <div class="upload-box text-center ml-5" style="height:500px; margin-top:70px;">
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
                        <span class="" id="inputGroupFileAddon01">Upload File :</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" name="certificate_file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" style="width:400px;">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                      <div>
                        <button type="submit" name="upload" class="btn button-rpeach font-weight-bold" style="border-radius:50px; width: 140px; font-size: 12pt; margin-top:30px;">Submit</button>
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