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

    $query = "SELECT `id`, `nome_campionato` FROM `CAMPIONATO`;";
    $result = $conn->query($query);
?>

<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Registrazione Squadra</title> 
        <style> 
            body { 
                font-family: Arial, sans-serif; 
                background-color: #f0f0f0; 
            }
            form {
                width: 300px;
                margin: 0 auto;
                padding: 20px;
                background-color: #333;
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

            label {
                display: block;
                margin-bottom: 5px;
                color: #fff;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"],
            input[type="submit"] {
                width: 100%;
                padding: 8px;
                border: 1px solid #cccccc;
                border-radius: 3px;
                margin-bottom: 10px;
                box-sizing: border-box;
            }

            input[type="submit"]:hover {
                background-color: white;
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
            <form action="adminpage.php" method="post"> 
                <button type="submit">Home</button>
            </form>
            <a href="../frontend/login.php" class="logout">Logout</a>
        </header>
        <form method="post" action="../backend/creaSquadraAdminController.php"> 
            <label for="nome">Nome Squadra:</label> 
            <input type="text" name="nomeSquadra" required> <br> 
            <label for="colori">Colori</label> 
            <input type="text" name="colori" required> <br> 
            <label for="campionato">Seleziona il campionato:</label>
            <select id="campionato" name="campionato">
                <?php
                    while($row = $result->fetch_assoc()) {
                        echo "<option value=\"".$row["id"]."\">".$row["nome_campionato"]."</option>";
                    }
                ?>
            </select>
            <input type="submit" value="CREA"> 
        </form> 
    </body> 
</html>
