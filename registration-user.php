<?php
	require_once('process/connection.php');
	$Email = $pass = '';
	$mail = $_POST['email'];
	$pass = $_POST['password'];
	$message = "invalid username or password";

	if ($_POST["password"] === $_POST["confirm_password"]) {
		// success!
		$sql = "INSERT INTO users (email,password) VALUES ('$mail','$pass')";
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