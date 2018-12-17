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
            <div class="sidebar col-xs-12 col-sm-4 col-lg-4 col-xl-3 center-align" style="height:1000px;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="box-1">
                                    <img src="https://www.weact.org/wp-content/uploads/2016/10/Blank-profile.png" alt="" class="picture">
                                    <div class="back-shape"><br>
                                        <span class="sub-title font-weight-bold">Hello</span>
                                        <h3 class="title font-weight-bold"><?php echo $_SESSION['name']; ?> </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="margin-top:425px; position: fixed">
                            <nav>                                    
                                <ul class="nav nav-pills flex-column sidebar-nav">
                                    <li class="nav-item"><a href="dashboard-status.php" class="nav-link active font-weight-bold"><em class="fa fa-dashboard"></em> Status </a></li>
                                    <li class="nav-item"><a href="dashboard-verified.php" class="nav-link font-weight-bold"><em class="fa fa-info"></em> Verified </a></li>
                                    <li class="nav-item"><a href="dashboard-rejected.php" class="nav-link font-weight-bold"><em class="fa fa-times-circle"></em> Reject </a></li>
                                </ul>
                            </nav>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-lg-8 col-xl-9 pt-3 pl-4 pr-5" style="margin-top:70px;">
                    <main>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "db_sertify";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $id = $_SESSION['id'];
                    $sql = "SELECT certificates.id as id,
                    certificates.file_name as name,
                    agencies.name as penerbit,
                    certificates.status
                    FROM certificates, agencies
                    WHERE certificates.agency_id = agencies.id AND certificates.status = 'p' AND certificates.user_id = $id";
                    $result = mysqli_query($conn, $sql);
                ?>
                        <section class="row">
                            <div class="col-sm-12">
                                <section class="row">
                                    <div class="col-md-12 col-lg-8">
                                        <div class="card mb-4">
                                            <div class="card-block" style="margin:20px;">
                                                <h3 class="card-title">Sedang Diajukan</h3>
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
                                                        <?php
                                                            if (mysqli_num_rows($result) > 0) {
                                                                // output data of each row
                                                                while($row = mysqli_fetch_assoc($result)) {
                                                                    // echo "<br>". "id: " . $row["id"]. "<br> email : " . $row["email"]. "<br> name : " . $row["name"]. "<br><br>";

                                                            echo "
                                                                <tr>
                                                                    <td>" . $row["id"]. "</td>
                                                                    <td>" . $row["name"]. "</td>
                                                                    <td>" . $row["penerbit"]. "</td>
                                                                    <td>Pending</td>
                                                                </tr>";
                                                            }
                                                            } else {
                                                                echo "'0 results'";
                                                            }
                                                            
                                                            mysqli_close($conn);
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-4">
                                            <?php
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "db_sertify";

                                                // Create connection
                                                $conn = mysqli_connect($servername, $username, $password, $dbname);

                                                // Check connection
                                                if (!$conn) {
                                                    die("Connection failed: " . mysqli_connect_error());
                                                }
                                                $id = $_SESSION['id'];
                                                $sql = "SELECT certificates.id,
                                                certificates.file_name as name,
                                                agencies.name as penerbit,
                                                certificates.note
                                                FROM certificates, agencies
                                                WHERE certificates.agency_id = agencies.id AND certificates.user_id = $id";
                                                $result = mysqli_query($conn, $sql);
                                            ?>
                                            <div class="card-block" style="margin:20px;">
                                                <h3 class="card-title">Pengajuan Terakhir</h3>
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
                                                        <?php
                                                            if (mysqli_num_rows($result) > 0) {
                                                                // output data of each row
                                                                while($row = mysqli_fetch_assoc($result)) {
                                                                    // echo "<br>". "id: " . $row["id"]. "<br> email : " . $row["email"]. "<br> name : " . $row["name"]. "<br><br>";

                                                            echo "
                                                                <tr>
                                                                    <td>" . $row["id"]. "</td>
                                                                    <td>" . $row["name"]. "</td>
                                                                    <td>" . $row["penerbit"]. "</td>
                                                                    <td>" . $row["note"]. "</td>
                                                                </tr>";
                                                            }
                                                            } else {
                                                                echo "'0 results'";
                                                            }
                                                            
                                                            mysqli_close($conn);
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