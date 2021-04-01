<?php
    include 'header.php';
?> 

         
            <form class="login-form" action="includes/login.inc.php" method="post">      
            <div class="login-form-content">
                <div class="login-form-header">Log in to your account</div>
                <input class="login-form-input" type="text" name="uid" placeholder="Username/Email...">
                <input class="login-form-input" type="password" name="pwd" placeholder="Password...">
                <button class="login-form-button" type="submit" name="submit">Log In</button>
                </div>

            </form>
        
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect username or password!</p>";
            } 
        }
    

?>



    <?php
    include_once 'footer.php';
?>
