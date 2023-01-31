<?php /* Template Name: Kontakt Template */
get_header(); ?>

<?php get_template_part( 'template-parts/content', 'inner-hero' ); ?>

<div class="contact-first-section">
    <div class="inner-page-container qr-patrol-wrapper">
        <div class="contact-left-section">
            <h3>DMSecurity</h3>
            <p>Vizantijski Bulevar 38, Niš</p>
            <p>kontakt@dmsecurity-dt.com</p>
            <p>064 588 2233</p>
        </div>
        <div class="contact-right-section free-consultations-form"><?php echo do_shortcode('[ninja_form id=3]'); ?></div>
    </div>
</div>

<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.608770704664!2d21.924073015756477!3d43.32244868177255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0ec09554ce5%3A0x22f88c41ebc75dcf!2z0JLQuNC30LDQvdGC0LjRmNGB0LrQuCDQsdGD0LvQtdCy0LDRgCAzOCwg0J3QuNGI!5e0!3m2!1ssr!2srs!4v1675124422110!5m2!1ssr!2srs" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php get_footer(); ?>