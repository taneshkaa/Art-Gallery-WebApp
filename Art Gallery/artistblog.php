<?php

$db=mysqli_connect("localhost", "root", "", "bbcorp");
if($db=== false) {
	die("Connection Failed!" .mysqli_connect_error());
}

$Name ="";
$ContactNo ="";
$File ="";
$AdditionalComments="";
if(isset($_POST['blog'])){
// Storing form values into PHP variables
$Name = $_POST['Name']; // Since method=”post” in the form
$ContactNo = $_POST['ContactNo'];
$File = $_POST['File'];
$AdditionalComments = $_POST['AdditionalComments'];
}

$query = "INSERT INTO artistblog(Name, ContactNo, File, AdditionalComments) VALUES('$Name', '$ContactNo', '$File', '$AdditionalComments')";
if (mysqli_query($db, $query))  {
	echo "Blog Successfully Submitted!";
} else {
	echo "ERROR in Submitting the Blog";
}
mysqli_close($db);

?> 

<!DOCTYPE html>
<html>
<body>
	<p><a style="font-size: 20px; text-decoration: underline;" href="interface.html"> Click Here to go back to Previous Page </a> </p>
</body>
</html>