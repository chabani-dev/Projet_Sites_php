<?php
include 'functions.php';

$product_id = $_GET['article'];
$product = get_product_by_id($product_id);
$couleurs = $product['couleurs'];
if(!$product){
    header('Location: 404.php');
    exit;
}

require 'partials/header.php';


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
<div class="d-flex">
<div class="card col-6" >
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
</div>
<div class="card col-6">
    <form class="m-4" action="">
        <select class="form-select mb-4" aria-label="Default select example">
            <option selected>Taille</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
        </select>
        <select class="form-select mb-4" aria-label="Default select example">
            <option selected>Couleur</option>
            <?php
            foreach($couleurs as $couleur){
                ?>
            <option value="<?=$couleur?>"><?=$couleur?></option>
            <?php } ?>
        </select>
        <button type="submit" class="btn btn-secondary">Ajouter au panier</button>
    </form>
    <h3 class="mt-4 me-4 ms-4">Description de l'article :</h3>
    <p class="mt-1 me-4 ms-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa magnam obcaecati ut? Earum itaque labore fuga nostrum doloribus vitae eius voluptas, ipsam est rerum aut beatae iure harum reprehenderit culpa consequuntur blanditiis incidunt deleniti. Tempora et necessitatibus hic ullam deleniti, mollitia vitae quia atque eligendi. Necessitatibus beatae sequi pariatur expedita consequuntur sunt, doloribus natus nisi aperiam similique consequatur, incidunt odio sapiente suscipit accusantium nihil facere quis quia consectetur, alias cum. Sequi, repellat hic. Nisi, iure doloremque omnis cumque eligendi impedit voluptas, dolore vel officia illum rem soluta magnam! Consequuntur maxime expedita hic odit libero distinctio harum neque nam dolor tempore.</p>
</div>
</div>

<?php
require 'partials/footer.php';