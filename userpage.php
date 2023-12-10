<?php
    session_start();
    $post = $_SESSION['POST'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .messaggio {
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="user-container">
        <h2>Home Page</h2>
        <div class="messaggio">
            <?php
            if (isset($post['username'])) {
                $username = $post['username'];
                echo "Benvenuto, $username!";
            } else {
                echo "username sbagliato.";
            }
            ?>
        </div>
    </div>
</body>
</html>


