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
</head>
<body>
    <!-- Header -->
    <div class="row mb-4">
            <div class="sidebar col-xs-12 col-sm-4 col-lg-4 col-xl-3 center-align">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="box-1">
                                    <img src="assets/img//profile/human.jpg" alt="" class="picture">
                                    <div class="back-shape">
                                        <span class="sub-title font-weight-bold">Hello</span>
                                        <h3 class="title font-weight-bold">Mazid Ahmad</h3>
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
                                    <li class="nav-item"><a href="dashboard-status.html" class="nav-link font-weight-bold"><em class="fa fa-dashboard"></em> Status </a></li>
                                    <li class="nav-item"><a href="dashboard-verified.html" class="nav-link font-weight-bold"><em class="fa fa-info"></em> Verified </a></li>
                                    <li class="nav-item"><a href="dashboard-rejected.html" class="nav-link active font-weight-bold"><em class="fa fa-times-circle"></em> Reject </a></li>
                                    <li class="nav-item"><a href="dashboard-pending.html" class="nav-link font-weight-bold"><em class="fa fa-pause"></em> Pending </a></li>
                                </ul>
                            </nav>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-lg-8 col-xl-9 pt-3 pl-4 pr-5" style="margin-top:50px;">
                        <table id="example" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nomor Sertifikat</th>
                                        <th>Digital Signature</th>
                                        <th>Instansi</th>
                                        <th>Upload date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>001/A201/20180102/SJ</td>
                                        <td>0xe8102n98x923819l144e24441238djf809109</td>
                                        <td>Polban</td>
                                        <td>2011/04/25</td>
                                        <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">Copy</button></td>
                                    </tr>
                                    <tr>
                                        <td>001/A201/20180102/SJ</td>
                                        <td>0xe8102n98x923819l144e24441238djf809109</td>
                                        <td>Polban</td>
                                        <td>2011/04/25</td>
                                        <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">Copy</button></td>
                                    </tr>
                                    <tr>
                                        <td>001/A201/20180102/SJ</td>
                                        <td>0xe8102n98x923819l144e24441238djf809109</td>
                                        <td>Polban</td>
                                        <td>2011/04/25</td>
                                        <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">Copy</button></td>
                                    </tr>
                                    <tr>
                                        <td>001/A201/20180102/SJ</td>
                                        <td>0xe8102n98x923819l144e24441238djf809109</td>
                                        <td>Polban</td>
                                        <td>2011/04/25</td>
                                        <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">Copy</button></td>
                                    </tr>
                                    <tr>
                                        <td>001/A201/20180102/SJ</td>
                                        <td>0xe8102n98x923819l144e24441238djf809109</td>
                                        <td>Polban</td>
                                        <td>2011/04/25</td>
                                        <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">Copy</button></td>
                                    </tr>
                                    <tr>
                                        <td>001/A201/20180102/SJ</td>
                                        <td>0xe8102n98x923819l144e24441238djf809109</td>
                                        <td>Polban</td>
                                        <td>2011/04/25</td>
                                        <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">Copy</button></td>
                                    </tr>
                                    <tr>
                                        <td>001/A201/20180102/SJ</td>
                                        <td>0xe8102n98x923819l144e24441238djf809109</td>
                                        <td>Polban</td>
                                        <td>2011/04/25</td>
                                        <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">Copy</button></td>
                                    </tr>
                                    <tr>
                                        <td>001/A201/20180102/SJ</td>
                                        <td>0xe8102n98x923819l144e24441238djf809109</td>
                                        <td>Polban</td>
                                        <td>2011/04/25</td>
                                        <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">Copy</button></td>
                                    </tr>
                                    <tr>
                                        <td>001/A201/20180102/SJ</td>
                                        <td>0xe8102n98x923819l144e24441238djf809109</td>
                                        <td>Polban</td>
                                        <td>2011/04/25</td>
                                        <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">Copy</button></td>
                                    </tr>
                                    <tr>
                                        <td>001/A201/20180102/SJ</td>
                                        <td>0xe8102n98x923819l144e24441238djf809109</td>
                                        <td>Polban</td>
                                        <td>2011/04/25</td>
                                        <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">Copy</button></td>
                                    </tr>
                                    <tr>
                                        <td>001/A201/20180102/SJ</td>
                                        <td>0xe8102n98x923819l144e24441238djf809109</td>
                                        <td>Polban</td>
                                        <td>2011/04/25</td>
                                        <td><button type="button" class="btn btn-info btn-sm btn-block button-rpeach font-weight-bold" style="border-radius:50px;" data-toggle="modal" data-target="#exampleModalLong">Copy</button></td>
                                    </tr>
                        </table>
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