<?php
    //crea squadra
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "FantaLabo";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeSquadra = $_POST["nomeSquadra"];
        $colori = $_POST["colori"];
        $campionato = $_POST["campionato"];
        
        $sql = "INSERT INTO SQUADRA (nome_squadra, colori, id) VALUES ('$nomeSquadra', '$colori', '$campionato')";
        $result = $conn->query($sql);
        $_SESSION["id"] = $conn->insert_id;
        header("Location: /www/userpage.php");
        $conn->close();
    }
?>