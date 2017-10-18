<?php
session_start();
include("dbcon.php");

date_default_timezone_set("Asia/Manila");
$datecreated=(date("M.d.y H:i"));
			
if(isset($_POST['save'])){
	$idno = $_POST['studid'];
	$age=$_POST['age'];
	$lastname=$_POST['lastname'];
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$birthplace=$_POST['birthplace'];
	$birthdate=$_POST['birthdate'];
	$gender=$_POST['gender'];
	$civilstatus=$_POST['civilstatus'];
	$emailadd=$_POST['emailadd'];
	$major=$_POST['major'];
	$companyname=$_POST['companyname'];
	$companyaddress=$_POST['companyaddress'];
	$position=$_POST['position'];
	$prevComp=$_POST['prevComp'];
	$prevCompAdd=$_POST['prevCompAdd'];
	$prevPosi=$_POST['prevPosi'];
	$yeargraduated=$_POST['yeargraduated'];
	$contactno=$_POST['contactno'];
	$course=$_POST['course'];
	$folder="profilepic/";

	if (!file_exists('profilepic')) {
		mkdir('profilepic', 0777, true);
	}	
	if (!empty($_FILES['myimage']['tmp_name'])){
		$imagename=$_FILES['myimage']['name']; 
		echo $_FILES['myimage']['tmp_name'];
		move_uploaded_file($_FILES['myimage']['tmp_name'], "$folder".$_FILES['myimage']['name']);
	}else{
		$imagename=$_SESSION['imgname'];
		move_uploaded_file($_FILES['myimage']['tmp_name'], "$folder".$_FILES['myimage']['name']);
	}

		$sql = "UPDATE studinfo set age='".$age."', imagepath='".$folder."', imagename='".$imagename."', lastname='".$lastname."',
		firstname='".$firstname."', middlename='".$middlename."', birthplace='".$birthplace."', birthdate='".$birthdate."', gender='".$gender."',
		civilstatus='".$civilstatus."',	emailAdd='".$emailadd."', major='".$major."', companyname='".$companyname."',
		companyaddress='".$companyaddress."', position='".$position."', position='".$position."', prevComp='".$prevComp."', prevCompAdd='".$prevCompAdd."',
		prevPosi='".$prevPosi."', yeargraduated='".$yeargraduated."', contactno='".$contactno."', course='".$course."' WHERE idno=$idno";
		
	if ($conn->query($sql)=== TRUE){
		header("location: administration.php");
		exit;
	}else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$conn->close();
}
?>