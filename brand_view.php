<?php
require 'partials/header.php';
include 'functions.php';
$brand_id = $_GET['marque'];

if(is_file('data/data.php')){
    include 'data/data.php';

    $brand = get_brand_by_id($brand_id);
    $brand_result=[];
    $message='';

    foreach($shoes as $product){
        if($product['brand_id']==$brand_id){
            array_push($brand_result, $product);
        }
    }

    if($brand_result==[]){
        $message = 'Désolé, pas de résultat pour la marque '. ucfirst($brand['name']);
    }

    if(!$brand){
        $message= "Désolé, la marque demandée n'existe pas.";
    }

    
?>
        <h1 class="text-center"><?=$message?></h1>
        <div id="gallery" class="d-flex flex-wrap col-11 m-auto">
            <?php
            foreach($brand_result as $product):
                // template pour afficher un produit
                include('partials/product.php');
            endforeach; 
        } else {
            echo '<h1>Désolé, site en maintenance</h1>';
        }
        ?>
           
<?php
require 'partials/footer.php';