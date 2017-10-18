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
				$teacher=$_POST['teacher'];
				
				$sql = "INSERT INTO subjects (idno,code,subject,grades,remarks,teacher,datetime)
				VALUES ('".$idno."','".$code."','".$subject."','".$grades."','".$remarks."','".$teacher."','".$datecreated."')";
				
				if ($conn->query($sql)=== TRUE){
					$_SESSION['Msg'] = "A new record have been saved.";
					header("location: addsubject.php");
					exit;
					}else{
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}

					$conn->close();
				}
?>