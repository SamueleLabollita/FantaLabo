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
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $username = $_POST["username"];
        $password = $_POST["PASSWORD"];
        $email = $_POST["Email"];

        $verifica = "SELECT * FROM UTENTE WHERE Username='$username' AND Email='$email'";
        $result = $conn->query($verifica);

        $sql = "INSERT INTO UTENTE (Email, nome, cognome, username, PASSWORD, Email) VALUES ('$nome', '$cognome', '$username', '$password', '$email')";
        $result = $conn->query($sql);
        $conn->close();
        header("Location: /login.php");
    }
?>