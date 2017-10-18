<?php
include('dbcon.php');
if(!empty($_SESSION["login_user"])){
	$idno=$_SESSION['idno'];

    	$result = $conn->query("SELECT * FROM studinfo WHERE idno LIKE $idno");
    	while ($row = $result->fetch_assoc()) {
			$age=$row['age'];
			$lastname=$row['lastname'];
			$firstname=$row['firstname'];
			$middlename=$row['middlename'];
			$birthplace=$row['birthplace'];
			$birthdate=$row['birthdate'];
			$gender=$row['gender'];
			$civilstatus=$row['civilstatus'];
			$religion=$row['religion'];
			$nationality=$row['nationality'];
			$companyname=$row['companyname'];
			$companyaddress=$row['companyaddress'];
			$yeargraduated=$row['yeargraduated'];
			$contactno=$row['contactno'];
			$course=$row['course'];
			$imagepath=$row['imagepath'];
			$imagename=$row['imagename'];

			echo"<table style='font-size: 12px; width: 100%; margin-top: 2px;'>",
			"<tr>",
			"<td style='width: 140px;'></td>",
			"<td rowspan='10'><img src='$imagepath/$imagename' style='width:150px;height:150px; alt='profile picture' class='profilepicture'></td>",
			"<td>Age :</td>",
			"<td><input type='text' value='$age' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Company name :</td>",
			"<td><input type='text' value='$companyname' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='underconstruction.php'>ETEEAP APPLICATION FORM</a></td>",
			"<td>Last name :</td>",
			"<td><input type='text' value='$lastname' style='background-color: #f0f0f0;' readonly></td>",
			"<td rowspan='2'>Company address :</td>",
			"<td rowspan='2'><textarea type='text' style='width: 141px; resize: none; background-color: #f0f0f0;' readonly>$companyaddress</textarea></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='underconstruction.php'>DOCUMENT EVALUATION FORM</a></td>",
			"<td>First name :</td>",
			"<td style='font-size: 10px;'><input type='text' value='$firstname' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='underconstruction.php'>PERSONALITY EXAM</a></td>",
			"<td>Middle name :</td>",
			"<td><input type='text' value='$middlename' style='background-color: #f0f0f0;' readonly></td>",
			"<td></td>",
			"<td></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='underconstruction.php'>TRAINING CERTIFICATES</a></td>",
			"<td>Place of birth :</td>",
			"<td><input type='text' value='$birthplace' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'></td>",
			"<td>Date of birth :</td>",
			"<td><input type='text' value='$birthdate' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Gender :</td>",
			"<td><input type='text' value='$gender' style='background-color: #f0f0f0;' readonly></td>",
			"<td></td>",
			"<td></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Civil status :</td>",
			"<td><input type='text' value='$civilstatus' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Contact no.:</td>",
			"<td><input type='text' value='$contactno' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Religion :</td>",
			"<td><input type='text' value='$religion' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Course. :</td>",
			"<td><input type='text' value='$course' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Nationality :</td>",
			"<td><input type='text' value='$nationality' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Year :</td>",
			"</tr>",
			"</table>";
	}
}else{
 header("Location: home.php");
 exit;
}
?>