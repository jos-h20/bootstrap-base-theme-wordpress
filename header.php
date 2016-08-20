<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bootstrapwp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<nav role="navigation" id="navbar-main">
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<?php $logo = dwp_option('custom_logo', false, 'url'); ?>
						<?php $logo_txt = dwp_option('logo-text'); ?>

						<?php if($logo !== '') { ?>
							<a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><img src="<?php echo $logo ?>" alt="<?php bloginfo( 'name' ) ?>"></a>
						<?php } elseif ($logo_txt !== '') { ?>
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php echo $logo_txt;?></a>
						<?php } else { ?>
							<a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo( 'name' ) ?></a>
						<?php } ?>

					</div>

					<div class="navbar-collapse collapse navbar-responsive-collapse">
						<?php

						$args = array(
							'theme_location' => 'primary',
							'depth'      => 2,
							'container'  => false,
							'menu_class'     => 'nav navbar-nav',
							'walker'     => new Bootstrap_Walker_Nav_Menu()
							);

						if (has_nav_menu('primary')) {
							wp_nav_menu($args);
						}

						?>

					</div>
				</div>
			</div>
		</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
