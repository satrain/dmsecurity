<?php /* Template Name: Kontakt Template */
get_header(); ?>

<?php get_template_part( 'template-parts/content', 'inner-hero' ); ?>

<div class="contact-first-section">
    <div class="inner-page-container qr-patrol-wrapper">
        <div class="contact-left-section">
            <h3>DMSecurity</h3>
            <p><a href="https://goo.gl/maps/FZAX91L1ULj7rBr4A" target="_blank">Gornjomatejevačka 98a/23, Niš, Srbija</a></p>
            <p><a href="mailto: podrska@drdigital.rs"><span>podrska@dmsecurity-dt.com</span></a></p>
            <p><a href="tel:0601000001">Telefon: <span>060 100 0001</span></a></p>
        </div>
        <div class="contact-right-section free-consultations-form"><?php echo do_shortcode('[ninja_form id=3]'); ?></div>
    </div>
</div>

<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2901.853028390851!2d21.918345822612384!3d43.33826444316526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0d87c14bb65%3A0xb5071eb52003eebe!2z0JPQvtGA0ZrQvtC80LDRgtC10ZjQtdCy0LDRh9C60LAgOThhLCDQndC40Yg!5e0!3m2!1ssr!2srs!4v1675193259704!5m2!1ssr!2srs" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php get_footer(); ?>