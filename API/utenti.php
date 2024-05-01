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
    $sql = "SELECT * FROM UTENTE WHERE id = $id";
} else {
    $sql = "SELECT * FROM UTENTE";
}

$result = $conn->query($sql);

$utenti = array();
while ($rowUtente = $result->fetch_assoc()) {
    $username = $rowUtente["username"];
    $nome = $rowUtente["nome"];
    $cognome = $rowUtente["cognome"];
    $ruolo = $rowUtente["ruolo"];
    $squadra_posseduta = $rowUtente["squadra_posseduta"];
    $email = $rowUtente["email"];

    $utente = array(
        "username" => $username,
        "nome" => $nome,
        "cognome" => $cognome,
        "ruolo" => $ruolo,
        "squadra_posseduta" => $squadra_posseduta,
        "email" => $email
    );

    $utenti[] = $utente;
}

header('Content-Type: application/json');
echo json_encode($utenti);
?>
