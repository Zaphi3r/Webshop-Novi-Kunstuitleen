
    <body>
    <div class="wrapper">    
    <div class="container">
        
            
        <?php

            $connect = mysqli_connect('localhost', 'root', '', 'shopping_cart');
            $query = 'SELECT * FROM products ORDER BY id ASC';
            $result = mysqli_query($connect, $query);

            if($result):
                if(mysqli_num_rows($result)>0):
                    while($product = mysqli_fetch_assoc($result)):     
                    ?>
                    <div class="col-sm-4 col-md-3" >
                        <form method="post" action="products.php?action=add&id=<?php echo $product['id']?>">
                            <div class="products">
                                <img src="<?php echo $product['image']?>" class="img-responsive" />
                                <h4 class="text-info"><?php echo $product['name']; ?></h4>
                                <h4><?php echo $product['price']; ?></h4>
                                <input type="text" name ="quantity" class="form-control" value="1" />
                                <input type="hidden" name="name" value="<? echo $product['name']; ?>" />
                                <input type="hidden" name="price" value="<? echo $product['price']; ?>" />
                                <input type="submit" name="add_to_cart" style="margin-top:10px;"class="btn btn-info" value="Add to Cart" />
                            </div>
                        </form>
                    </div>
                    <?php
                    endwhile;
                endif;
            endif;
                

            
            ?>
            </div>    
        </div>
    </body>
</html>



