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
<h2 style="text-align: center;">Welcome to ETEEAP</h2>
<div style="width: 100%; height: 300px;">
<table id="tableId" style="margin: auto; border-collapse: collapse;  width: 800px;">
<tr>
<th style="border: solid 2px black;">COMPANIES</th>
</tr>
<?php include('complist.php'); ?>
</table>
<br>
<table id="tableId2" style="margin: auto; border-collapse: collapse; width: 800px;">
<tr>
<th style="border: solid 2px black;">YEAR GRADUATED</th>
</tr>
<?php include('yeargradlist.php'); ?>
</table>
<form id="form" action="" method="POST">
<input type="text" id="companyId" name="companyId" style="display: none;"/>
</form>
</div>
</div>
</div>
<div class="footer"></div>
</div>
<script>
function getcookie(){
	//function getCookie(cname) {
    //var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
function addRowHandlers() {
    var table = document.getElementById("tableId");
    var rows = table.getElementsByTagName("tr");
    for (i = 0; i < rows.length; i++) {
        var currentRow = table.rows[i];
        var createClickHandler = 
            function(row) 
            {
                return function() { 
                                        var cell = row.getElementsByTagName("td")[0];
                                        var id = cell.innerHTML;
                                        //alert("id:" + id);
										//alert(id);
										document.cookie = ("compid", id);
										document.getElementById("companyId").value = getcookie();
										document.getElementById("form").action = 'studundercomp.php';
										document.getElementById("form").submit();
                                 };
            };

        currentRow.onclick = createClickHandler(currentRow);
    }
}	
window.onload = addRowHandlers();

function addRowHandlers2() {
    var table = document.getElementById("tableId2");
    var rows = table.getElementsByTagName("tr");
    for (i = 0; i < rows.length; i++) {
        var currentRow = table.rows[i];
        var createClickHandler = 
            function(row) 
            {
                return function() { 
                                        var cell = row.getElementsByTagName("td")[0];
                                        var id = cell.innerHTML;
                                        //alert("id:" + id);
										//alert(id);
										document.cookie = ("compid", id);
										document.getElementById("companyId").value = getcookie();
										document.getElementById("form").action = 'sygrad.php';
										document.getElementById("form").submit();
                                 };
            };

        currentRow.onclick = createClickHandler(currentRow);
    }
}
window.onload = addRowHandlers2();
</script>
</body>
</html>