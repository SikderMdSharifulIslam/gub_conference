<?php 
session_start();
require 'db.php';

$title = $_POST['title'];
$sub_title = $_POST['sub_title'];


   
        $insert = "INSERT INTO dates (dates, notes) VALUES ('$title', '$sub_title')";
        $insert_result = mysqli_query($db_connect, $insert);

        header('location:important.php');

?>