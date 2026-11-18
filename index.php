<!-- </?php @session_start();
get_includes('head');
get_includes('header');
get_includes('nav');
get_includes('banner');
?> -->
<!-- </?php if ( is_front_page() ) { get_includes('middle'); }?> -->


<!DOCTYPE html>
<!--[if lt IE 10]>      <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 10]>         <html class="no-js lt-ie11 lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 11]>         <html class="no-js lt-ie11"> <![endif]-->
<!--[if gt IE 11]><!-->
<html class="no-js" lang="en-US">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

  <title><?php echo get_bloginfo('name');?></title>

  <!-- </?php bloginfo('template_url');?>/ -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/hamburgers.min.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="css/rslides.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/skitter.styles.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/animate.min.css">

  <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> kung maggamit ug carousel
	<link rel="stylesheet" href="css/owl.theme.default.min.css"> -->

  <!-- <!?php if ( is_user_logged_in() ) { ?>
		<style>
			@media only screen and (max-width : 800px) {
				nav.toggle_right_style{top:32px;}
			}
			@media only screen and (max-width : 782px) {
				nav.toggle_right_style{top:46px;}
			}
		</style>
	<!?php }?> -->


  <!-- </?php if(is_page('page_ID_or_permalink')) { ?>
		<link rel="stylesheet" href="</?php bloginfo("template_url") ?>/nh_about/about-styles.min.css">
	</?php }?>

	</?php if(is_page('page_ID_or_permalink')) { ?>
		<link rel="stylesheet" href="</?php bloginfo("template_url") ?>/nh_services/serv-style.min.css">
	</?php }?> -->

  <!--</?php wp_head(); ?>-->

</head>

