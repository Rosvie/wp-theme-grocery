<?php
/**
 * Entry point that works without URL rewriting (e.g. WordPress Playground or nginx):
 *   forms/template/?f=contactForm  is the same as  forms/template/contactForm  (Apache + forms/.htaccess)
 */
$form = preg_replace( '/[^A-Za-z0-9_]/', '', $_GET['f'] ?? '' );
$_SERVER['PATH_INFO'] = '/template/' . $form;
chdir( dirname( __DIR__ ) );
require dirname( __DIR__ ) . '/index.php';
