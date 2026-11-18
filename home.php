<?php
/**
 * Blog posts index (the page set as "Posts page" in Settings > Reading).
 * WordPress picks this before index.php, which in this theme is a static design mockup.
 */
get_header(); ?>

			<main>
				<?php get_template_part( 'loop', 'index' ); ?>
				<?php if ( function_exists( 'kriesi_pagination' ) ) { kriesi_pagination(); } ?>
			</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
