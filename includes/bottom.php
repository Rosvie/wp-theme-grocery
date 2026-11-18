<!-- Form Activation Code -->

<?php
define('ACCESSIBLE', true);
unset($_SESSION);

@session_start();
$foldername = get_template();

$formname = 'Send Us a Message Form';
$prompt_message = '<span style="color:#ff0000;"></span>';
require_once 'wp-content/themes/'.$foldername.'/forms/config.php';

if ( ! function_exists( 'Main_recaptcha_check' ) ) {
	function Main_recaptcha_check( $secret ) {
		if ( empty( $secret ) ) {
			return (object) array( 'success' => defined( 'FORM_DEMO_MODE' ) && FORM_DEMO_MODE );
		}
		$response = wp_remote_post( 'https://www.google.com/recaptcha/api/siteverify', array(
			'body' => array( 'secret' => $secret, 'response' => $_POST['g-recaptcha-response'] ?? '' ),
		) );
		return json_decode( wp_remote_retrieve_body( $response ) ) ?: (object) array( 'success' => false );
	}
}
if(isset($_POST['submit_info'])){

	$robot = $_POST['Robot'] ?? '';

	$result_recaptcha = Main_recaptcha_check( $recaptcha_privite );

	$_SESSION['Full_Name'] = (isset($_POST['Full_Name'])) ? $_POST['Full_Name'] : '';
  	$_SESSION['Email_Address'] = (isset($_POST['Email_Address'])) ? $_POST['Email_Address'] : '';
  	$_SESSION['Question_or_Comment'] = (isset($_POST['Question_or_Comment'])) ? $_POST['Question_or_Comment'] : '';
	$_SESSION['Robot'] = (isset($_POST['Robot'])) ? $_POST['Robot'] : '';
	
	if(empty($_POST['Full_Name']) ||
	empty($_POST['Email_Address'])
	) {

	$asterisk = '<span style="color:#FF0000; font-weight:bold;">*&nbsp;</span>';
	$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>* Required Fields are empty.</span></p><br/><p class="error-close">x</p></div></div>';
	}
	else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",stripslashes(trim($_POST['Email_Address'] ?? ''))))
		{ $prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>Please enter a valid email address.</span></p><br/><p class="error-close">x</p></div></div>'; }
	// else if(!$result_recaptcha->success)
	// 	{ $prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>Invalid reCAPTCHA</span></p><br/><p class="error-close">x</p></div></div>'; }
	else if (!empty($robot)) {
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	}else if(preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",stripslashes(trim($_POST['Full_Name'] ?? '')))){
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	}else if(preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",stripslashes(trim($_POST['Question_or_Comment'] ?? '')))){
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	}else if(preg_match("/[+&@#\/%?=~_|!:,.;]/",stripslashes(trim($_POST['Full_Name'] ?? '')))){
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	}else if(preg_match("/(Bali|BALI|bali)/",stripslashes(trim($_POST['Full_Name'] ?? '')))){
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	}else if(preg_match("/(http|ftp|href)/",stripslashes(trim($_POST['Question_or_Comment'] ?? '')))){
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	}else if(preg_match("/(Bali|BALI|bali|Villa|VILLA|villa)/",stripslashes(trim($_POST['Question_or_Comment'] ?? '')))){
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	}else if(preg_match("/(bagat|store|ru|yourmail|bagat-1.ru|bagat-4.ru)/",stripslashes(trim($_POST['Email_Address'] ?? '')))){
		$prompt_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>YOU\'RE A MALICIOUS SPAMMER! STAY AWAY!</span></p><br/><p class="error-close">x</p></div></div>';
	} 

	else{

		$body = '<div class="form_table" style="width:700px; height:auto; font-size:12px; color:#333333; letter-spacing:1px; line-height:20px; margin: 0 auto;">
			<div style="border:8px double #c3c3d0; padding:12px;">
			<div align="center" style="font-size:22px; font-family:Times New Roman, Times, serif; color:#051d38;">'.COMP_NAME.'</div>
			<div align="center" style="color:#990000; font-style:italic; font-size:20px; font-family:Arial; margin:bottom: 15px;">('.$formname.')</div>

			<table width="90%" cellspacing="2" cellpadding="5" align="center" style="font-family:Verdana; font-size:13px">
				';

			foreach($_POST as $key => $value){
				if($key == 'secode') continue;
				elseif($key == 'submit_info') continue;
                elseif($key == 'g-recaptcha-response') continue;
				
				if(!empty($value)){
					$key2 = str_replace('_', ' ', $key);
					if($value == ':') {
						$body .= '<tr><td colspan="2" style="background:#F0F0F0; line-height:30px"><b>'.$key2.'</b></td></tr>';
					}else if($key == "Privacy_Policy"){
					$body .= '<tr><td colspan="3" line-height:30px">

					<input type="checkbox" checked disabled /> By submitting this form you agree to the terms of the Privacy Policy.

					</td></tr>';

					}else {
						$body .= '<tr><td><b>'.$key2.'</b>:</td> <td>'.htmlspecialchars(trim($value), ENT_QUOTES).'</td></tr>';
					}
				}
			}
			$body .= '
			</table>

			</div>
			</div>';

		// for email notification
		include 'wp-content/themes/'.$foldername.'/forms/send_email_curl.php';

		// save data form on database
		include 'wp-content/themes/'.$foldername.'/forms/savedb2.php';

		// save data form on database
		$subject = $formname ;
		$attachments = array();

	 	//name of sender
		$name = $_POST['Full_Name'];
		$result = insertDB($name,$subject,$body,$attachments);

		$parameter = array(
			'body' => $body,
			'from' => $from_email,
			'from_name' => $from_name,
			'to' => $to_email,
			'subject' => 'New Message Notification',
			'attachment' => $attachments
		); 

		$success_message = '<div id="success"><div class="message"><p class="success-check"><span>THANK YOU</span><br/> <span>for sending us a message!</span><br/><span>We will be in touch with you soon.</span></p><p class="close">x</p></div></div>';
		$failed_message = '<div id="error-msg"><div class="message"><p class="fail-check"><span>Failed to send email. Please try again.</span></p><br/><p class="error-close">x</p></div></div>';
			
		$prompt_message = send_email($parameter, $success_message, $failed_message);
		unset($_SESSION);
	}

}
/*************declaration starts here************/
?>

<!-- End of Form Activation Code -->


<?php echo $prompt_message; ?>











<?php
$bo_tpl      = get_template_directory_uri();
$bo_products = home_url( '/products' );
$bo_about    = home_url( '/about-us' );
?>

<!-- Bottom -->
<div id="bottom1">
  <div class="wrapper">
    <div class="btm1_con">

      <div class="btm1_info info text_center">
        <?php dynamic_sidebar('btm1_info');?>
        <h2 class="heading1"> Menu </h2>
        <p>We're excited to serve you and become your go-to spot for tasty snacks and meals. Come in and
          experience the flavor revolution at Crave Corner.</p>
      </div>

      <div class="btm1_boxes flex_con">
        <?php
        $bo_menu = array(
          array( 'DELI CASE', 'deli-case', 'btm1-img1.jpg', 'deli case' ),
          array( 'HISPANIC SNACKS', 'hispanic-snacks', 'btm1-img2.jpg', 'Hispanic snacks' ),
          array( 'HISPANIC CONFECTIONS', 'hispanic-confections', 'btm1-img3.jpg', 'Hispanic confections' ),
          array( 'PACKAGED BAKERY', 'packaged-bakery', 'btm1-img4.jpg', 'packaged bakery' ),
        );
        foreach ( $bo_menu as $i => $item ) { ?>
        <section>
          <div class="btm1_box<?php echo $i + 1; ?> btm1_box">
            <h2> <?php echo esc_html( $item[0] ); ?> </h2>
            <a href="<?php echo esc_url( $bo_products . '#' . $item[1] ); ?>" aria-label="<?php echo esc_attr( $item[0] ); ?>"> </a>
          </div>
          <figure><img src="<?php echo esc_url( $bo_tpl . '/images/' . $item[2] ); ?>" alt="<?php echo esc_attr( $item[3] ); ?>"></figure>
        </section>
        <?php } ?>
      </div>

    </div>
  </div>
</div>


<div id="bottom2">
  <div class="wrapper">
    <div class="btm2_con">

      <div class="btm2_info info text_center wow zoomIn" data-wow-duration='2273ms'>
        <?php dynamic_sidebar('btm2_info');?>
        <h2 class="heading1"> <span>Services</span> We Offer </h2>
        <p>Each item is designed to tantalize your taste buds, providing the perfect end to any meal. </p>
        <a class="btn1" href="<?php echo esc_url( $bo_products . '#services' ); ?>"> More Services </a>
      </div>

      <div class="btm2_boxes flex_con">
        <?php
        $bo_services = array( 'Frozen Food', 'Sandwiches', 'B2B Distribution', 'Pastry' );
        foreach ( $bo_services as $i => $label ) {
          $n = $i + 1; ?>
        <section class="btm2_sec<?php echo $n; ?> wow zoomIn" data-wow-duration='2273ms' data-wow-delay='<?php echo 400 * $n; ?>ms'>
          <div class="btm2_hov">
            <?php dynamic_sidebar( 'btm2_box' . $n ); ?>
            <div class="btm2_box<?php echo $n; ?> btm2_box">
              <h2> <?php echo esc_html( $label ); ?> </h2>
              <a href="<?php echo esc_url( $bo_products . '#services' ); ?>" aria-label="<?php echo esc_attr( $label ); ?>"> </a>
            </div>
          </div>
        </section>
        <?php } ?>
      </div>

    </div>
  </div>
</div>


<div id="bottom3">
  <div class="wrapper">
    <span class="leaf3 wow fadeInDown" data-wow-duration='3000ms'></span>
    <div class="btm3_con">

      <div class="btm3_info info wow fadeInLeft" data-wow-duration='2091ms'>
        <?php dynamic_sidebar('leaf3');?>
        <h2 class="heading1">Our Mission <span>Statement </span> </h2>
        <p>At Crave Corner, quality is our top priority. We source our ingredients from trusted suppliers who share
          our commitment to excellence. </p>
        <p>At Crave Corner we deliver quality customer service and provide a vast assortment of products to our
          customers.</p>
        <a href="<?php echo esc_url( $bo_about ); ?>" class="btn1">About Us</a>
      </div>

      <figure class="btm3_fig">
        <img src="<?php echo esc_url( $bo_tpl . '/images/btm3-img.jpg' ); ?>" alt="Shopper with a cart in a grocery aisle">
      </figure>

      <div class="btm3_box wow fadeInLeft" data-wow-duration='2091ms' data-wow-delay='400ms'>
        <?php dynamic_sidebar('btm3_box');?>
        <h2><span> See Our</span> Quarterly Specials </h2>
        <p> Discover the latest flavors and seasonal delights with our specials at Crave Corner. </p>
        <a href="<?php echo esc_url( $bo_products ); ?>" aria-label="See our quarterly specials"> </a>
      </div>

    </div>
  </div>
</div>


<div id="bottom4">
  <div class="wrapper">

    <span class="tomato3 wow fadeInDown" data-wow-duration='2500ms'></span>

    <div class="btm4_con">

      <figure class="btm4_fig"><img src="<?php echo esc_url( $bo_tpl . '/images/btm4-img.jpg' ); ?>" alt="Bowl of potato chips"></figure>

      <div class="btm4_holder wow fadeInRight" data-wow-duration='2182ms'>
        <?php dynamic_sidebar('btm4_info');?>
        <h2 class="heading1">Send Us a Message </h2>

        <form action="#bottom4" method="post" id="submit_formmessage" class="btm4_form">

          <div id="invalid-msg"></div>
          <input type="text" name="Robot" placeholder="Spam" value="<?php echo esc_attr( $_SESSION['Robot'] ?? '' ); ?>"
            style="display:none;" tabindex="-1" autocomplete="off">

          <div class="input_holder">
            <input type="text" class="form_fullname" name="Full_Name"
              value="<?php echo esc_attr( $_SESSION['Full_Name'] ?? '' ); ?>" placeholder="* Full Name" aria-label="Full Name" required>
            <input type="email" class="form_email" name="Email_Address"
              value="<?php echo esc_attr( $_SESSION['Email_Address'] ?? '' ); ?>" placeholder="* Email Address" aria-label="Email Address" required>
            <textarea name="Question_or_Comment" placeholder="Message(s)" aria-label="Message"><?php echo esc_textarea( $_SESSION['Question_or_Comment'] ?? '' ); ?></textarea>
          </div>

          <div class="form_disclmr">
            <div class="disclaimer">
              <p><label><input type="checkbox" class="form_chkbox" name="Privacy_Policy"
                  style="-webkit-appearance:checkbox" required /> <b>By submitting this form you agree to the terms
                  of the <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>" target="_blank">Privacy Policy</a>.</b></label></p>
            </div>

            <div class="btn_holder">
              <?php if ( ! empty( $recaptcha_sitekey ) ) { ?>
              <div class="captcha-box">
                <div class="g-recaptcha" data-sitekey="<?php echo esc_attr( $recaptcha_sitekey ); ?>"></div>
              </div>
              <?php } ?>
              <input type="submit" name="submit_info" class="form_btn" value="Submit">
            </div>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>
<!-- End Bottom -->
