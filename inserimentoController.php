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
        $ruolo = $_POST["ruolo"];

        $sql = "INSERT INTO GIOCATORE (nome, cognome, ruolo) VALUES ('$nome', '$cognome', '$ruolo')";
        $result = $conn->query($sql);
        header("Location: /www/inserisciGiocatori.php");
        $conn->close();
    }
?>