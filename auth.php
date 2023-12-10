<?php
session_start();
$post = $_SESSION['POST'];
     $randomNumber = rand(1, 10);
        
        if ($randomNumber % 2 == 0) {
            header("Location: /userpage.php");
        } else {
            header("Location: /login.php");
        }
?>

