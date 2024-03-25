<?php
session_start();
if (isset($_SESSION["username"])){
    header("Location: userpage.php");
    exit();
} else {
    header("Location: frontend/registrazione.php");
    exit();
}
?>