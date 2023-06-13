<?php
require 'partials/header.php';
include 'functions.php';
$type_id = $_GET['type'];

if(is_file('data/data.php')){
    include 'data/data.php';

    $type = get_type_by_id($type_id);
    $type_result=[];
    $message ='';

    foreach($shoes as $product){
        if($product['type_id']==$type_id){
            array_push($type_result, $product);
        }
    }

    if($type_result==[] && $type!=0){
        $message = 'Désolé, pas de résultat pour le type '. ucfirst($type['name']);
    }
    
    if(!$type){
        $message= "Désolé, le type de chaussures demandé n'existe pas.";
    }
?>
        <h1 class="text-center"><?=$message?></h1>
        <div id="gallery" class="d-flex flex-wrap col-11 m-auto">
            <?php
            foreach($type_result as $product):
                // template pour afficher un produit
                include('partials/product.php');
            endforeach; 
        } else {
            echo '<h1>Désolé, site en maintenance</h1>';
        }
        ?>
           
<?php
require 'partials/footer.php';