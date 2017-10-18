<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge;IE=9;IE=8;IE=7">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ETEEAP</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
<div class="header3"><img src="img/don mariano logo.png" style="width: 125px; height: 120px;"><span style="position: absolute;top: 15px; font-family: Verdana; font-size: 40px; text-align: center; color: #009900;">DON MARIANO MARCOS MEMORIAL STATE UNVERSITY</span></div>
<div class="nav"><?php include('navigation.php'); ?></div>
<div class="content">
<div class="intro">
<form action="" id="formID" method="post">
<div class="controls" style='height: 22px;'>
<div style="text-align: right;"><span style="width: 100%;">SEARCH</span>
<select name='filter'>
<option value='' disabled selected>Select Filter</option>
<option value='idno'>ID</option>
<option value='lastname'>Last name</option>
<option value='firstname'>First name</option>
<option value='course'>COURSE</option>
<option value='yeargraduated'>YEAR GRAD</option>
</select>
<input type="text" name='keyword'/>
<input class="buttons" type="submit" name="search" value="SEARCH"/>
</div>
</div>
<div style="width: 100%; height: 470px;">
<table style="display: block; overflow: auto; height: 100%; width: 100%; margin-top: 2px; border-collapse: collapse;">
<tr>
<td style="width: 5px;"></td>
<th style="width: 50px;">ID</th>
<th style="width: 200px;">Last name</th>
<th style="width: 200px;">First name</th>
<th style="width: 150px;">COURSE</th>
<th style="width: 150px;">YEAR GRAD</th>
<th style="width: 75px;">ACTION</th>
</tr>
<?php
include('dbcon.php');

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

}
?>
</table>
</div>
</div>
</div>
<div class="footer"></div>
</div>
<script>
function dlte(){
//if ($("#formID input[type=checkbox]:checked").length){
    if (confirm("Are you sure you want to delete the selected record(s)?") == true) {
				document.getElementById('delete').type = "submit";
			}else{
			
			}
//}
//else
//{
   // none is checked
//}
}
</script>
</body>
</html>