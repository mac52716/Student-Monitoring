<?php
session_start();
include('dbcon.php');

		 if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			// username and password sent from form
			$username=mysqli_real_escape_string($conn,$_POST['myusername']);
			$password=mysqli_real_escape_string($conn, md5($_POST['mypassword']));
			$selectsql="SELECT * FROM users WHERE idno='$username' and password='$password'";

			$result=mysqli_query($conn,$selectsql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			$idno=$row['idno'];
			$fname=$row['firstname'];
			$level=$row['level'];

			$count=mysqli_num_rows($result);

			// If result matched $username and $password, table row must be 1 row
			if($count>0)
			{
				$_SESSION['login_user']=$username;
				$_SESSION['fname']=$fname;
				$_SESSION['level']=$level;
				$_SESSION['idno']=$idno;
				header("location: summary.php");
				exit;
			}else{
							$_SESSION['errMsg'] = "Invalid user or password! Please try again.";
							$_SESSION['login_user']=$username;
					header("Location: index.php"); //Redirect user back to your login form
					exit;
				}
		}
?>