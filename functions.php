<?php

function display_price($num){
    $price = number_format($num, 2,',',' ');
    return $price;
}

function display_livraison($num){
    //if($num==0)
    if(!$num){
        return 'Livraison gratuite';
    } else {
        $price=display_price($num);
        $livraison="Livraison : ".$price." €";
        return $livraison;
    }
}

function display_dispo($bool){
    if(!$bool){
        return 'En rupture de stock !!';
    } else {
        return 'En stock !';
    }
}

function get_brand_by_id($id){
    include 'data/brands.php';
    foreach($brands as $value){
        if($value['id']==$id){
            return $value;
        }
    }
    return false;

}

function get_type_by_id($id){
    include 'data/types.php';
    foreach($type_array as $value){
        if($value['id']==$id){
            return $value;
        }
    }
    return false;

}
function get_product_by_id($id){
    include 'data/data.php';
    foreach($shoes as $value){
        if($value['id']==$id){
            return $value;
        }
    }
    return false;
}