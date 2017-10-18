<?php
//session_start();
include('dbcon.php');
if(isset($_POST['edit'])){
if(!empty($_POST['chkbox'])) {
		$studid = $_POST['studid'];
		$certid = $_POST['chkbox'];
		//$_SESSION['idno'] = $idno;
			
			$result = $conn->query("SELECT * FROM certificates WHERE idno LIKE $certid");
    	while ($row = $result->fetch_assoc()) {
			$certino = $row['certino'];
			$certititle = $row['certititle'];
			$dateissued=$row['dateissued'];
			
			echo"<form action='updatecert.php' method='post'><input type='text' name='certid' value='$certid'>",
			"<tr>",
			"<td><input type='text' name='certino' value='$certino' required></td>",
			"<td><input type='text' name='certititle' value='$certititle' required></td>",
			"<td><input type='text' name='dateissued' value='$dateissued' required></td>",
			"</tr>",
			"</table>",
			"<div style='text-align: center; margin-top: 50px;'><input type='submit' class='buttons' name='submit' value='Submit'>",
			"<input type='button' class='buttons' onclick=location.href='certificates.php' name='cancel' value='Cancel'>",
			"</div>",
			"</form>";
		}
}
}else{
	if(isset($_POST['delete'])){
		if(!empty($_POST['chkbox'])) {
			$studid = $_POST['studid'];
			$certid = $_POST['chkbox'];
			
			$sql = "DELETE FROM certificates WHERE idno LIKE '$certid'";
		mysqli_query($conn, $sql);
		$conn->close();
		
		}
		header("Location: certificates.php");
		exit;
	}
}
?>