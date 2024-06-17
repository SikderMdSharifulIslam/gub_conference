<?php

session_start();

require 'db.php';

$student_id = $_POST['student_id'];
$full_name = $_POST['full_name'];
$email_address = $_POST['email_address'];
$contact_number = $_POST['contact_number'];
$password = $_POST['password'];


// Student ID Validation
if ($student_id) {
    if (preg_match("/^\d+$/", $student_id)) //only digit allowed
    {
        $_SESSION['old_student_id'] = $student_id;
    } else {
        $flag = true;
        $_SESSION['student_id_error'] = "Invalid ID, use only numbers!";
        header('location: registration.php');
    }
} else {
    $flag = true;
    $_SESSION['student_id_error'] = "ID is required!";
    header('location: registration.php');
}

// Name Validation
if ($full_name) {
    if (preg_match("/^[a-zA-Z .]+$/", $full_name)) //a-z then A-Z then space then dot is allowed here
    {
        $_SESSION['old_name'] = $full_name;
    } else {
        $flag = true;
        $_SESSION['name_error'] = "Invalid Name, use only alphabets!";
        header('location: registration.php');
    }
} else {
    $flag = true;
    $_SESSION['name_error'] = "Name is required!";
    header('location: registration.php');
}

// Email Validation
if ($email_address) {
    if (filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['old_email'] = $email_address;
    } else {
        $flag = true;
        $_SESSION['email_error'] = "Email Format Invalid!";
        header('location: registration.php');
    }
} else {
    $flag = true;
    $_SESSION['email_error'] = "Email is required!";
    header('location: registration.php');
}

// Contact Validation
if ($contact_number) {
    if (preg_match("/^\d+$/", $contact_number)) //only digit allowed
    {
        $_SESSION['old_contact_number'] = $contact_number;
    } else {
        $flag = true;
        $_SESSION['contact_number_error'] = "Invalid Contact, use only numbers!";
        header('location: registration.php');
    }
} else {
    $flag = true;
    $_SESSION['contact_number_error'] = "Contact Number is required!";
    header('location: registration.php');
}

// Password Validation
if ($password) {
        $_SESSION['old_password'] = $password;
} else {
    $flag = true;
    $_SESSION['password_error'] = "Password is required!";
    header('location: registration.php');
}



    
        $insert_query = "INSERT INTO users (student_id, full_name, email_address, contact_number, password) VALUES ('$student_id','$full_name','$email_address','$contact_number','$password')";
        mysqli_query($db_connect, $insert_query);
        $_SESSION['signUp_status'] = "Registration Seccessfull!";
        header('location: login.php');


?>