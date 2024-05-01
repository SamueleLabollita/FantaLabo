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

        // Controlla se esiste già un campionato con lo stesso nome
        $check_query = "SELECT * FROM CAMPIONATO WHERE nome_campionato = '$nomeCampionato'";
        $check_result = $conn->query($check_query);
        
        if ($check_result->num_rows > 0) {
            // Se esiste già un campionato con lo stesso nome, mostra un messaggio di errore o gestisci il caso di conseguenza
            echo "Errore: Esiste già un campionato con lo stesso nome.";
        } else {
            // Se non esiste un campionato con lo stesso nome, procedi con l'inserimento
            $sql = "INSERT INTO CAMPIONATO (nome_campionato) VALUES ('$nomeCampionato')";
            $result = $conn->query($sql);
            if (!$result) {
                echo "Errore nell'esecuzione della query: " . $conn->error;
            } else {
                echo "Campionato creato con successo!";
            }
        }
        $conn->close();
        exit();
    }
?>
