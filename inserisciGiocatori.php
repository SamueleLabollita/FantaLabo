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
        }
        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #cccccc;
            background-color: #ffffff;
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
    </style>
    </head> 
    <body> 
        <form method="post" action="inserimentoController.php"> 
            <label for="nome">Nome giocatore:</label> <input type="text" name="nome" required> <br> 
            <label for="cognome">Cognome:</label> <input type="text" name="cognome" required> <br> 
            <label for="ruolo">ruolo</label> <input type="text" name="ruolo" required> <br> 
            <input type="submit" value="Registra giocatore"> 
            <input type="submit" value="TORNA ALLA HOME" onclick="window.location.href='/www/adminpage.php'"> 
        </form> 
    </body> 
</html>