<?php
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST") {

	//server connection...
	$conn = mysqli_connect("localhost", "root", "")
	or die(mysqli_error());
	//database connection...
	mysqli_select_db($conn, "bbcorp") or due("cannot connect to the database");
	if (isset($POST['login'])) {
	
		$Username = mysqli_real_escape_string($conn, $_POST['Username']);
		$Password = mysqli_real_escape_string($conn, $_POST['Password']);
		$bool =true;
	}

	$sql = "SELECT * from cred";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		while($row = mysqli_fetch_array($result))
		{
			$table_users == $row['Username'];
			if ($Username == $table_users) {
				$bool = false;
				print '<script> alert("Username has been taken!"); </script>';
				//redirecting to register.php file
				print '<script>window.location.assign("login.php"); </script>';
			}
		}
		if($bool)
		{
			mysqli_query($conn, "INSERT INTO cred(Username, Password) VALUES('$Username', '$Password')");
		}
		print '<script> alert("Login Successful!"); </script>'; 
		print '<script>window.location.assign("interface.html"); </script>';
	}
}
?>