<?php
    $host = 'localhost';
    $user = 'root';//adjust according to your mysql setting
    $pass = ''; //adjust according to your mysql setting, i use no password here
    $dbName = 'db_sertify';

    $conn = mysqli_connect($host, $user, $pass, $dbName)
        or die ("Connect Failed : ".mysqli_error());
?>