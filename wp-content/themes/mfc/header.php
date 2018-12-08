<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mfc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mfc' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
		<div class="site-branding">	
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-link">
         <?php include('assets/logo_no_text.svg'); ?>
         <h1 class="site-title">Embrace<br>Families</h1>
        </a>
		</div><!-- .site-branding -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Board &amp; Leadership</a>
          <a class="dropdown-item" href="#">Financials</a>
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Make a Difference
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Mentor</a>
          <a class="dropdown-item" href="#">Foster</a>
		  <a class="dropdown-item" href="#">Adopt</a>
          <a class="dropdown-item" href="#">Donate</a>
		  <a class="dropdown-item" href="#">Prospective Providers</a>
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Find Support
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Youth</a>
          <a class="dropdown-item" href="#">Foster Parents</a>
		  <a class="dropdown-item" href="#">Relative and Community Care</a>
          <a class="dropdown-item" href="#">Service Providers</a>
		  <a class="dropdown-item" href="#">I'm looking for support</a>
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">News</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Donate</a>
      </li>
    </ul>
  </div>
</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
