<?php
    include "connection.php";
    date_default_timezone_set("Asia/Jakarta");

    $id = $_POST['no'];
    $status = $_POST['status'];
    $verified_at = DateTime())->format('Y-m-d H:i:s');

    if ($status == "R") {
        $digital_signature = "-";
    } else {
        $digital_signature = $_POST["digital_signature"];
    }

    if (!exec_update()) {
        echo "<h4> Update Failed </h4>";
    }

    function exec_update() {
        $query = "UPDATE certificates SET digital_signature = '$digital_signature',  status= '$status' , verified_at= '$verified_at' WHERE  id = '$id'";
        $execute = mysqli_query($conn,$query);

        return $execute;
    }

} 