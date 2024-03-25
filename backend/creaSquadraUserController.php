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
    session_start();
    if (!isset($_SESSION["username"])) { 
        header("Location: ../frontend/login.php"); 
        exit(); 
    } 
    
    $username = $_SESSION["username"]; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeSquadra = $_POST["nomeSquadra"];
        $colori = $_POST["colori"];
        $campionato = $_POST["campionato"];

        
        $sql1 = "INSERT INTO SQUADRA (nome_squadra, colori, id) VALUES ('$nomeSquadra', '$colori', '$campionato')";
        $result1 = $conn->query($sql1);
        $sql2 = "UPDATE UTENTE SET squadra_posseduta = '$nomeSquadra' WHERE username = '$username'";
        $result2 = $conn->query($sql2);
        $_SESSION["id"] = $conn->insert_id;
        header("Location: ../frontend/userpage.php");
        $conn->close();
    }
?>