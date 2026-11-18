<?php
defined('ACCESSIBLE') or exit('No direct script access allowed');
ini_set('display_errors', 'off');
error_reporting(E_ALL);
define('COMP_EMAIL', 'hello@example.com'); // clients email

define('SMTP_ENCRYPTION', 'off'); // TLS, SSL or off
define('SMTP_PORT', 587); // SMPT port number 587 or default
define('COMP_NAME', 'Crave Corner'); // company name
define('MAIL_TYPE', 2); // 1 - html, 2 - txt
define('MAIL_DOMAIN', 'example.com'); // company domain
define('TEMPLATE_TEST', true); //if false = launched account , true = pages account

// Demo mode: forms validate and show the thank-you message, but nothing is emailed or sent anywhere.
// Set to false (and fill in the reCAPTCHA keys and recipients below) to send real email.
define('FORM_DEMO_MODE', true);

// Update it using a working google Site key
$recaptcha_sitekey = ''; // your Google reCAPTCHA v2 site key
// Update it using a working google Privite key
$recaptcha_privite = ''; // your Google reCAPTCHA v2 secret key (never commit a real one)

// do not edit
$subject = COMP_NAME . " [" . ( $formname ?? '' ) . "]";
$template = 'template';
$to_name = NULL;
$from_email = 'noreply@example.com';
$from_name = 'Message From Your Site';
$attachments = array();

// testing here
$testform = true;
if ($testform) {
	// when using cc and/or bcc use string type to_email
	// cc and/or bcc can contain string or array type data
	$to_email = array('test@example.com');
	$cc = '';
	$bcc = '';
} else {
	$to_email = array('hello@example.com');
	$cc = '';
	$bcc = '';
}