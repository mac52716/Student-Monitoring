<?php
session_start();
include("dbcon.php");
			
if(isset($_POST['submit'])){
				$certno=$_POST['certno'];	
				$certtitle=$_POST['certtitle'];
				$dateissued=$_POST['dateissued'];
				$studid=$_SESSION['idno'];
				
				$sql = "INSERT INTO certificates (certino,certititle,dateissued,studid)
				VALUES ('".$certno."','".$certtitle."','".$dateissued."','".$studid."')";
				
				if ($conn->query($sql)=== TRUE){
					$_SESSION['Msg'] = "A Certificate has been added.";
					header("location: addcerti.php");
					exit;
					}else{
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}

					$conn->close();
				}
?>