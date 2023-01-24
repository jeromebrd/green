<?php 
require('./function.php');
$totalProductsCart = getNbProductsCart();
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Green Power Shop</title>

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style type="text/css">
        @font-face {
            font-family: Oswald;
            font-weight: 400;
            font-style: normal;
            src: url("https://fonts.shopifycdn.com/oswald/oswald_n4.a5ee385bde39969d807f7f1297bf51d73fbf3c1e.woff2?h1=dGhlbWU4OTEtbWVkaWNhbC1tYXJpanVhbmEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=c1da3730114af23a314ea38aac2c5002ef347ff6ddadb2949d4b54267d055aa9") format("woff2"),
                url("https://fonts.shopifycdn.com/oswald/oswald_n4.8f3e284746fbc2d29e34993609c51fdc432b0b24.woff?h1=dGhlbWU4OTEtbWVkaWNhbC1tYXJpanVhbmEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=39b1fd11a2b34702d91c507d4d896918e728e64f750677f7fd44698d4aa28ffb") format("woff");
        }

        @font-face {
            font-family: Oswald;
            font-weight: 500;
            font-style: normal;
            src: url("https://fonts.shopifycdn.com/oswald/oswald_n5.22b74dce86cb1e4738ccceb326c9284bc24641e9.woff2?h1=dGhlbWU4OTEtbWVkaWNhbC1tYXJpanVhbmEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=bed9479d5ede70ff09af170ff74e206f238e5663d716f8e067c0d5b2f613c6f0") format("woff2"),
                url("https://fonts.shopifycdn.com/oswald/oswald_n5.c60897f79173105d5bae1e28e68e9326a4a64631.woff?h1=dGhlbWU4OTEtbWVkaWNhbC1tYXJpanVhbmEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=281a9f3d923c5e0fe30f49ce137113c275e4a2ed41ea81b339e4626d406bedd5") format("woff");
        }

        @font-face {
            font-family: Oswald;
            font-weight: 300;
            font-style: normal;
            src: url("https://fonts.shopifycdn.com/oswald/oswald_n3.bff4a8cab6f8be4b0b6d9de4e53c84f45f143640.woff2?h1=dGhlbWU4OTEtbWVkaWNhbC1tYXJpanVhbmEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=0a1246375f869bb0e850cc4dac93b97331c70e87a19fa2c82bbb3b8ee2932bc3") format("woff2"),
                url("https://fonts.shopifycdn.com/oswald/oswald_n3.9274b221a436d59cfed6e5cac51271ed4d148199.woff?h1=dGhlbWU4OTEtbWVkaWNhbC1tYXJpanVhbmEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=2c251bf746e54617c71863d83f066f51cd0d11342d73863c582b3638357365d3") format("woff");
        }

        @font-face {
            font-family: Oswald;
            font-weight: 400;
            font-style: normal;
            src: url("https://fonts.shopifycdn.com/oswald/oswald_n4.a5ee385bde39969d807f7f1297bf51d73fbf3c1e.woff2?h1=dGhlbWU4OTEtbWVkaWNhbC1tYXJpanVhbmEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=c1da3730114af23a314ea38aac2c5002ef347ff6ddadb2949d4b54267d055aa9") format("woff2"),
                url("https://fonts.shopifycdn.com/oswald/oswald_n4.8f3e284746fbc2d29e34993609c51fdc432b0b24.woff?h1=dGhlbWU4OTEtbWVkaWNhbC1tYXJpanVhbmEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=39b1fd11a2b34702d91c507d4d896918e728e64f750677f7fd44698d4aa28ffb") format("woff");
        }

        @font-face {
            font-family: Oswald;
            font-weight: 500;
            font-style: normal;
            src: url("https://fonts.shopifycdn.com/oswald/oswald_n5.22b74dce86cb1e4738ccceb326c9284bc24641e9.woff2?h1=dGhlbWU4OTEtbWVkaWNhbC1tYXJpanVhbmEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=bed9479d5ede70ff09af170ff74e206f238e5663d716f8e067c0d5b2f613c6f0") format("woff2"),
                url("https://fonts.shopifycdn.com/oswald/oswald_n5.c60897f79173105d5bae1e28e68e9326a4a64631.woff?h1=dGhlbWU4OTEtbWVkaWNhbC1tYXJpanVhbmEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=281a9f3d923c5e0fe30f49ce137113c275e4a2ed41ea81b339e4626d406bedd5") format("woff");
        }

        @font-face {
            font-family: Oswald;
            font-weight: 700;
            font-style: normal;
            src: url("https://fonts.shopifycdn.com/oswald/oswald_n7.f71e68b857a7b8128a7629452b9c6bf9468356a7.woff2?h1=dGhlbWU4OTEtbWVkaWNhbC1tYXJpanVhbmEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=30d80d3a746576ee05a6d5a9b47e302a848ae301ed123eadacf6e57d2927e01b") format("woff2"),
                url("https://fonts.shopifycdn.com/oswald/oswald_n7.2767cc6e7cfc91284caa2c06eb07eca21a27681e.woff?h1=dGhlbWU4OTEtbWVkaWNhbC1tYXJpanVhbmEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=3d4b47ffe6f82ee04fa73d9f0527ec3db217df077eec707892478c5284eb7b4d") format("woff");
        }

        @font-face {
            font-family: Oswald;
            font-weight: 600;
            font-style: normal;
            src: url("https://fonts.shopifycdn.com/oswald/oswald_n6.12ae05b08a526523f8379ba6e10fde2140b133ea.woff2?h1=dGhlbWU4OTEtbWVkaWNhbC1tYXJpanVhbmEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=e5acd041b33140ea3c0eed84ad48b9ebe3ca59261e1b95c86442687237bd6e84") format("woff2"),
                url("https://fonts.shopifycdn.com/oswald/oswald_n6.1f460fc9ad98670d0370772496961d620bdca9f0.woff?h1=dGhlbWU4OTEtbWVkaWNhbC1tYXJpanVhbmEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=ffd71b9b24e0c992954c218af04d3f296e20f4ccac46262a84961b06c7249b27") format("woff");
        }



        :root {
            /*  TYPOGRAPHY  */
            --base-font: Oswald, sans-serif;
            --base-font-size: 16px;
            --heading-font: Oswald, sans-serif;
            --heading-font-size: 30px;
            --heading-light-font-weight: 300;
            --heading-regular-font-weight: 400;
            --heading-medium-font-weight: 500;
            --heading-bold-font-weight: 700;
            --heading-semi-bold-font-weight: 600;
            --heading-extra-bold-font-weight: ;
            /*  COLORS  */
            --color-1: #171717;
            --color-2: #31862f;
            --color-3: #ffffff;
            --color-4: #6c6e71;
            --bg-color: #fcfcfc;
            --base-font-color: #6c6e71;
            --heading-font-color: #171717;
            --border-color: #e4e4e4;
            --links-color: #171717;
            --links-color-hover: #31862f;
            --button-color: #31862f;
            --button-text-color: #ffffff;
            --button-border-color: #31862f;
            --button-hover-color: #184817;
            --button-hover-text-color: #ffffff;
            --button-hover-border-color: #184817;
            --alt-button-color: #31862f;
            --alt-button-text-color: #ffffff;
            --alt-button-border-color: #31862f;
            --alt-button-hover-color: #184817;
            --alt-button-hover-text-color: #ffffff;
            --alt-button-hover-border-color: #184817;
            --product-name-color: #6c6e71;
            --product-name-color-hover: #184817;
            --product-price-color: #171717;
            --product-price-sale-color: #dd1a54;
        }
    </style>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style2.css">
    <link rel="stylesheet" href="./assets/css/style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <meta name="description" content="Achat CBD en ligne | Livraison gratuite à partir de 29 euro | Cannabis légal - Green Power Shop">

    <script>
        var theme = {
            moneyFormat: "€{{amount_with_comma_separator}}",
        };
    </script>

    <script id="sections-script" data-sections="template-collection,index-image-with-text-overlay,index-divider,index-featured-products-tabs,index-collection-list-custom,index-products-carousel,header-2,sidebar,index-newsletter" defer="defer" src="//cdn.shopify.com/s/files/1/0425/0818/9859/t/3/compiled_assets/scripts.js?1847"></script>


    <script src="//cdn.shopify.com/s/files/1/0425/0818/9859/t/3/assets/assets.js?v=63150313574281998311625820485"></script>
    <script src="//cdn.shopify.com/s/files/1/0425/0818/9859/t/3/assets/lazysizes.min.js?v=35890577942795198701625820490" defer></script>

    <script src="./assets/js/script.js" defer></script>
    <script src="//cdn.shopify.com/s/files/1/0425/0818/9859/t/3/assets/header-script.js?v=147772941011213095901625820506" type="text/javascript"></script>

    <script id="sections-script" data-sections="index-image-with-text-overlay,index-divider,index-featured-products-tabs,index-collection-list-custom,index-products-carousel,header-2,index-newsletter" defer="defer" src="//cdn.shopify.com/s/files/1/0425/0818/9859/t/3/compiled_assets/scripts.js?1847"></script>

    <link rel="stylesheet" href="./owl/owl.carousel.min.css">
    <link rel="stylesheet" href="./owl/owl.theme.default.min.css">
    

