<?php 

function utils_img($href, $i){
    require_once("config.php");

    $query2 = $db->prepare('SELECT article_img , categorie_id FROM Article ORDER BY categorie_id');
    $query2->execute();
    $data2 = $query2->fetchAll();

    $categorieId = $data2[$i]["categorie_id"];

    if( $href == $categorieId){
        echo '<img class="img_data" id="'.$categorieId.'" src="'.$data2[$i]["article_img"].'" alt="">';
    }
}

?>