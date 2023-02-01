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
                <div class="social-icons">
                    <a href="https://www.facebook.com/DMSdigitalTecnology?mibextid=ZbWKwL" target="_blank">
                        <img src="/wp-content/uploads/2023/01/facebook-sm-icon.png" alt="https://www.facebook.com/DMSdigitalTecnology?mibextid=ZbWKwL">
                    </a>
                    <a href="https://www.instagram.com/dmsecurity_dt/?igshid=ZDdkNTZiNTM%3D" target="_blank">
                        <img src="/wp-content/uploads/2023/01/instagram-sm-icon.png" alt="https://www.instagram.com/dmsecurity_dt/?igshid=ZDdkNTZiNTM%3D">
                    </a>
                    <a href="https://twitter.com/DmsecurityD?t=4MmYL9d733XaXkwMm7mxbQ&s=09" target="_blank">
                        <img src="/wp-content/uploads/2023/01/twitter-sm-icon.png" alt="https://twitter.com/DmsecurityD?t=4MmYL9d733XaXkwMm7mxbQ&s=09">
                    </a>
                    <a href="https://www.linkedin.com/in/dmsecurity-digital-technology-433547264" target="_blank">
                        <img src="/wp-content/uploads/2023/01/linkedin-sm-icon.png" alt="https://www.linkedin.com/in/dmsecurity-digital-technology-433547264">
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
            <div class="other">
                <p>Ostalo</p>
                <ul>
                    <li><a href="/sitemap/">Sitemap</a></li>
                    <li><a href="/privacy-policy/">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="contact">
                <p>Kontakt</p>
                <ul>
                    <li><a href="tel:0601000001">Telefon: <span>060 100 0001</span></a></li>
                    <li><a href="mailto: podrska@drdigital.rs">Podrška: <span>podrska@dmsecurity-dt.com</span></a></li>
                    <li><a href="/kontakt/">Online Kontakt Forma</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>© Copyright <?php echo date('Y'); ?> | <a href="jelenadesign.eu" target="_blank">jelenadesign.eu</a></p>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
