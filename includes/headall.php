<?php
    session_start();
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include('../linkups/stylelinkups.php');
    include('../styles/style.php');
    include('../userProfile/userprofilStyles.php') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Crush</title>
</head>