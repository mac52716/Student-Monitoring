<?php
//session_start();
include('dbcon.php');
	if(isset($_POST['delete'])){
		if(!empty($_POST['chkbox'])) {
			$idno = $_POST['chkbox'];
			
			$sql = "DELETE FROM infosheet WHERE idno LIKE '$idno'";
		mysqli_query($conn, $sql);
		$conn->close();
		
		}
		header("Location: informationsheet.php");
		exit;
	}
?>