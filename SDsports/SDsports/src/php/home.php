<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>

    <!DOCTYPE html>`
    <html>
        <head>
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="../styles/login.css">
        </head>
        <body>
            <h1>Welkom!, <?php echo $_SESSION['user_name']; ?></h1>
            <a href="logout.php"><button id="logout">Logout</button></a>
        </body>
    </html>

    <?php
}
else {
    header("Location: index.php");
    exit();
}