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

	<header id="nav-wrapper">
    <nav id="nav">
      <div class="nav left">
        <a href="#home"><img src="/wp-content/uploads/2023/01/dmsecurity-logo-transparent.png" alt="DMSecurity logo"></a>
        <button id="menu" class="btn-nav"><span class="fas fa-bars"></span></button>
      </div>
      <div class="nav right">
        <a href="#home" class="nav-link active"><span class="nav-link-span"><span class="u-nav">Home</span></span></a>
        <a href="#about" class="nav-link"><span class="nav-link-span"><span class="u-nav">About</span></span></a>
        <a href="#work" class="nav-link"><span class="nav-link-span"><span class="u-nav">Work</span></span></a>
        <a href="#contact" class="nav-link"><span class="nav-link-span"><span class="u-nav">Contact</span></span></a>
      </div>
    </nav>
  </header>