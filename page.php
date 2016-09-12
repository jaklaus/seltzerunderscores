<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package seltzerUnderscores
 */

get_header(); ?>
	<!-- featured image -->
	<?php if (has_post_thumbnail()) { ?>
		<div class="featured-image">
		<header id ="featured-header" class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		<?php the_post_thumbnail(); ?>
	</div>
	<?php } ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( has_post_thumbnail()) {

				 } else { ?>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
			<?php } ?>

			<?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
