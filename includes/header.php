<!-- Header -->
<div class="header_holder">

<header>
  <div class="wrapper">
    <div class="header_con">
      <div class="main_logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <figure><img src="<?php bloginfo('template_url');?>/images/logo.svg"
              alt="<?php echo esc_attr( get_bloginfo('name') ); ?>" /></figure>
        </a>
      </div>

      <div class="head_info">

        <div class="hdr_mob">

          <div class="header_info">

            <?php dynamic_sidebar('header_info');?>

            <span class="phone_icon"></span>
            <div class="hdr_txt">
              <h3> <q class="dispHide"> Call Us Today! </q> <a class="hd_num" href="tel:5555550142"> <span>
                    <mark class="contact_num"> 555-555-0142 </mark></span> </a> </h3>
            </div>

            <?php // js/plugins.js moves .gtrans (and the social icons after it) under the banner, so it must always exist. ?>
            <div class="gtrans wow fadeInUp" data-wow-duration='1773ms' data-wow-delay='1300ms'><?php
              if ( shortcode_exists( 'gtranslate' ) ) { echo do_shortcode( '[gtranslate]' ); }
            ?></div>

          </div>

          <div class="social_media">
            <?php dynamic_sidebar('soc_med');?>

            <div class="socmed_fig">
              <section class="wow fadeInUp" data-wow-duration='1773ms' data-wow-delay='500ms'><a
                  href="https://www.facebook.com" target="_blank" rel="noopener">
                  <figure> Facebook <img src="<?php bloginfo('template_url');?>/images/icons/fb-icon.png" alt="facebook" /></figure>
                </a></section>
              <section class="wow fadeInUp" data-wow-duration='1773ms' data-wow-delay='1000ms'><a
                  href="https://www.twitter.com" target="_blank" rel="noopener">
                  <figure> Twitter <img src="<?php bloginfo('template_url');?>/images/icons/twitter-icon.png" alt="twitter" /></figure>
                </a></section>
            </div>
          </div>

        </div>

      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</header>
<!-- End Header -->
