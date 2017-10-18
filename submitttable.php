<?php
session_start();
include("dbcon.php");
$studid=$_SESSION['idno'];
		
$sqlquery = $conn->query("SELECT * FROM ttoa WHERE stud_id LIKE '$studid'");
		
	//$result=mysqli_query($conn,$sqlquery);
	//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	$count=mysqli_num_rows($sqlquery);

	// If result matched $username and $password, table row must be 1 row
	if($count == 0){
				
		if(isset($_POST['save'])){
			$studid = $_SESSION['idno'];
			$enrolment = $_POST['enrolment'];	
			$perasse = $_POST['perasse'];
			$doceval = $_POST['doceval'];
			$part2 = $_POST['part2'];
			$worksite = $_POST['worksite'];	
			$submodule = $_POST['submodule'];
			$appgrad = $_POST['appgrad'];
			$report = $_POST['report'];
			$list = $_POST['list'];	
			$grad = $_POST['grad'];
			$taken = $_POST['taken'];
			$thesis = $_POST['thesis'];
			
			$sql = "INSERT INTO ttoa (stud_id,enrolment,personality,documentary,part2,worksite,submission,applied,reports,listo,graduation,takeno,thesis)
			VALUES ('".$studid."','".$enrolment."','".$perasse."','".$doceval."','".$part2."','".$worksite."','".$submodule."','".$appgrad."','".$report."',
			'".$list."','".$grad."','".$taken."','".$thesis."')";
			
			if ($conn->query($sql)=== TRUE){
				$_SESSION['Msg'] = "A Certificate has been added.";
				header("location: ttbleofact.php");
				exit;
				
				}else{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

				$conn->close();
						
		}
	
	}else{
		
		$studid = $_SESSION['idno'];
		$enrolment = $_POST['enrolment'];	
		$perasse = $_POST['perasse'];
		$doceval = $_POST['doceval'];
		$part2 = $_POST['part2'];
		$worksite = $_POST['worksite'];	
		$submodule = $_POST['submodule'];
		$appgrad = $_POST['appgrad'];
		$report = $_POST['report'];
		$list = $_POST['list'];	
		$grad = $_POST['grad'];
		$taken = $_POST['taken'];
		$thesis = $_POST['thesis'];

		$sql = "UPDATE ttoa set enrolment='".$enrolment."',personality='".$perasse."',documentary='".$doceval."',part2='".$part2."',
		worksite='".$worksite."',submission='".$submodule."',applied='".$appgrad."',reports='".$report."',listo='".$list."',
		graduation='".$grad."',takeno='".$taken."',thesis='".$thesis."'  WHERE stud_id=$studid";
		
		if ($conn->query($sql)=== TRUE){
			header("location: ttbleofact.php");
			exit;
		}else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		$conn->close();
	}
	
	if(isset($_POST['delete'])){
		$studid = $_SESSION['idno'];
		$enrolment = $_POST['enrolment'];	
		$perasse = $_POST['perasse'];
		$doceval = $_POST['doceval'];
		$part2 = $_POST['part2'];
		$worksite = $_POST['worksite'];	
		$submodule = $_POST['submodule'];
		$appgrad = $_POST['appgrad'];
		$report = $_POST['report'];
		$list = $_POST['list'];	
		$grad = $_POST['grad'];
		$taken = $_POST['taken'];
		$thesis = $_POST['thesis'];
			
			$sql = "UPDATE ttoa set enrolment='".$enrolment."',personality='".$perasse."',documentary='".$doceval."',part2='".$part2."',
			worksite='".$worksite."',submission='".$submodule."',applied='".$appgrad."',reports='".$report."',listo='".$list."',
			graduation='".$grad."',takeno='".$taken."',thesis='".$thesis."'  WHERE stud_id=$studid";
			
			if ($conn->query($sql)=== TRUE){
				$_SESSION['Msg'] = "A Certificate has been added.";
				header("location: ttbleofact.php");
				exit;
				}else{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

				$conn->close();
						
		}
?>