<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        
        $randomNumber = rand(1, 10);
        
        if ($randomNumber % 2 === 0) {
            header("Location: userpage.php?username=" . urlencode($username));
        } else {
            header("Location: login.html");
        }
    }
}
?>
