<?php
    include_once 'header.php';
?>

        <section class="index-intro">
        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<p> Hello there " . $_SESSION["useruid"] . "</p>";
            } 
                      
                    
        ?>
            <h1>Welkom tot de kunstuitleen shop van Novi!</h1>
            <p> Zien wat wij beschikbaar voor verhuur hebben?</p>
            <a href="products.php">Klik hier!</a></li>
        </section>

        <section class="index-categories">
            <h3>Wat is nieuw?</h3> 
            <div class="index-categories-list"> 
                          
                <div>
                    <h3>Nieuwe producten</h3>
                </div><div>
                    <h3>Nieuwe producten</h3>
                </div><div>
                    <h3>Nieuwe producten</h3>
                </div><div>
                    <h3>Nieuwe producten</h3>
                </div>
            </div>
        </section>

    </div>


    <?php
    include_once 'footer.php';
?>
