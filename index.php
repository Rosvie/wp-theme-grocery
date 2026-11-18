<?php
/**
 * Fallback template, assembled from the parts in includes/:
 * head, header, nav, banner, middle, sidebar, bottom and footer.
 * page.php and header.php/footer.php load the same parts.
 */
@session_start();
get_includes( 'head' );
get_includes( 'header' );
get_includes( 'nav' );
get_includes( 'banner' );
?>

<!-- Main -->
<div id="main_area">
	<?php if ( is_front_page() ) { get_includes( 'middle' ); } ?>
	<div class="wrapper">
		<div class="main_con">

			<main<?php if ( is_front_page() ) { echo ' class="wow fadeInRight" data-wow-duration="2045ms"'; } ?>>

				<?php if ( ! is_front_page() && function_exists( 'yoast_breadcrumb' ) ) {
					yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
				} ?>

				<?php if ( is_singular() ) {
					get_template_part( 'loop', 'page' );
				} else {
					get_template_part( 'loop', 'index' );
					if ( function_exists( 'kriesi_pagination' ) ) { kriesi_pagination(); }
				} ?>

			</main>

			<?php if ( is_front_page() ) { get_includes( 'sidebar' ); } ?>

		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->

<?php if ( is_front_page() ) { get_includes( 'bottom' ); } ?>
<?php get_includes( 'footer' ); ?>
