<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <style>
        .body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .user-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .welcome-message {
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="user-container">
        <h2>User Page</h2>
        <div class="welcome-message">
            <?php
            // Verifica se la variabile del nome utente è impostata
            if (isset($_GET['username'])) {
                $username = htmlspecialchars($_GET['username']);
                echo "Welcome, $username!";
            } else {
                echo "Invalid username.";
            }
            ?>
        </div>
    </div>

</body>
</html>


