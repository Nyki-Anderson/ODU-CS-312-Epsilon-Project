<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8"/>
        <meta name="description" content="Terms and Conditions for all domains listed under Nyki's student Z-Drive on the ODU Linux Servers. Developed for use in ODU Internet Concepts course (CS 312)."/>
        <meta name="author" content="Nyki">
        <!-- End of Meta tags-->
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
        <!-- Stylesheet -->
        <link rel="stylesheet" href="../assets/css/all.css">
        <link rel="stylesheet" href="../assets/css/legal.css">

        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/306322f477.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <!-- Start of Title Container -->
            <nav class="title-bar">
                <!-- Home Button/Logo -->
                <a href="../index.php?p=i"><img src="../assets/images/logos/logo.png"></a>
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
        </header>
        <article>
            <h2>Terms &#38; Conditions</h2>
            <h3>Welcome to Nyki's Websites</h3>
            <p class="last-updated">Our Terms &#38; Conditions were last updated on <time datetime="2024-02-19">February 19th 2024</time></time></p>

            <p>These Terms &#38; Conditions govern your use of her sites and provide information about about their content and/or services. When you view, interact with, or use the services within these sites, you will be asked to agree to these terms. Upon checking the box that you have understood this document, your access to that part of the site will be granted.
                <br/><br/>
            </p>
            <ol>
                <li>Who are we?</li>
                    <p>
                        The various websites on this domain are the products of the amateur programmer, Nyki. She is a computer science student at ODU enrolled in the Internet Concepts course (CS 312). The content, products, and/or services described in this and other sites at this domain are often fictional and are used simply to provide real-world flavor to the underlying programming skills used. None of the content or services are intended to be marketable and/or transactionally viable.
                    </p>
                <li>Definitions &#38; Abbreviations</li>
                    <p>
                        Nyki's websites (all those at her personal domain on the ODU Linux servers) will hereafter be referred to as <em>ours</em> and she will be referred to as <em>us</em>.
                        <br/><br/>
                        The user of any of these websites will hereafter be referred to as <em>you</em>.
                        <br/><br/>
                        These Terms &#38; Conditions will hereafter be abbreviated <em>TaC</em>.
                    </p>
                <li>Our Purpose</li>
                    <p>
                        The content and services provided by our sites are meant for educational purposes explicitly and were created in an exploratory manner to learn principles and best-practices of web-programming. These TaC therefore constitute an agreement between you and us in an educational setting where content and/or services are exchanged freely and without expectation for you to provide anything in return.
                    </p>
                <li>Acknowledgment</li>
                    <p>
                        An outline of what is agreed upon and expected from you when you visit our sites follow:
                        <ul>
                            <li>You agree to these TaC and thus to abide by the rules of conduct described herein.</li>
                            <li>You will not be solicited and advertisements will not be present within our sites.</li>
                            <li>You may not use our content for any purposes other than educational and any reproductions must be cited or otherwise attributed to us as its origin.</li>
                            <li>Our content consists of our own original ideas and programming, any adaptations or code borrowed from another programmer is expressly denoted where it appears (as a comment).</li>
                            <li>You may not use our content or services in any manner that conflicts with the laws of ODU or greater civil laws.</li>
                        </ul>
                    </p>
                <li>User Guidelines</li>
                <li>Content</li>
                <li>Copyright Policy</li>
                <li>Intellectual Property</li>
                <li>User Feedback</li>
                <li>Links to External Websites</li>
                <li>Limitation of Liability</li>
                <li>Updates to the Terms</li>

            </ol>
        </article>
        <!-- Local Footer from Legal Directory (use links accordingly) -->
        <footer>
            <div class="footer-container">
                <div class="footer-element">
                    <h2>Something on Your Mind?</h2>
                    <form class="contact-form" method="post" action="contact.php">
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
                    <img id="footer-logo" src="../assets/images/logos/logo.png">
                </div>
                <div class="footer-element">
                    <h3>Copyright &copy; 2024 Epsilon Inc.</h3>
                </div>
                <div class="footer-element">
                    <ul class="legal-list">
                        <li class="footer-item"><a href="./terms-conditions.php">Terms &#38; Conditions</a></li>
                        <li class="footer-item"><a href="./sitemap.xml">SiteMap</a></li>
                        <li class="footer-item"><a href="./privacy-policy.php">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>