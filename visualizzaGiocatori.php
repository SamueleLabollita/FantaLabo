<?php 
session_start(); 

if (!isset($_SESSION["username"])) { 
    header("Location: /www/login.php"); 
    exit(); 
} 

$username = $_SESSION["username"]; 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FantaLabo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$query = "SELECT nome, cognome, ruolo FROM GIOCATORE";

if(isset($_POST['submit']) && $_POST['ruolo'] != "") {
    $ruolo = $_POST['ruolo'];
    $query .= " WHERE ruolo='$ruolo'";

}else if(isset($_POST['submit']) && $_POST['ruolo'] == ""){
    $query .= " WHERE ruolo='Attaccante' OR ruolo='Difensore' OR ruolo='Centrocampista' OR ruolo='Portiere'";
}
$result = mysqli_query($conn, $query);


?> 

<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Pagina Admin</title> 
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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        tr:hover {
            background-color: #ddd;
        }
        </style>
    </head> 
    <body> 
        <header>
            <form action="adminpage.php" method="post"> 
                <button type="submit">Home</button>
            </form>
            <form action="logout.php" method="post"> 
                <button type="submit">Logout</button>
            </form>
        </header>
        <h1>Visualizzazione giocatori</h1>
        <form id="filterForm" action="" method="post">
            <label for="ruolo">Seleziona il ruolo:</label>
            <select name="ruolo" id="ruolo">
                <option value="Attaccante">Attaccante</option>
                <option value="Difensore">Difensore</option>
                <option value="Centrocampista">Centrocampista</option>
                <option value="Portiere">Portiere</option>
                <option value="">Tutti</option>
            </select>
            <button type="submit" name="submit">Filtra</button>
        </form>
        <table>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Ruolo</th>
            </tr>
            <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['cognome']."</td>";
                    echo "<td>".$row['ruolo']."</td>";
                    echo "</tr>";
                }
                if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
                    exit(); 
                }
            ?>
             
            </tbody>
        </table>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#filterForm").submit(function(e){
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "visualizzaGiocatori.php",
                        data: $(this).serialize(),
                        success: function(response){
                            $('table tbody').html(response);
                        }
                    });
                });
            })
        </script>
    </body>
</html>
