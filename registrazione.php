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
        <form method="post" action="registrazioneController.php"> 
            <label for="nome">Nome:</label> <input type="text" name="nome" required> <br> 
            <label for="cognome">Cognome:</label> <input type="text" name="cognome" required> <br> 
            <label for="username">Username:</label> <input type="text" name="username" required> <br> 
            <label for="password">Password:</label> <input type="password" name="password" required> <br> 
            <label for="mail">Mail:</label> <input type="email" name="mail" required> <br> 
            <input type="submit" value="Registrati"> 
            <input type="submit" value="Ho già un account" onclick="window.location.href='login.php'"> 
        </form> 
    </body> 
</html>