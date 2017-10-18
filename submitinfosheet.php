<?php
session_start();
include("dbcon.php");
	
$studid=$_SESSION['idno'];
		
		if(isset($_POST['submit'])){
				
				if (!file_exists('infosheet')) {
					mkdir('infosheet', 0777, true);
				}
				$folder="infosheet/";
				$imagename=$_FILES['myimage']['name']; 
				move_uploaded_file($_FILES['myimage']['tmp_name'], "$folder".$_FILES['myimage']['name']);
				
				$sql = "INSERT INTO infosheet (idno,imagename,imagepath) VALUES ('".$studid."','".$imagename."','".$folder."')";
				
				if ($conn->query($sql)=== TRUE){
					$_SESSION['Msg'] = "<span style='color: green;'>New file has been saved.</span>";
					header("location: addinfosheet.php");
					exit;
					}else{
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}

					$conn->close();
				}
?>