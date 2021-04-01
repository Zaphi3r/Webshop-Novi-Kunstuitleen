<?php
    include_once 'header.php';
?>

        
         
            <form class="signup-form"action="includes/signup.inc.php" method="post">   
            <div class="signup-form-content">
            <div class="signup-form-header">Sign up</div>
            <input class="signup-form-input" type="text" name="name" placeholder="Full name...">
            <input class="signup-form-input" type="text" name="email" placeholder="Email...">
            <input class="signup-form-input" type="text" name="uid" placeholder="Username...">
            <input class="signup-form-input" type="password" name="pwd" placeholder="Password...">
            <input class="signup-form-input" type="password" name="pwdrepeat" placeholder="Repeat password...">
            <button class="signup-form-button" type="submit" name="submit">Sign up</button>
            
        </div>
            </form>
        

    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "invaliduid") {
                echo "<p>Choose a proper username!</p>";
            } 
            else if ($_GET["error"] == "invalidEmail") {
                echo "<p>Choose a proper email!</p>";
            } 
            else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords don't match!</p>";
            } 
            else if ($_GET["error"] == "stmt") {
                echo "<p>Something went wrong, try again!</p>";
            } 
            else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username already taken!</p>";
            } 
            else if ($_GET["error"] == "none") {
                echo "<p>You have signed up!</p>";
            } 
        }

?>



    <?php
    include_once 'footer.php';
?>
