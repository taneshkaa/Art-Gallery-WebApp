<!DOCTYPE html>
<html>
<head>
	<title>FeedBack</title>
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
		input[type=email], select, textarea {
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
	<h2>FeedBack Section</h2>
	<p>Your Reviews Matter to Us! <br> Help us in our Journey to Grow and Get Better.</p>
	<div class="container">
		<form id="feedback", action="feedback.php", method="POST">
			<div class="row">
				<div class="col-25">
					<label for="Name"> Full Name </label>
				</div>
				<div class="col-75">
					<input type="text" id="Name" name="Full Name", placeholder="Full Name", required="required">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="EMail"> EMail </label>
				</div>
				<div class="col-75">
					<input type="email" id="EMail" name="EMail", placeholder="Valid EMail Address", required="required">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="Rating"> Rating </label>
				</div>
				<div class="col-75">
					<input type="radio" id="star5" name="rate", value="5" />
					<label for="star5" title="text"> 5 stars </label>
					<input type="radio" id="star4" name="rate", value="4" />
					<label for="star4" title="text"> 4 stars </label>
					<input type="radio" id="star3" name="rate", value="3" />
					<label for="star3" title="text"> 3 stars </label>
					<input type="radio" id="star2" name="rate", value="2" />
					<label for="star2" title="text"> 2 stars </label>
					<input type="radio" id="star1" name="rate", value="1" />
					<label for="star1" title="text"> 1 star </label>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="feedback">FeedBack</label>
				</div>
				<div class="col-75">
					<textarea id="subject" name="subject", placeholder="Reviews", style="
					height: 200px;"> </textarea>
				</div>
				<br>
				<br>
			</div>
			<div class="row">
				<input type="submit" value="submit">
				<br>
				<br>
				<br>
				<br>
				<a style="text-decoration: underline;" href="interface.html"> Click Here to go to Previous Page </a> <br>
				<a style="text-decoration: underline;" href="homepg.html"> Click Here to go to Home Page </a>
			</div>

		</form>
		<br>
		<br>
		<div style="color: navy" class="panel-footer" text="right">
			<small>&copy; BBCorp.</small>
		</div>
	</div>
</body>
</html>

<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {

		//server connection...
		$conn = mysqli_connect("localhost", "root", "")
		or die(mysqli_error());
		//database connection...
		mysqli_select_db($conn, "bbcorp") or due("cannot connect to the database");
		if (isset($POST['feedback'])) {
		
			$FullName = mysqli_real_escape_string($conn, $_POST['FullName']);
			$EMail = mysqli_real_escape_string($conn, $_POST['EMail']);
			$Rating = mysqli_real_escape_string($conn, $_POST['Rating']);
			$Feedback = mysqli_real_escape_string($conn, $_POST['Feedback']);
		}

	mysqli_query($conn, "INSERT INTO feedback(FullName, Age, EMail, Username, Password) VALUES('$FullName', $EMail', '$Rating', '$Feedback')");

	print '<script> alert("Feedback Successfully Submitted!"); </script>'; 
	print '<script>window.location.assign("feedback.php"); </script>';
	
	}
	
?>