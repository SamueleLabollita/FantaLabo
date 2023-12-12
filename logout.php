<?php
    session_start();
    session_destroy();
    header("Location: /www/login.php");
    exit();
?>