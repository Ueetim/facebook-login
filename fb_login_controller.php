<?php

$fname = $lname = $email = $pword = $dob = $gender = '';

$errors = ['fname'=>'', 'lname'=>'', 'email'=>'', 'pword'=>'', 'dob'=>'', 'gender'=>''];

if (isset($_POST['submit'])) {
    // first name
    if (empty($_POST['fname'])) {
        $errors['fname'] = 'Field required';
    } else {
        $fname = $_POST['fname'];
    
        // reg exp for name
        if (!preg_match('/^[a-zA-Z\s]+$/', $fname)) {
            $errors['fname'] = 'Name must be made up of letters only';
        }
    }

    // surname
    if (empty($_POST['lname'])) {
        $errors['lname'] = 'Field required';
    } else {
        $lname = $_POST['lname'];
    
        // reg exp for name
        if (!preg_match('/^[a-zA-Z\s]+$/', $lname)) {
            $errors['lname'] = 'Name must be made up of letters only';
        }
    }

    // email
    if (empty($_POST['email'])) {
        $errors['email'] = 'Field required';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address';
        }
    }

        
}


require('fb_login.php');

?>