<?php
$servername = "localhost";
$username = "bit_academy";
$password = "bit_academy";


$conn = new PDO("mysql:host=$servername;dbname=passwordmanager", $username, $password);

$query = "SELECT title, username FROM wachtwoorden WHERE user = 'test'";

$query = $conn->query($query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>JarvisVault</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="sidebar">

        <div class="sidebar-brand">
            <h2><span class=" lab la-accusoft"></span>JarvisVault</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.html" class="active"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="subs.html"><span class="las la-money-bill"></span>
                        <span>Subscribtions</span></a>
                </li>
                <li>
                    <a href="contact.html"><span class="las la-phone"></span>
                        <span>Contact</span></a>
                </li>
                <li>
                    <a href="info.html"><span class="las la-question"></span>
                        <span>Info</span></a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>

                <label for="">
                    <span class="las la-bars"></span>
                </label>

                Dashboard
            </h2>

            <div class="searchwrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>

            <div class="user-wrapper">
                <img src="turk.jpg" width="40px" height="40px" alt="">
                <span>Super admin</span>
            </div>
        </header>
        <main>
            <div class="removelist">
                <a href=""><span class="las la-plus" title="Add"> </a>
                <a href=""><span class="las la-minus" title="Delete"> </a>
            </div>`


            <?php while ($row = $query->fetch()) {
            ?>
                <div class="dashboard-cards">
                    <div class="card-single">
                        <div>
                            <a href="detail.php">
                                <h2><?=$row['title']?> Password</h2>
                            </a>
                        </div>
                        <div>
                            <a href="editPassword.php"><span class="las la-pen" title="Edit"> </a>
                            <a href="RemoveContent.php"><span class="las la-dumpster" title="Delete"> </a>
                        </div>
                    </div>
                </div>
            <?php } ?>

    </div>
    </div>
    </main>
    </div>
</body>

</html>