<?php
	require_once('process/connection.php');
	$Email = $pass = '';
	$id = $_POST['id'];
	$pass = $_POST['password'];
	$message = "invalid username or password";

	if ($_POST["password"] === $_POST["confirm_password"]) {
		// success!
		$sql = "INSERT INTO agencies (ID,password) VALUES ('$id','$pass')";
		$result = mysqli_query($conn, $sql);
		
		if($result){header("Location: login.php");}
		else {echo "Error :".$sql;}
	}else {
		// failed :(
		echo    "<script type='text/javascript'>
					alert('$message');
					window.location.href='index.php';
				</script>";
	}
?>