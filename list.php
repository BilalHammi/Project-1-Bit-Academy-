<?php

$servername = "localhost";
$username = "bit_academy";
$password = "bit_academy";


$conn = new PDO("mysql:host=$servername;dbname=passwordmanager", $username, $password);

$query = "SELECT title, username, id FROM wachtwoorden";

$content = $conn->query($query);

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
        <h1>Jou opgeslagen items:</h1>
        <table>
            <tr>
                <th>Title</th>
                <th>username</th>
            </tr>
            <?php while ($row = $content->fetch()) { ?>
                <tr>
                    <td><?= $row[0] ?></td>
                    <td><?= $row[1] ?></td>
                    <td><a href="detail.php?id=<?= $row[2] ?>"><button>Bekijk wachtwoord</button></a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>
