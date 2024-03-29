<?php
    include "connection.php";
    date_default_timezone_set("Asia/Jakarta");

    $id = $_POST['certificate_id'];
    // $id = 1;
    $status = $_POST['status'];
    $user_id = $_POST['user_id'];
    // $user_id = 1;
    $verified_at = (new \DateTime())->format('Y-m-d H:i:s');

    if ($status == "R") {
        $digital_signature = "-";
    } else {
        $digital_signature = $_POST["digital_signature"];
    }

    $date = (new \DateTime())->format('YmdHis');
    $extension = "txt";
    $filename = $user_id.'-'.$date.'_digsignature.' . $extension;
    $directory_path = '../assets/data/users/digital_signatures/'.$filename;
    $file = @fopen($directory_path,"x");
    if($file)
    {
        fwrite($file,$digital_signature); 
        fclose($file); 
    }
    // echo $filename;

    $query = "UPDATE certificates SET digital_signature = '$filename',  status= '$status' , verified_at= '$verified_at' WHERE  id = '$id'";
    // echo $query;
    $execute = mysqli_query($conn,$query);

    if (!$execute) {
        echo "<h4> Update Failed </h4>";
    } else {
        header('location:../dashboard-corporate.php');
    }

?>