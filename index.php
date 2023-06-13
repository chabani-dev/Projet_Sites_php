<?php
require 'partials/header.php';
include 'functions.php';

if(is_file('data/data.php')){
    include 'data/data.php';
    
    
?>

        <div id="gallery" class="d-flex flex-wrap col-11 m-auto">
            <?php
            foreach($shoes as $product):
                // template pour afficher un produit
                include('partials/product.php');
            endforeach; 
        } else {
            echo '<h1>Désolé, site en maintenance</h1>';
        }
        ?>
           
<?php
require 'partials/footer.php';
        