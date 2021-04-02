<?php
    include_once 'header.php';
?>

<?php

            $connect = mysqli_connect('localhost', 'root', '', 'shopping_cart');
            $query = 'SELECT * FROM products ORDER BY id DESC LIMIT 4';
            $result = mysqli_query($connect, $query);
           
  ?>
           


        <section class="index-intro">
 
            <h1>Welkom tot de kunstuitleen shop van Novi!</h1>
            <p> Zien wat wij beschikbaar voor verhuur hebben?</p>
            <a href="products.php">Klik hier!</a></li>
        </section>

        <section class="index-categories">
            <h3>Wat is nieuw?</h3> 
            <div class="index-categories-list"> 
            <?php
            if($result):
                if(mysqli_num_rows($result)>0):
                    while($product = mysqli_fetch_assoc($result)):     
                    ?>   
                <div>
                <img src="uploads/<?php echo $product['image']?>" class="img-responsive" />
                <h3 class="text-info"><?php echo $product['name']; ?></h3>

                
            
       

    
    <?php
                    endwhile;
                endif;
            endif;
        ?>
        </div>
        </div>
        </div>
 </section>
    <?php
    include_once 'footer.php';
?>
