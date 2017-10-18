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
<div class="header3"><img src="img/don mariano logo.png" style="width: 125px; height: 120px;"></div>
<div class="nav"><?php include('navigation.php'); ?></div>
<div class="content">
<div class="intro">
<div class="controls"><div style="text-align: center;"><span style="width: 100%;">Enroll subjects</span>
</div>
</div>
<form action="savesubject.php" method="post">
<div style="margin: 100px auto 0px auto; width: 300px;">
<table style="width: 100%; border-collapse: collapse;">
<tr>
<td>Code</td>
<td><input type="text" name="code" required></td>
</tr>
<tr>
<td>Subject</td>
<td><input type="text" name="subject"required></td>
</tr>
<tr>
<td>Teacher</td>
<td><select type="text" name="teacher" required>
<option value="" disabled selected>Select teacher</option>
<?php
include('teacher.php');
?>
</td>
</tr>
<tr>
<td style="display: none;">Grades</td>
<td style="display: none;"><input type="text" name="grades" required></td>
</tr>
<tr>
<td style="width: 35px; display: none;">Remarks</td>
<td style="display: none;"><input type="text" name="remarks" required></td>
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
<div style="text-align: center; margin-top: 50px;"><input type="submit" class="buttons" name="submit" value="Submit">
<input type="button" class="buttons" onclick="location.href='administration.php'" name="cancel" value="Cancel">
</div>
</div>
</form>
</div>
</div>
<div class="footer"></div>
</div>
</body>
</html>