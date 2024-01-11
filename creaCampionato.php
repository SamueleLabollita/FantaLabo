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
            background-color: #f0f0f0;
        }

        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #cccccc;
            background-color: #ffffff;
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
    </style>
    </head> 
    <body> 
        <header>
            <div>
                <span>Benvenuto, <?php echo $username; ?>!</span>
            </div>
            <form action="adminpage.php" method="post"> 
                <button type="submit">Home</button>
            </form>
            <form action="logout.php" method="post"> 
                <button type="submit">Logout</button>
        </header>
        <form method="post" action="creaCampionatoController.php"> 
            <label for="nome">Nome Campionato:</label> <input type="text" name="nomeCampionato" required> <br> 
            <input type="submit" value="CREA"> 
        </form> 
    </body> 
</html>