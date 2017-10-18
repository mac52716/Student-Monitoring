<?php
session_start();
include('dbcon.php');
if(isset($_POST['select'])){
			if(!empty($_POST['idno'])) {
				$idno=$_POST['idno'];
				$code=$_POST['code'];
				
				$result = $conn->query("SELECT * FROM subjects WHERE idno LIKE '%".$idno."%'");
					$count=mysqli_num_rows($result);
					if ($count > 0){
						while ($row = $result->fetch_assoc()) {
							$subject=$row['subject'];
							$grades=$row['grades'];
							$remarks=$row['remarks'];

						}
					}
			}
}
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
<div class="controls"><div style="text-align: center;"><span style="width: 100%;">Input Grades</span>
</div>
</div>
<form action="savegrades.php" method="post">
<div style="margin: 100px auto 0px auto; width: 350px;">
<table style="width: 100%; border-collapse: collapse;">
<tr>
<td style="width: 100px;">Code :</td>
<td><?php echo '<input type="text" name="code" value="'.$code.'" required readonly style="background-color: #d4d4d4;">' ?></td>
</tr>
<tr>
<td>Subject :</td>
<td><?php echo '<input type="text" name="subject" value="'.$subject.'" required readonly style="background-color: #d4d4d4;">'; ?></td>
</tr>
<tr>
<td>Grades :</td>
<td><?php echo '<input type="text" name="grades" value="'.$grades.'" required>' ?></td>
</tr>
<tr>
<td style="width: 35px;">Remarks :</td>
<td><?php echo '<input type="text" name="remarks" value="'.$remarks.'" required>' ?></td>
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
<input type="button" class="buttons" onclick="location.href='mystudents.php'" name="cancel" value="Cancel">
</div>
</div>
</form>
</div>
</div>
<div class="footer"></div>
</div>
</body>
</html>