<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "FantaLabo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $passcrip = md5($password);

        $sql = "SELECT * FROM UTENTE WHERE Username='$username' AND Password='$passcrip'";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
            $_SESSION['username'] = $username;
            header("Location: /www/userpage.php");
        }else{
            header("Location: /www/login.php");
            echo "Username o password errati";
        }
    }
?>