<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beata_Antosik_Clinic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">
            <img class="logo" src="<?php bloginfo('template_directory'); ?>/img/Grouplogo.svg" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="nav--container">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'menu'			 => 'header-menu',
				'menu_id'        => '',
				'container'		 => 'ul',
				'menu_class'	 => 'navbar-nav justify-content-center',
				'container_class'=> 'navbar-nav justify-content-center',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				) );
			?>
            </div>
            <a class="btn btn-outline-primary reservation-btn">Zapisz się</a>
        </div>
    </nav>