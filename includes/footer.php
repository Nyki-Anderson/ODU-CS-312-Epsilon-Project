</main>
</body>
<!-- This footer will be included on pages within one directory from root (use links accordingly) -->
    <footer>
        <div class="footer-container">
            <div class="footer-element">
                <h2>Something on Your Mind?</h2>
                <form class="contact-form" method="post" action="../legal/contact.php">
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
                    <input class="button" type="submit" name="contact-submit" value="Contact Us">
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
                    <li class="footer-item">
                        <i class="fa-solid fa-square-check"></i>
                        <a href="../legal/terms-conditions.php">Terms &#38; Conditions</a>
                    </li>
                    <li class="footer-item">
                        <i class="fa-solid fa-sitemap"></i>
                        <a href="../legal/sitemap.xml">SiteMap</a>
                    </li>
                    <li class="footer-item">
                        <i class="fa-solid fa-lock"></i>
                        <a href="../legal/privacy-policy.php">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</html>