<?php
include('dbcon.php');
//$conns = new mysqli("localhost", "root", "", "howanalysis");

if(!empty($_SESSION["login_user"])){
	$level=$_SESSION['level'];	
	if ($level == 0){
		$idno = $_SESSION['idno'];
				
		$result = $conn->query("SELECT * FROM subjects WHERE idno LIKE '%".$idno."%'");
			
			if (!empty($result)){
				while ($row = $result->fetch_assoc()) {
					$code=$row['code'];
					$subject=$row['subject'];
					$grades=$row['grades'];
					$teacher=$row['teacher'];
					$remarks=$row['remarks'];

					echo"<tr>",
					"<td class='td'>$code</td>",
					"<td class='td'>$subject</td>",
					"<td class='td'>$grades</td>",
					"<td class='td'>$teacher</td>",
					"<td class='td'>$remarks</td>",
					"</tr>";
				}
			}else{
				echo"<tr>",
				"<td colspan='5' class='td' style='text-align: center; color: #ff4444;'>No subjects enrolled</td>",
				"</tr>";
			}
	}elseif($level == 1){
		$teacher = $_SESSION["login_user"];
		$result = $conn->query("SELECT studinfo.idno, subjects.teacher, code, subject, grades, remarks FROM studinfo JOIN subjects ON studinfo.idno=subjects.idno WHERE teacher LIKE '%".$teacher."%' AND subjects.idno LIKE '".$studid."' ORDER BY studinfo.idno");
		while ($row = $result->fetch_assoc()) {
					$code=$row['code'];
					$subject=$row['subject'];
					$grades=$row['grades'];
					$remarks=$row['remarks'];

					echo"<tr>",
					"<td class='td'>$code</td>",
					"<td class='td'>$subject</td>",
					"<td class='td'>$grades</td>",
					"<td class='td'>$remarks</td>",
					"<td class='td' style='text-align: center; width: 50px;'><form action='inputgrades.php' method='post' id='sellected'>
					<input name='idno' type='text' value='$idno' style='display:none;'>
					<input name='code' type='text' value='$code' style='display:none;'>
					<input name='select' type='submit' value='SELECT' style='cursor: pointer;font-size:10px;font-family:verdana;'></td>",
					"</form></tr>";
				}
	}else{
		if(isset($_POST['select'])){
			if(!empty($_POST['idno'])) {
				$idno=$_POST['idno'];
				
				$result = $conn->query("SELECT * FROM subjects WHERE idno LIKE '%".$idno."%'");
					$count=mysqli_num_rows($result);
					if ($count > 0){
						while ($row = $result->fetch_assoc()) {
							$code=$row['code'];
							$subject=$row['subject'];
							$grades=$row['grades'];
							$remarks=$row['remarks'];
							$teacher=$row['teacher'];

							echo"<tr>",
							"<td class='td'>$code</td>",
							"<td class='td'>$subject</td>",
							"<td class='td'>$grades</td>",
							"<td class='td'>$remarks</td>",
							"<td class='td'>$teacher</td>",
							"</tr>";
						}
					}else{
						echo"<tr>",
						"<td colspan='5' class='td' style='text-align: center; color: #ff4444;'>No subjects enrolled</td>",
						"</tr>";
					}
			}else{
			 header("Location: administration.php");
			 exit;
			}

		}
	
	}
}
?>
