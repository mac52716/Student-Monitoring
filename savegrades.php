<?php
session_start();
include("dbcon.php");

date_default_timezone_set("Asia/Manila");
$datecreated=(date("M.d.y H:i"));
//$table = $_SESSION['table'];
$idno = $_SESSION['idno'];
			
if(isset($_POST['submit'])){
				$code=$_POST['code'];
				$subject=$_POST['subject'];
				$grades=$_POST['grades'];
				$remarks=$_POST['remarks'];
				
				$sql = "UPDATE subjects SET grades='$grades', remarks='$remarks' WHERE idno='$idno' AND code='$code'";
				
				if ($conn->query($sql)=== TRUE){
					header("location: mystudents.php");
					exit;
					}else{
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}

					$conn->close();
				}
?>