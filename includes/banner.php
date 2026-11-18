<!-- Banner -->
<div id="banner">
  <div class="wrapper">
    <div class="bnr_con">

      <?php if (is_front_page() ) { ?>



      <div class="slider">

        <div class="box_skitter box_skitter_large">
          <ul>
            <li>
              <figure><img src="<?php bloginfo('template_url');?>/images/slider/1.jpg" alt="Chips on store shelves" /></figure>
            </li>
            <li>
              <figure><img src="<?php bloginfo('template_url');?>/images/slider/2.jpg" alt="Candy and snack shelves" /></figure>
            </li>
            <li>
              <figure><img src="<?php bloginfo('template_url');?>/images/slider/3.jpg" alt="Bakery counter" /></figure>
            </li>
          </ul>
        </div>
        <ul class="rslides">
          <li>
            <figure><img src="<?php bloginfo('template_url');?>/images/slider/rslides/1.jpg" alt="Chips on store shelves" /></figure>
          </li>
          <li>
            <figure><img src="<?php bloginfo('template_url');?>/images/slider/rslides/2.jpg" alt="Candy and snack shelves" /></figure>
          </li>
          <li>
            <figure><img src="<?php bloginfo('template_url');?>/images/slider/rslides/3.jpg" alt="Bakery counter" /></figure>
          </li>
        </ul>
      </div>

      <?php dynamic_sidebar('bnr_info');?>

      <div class="bnr_mob_con">
        <div class="bnr_info">
          <h2 class="heading1 wow fadeInLeft" data-wow-duration='2182ms' data-wow-delay='500ms'> Delicious
            Delights for <span>Every Craving </span> </h2>
          <p class="wow fadeInLeft" data-wow-duration='2182ms' data-wow-delay='1200ms'>At <span
              class="comp">Crave Corner</span>, we're passionate about bringing you the best flavors from
            around the world, all in one place. We've got something to satisfy every taste bud.
          </p>
          <a class="btn1 res_btn_center uppercase wow fadeInLeft" data-wow-duration='2182ms'
            data-wow-delay='1500ms' href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">Find Out More </a>
        </div>
      </div>

      <div class="bnr_soc_med"></div>




      <?php } else { ?>
      <div class="non_ban">
        <div class="non_ban_img">
          <?php if(is_home() && is_author() && is_category() && is_tag() && is_single()) { ?>
          <?php if (has_post_thumbnail() ) {?>
          <?php the_post_thumbnail('full');?>
          <?php }else{ ?>
          <figure><img src="<?php bloginfo('template_url');?>/images/slider/nh-banner.jpg" alt="image_banner" />
          </figure>
          <?php } ?>
          <?php } elseif (!is_home() && !is_author() && !is_category() && !is_tag() && !is_single() && has_post_thumbnail() ) { ?>
          <?php the_post_thumbnail('full');?>
          <?php } else { ?>
          <figure><img src="<?php bloginfo('template_url'); ?>/images/slider/nh-banner.jpg" alt="image_banner"></figure>
          <?php } ?>
        </div>

        <div class="page_title">
          <?php if(!is_home() && !is_author() && !is_category() && !is_tag() && !is_single()) { ?>
          <h1 class="h1_title"><?php the_title(); ?></h1>
          <?php echo do_shortcode("[short_title id='" . get_the_ID() . "']"); ?>
          <?php } else { ?>
          <h1 class="h1_title">Blog</h1>
          <?php } ?>
        </div>
      </div>
      <?php }?>

    </div>
  </div>
</div>
<!-- End Banner -->