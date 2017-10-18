<?php
include('dbcon.php');
if(!empty($_SESSION["login_user"])){
	$level=$_SESSION['level'];
	if ($level == 1){
		$teacher = $_SESSION["login_user"];
		$result = $conn->query("SELECT studinfo.idno, lastname, firstname, age, yeargraduated, subjects.teacher, subject FROM studinfo JOIN subjects ON studinfo.idno=subjects.idno WHERE subjects.teacher LIKE '%".$teacher."%' ORDER BY studinfo.idno");
			
		while ($row = $result->fetch_assoc()){
			$idno = $row['idno'];
			$lastname = $row['lastname'];
			$firstname = $row['firstname']; 
			$subject = $row['subject'];
			$age = $row['age']; 
			$yeargraduated = $row['yeargraduated']; 
			  
			echo "<tr class='tr'>",
			"<td class='td' style='text-align: center;'>$idno</td>",
			"<td class='td'>$lastname</td>",
			"<td class='td'>$firstname</td>",
			"<td class='td'>$subject</td>",
			"<td class='td' style='text-align: center;'>$age</td>",
			"<td class='td' style='text-align: center;'>$yeargraduated</td>",
			"<td class='td' style='text-align: center;'><form action='viewstud.php' method='post' id='sellected'>
			<input name='idno' type='text' value='$idno' style='display:none;'>
			<input name='select' type='submit' value='SELECT' style='cursor: pointer;font-size:10px;font-family:verdana;'></td>",
			"</form></tr>";
		}
	}else{
		
		if (!empty($_REQUEST['search'])) {
				$keyword = $_POST['keyword'];
				if (!empty($_POST['filter'])) {
				$filter = $_POST['filter'];
				}else{
					$filter = 'idno';
				}
				$search = mysqli_real_escape_string($conn, $_REQUEST['search']);     

				$sql = "SELECT * FROM studinfo WHERE $filter LIKE '%".$keyword."%' ORDER by $filter ASC"; 
				$r_query = mysqli_query($conn, $sql); 

				while ($row = mysqli_fetch_array($r_query)){  
							$idno = $row['idno'];
							$lastname = $row['lastname'];
							$firstname = $row['firstname']; 
							$course = $row['course']; 
							$yeargraduated = $row['yeargraduated']; 
							//$section = $row['section']; 
							  
							echo "<tr class='tr'>",
							"<td class='td'><input type='checkbox' class='check' name='chkbox[]' value='$idno'></td></form>",
							"<td class='td' style='text-align: center;'>$idno</td>",
							"<td class='td'>$lastname</td>",
							"<td class='td'>$firstname</td>",
							"<td class='td' style='text-align: center;'>$course</td>",
							"<td class='td' style='text-align: center;'>$yeargraduated</td>",
							"<td class='td' style='text-align: center;'><form action='adminstudview.php' method='post' id='sellected'>
							<input name='idno' type='text' value='$idno' style='display:none;'>
							<input name='select' type='submit' value='SELECT' style='cursor: pointer;font-size:10px;font-family:verdana;'></td>",
							"</form></tr>";

				}

			}else{
				$result = $conn->query("SELECT * FROM studinfo ORDER by lastname ASC");
			
				while ($row = $result->fetch_assoc()){
					$idno = $row['idno'];
					$lastname = $row['lastname'];
					$firstname = $row['firstname']; 
					$course = $row['course']; 
					$yeargraduated = $row['yeargraduated']; 
					//$section = $row['section']; 
					  
					echo "<tr class='tr'>",
					"<td class='td'><input type='checkbox' class='check' name='chkbox[]' value='$idno'></td></form>",
					"<td class='td' style='text-align: center;'>$idno</td>",
					"<td class='td'>$lastname</td>",
					"<td class='td'>$firstname</td>",
					"<td class='td' style='text-align: center;'>$course</td>",
					"<td class='td' style='text-align: center;'>$yeargraduated</td>",
					"<td class='td' style='text-align: center;'><form action='adminstudview.php' method='post' id='sellected'>
					<input name='idno' type='text' value='$idno' style='display:none;'>
					<input name='select' type='submit' value='SELECT' style='cursor: pointer;font-size:10px;font-family:verdana;'></td>",
					"</form></tr>";
				}
			}
		
	}
}else{
	header("Location:index.php");
	exit;
}
?>