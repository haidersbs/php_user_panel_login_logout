<?php
    session_start();

    if(!isset($_SESSION['active'])){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR ADMIN PANEL</title>
</head>
<body>
    <h1>your admin panel</h1>


    <a href="logout.php">LOG OUT</a>
</body>
</html>