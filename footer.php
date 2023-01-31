<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DMSecurity
 */

?>

    <div class="free-consultations">
        <div class="container">
            <div class="free-consultations-copy">
                <h2>KONTAKT</h2>
                <p>Ukoliko imate nedoumice ili pitanja možete zakazati besplatne konsultacije popunjavanjem forme, a mi ćemo vam se javiti u najkraćem mogućem roku.</p>
            </div>
            <div class="free-consultations-form"><?php echo do_shortcode('[ninja_form id=3]'); ?></div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="info">
                <a href="/" class="footer-logo"><img src="/wp-content/uploads/2023/01/dmsecurity-logo-transparent.png" alt="DMSecurity logo"></a>
                <p>Unapredite vaše poslovanje uz našu pomoć.</p>
                <li><a href="tel:0649334631">064 588 2233</a></li>
                <li><a href="mailto: podrska@drdigital.rs">podrska@dmsecurity-dt.com</a></li>
                <br>
                <div class="social-icons">
                    <a href="#">
                        <img src="/wp-content/uploads/2023/01/facebook-sm-icon.png" alt="DrDigital Facebook link">
                    </a>
                    <a href="#">
                        <img src="/wp-content/uploads/2023/01/instagram-sm-icon.png" alt="DrDigital Facebook link">
                    </a>
                    <a href="#">
                        <img src="/wp-content/uploads/2023/01/twitter-sm-icon.png" alt="DrDigital Facebook link">
                    </a>
                    <a href="#">
                        <img src="/wp-content/uploads/2023/01/linkedin-sm-icon.png" alt="DrDigital Facebook link">
                    </a>
                </div>
            </div>
            <div class="company">
                <p>Kompanija</p>
                <ul>
                    <li><a href="/o-nama/">O nama</a></li>
                    <li><a href="/akademija/">Akademija za edukaciju</a></li>
                    <li><a href="/qr-patrol/">QR-Patrol</a></li>
					<li><a href="/konsalting/">Konsalting</a></li>
                </ul>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.608770704664!2d21.924073015756477!3d43.32244868177255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0ec09554ce5%3A0x22f88c41ebc75dcf!2z0JLQuNC30LDQvdGC0LjRmNGB0LrQuCDQsdGD0LvQtdCy0LDRgCAzOCwg0J3QuNGI!5e0!3m2!1ssr!2srs!4v1675124422110!5m2!1ssr!2srs" width="605" height="298" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>
    <div class="copyright">
        <p>© Copyright <?php echo date('Y'); ?> | <a href="https://jelenadesign.eu" target="_blank">jelenadesign.eu</a></p>
    </div>
    <?php wp_footer(); ?>
    <script>
        AOS.init();
    </script>
</body>
</html>
