<?php
session_start();
$post = $_SESSION['POST'];
     $randomNumber = rand(1, 10);

        if ($randomNumber % 2 == 0) {

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        
        $randomNumber = rand(1, 10);
        
        if ($randomNumber % 2 === 0) {

            header("Location: /userpage.php");
        } else {
            header("Location: /login.php");
        }
?>

