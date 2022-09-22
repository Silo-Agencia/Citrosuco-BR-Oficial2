<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Citro-Suco-v2
 */

?>

<style>
	.container-search {
		display: flex;
		flex-direction: column;
		margin: 0 15px;
	}

	.container-search a img {
		max-width: 500px;
		height: auto;
	}
	.container-search div p {
		max-width: 500px;
		height: auto;
	}
	.container-search h2 a {
		max-width: 400px;
		height: auto;
		font-size: 20px;
		color: #2f7240;
	}
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-search">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<div><?php if ( 'post' === get_post_type() ) : ?></div>
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php citro_suco_v2_post_thumbnail(); ?>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
