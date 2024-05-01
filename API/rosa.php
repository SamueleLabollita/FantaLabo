<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FantaLabo";

$conn = new mysqli($servername, $username, $password, $dbname);

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

$utenti = array();
while ($rowUtente = $result->fetch_assoc()) {
    $squadra_posseduta = $rowUtente["squadra_posseduta"];
}

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

header('Content-Type: application/json');
echo json_encode($utenti);
?>
