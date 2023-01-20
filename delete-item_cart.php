<?php
require ('./co_bdd.php');
require('./function.php');

//récupération de l'identifiant de l'élément à supprimer
$item_id = $_GET['i'];

// Vérifie que l'utilisateur est connecté et qu'il a les droits pour supprimer un produit


// Appel de la fonction pour supprimer un produit
deleteProductCart($item_id);

echo "suppression ok";