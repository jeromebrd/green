<?php
require ('./co_bdd.php');
require('./function.php');
$tva = $_POST['tax'];
// verification si l'id du prix est envoyé dans la requête post
// s'il existe il est envoyé en argument a la fonction
if(isset($_POST['price_id'])) {
	$prices_id = !empty($_POST['price_id']) ? $_POST['price_id'] : null;
}

$products_id = $_POST['product_id'];
$postProducts = postProduct($products_id, $prices_id);

foreach ($postProducts as $product) {
	$product_id = $product['product_id'];
	$product_name = $product['product_name'];
	$product_img = $product['product_img'];
	$price_id =!empty($product['price_id']) ? $product['price_id'] : null;
	//verifier si un unit est récupéré ou pas
	if(isset($product['unit'])){
		$unit = $product['unit'];
	} else {
		$unit = '';
	};
	$price = $product['price'];
}
// valeur par défaut de quantity
if(!isset($quantity)) {
	$quantity = 1;
}


if(count($postProducts)>0){
	// ajout de la TVA au prix
	$price *= $tva;
	// insertion dans la table cart
  insertToCart($product_name, $price, $unit, $quantity , $product_id);
}

// header('location: ./produits?success=add_prod');

	/* echo "<pre>";
		echo "====POST====";
		var_dump($_POST);
		echo "<br> ===POST PRODUCTS===";
		var_dump($postProducts);
		// var_dump($postProduct);
		if(isset($price_id)) {
			echo "ID prix " . ($_POST['price_id']);
			echo "<br>";
		} else {
			echo "pas d'id prix";
			echo "<br>";

		}
		echo "ID produit " . ($_POST['product_id']);
		echo "<br>";
		echo "<a href='./produits.php'></a>";
	echo "</pre>"; */



    

		
?>

<html>
	<body>
		
		<a href='./produits.php'>retour produits</a>
	</body>

</html>



