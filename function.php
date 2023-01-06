<?php 
require('./co_bdd.php');
echo 'function: ok';


// Récupération de la table products / prices / TVA groupé par l'id du produit

function getProducts() {
  global $bdd ;
  $req = $bdd->prepare("SELECT p.id as product_id, p.name as product_name, p.description as product_descr, p.brand as product_brand, p.picture1 as product_picture, p.quantity as product_qty, pr.id as price_id, pr.unit, pr.price, tva.rating
                        FROM products p
                        JOIN prices pr ON pr.id_products = p.id
                        INNER JOIN tva ON id_TVA = tva.id
                        GROUP BY p.id
                        ORDER BY pr.price ASC;
                        ");
  
   $req->execute();
   $results = $req -> fetchAll();
   return $results;
}

// function pour récupérer les prix des produits

function getPricesProducts() {
  global $bdd;
  $req = $bdd->prepare("SELECT p.id ,  p.name as product_name, pr.id as price_id, pr.unit, pr.price FROM products p INNER JOIN prices pr ON pr.id_products = p.id ");
  $req->execute();
  $results = $req -> fetchAll();
  return $results;
}

// récupérer les catégories

function getCategories() {
  global $bdd;
  $req = $bdd->prepare("SELECT * FROM categories ");
  $req->execute();
  $results = $req->fetchAll();
  return $results;
}


