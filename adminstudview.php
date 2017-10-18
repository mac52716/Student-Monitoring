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
<div class="controls"><div style="text-align: center;"><span style="width: 100%;">STUDENT INFORMATION SHEETS</span>
</div>
</div>
<div style="width: 100%; height: 300px;">
<?php
include('viewselectedstud.php');
?>
</div>
<table style="width: 100%; margin-top: 2px; border-collapse: collapse;">
<tr>
<!--<td style="text-align: center;">Code</td>
<td style="text-align: center;">Subject</td>
<td style="text-align: center;">Grades</td>
<td style="text-align: center;">Remarks</td>
<td style="text-align: center;">Teacher</td>
</tr>-->
<?php
//include('viewsub.php');
?>
</table>
</div>
</div>
<div class="footer"></div>
</div>
</body>
</html>