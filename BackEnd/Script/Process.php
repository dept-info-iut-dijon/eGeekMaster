<?php
// Start the session
session_start();

// Retrieve form data
$Username = $_POST['Username'];
$Password = $_POST['Password'];
if(isset($_POST['Firstname']))
{
    $LastName = $_POST['Lastname'];
    $FirstName = $_POST['Firstname'];
    $Email = $_POST['Email'];
    $BirthDate = $_POST['Year of birth']."-".$_POST['Month of birth']."-".$_POST['Day of birth'];
    $Gender = $_POST['Gender'];
    $FamilyPlace = $_POST['Place family'];
}


// Store the data in the session
$_SESSION['Username'] = $Username;
$_SESSION['Password'] = $Password;
if(isset($_POST['Firstname']))
{
    $_SESSION['LastName'] = $LastName;
    $_SESSION['FirstName'] = $FirstName;
    $_SESSION['Email'] = $Email;
    $_SESSION['BirthDate'] = $BirthDate;
    $_SESSION['Gender'] = $Gender;
    $_SESSION['FamilyPlace'] = $FamilyPlace;
    
    // Redirect the user to RegisterScript.php
    header('Location: RegisterScript.php');
}
else
{
    // Redirect the user to LoginScript.php
    header('Location: LoginScript.php');
}

?>