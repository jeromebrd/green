<?php
require('header.php');
// $getProduct = getProductsWishlist($bdd);
// echo '<pre>';
//     var_dump($getProduct);
//     echo '<br>';
    
// echo '</pre>';
?>

<section class="wishlist">
  <div class="container">
    <h1 class="collection_title">Mes favoris</h1>
    <div class="row product_listing__main" id="product_listing__sorted">

  <?php 
  $getProduct = getProductsWishlist($bdd);
  foreach ($results as $product) { 
    echo '<pre>';
        var_dump($results);
        echo '<br>';
        
    echo '</pre>'?>
    <!-- <div class="col-lg-4 col-sm-4 col-md-4 col-6 product_item_wrap">
      <div class="product_item" id="product__afghan-kush">
            <div class="product_img_wrap">
                <div class="product_img">
                    <a class="img_change" href="#">
  
                        <img class="lazyload" src="//cdn.shopify.com/s/files/1/0425/0818/9859/products/afghan_kush_1_100x150_crop_center.jpg?v=1594034076" data-src="//cdn.shopify.com/s/files/1/0425/0818/9859/products/afghan_kush_1_280x280_crop_center.jpg?v=1594034076" alt="Afghan Kush">
  
                        <img class="lazyload image_2" src="//cdn.shopify.com/s/files/1/0425/0818/9859/products/afghan_kush_1_90x100_crop_center.jpg?v=1594034076" data-src="//cdn.shopify.com/s/files/1/0425/0818/9859/products/afghan_kush_1_279x300_crop_center.jpg?v=1594034076" alt="Afghan Kush">
  
  
  
  
                        <div class="bade_wrap">
  
  
  
                        </div>
  
                    </a>
                </div>
  
                <div class="product_links product_links_listing">
  
  
                    <div class="product_links__subbutton">
                        <a class="quick_view_btn" href="/products/afghan-kush" title="Quick view"><span>Quick view</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 6H10V8H12V10H10V12H8V10H6V8H8V6Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 18.5787L16.2437 14.8223C17.4619 13.2995 18.2741 11.269 18.2741 9.13706C18.2741 4.06091 14.2132 0 9.13706 0C4.06091 0 0 4.06091 0 9.13706C0 14.2132 4.06091 18.2741 9.13706 18.2741C11.269 18.2741 13.2995 17.5635 14.8223 16.2437L18.5787 20L20 18.5787ZM2.03046 9.13706C2.03046 5.17766 5.17766 2.03046 9.13706 2.03046C13.0964 2.03046 16.2437 5.17766 16.2437 9.13706C16.2437 13.0964 13.0964 16.2437 9.13706 16.2437C5.17766 16.2437 2.03046 13.0964 2.03046 9.13706Z" />
                            </svg>
                        </a>
  
  
  
                        <a href="/account/login" class="wishlist_btn wishlist_login">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 18L8.74 16.7826C4.06 12.7826 1 10.087 1 6.78261C1 4.08696 3.16 2 5.95 2C7.48 2 9.01 2.69565 10 3.82609C10.99 2.69565 12.52 2 14.05 2C16.84 2 19 4.08696 19 6.78261C19 10.087 15.94 12.7826 11.26 16.7826L10 18Z" stroke-width="2" stroke-linecap="round"></path>
                            </svg></a>
  
  
                    </div>
                </div>
  
            </div>
  
            <div class="product_info">
  
                <div class="product_color"></div>
  
                <p class="product_vendor"><?= $product['brand']?></p>
  
                <p class="product_name">
  
                    <a href="/collections/all/products/afghan-kush">Afghan Kush</a>
  
                </p>
  
                <p class="product_price">
  
  
  
                    <span class="money main_price">€219,73</span> <span class="money_like main_price">–</span> <span class="money main_price">€248,39</span>
  
  
  
                </p>
  
  
                <p class="product_desc_detail">Health is one of the most important things in our life. We think that it is a real luck to have a strong health. Our way of life doesn’t increase the physiological condition of our body.
                    Alcohol, ...</p>
  
  
                <form method="post" action="/cart/add" class="add_to_cart_form">
  
  
                    <a class="btn btn_options" href="/products/afghan-kush">
                        <span>Choose variant</span>
                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.777344 6.77789V5.22233H10.1107L6.99957 2.11122L7.77734 0.555664L13.2218 6.00011L7.77734 11.4446L6.99957 9.889L10.1107 6.77789H0.777344Z" fill="white" />
                        </svg>
                    </a>
  
  
                </form>
  
            </div>
        </div>
  
    </div> -->
    



  <?php } ?>


                        

                    </div>
  
  </div>

</section>



<?php
require('footer.php');
?>