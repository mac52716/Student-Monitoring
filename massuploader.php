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
<div class="content" style="height: 720px;">
<div class="intro">
<div class="controls"><div style="text-align: center;"><span style="width: 100%;">IMPORT STUDENTS INFORMATION</span>
</div>
</div>
<div style="width: 100%; height: 300px; text-align: center;">
<br>
<div style="height: 30px;">
<?php
if(!empty($_SESSION['upload'])){
	echo $_SESSION['upload'];
	
}
unset($_SESSION['upload']);
?>
</div>
<form action="massupload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="myfile"/>
	<br>
	<input type="submit" name="upload" value="Import"/>
</form>
<div>
<br>
<b>Format for importing Bulk Information, Maximum Line per Import is 1,000. Save your excel file as CSV(Comma delimited) or CSV only.</b>
<img src="img/sample upload.png" style="width: 870px; height: 100px;">
<br>
<br>
<img src="img/saveas.png" style="width: 400px; height: 300px;">
</div>
</div>
</div>
</div>
<div class="footer"></div>
</div>
</body>
</html>