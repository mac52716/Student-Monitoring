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
<div class="controls"><div style="text-align: center;"><span style="width: 100%;">ADD CERTIFICATE</span>
</div>
</div>
<form action="submitinfosheet.php" method="post" enctype="multipart/form-data">
<div style="width: 100%; height: 50px;">
<table style="font-size: 12px; width: 500px; margin: 50px auto 0px auto; text-align:center;">
<tr>
<th>SELECT FILE</th>
</tr>
<tr>
<td><hr></td>
</tr>
<tr>
<td><input type="file" name="myimage"></td>
</tr>
</table>
<div style="text-align: center; margin-top: 10px;">
<?php
if(!empty($_SESSION['Msg'])){
	echo $_SESSION['Msg'];
	
}
?>
</div>
<?php
	unset($_SESSION['Msg']);
?>
</div>
<div style="text-align: center; margin-top: 50px;"><input type="submit" class="buttons" name="submit" value="Submit">
<input type="button" class="buttons" onclick="location.href='informationsheet.php'" name="cancel" value="Cancel">
<!--<input type="button" onclick="location.href='massuploader.php'" style="width: 100px;"class="buttons" name="submit" value="Mass Upload">-->
</div>
</form>
</div>
</div>
<div class="footer"></div>
</div>
</body>
</html>