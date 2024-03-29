<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FantaLabo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
session_start(); 

if (!isset($_SESSION["username"])) { 
    header("Location: /www/login.php"); 
    exit(); 
} 

$username = $_SESSION["username"]; 

$sql = "SELECT squadra_posseduta FROM UTENTE WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $squadra = $row["squadra_posseduta"];
    }
} else {
    echo "0 results";
}
?> 

<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Home</title> 
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                background-color: lightblue;
            }

            header {
                background-color: #333;
                color: #fff;
                padding: 10px;
                text-align: right;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            h1 {
                text-align: center;
            }

            form {
                text-align: center;
                margin-top: 20px;
            }

            button {
                background-color: green;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            button:hover {
                background-color: lightgreen;
            }

            .logout {
                color: #ffffff; /* Colore del testo */
                background-color: #ff0000; /* Colore di sfondo */
                text-decoration: none; /* Rimuove il sottolineamento */
                padding: 10px 20px; /* Spazio intorno al testo */
                border-radius: 5px; /* Angoli arrotondati */
                font-size: 16px; /* Dimensione del testo */
                display: inline-block; /* Permette di applicare padding e altre proprietà di blocco */
                transition: background-color 0.3s ease; /* Effetto di transizione al passaggio del mouse */
            }

            .logout:hover {
                background-color: #990000; /* Colore di sfondo al passaggio del mouse */
            }
        </style>
    </head> 
    <body> 
        <header>
            <div>
                <span>Benvenuto, <?php echo $username; ?>!</span>
            </div>
            <a href="../backend/logout.php" class="logout">Logout</a>
            <div>
                <span>La tua squadra: <?php echo $squadra; ?></span>
            </div>
        </header>
        <h1>Home</h1>
        <form action="creaCampionatoUser.php" method="post"> 
            <button type="submit">Crea campionato</button>
        </form>
        <form action="creaSquadraUser.php" method="post"> 
            <button type="submit">Crea squadra</button>
        </form>
        <form action="inserisciFormazione.php" method="post"> 
            <button type="submit">Inserisci Formazione</button>
        </form>
    </body> 
</html>