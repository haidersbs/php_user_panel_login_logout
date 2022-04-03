<?php

session_start();

if(isset($_SESSION['active'])){
    header('Location: admin.php');
}
if(isset($_POST['submit'])){

    define('EMAIL','ami@ami.com');
    define('PASSWORD', 1234 );

    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == EMAIL && $password == PASSWORD  ){

        $_SESSION['active'] = "";

        header('Location: admin.php');

        

    }else{
        $fail = "User or Pass not match";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER LOGIN</title>
</head>
<body>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Enter Your Mail"><br><br>
        <input type="password" name="password" placeholder="Enter Your Password"><br><br>
        <input type="submit" name="submit" value="LOG IN"><br>
    </form>

    <h1>
        <?php
            if(isset ($fail )){
                echo $fail;
            }
        
        ?>
    </h1>


    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>