</head>

<body class="template-index scheme_1 ">
    <div class="page_wrapper">
        <style>
            .page_preloader__img {
                margin: 0 !important;
                padding: 0 !important;
            }
        </style>
        <div id="page_preloader__bg">
            <img id="page_preloader__img" src="./assets/images/logo.jpg" width="220px" alt="">
        </div>

        <script>
            preloaderBg = document.getElementById('page_preloader__bg');
            preloaderImg = document.getElementById('page_preloader__img');

            window.addEventListener('load', function() {
                preloaderBg.classList.add("off");
                preloaderImg.classList.add("off");
            });
        </script>


        <div id="shopify-section-helper" class="shopify-section"></div>

        <div id="shopify-section-header-2" class="shopify-section">
            <div id="pseudo_sticky_block"></div>

            <header id="page_header" class="header_layout_2" style="background-color: #171717">
                <div class="page_container">
                    <div class="top_pannel" style="background-color: #184817">
                        <div class="container_big  top_pannel_content_wrapper">



                            <a class="top_text_link" href="/pages/delivery-info">BIENVENUE CHEZ GREEN POWER SHOP</a>


                            <div class="header_currency">



                                <script src="//cdn.shopify.com/s/javascripts/currencies.js"></script>
                                <script src="//cdn.shopify.com/s/files/1/0425/0818/9859/t/3/assets/currency-tools.js?v=56053141205250997201625820486"></script>
                            </div>
                        </div>
                    </div>

                    <div class="header_row_1">
                        <div class="container container_big">
                            <div class="header_item_left">

                                <h1>

                                    <a class="header_logo" href="#">
                                        <img src="./assets/images/logo.jpg" alt="Logo Green power shop" style="max-width: 156px">

                                    </a>

                                </h1>

                                <nav id="megamenu" class="megamenu">
                                    <h2 id="megamenu_mobile_toggle" style="display: none;" title="Menu">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="3" width="20" height="2" fill="#fff" />
                                            <rect y="9" width="20" height="2" fill="#fff" />
                                            <rect y="15" width="20" height="2" fill="#fff" />
                                        </svg>
                                    </h2>

                                    <div id="megamenu_mobile_close" style="display: none;">
                                        <div class="close_icon"></div>
                                    </div>

                                    <ul id="megamenu_level__1" class="level_1">

                                        <li class="level_1__item level_2__links" style="display: inline-block;">
                                            <a class="level_1__link " href="./index.php">Home
                                            </a>

                                        </li>

                                        <li class="level_1__item level_2__small" style="display: inline-block;">
                                            <a class="level_1__link " href="./produits">Nos produits
                                                <i class="level_1__trigger megamenu_trigger" data-submenu="menu_1568649904694"></i>

                                            </a>



                                            <ul class="level_2" id="menu_1568649904694" style="display: none;">
                                                <li class="item_link-linklist">
                                                    <div>
                                                        <ul class="level_3">

                                                            <style>
                                                                .level_4_item {
                                                                    display: flex;
                                                                    flex-direction: column;
                                                                    align-items: flex-start;

                                                                }

                                                                .level_4 .level_4_item .level_4_link {
                                                                    color: #6c6e71 !important;
                                                                }

                                                                .level_4 .level_4_item .level_4_link:hover {
                                                                    color: #31862f !important;
                                                                }
                                                            </style>

                                                            <li class="level_3__item ">
                                                                <a class="level_3__link" href="#">Fleurs CBD</a>
                                                                <ul class="level_4">
                                                                    <li class="level_4_item">
                                                                        <a class="level_4_link" href="">Strambery kush</a>
                                                                        <a class="level_4_link" href="">Amnesia haze</a>
                                                                        <a class="level_4_link" href="">Orange bud</a>
                                                                        <a class="level_4_link" href="">Haze clasic</a>
                                                                    </li>
                                                                </ul>


                                                            </li>



                                                            <li class="level_3__item ">
                                                                <a class="level_3__link" href="#">Résine CBD</a>
                                                                <ul class="level_4">
                                                                    <li class="level_4_item">
                                                                        <a class="level_4_link" href="">Olivette</a>
                                                                        <a class="level_4_link" href="">Marocain</a>
                                                                        <a class="level_4_link" href="">Afgan</a>
                                                                        <a class="level_4_link" href="">Gras</a>
                                                                        <a class="level_4_link" href="">Jaune</a>
                                                                    </li>
                                                                </ul>

                                                            </li>



                                                            <li class="level_3__item ">
                                                                <a class="level_3__link" href="#">Huile CBD</a>
                                                                <ul class="level_4">
                                                                    <li class="level_4_item">
                                                                        <a class="level_4_link" href="">Huile 0.5%</a>
                                                                        <a class="level_4_link" href="">Huile 0.15%</a>
                                                                        <a class="level_4_link" href="">Huile 0.25%</a>
                                                                        <a class="level_4_link" href="">Huile 0.35%</a>
                                                                        <a class="level_4_link" href="">Huile 0.45%</a>
                                                                    </li>
                                                                </ul>

                                                            </li>





                                                            <li class="level_3__item ">
                                                                <a class="level_3__link" href="#">Vap CBD</a>
                                                                <ul class="level_4">
                                                                    <li class="level_4_item">
                                                                        <a class="level_4_link" href="">Recharge</a>
                                                                        <a class="level_4_link" href="">Fluide</a>
                                                                        <a class="level_4_link" href="">Matériels</a>
                                                                    </li>
                                                                </ul>

                                                            </li>

                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>



                                        </li>

                                        <li class="level_1__item " style="display: inline-block;">
                                            <a class="level_1__link " href="./contact.php">Contact


                                            </a>


                                        </li>


                                        <li class="megamenu_footer">


                                            <div class="menu_header_wishlist">
                                                <a href="./favoris.php">
                                                    <span class="menu_header_wishlist_text">Favoris</span>
                                                    <span class="zemez_wishlist_total"></span>
                                                </a>
                                            </div>



                                            <div class="menu_header_account">

                                                <a href="#">Mon compte</a>

                                            </div>



                                        </li>
                                    </ul>
                                </nav>

                            </div>

                            <div class="header_item_right">

                                <div class="header_search">
                                    <span class="search_toggle">

                                        <span class="link_text">Recherche</span>

                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 18.5787L16.2437 14.8223C17.4619 13.2995 18.2741 11.269 18.2741 9.13706C18.2741 4.06091 14.2132 0 9.13706 0C4.06091 0 0 4.06091 0 9.13706C0 14.2132 4.06091 18.2741 9.13706 18.2741C11.269 18.2741 13.2995 17.5635 14.8223 16.2437L18.5787 20L20 18.5787ZM2.03046 9.13706C2.03046 5.17766 5.17766 2.03046 9.13706 2.03046C13.0964 2.03046 16.2437 5.17766 16.2437 9.13706C16.2437 13.0964 13.0964 16.2437 9.13706 16.2437C5.17766 16.2437 2.03046 13.0964 2.03046 9.13706Z" />
                                        </svg>

                                    </span>
                                    <div class="search_form_wrap">
                                        <form action="" method="get" role="search" class="search_form">
                                            <span class="header_serch_caption">Que recherchez vous?</span>
                                            <input type="search" name="q" placeholder="Rechercher" aria-label="Search">
                                            <label for="header_search_submit">
                                                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20 18.5787L16.2437 14.8223C17.4619 13.2995 18.2741 11.269 18.2741 9.13706C18.2741 4.06091 14.2132 0 9.13706 0C4.06091 0 0 4.06091 0 9.13706C0 14.2132 4.06091 18.2741 9.13706 18.2741C11.269 18.2741 13.2995 17.5635 14.8223 16.2437L18.5787 20L20 18.5787ZM2.03046 9.13706C2.03046 5.17766 5.17766 2.03046 9.13706 2.03046C13.0964 2.03046 16.2437 5.17766 16.2437 9.13706C16.2437 13.0964 13.0964 16.2437 9.13706 16.2437C5.17766 16.2437 2.03046 13.0964 2.03046 9.13706Z" />
                                                </svg>
                                            </label>
                                            <input type="submit" id="header_search_submit">
                                            <span class="search_form_close">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7156 5L15 6.14286L10.993 10L15 13.8571L13.7156 15L9.95417 11.2857L6.28442 15L5 13.8571L8.9342 10L5 6.14286L6.28442 5L9.95417 8.71429L13.7156 5Z" fill="#E4E4E4" />
                                                </svg>
                                            </span>
                                        </form>

                                        <div class="search_form_cover"></div>
                                    </div>
                                </div>


                                <div class="header_account">


                                    <!-- <a href="connexion.php" title="Account">
                                        <span class="link_text">Connexion</span>

                                    </a> -->
                                    <!-- Code php pour afficher mon compte lorsqu'on est connecter -->
                                    <a href="account.php" title="Account">
                                        <span class="link_text">Mon compte</span>

                                    </a>

                                </div>



                                <div class="header_wishlist">
                                    <a href="favoris.php" title="Wishlist">
                                        <span class="link_text">Favoris</span>

                                    </a>
                                </div>


                                <div class="header_cart" id="main__cart_item">
                                    <a class="cart_link" href="./cart">

                                        <span class="link_text">Panier</span>

                                        <span id="cart_items" class="header_cart_items "><?= $totalProductsCart ?></span>

                                    </a>


                                    <!-- <script>
                                        theme.cartAjaxOn = true;
                                        theme.cartAjaxTextEmpty = 'Panier vide';
                                        theme.cartAjaxTextTotalPrice = 'Prix total';
                                        theme.cartAjaxTextGoCart = 'Allez au panier';
                                        theme.cartAjaxTextClearCart = 'Supprimer panier';
                                    </script>
                                    <div class="cart_content_wrap">
                                        <div class="cart_content_preloader off">
                                            <div class="global_loader"></div>
                                        </div>
                                        <div id="cart_content_box">

                                            <p class="alert alert-warning">Votre panier est actuellement vide
                                            </p>


                                        </div>
                                    </div> -->

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </header>





        </div>

        <div class="page_container">