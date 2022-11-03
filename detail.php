<?php

$servername = "localhost";
$username = "bit_academy";
$password = "bit_academy";


$conn = new PDO("mysql:host=$servername;dbname=passwordmanager", $username, $password);

$id = $_GET["id"];
$query = "SELECT title, username, password FROM wachtwoorden WHERE id = $id";

$result = $conn->query($query);
$row = $result->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="content">
        <table>
            <tr>
                <th>Gegevens</th>
            </tr>
            <tr>
                <td>Title: </td>
                <td><?php echo $row[0]; ?></td>
            </tr>
            <tr>
                <td>Username: </td>
                <td><?php echo $row[1]; ?></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><?php echo $row[2]; ?></td>
            </tr>
        </table>
    </div>
    <form action="list.php" method="POST">
        <input type="submit" value="<- Terug">
    </form>
</body>

</html>
