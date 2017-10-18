<?php
session_start();
include("dbcon.php");
			
if(isset($_POST['submit'])){
	$certid = $_POST['certid'];
	$certino = $_POST['certino'];
	$certititle = $_POST['certititle'];
	$dateissued=$_POST['dateissued'];

		$sql = "UPDATE certificates set certino='".$certino."', certititle='".$certititle."', dateissued='".$dateissued."'  WHERE idno=$certid";
		
	if ($conn->query($sql)=== TRUE){
		header("location: certificates.php");
		exit;
	}else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$conn->close();
}
?>