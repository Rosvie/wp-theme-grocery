<!--Footer -->
<footer>
  <div class="footer_top">
    <div class="wrapper">
      <span class="leaf4 wow fadeInDown" data-wow-duration='2500ms' data-wow-delay='600ms'></span>
      <div class="footer_top_con">

        <div class="footer_info">

          <div class="contact_info text_center wow zoomIn" data-wow-duration='2091ms'>
            <h2 class="heading1">Contact Information</h2>
            <p class="ftr_p">Service Areas Covered: Springfield and the surrounding neighborhoods</p>
          </div>

          <div class="contact_list">
            <ul>
              <li class="wow fadeInLeft" data-wow-duration='2091ms'> <q>Talk to Us </q> Phone Number: <a
                  href="tel:5555550142"> <mark class="contact_num">555-555-0142 </mark> </a>
                <span>Email Address: <a href="mailto:hello@example.com">hello@example.com </a> </span>
              </li>
              <li class="wow fadeInRight" data-wow-duration='2091ms'> <q>Locate Us </q> <span> Our Location:
                  <address>123 Market Street, Springfield</address>
                </span>
              </li>
            </ul>
          </div>

        </div>

        <div class="footer_map">
          <figure>
            <iframe title="Map of Springfield"
              src="https://maps.google.com/maps?q=Springfield%2C%20IL&amp;z=11&amp;output=embed"
              style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </figure>
        </div>

        <div class="footer_logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <figure><img src="<?php bloginfo('template_url');?>/images/footer-logo.svg"
                alt="<?php echo esc_attr( get_bloginfo('name') ); ?>"></figure>
          </a>
        </div>

      </div>
    </div>
  </div>

  <div class="footer_btm">
    <div class="wrapper">
      <div class="footer_btm_con">
        <div class="footer_nav">
          <?php dynamic_sidebar('ftr_info');?>
          <h2 class="heading2">Site Navigation</h2>
          <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'depth' => 1 ) ); ?>
        </div>

        <div class="copy_holder">
          <div class="copyright">
            &copy; Copyright
            <?php
              $start_year = '2024';
              $current_year = date('Y');
              echo ( $current_year == $start_year ) ? $start_year : $start_year . ' - ' . $current_year;
            ?>
            <span class="footer_policy"><a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a></span>
            <span class="ftr_copyr"> Designed by <a href="https://www.proweaver.com/" target="_blank"
                rel="nofollow noopener">Proweaver</a>
            </span>
          </div>
        </div>

      </div>
    </div>
  </div>
</footer>

<span class="back_top"></span>

</div> <!-- End Clearfix -->
</div> <!-- End Protect Me -->

<?php get_includes('ie');?>

<!--
  Solved HTML5 & CSS IE Issues
  -->
<script src="<?php bloginfo('template_url');?>/js/modernizr-custom-v2.7.1.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery-2.1.1.min.js"></script>

<!--
  Solved Psuedo Elements IE Issues
  -->
<script src="<?php bloginfo('template_url');?>/js/calcheight.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.skitter.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/responsiveslides.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/plugins.js"></script>
<script src="<?php bloginfo('template_url');?>/js/css3-animate-it.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/wow.min.js"></script>
<!-- <script src="</?php bloginfo('template_url');?>/js/owl.carousel.js"></script> -->

<script>
new WOW().init();
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>

<?php wp_footer(); ?>

</body>

</html>
<!-- End Footer -->