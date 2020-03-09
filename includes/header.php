<?php session_start();?>
<?php include "function.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inDobnito</title>
    <link rel='stylesheet' href='assets/css/main.css'>
    <?php 
        if($_SESSION["userID"]=="Jason"){
           echo "<link rel='stylesheet' href='assets/css/jason.css'>";
        }
        if($_SESSION["userID"]=="Lauren"){
           echo "<link rel='stylesheet' href='assets/css/lauren.css'>";
        }
    ?>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/vue'></script>
     <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js'></script>
</head>
<body>

<div id="overlay"></div>

