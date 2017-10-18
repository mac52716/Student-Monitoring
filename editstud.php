<?php
include('dbcon.php');
//$conns = new mysqli("localhost", "root", "", "howanalysis");

if(isset($_POST['edit'])){
if(!empty($_POST['chkbox'])) {
	$idno = $_POST['chkbox'];
	$_SESSION['idno'] = $idno;
}else{
 header("Location: administration.php");
 exit;
}

foreach($_POST['chkbox'] as $idno){
    	$result = $conn->query("SELECT * FROM studinfo WHERE idno LIKE $idno");
    	while ($row = $result->fetch_assoc()) {
			$imagepath = $row['imagepath'];
			$imagename = $row['imagename'];
			$age=$row['age'];
			$lastname=$row['lastname'];
			$firstname=$row['firstname'];
			$middlename=$row['middlename'];
			$birthplace=$row['birthplace'];
			$birthdate=$row['birthdate'];
			$gender=$row['gender'];
			$civilstatus=$row['civilstatus'];
			$emailadd=$row['emailAdd'];
			$major=$row['major'];
			$companyname=$row['companyname'];
			$companyaddress=$row['companyaddress'];
			$position=$row['position'];
			$prevComp=$row['prevComp'];
			$prevCompAdd=$row['prevCompAdd'];
			$prevPosi=$row['prevPosi'];
			$yeargraduated=$row['yeargraduated'];
			$contactno=$row['contactno'];
			$course=$row['course'];
			
			$_SESSION['imgname'] = $imagename;
			echo"<form action='updatestud.php' method='post' enctype='multipart/form-data'>",
			"<table style='font-size: 12px; width: 100%; margin-top: 2px;'>",
			"<tr>",
			"<td colspan='2'></td>",
			"<td>Stud IDno.:</td>",
			"<td><input style='width: 100px; type='text' name='studid' value='$idno'></td>",
			"</tr>",
			"<tr>",
			"<td style='width: 120px;'></td>",
			"<td rowspan='9'><img src='$imagepath/$imagename' style='width:150px;height:150px; alt='profile picture' class='profilepicture'></td>",
			"<td style='width: 110px;'>Last name :</td>",
			"<td style='width: 80px;'><input style='width: 100px; type='text' name='lastname' value='$lastname'></td>",
			"<td style='width: 145px;' rowspan='2'>Company name :</td>",
			"<td style='width: 80px;' rowspan='2'><textarea type='text' name='companyname' style='height: 50px; width: 100px; margin: 0px; resize: none;'>$companyname</textarea></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>First name :</td>",
			"<td style='font-size: 10px;'><input style='width: 100px; type='text' name='firstname' value='$firstname'></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>M.I. :</td>",
			"<td><input style='width: 100px; type='text' name='middlename' value='$middlename' minlength='1' maxlength='4'></td>",
			"<td>Company Address :</td>",
			"<td rowspan='2'><textarea type='text' name='companyaddress' style='height: 50px; width: 100px; margin: 0px; resize: none;'>$companyaddress</textarea></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Age :</td>",
			"<td><input style='width: 100px; type='text' name='age' value='$age' onkeypress='return isNumberKey(event)'></td>",
			"<td></td>",
			"<td></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Place of birth :</td>",
			"<td><input style='width: 100px; type='text' name='birthplace' value='$birthplace'></td>",
			"<td>Position :</td>",
			"<td><input style='width: 100px; type='text' name='position' value='$position'></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Date of birth :</td>",
			"<td><input style='width: 100px;' class='datepicker' type='text' name='birthdate' value='$birthdate' readonly></td>",
			"<td>Prev. Company name :</td>",
			"<td><input style='width: 100px; type='text' name='prevComp' value='$prevComp'></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Gender :</td>",
			"<td><input style='width: 100px; type='text' name='gender' value='$gender'></td>",
			"<td>Address :</td>",
			"<td><input style='width: 100px; type='text' name='prevCompAdd' value='$prevCompAdd'></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Civil status :</td>",
			"<td><input style='width: 100px; type='text' name='civilstatus' value='$civilstatus'></td>",
			"<td>Prev. Position :</td>",
			"<td><input style='width: 100px; type='text' name='prevPosi' value='$prevPosi'></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>E-mail Address :</td>",
			"<td><input style='width: 100px; type='text' name='emailadd' value='$emailadd'></td>",
			"<td>Course. :</td>",
			"<td><input style='width: 100px; type='text' name='course' value='$course'></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td><input type='file' name='myimage'></td>",
			"<td>Major :</td>",
			"<td><input style='width: 100px; type='text' name='major' value='$major'></td>",
			"<td>Year Graduated :</td>",
			"<td><input style='width: 100px; type='text' name='yeargraduated' value='$yeargraduated'></td>",
			"</tr>",
			"<tr>",
			"<td colspan='2'></td>",
			"<td>Contact no.:</td>",
			"<td><input style='width: 100px; type='text' name='contactno' value='$contactno' onkeypress='return isNumberKey(event)'></td>",
			"</tr>",
			"</table>",
			"<div style='margin-top: 20px; text-align: center;'><input type='submit' class='buttons' name='save' value='Save'>
			<input type='button' class='buttons' onclick=location.href='administration.php' name='cancel' value='Cancel'>
			</div><br><hr><br>";
		}
	}
}else{
	if(isset($_POST['delete'])){
		if(!empty($_POST['chkbox'])) {
			foreach($_POST['chkbox'] as $idno){
			//$idno = $_POST['chkbox'];
			
			$sql = "DELETE FROM studinfo WHERE idno LIKE $idno";
		mysqli_query($conn, $sql);
		}
		$conn->close();
		header("Location: administration.php");
		exit;
		//if ($conn->query($sql)=== TRUE){
		//			header("location: administration.php");
		//			exit;
		//			}else{
		//				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		//			}

					//$conn->close();
			//	}else{
 //header("Location: administration.php");
 //exit;
//}
		
	}
		
}
}
?>