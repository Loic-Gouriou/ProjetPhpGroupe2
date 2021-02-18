<?php
function sortByCategory(){

    require('php/config.php');

    /*
    La requete : $query = $db->prepare("SELECT email FROM Users WHERE email = ?");
    Execute : $query->execute();
    Pour récupérer la données : $data = $query->fetch();
    */
    $query = $db->prepare('SELECT * FROM Categorie');
    $query->execute();
    $data = $query->fetch();
    var_dump($data);
    for($i = 0 ; $i == $data ; $i++){
        echo"<button data-filter=".$data.">".$data."</button>";
    }
}