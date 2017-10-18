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
<form action="editpage.php" id="formID" method="post">
<div class="controls">
<div style="text-align: right;">STUDENTS LIST
<input class="buttons" type="button" onclick="location.href='newstud.php'" value="ADD"/>
<input class="buttons" type="submit" name="edit" value="EDIT"/>
<input class="buttons" id="delete" type="button" onclick="dlte()" name="delete" value="DELETE"/>
SEARCH
<select name='filter'>
<option value='' disabled selected>Select Filter</option>
<option value='idno'>ID</option>
<option value='lastname'>Last name</option>
<option value='firstname'>First name</option>
<option value='course'>COURSE</option>
<option value='yeargraduated'>YEAR GRAD</option>
</select>
<input type="text" name='keyword'/>
<input class="buttons" onclick="srch()" id="bttnsearch" type="button" name="search" value="SEARCH"/>
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
include('studlist.php');
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

function srch(){
	alert('asd');
	document.getElementById('formID').action = '';
	document.getElementById('bttnsearch').type = 'submit';
}
</script>
</body>
</html>