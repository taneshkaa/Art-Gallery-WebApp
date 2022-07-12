<!DOCTYPE html>
<html>
<head>
	<title>Registeration Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		* {
			box-sizing: border-box;
		}
		input[type=text], select, textarea {
			width: 100%;
			padding: 15px;
			border: 2px solid rgb(70,65,65)
			border-radius: 5px;
			resize: vertical;
		}
		input[type=number], select, textarea {
			width: 100%;
			padding: 15px;
			border: 2px solid rgb(70,65,65)
			border-radius: 5px;
			resize: vertical;
		}
		input[type=email], select, textarea {
			width: 100%;
			padding: 15px;
			border: 2px solid rgb(70,65,65)
			border-radius: 5px;
			resize: vertical;
		}
		input[type=password], select, textarea {
			width: 100%;
			padding: 15px;
			border: 2px solid rgb(70,65,65)
			border-radius: 5px;
			resize: vertical;
		}
		label {
			padding: 15px 15px 15px 0;
			display: inline-block;
		}
		input[type=submit] {
			background-color: rgb(35,115,160);
			color: white;
			padding: 15px 20px;
			border: none;
			cursor: pointer;
			float: left;
		}
		input[type=submit]: hover {
			background-color: #45a049;
		}
		.container {
			border-radius: 5px;
			padding: 20px;
		}
		.col-5 {
			float: left;
			width: 25%;
			margin-top: 5px;
		}
		.col-75 {
			float: left;
			width: 75%;
			margin-top: 5px;	
		}
		/*clear floats after the columns*/
		.row:after {
			content: " ";
			display: table;
			clear: both;
		}
		/* screen styling is done on the basis of screen atrea available (if less than 600px[wide], divide the columns; (stack up the columns one after the another*/
	</style>
</head>
<body>
	<h2>Registeration Page</h2>
	<form id="register" action="register.php", method="POST">
		<div class="row">
				<div class="col-25">
					<label for="Full Name"> FullName </label>
				</div>
				<div class="col-75">
					<input type="text" id="FullName" name="FullName", placeholder="FullName", required="required">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="Age"> Age </label>
				</div>
				<div class="col-75">
					<input type="number" id="Age" name="Age", placeholder="Age", required="required">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="EMail"> EMail </label>
				</div>
				<div class="col-75">
					<input type="email" id="EMail" name="EMail", placeholder="Valid E-Mail Address", required="required">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="Username"> Username </label>
				</div>
				<div class="col-75">
					<input type="text" id="Username" name="Username", placeholder="Create Username", required="required">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="Password"> Password </label>
				</div>
				<div class="col-75">
					<input type="password" id="Password" name="Password", placeholder="Create Password", required="required">
				</div>
			</div>
			<br>
		<input type="Submit" value="Register" />
		<br>
		<br>
		<br>
		<br>
		<div class="footer">
		<p><a style="color: navy" href="homepg.html"> Click Here to go to Previous Page </a> </p>
		<br>
		<hr>
		<div style="color: navy" class="panel-footer" text="right">
			<small>&copy; BBCorp.</small>
		</div>
	</div>
	</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

	//server connection...
	$conn = mysqli_connect("localhost", "root", "")
	or die(mysqli_error());
	//database connection...
	mysqli_select_db($conn, "bbcorp") or due("cannot connect to the database");
	if (isset($POST['register'])) {
	
		$FullName = mysqli_real_escape_string($conn, $_POST['FullName']);
		$Age = mysqli_real_escape_string($conn, $_POST['Age']);
		$EMail = mysqli_real_escape_string($conn, $_POST['EMail']);
		$Username = mysqli_real_escape_string($conn, $_POST['Username']);
		$Password = mysqli_real_escape_string($conn, $_POST['Password']);
		$bool =true;
	}

	$sql = "SELECT * from users";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		while($row = mysqli_fetch_array($result))
		{
			$table_users == $row['Username'];
			if ($Username == $table_users) {
				$bool = false;
				print '<script> alert("Username has been taken!"); </script>';
				//redirecting to register.php file
				print '<script>window.location.assign("register.php"); </script>';
			}
		}
		if($bool)
		{
			mysqli_query($conn, "INSERT INTO users(FullName, Age, EMail, Username, Password) VALUES('$FullName', '$Age', '$EMail', '$Username', '$Password')");
		}
		print '<script> alert("Successfully Registered!"); </script>'; 
		print '<script>window.location.assign("register.php"); </script>';
	}
	
}
?>