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
<div class="header3"><img src="img/don mariano logo.png" style="width: 125px; height: 120px;"><span style="position: absolute;top: 15px;
 font-family: Verdana; font-size: 40px; text-align: center; color: #009900;">DON MARIANO MARCOS MEMORIAL STATE UNVERSITY</span></div>
<div class="nav"><?php include('navigation.php'); ?></div>
<div class="content">
<div class="intro">
<div class="controls"><div style="text-align: center;"><span style="width: 100%;">STUDENT INFORMATION SHEETS</span>
</div>
</div>
<div style="width: 100%; height: 470px; display: block; overflow: auto;">
<?php
include('editstud.php');
?>
</div>
</div>
</div>
<div class="footer"></div>
</div>
<script>
//$( function() {
//    $( "#datepicker" ).datepicker({
 //   beforeShow: function(input, inst)
  //  {
   //     inst.dpDiv.css({marginTop: input.offsetHeight - 260, marginLeft: input.offsetWidth - 225});
    //}
	//});	
	
//});
$('.datepicker').datepick({dateFormat: 'y/mm/dd'});

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
</body>
</html>