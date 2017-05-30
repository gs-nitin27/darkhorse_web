<?php
/**
 * The template for displaying all pages.
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package shelley
 */

get_header();
/**
 * Load Shelley Variables
 */
 get_template_part ('inc/shelley', 'variables' );

/**
 * Load Shelley Frontpage View
 */
 get_template_part( 'inc/shelley', 'frontpage' ); 

?>
	


<?php get_footer(); ?>
	
</div>