<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge;IE=9;IE=8;IE=7">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.datepick.css">
<script type="text/javascript" src="js/jquery.plugin.js"></script> 
<script type="text/javascript" src="js/jquery.datepick.js"></script>
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
<form action="submit.php" method="post" enctype="multipart/form-data">
<div style="width: 100%; height: 300px;">
<table style="font-size: 12px; width: 100%; margin-top: 2px;">
<tr>
<td colspan="2"></td>
<td>Stud IDno.:</td>
<td><input type="text" name="studidno" onkeypress='return isNumberKey(event)' required></td>
</tr>
<tr>
<td style="width: 140px;"></td>
<td rowspan="9"><img src="img/don mariano logo.png" style="width: 150px; hight: 150px;" alt="profile picture" class="profilepicture"></td>
<td style="width: 140px;">Last name :</td>
<td  style="width: 100px;"><input type="text" name="lname" required></td>
<td rowspan="2" style="width: 230px;">Company name :</td>
<td rowspan="2" style="width: 100px;"><textarea type="text" name="CompanyName" style="width: 141px; resize: none;" required></textarea></td>
</tr>
<tr>
<td></td>
<td>First name :</td>
<td><input type="text" name="fname" required></td>
</tr>
<tr>
<td></td>
<td>M.I. :</td>
<td><input type="text" name="mname" minlength="1" maxlength="4" required></td>
<td>Company address :</td>
<td><input name="address" type="text" Placeholder="brgy/street" required></td>
</tr>
<tr>
<td></td>
<td>Age :</td>
<td><input id="" type="text" name="age" onkeypress='return isNumberKey(event)' required></td>
<td></td>
<td><input name="address2" type="text" Placeholder="Municipality/Province" required></td>
</tr>
<tr>
<td></td>
<td>Place of birth :</td>
<td><input type="text" name="bplace" required></td>
<td>Position :</td>
<td><input type="text" name="position" required></td>
</tr>
<tr>
<td></td>
<td>Date of birth :</td>
<td><input id="datepicker" type="text" name="bdate" readonly required></td>
<td>Prev. Company name :</td>
<td><input type="text" name="prevComp" style="width: 141px; resize: none;" ></td>
</tr>
<tr>
<td></td>
<td>Gender :</td>
<td><select name="gender" required>
<option value="MALE">MALE</option>
<option value="FEMALE">FEMALE</option>
</select></td>
<td>Address :</td>
<td><input name="prevCompAdd" type="text" ></td>
</tr>
<tr>
<td></td>
<td>Civil status :</td>
<td><select name="cvlstatus" required>
<option value="SINGLE">SINGLE</option>
<option value="MARRIED">SINGLE</option></td>
<td>Prev. Position :</td>
<td><input type="text" name="prevPosi" ></td>
</tr>
<tr>
<td></td>
<td>E-mail :</td>
<td><input type="text" name="emailadd" required></td>
<td>Course. :</td>
<td><input type="text" name="course" required></td>
</tr>
<tr>
<td></td>
<td><input type="file" name="myimage"></td>
<td>Major :</td>
<td><input type="text" name="major"required></td>
<td>Year graduated :</td>
<td><input type="text" name="yeargraduated" required></td>
</tr>
<tr>
<td colspan="2"></td>
<td>Contact no.:</td>
<td><input type="text" name="contactno" onkeypress='return isNumberKey(event)' required></td>
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
<input type="button" class="buttons" onclick="location.href='administration.php'" name="cancel" value="Cancel">
<input type="button" onclick="location.href='massuploader.php'" style="width: 100px;"class="buttons" name="submit" value="Mass Upload">
</div>
</form>
</div>
</div>
<div class="footer"></div>
</div>
<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="jquery-1.12.4.js"></script>
<script src="jquery-ui.js"></script>-->
<script>
//$( function() {
//    $( "#datepicker" ).datepicker({
 //   beforeShow: function(input, inst)
  //  {
   //     inst.dpDiv.css({marginTop: input.offsetHeight - 260, marginLeft: input.offsetWidth - 225});
    //}
	//});	
	
//});
$('#datepicker').datepick({dateFormat: 'y/mm/dd'});

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
</body>
</html>