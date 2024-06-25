<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8"/>
        <meta name="description" content="An HTML website developed to explore the practical applications of HTML, CSS, PHP, and JavaScript through an assignment promoting the new product, Epsilon 3."/>
        <!-- End of Meta tags-->
        <!-- Start of Favicons -->
        <title>Epsilon 3</title>
        <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="./assets/favicons/site.webmanifest">
        <link rel="mask-icon" href="./assets/favicons/safari-pinned-tab.svg" color="#edb55e">
        <link rel="shortcut icon" href="./assets/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#edb55e">
        <meta name="msapplication-config" content="./assets/favicons/browserconfig.xml">
        <meta name="theme-color" content="#edb55e">
        <!-- End of Favicons -->
        <!-- Stylesheets -->
        <link rel="stylesheet" href="./assets/css/all.css">
        <link rel="stylesheet" href="./assets/css/site.css">

        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/306322f477.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Start of Header Container -->
        <header>
            <!-- Start of Title Container -->
            <nav class="title-bar">
                <!-- Home Button/Logo -->
                <a href="./index.php?p=i"><img src="./assets/images/logos/logo.png"></a>
                <!-- Page Title -->
                <h1
<?php
    if ($_GET["p"] == "i") {
        echo('id="active-nav"');
    }
?>
                    >Epsilon 3</h1>
                <!-- Menu Icons -->
                <div class="menu-icons">
                    <button>
                        <a id="cart-icon" href="./account/view-cart.php" title="View Cart"><i class="fa-solid fa-cart-arrow-down fa-2xl"></i></a>
                    </button>
                    <button class="dropdown-container" id="account-icon" title="Menu">
                            <ul id="settings-icons">
                                <li><i class="fa-solid fa-gear fa-2xl"></i></li>
                                <li><i class="fa-solid fa-caret-down"></i></li>
                            </ul>
                            <ul class="hidden-menu">
                                <li><a href="./account/login.php" title="Login to Account"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a></li>
                                <li><a href="./account/register.php" title="Register for Account"><i class="fa-solid fa-user-plus"></i> Register</a></li>
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
                    class="nav-link" href="./features/index.php?p=f">Features</a>
                <a
<?php
    if ($_GET["p"] == "o") {
        echo('id="active-nav"');
    }
?>
                    class="nav-link" href="./options/index.php?p=o">Options</a>
                <a
<?php
    if ($_GET["p"] == "p") {
        echo('id="active-nav"');
    }
?>
                    class="nav-link" href="./pricing/index.php?p=p">Pricing</a>
                <a
<?php
    if ($_GET["p"] == "d") {
        echo('id="active-nav"');
    }
?>
                    class="nav-link" href="./downloads/index.php?p=d">Downloads</a>
                <a
<?php
    if ($_GET["p"] == "a") {
        echo('id="active-nav"');
    }
?>
                    class="nav-link" href="./about/index.php?p=a">About</a>
            </nav> <!-- End of Navigation Bar -->
        </header> <!-- End fo Header Container -->
        <!-- Start of Main Container -->
        <main>

        </main> <!-- End of Main Container -->
    </body>
    <footer>
        <div class="footer-container">
            <div class="footer-element">
                <h2>Something on Your Mind?</h2>
                <form class="contact-form" method="post" action="./legal/contact.php">
                    <h3>Contact Us:</h3>
<?php
    if ($is_submitted == true) {
        if ($is_error == true) {
            echo '<h3 class="error">Hold on, you have errors.</h3>';
            echo '<ul>';
            foreach ($message as $messages) {
                echo '<li class="error">' . $message . '</li>';
            }
            echo '</ul>';
        } else {
            echo '<h3 class="success">Thank you for contacting us, you should hear back from us soon"</h3>';
        }
    }
?>
                    <ul class="form-list">
                        <li class="form-row">
                            <label for="contact-full"><i class="fa-solid fa-signature fa-2xl"></i></label>
                            <div name="contact-full">
                                <input class="user-input"  id="contact-first" type="text" name="contact_first" placeholder="Your First Name..." required/>
                                <input class="user-input" id="contact-last" type="text" name="contact_last" placeholder="Your Last Name..." required="required"/>
                            </div>
                        </li>
                        <li class="form-row">
                            <label for="contact_email"><i class="fa-solid fa-envelope fa-2xl"></i></label>
                            <input class="user-input" id="contact-email" type="email" name="contact_email" placeholder="Your Email Address..." required/>
                        </li>
                        <li class="form-row">
                            <label for="contact_message"><i class="fa-solid fa-comments fa-2xl"></i></label>
                            <div id="contact-message">
                                <textarea cols="35" rows="3" class="user-input" name="contact_message" placeholder=" Voice your concerns, send us some feedback, or just say hello..." required >
                                </textarea>
                            </div>
                        </li>
                    </ul>
                    <input class="button" type="submit" value="Contact Us">
                </form>
            </div>
            <div class="footer-element">
                <img id="footer-logo" src="./assets/images/logos/logo.png">
            </div>
            <div class="footer-element">
                <h3>Copyright &copy; 2024 Epsilon Inc.</h3>
            </div>
            <div class="footer-element">
                <ul class="legal-list">
                    <li class="footer-item"><a href="./legal/terms-conditions.php">Terms &#38; Conditions</a></li>
                    <li class="footer-item"><a href="./legal/sitemap.xml">SiteMap</a></li>
                    <li class="footer-item"><a href="./legal/privacy-policy.php">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </footer>
</html>