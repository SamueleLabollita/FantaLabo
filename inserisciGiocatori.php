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
                background-color: #333;
                text-align: center;
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
            margin-bottom: 10px;
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
    </style>
    </head> 
    <body> 
        <header>
            <form action="adminpage.php" method="post"> 
                <button type="submit">Home</button>
            </form>
        </header>
        <form method="post" action="inserimentoController.php"> 
            <label for="nome">Nome giocatore:</label> <input type="text" name="nome" required> <br> 
            <label for="cognome">Cognome:</label> <input type="text" name="cognome" required> <br> 
            <!--<label for="ruolo">ruolo</label> <input type="text" name="ruolo" required> <br> -->
            <label for="ruolo">Seleziona il ruolo</label>
            <select id="ruolo" name="ruolo">
                <option value="Portiere">Portiere</option>
                <option value="Difensore">Difensore</option>
                <option value="Centrocampista">Centrocampista</option>
                <option value="Attaccante">Attaccante</option>
            <input type="submit" value="Registra giocatore"> 
        </form> 
    </body> 
</html>