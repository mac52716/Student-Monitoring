<?php
include('dbcon.php');

	$studid=$_SESSION['idno'];
	
		$result = $conn->query("SELECT * FROM infosheet WHERE idno LIKE '$studid' ORDER by idno ASC");
			
		while ($row = $result->fetch_assoc()){
			$idno = $row['idno'];
			$imagename = $row['imagename'];
			$imagepath = $row['imagepath'];
			//$yeargraduated = $row['yeargraduated']; 
			//$section = $row['section']; 
			  
			echo "<tr class='tr'>",
			"<td class='td'><input type='checkbox' name='chkbox' value='$idno'></td></form>",
			"<td class='td' style='text-align: center;'>$imagename</td>",
			"<td class='td' style='text-align: center;'><a href='$imagepath/$imagename' target='_blank'>Download</td>",
			"</tr>";
		}
?>