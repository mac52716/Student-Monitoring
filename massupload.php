<?php
session_start();
include("dbcon.php");

  if (isset($_REQUEST['upload'])) {
    $ok = true;
    $file = $_FILES['myfile']['tmp_name'];
    $handle = fopen($file, "r");
    if ($file == NULL) {
		$_SESSION['upload'] = "Error uploading";
      header('location: massuploader.php');
	  exit;
    }else {
      while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
        {
		  $idno = $filesop[0];
          $age = $filesop[1];
          $lastname = $filesop[2];
          $firstname = $filesop[3];
          $middlename = $filesop[4];
          $birthplace = $filesop[5];
          $birthdate = $filesop[6];
		  $gender = $filesop[7];
          $civilstatus = $filesop[8];
          $emailadd = $filesop[9];
		  $major = $filesop[10];
          $companyname = $filesop[11];
		  $companyaddress = $filesop[12];
          $position = $filesop[13];
          $prevComp = $filesop[14];
          $prevCompAdd = $filesop[15];
          $prevPosi = $filesop[16];
		  $yeargraduated = $filesop[17];
          $contactno = $filesop[18];
          $course = $filesop[19];
		  $datecreated = $filesop[20];
          $imagepath = $filesop[21];
		  $imagename = $filesop[22];
/*// example error handling. We can add more as required for the database.

        if ( strlen($email) && preg_match("/^[a-z0-9._+-]{1,64}@(?:[a-z0-9-]{1,63}\.){1,125}[a-z]{2,63}$/", $mail) > 0) {
          if (! check_email($email)) {
            $ok = false;
            $msg .= error(_("E-mail address is not correct."), true);
          }
        }
// error handling for password        
        if (strlen($password) >= MIN_PASSWORD_LENGTH) {
            $ok = true;
          } else {
            $ok = false;
            $msg .= error(sprintf(_("Your password is too short (please use at least %s characters)."), MIN_PASSWORD_LENGTH), true);
        }
 // If the tests pass we can insert it into the database.       */
        if ($ok) {
          $sql = "INSERT INTO studinfo (idno,age,lastname,firstname,middlename,birthplace,birthdate,gender,civilstatus,emailAdd,major,
				companyname,companyaddress,position,prevComp,prevCompAdd,prevPosi,yeargraduated,contactno,course,datecreated,imagename,imagepath)
				VALUES ('".$idno."','".$age."','".$lastname."','".$firstname."','".$middlename."','".$birthplace."','".$birthdate."','".$gender."','".$civilstatus."',
				'".$emailadd."','".$major."','".$companyname."','".$companyaddress."','".$position."','".$prevComp."','".$prevCompAdd."','".$prevPosi."',
				'".$yeargraduated."','".$contactno."','".$course."','".$datecreated."','".$imagename."','".$imagepath."')";
			 
			 
        }
		$conn->query($sql);
		$_SESSION['upload'] = "Upload Successful";
		}

      //if ($conn->query($sql)=== TRUE) {
        //success(_("You database has imported successfully!"));
        //redirect(page_link_to('massuploader.php'));
      //} else {
        //error(_('Sorry! There is some problem in the import file.'));
        //redirect(page_link_to('massuploader.php'));
        //}
    }
	
	//$_SESSION['upload'] = "Upload Successful";
	header('location: massuploader.php');
	  exit;
  }
//form_submit($name, $label) Renders the submit button of a form
//form_file($name, $label) Renders a form file box

 /*return page_with_title("Import Data", array(
   msg(),
  div('row', array(
          div('col-md-12', array(
              form(array(
                form_file('csv_file', _("Import user data from a csv file")),
                form_submit('upload', _("Import"))
              ))
          ))
      ))
  ));*/

?>