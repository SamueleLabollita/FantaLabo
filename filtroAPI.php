<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: /www/login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FantaLabo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$query = "SELECT nome, cognome, ruolo FROM GIOCATORE";

if (isset($_POST['ruolo']) && $_POST['ruolo'] != "") {
    $ruolo = $_POST['ruolo'];
    $query .= " WHERE ruolo='$ruolo'";
} else if (isset($_POST['ruolo']) && $_POST['ruolo'] == "") {
    $query .= " WHERE ruolo='Attaccante' OR ruolo='Difensore' OR ruolo='Centrocampista' OR ruolo='Portiere'";
}

$result = mysqli_query($conn, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
?>
