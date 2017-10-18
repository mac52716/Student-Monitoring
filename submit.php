<?php
session_start();
include("dbcon.php");

date_default_timezone_set("Asia/Manila");
$datecreated=(date("M.d.y H:i"));
			
$studid=$_POST['studidno'];
$lastname=$_POST['lname'];
$firstname=$_POST['fname'];
$sqlquery = $conn->query("SELECT * FROM studinfo WHERE idno LIKE '$studid'");
$sqlquery2 = $conn->query("SELECT * FROM studinfo WHERE idno LIKE '$studid' AND lastname LIKE '$lastname'");
$sqlquery3 = $conn->query("SELECT * FROM studinfo WHERE idno LIKE '$studid' AND lastname LIKE '$lastname' AND firstname LIKE '$firstname'");
		
	//$result=mysqli_query($conn,$sqlquery);
	//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	$count=mysqli_num_rows($sqlquery);
	$count2=mysqli_num_rows($sqlquery2);
	$count3=mysqli_num_rows($sqlquery3);

	// If result matched $username and $password, table row must be 1 row
	if($count>0 && $count2>0 && $count3>0){
		$_SESSION['Msg'] = "<span style='color: red;'>ID number and Student information already exist!</span>";
		header("location: newstud.php");
		exit;
	}elseif($count>0){
		$_SESSION['Msg'] = "<span style='color: red;'>ID number already exist!</span>";
		header("location: newstud.php");
		exit;
	}else{
		if(isset($_POST['submit'])){
				$studid=$_POST['studidno'];
				$age=$_POST['age'];	
				$lastname=$_POST['lname'];
				$firstname=$_POST['fname'];
				$middlename=$_POST['mname'];
				$birthplace=$_POST['bplace'];
				$birthdate=$_POST['bdate'];
				$gender=$_POST['gender'];
				$civilstatus=$_POST['cvlstatus'];
				$emailadd=$_POST['emailadd'];
				$major=$_POST['major'];
				$CompanyName=$_POST['CompanyName'];
				$companyaddress=$_POST['address'].', '.$_POST['address2'];
				$position=$_POST['position'];
				$prevComp=$_POST['prevComp'];
				$prevCompAdd=$_POST['prevCompAdd'];
				$prevPosi=$_POST['prevPosi'];
				$yeargraduated=$_POST['yeargraduated'];
				$contactno=$_POST['contactno'];
				$course=$_POST['course'];
				
				if (!file_exists('profilepic')) {
					mkdir('profilepic', 0777, true);
				}
				$folder="profilepic/";
				$imagename=$_FILES['myimage']['name']; 
				move_uploaded_file($_FILES['myimage']['tmp_name'], "$folder".$_FILES['myimage']['name']);
				
				$sql = "INSERT INTO studinfo (idno,age,lastname,firstname,middlename,birthplace,birthdate,gender,civilstatus,emailAdd,major,
				companyname,companyaddress,position,prevComp,prevCompAdd,prevPosi,yeargraduated,contactno,course,datecreated,imagename,imagepath)
				VALUES ('".$studid."','".$age."','".$lastname."','".$firstname."','".$middlename."','".$birthplace."','".$birthdate."','".$gender."','".$civilstatus."',
				'".$emailadd."','".$major."','".$CompanyName."','".$companyaddress."','".$position."','".$prevComp."','".$prevCompAdd."','".$prevPosi."',
				'".$yeargraduated."','".$contactno."','".$course."','".$datecreated."','".$imagename."','".$folder."')";
				
				if ($conn->query($sql)=== TRUE){
					$_SESSION['Msg'] = "<span style='color: green;'>A new record have been saved.</span>";
					header("location: newstud.php");
					exit;
					}else{
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}

					$conn->close();
				}
	}
?>