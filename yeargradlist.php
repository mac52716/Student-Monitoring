<?php
include('dbcon.php');

$sql = $conn->query("SELECT DISTINCT yeargraduated FROM studinfo ORDER by yeargraduated ASC");
			
		while ($row = $sql->fetch_assoc()){
			$yeargraduated = $row['yeargraduated']; 
			  
			echo "<tr class='tr'>",
			//"<td class='td' style='text-align: center;'>$companyname</td>",
			"<td style='text-align: center; cursor: pointer;'>$yeargraduated</td>",
			"</tr>";
		}
?>