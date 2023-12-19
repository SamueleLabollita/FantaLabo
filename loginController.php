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

        $sql = "SELECT ruolo FROM UTENTE WHERE Username='$username' AND Password='$passcrip'";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0 ){
            session_start();
            $_SESSION["username"] = $username;
            $row = $result->fetch_assoc();
            if($row["ruolo"] == "admin"){
                header("Location: /www/adminpage.php");
            }else{
                header("Location: /www/userpage.php");
            }
        }else{
            header("Location: /www/login.php");
            echo "Username o password errati";
        }
    }
    $conn->close();
?>