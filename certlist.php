<?php
include('dbcon.php');

	$studid=$_SESSION['idno'];
	
		$result = $conn->query("SELECT * FROM certificates WHERE studid LIKE '$studid' ORDER by studid ASC");
			
		while ($row = $result->fetch_assoc()){
			$certid = $row['idno'];
			$certino = $row['certino'];
			$certititle = $row['certititle'];
			$dateissued = $row['dateissued']; 
			$studid = $row['studid']; 
			//$yeargraduated = $row['yeargraduated']; 
			//$section = $row['section']; 
			  
			echo "<tr class='tr'>",
			"<td class='td'><input type='checkbox' name='chkbox' value='$certid'></td></form>",
			"<td class='td' style='text-align: center;'>$certino</td>",
			"<td class='td' style='text-align: center;'>$certititle</td>",
			"<td class='td' style='text-align: center;'>$dateissued</td>",
			"</tr>";
		}
?>