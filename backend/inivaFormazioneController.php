<?php
session_start();

// Verifica se l'utente è loggato
if (!isset($_SESSION["username"])) { 
    header("Location: /www/login.php"); 
    exit(); 
} 

// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FantaLabo";
$conn = new mysqli($servername, $username, $password, $dbname);

// Controlla se la connessione al database è avvenuta con successo
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Recupera i dati dei giocatori inviati dal form
$portiere = $_POST["portiere"];
$difensore1 = $_POST["difensore1"];
$difensore2 = $_POST["difensore2"];
$difensore3 = $_POST["difensore3"];
$difensore4 = $_POST["difensore4"];
$centrocampista1 = $_POST["centrocampista1"];
$centrocampista2 = $_POST["centrocampista2"];
$centrocampista3 = $_POST["centrocampista3"];
$attaccante1 = $_POST["attaccante1"];
$attaccante2 = $_POST["attaccante2"];
$attaccante3 = $_POST["attaccante3"];

// Inserisci i giocatori nella tabella GIOCA
$sql = "INSERT INTO GIOCA (GIOCATORE_id, SQUADRA_nome) VALUES ('$portiere', '$squadra')";
$conn->query($sql);
$sql = "INSERT INTO GIOCA (GIOCATORE_id, SQUADRA_nome) VALUES ('$difensore1', '$squadra')";
$conn->query($sql);
$sql = "INSERT INTO GIOCA (GIOCATORE_id, SQUADRA_nome) VALUES ('$difensore2', '$squadra')";
$conn->query($sql);
$sql = "INSERT INTO GIOCA (GIOCATORE_id, SQUADRA_nome) VALUES ('$difensore3', '$squadra')";
$conn->query($sql);
$sql = "INSERT INTO GIOCA (GIOCATORE_id, SQUADRA_nome) VALUES ('$difensore4', '$squadra')";
$conn->query($sql);
$sql = "INSERT INTO GIOCA (GIOCATORE_id, SQUADRA_nome) VALUES ('$centrocampista1', '$squadra')";
$conn->query($sql);
$sql = "INSERT INTO GIOCA (GIOCATORE_id, SQUADRA_nome) VALUES ('$centrocampista2', '$squadra')";
$conn->query($sql);
$sql = "INSERT INTO GIOCA (GIOCATORE_id, SQUADRA_nome) VALUES ('$centrocampista3', '$squadra')";
$conn->query($sql);
$sql = "INSERT INTO GIOCA (GIOCATORE_id, SQUADRA_nome) VALUES ('$attaccante1', '$squadra')";
$conn->query($sql);
$sql = "INSERT INTO GIOCA (GIOCATORE_id, SQUADRA_nome) VALUES ('$attaccante2', '$squadra')";
$conn->query($sql);
$sql = "INSERT INTO GIOCA (GIOCATORE_id, SQUADRA_nome) VALUES ('$attaccante3', '$squadra')";
$conn->query($sql);

// Chiudi la connessione al database
$conn->close();

// Redirect alla pagina di inserimento dei giocatori dopo l'inserimento
header("Location: ../frontend/inserisciGiocatori.php");
exit();
?>
