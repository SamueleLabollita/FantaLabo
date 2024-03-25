<?php 
session_start(); 

if (!isset($_SESSION["username"])) { 
    header("Location: /www/login.php"); 
    exit(); 
} 

$username = $_SESSION["username"]; 
?>
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Registrazione campionato</title> 
    <style> 
        body {
            font-family: Arial, sans-serif;
            background-color: lightblue;
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
            <form action="userpage.php" method="post"> 
                <button type="submit">Home</button>
            </form>
            <a href="../frontend/login.php" class="logout">Logout</a>
        </header>
        <form method="post" action="../backend/creaCampionatoUserController.php"> 
            <label for="nome">Nome Campionato:</label> <input type="text" name="nome_campionato" required> <br> 
            <input type="submit" value="CREA"> 
        </form> 
    </body> 
</html>