<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DMSecurity
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dmsecurity' ); ?></a>

  <header>
            <a href="<?php echo get_site_url(); ?>"><div class="header-logo"></div></a>
            <nav class="header-con">
                <ul>
                  <li><a href="<?php echo get_site_url(); ?>">Početna</a></li>
                    <li class="h-about"><a href="/o-nama/">O nama</a></li>
                    <li class="h-projects"><a href="/akademija/">Akademija</a></li>
                    <li class="h-community"><a href="/kontakt/">Kontakt</a></li>
                    <!--<li class="h-blog"><a href="#">blog</a></li>-->
                    <button class="header-button" onclick="window.location.href='<?php echo get_site_url(); ?>/qr-patrol/'">Qr-Patrol</button>
                </ul>
            </nav>
            
            <!-- Hamburger (burger) for the navigation beyond 1024px - Mobile and Tablet -->
            <div style="display: none;" id="hamburger">
                <div class="burger burger-squeeze">
                    <div class="burger-lines"></div>
                </div>
            </div>

            <!-- Mobile Navigation -- toggles on hamburger click -->
            <div class="nav-mobile-modal">
                <nav>
                    <ul>
                    <li><a href="<?php echo get_site_url(); ?>">Početna</a></li>
                    <li class="h-about"><a href="/o-nama/">O nama</a></li>
                    <li class="h-projects"><a href="/akademija/">Akademija</a></li>
                    <li class="h-community"><a href="/kontakt/">Kontakt</a></li>
                    <!--<li class="h-blog"><a href="#">blog</a></li>-->
                    <button class="header-button" onclick="window.location.href='<?php echo get_site_url(); ?>/qr-patrol/'">QR-Patrol</button>
                    </ul>
                </nav>
            </div>
        </header>