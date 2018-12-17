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
  <link rel="stylesheet" href="//bootswatch.com/4/darkly/bootstrap.min.css">
  <!-- Font Awesome -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
  <!-- font Open Sans -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script src="main.js"></script>
  <!-- Animate -->
  <link href="/css/animate.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- DataTable -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <!-- Header -->
    <div class="navbar navbar-expand-lg navbar-dark nav-gradient nav-size-md gap fixed-top">
  
  <!-- Logo Brand Navbar -->  
  <div class="col-xl-2">
    <a href="#" class="navbar-brand" style="margin-left:80px"><img style="height: 40px;" src="assets/img//sertify-logotype.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  </div>
    <!-- Navbar -->
    <div class="col-xl-7 d-flex justify-content-center margin-top-xs collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">
    
      </ul>
    </div>
    <!-- Button -->
        <ul class="col-xl-3 nav navbar-nav mt-4" style="margin-left:80px;">
            <?php
                if(!isset($_SESSION['login'])){
                    echo "<li class=\"nav-item\">
                    <a class=\"button-rpeach font-weight-bold nav-link\" href=\"login.php\">LOGIN</a>
                  </li>
                  <li>
                    <a class=\"button-rpeach font-weight-bold nav-link\" href=\"index.php\">SIGNUP</a>
                  </li>";
                }else {
                    echo "<li class=\"nav-item\">
                    <a class=\"button-rpeach font-weight-bold nav-link\" href=\"logout.php\">LOGOUT</a>
                    </li>";
                }
            ?>
          </ul>
  </div>    <div class="row mb-4">
            <div class="sidebar col-xs-12 col-sm-4 col-lg-4 col-xl-3 center-align" style="height:900px;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                            <div class="box-1">
                                    <img src="https://www.weact.org/wp-content/uploads/2016/10/Blank-profile.png" alt="" class="picture">
                                    <div class="back-shape-cor"><br>
                                        <span class="sub-title font-weight-bold">Hello</span>
                                        <h3 class="title font-weight-bold"><?php echo $_SESSION['name']; ?> </h3><br>
                                        <span class="sub-title font-weight-bold">ID Corporate</span>
                                        <h3 class="title font-weight-bold"><?php echo $_SESSION['id']; ?> </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="margin-top:500px; position: fixed">
                            <nav>                                    
                                <ul class="nav nav-pills flex-column sidebar-nav">
                                    <li class="nav-item"><a href="dashboard-status.php" class="nav-link active font-weight-bold" hidden><em class="fa fa-dashboard"></em> Status </a></li>
                                </ul>
                            </nav>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-lg-8 col-xl-9 pt-3 pl-4 pr-5" style="margin-top:100px;">
                    <main>
                        <section class="row">
                            <div class="col-sm-12">
                                <section class="row">
                                    <div class="col-md-12 col-lg-8">
                                        <div class="card mb-4" style="padding:30px;">
                                            <div class="card-block">
                                                <h3 class="card-title">Permohonan Pengajuan</h3>
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>NO.</th>
                                                                <th>Tanggal</th>
                                                                <th>No. Sertifikat</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $id = $_SESSION['id'];
                                                                $conn = mysqli_connect("localhost", "root", "","db_sertify");
                                                                if ($conn-> connect_error){
                                                                    die("Connection failed :".$conn-> connect_error);
                                                                }
                                                        $sql = "SELECT id,certificates.number as numb, upload_at from certificates where id = $id";
                                                        $result = $conn-> query($sql);
                                                        $nomor=0;
                                                        if($result-> num_rows > 0){
                                                            while ($row = $result-> fetch_assoc()){
                                                                $nomor++;
                                                                echo "<tr>
                                                                        <td>". $nomor. "</td>
                                                                        <td>". $row["numb"]. "</td>
                                                                        <td>". $row["upload_at"] ."</td>";
                                                              
                                                                echo "<td><a href='process/certificate_json.php?id=". $row["id"]. "'> <button class='button-rpeach' type='button' >VIEW</button></a></td></tr>";

                                                            }
                                                        }else {
                                                            echo "0 result";
                                                        }
                                                        $conn-> close();
                                                        ?>                                                             
                                                               </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </main>
                  </div>
    </div>
    <footer id="footer" class="page-footer unique-color-dark mt-4 fixed-bottom" style="height:35px;">
            <!--/.Footer Links-->
            <!-- Copyright-->
            <div class="footer-copyright py-2 text-center" style="font-size:10pt;">
              © 2018 Copyright:
              <a href="https://mail.google.com/mail/u/1/#inbox">
                <strong> B2</strong>
              </a>
            </div>
            <!--/.Copyright -->
        </footer>
</body>
</html>