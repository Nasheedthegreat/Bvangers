<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>PHP Data Objects</title>
</head>
<body>
    <h1>PHP Data Objects</h1>
    <?php
    // Connect to the database
    $dsn = 'mysql:host=localhost;dbname=example';
    $username = 'root'; 
    $password = '';
    try {
        $db = new PDO($dsn, $username, $password);
        echo '<p>You are connected to the database!</p>';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>An error occurred while connecting to the database: $error_message</p>";
    }
    ?>
