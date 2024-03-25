<?php 
$cognome = $_GET["cognome"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FantaLabo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM `GIOCATORE` WHERE `cognome` = $cognome";
$result = $conn->query($sql);

$sqlAfterDelete = "SELECT nome, cognome, ruolo  FROM `GIOCATORE`";
$resultAfterDelete = $conn->query($sqlAfterDelete);

if ($resultAfterDelete->num_rows > 0) {
    echo "<table><tr><th>Nome</th><th>Cognome</th><th>Ruolo</th></tr>";
    while($row = $resultAfterDelete->fetch_assoc()) {
        echo "<tr><td>".$row["nome"]."</td><td>".$row["cognome"]."</td><td>".$row["ruolo"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>