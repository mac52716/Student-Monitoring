<?php
include('dbcon.php');
if(!empty($_SESSION["login_user"])){
	$level=$_SESSION['level'];
	if ($level == 1){
		if(isset($_POST['select'])){
if(!empty($_POST['idno'])) {
	$idno=$_POST['idno'];
	$_SESSION['idno'] = $idno;
}else{
 header("Location: mystudents.php");
 exit;
}

    	$result = $conn->query("SELECT * FROM studinfo WHERE idno LIKE $idno");
    	while ($row = $result->fetch_assoc()) {
			$idno=$row['idno'];
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
			$imagepath=$row['imagepath'];
			$imagename=$row['imagename'];

			echo"<table style='font-size: 12px; width: 100%; margin-top: 2px;'>",
			"<tr>",
			"<td colspan='2'></td>",
			"<td>Stud IDno.:</td>",
			"<td><input type='text' name='studidno' value='$idno' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td style='width: 140px;'></td>",
			"<td rowspan='10'><img src='$imagepath/$imagename' style='width:150px;height:150px; alt='profile picture' class='profilepicture'></td>",
			"<td style='width: 100px;'>Last name :</td>",
			"<td><input style='width: 120px;' type='text' value='$lastname' style='background-color: #f0f0f0;' readonly></td>",
			"<td style='width: 230px;'>Company name :</td>",
			"<td rowspan='2'><textarea type='text' style='width: 141px; resize: none;background-color: #f0f0f0;' readonly>$companyname</textarea></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='underconstruction.php'>ETEEAP APPLICATION FORM</a></td>",
			"<td>First name :</td>",
			"<td style='font-size: 10px;'><input type='text' value='$firstname' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='underconstruction.php'>DOCUMENT EVALUATION FORM</a></td>",
			"<td>Middle name :</td>",
			"<td><input type='text' value='$middlename' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Company address :</td>",
			"<td rowspan='2'><textarea type='text' style='width: 141px; resize: none;background-color: #f0f0f0;' readonly>$companyaddress</textarea></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='underconstruction.php'>PERSONALITY EXAM</a></td>",
			"<td>Age : </td>",
			"<td><input type='text' value='$age' style='background-color: #f0f0f0;' readonly></td>",
			"<td></td>",
			"<td></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='certificates.php'>TRAINING CERTIFICATES</a></td>",
			//"<td style='font-size: 10px;'><a href='addsubject.php'>ENROLL SUBJECTS</a></td>",
			"<td>Place of birth :</td>",
			"<td><input type='text' value='$birthplace' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Position :</td>",
			"<td><input type='text' value='$position' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='ttbleofact.php'>TIME TABLE OF ACTIVITIES</a></td>",
			"<td>Date of birth :</td>",
			"<td><input type='text' value='$birthdate' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Prev. Company name :</td>",
			"<td><input type='text' value='$prevComp' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Gender :</td>",
			"<td><input type='text' value='$gender' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Address :</td>",
			"<td><input type='text' value='$prevCompAdd' style='background-color: #f0f0f0;' readonly></td>",
			"<td></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Civil status :</td>",
			"<td><input type='text' value='$civilstatus' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Prev. Position :</td>",
			"<td><input type='text' value='$prevPosi' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Email Add.:</td>",
			"<td><input type='text' value='$emailadd' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Course. :</td>",
			"<td><input type='text' value='$course' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Major :</td>",
			"<td><input type='text' value='$major' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Year graduated :</td>",
			"<td><input type='text' value='$yeargraduated' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td colspan='2'></td>",
			"<td>Contact no.:</td>",
			"<td><input type='text' value='$contactno' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"</table>";
	}
}
	}else{
		if(isset($_POST['select'])){
if(!empty($_POST['idno'])) {
	$idno=$_POST['idno'];
	$_SESSION['idno'] = $idno;
}else{
 header("Location: administration.php");
 exit;
}

    	$result = $conn->query("SELECT * FROM studinfo WHERE idno LIKE $idno");
    	while ($row = $result->fetch_assoc()) {
			$idno=$row['idno'];
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
			$imagepath=$row['imagepath'];
			$imagename=$row['imagename'];

			echo"<table style='font-size: 12px; width: 100%; margin-top: 2px;'>",
			"<tr>",
			"<td colspan='2'></td>",
			"<td>Stud IDno.:</td>",
			"<td><input type='text' name='studidno' value='$idno' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td style='width: 120px;'></td>",
			"<td rowspan='10'><img src='$imagepath/$imagename' style='width:150px;height:150px; alt='profile picture' class='profilepicture'></td>",
			"<td style='width: 100px;'>Last name :</td>",
			"<td><input type='text' value='$lastname' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Company name :</td>",
			"<td rowspan='2'><textarea type='text' style='width: 141px; resize: none;background-color: #f0f0f0;' readonly>$companyname</textarea></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'></td>",
			"<td>First name :</td>",
			"<td style='font-size: 10px;'><input type='text' value='$firstname' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'></td>",
			"<td>Middle name :</td>",
			"<td><input type='text' value='$middlename' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Company address :</td>",
			"<td rowspan='2'><textarea type='text' style='width: 141px; resize: none;background-color: #f0f0f0;' readonly>$companyaddress</textarea></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='informationsheet.php'>INFORMATION SHEET</a></td>",
			"<td>Age : </td>",
			"<td><input type='text' value='$age' style='background-color: #f0f0f0;' readonly></td>",
			"<td></td>",
			"<td></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='certificates.php'>TRAINING CERTIFICATES</a></td>",
			//"<td style='font-size: 10px;'><a href='addsubject.php'>ENROLL SUBJECTS</a></td>",
			"<td>Place of birth :</td>",
			"<td><input type='text' value='$birthplace' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Position :</td>",
			"<td><input type='text' value='$position' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='ttbleofact.php'>TIME TABLE OF ACTIVITIES</a></td>",
			"<td>Date of birth :</td>",
			"<td><input type='text' value='$birthdate' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Prev. Company name :</td>",
			"<td><input type='text' value='$prevComp' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Gender :</td>",
			"<td><input type='text' value='$gender' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Address :</td>",
			"<td><input type='text' value='$prevCompAdd' style='background-color: #f0f0f0;' readonly></td>",
			"<td></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Civil status :</td>",
			"<td><input type='text' value='$civilstatus' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Prev. Position :</td>",
			"<td><input type='text' value='$prevPosi' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Email Add.:</td>",
			"<td><input type='text' value='$emailadd' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Course. :</td>",
			"<td><input type='text' value='$course' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Major :</td>",
			"<td><input type='text' value='$major' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Year graduated :</td>",
			"<td><input type='text' value='$yeargraduated' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td colspan='2'></td>",
			"<td>Contact no.:</td>",
			"<td><input type='text' value='$contactno' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"</table>";
	}
}else{
	$back = $_SESSION['idno'];
	$result = $conn->query("SELECT * FROM studinfo WHERE idno LIKE $back");
    	while ($row = $result->fetch_assoc()) {
			$idno=$row['idno'];
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
			$imagepath=$row['imagepath'];
			$imagename=$row['imagename'];

			echo"<table style='font-size: 12px; width: 100%; margin-top: 2px;'>",
			"<tr>",
			"<td colspan='2'></td>",
			"<td>Stud IDno.:</td>",
			"<td><input type='text' name='studidno' value='$idno' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td style='width: 120px;'></td>",
			"<td rowspan='10'><img src='$imagepath/$imagename' style='width:150px;height:150px; alt='profile picture' class='profilepicture'></td>",
			"<td style='width: 100px;'>Last name :</td>",
			"<td><input type='text' value='$lastname' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Company name :</td>",
			"<td rowspan='2'><textarea type='text' style='width: 141px; resize: none;background-color: #f0f0f0;' readonly>$companyname</textarea></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'></td>",
			"<td>First name :</td>",
			"<td style='font-size: 10px;'><input type='text' value='$firstname' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'></td>",
			"<td>Middle name :</td>",
			"<td><input type='text' value='$middlename' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Company address :</td>",
			"<td rowspan='2'><textarea type='text' style='width: 141px; resize: none;background-color: #f0f0f0;' readonly>$companyaddress</textarea></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='informationsheet.php'>INFORMATION SHEET</a></td>",
			"<td>Age : </td>",
			"<td><input type='text' value='$age' style='background-color: #f0f0f0;' readonly></td>",
			"<td></td>",
			"<td></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='certificates.php'>TRAINING CERTIFICATES</a></td>",
			//"<td style='font-size: 10px;'><a href='addsubject.php'>ENROLL SUBJECTS</a></td>",
			"<td>Place of birth :</td>",
			"<td><input type='text' value='$birthplace' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Position :</td>",
			"<td><input type='text' value='$position' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td style='font-size: 10px;'><a href='ttbleofact.php'>TIME TABLE OF ACTIVITIES</a></td>",
			"<td>Date of birth :</td>",
			"<td><input type='text' value='$birthdate' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Prev. Company name :</td>",
			"<td><input type='text' value='$prevComp' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Gender :</td>",
			"<td><input type='text' value='$gender' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Address :</td>",
			"<td><input type='text' value='$prevCompAdd' style='background-color: #f0f0f0;' readonly></td>",
			"<td></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Civil status :</td>",
			"<td><input type='text' value='$civilstatus' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Prev. Position :</td>",
			"<td><input type='text' value='$prevPosi' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Email Add.:</td>",
			"<td><input type='text' value='$emailadd' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Course. :</td>",
			"<td><input type='text' value='$course' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td></td>",
			"<td>Major :</td>",
			"<td><input type='text' value='$major' style='background-color: #f0f0f0;' readonly></td>",
			"<td>Year graduated :</td>",
			"<td><input type='text' value='$yeargraduated' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"<tr>",
			"<td colspan='2'></td>",
			"<td>Contact no.:</td>",
			"<td><input type='text' value='$contactno' style='background-color: #f0f0f0;' readonly></td>",
			"</tr>",
			"</table>";
}

	}
}
}
?>