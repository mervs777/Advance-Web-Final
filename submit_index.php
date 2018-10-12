<?php 

$con=mysqli_connect('localhost','root','','webappdb');

if(!$con)
{
echo "Not connected to server";	
}

if(!mysqli_select_db($con,'webappdb'))
{
echo "Database not found";
}

$dte=$_POST['dte'];
$kg=$_POST['kilograms'];
$gm=$_POST['grams'];
$pnd=$_POST['pounds'];

$sql="INSERT INTO weighttable (kgrms,grms,pnds,startDate) VALUES ('$kg','$gm','$pnd','dte')";

if (!mysqli_query($con,$sql)) {
	echo "Error has occured";
}
else {
	echo "Data inserted successfully!";
}
header("refresh:0.5;url=index.php");





?>