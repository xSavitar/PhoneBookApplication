/*
Filename: formCheck.js
Author: Alangi Derick
Description: This is a file that deals with form input validation. It is written in JavaScript
              The file does client-side validation before PHP does the server-side validation.
*/

function formCheck()
{
  //this condition checks to see if the fname field is an empty string.
  if(document.reg_form.fname.value==""){
    alert("Please Enter your First Name");
    document.reg_form.fname.focus();
    return false;
  }

  //this condition checks if the lname field is an empty string.
  if(document.reg_form.lname.value==""){
    alert("Please Enter your Last Name");
    document.reg_form.lname.focus();
    return false;
  }

  //this condition checks to see if the country field is an empty string. 
  if(document.reg_form.country.value==""){
    alert("Please Enter your Country");
    document.reg_form.country.focus();
    return false;
  }

  //this condition checks to see if the phonenumber field is an empty string.
  if(document.reg_form.phonenumber.value==""){
    alert("You must Enter a Valid Phone Number");
    document.reg_form.phonenumber.focus();
    return false;
  }

  //this condition checks if the addressline field is empty.
  if(document.reg_form.addressline.value==""){
    alert("Please Enter your Address Line");
    document.reg_form.addressline.focus();
    return false;
  }

  /*Note that the description field can be empty since it can be null in the
    database. so no client-side validation is necessary*/

}