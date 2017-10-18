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
<div class="header">DON MARIANO MARCOS MEMORIAL STATE UNIVERSITY - ETEEAP</div>
<div style="width: 100%;">
<div class="header2">STUDENT INFORMATION SYSTEM</div>
<div style="text-align: center;">
<table style="margin: auto; overflow: hidden;">
<tr>
<td rowspan="5"><img src="img/don mariano logo.gif" alt="DMMSU logo" style="height: 200px; width: 200px;"></td>
</tr>
<tr>
<td>
<form action="authentication.php" method="post">
<table style="width: 250px; height: 250px; background-color: #c5c5c5; border-radius: 10px;">
<tr>
<td style="background-color: green; color: white; border-radius: 5px;">SIGN IN</td>
</tr>
<tr>
<td style="text-align: center;">
<input type="text" name="myusername" placeholder="User name" style="width: 200px; background-color: #f0f0f0; border-radius: 5px;" value="<?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['login_user']; } ?>"required></td>
</tr>
<tr>
<td style="text-align: center;">
<input type="password" name="mypassword" placeholder="Password" style="width: 200px; background-color: #f0f0f0; border-radius: 5px;" required></td>
</tr>
<tr>
<td style="text-align: center;color: maroon; height: 15px; font-size: 10px;"><?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
<?php unset($_SESSION['errMsg']);?></td>
</tr>
<tr>
<td style="text-align: center; "><input class="bttnlogin" type="submit" name="submit" value="Sign in"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
</div>
</div>
</body>
</html>