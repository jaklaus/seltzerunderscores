<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package seltzerUnderscores
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title index-excerpt"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() && is_single() ) : ?>
		<div class="entry-meta">
				<?php seltzerunderscores_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		else : ?>
		<div class="index-entry-meta">
				<?php seltzerunderscores_index_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_excerpt();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'seltzerunderscores' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="continue-reading">
		<a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
			<?php
				printf(
				
				wp_kses( __( 'Continue reading %s', 'seltzerunderscores' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
				);
			?>
		</a>
	</div>
</article><!-- #post-## -->
