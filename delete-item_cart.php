<?php
require ('./co_bdd.php');
require('./function.php');

//récupération de l'identifiant de l'élément à supprimer
$item_id = $_POST['item_id'];

// Vérifie que l'utilisateur est connecté et qu'il a les droits pour supprimer un produit


// Vérifie que item_id est un entier 
// check_item_id($item_id);

// Appel de la fonction pour supprimer un produit
deleteProductCart($item_id);

// renvoi d'une réponse à la requête AJAX
echo json_encode(array('status' => 'success'));