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

$username = $_SESSION["username"]; 

$sql = "SELECT squadra_posseduta FROM UTENTE WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $squadra = $row["squadra_posseduta"];
} else {
    echo "0 results";
}

$sqlPort = "SELECT nome, cognome, ruolo FROM GIOCATORE WHERE SQUADRA_nome = '$squadra' AND ruolo = 'Portiere'";
$resultPort = $conn->query($sqlPort);
?> 
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Inserimento giocatori</title> 
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
            <form action="userpage.php" method="post"> 
                <button type="submit">Home</button>
            </form>
            <a href="../backend/logout.php" class="logout">Logout</a>
        </header>
        <form>
            <label for="giocatore">Scegli il portiere</label>
            <select name="giocatore" id="portiere">
                <?php 
                if ($resultPort->num_rows > 0) {
                    while($row = $resultPort->fetch_assoc()) {
                        echo "<option value='" . $row["nome"] . "'>" . $row["nome"] . " " . $row["cognome"] . " (" . $row["ruolo"] . ")</option>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </select>
            <br>
            <br>
            <label for="giocatore">Scegli il primo difensore</label>
            <select name="giocatore" id="difensore1">
                <?php 
                    $sqlDif = "SELECT nome, cognome, ruolo FROM GIOCATORE WHERE SQUADRA_nome = '$squadra' AND ruolo = 'Difensore'";
                    $resultDif = $conn->query($sqlDif);
                    if ($resultDif->num_rows > 0) {
                        while($row = $resultDif->fetch_assoc()) {
                            echo "<option value='" . $row["nome"] . "'>" . $row["nome"] . " " . $row["cognome"] . " (" . $row["ruolo"] . ")</option>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </select>
            <br>
            <br>
            <label for="giocatore">Scegli il secondo difensore</label>
            <select name="giocatore" id="difensore2">
                <?php 
                    $sqlDif = "SELECT nome, cognome, ruolo FROM GIOCATORE WHERE SQUADRA_nome = '$squadra' AND ruolo = 'Difensore'";
                    $resultDif = $conn->query($sqlDif);
                    if ($resultDif->num_rows > 0) {
                        while($row = $resultDif->fetch_assoc()) {
                            echo "<option value='" . $row["nome"] . "'>" . $row["nome"] . " " . $row["cognome"] . " (" . $row["ruolo"] . ")</option>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </select>
            <br>
            <br>
            <label for="giocatore">Scegli il terzo difensore</label>
            <select name="giocatore" id="difensore3">
                <?php 
                    $sqlDif = "SELECT nome, cognome, ruolo FROM GIOCATORE WHERE SQUADRA_nome = '$squadra' AND ruolo = 'Difensore'";
                    $resultDif = $conn->query($sqlDif);
                    if ($resultDif->num_rows > 0) {
                        while($row = $resultDif->fetch_assoc()) {
                            echo "<option value='" . $row["nome"] . "'>" . $row["nome"] . " " . $row["cognome"] . " (" . $row["ruolo"] . ")</option>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </select>
            <br>
            <br>
            <label for="giocatore">Scegli il quarto difensore</label>
            <select name="giocatore" id="difensore4">
                <?php 
                    $sqlDif = "SELECT nome, cognome, ruolo FROM GIOCATORE WHERE SQUADRA_nome = '$squadra' AND ruolo = 'Difensore'";
                    $resultDif = $conn->query($sqlDif);
                    if ($resultDif->num_rows > 0) {
                        while($row = $resultDif->fetch_assoc()) {
                            echo "<option value='" . $row["nome"] . "'>" . $row["nome"] . " " . $row["cognome"] . " (" . $row["ruolo"] . ")</option>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </select>
            <br>
            <br>
            <label for="giocatore">Scegli il primo centrocampista</label>
            <select name="giocatore" id="centrocampista1">
                <?php 
                    $sqlCen = "SELECT nome, cognome, ruolo FROM GIOCATORE WHERE SQUADRA_nome = '$squadra' AND ruolo = 'Centrocampista'";
                    $resultCen = $conn->query($sqlCen);
                    if ($resultCen->num_rows > 0) {
                        while($row = $resultCen->fetch_assoc()) {
                            echo "<option value='" . $row["nome"] . "'>" . $row["nome"] . " " . $row["cognome"] . " (" . $row["ruolo"] . ")</option>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </select>
            <br>
            <br>
            <label for="giocatore">Scegli il secondo centrocampista</label>
            <select name="giocatore" id="centrocampista2">
                <?php 
                    $sqlCen = "SELECT nome, cognome, ruolo FROM GIOCATORE WHERE SQUADRA_nome = '$squadra' AND ruolo = 'Centrocampista'";
                    $resultCen = $conn->query($sqlCen);
                    if ($resultCen->num_rows > 0) {
                        while($row = $resultCen->fetch_assoc()) {
                            echo "<option value='" . $row["nome"] . "'>" . $row["nome"] . " " . $row["cognome"] . " (" . $row["ruolo"] . ")</option>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </select>
            <br>
            <br>
            <label for="giocatore">Scegli il terzo centrocampista</label>
            <select name="giocatore" id="centrocampista3">
                <?php 
                    $sqlCen = "SELECT nome, cognome, ruolo FROM GIOCATORE WHERE SQUADRA_nome = '$squadra' AND ruolo = 'Centrocampista'";
                    $resultCen = $conn->query($sqlCen);
                    if ($resultCen->num_rows > 0) {
                        while($row = $resultCen->fetch_assoc()) {
                            echo "<option value='" . $row["nome"] . "'>" . $row["nome"] . " " . $row["cognome"] . " (" . $row["ruolo"] . ")</option>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </select>
            <br>
            <br>
            <label for="giocatore">Scegli il primo attaccante</label>
            <select name="giocatore" id="attaccante1">
                <?php 
                    $sqlAtt = "SELECT nome, cognome, ruolo FROM GIOCATORE WHERE SQUADRA_nome = '$squadra' AND ruolo = 'Attaccante'";
                    $resultAtt = $conn->query($sqlAtt);
                    if ($resultAtt->num_rows > 0) {
                        while($row = $resultAtt->fetch_assoc()) {
                            echo "<option value='" . $row["nome"] . "'>" . $row["nome"] . " " . $row["cognome"] . " (" . $row["ruolo"] . ")</option>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </select>
            <br>
            <br>
            <label for="giocatore">Scegli il secondo attaccante</label>
            <select name="giocatore" id="attaccante2">
                <?php 
                    $sqlAtt = "SELECT nome, cognome, ruolo FROM GIOCATORE WHERE SQUADRA_nome = '$squadra' AND ruolo = 'Attaccante'";
                    $resultAtt = $conn->query($sqlAtt);
                    if ($resultAtt->num_rows > 0) {
                        while($row = $resultAtt->fetch_assoc()) {
                            echo "<option value='" . $row["nome"] . "'>" . $row["nome"] . " " . $row["cognome"] . " (" . $row["ruolo"] . ")</option>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </select>
            <br>
            <br>
            <label for="giocatore">Scegli il terzo attaccante</label>
            <select name="giocatore" id="attaccante3">
                <?php 
                    $sqlAtt = "SELECT nome, cognome, ruolo FROM GIOCATORE WHERE SQUADRA_nome = '$squadra' AND ruolo = 'Attaccante'";
                    $resultAtt = $conn->query($sqlAtt);
                    if ($resultAtt->num_rows > 0) {
                        while($row = $resultAtt->fetch_assoc()) {
                            echo "<option value='" . $row["nome"] . "'>" . $row["nome"] . " " . $row["cognome"] . " (" . $row["ruolo"] . ")</option>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </select>
        </form>
        <form action="../backend/inivaFormazioneController.php" method="post"> 
                <button type="submit">Invia</button>
            </form>
    </body>
</html>