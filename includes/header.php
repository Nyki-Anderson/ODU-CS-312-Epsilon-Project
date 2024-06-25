    <!-- Start of Favicons -->
    <title>Epsilon 3</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="../assets/favicons/site.webmanifest">
    <link rel="mask-icon" href="../assets/favicons/safari-pinned-tab.svg" color="#edb55e">
    <link rel="shortcut icon" href="../assets/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#edb55e">
    <meta name="msapplication-config" content="../assets/favicons/browserconfig.xml">
    <meta name="theme-color" content="#edb55e">
    <!-- End of Favicons -->
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/site.css">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/306322f477.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Start of Header Container -->
    <header>
        <!-- Start of Title Container -->
        <nav class="title-bar">
            <!-- Home Button/Logo -->
            <a href="../index.php?p=i" itle="Epsilon 3 Logo"><img src="../assets/images/logos/logo.png" t alt="Epsilon 3 Logo"/></a>
            <!-- Page Title -->
            <h1>Epsilon 3</h1>
                <!-- Menu Icons -->
                <div class="menu-icons">
                    <button>
                        <a id="cart-icon" href="../account/view-cart.php" title="View Cart"><i class="fa-solid fa-cart-arrow-down fa-2xl"></i></a>
                    </button>
                    <button class="dropdown-container" id="account-icon" title="Menu">
                            <ul id="settings-icons">
                                <li><i class="fa-solid fa-gear fa-2xl"></i></li>
                                <li><i class="fa-solid fa-caret-down"></i></li>
                            </ul>
                            <ul class="hidden-menu">
                                <li><a href="../account/login.php" title="Login to Account"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a></li>
                                <li><a href="../account/register.php" title="Register for Account"><i class="fa-solid fa-user-plus"></i> Register</a></li>
                            </ul>
                        </button>
                </div>
                <!-- End of Menu Icons -->
        </nav> <!-- End of Title Container -->
        <!-- Start of Navigation Bar -->
        <nav class="nav-bar">
            <a
<?php
    if ($_GET["p"] == "f") {
        echo('id="active-nav"');
    }
?>
                class="nav-link" href="../features/index.php?p=f">Features</a>
            <a
<?php
    if ($_GET["p"] == "o") {
        echo('id="active-nav"');
    }
?>
                class="nav-link" href="../options/index.php?p=o">Options</a>
            <a
<?php
    if ($_GET["p"] == "p") {
        echo('id="active-nav"');
    }
?>
                class="nav-link" href="../pricing/index.php?p=p">Pricing</a>
            <a
<?php
    if ($_GET["p"] == "d") {
        echo('id="active-nav"');
    }
?>
                class="nav-link" href="../downloads/index.php?p=d">Downloads</a>
            <a
<?php
    if ($_GET["p"] == "a") {
        echo('id="active-nav"');
    }
?>
                class="nav-link" href="../about/index.php?p=a">About</a>
        </nav> <!-- End of Navigation Bar -->
    </header> <!-- End fo Header Container -->