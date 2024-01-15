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
        <title>Home</title> 
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
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
                background-color: blue;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            button:hover {
                background-color: lightblue;
            }
        </style>
    </head> 
    <body> 
        <header>
            <div>
                <span>Benvenuto, <?php echo $username; ?>!</span>
            </div>
            <form action="logout.php" method="post"> 
                <button type="submit">Logout</button>
            </form>
        </header>
        <h1>ADMIN PAGE</h1>
        <form action="creaCampionatoAdmin.php" method="post"> 
            <button type="submit">Crea campionato</button>
        </form>
        <form action="creaSquadraAdmin.php" method="post"> 
            <button type="submit">Crea squadra</button>
        </form>
        <form action="inserisciGiocatori.php" method="post">
            <button type="submit">Inserisci giocatori nel database</button>
        </form>
        <form action="inserisciGiocatoriNellaSquadra.php" method="post">
            <button type="submit">Inserisci giocatori nella squadra</button>
        </form>
        <form action="visualizzaGiocatori.php" method="post">
            <button type="submit">visualizza giocatori presenti</button>
        </form>
    </body> 
</html>