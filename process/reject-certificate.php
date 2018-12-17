<?php
    include "connection.php";
    date_default_timezone_set("Asia/Jakarta");

    $id = $_POST['id'];
    // $id = 1;
    $status = $_POST['status'];
    $verified_at = (new \DateTime())->format('Y-m-d H:i:s');

    if ($status == "R") {
        $digital_signature = "-";
    } else {
        $digital_signature = $_POST["digital_signature"];
    }

    $query = "UPDATE certificates SET digital_signature = '$digital_signature',  status= '$status' , verified_at= '$verified_at' WHERE  id = '$id'";
    $execute = mysqli_query($conn,$query);

    if (!$execute) {
        echo "<h4> Update Failed </h4>";
    } else {
        header('location:../dashboard-corporate.php');
    }
?>