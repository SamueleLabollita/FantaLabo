<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Registrazione</title> 
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
        <form method="post" action="creaCampionatoController.php"> 
            <label for="nome">Nome Campionato:</label> <input type="text" name="nomeCampionato" required> <br> 
            <input type="submit" value="CREA"> 
        </form> 
    </body> 
</html>