<?php
    //crea campionato
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "FantaLabo";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeCampionato = $_POST["nomeCampionato"];

        $sql = "INSERT INTO CAMPIONATO (nome_campionato) VALUES ('$nomeCampionato')";
        $result = $conn->query($sql);
        $_SESSION["id"] = $conn->insert_id;
        header("Location: /www/userpage.php");
        $conn->close();
    }

?>