<?php
/**
 * Blog posts index (the page set as "Posts page" in Settings > Reading).
 * WordPress picks this before index.php, the generic fallback template.
 */
get_header(); ?>

			<main>
				<?php get_template_part( 'loop', 'index' ); ?>
				<?php if ( function_exists( 'kriesi_pagination' ) ) { kriesi_pagination(); } ?>
			</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
