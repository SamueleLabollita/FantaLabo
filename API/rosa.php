<?php

    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "FantaLabo";

// Connessione al database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica della connessione
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT squadra_posseduta FROM UTENTE WHERE id = $id";
    } else {
        $sql = "SELECT squadra_posseduta FROM UTENTE";
    }

    $result = $conn->query($sql);

    // Creazione di un array contenente i dati estratti dal database
    $utenti = array();
    while ($rowUtente = $result->fetch_assoc()) {
        $squadra_posseduta = $rowUtente["squadra_posseduta"];
    }
    //qury pe esrarre la rosa
    $sqlRosa = "SELECT * FROM GIOCATORE WHERE SQUADRA_nome = '$squadra_posseduta'";
    $resultRosa = $conn->query($sqlRosa);
 
    while ($rowRosa = $resultRosa->fetch_assoc()){
        $nome = $rowRosa["nome"];
        $cognome = $rowRosa["cognome"];
        $ruolo = $rowRosa["ruolo"];
        $SQUADRA_nome = $rowRosa["SQUADRA_nome"];
        
        $rosa = array(
            "nome" => $nome,
            "cognome" => $cognome,
            "ruolo" => $ruolo,
            "SQUADRA_nome" => $SQUADRA_nome
        );
        $utenti[] = $rosa;
    }
   

    // Stampa l'array $utenti come JSON
    header('Content-Type: application/json');
    echo json_encode($utenti);
?>