<?php
/*
	Filename: editContact.php
	Author: Alangi Derick
	Description: This file is responsible for over writing the older version of the contact.
				 It gets the new values of the field and over writes the old one.
*/

include("config.php");
if(isset($_POST['save'])){
	$id = mysql_real_escape_string((htmlspecialchars($_POST['id'])));
	$fname = mysql_real_escape_string((htmlspecialchars($_POST['fname'])));
	$lname = mysql_real_escape_string((htmlspecialchars($_POST['lname'])));
	$country = mysql_real_escape_string((htmlspecialchars($_POST['country'])));
	$phonenumber = mysql_real_escape_string((htmlspecialchars($_POST['phonenumber'])));
	$addressline = mysql_real_escape_string((htmlspecialchars($_POST['addressline'])));
	$description = mysql_real_escape_string((htmlspecialchars($_POST['description'])));

	$update = "UPDATE Contacts SET fname='$fname', lname='$lname', country='$country', 
			phonenumber='$phonenumber', addressline='$addressline', description='$description' WHERE 
			contactid='$id'";

	$updated = mysql_query($update);
	if($updated){
		header('Location: viewcontacts.php');
	}

	else {
		header('Location: editcontactform.php');
	}
}
?>