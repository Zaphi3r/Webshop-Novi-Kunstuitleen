<?php
    session_id('login');
    session_start();
   
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Novi Kunstuitleen</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>

        
        <nav>
            <div class="wrapper">
                <ul>
                    <a href="index.php"><img src="img/logo-novi.png" width="75" height="75" alt="Novi logo"></>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="help.php">Help</a></li>
                    <?php
                        if (isset($_SESSION["useruid"])) {
                            echo "<li><a href='profile.php'>Profile</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                        } 
                        else {
                            echo "<li><a href='signup.php'>Sign up</a></li>";
                            echo "<li><a href='login.php'>Log in</a></li>";
                        }
                    ?>
                </ul>   
            </div>
        </nav>

    <div class="wrapper">