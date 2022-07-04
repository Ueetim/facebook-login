<?php

$fname = $lname = $email = $pword = $pronoun = $gender = $dob = $year = $month = $day = $gender_opt = '';

$errors = ['fname'=>'', 'lname'=>'', 'email'=>'', 'pword'=>'', 'dob'=>'', 'pronoun'=>'', 'gender'=>'', 'gender_opt'=>''];

if (isset($_POST['submit'])) {
    // first name
    if (empty($_POST['fname'])) {
        $errors['fname'] = 'Field required';
    } else {
        $fname = $_POST['fname'];
    
        // reg exp for name
        if (!preg_match('/^[a-zA-Z\s]+$/', $fname)) {
            $errors['fname'] = 'Name must be made up of letters and spaces only';
        }
    }

    // surname
    if (empty($_POST['lname'])) {
        $errors['lname'] = 'Field required';
    } else {
        $lname = $_POST['lname'];
    
        // reg exp for name
        if (!preg_match('/^[a-zA-Z\s]+$/', $lname)) {
            $errors['lname'] = 'Name must be made up of letters and spaces only';
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
        if (strlen($pword) < 6) {
            $errors['pword'] = "Password must contain at least 6 characters";
        }
    }

    // date of birth
    $year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $current_year = date("Y");

    if ($year > ($current_year - 5)) {
        $errors['dob'] = 'You must be at least 5 years old';
    } else {
        $dob = $day . " " . $month . ", " . $year;
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

            if (!empty($_POST['gender-opt'])) {
                $gender_opt = $_POST['gender-opt'];

                if (!preg_match('/^[a-zA-Z\s]+$/', $gender_opt)) {
                    $errors['gender_opt'] = 'Gender must be made up of letters and spaces only';
                }
            }
        }
    }

    // redirect
    if (!array_filter($errors)) { //array_filter reeturns false if all values in the array are the same

        header('Location: fb_login_success.php');

    }      
}


require('fb_login.php');

?> 