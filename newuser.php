<?php
session_start();
include("dbcon.php");

date_default_timezone_set("Asia/Manila");
$datecreated=(date("M.d.y H:i"));
			
if(isset($_POST['submit'])){
	$idno = $_POST['myidno'];
	$password = md5($_POST['mypassword']);
	$lastname = $_POST['mylname'];
	$firstname = $_POST['myfname'];
	$level = $_POST['mylevel'];
	
	$sql = "INSERT INTO users (idno,password,lastname,firstname,level,datecreated)
	VALUES ('".$idno."','".$password."','".$lastname."','".$firstname."','".$level."','".$datecreated."')";
	
	if ($conn->query($sql)=== TRUE){
		$_SESSION['Msg'] = "New user account have been saved.";
		header("location: controls.php");
		exit;
		}else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		$conn->close();
}
?>