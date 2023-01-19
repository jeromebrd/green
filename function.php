<?php 
require('./co_bdd.php');
// echo 'function: ok';


// Récupération de la table products / prices / TVA groupé par l'id du produit

function getProducts($sortBy) {
  global $bdd ;
  $query = "SELECT p.id as product_id, p.name as product_name, p.description as product_descr, p.brand as product_brand, p.picture1 as product_picture, p.id_categories, p.quantity as product_qty, pr.id as price_id, pr.unit, pr.price, tva.rating
  FROM products p
  JOIN prices pr ON pr.id_products = p.id
  INNER JOIN tva ON id_TVA = tva.id
  
  ";
  // Récupération du paramètre cat de la requête GET
  $cat = isset($_GET['cat']) ? $_GET['cat'] : "";

 // Ajout d'une condition WHERE pour filtrer les produits selon leur catégorie
 if ($cat != "") {
  $query .= "WHERE p.id_categories = '$cat' ";
}

$query .= "GROUP BY p.id ";

// Récupération du paramètre sort_by de la requête GET
$sortBy = isset($_GET['sort_by']) ? $_GET['sort_by'] : "";


// Ajout des conditions 
if ($sortBy == "manual" || $sortBy == "" ) {
  $query .= "ORDER BY p.id DESC";
} else if ($sortBy == "price-ascending") {
  $query .= "ORDER BY (pr.price*rating) ASC";
} else if ($sortBy == "price-descending") {
  $query .= "ORDER BY (pr.price*rating) DESC";
} else if ($sortBy == "title-ascending") {
  $query .= "ORDER BY p.name ASC";
} else if ($sortBy == "title-descending") {
  $query .= "ORDER BY p.name DESC";
}




  $req = $bdd->prepare($query);
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

// function pour obtenir les 3 dernières nouveautées
function getNewProduct() {
  global $bdd;
  $req = $bdd->prepare("SELECT p.id FROM products as p ORDER BY p.id DESC LIMIT 3 ");
  $req->execute();
  $results=$req->fetchAll();                                              
  return $results;
}

// function pour récupérer les catégories

function getCategories() {
  global $bdd;
  $req = $bdd->prepare("SELECT * FROM categories ");
  $req->execute();
  $results = $req->fetchAll();
  return $results;
}

// function pour récupérer le nombre de produits par catégorie
function getTotalProductsByCategory() {
  global $bdd;
  
  // Récupération du paramètre cat de la requête GET
  $selectedCategory = isset($_GET['cat']) ? $_GET['cat'] : "";
  
  $query = "SELECT COUNT(*) as total_products
  FROM products p
  INNER JOIN categories ON p.id_categories = categories.id
  ";
  if($selectedCategory) {
    $query .= "WHERE categories.id = '$selectedCategory'";
  }
  
  $req = $bdd->query($query);
  $result = $req->fetch();
  $totalProducts = $result['total_products'];
  
  return $totalProducts;
}

// recuperer les produits en fonction de l'id du produit et de l'id prix

function postProduct($productId, $priceId = null) {
  global $bdd;
  
  $query = "SELECT p.id as product_id, p.name as product_name, p.quantity as product_qty, p.picture1 as product_img, pr.id as price_id, pr.unit, pr.price FROM products p LEFT JOIN prices pr ON pr.id_products = p.id WHERE p.id = ?";

  if(isset($priceId)){
    $query .= " AND pr.id = ?";
    $req = $bdd->prepare($query);
    $req->execute([$productId, $priceId]);
  } else {
    $req = $bdd->prepare($query);
    $req->execute([$productId]);
  }
  $results = $req->fetchAll();
  return $results;
}

// insérer les produits dans la table panier

function insertToCart($name, $price, $variant, $quantity, $product_id) {
  global $bdd;
  $req = $bdd->prepare('INSERT INTO cart (name, price, variant, quantity, id_products) VALUES (:name, :price, :variant, :quantity,  :id_products)');
  $req->bindValue(':name', $name);
  $req->bindValue(':price', $price);
  $req->bindValue(':variant', $variant);
  $req->bindValue(':quantity', $quantity);
  $req->bindValue(':id_products', $product_id);
  $req->execute();
  if($req->rowCount() > 0) {
    header('location: ./produits?success=add');
    exit();
} else {
    echo "Une erreur est survenue lors de l'insertion";
}
}

// répurérer les articles du client ajouter au panier (cart)
function getCarts() {
  global $bdd;
  $req = $bdd->prepare('SELECT * FROM cart');
  $req->execute();
  $results = $req->fetchAll();
  return $results;
}

// delete un produit dans le panier 
 function deleteProductCart($item_id) {
  global $bdd;
  try {
    $req = $bdd->prepare('DELETE FROM cart WHERE id = :item_id');
    $req->bindValue(':item_id', $item_id);
    $req->execute();
    (header('location: ./cart'));
  } catch (\Throwable $th) {
    echo "erreur : " . $e;
  }

  echo "article supprimé";
 }

//  obtenir le panier total 
function getTotalPrice() {
  global $bdd;
  // execute the SELECT SUM query
  $stmt = $bdd->query("SELECT SUM(price) FROM cart");
  // fetch the result
  $result = $stmt->fetch();
  // return the result
  return $result[0];
}