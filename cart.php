<?php 
require_once('header.php');
require_once('function.php');
$getCarts = getCarts();
?>

<div class="container_cart">
  <h1>Votre panier</h1>
   <!-- container product + container payment -->
   <div class="container-shopping-cart">
        <div class="shopping-payment">
          <div class="resume-product">
            <?php
              foreach ($getCarts as $productCart) : 
                $id_rowCart = $productCart['id'];
                $product_name = $productCart['name'];
                $product_price = $productCart['price'];
                $product_unit = $productCart['variant'];
                $product_qty= $productCart['quantity'];
                $product_id = $productCart['id_products']; 
                $price_format = number_format($product_price, 2, ',', ' ');
            ?>    
              
                <div class="grid-shopping-cart">
                  <img class="lazyload" src="//cdn.shopify.com/s/files/1/0425/0818/9859/products/afghan_kush_1_100x150_crop_center.jpg?v=1594034076" data-src="//cdn.shopify.com/s/files/1/0425/0818/9859/products/afghan_kush_1_280x280_crop_center.jpg?v=1594034076" alt="Afghan Kush">
                  <div class="resume-product-text">
                    <h3 class="title-product " id="title-xs"><?= $product_name ?></h3>
                    <p class="product-unit"><?= $product_unit?></p>
                    <p><?= $product_price ?>€</p> 
                    <!-- prix sans tva ..... -->
                  </div>
                  <div class="quantity">
                    <h3 class="title-xs">Quantité</h3>
                    <form action="#">
                      <input
                        type="number"
                        name="nbr-of-product"
                        id="nbr-of-product"
                        value="<?= $product_qty ?>"
                      />
                    </form>
                  </div>
                  <div class="price-total">
                    <h3 class="title-xs">Total</h3>
                    <!-- a changer en fonction de la quantité -->
                    <p class="bold"><?= $price_format ?>€</p>
                  </div>
                  <a href="#" class="btn-delete" data-id="<?= $id_rowCart; ?>">
                    <i class="fa fa-trash"></i>
                  </a>
                </div>
                
            <?php endforeach; ?>
          </div>
          <div class="container-payment">
          <div class="payment-title">
            <h2>Paiement</h2>
            <i class="fa-solid fa-credit-card"></i>

          </div>
          <?php $priceTotalCart = getTotalPrice()?>
          <div class="underline"></div>
          <div class="payment-total">
            <div class="payment-total-text">
              <p class="flex-x space-btw">Total :<span class="price total-without-discount"><?= $priceTotalCart ; ?></span></p>
              <p class="flex-x space-btw">Livraison :<span class="price delivery">--€</span></p>
              <p class="flex-x space-btw">Remise :<span class="price discount">--€</span></p>
              <div class="underline"></div>
              <div class="totat-net">
                <p class="flex-x space-btw bold">Total net à payer :<span class="price total-net-payment">160€</span></p>
              </div>
              <form action="#" class="promo">
                <div class="flex-x space-btw">
                  
                  <p>Code promo : </p>
                  <div class="flex-x">
                    <input type="text" name="promo-code" id="promo-code" size="10" >
                  </div>
                </div>
                <label for="choice-delivery">Méthode de livraison :</label>
                <select name="choice-delivery" id="choice-delivery">
                  <option value="choice-1">Livraison Domicile <span>(Gratuit)</span></option>
                  <option value="choice-2">Livraison Express <span>(+10€)</span></option>
                  <option value="choice-3">Point Relais <span>(Gratuit)</span></option>
                </select>
              </form>
              <button class="btn btn-payment">
                Valider ma commande
              </button>
              <a href="produits" class="btn btn-continu">Continuer mes achats</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>  

<?php require('footer.php') ?> 