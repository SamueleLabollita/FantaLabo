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

    // Inizializzazione della variabile di ricerca
    $search = '';

    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    }

    $sql = "SELECT * FROM UTENTE WHERE nome LIKE '%$search%' OR cognome LIKE '%$search%'";
    $result = $conn->query($sql);


    $clienti = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $clienti[] = $row;
        }
    } else {
        echo "0 results";
    }

    // Stampa l'array $clienti come JSON
    header('Content-Type: application/json');
    echo json_encode($clienti);
?>