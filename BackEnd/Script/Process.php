<?php
// Start the session
session_start();

if(isset($_POST['Username']) and isset($_POST['Password']))
{
    // Retrieve form data
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    if(isset($_POST['Firstname']))
    {
        $LastName = $_POST['Lastname'];
        $FirstName = $_POST['Firstname'];
        $Email = $_POST['Email'];
        $BirthDate = $_POST["YearOfBirth"]."-".$_POST["MonthOfBirth"]."-".$_POST["DayOfBirth"];
        $Gender = $_POST['Gender'];

        $FamilyPlace = "";
        $tempConcat = ", ";
        $fieldsToCheck = array(
            'parent',
            'child',
            'grandParent',
            'grandChild',
            'uncle/aunt',
            'cousin',
            'nephew/niece',
            'stepchild',
            'in-law',
            'step-parent',
            'half-sibling',
            'other'
        );

        foreach ($fieldsToCheck as $field) {
            if (isset($_POST[$field]) && $_POST[$field] !== null) {
                $FamilyPlace .= $_POST[$field] . $tempConcat;
            }
        }
        $FamilyPlace = substr($FamilyPlace, 0, -2);
        

        
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
        header("Location: RegisterScript.php");
        exit;
    }
    else
    {
        // Redirect the user to LoginScript.php
        header("Location: LoginScript.php");
        exit;
    }
}


?>