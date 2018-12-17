<?php
    $id = $_GET["id"];
    $conn = mysqli_connect("localhost", "root", "","db_sertify");
    if ($conn-> connect_error){
        die("Connection failed :".$conn-> connect_error);
    }
    $sql = "SELECT id, certificates.user_id,certificates.number,certificates.file_name from certificates where id = $id";
    $response = array();
    $posts = array();
    $result = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($result)) { 
      $userid=$row['user_id']; 
      $certificatenumber=$row['number'];
      $filename=$row['file_name']; 
    
      $posts[] = array('id'=>$id, 'user_id'=> $userid, 'certificate_number'=> $certificatenumber, 'file_name'=> $filename);
    } 
    
    $response['certificate'] = $posts;
    
    // $fp = fopen('certificate.json', 'w');
    // fwrite($fp, json_encode($response));
    // fclose($fp);

    $json = $response;
    $info = json_encode($json);
    $file = fopen('../assets/data/users/certificate.json','w+') or die("File not found");
    fwrite($file, $info);
    fclose($file);

    header('location:http://localhost:3000/certificate-generatesignature.html');
?> 