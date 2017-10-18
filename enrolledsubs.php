<?php
session_start();
include ('dbcon.php');

$idno = $_SESSION['idno'];

 $check = "SELECT * FROM id$idno";
 $result = $conn->query($check);
if (!empty($result)){
	$_SESSION['table'] = 'id'.$idno.'';
	header("location: addsubject.php");
}else{
		$sql = "CREATE TABLE id$idno (
			item_no int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			idno int(11) NOT NULL
			code varchar(30) NULL,
			subject varchar(100) NULL,
			teacher varchar(100) NULL,
			grades varchar(15) NULL,
			remarks varchar(200) NULL,
			datetime varchar(15) NULL
			)";
			if ($conn->query($sql) === TRUE) {
				$_SESSION['table'] = 'id'.$idno.'';
				header("location: addsubject.php");
			}else{
				echo "Error creating table: " . $conn->error;
			}
}		

$conn->close();
?>