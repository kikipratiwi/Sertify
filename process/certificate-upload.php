<?php

include "connection.php";

date_default_timezone_set("Asia/Jakarta");
 	
if(isset($_POST['upload'])){
    $valid_extension = array('pdf');

    $file_name = $_FILES['certificate_file']['name'];
    $file_size = $_FILES['certificate_file']['size'];
    $file_tmp = $_FILES['certificate_file']['tmp_name'];
    
    $x = explode('.', $file_name);
    $extension = strtolower(end($x));

    $user_id = $_POST['user_id'];
    $number = $_POST['certificate_number'];
    $agency = $_POST['agency'];

    $date = (new \DateTime())->format('YmdHis');
    $newfilename = $user_id.'-'.$date.'_certificate.' . $extension;
    $directory_path = '../assets/data/users/certificates/';

    if(in_array($extension, $valid_extension) === true){
        if($file_size < 1044070){
            move_uploaded_file($file_tmp, $directory_path . $newfilename);

            $insert = "INSERT INTO certificates (user_id,number,file_name,agency_id,verified_at) 
                        VALUES ($user_id,'$number','$newfilename',$agency,'0000-00-00 00:00:00')";
            $query = mysqli_query($conn, $insert);

            if($query){
                
                echo '<script language="javascript">';
                echo 'alert("Data berhasil diupload")';
                echo '</script>';
                echo 'hehe';

                // header('location:../dashboard-pending.php');
            } else {
                echo 'GAGAL MENGUPLOAD FILE';
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DIUPLOAD TIDAK DIPERBOLEHKAN';
    }
}

// header('location:../index.html');

?>