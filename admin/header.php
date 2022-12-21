<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Green Power Shop</title>

    <link rel="stylesheet" href="assets/css/simplebar.css">

    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/feather.css">
    <link rel="stylesheet" href="assets/css/select2.css">
    <link rel="stylesheet" href="assets/css/dropzone.css">
    <link rel="stylesheet" href="assets/css/uppy.min.css">
    <link rel="stylesheet" href="assets/css/jquery.steps.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/quill.snow.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="assets/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="assets/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="assets/css/app-dark.css" id="darkTheme" disabled>
</head>

<body class="vertical  light">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <form class="form-inline mr-auto searchform text-muted">
                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Votre recherche.." aria-label="Recherche">
            </form>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar avatar-sm mt-2">
                            Lorem ipsum.
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profil</a>
                        <a class="dropdown-item" href="#">Réglage</a>
                        <a class="dropdown-item" href="#">Déconnexion</a>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <!-- nav bar -->
                <div class="w-100 mb-4 d-flex">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                        <img src="./assets/images/logo.jpg" width="70%" alt="">
                    </a>
                </div>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Dashboard</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
                            <li class="nav-item active">
                                <a class="nav-link pl-3" href="./index.php"><span class="ml-1 item-text">Tableau de bord</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Voir mon site</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Vendre</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-box fe-16"></i>
                            <span class="ml-3 item-text">Commandes</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Commandes</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Factures</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Avoirs</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Bon de livraison</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Panier</span></a>
                            </li>


                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-credit-card fe-16"></i>
                            <span class="ml-3 item-text">Catalogues</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Produits</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Catégories</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Suivie</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Attributs & caractéristiques</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Marques & fournisseurs</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Fichier</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Réductions</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Stocks</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Stocks</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-grid fe-16"></i>
                            <span class="ml-3 item-text">Clients</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Clients</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Adresses</span></a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-pie-chart fe-16"></i>
                            <span class="ml-3 item-text">SAV</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="charts">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href=""><span class="ml-1 item-text">SAV</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href=""><span class="ml-1 item-text">Messages prédifinis</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href=""><span class="ml-1 item-text">Statistiques</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#blogs" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-pie-chart fe-16"></i>
                            <span class="ml-3 item-text">Blog</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="blogs">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href=""><span class="ml-1 item-text">Blog</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </nav>
        </aside>

        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row align-items-center mb-2">
                            <div class="col">
                                <h2 class="h5 page-title">Bienvenue !</h2>
                            </div>
                            <div class="col-auto">
                                <form class="form-inline">
                                    <div class="form-group d-none d-lg-inline">
                                        <label for="reportrange" class="sr-only">Date Ranges</label>
                                        <div id="reportrange" class="px-2 py-2 text-muted">
                                            <span class="small"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                                        <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>