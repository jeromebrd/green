<?php
require_once('./header.php'); 


if(isset($_GET['sort_by'])) {
    $products = getProducts($_GET['sort_by']);
} else {
    $products = getProducts("");

}

$priceProducts = getPricesProducts();
$categories = getCategories();



// echo '<pre> PRODUCT';
// // var_dump($products);
// echo '<br>  Price';
// var_dump($products);

// echo '<br> SESSION';
// echo '<br> GET';
// print_r($_GET);

// echo '</pre>';
?>

<div class="page_container">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><span>Nos produits</span></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="collection_info_wrapper">
            <div class="collection_info">
                <div class="collection_text ">
                    <div>
                        <h1 class="collection_title">Produits</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="main_content sidebar_on col-md-12 col-lg-9 left-sidebar">
                <div id="shopify-section-template-collection" class="shopify-section section_template section_template__collection">
                    <div class="product_options">
                        <div class="product_options__sort">
                            <label for="sort_by_select">Filtre:</label>
                            <div class="select-wrapper">
                                <select id="sort_by_select">
                                    <option value="manual">Nouveautées</option>
                                    <!-- <option value="best-selling">Meilleurs vente</option> -->
                                    <option value="title-ascending">Nom: A – Z</option>
                                    <option value="title-descending">Nom: Z – A</option>
                                    <option value="price-descending">Prix: + au -</option>
                                    <option value="price-ascending">Prix: - au +</option>
                                </select>
                                <div class="select-arrow-1"></div>
                            </div>
                        </div>
                        <!-- NOMBRE TOTAL DE PRODUIT -->
                        <div class="product_count">
                        <?php 
                            $totalProducts = getTotalProductsByCategory();
                        ?> 
                        <?= $totalProducts ?> Produits</div>

                        <ul class="product_view">
                            <li id="view_grid" data-view="grid" class="active">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10.9091" width="4.09091" height="4.09091" />
                                    <rect x="10.9091" y="5.45459" width="4.09091" height="4.09091" />
                                    <rect x="10.9091" y="10.9092" width="4.09091" height="4.09091" />
                                    <rect x="5.45459" width="4.09091" height="4.09091" />
                                    <rect x="5.45459" y="5.45459" width="4.09091" height="4.09091" />
                                    <rect x="5.45459" y="10.9092" width="4.09091" height="4.09091" />
                                    <rect width="4.09091" height="4.09091" />
                                    <rect y="5.45459" width="4.09091" height="4.09091" />
                                    <rect y="10.9092" width="4.09091" height="4.09091" />
                                </svg>
                            </li>
                            <li id="view_list" data-view="list">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="6.09106" y="1.36353" width="9.54545" height="1.36364" />
                                    <rect x="6.09106" y="6.81812" width="9.54545" height="1.36364" />
                                    <rect x="6.09106" y="12.2727" width="9.54545" height="1.36364" />
                                    <rect x="0.636475" width="4.09091" height="4.09091" />
                                    <rect x="0.636475" y="5.45459" width="4.09091" height="4.09091" />
                                    <rect x="0.636475" y="10.9092" width="4.09091" height="4.09091" />
                                </svg>
                            </li>
                        </ul>
                    </div>
                    <div class="row product_listing__main" id="product_listing__sorted">
                    <?php foreach ($products as $product) : 
                            $product_id = $product['product_id'];
                            $product_name = $product['product_name'];
                            $product_description = $product['product_descr'];
                            $product_brand = $product['product_brand'];
                            $product_picture = $product['product_picture'];
                            $product_qty = $product['product_qty'];
                            $price_id = $product['price_id'];
                            $unit = $product['unit'];
                            $price = $product['price'];
                            $tax = $product['rating'];
                            $priceWithTax = $price * $tax; // calcul pour prix TTC
                            $price_format = number_format($priceWithTax, 2, ',', ' ' ); 
                    ?>        
                       
                        <div class="col-lg-4 col-sm-12 col-md-6 col-12 product_item_wrap">
                            <div class="product_item" id="product__afghan-kush">
                                <div class="product_img_wrap">
                                    <div class="product_img">
                                        <a class="img_change" href="#">
                                            <!-- image du produit -->
                                            <img class="lazyload" src="//cdn.shopify.com/s/files/1/0425/0818/9859/products/afghan_kush_1_100x150_crop_center.jpg?v=1594034076" data-src="//cdn.shopify.com/s/files/1/0425/0818/9859/products/afghan_kush_1_280x280_crop_center.jpg?v=1594034076" alt="Afghan Kush">
                                                    <img class="lazyload image_2" src="//cdn.shopify.com/s/files/1/0425/0818/9859/products/afghan_kush_1_90x100_crop_center.jpg?v=1594034076" data-src="//cdn.shopify.com/s/files/1/0425/0818/9859/products/afghan_kush_1_279x300_crop_center.jpg?v=1594034076" alt="Afghan Kush">
                                            <div class="bade_wrap">

                                            <?php 
                                            // recuperer les trois derniers produits
                                            $newsProduct = getNewProduct();
                                                foreach ($newsProduct as $new) : ?>
                                                    <?php if(!empty($new['id']) && isset($new['id']) && ($new['id']) === $product_id) { ?>
                                                        <span class="product_badge custom_badge_1">Nouveautée</span>

                                                    <?php }?>
                                                <?php endforeach 
                                            ?>   
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
                                        
                                            <a href="#" class="wishlist_btn wishlist_login ">
                                                <svg class="wishlist-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 18L8.74 16.7826C4.06 12.7826 1 10.087 1 6.78261C1 4.08696 3.16 2 5.95 2C7.48 2 9.01 2.69565 10 3.82609C10.99 2.69565 12.52 2 14.05 2C16.84 2 19 4.08696 19 6.78261C19 10.087 15.94 12.7826 11.26 16.7826L10 18Z" stroke-width="2" stroke-linecap="round"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="product_info">
                                    <div class="product_color"></div>
                                    <!-- MARQUE -->
                                    <p class="product_vendor"><?= $product_brand ?></p>
                                
                                    <p class="product_name">
                                    <!-- NOM DU PRODUIT -->
                                        <a href="/collections/all/products/afghan-kush"><?= $product_name ?></a>
                                    </p>
                                    <!-- PRIX  -->
                                    <p class="product_price">
                                        <span class="money main_price "><?=  $price_format ?>€ </span>
                                        <span class="money unit_price"></span>
                                    </p>
                                    <form method="post" action="./add_cart.php" class="add_to_cart_form" id="form-add-to-cart">
                                        <div class="product_desc">
                                        <?php foreach ($priceProducts as $priceProduct) : 
                                            $unit = $priceProduct['unit'];
                                            $id = $priceProduct['id'];
                                            $price_id = $priceProduct['price_id'];
                                            $price = $priceProduct['price'];
                                            $price_format = number_format($price, 2, ',', ' ');
                                            
                                            // affichage des grammages sur la card product :
                                            if($product_id == $id && !empty($unit)) {
                                                echo "<div class='radio-unit'>";
                                                echo "<input type='radio' class='product-unit' id='{$price_id}' data-price='{$price}' data-tax='{$tax}' value='{$price_id}' name='price_id' />";
                                                echo "<label for='{$price_id}' >{$unit}</label>";
                                                echo '<input type="hidden" name="product_id" value="' . $id .'">';
                                                echo "</div>";
                                
                                            } 
                                            if($product_id == $id && empty($unit)) {
                                                echo "<div >";
                                                echo "<input type='hidden' class='product-unit' id='{$price_id}' data-price='{$price}' data-tax='{$tax}' value='{$price_id}' name='price_id' />";
                                                echo "<label for='{$price_id}' >{$unit}</label>";
                                                echo '<input type="hidden" name="product_id" value="' . $id .'">';
                                                echo "</div>";
                                            }

                                            endforeach ; ?>    
                                        </div>
                                        <!-- DESCRIPTION -->
                                        <p class="product_desc_detail"><?= $product_description ?></p>

                                        <!-- BUTTON ADD TO CART -->
                                        <button class="btn btn-cart" type="submit" id="add-to-cart-btn">
                                            <span>Add to cart</span>
                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.777344 6.77789V5.22233H10.1107L6.99957 2.11122L7.77734 0.555664L13.2218 6.00011L7.77734 11.4446L6.99957 9.889L10.1107 6.77789H0.777344Z" fill="white" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>

                    <!-- pagination -->
                    <!-- <div class="pagination">






                        <p>1 – 6 product(s) of 20</p>


                        <ul>
                            <li class="pagination_prev">

                            </li>




                            <li class="pagination_current pagination_el"><span>1</span></li>




                            <li class="pagination_el"><a href="/collections/all?page=2">2</a></li>



                            <li class="pagination_el"><a href="/collections/all?page=3">3</a></li>



                            <li class="pagination_el"><a href="/collections/all?page=4">4</a></li>



                            <li class="pagination_next">

                                <a href="/collections/all?page=2" title="Next">
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.777832 6.77776V5.22221H10.1112L7.00005 2.1111L7.77783 0.555542L13.2223 5.99999L7.77783 11.4444L7.00005 9.88888L10.1112 6.77776H0.777832Z" fill="#171717" />
                                    </svg>

                                </a>

                            </li>
                        </ul>

                    </div> -->
                </div>
            </div>
            <!-- SIDE BAR "FILTRER PAR CATEGORIES" -->
            <div class="sidebar_small col-md-12 col-lg-3">
                <div id="shopify-section-sidebar" class="shopify-section page_sidebar">
                    <div class="sidebar">
                        <div class="sidebar_widget sidebar_widget__types">
                            <h6 class="widget_header linklist_menu_title">Filtrer par catégories</h6>
                            <div class="widget_content">
                                <ul class="list_links">
                                    <li><a href="produits">Tous les produits</a></li>
                                <?php 
                                    foreach ($categories as $categorie) { 
                                        $name_categorie = $categorie['name'];
                                        $id_categorie = $categorie['id'];


                                ?>
                                        <li><a href="produits?cat=<?=$id_categorie?>"><?= $name_categorie ?></a></li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section avec la newsletter -->
    <div id="shopify-section-index-newsletter" class="shopify-section section section_newsletter">
        <div class="index_newsletter_wrapper" style="background-color: #ffffff">
            <div class="container">
                <div class="item__newsletter ">
                    <h4>NEWSLETTER</h4>
                    <form method="post" action="/contact#contact_form" id="newsletter_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />
                        <p class="alert alert-success hidden">Inscription reussis!</p>
                        <p class="form_text">Les meilleures offres, les bons conseils ?
                            Inscrivez-vous !</p> <input type="hidden" name="contact[tags]" value="Entrer votre mail">
                        <div class="form_wrapper"> <input type="email" name="contact[email]" class="input-group__field newsletter__input" placeholder="Entrer votre mail"> <button class="btn" type="submit">Envoyer</button> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin section avec newsletter -->
    <?php require('./footer.php'); ?>