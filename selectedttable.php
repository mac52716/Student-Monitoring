<?php
include('dbcon.php');
	$studid=$_SESSION['idno'];
	
	$sqlquery = $conn->query("SELECT * FROM ttoa WHERE stud_id LIKE '$studid'");
		
			//$result=mysqli_query($conn,$sqlquery);
			//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

			$count=mysqli_num_rows($sqlquery);

			// If result matched $username and $password, table row must be 1 row
			if($count>0){
				
		while ($row = $sqlquery->fetch_assoc()){
			$stud_id = $row['stud_id'];
			$enrolment = $row['enrolment'];
			$personality = $row['personality'];
			$documentary = $row['documentary']; 
			$part2 = $row['part2']; 
			$worksite = $row['worksite']; 
			$submission = $row['submission'];
			$applied = $row['applied'];
			$reports = $row['reports'];
			$listo = $row['listo']; 
			$graduation = $row['graduation']; 
			$takeno = $row['takeno']; 
			$thesis = $row['thesis']; 
			  
			echo "<table style='width: 600px; margin: 20px auto; border-collapse: collapse; text-align: left;'>",
			"<tr>",
			"<td></td>",
			"</tr>",
			"<tr>",
			"<td>Enrolment</td>",
			"<td><input type='hidden' name='enrolment' value='$enrolment'>
			<input class='check' id='check1' type='checkbox' name='enrolment' value=''>
			<input class='datepicker' type='text' name='enrolment' value='$enrolment'></td>",
			"</tr>",
			"<tr>",
			"<td>Personality assessment exam</td>",
			"<td><input type='hidden' name='perasse' value='$personality'>
			<input class='check' id='check2' type='checkbox' name='perasse' value=''>
			<input class='datepicker' type='text' name='perasse' value='$personality'></td>",
			"</tr>",
			"<tr>",
			"<td>Documentary evaluation / panel interview</td>",
			"<td><input type='hidden' name='doceval' value='$documentary'>
			<input class='check' id='check3' type='checkbox' name='doceval' value=''>
			<input class='datepicker' type='text' name='doceval' value='$documentary'></td>",
			"</tr>",
			"<tr>",
			"<td>Part II enrolment supplementary courses</td>",
			"<td><input type='hidden' name='part2' value='$part2'>
			<input class='check' id='check4' type='checkbox' name='part2' value=''>
			<input class='datepicker' type='text' name='part2' value='$part2'></td>",
			"</tr>",
			"<tr>",
			"<td>Work site visit project / skills demo</td>",
			"<td><input type='hidden' name='worksite' value='$worksite'>
			<input class='check' id='check5' type='checkbox' name='worksite' value=''>
			<input class='datepicker' type='text' name='worksite' value='$worksite'></td>",
			"</tr>",
			"<tr>",
			"<td>Submission of modules and other requirements</td>",
			"<td><input type='hidden' name='submodule' value='$submission'>
			<input class='check' id='check6' type='checkbox' name='submodule' value=''>
			<input class='datepicker' type='text' name='submodule' value='$submission'></td>",
			"</tr>",
			"<tr>",
			"<td>Applied for graduation</td>",
			"<td><input type='hidden' name='appgrad' value='$applied'>
			<input class='check' id='check7' type='checkbox' name='appgrad' value=''>
			<input class='datepicker' type='text' name='appgrad' value='$applied'></td>",
			"</tr>",
			"<tr>",
			"<td>Report on ratings</td>",
			"<td><input type='hidden' name='report' value='$reports'>
			<input class='check' id='check8' type='checkbox' name='report' value=''>
			<input class='datepicker' type='text' name='report' value='$reports'></td>",
			"</tr>",
			"<tr>",
			"<td>List of OTR</td>",
			"<td><input type='hidden' name='list' value='$listo'>
			<input class='check' id='check9' type='checkbox' name='list' value=''>
			<input class='datepicker' type='text' name='list' value='$listo'></td>",
			"</tr>",
			"<tr>",
			"<td>Graduation</td>",
			"<td><input type='hidden' name='grad' value='$graduation'>
			<input class='check' id='check10' type='checkbox' name='grad' value=''>
			<input class='datepicker' type='text' name='grad' value='$graduation'></td>",
			"</tr>",
			"<tr>",
			"<td>Taken OTR and Diploma</td>",
			"<td><input type='hidden' name='taken' value='$takeno'>
			<input class='check' id='check11' type='checkbox' name='taken' value=''>
			<input class='datepicker' type='text' name='taken' value='$takeno'></td>",
			"</tr>",
			"<tr>",
			"<td>Thesis defense</td>",
			"<td><input type='hidden' name='thesis' value='$thesis'>
			<input class='check' id='check12' type='checkbox' name='thesis' value=''>
			<input class='datepicker' type='text' name='thesis' value='$thesis'></td>",
			"</tr>",
			"</table>";
			
			}
		}else{
			
			echo "<table style='width: 600px; margin: 20px auto; border-collapse: collapse; text-align: left;'>",
			"<tr>",
			"<td></td>",
			"</tr>",
			"<tr>",
			"<td>Enrolment</td>",
			"<td><input class='check' type='checkbox' name='enrol'><input class='datepicker' type='text' name='enrolment'></td>",
			"</tr>",
			"<tr>",
			"<td>Personality assessment exam</td>",
			"<td><input class='check' type='checkbox' name='per'><input class='datepicker' type='text' name='perasse'></td>",
			"</tr>",
			"<tr>",
			"<td>Documentary evaluation / panel interview</td>",
			"<td><input class='check' type='checkbox' name='doc'><input class='datepicker' type='text' name='doceval'></td>",
			"</tr>",
			"<tr>",
			"<td>Part II enrolment supplementary courses</td>",
			"<td><input class='check' type='checkbox' name='part'><input class='datepicker' type='text' name='part2'></td>",
			"</tr>",
			"<tr>",
			"<td>Work site visit project / skills demo</td>",
			"<td><input class='check' type='checkbox' name='site'><input class='datepicker' type='text' name='worksite'></td>",
			"</tr>",
			"<tr>",
			"<td>Submission of modules and other requirements</td>",
			"<td><input class='check' type='checkbox' name='module'><input class='datepicker' type='text' name='submodule'></td>",
			"</tr>",
			"<tr>",
			"<td>Applied for graduation</td>",
			"<td><input class='check' type='checkbox' name='applied'><input class='datepicker' type='text' name='appgrad'></td>",
			"</tr>",
			"<tr>",
			"<td>Report on ratings</td>",
			"<td><input class='check' type='checkbox' name='rerat'><input class='datepicker' type='text' name='report'></td>",
			"</tr>",
			"<tr>",
			"<td>List of OTR</td>",
			"<td><input class='check' type='checkbox' name='lio'><input class='datepicker' type='text' name='list'></td>",
			"</tr>",
			"<tr>",
			"<td>Graduation</td>",
			"<td><input class='check' type='checkbox' name='gra'><input class='datepicker' type='text' name='grad'></td>",
			"</tr>",
			"<tr>",
			"<td>Taken OTR and Diploma</td>",
			"<td><input class='check' type='checkbox' name='tao'><input class='datepicker' type='text' name='taken'></td>",
			"</tr>",
			"<tr>",
			"<td>Thesis defense</td>",
			"<td><input class='check' type='checkbox' name='the'><input class='datepicker' type='text' name='thesis'></td>",
			"</tr>",
			"</table>";
		
}
?>