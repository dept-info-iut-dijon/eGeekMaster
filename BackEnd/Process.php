<?php
// Start the session
session_start();

// Retrieve form data
$LastName = $_POST['Lastname'];
$FirstName = $_POST['Firstname'];
$Email = $_POST['Email'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$BirthDate = $_POST['Year of birth']."-".$_POST['Month of birth']."-".$_POST['Day of birth'];
$Gender = $_POST['Gender'];
$FamilyPlace = $_POST['Place family'];

// Store the data in the session
$_SESSION['LastName'] = $LastName;
$_SESSION['FirstName'] = $FirstName;
$_SESSION['Email'] = $Email;
$_SESSION['Username'] = $Username;
$_SESSION['Password'] = $Password;
$_SESSION['BirthDate'] = $BirthDate;
$_SESSION['Gender'] = $Gender;
$_SESSION['FamilyPlace'] = $FamilyPlace;

// Redirect the user to another page or perform other operations
header('Location: next_page.php');
?>