<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
<div id="page" class="site">
  <div class="row">

	<header id="masthead" class="site-header">
      <div class="site-header__logo">
          <?php the_custom_logo(); ?>
      </div>
      <div class="site-header__logo-small">
        <img src="<?php the_field("site_logo_mobile", 701); ?>" >
      </div>
      <!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
          <button class="menu-toggle main-navigation__btn" aria-controls="primary-menu" aria-expanded="false"></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
