<?php
/**
 * Header for templates that call get_header() (archives, single posts, attachments).
 * Pages use page.php, which loads the same parts from includes/ directly.
 */
@session_start();
get_includes( 'head' );
get_includes( 'header' );
get_includes( 'nav' );
get_includes( 'banner' );
?>

<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
