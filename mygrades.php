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
<form action="editpage.php" method="post">
<div class="controls">
<div style="text-align: center;">MY GRADES INFORMATION SHEET
</div>
</div>
<div style="width: 100%; height: 300px;">
<table style="width: 100%; margin-top: 2px; border: 1px solid black; border-collapse: collapse;">
<tr>
<th>CODE</th>
<th>SUBJECTS</th>
<th>GRADES</th>
<th>TEACHER</th>
<th>REMARKS</th>
</tr>
<?php
include('viewsub.php');
?>
</table>
</div>
</div>
</div>
<div class="footer"></div>
</div>
</body>
</html>