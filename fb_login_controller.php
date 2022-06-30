<?php

$fname = $lname = $email = $pword = $pronoun = $gender = '';

$errors = ['fname'=>'', 'lname'=>'', 'email'=>'', 'pword'=>'', 'pronoun'=>'', 'gender'=>''];

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
            // intval converts string to int
            if (!intval($email)) {
                $errors['email'] = 'Please input a valid email address or phone number';
            }
        }
    }

    // password
    if (empty($_POST['pword'])) {
        $errors['pword'] = "Field required";
    } else {
        $pword = $_POST['pword'];
    }

    // gender
    if (empty($_POST['gender'])){
        $errors['gender'] = 'Please choose your gender';
    } else {
        $gender = $_POST['gender'];

        if ($gender == 'custom'){
            if (empty ($_POST['pronoun'])) {
                $errors['pronoun'] = 'Please choose an option';
            } else {
                $pronoun = $_POST['pronoun'];
            }
        }
    }

    // redirect
    if (!array_filter($errors)) { //array_filter cycles through the error array to check if values are contained

        header('Location: fb_login_success.php');

    }
        
}


require('fb_login.php');

?>