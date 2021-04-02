<?php

include_once "header.php";
require "init.php";

$basicInfo = $coin->GetBasicProfile();
$username = $basicInfo['result']['public_name'];
$amount = $_POST['amount'];
$email = $_POST['email'];

$scurrency = "EUR";
$rcurrency = "BTC";

$request = [
    'amount' => $amount,
    'currency1' => $scurrency,
    'currency2' => $rcurrency,
    'buyer_email' => $email,
    'item' => "donate to myPHPnotes",
    'adress' => "",
    'ipn_url' => "http://localhost/novikunstuitleen/webhook.php"
];

$result = $coin->CreateTransaction($request);
if ($result['error'] == "ok") {
    
} else {
    print 'Error: ' . $result['error'] . "\n";
    die();
}
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
                <label for="amount">Amount (<?php echo $rcurrency; ?>)</label>
                <h1><?php echo $result['result']['amount'] ?> <?php echo $rcurrency ?></h1>
               <hr>
               <a href="<?php echo $result['result']['status_url'] ?>" class="btn btn-success btn block"> Pay Now</a>
            </form>
        </div>
    </div>

</div>