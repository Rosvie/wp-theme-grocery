<?php
/**
 * Demo content loader: pages, blog posts, menus and settings shown in the README screenshots.
 *
 * Run with WP-CLI from the WordPress root:
 *   wp eval-file wp-content/themes/<theme-folder>/dev/seed.php
 *
 * Safe to re-run: pages are updated in place, menus and demo posts are rebuilt.
 * The brand, address, phone number and email are fictional.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$img = get_template_directory_uri() . '/images/';

$pages = array(
	'home'           => array(
		'Home',
		'<p>At Crave Corner, we believe in the power of great food to bring people together. Our passion for culinary excellence is evident in every item we serve, from our perfectly seasoned chips to our delectable pastries. Whether you\'re stopping by for a quick bite or settling in for a meal with friends and family, we strive to provide an unforgettable experience that will keep you coming back for more.</p>
<p>Crave Corner was founded with a simple mission: to create a place where food lovers could enjoy high-quality, delicious snacks and meals in a warm and welcoming environment. We take pride in our carefully curated menu, which features a diverse selection of flavors and textures, all made with the finest ingredients.</p>',
	),
	'about-us'       => array(
		'About Us',
		'<p>At Crave Corner, we\'re passionate about bringing you the best flavors from around the world, all in one place. We\'ve got something to satisfy every taste bud.</p>
<p>Crave Corner was founded with a simple mission: to create a place where food lovers could enjoy high-quality, delicious snacks and meals in a warm and welcoming environment.</p>
<h2>Our Mission Statement</h2>
<p>At Crave Corner, quality is our top priority. We source our products from trusted suppliers who share our commitment to excellence.</p>
<p>We deliver quality customer service and provide a vast assortment of products to our customers across Springfield and the surrounding neighborhoods.</p>
<p><img class="aligncenter" src="' . $img . 'btm3-img.jpg" alt="Customer choosing a snack" width="400"></p>',
	),
	'products'       => array(
		'Products',
		'<p>We\'re excited to serve you and become your go-to spot for tasty snacks and meals. Come in and experience the flavor revolution at Crave Corner.</p>
<h2>Our Menu</h2>
<h3 id="deli-case">Deli Case</h3>
<p><img class="alignright" src="' . $img . 'btm1-img1.jpg" alt="Deli case" width="220">Fresh, ready-to-go favorites from our deli case, stocked daily.</p>
<h3 id="hispanic-snacks">Hispanic Snacks</h3>
<p><img class="alignright" src="' . $img . 'btm1-img2.jpg" alt="Hispanic snacks" width="220">Bold, spicy and crunchy snacks with the flavors you love.</p>
<h3 id="hispanic-confections">Hispanic Confections</h3>
<p><img class="alignright" src="' . $img . 'btm1-img3.jpg" alt="Hispanic confections" width="220">Sweet treats and classic candies for every craving.</p>
<h3 id="packaged-bakery">Packaged Bakery</h3>
<p><img class="alignright" src="' . $img . 'btm1-img4.jpg" alt="Packaged bakery" width="220">Pastries and baked goods, individually packed and ready to enjoy.</p>
<h2 id="services">Services We Offer</h2>
<p>Each item is designed to tantalize your taste buds, providing the perfect end to any meal.</p>
<ul>
<li><strong>Frozen Food</strong></li>
<li><strong>Sandwiches</strong></li>
<li><strong>B2B Distribution</strong></li>
<li><strong>Pastry</strong></li>
</ul>
<h2>See Our Quarterly Specials</h2>
<p>Discover the latest flavors and seasonal delights with our specials at Crave Corner.</p>',
	),
	'reservations'   => array(
		'Reservations',
		'<p>Planning a visit or a larger order? Send us your details and preferred date and time, and we\'ll get back to you to confirm.</p>
[form src="appointmentForm"]',
	),
	'blog'           => array( 'Blog', '' ),
	'contact-us'     => array(
		'Contact Us',
		'<p>Have a question about our products or services? We\'d love to hear from you.</p>
<ul>
<li>Phone Number: <a href="tel:5555550142">555-555-0142</a></li>
<li>Email Address: <a href="mailto:hello@example.com">hello@example.com</a></li>
<li>Address: 123 Market Street, Springfield</li>
</ul>
[form src="contactForm_Fullname"]',
	),
	'privacy-policy' => array(
		'Privacy Policy',
		'<p>Crave Corner respects your privacy. This policy explains what information we collect through this website and how we use it.</p>
<h2>Information we collect</h2>
<p>When you send us a message, reservation request or other form, we collect the details you enter, such as your name, email address, phone number and message.</p>
<h2>How we use it</h2>
<p>We use this information only to respond to your inquiry and provide the products or services you ask about. We do not sell your personal information.</p>
<h2>Contact</h2>
<p>For questions about this policy, email <a href="mailto:hello@example.com">hello@example.com</a> or call 555-555-0142.</p>',
	),
	'sitemap'        => array( 'Sitemap', '' ),
);

$ids   = array();
$order = 0;
foreach ( $pages as $slug => $page ) {
	$data = array(
		'post_type'    => 'page',
		'post_status'  => 'publish',
		'post_title'   => $page[0],
		'post_name'    => $slug,
		'post_content' => $page[1],
		'menu_order'   => $order++,
		'post_parent'  => 0,
	);
	$existing = get_page_by_path( $slug );
	if ( $existing ) {
		$data['ID'] = $existing->ID;
		wp_update_post( $data );
		$ids[ $slug ] = $existing->ID;
	} else {
		$ids[ $slug ] = wp_insert_post( $data );
	}
}

// Remove WordPress's sample content.
foreach ( array( array( 'sample-page', 'page' ), array( 'hello-world', 'post' ) ) as $sample ) {
	$p = get_page_by_path( $sample[0], OBJECT, $sample[1] );
	if ( $p ) {
		wp_delete_post( $p->ID, true );
	}
}

// Demo blog posts (rebuilt each run).
$posts = array(
	array( 'welcome-to-crave-corner', 'Welcome to Crave Corner', 'Crave Corner was founded with a simple mission: to create a place where food lovers could enjoy high-quality, delicious snacks and meals in a warm and welcoming environment. From perfectly seasoned chips to delectable pastries, there\'s something here for every taste bud.' ),
	array( 'see-our-quarterly-specials', 'See Our Quarterly Specials', 'Discover the latest flavors and seasonal delights with our quarterly specials. Stop by our deli case or browse our Hispanic snacks, confections and packaged bakery to see what\'s new this season.' ),
);
foreach ( $posts as $i => $p ) {
	$existing = get_page_by_path( $p[0], OBJECT, 'post' );
	if ( $existing ) {
		wp_delete_post( $existing->ID, true );
	}
	wp_insert_post(
		array(
			'post_type'    => 'post',
			'post_status'  => 'publish',
			'post_name'    => $p[0],
			'post_title'   => $p[1],
			'post_content' => '<p>' . $p[2] . '</p>',
			'post_date'    => gmdate( 'Y-m-d H:i:s', time() - ( count( $posts ) - $i ) * DAY_IN_SECONDS ),
		)
	);
}

// Settings.
update_option( 'blogname', 'Crave Corner' );
update_option( 'blogdescription', 'Delicious Delights for Every Craving' );
update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $ids['home'] );
update_option( 'page_for_posts', $ids['blog'] );
update_option( 'wp_page_for_privacy_policy', $ids['privacy-policy'] );

// Menus (rebuilt from scratch each run).
$nav       = array( 'home', 'about-us', 'products', 'reservations', 'blog', 'contact-us' );
$locations = array();
foreach ( array( 'primary' => 'Primary Menu', 'secondary' => 'Footer Menu' ) as $location => $name ) {
	$menu = wp_get_nav_menu_object( $name );
	if ( $menu ) {
		wp_delete_nav_menu( $menu->term_id );
	}
	$menu_id = wp_create_nav_menu( $name );
	foreach ( $nav as $slug ) {
		wp_update_nav_menu_item(
			$menu_id,
			0,
			array(
				'menu-item-object-id' => $ids[ $slug ],
				'menu-item-object'    => 'page',
				'menu-item-type'      => 'post_type',
				'menu-item-status'    => 'publish',
			)
		);
	}
	$locations[ $location ] = $menu_id;
}
set_theme_mod( 'nav_menu_locations', $locations );

flush_rewrite_rules( false );

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	WP_CLI::success( sprintf( 'Demo content loaded: %d pages, %d posts, 2 menus.', count( $ids ), count( $posts ) ) );
}
