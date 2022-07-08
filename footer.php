<?php



/**

 * The template for displaying the footer

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage ouaf

 * @since ouaf 1.0

 */



?>

<!-- FOOTER -->

<footer class="text-muted bg-my container-fluid bg-light">

		<div class="row d-flex justify-content-center d-inline-block">

			<p class="text-muted">

				<?php

				if (has_nav_menu('footer')) {

					wp_nav_menu(array(

						'menu'              => "footer", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.

						'theme_location'    => "footer", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.

						'container'         => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.

						'menu_class'        => "footernavmenu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.



					));

				} else {

					echo 'Veuillez assigner le menu footer dans votre backoffice !';

				}

				?>

				&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>

			</p>

		</div>

</footer>

<!-- FOOTER END -->

<?php wp_footer(); ?>

</body>



</html>