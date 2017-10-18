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
<h2 style="text-align: center;">Welcome to ETEEAP</h2>
<div style="width: 100%; height: 300px;">
<table id="tableId" style="margin: auto; border-collapse: collapse;  width: 800px;">
<tr>
<th colspan="7" style="border: solid 2px black;"><span id="tblhead"></span></th>
</tr>
<tr>
<td style="text-align: center;">ID NO</td>
<td style="text-align: center;">LAST NAME</td>
<td style="text-align: center;">FIRST NAME</td>
<td style="text-align: center;">AGE</td>
<td style="text-align: center;">YEAR GRADUATED</td>
<td style="text-align: center;">ACTION</td>
</tr>
<?php
include('dbcon.php');
$companyId = $_POST['companyId'];
$result = $conn->query("SELECT idno,age,lastname,firstname,yeargraduated FROM studinfo WHERE companyname LIKE '$companyId' ORDER by lastname ASC");
			
		while ($row = $result->fetch_assoc()){
			$idno = $row['idno'];
			$lastname = $row['lastname'];
			$firstname = $row['firstname']; 
			$age = $row['age']; 
			$yeargraduated = $row['yeargraduated']; 
			//$section = $row['section']; 
			  
			echo "<tr class='tr'>",
			"<td class='td' style='text-align: center;'>$idno</td>",
			"<td class='td'>$lastname</td>",
			"<td class='td'>$firstname</td>",
			"<td class='td' style='text-align: center;'>$age</td>",
			"<td class='td' style='text-align: center;'>$yeargraduated</td>",
			"<td class='td' style='text-align: center;'><form action='adminstudview.php' method='post' id='sellected'>
			<input name='idno' type='text' value='$idno' style='display:none;'>
			<input name='select' type='submit' value='SELECT' style='cursor: pointer;font-size:10px;font-family:verdana;'></td>",
			"</form></tr>";
		}
?>
</table>
<br>
</div>
</div>
</div>
<div class="footer"></div>
</div>
<script>
function getcookie(){
	//function getCookie(cname) {
    //var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
} 
	document.getElementById("tblhead").innerHTML = "STUDENTS FROM "  + getcookie();
//}
window.onload = getcookie();
</script>
</body>
</html>