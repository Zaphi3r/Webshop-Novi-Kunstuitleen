<?php
include_once "header.php";
require "init.php";

$basicInfo = $coin->GetBasicProfile();
$username = $basicInfo['result']['public_name'];
$total = $_GET['total'];
?>





<br><br><br>
<div id="app" class="container">
    <div class="row">
        <div class="col-md-6.offset-md offset-md-3" style="margin:auto; background: white; padding: 20px; box-shadow: 10px 10px 5px #888;">
            <div class="panel-heading">
                <h1>Pay with crypto</h1>
                <p>to <strong><?php echo $username; ?></strong></p>
            </div>
            <hr>
            <form action="process.php" method="post" autocomplete="off">
                <label for="amount">Amount (EUR)</label>
                
                <input type="text" name="amount" class="form-control" value="<?php echo $total ?>" readonly="readonly">
                <br>
                <label for="email">Email Address</label>
                <input type="email" name="email" class="form-control">
                <br>
                <button type="submit" style="border-radius: 0px;" class="btn btn-lg btn-block btn-s">Pay to <?php echo $username; ?></button>
            </form>
        </div>
    </div>


</div>