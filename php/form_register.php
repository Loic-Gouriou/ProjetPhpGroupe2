<?php

require_once('config.php');

$nom = stripslashes($_POST['nom']);

$prenom = stripslashes($_POST['prenom']);

$email = stripslashes($_POST['email']);

$password = stripslashes($_POST['password']);
$mdphash = stripslashes(hash("sha256", $password));

$numVoie = stripslashes($_POST['numVoie']);

$rue = stripslashes($_POST['rue']);

$infoComp = stripslashes($_POST['infoComp']);

$ville = stripslashes($_POST['ville']);

$codePostal = stripslashes($_POST['codePostal']);


$query = $db->prepare("SELECT users_email FROM Users WHERE users_email = ?");
$query->execute([$email]);
$data = $query->fetch();

var_dump($data);

// if ($data) {

//     header("Location: register.php");

// } else {

if (isset($nom, $prenom, $email, $password)) {

    $query = $db->prepare("INSERT INTO Users (users_nom, users_prenom, users_email, users_mdp, users_numVoie, users_rue, users_infoComp, users_ville, users_codePostal, role_id) VALUES (:nom, :prenom, :email, :mdp, :numVoie, :rue, :infoComp, :ville, :codePostal, 1)");
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':mdp', $mdphash, PDO::PARAM_STR);
    $query->bindValue(':numVoie', $numVoie, PDO::PARAM_INT);
    $query->bindValue(':rue', $rue, PDO::PARAM_STR);
    $query->bindValue(':infoComp', $infoComp, PDO::PARAM_STR);
    $query->bindValue(':ville', $ville, PDO::PARAM_STR);
    $query->bindValue(':codePostal', $codePostal, PDO::PARAM_INT);
    $query->execute();

    header("Location: login.php");

    // }
}
