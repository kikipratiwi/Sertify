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
  <?php require'header.php' ?>

    <div class="row mb-4">
            <div class="sidebar col-xs-12 col-sm-4 col-lg-4 col-xl-3 center-align" style="height:900px;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="box-1">
                                    <img src="assets/img//profile/human.jpg" alt="" class="picture">
                                    <div class="back-shape">
                                        <span class="sub-title font-weight-bold">Corporate :</span>
                                        <h3 class="title font-weight-bold"><?php echo $_SESSION['name']; ?></h3>
                                        <span class="sub-title font-weight-bold">ID Corporate :</span>
                                        <p> <span class="balance font-weight-bold">192818237</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="margin-top:500px; position: fixed">
                            <nav>                                    
                                <ul class="nav nav-pills flex-column sidebar-nav">
                                    <li class="nav-item"><a href="dashboard-status.html" class="nav-link active font-weight-bold"><em class="fa fa-dashboard"></em> Status </a></li>
                                    <li class="nav-item"><a href="dashboard-verified.html" class="nav-link font-weight-bold"><em class="fa fa-info"></em> Verified </a></li>
                                    <li class="nav-item"><a href="dashboard-rejected.html" class="nav-link font-weight-bold"><em class="fa fa-times-circle"></em> Reject </a></li>
                                    <li class="nav-item"><a href="da" class="nav-link font-weight-bold"><em class="fa fa-pause"></em> Pending </a></li>
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
                                                                <th>Tanggal</th>
                                                                <th>Nama Pemohon</th>
                                                                <th>No. Sertifikat</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>0001</td>
                                                                <td>Product Name 1</td>
                                                                <td>Customer 1</td>
                                                                <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">VIEW</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>0002</td>
                                                                <td>Product Name 2</td>
                                                                <td>Customer 2</td>
                                                                <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">VIEW</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>0003</td>
                                                                <td>Product Name 3</td>
                                                                <td>Customer 3</td>
                                                                <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">VIEW</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>0004</td>
                                                                <td>Product Name 4</td>
                                                                <td>Customer 4</td>
                                                                <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">VIEW</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="card mb-4">
                                            <div class="card-block">
                                                <h3 class="card-title">Your Sertificate</h3>
                                                <h6 class="card-subtitle mb-2 text-muted">This sertificate</h6>
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