<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>JarvisVault</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        body {
            overflow: hidden;
            display: flex;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class=" lab la-accusoft"></span>JarvisVault</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php" class=""><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href='contactpage.php' class="active"><span class="las la-phone"></span>
                        <span>Contact</span></a>
                </li>
                <li>
                    <a href="info.php"><span class="las la-question"></span>
                        <span>Info</span></a>
                </li>
                <li>
                    <a href="Form.php"><span class=""></span>
                        <span>WW Aanmaken</span></a>
                </li>
                <li>
                    <a href="editPassword.php"><span class=""></span>
                        <span>WW wijzigen</span></a>
                </li>
                <li>
                    <a href="notes.php" class=""><span></span>
                        <span>Notes</span></a>
                </li>
            </ul>
            <form action="index.php" method="post" id="form1"><input type="submit" name="submit" value="Uitloggen!"></form>
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
        </header>
        <main class="allbread">
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                    </div>

                    <div class="contactbar">

                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="info-wrap w-100 p-lg-5 p-4 img">
                                <h3>Contact us</h3>
                                <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                <p><strong>If you are planning coming to our location, please make sure to make an
                                        appointment before
                                        you come we might not have time to fit you in.</strong></p>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Address:</span> Amsterdam Willem kaas de vreter</p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Phone:</span> <a href="tel://1234567920">+31 6 12345678</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Email:</span> <a href="mailto:info@jarvisvault.com">info@jarvisvault</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Website</span> <a href="www.JarvisVault.com">JarvisVault</a></p>
                                    </div>
                                </div>
            </section>

    </div>
    </div>
    </main>
    </div>
</body>

</html>