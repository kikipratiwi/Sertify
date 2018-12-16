<!--
Here, we write code for registration.
-->
<?php
	require_once('process/connection.php');
	$Email = $pass = '';
	$Email = $_POST['email'];
	$pass = $_POST['password'];
	$message = "invalid username or password";

	if ($_POST["password"] === $_POST["repass"]) {
		// success!
		$sql = "INSERT INTO users (email,password) VALUES ('$Email','$pass')";
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