<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
			padding: 25px;
		}
		.container {
			border-radius: 5px;
			padding: 20px;
		}
		.right{width:10%; float:right;}
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
	<h2>Login Page</h2>
	<form id="login" action="interface.html", method="POST">
		<div class="row">
				<div class="col-25">
					<label for="Username"> Username </label>
				</div>
				<div class="col-75">
					<input type="text" id="Username" name="Username", placeholder="Valid Username", required="required">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="EMail"> Password </label>
				</div>
				<div class="col-75">
					<input type="password" id="Password" name="Password", placeholder="Valid Password", required="required">
				</div>
			</div>
			<br>
		<input type="Submit" value="Login" />
		<br>
		<br>
		<br>
		<br>
		<div class="footer">
		<p><a style="color: navy" href="homepg.html"> Click Here to go to Home Page </a> </p>
		<hr>
		<div style="color: navy" class="panel-footer" text="right">
			<small>&copy; BBCorp.</small>
		</div>
	</div>
	</form>
</body>
</html>