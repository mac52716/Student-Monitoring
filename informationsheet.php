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
<form action="delinfosheet.php" method="post">
<div class="controls">
<div style="text-align: right;"><span style="margin-right: 25%; width: 100%;">INFORMATION SHEET</span>
<input class="buttons" type="button" onclick="location.href='addinfosheet.php'" value="ADD"/>
<input class="buttons" type="button" id="delete" onclick="dlte()" name="delete" value="DELETE"/>
<input class="buttons" onclick="location.href='adminstudview.php'" type="button" name="back" value="BACK"/>
</div>
</div>
<div style="width: 100%; height: 300px;">
<table style="width: 100%; margin-top: 2px; border: 1px solid black; border-collapse: collapse;">
<tr>
<td style="width:5px;"></td>
<th>FILE NAME</th>
<th>ACTION</th>
</tr>
<?php
include('infosheetlist.php');
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