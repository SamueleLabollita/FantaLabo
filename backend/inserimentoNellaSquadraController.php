<?php
    // Inserimento nella squadra
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "FantaLabo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idGiocatore = $_POST["giocatore"];
        $idSquadra = $_POST["squadra"];

        echo "ID Giocatore: " . $idGiocatore . "<br>";
        echo "ID Squadra: " . $idSquadra . "<br>";

        $sqlUpdateGiocatore = "UPDATE `GIOCATORE` SET `SQUADRA_nome` = '$idSquadra' WHERE `GIOCATORE`.`id` = '$idGiocatore';";
        $resultUpdateGiocatore = $conn->query($sqlUpdateGiocatore);

        if ($resultUpdateGiocatore) {
            $successMessage = "Giocatore inserito nella squadra con successo!";
            header("Location: ../frontend/inserisciGiocatoriNellaSquadra.php?successMessage=" . urlencode($successMessage));
        } else {
            $errorMessage = "Errore nell'inserimento del giocatore nella squadra: " . $conn->error;
            header("Location: ../frontend/inserisciGiocatoriNellaSquadra.php?errorMessage=" . urlencode($errorMessage));
        }
        $conn->close();
    }
?>
