<?php
    //inserimento nella squadra
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "FantaLabo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeGiocatore = $_POST["giocatore"];
        $nomeSquadra = $_POST["squadra"];
        $sql = "INSERT INTO GIOCATORE (SQUADRA_nome) VALUES ('$nomeSquadra') WHERE id = '$nomeGiocatore'";
        $result = $conn->query($sql);
        $conn->close();
        header("Location: /www/adminpage.php");
        exit();
    }

?>