<?php
include('dbcon.php');
    	$result = $conn->query("SELECT firstname, lastname FROM users WHERE level = 1 ORDER by lastname ASC");
    	while ($row = $result->fetch_assoc()) {
                  $firstname = $row['firstname'];
				  $lastname = $row['lastname'];
				  $teacher = $firstname." ".$lastname;
                  echo '<option value="'.$teacher.'">'.$teacher.'</option>';
	}
?>