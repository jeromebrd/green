<!-- <?php
require_once('co_bdd.php');
header('Content-Type: application/json');

// Récupération des informations de panier à partir de la base de données
$user_id = $_SESSION['user_id'];
$cart_items = $bdd->query("SELECT * FROM cart WHERE user_id = $user_id")->fetchAll();

$totalPrice = 0;
foreach ($cart_items as $item) {
    $totalPrice += $item['price'] * $item['quantity'];
}

$delivery = 20; // coût de livraison fixe
$discount = 10; // remise éventuelle
$netTotal = $totalPrice + $delivery - $discount;

// Retourner les informations sous forme de JSON
echo json_encode(array(
    'totalPrice' => $totalPrice,
    'delivery' => $delivery,
    'discount' => $discount,
    'netTotal' => $netTotal,
)); -->