<body>
  <div class="protect-me">
    <div class="clearfix">


      <!-- Header -->

      <div class="header_holder">

        <header>
          <div class="wrapper">
            <div class="header_con">
              <div class="main_logo">
                <a href="<?php //echo get_home_url(); ?>">
                  <figure><img src="images/logo.svg" alt="<?php //echo get_bloginfo('name');?>" /></figure>
                </a>
              </div>

              <div class="head_info">

                <div class="hdr_mob">

                  <div class="header_info">

                    <span class="phone_icon">

                    </span>
                    <div class="hdr_txt">
                      <h3> <q class="dispHide"> Call Us Today! </q> <a class="hd_num" href="tel:5555550142"> <span>
                            <mark class="contact_num"> 555-555-0142 </mark></span> </a> </h3>
                    </div>

                    <div class="gtrans  wow fadeInUp" data-wow-duration='1773ms' data-wow-delay='1300ms'>

                      <?php echo do_shortcode('[gtranslate]'); ?>

                    </div>



                  </div>
                  <div class="social_media">


                    <div class="socmed_fig">
                      <section class="wow fadeInUp" data-wow-duration='1773ms' data-wow-delay='500ms'><a
                          href="https://www.facebook.com" target="_blank">
                          <figure> Facebook <img src="images/icons/fb-icon.png" alt="facebook" /></figure>
                        </a></section>
                      <section class="wow fadeInUp" data-wow-duration='1773ms' data-wow-delay='1000ms'><a
                          href="https://www.twitter.com" target="_blank">
                          <figure> Twitter <img src="images/icons/twitter-icon.png" alt="twitter" /></figure>
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


        <!-- Navigation -->
        <div id="nav_area">
          <div class="nav_toggle_button">

            <div class="logo_wrap"></div>

            <div class="toggle_holder">
              <div class="hamburger hamburger--spin-r">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
              </div>
              <small>Menu</small>
            </div>

            <div class="clearfix"></div>
          </div>

          <div class="toggle_right_nav">
            <nav class="page_nav">
              <div class="menu_slide_right">
                <a href="<?php //echo get_home_url(); ?>" class="logo_slide_right">
                  <figure><img src="images/logo.svg" alt="<?php //echo get_bloginfo('name');?>" /></figure>
                </a>
                <div class="toggle_holder">
                  <div class="hamburger hamburger--spin-r">
                    <div class="hamburger-box">
                      <div class="hamburger-inner"></div>
                    </div>
                  </div>
                  <small>Close</small>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="wrapper">

                <div class="nav_holder">

                  <!--</?php wp_nav_menu( array( 'container_class' => 'nav-menu', 'theme_location' => 'primary', 'after' => '<span><i class="fa fa-2x">&nbsp;&nbsp;&nbsp;&nbsp;</i></span>') ); ?>-->
                  <ul>
                    <li class="current_page_item"><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Products </a></li>
                    <li><a href="">Reservations </a></li>
                    <li><a href="">Blog </a></li>
                    <li><a href="">Contact Us</a></li>
                  </ul>

                </div>

              </div>
            </nav>
            <div class="toggle_nav_close"></div>
          </div>
        </div>

        <figure class="bnr_bg"><img src="images/bnr-bg.jpg" alt="xxxxxxxxxxxxxx"></figure>

      </div>
      <!-- End Navigation -->


      <!-- Banner -->
      <div id="banner">
        <div class="wrapper">
          <div class="bnr_con">

            <!-- <div class="slider">
				<figure>
					<video autoplay loop muted playsinline class="bnr_video">
					<source src="videos/banner.ogv" type="video/ogv">
					<source src="videos/banner.mp4" type="video/mp4">
					<source src="videos/banner.webm" type="video/webm">
					Your browser does not support the video tag.
					</video>
				</figure>
			</div> -->


            <div class="slider">

              <div class="box_skitter box_skitter_large random">
                <ul>
                  <li>
                    <figure><img class="fade" src="images/slider/1.jpg" alt="snacks display" /></figure>
                  </li>
                  <li>
                    <figure><img class="fade" src="images/slider/2.jpg" alt="takis snacks" /></figure>
                  </li>
                  <li>
                    <figure><img class="fade" src="images/slider/3.jpg" alt="burrito snacks" /></figure>
                  </li>
                </ul>
              </div>
              <ul class="rslides ">
                <li>
                  <figure><img src="images/slider/rslides/1.jpg" alt="snacks display" /></figure>
                </li>
                <li>
                  <figure><img src="images/slider/rslides/2.jpg" alt="takis snacks" /></figure>
                </li>
                <li>
                  <figure><img src="images/slider/rslides/3.jpg" alt="burrito snacks" /></figure>
                </li>
              </ul>
            </div>

            <?php dynamic_sidebar('bnr_info');?>

            <div class="bnr_mob_con">

              <div class="bnr_info">
                <h2 class="heading1 wow fadeInLeft" data-wow-duration='2182ms' data-wow-delay='500ms'> Delicious
                  Delights for <span>Every
                    Craving </span> </h2>
                <p class="wow fadeInLeft" data-wow-duration='2182ms' data-wow-delay='1200ms'>At <span
                    class="comp">Crave Corner</span> , we're
                  passionate about bringing you the best flavors from
                  around the world, all in one place. We've got something to satisfy every taste bud.
                </p>
                <a class="btn1 res_btn_center uppercase wow fadeInLeft" data-wow-duration='2182ms'
                  data-wow-delay='1500ms' href="aboutus">Find
                  Out More </a>
              </div>

            </div>

            <div class="bnr_soc_med"></div>


          </div>
        </div>
      </div>
      <!-- End Banner -->



      <!-- Main -->
      <div id="main_area">

        <span class="tomato1 wow fadeInDown" data-wow-duration='2500ms' data-wow-delay='600ms'></span>

        <div class="wrapper">

          <div class="main_con">

            <main class="wow fadeInRight" data-wow-duration='2045ms'>
              <h1 class="h1_title heading1">Crave Corner </h1>
              <p>At Crave Corner, we believe in the power of great food to bring people together. Our passion for culinary
                excellence is evident in every item we serve, from our perfectly seasoned chips to our delectable
                pastries. Whether you're stopping by for a quick bite or settling in for a meal with friends and family,
                we strive to provide an unforgettable dining experience that will keep you coming back for more. </p>
              <p>Crave Corner was founded with a simple mission: to create a place where food lovers could enjoy
                high-quality, delicious meals in a warm and welcoming environment. We take pride in our carefully
                curated menu, which features a diverse selection of flavors and textures, all made with the finest
                ingredients. </p>


            </main>

            <aside class="sidebar">

              <div class="slider2 slider">
                <ul class="rslides2 rslides ">
                  <li>
                    <figure><img src="images/side-img1.jpg" alt="salame snacks" /></figure>
                  </li>
                  <li>
                    <figure><img src="images/side-img2.jpg" alt="takis snacks" /></figure>
                  </li>
                  <li>
                    <figure><img src="images/side-img3.jpg" alt="burrito snacks" /></figure>
                  </li>
                </ul>

              </div>

            </aside>

          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- End Main -->




      <!-- Bottom -->
      <div id="bottom1">
        <div class="wrapper">
          <div class="btm1_con">

            <div class="btm1_info info text_center">

              <?php dynamic_sidebar('btm1_info');?>

              <h2 class="heading1"> Menu </h2>
              <p>We're excited to serve you and become your go-to spot for tasty snacks and meals. Come in and
                experience the flavor revolution at Crave Corner </p>
            </div>


            <div class="btm1_boxes flex_con">

              <section>

                <div class="btm1_box1 btm1_box">
                  <h2> DELI CASE </h2>
                  <a class=" " href="slug"> </a>
                </div>

                <figure><img src="images/btm1-img1.jpg" alt="___________"></figure>

              </section>

              <section>

                <div class="btm1_box2 btm1_box">
                  <h2> HISPANICS SNACKS </h2>
                  <a class=" " href="slug"> </a>
                </div>

                <figure><img src="images/btm1-img2.jpg" alt="___________"></figure>

              </section>

              <section>

                <div class="btm1_box3 btm1_box">
                  <h2> HISPANICS CONFECTIONS </h2>
                  <a class=" " href="slug"> </a>
                </div>

                <figure><img src="images/btm1-img3.jpg" alt="___________"></figure>

              </section>

              <section>

                <div class="btm1_box4 btm1_box">
                  <h2> PACKAGED BAKERY </h2>
                  <a class=" " href="slug"> </a>
                </div>

                <figure><img src="images/btm1-img4.jpg" alt="___________"></figure>

              </section>


            </div>
          </div>
        </div>
      </div>


      <div id="bottom2">
        <div class="wrapper">
          <div class="btm2_con">

            <div class="btm2_info info text_center  wow zoomIn" data-wow-duration='2273ms'>

              <?php dynamic_sidebar('btm2_info');?>

              <h2 class="heading1"> <span>Services</span> We Offer </h2>
              <p>Each item is designed to tantalize your taste buds. Providing the perfect end to any meal. </p>
              <a class="btn1" href="#mission"> More Services </a>
            </div>


            <div class="btm2_boxes flex_con">

              <section class="btm2_sec1 wow zoomIn" data-wow-duration='2273ms' data-wow-delay='400ms'>

                <div class="btm2_hov">

                  <?php dynamic_sidebar('btm2_box1');?>


                  <div class="btm2_box1 btm2_box">
                    <h2>Frozen Food </h2>
                    <a href="slug"> </a>
                  </div>
                </div>

              </section>


              <section class="btm2_sec2 wow zoomIn" data-wow-duration='2273ms' data-wow-delay='800ms'>

                <div class="btm2_hov">

                  <?php dynamic_sidebar('btm2_box2');?>

                  <div class="btm2_box2 btm2_box">
                    <h2> Sandwiches </h2>
                    <a href="slug"> </a>
                  </div>
                </div>

              </section>


              <section class="btm2_sec3 wow zoomIn" data-wow-duration='2273ms' data-wow-delay='1200ms'>

                <div class="btm2_hov">

                  <?php dynamic_sidebar('btm2_box3');?>


                  <div class="btm2_box3 btm2_box">
                    <h2> B2B Disctribution </h2>
                    <a href="slug"> </a>
                  </div>
                </div>

              </section>


              <section class="btm2_sec4 wow zoomIn" data-wow-duration='2273ms' data-wow-delay='1600ms'>

                <div class="btm2_hov">

                  <?php dynamic_sidebar('btm2_box4');?>


                  <div class="btm2_box4 btm2_box">
                    <h2> Pastry </h2>
                    <a href="slug"> </a>
                  </div>
                </div>

              </section>

            </div>

          </div>
        </div>
      </div>


      <div id="bottom3">
        <div class="wrapper">
          <span class="leaf3 wow fadeInDown" data-wow-duration='3000ms'></span>
          <div class="btm3_con">

            <div class="btm3_info info  wow fadeInLeft" data-wow-duration='2091ms'>

              <?php dynamic_sidebar('leaf3');?>
              <h2 class="heading1 ">Our Mission <span>Statement </span> </h2>
              <p>At Crave Corner, quality is our top priority. We source our ingredients from trusted suppliers who share
                our commitment to excellence. </p>
              <p>At Crave Corner we deliver quality customer service and provide a vast assortment of product to its
                customer.
              </p>
              <a href="#mission" class="btn1">About Us</a>
            </div>

            <figure class="btm3_fig">
              <img src="images/btm3-img.jpg" alt="woman holding food">
            </figure>

            <div class="btm3_box wow fadeInLeft" data-wow-duration='2091ms' data-wow-delay='400ms'>
              <?php dynamic_sidebar('btm3_box');?>
              <h2><span> See Our</span> Quarterly Specials </h2>
              <p> Discover the latest flavors and seasonal delights with our weekly specials at Crave Corner. </p>
              <a href="slug"> </a>
            </div>


          </div>
        </div>
      </div>


      <div id="bottom4">
        <div class="wrapper">

          <span class="tomato3 wow fadeInDown" data-wow-duration='2500ms'></span>

          <div class="btm4_con">

            <figure class="btm4_fig"><img src="images/btm4-img.jpg" alt="snacks"></figure>

            <div class="btm4_holder wow fadeInRight" data-wow-duration='2182ms'>
              <?php dynamic_sidebar('btm4_info');?>
              <h2 class="heading1">Send Us a Message </h2>

              <form action="#bottom4" method="post" id="submit_formmessage" class="btm4_form">

                <div id="invalid-msg"></div>
                <input type="text" name="Robot" placeholder="Spam" value="<?php echo $_SESSION['Robot']; ?>"
                  style="display:none;">


                <div class="input_holder">

                  <input type="text" class="form_fullname" name="Full_Name"
                    value="<?php echo $_SESSION['Full_Name']; ?>" placeholder="* Full Name" required>
                  <input type="email" class="form_email" name="Email_Address"
                    value="<?php echo $_SESSION['Email_Address']; ?>" placeholder="* Email Address" required>
                  <textarea name="Question_or_Comment"
                    placeholder="Message(s)"><?php echo $_SESSION['Question_or_Comment']; ?></textarea>

                </div>

                <div class="form_disclmr">

                  <div class="disclaimer">
                    <p><input type="checkbox" class="form_chkbox" name="Privacy_Policy"
                        style="-webkit-appearance:checkbox" required /> <b>By submitting this form you agree to the
                        terms
                        of the <a href="<?php echo get_home_url();?>/privacy-policy" target="_blank">Privacy
                          Policy</a>.</b></p>
                  </div>

                  <div class="btn_holder">

                    <div class="captcha-box">
                      <div class="g-recaptcha" data-sitekey="<?php echo $recaptcha_sitekey; ?>"></div>
                    </div>
                    <input type="submit" name="submit_info" class="form_btn" value="Submit">

                  </div>

                </div>


              </form>
            </div>

          </div>
        </div>
      </div>

      <!-- End Bottom -->


      <!--Footer -->
      <footer>
        <div class="footer_top">
          <div class="wrapper">
            <span class="leaf4 wow fadeInDown" data-wow-duration='2500ms' data-wow-delay='600ms'></span>
            <div class="footer_top_con">

              <div class="footer_info">

                <div class="contact_info text_center wow zoomIn" data-wow-duration='2091ms'>
                  <h2 class="heading1">Contact Information</h2>
                  <p class="ftr_p">Service Areas Covered: Springfield and the surrounding neighborhoods </p>
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

                <!-- <div class="ftr_btn">
						<a href="our-location">View Map &amp; Directions <span>&raquo;</span> </a>
					</div> -->


              </div>

              <div class="footer_map">
                <figure>
                  <iframe
                    src="https://maps.google.com/maps?q=Springfield%2C%20IL&amp;z=11&amp;output=embed"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </figure>
              </div>


              <div class="footer_logo">
                <a href="<?php //echo get_home_url(); ?>">
                  <figure><img src="images/footer-logo.svg" alt="<?php //echo get_bloginfo('name');?>"></figure>
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
                <h2 class="heading2">Site Navigation
                </h2>


                <!-- </?php wp_nav_menu( array('theme_location' => 'secondary' ) ); ?> -->
                <ul>
                  <li class="current_page_item"><a href="index.php">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Resources</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>

              <div class="copy_holder">
                <div class="copyright">
                  &copy; Copyright
                  <?php
							$start_year = '2024';
							$current_year = date('Y');
							$copyright = ($current_year == $start_year) ? $start_year : $start_year.' - '.$current_year;
							echo $copyright;
							?>
                  <!-- <span class="footer_comp"></?php echo get_bloginfo('name');?>CompanyName</span> -->
                  <span class="footer_policy"><a href="privacy-policy">Privacy Policy</a></span>
                  <span class="ftr_copyr"> Designed by <a href="https://www.proweaver.com/" target="_blank"
                      rel="nofollow">Proweaver</a>
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

  <!--</?php get_includes('ie');?>-->

  <!--
  Solved HTML5 & CSS IE Issues
  -->
  <script src="js/modernizr-custom-v2.7.1.min.js"></script>
  <script src="js/jquery-2.1.1.min.js"></script>

  <!--
  Solved Psuedo Elements IE Issues
  -->
  <script src="js/calcheight.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.skitter.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/css3-animate-it.min.js"></script>
  <script src="js/wow.min.js"></script>

  <!-- <script src="js/owl.carousel.min.js"></script> -->

  <script>
  new WOW().init();
  </script>

  <script src='https://www.google.com/recaptcha/api.js'></script>

  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
  <script>
  // <!-- smoothscroll -->
  const lenis = new Lenis()

  lenis.on('scroll', (e) => {
    console.log(e)
  })

  lenis.on('scroll', ScrollTrigger.update)

  gsap.ticker.add((time) => {
    lenis.raf(time * 600)
  })

  gsap.ticker.lagSmoothing(0)
  </script>


  <!--</?php wp_footer(); ?>-->

</body>

</html>
<!-- End Footer -->