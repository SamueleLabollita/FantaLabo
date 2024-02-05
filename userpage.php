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