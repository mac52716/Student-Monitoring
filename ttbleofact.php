<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge;IE=9;IE=8;IE=7">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="widtd=device-widtd, initial-scale=1">
<script type="text/javascript" src="jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.datepick.css">
<script type="text/javascript" src="js/jquery.plugin.js"></script> 
<script type="text/javascript" src="js/jquery.datepick.js"></script>
<title>ETEEAP</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
<div class="header3"><img src="img/don mariano logo.png" style="widtd: 125px; height: 120px;"><span style="position: absolute;top: 15px; font-family: Verdana; font-size: 40px; text-align: center; color: #009900;">DON MARIANO MARCOS MEMORIAL STATE UNVERSITY</span></div>
<div class="nav"><?php include('navigation.php'); ?></div>
<div class="content">
<div class="intro">
<form action="submitttable.php" method="post">
<div class="controls">
<div style="text-align: right;"><span style="margin-right: 25%; widtd: 100%;">TIME TABLE OF ACTIVITIES</span>
<input class="buttons" id="add" type="button" onclick="addbutton()" name="add" value="ADD"/>
<input class="buttons" id="edit" onclick="editbutton()" type="button" name="save" value="EDIT"/>
<input class="buttons" id="delete" onclick="dlete()" type="button" name="delete" value="DELETE"/>
<input class="buttons" onclick="location.href='adminstudview.php'" type="button" name="back" value="BACK"/>
</div>
</div>
<div style="width: 100%; height: 300px;">
<?php
include('selectedttable.php');
?>
</div>
</form>
</div>
</div>
<div class="footer"></div>
</div>
<script>

$('.datepicker').datepick({dateFormat: 'y/mm/dd'});

function disabledtxt(){
	var cells = document.getElementsByClassName('datepicker');
	
	for (var i = 0; i < cells.length; i++) { 
        cells[i].disabled = true;
	}
		
}

function addbutton(){
	var add = document.getElementById('add').value;
	var cells = document.getElementsByClassName('datepicker'); 
	var check = document.getElementsByClassName('check'); 
	if (add == "ADD"){	
	for (var i = 0; i < cells.length; i++) { 
        cells[i].disabled = false;
	}
	for (var i = 0; i < check.length; i++) { 
        check[i].disabled = true;
	}
	document.getElementById('edit').value = "SAVE";
	document.getElementById('delete').value = "CANCEL";
	document.getElementById('add').disabled = true;
	}else{
		for (var i = 0; i < cells.length; i++) { 
        cells[i].disabled = true;
	}
		for (var i = 0; i < check.length; i++) { 
        check[i].disabled = false;
	}
		document.getElementById('add').value = "ADD";
		document.getElementById('edit').disabled = false;
		document.getElementById('delete').value = "DELETE";
	}	
}

function editbutton(){
	var edit = document.getElementById('edit').value;
	var cells = document.getElementsByClassName('datepicker'); 
	var check = document.getElementsByClassName('check'); 
	if (edit == "EDIT"){
		for (var i = 0; i < cells.length; i++) { 
        cells[i].disabled = false;
	}
		for (var i = 0; i < check.length; i++) { 
        check[i].disabled = true;
	}
	document.getElementById('add').disabled = true;
	document.getElementById('delete').value = "CANCEL";
	document.getElementById('edit').value = "SAVE";
	}else{
		document.getElementById('edit').type = "submit";
		document.getElementById('add').disabled = false;
		document.getElementById('edit').disabled = false;
		document.getElementById('edit').value = "EDIT";
		document.getElementById('delete').value = "DELETE";
		
		for (var i = 0; i < cells.length; i++) { 
        //cells[i].disabled = true;
	}
		for (var i = 0; i < check.length; i++) { 
        check[i].disabled = false;
	}
		
	}
	
}

function dlete(){
	var dlte = document.getElementById('delete').value; 
	var check1 = document.getElementById('check1');
	var check2 = document.getElementById('check2');
	var check3 = document.getElementById('check3');
	var check4 = document.getElementById('check4');
	var check5 = document.getElementById('check5');
	var check6 = document.getElementById('check6');
	var check7 = document.getElementById('check7');
	var check8 = document.getElementById('check8');
	var check9 = document.getElementById('check9');
	var check10 = document.getElementById('check10');
	var check11 = document.getElementById('check11');
	var check12 = document.getElementById('check12');
	if (dlte == "DELETE"){

		if (check1.checked || check2.checked || check3.checked || check4.checked || check5.checked || check6.checked || check7.checked || check8.checked 
		|| check9.checked || check10.checked || check11.checked || check12.checked){
			if (confirm("Are you sure you want to delete the selected record(s)?") == true) {
				document.getElementById('delete').type = "submit";
			}else{
			
			}
		}
    }else{
		document.getElementById('add').disabled = false;
		for (var i = 0; i < cells.length; i++) { 
			cells[i].disabled = false;
		}
		for (var i = 0; i < check.length; i++) { 
			check[i].disabled = true;
		}
	}
}

window.onload = disabledtxt();
</script>
</body>
</html>