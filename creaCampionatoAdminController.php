<?php
    // crea campionato
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "FantaLabo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeCampionato = $_POST["nome_campionato"];

        $sql = "INSERT INTO CAMPIONATO (nome_campionato) VALUES ('$nomeCampionato')";
        $result = $conn->query($sql);
        $conn->close();
        header("Location: /www/adminpage.php");
        exit();
    }
?>