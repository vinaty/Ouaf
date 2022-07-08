<?php

/**

 * The header.

 *

 * This is the template that displays all of the <head> section and everything up until main.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage ouaf

 * @since ouaf 1.0

 */

?>

<!doctype html>

<html <?php language_attributes(); ?>>



<head>

    <!-- Required meta tags -->

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?php get_site_icon_url(32,);?>" rel="icon">

    <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php

	get_template_part( 'template-parts/main-nav' );

?>