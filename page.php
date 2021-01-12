<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sbjj
 */

get_header();
?>



	<main id="primary" class="site-main">

		<div class="video-foreground">    
			<iframe src="https://player.vimeo.com/video/490061294?background=1" frameborder="0" allowfullscreen"></iframe> 
		</div>
		
		<div class="video-overlay"></div>

		<div class="login-form-container">
			<div class="login-form"><?php wp_login_form(); ?></div>
		</div>
		

	</main><!-- #main -->

<?php
// get_footer();
