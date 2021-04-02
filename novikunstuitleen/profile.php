<?php
    include_once 'header.php';
?>
         <div class="profile-page">         
                        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<h2> Hello there, " . $_SESSION["useruid"] . "!</h2>";
        }
            
        ?>                                                
                    
                 
                
               
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION["useruid"] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION["email"] ?></p>
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

                                        <?php
                                     
                                        if (isset($_SESSION["role"])) {
                                        
                                        ?>
                                        
                                        <form class="profile-form"action="upload.php" method="POST" enctype="multipart/form-data">
                                        <div class="profile-form-content">
                                        <h3>Kunst verhuren</h3>
                                        <p>Foto</p>
                                        <input class="profile-form-upload" type="file" name="file">
                                        <p>Naam</p>
                                        <input class="profile-form-input" type="text" name ="upload-name" class="form-control" />
                                        <p>Prijs</p>
                                        <input class="profile-form-input" type="text" name ="upload-price" class="form-control" />


                                        <button class="profile-form-button" type="submit" name="submit-art">UPLOAD
                                        </button>
                                        </div>
                                        </form>       

                                        
                                  <?php
                                        }
                                  ?>      
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