<?php
if(!empty($_SESSION["login_user"])){ //check if session exists
	$level=$_SESSION['level'];
	if ($level == 0){
		$studidno=$_SESSION['idno'];
		$idno = 'id'.$studidno;
		echo "<ul class='navshadow navleft' style='width: 100%; height: 24px; overflow: hidden;'>",
		"<li><a href='summary.php'>&nbsp;SUMMARY&nbsp;</a></li>",
		"<li><a href='mygrades.php'>&nbsp;MY GRADES&nbsp;</a></li>",
		"<li><a href='myprofile.php'>&nbsp;MY PROFILE&nbsp;</a></li>",
		"<div style='text-align: right;'>|Hi! ".$_SESSION['fname']."&nbsp;",
		"<a href='logout.php' style='color: white; margin: 0px 2px 0px 2px;'>Logout</a>",
		"</div>",
		"</ul>";
	}elseif ($level == 1){
		echo "<ul class='navshadow navleft' style='width: 100%; height: 24px; overflow: hidden;'>",
		"<li><a href='summary.php'>&nbsp;SUMMARY&nbsp;</a></li>",
		"<li><a href='mystudents.php'>&nbsp;MY STUDENTS&nbsp;</a></li>",
		"<div style='text-align: right;'>|Hi! ".$_SESSION['fname']."&nbsp;",
		"<a href='logout.php' style='color: white; margin: 0px 2px 0px 2px;'>Logout</a>",
		"</div>",
		"</ul>";
	}else{
		echo "<ul class='navshadow navleft' style='width: 100%; height: 24px; overflow: hidden;'>",
		"<li><a href='summary.php'>&nbsp;SUMMARY&nbsp;</a></li>",
		"<li><a href='administration.php'>&nbsp;ADMINISTRATION&nbsp;</a></li>",
		"<li><a href='controls.php'>&nbsp;CONTROLS&nbsp;</a></li>",
		"<li><a href='exportpage.php'>&nbsp;IMPORT/EXPORT&nbsp;</a></li>",
		"<div style='text-align: right;'>|Hi! ".$_SESSION['fname']."&nbsp;",
		"<a href='logout.php' style='color: white; margin: 0px 2px 0px 2px;'>Logout</a>",
		"</div>",
		"</ul>";
	}
}else{
	header("Location:index.php");
	exit;
}
?>