<?php
include('dbcon.php');

$sql = $conn->query("SELECT DISTINCT companyname FROM studinfo ORDER by companyname ASC");
			
		while ($row = $sql->fetch_assoc()){
			$companyname = $row['companyname']; 
			  
			echo "<tr class='tr'>",
			"<td style='text-align: center; cursor: pointer;'>$companyname</td>",
			//"<td class='td' style='text-align: center;'>$yeargraduated</td>",
			"</tr>";
		}
?>