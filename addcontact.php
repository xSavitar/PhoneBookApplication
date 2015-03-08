<!-- 
	Filename: addcontact.php
	Author: Alangi Derick
	Description: This file is responsible for adding contacts to the database
				 it is also responsible for converting this data in a valid MySQL format
				 using the requied php functions
 -->

<?php include("config.php"); ?>

<?php
//this is for addition of contacts in the Contact table
if(isset($_POST['submit'])){
	$fname = mysql_real_escape_string((htmlspecialchars($_POST['fname'])));
	$lname = mysql_real_escape_string((htmlspecialchars($_POST['lname'])));
	$country = mysql_real_escape_string((htmlspecialchars($_POST['country'])));
	$phonenumber = mysql_real_escape_string((htmlspecialchars($_POST['phonenumber'])));
	$addressline = mysql_real_escape_string((htmlspecialchars($_POST['addressline'])));
	$description = mysql_real_escape_string((htmlspecialchars($_POST['description'])));

	$sql = "INSERT INTO Contacts (fname, lname, country, phonenumber, addressline, description) 
			VALUES ('$fname', '$lname', '$country', '$phonenumber', '$addressline', '$description')";
	$res = mysql_query($sql);
	if($res){
		header('Location: viewcontacts.php?curPage=0&19857ae0f57f3eq3389757ff0ae43eqa56');
	}

	else {
		header('Location: registration.php');
	}
}

?>