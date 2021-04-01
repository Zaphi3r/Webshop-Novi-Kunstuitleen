<?php
    include_once 'header.php';
?>
         <div class="profile-page">         
                        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<h2> Hello there, " . $_SESSION["useruid"] . "!</h2>";
            }
        if (isset($_SESSION["role"])) {
            echo "<h2> Hello there, " . $_SESSION["role"] . "!</h2>";
            }
            
        ?>                                                
                    
                 
                
               
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Frank</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>abc@hotmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Rol</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Medewerker</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Crypto Wallet</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Informatie m.b.t Cryptowallet</p>
                                            </div>
                                        </div>
                                        <p>Klik hier om kunst te verhuren</p>
                            </div>
          
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
      
 
       






<?php
    include_once 'footer.php';
?>