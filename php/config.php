<?php
/**
 * Je crée un fichier database qui me permettra de me connecter à la base de données
 * Toutes mes autres fichier utiliseront ce fichier grâce au mot-clé require_once
 * L'avantage est qu'on ne répète pas ce bout de code, que si l'on a une modification à effectuer
 * on ne devra la faire que dans ce fichier
*/
try {
  // connection à la base de donnée
  $db = new PDO('mysql:host=cosql.fakecompany.life;port=3306;dbname=groupe2', 'groupe2', 'Super-Groupe2');

  // Affiche un max d'erreur
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // default fetch mode
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  
} catch (Exception $e) {
  // Si la tentative échoue on termine le script courant avec die en affichant un message d'érreur récupérer dans l'exception $e
  die('Erreur : ' . $e->getMessage());

}
