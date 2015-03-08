<?php

		/*
			Filename: deletecontact.php
			Author: Alangi Derick
			Description: This file is fairly simple. It is basically to delete the contacts from 
						 the database. It uses the DELETE MySQL command to do that.
		*/
				include("config.php");

				//gets the id of the user you want to delete.
				$id = $_GET['id'];

				//deletes the contact.
				$delete = "DELETE FROM Contacts WHERE contactid='$id'";

				$result = mysql_query($delete);
				if($result){
					header('Location: viewcontacts.php');
				}

				else {
					header('Location: index.php');
				}
?>