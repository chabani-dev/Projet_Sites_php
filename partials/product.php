<?php
// on récupère la marque
$brand_id = $product['brand_id'];
$brand = get_brand_by_id($brand_id);
if(!$brand){
    $brand = ['name'=>'sans marque'];
}
// on récupère le type
$type_id = $product['type_id'];
$type = get_type_by_id($type_id);
if(!$type){
    $type = ['name'=>'non renseigné'];
}
?>

<div class="card col-3" >
    <img src="<?=$product['image']?>" class="card-img-top" alt="<?=$product['name']?>">
    <div class="card-body">
        <h5 class="card-title"><?=$product['name']?></h5>
        <p class="card-text"><?=$product['description']?></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="./type_view.php?type=<?=$type_id?>"><?=ucfirst($type['name'])?></a></li>
        <li class="list-group-item">Prix : <?=display_price($product['prix'])?> €</li>
        <li class="list-group-item"><?=display_dispo($product['dispo'])?></li>
        <li class="list-group-item"><?=display_livraison($product['livraison'])?></li>
        <li class="list-group-item"><a href="./brand_view.php?marque=<?=$brand_id?>"><?=ucfirst($brand['name'])?></a></li>
    </ul>
    <div class="card-body">
        <a href="./single.php?article=<?=$product['id']?>" class="card-link">en savoir plus</a>
    </div>
</div>