<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "FantaLabo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    $queryGiocatore = "SELECT `id`, `nome`, `cognome` FROM `GIOCATORE`;";
    $resultGiocatore = $conn->query($queryGiocatore);

    $querySquadra = "SELECT `id`, `nome_squadra` FROM `SQUADRA`;";
    $resultSquadra = $conn->query($querySquadra);
?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Inserimento giocatori</title> 
    <style> 
        body { 
            font-family: Arial, sans-serif; 
            background-color: #0099ff; 
            margin: 0;
            padding: 0;
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

        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="submit"]:hover {
            background-color: #cccccc;
            cursor: pointer;
        }
        button {
                background-color: grey;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
        }
        button:hover {
            background-color: lightgrey;
        }
    </style>
    </head> 
    <body> 
        <header>                                                        
            <form action="adminpage.php" method="post"> 
                <button type="submit">Home</button>
            </form>
            <form action="logout.php" method="post"> 
                <button type="submit">Logout</button>
        </header>
        <h1>(NON VA PER ORA)</h1>
        <form method="post" action="inserimentoNellaSquadraController.php"> 
            <label for="giocatore">Seleziona il giocatore</label>
            <select id="giocatore" name="giocatore">
                <?php
                    while($row = $resultGiocatore->fetch_assoc()) {
                        echo "<option value=\"".$row["id"]."\">".$row["nome"]." ".$row["cognome"]."</option>";
                    }
                ?>
            </select>
            <label for="squaadra">Seleziona la squadra</label>
            <select id="squadra" name="squadra">
                <?php
                    while($row = $resultSquadra->fetch_assoc()) {
                        echo "<option value=\"".$row["id"]."\">".$row["nome_squadra"]."</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Inserisci"> 
        </form> 
    </body> 
</html>