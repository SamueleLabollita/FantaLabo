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
        $sql = "SELECT * FROM UTENTE WHERE id = $id";
    } else {
        $sql = "SELECT * FROM UTENTE";
    }

    $result = $conn->query($sql);

    // Creazione di un array contenente i dati estratti dal database
    $utenti = array();
    while ($rowUtente = $result->fetch_assoc()) {
        $username = $rowUtente["username"];
        $nome = $rowUtente["nome"];
        $cognome = $rowUtente["cognome"];
        $ruolo = $rowUtente["ruolo"];
        $squadra_posseduta = $rowUtente["squadra_posseduta"];
        $email = $rowUtente["email"];
    
    
        // Aggiungi i dati dell'utente all'array degli utenti
        $utente = array(
            "username" => $username,
            "nome" => $nome,
            "cognome" => $cognome,
            "ruolo" => $ruolo,
            "squadra_posseduta" => $squadra_posseduta,
            "email" => $email
        );
    
        // Aggiungi l'utente all'array degli utenti
        $utenti[] = $utente;
    }
   

    // Stampa l'array $utenti come JSON
    header('Content-Type: application/json');
    echo json_encode($utenti);
?>