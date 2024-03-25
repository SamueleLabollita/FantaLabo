<?php
    session_start();
    $_SESSION['POST'] = $_POST;
    if(isset($_POST['username'])){
        header("Location: /www/userpage.php");  
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0099ff;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
        }

        .login-container button {
            background-color: #0099ff;
            color: black;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h2>Accedi</h2>
        <form action="../backend/loginController.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Entra</button> 
            <input type="submit" value="REGISTRAZIONE" onclick="window.location.href='registrazione.php'">
        </form>
    </div>

</body>
</html>
