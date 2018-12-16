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
      </div>
    <div class="row mb-4">
            <div class="sidebar col-xs-12 col-sm-4 col-lg-4 col-xl-3 center-align">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="box-1">
                                    <img src="assets/img//profile/human.jpg" alt="" class="picture">
                                    <div class="back-shape">
                                        <span class="sub-title font-weight-bold">Hello</span>
                                        <h3 class="title font-weight-bold"><?php echo $_SESSION['name']; ?></h3>
                                        <span class="sub-title font-weight-bold">Your Balance :</span>
                                        <p><span class="currency font-weight-bold">ETH  </span>   <span class="balance font-weight-bold">29.392.921</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="margin-top:500px; position: fixed">
                            <nav>                                    
                                <ul class="nav nav-pills flex-column sidebar-nav">
                                    <li class="nav-item"><a href="dashboard-status.php" class="nav-link active font-weight-bold"><em class="fa fa-dashboard"></em> Status </a></li>
                                    <li class="nav-item"><a href="dashboard-verified.php" class="nav-link font-weight-bold"><em class="fa fa-info"></em> Verified </a></li>
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
                                        <div class="card jumbotron">
                                            <h1 class="mb-4">Dashboard</h1>
                                            <p class="lead">Dashboard ini menyediakan segala informasi
                                                mengenai segala transaksi yang terjadi pada web ini.
                                            </p>
                                        </div>
                                        <div class="card mb-4">
                                            <div class="card-block">
                                                <h3 class="card-title">Statistik</h3>
                                                <div class="dropdown card-title-btn-container">
                                                    <button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
                                                    <button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
                                                        <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
                                                        <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
                                                </div>
                                                <h6 class="card-subtitle mb-2 text-muted">Latest traffic stats</h6>
                                                <div class="canvas-wrapper">
                                                    <canvas class="chart" id="line-chart" height="200" width="600"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-4">
                                            <div class="card-block">
                                                <h3 class="card-title">Pengajuan Terakhir</h3>
                                                <div class="dropdown card-title-btn-container">
                                                    <button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
                                                    <button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
                                                        <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
                                                        <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>No.Trsc</th>
                                                                <th>Sertifikat</th>
                                                                <th>Penerbit</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>0001</td>
                                                                <td>Product Name 1</td>
                                                                <td>Customer 1</td>
                                                                <td>Verified</td>
                                                            </tr>
                                                            <tr>
                                                                <td>0002</td>
                                                                <td>Product Name 2</td>
                                                                <td>Customer 2</td>
                                                                <td>Verified</td>
                                                            </tr>
                                                            <tr>
                                                                <td>0003</td>
                                                                <td>Product Name 3</td>
                                                                <td>Customer 3</td>
                                                                <td>Reject</td>
                                                            </tr>
                                                            <tr>
                                                                <td>0004</td>
                                                                <td>Product Name 4</td>
                                                                <td>Customer 4</td>
                                                                <td>Pending</td>
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