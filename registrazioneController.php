<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "FantaLabo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $ruolo = "utente";
        $username = $_POST["username"];
        $password = $_POST["password"];

        $verifica = "SELECT * FROM UTENTE WHERE Username='$username' AND Email='$email'";
        $result = $conn->query($verifica);

        $passcrip = md5($password);

        $sql = "INSERT INTO UTENTE (email, nome, cognome, ruolo, username, password) VALUES ('$email', '$nome', '$cognome', '$ruolo' , '$username', '$passcrip')";
        $result = $conn->query($sql);
        header("Location: /www/login.php");
        $conn->close();
    }
?>