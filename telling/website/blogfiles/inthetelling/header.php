<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://inthetelling.com/css/normalize.css"></link>
<link rel="stylesheet" href="http://inthetelling.com/css/base.css"></link>
<link href="http://inthetelling.com/css/retina.css" media="screen" rel="stylesheet" type="text/css"></link>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    
    <!--I added starting here -->
    <nav class="top-bar">
	<a href="#" class="toggle-topbar menu-icon"><span>&#9776;</span></a> 
	<div class="logo">
		<a href="../index.html">
			<h1>In The Telling</h1>
		</a>
	</div>
	<div class="top-nav">
		<ul>
			<li><a href="../what.html">What We Do</a></li>
			<li><a href="../why.html">Why We Do It</a></li>
			<li><a href="../testimonials.html">Testimonials</a></li>
            <li><a class="selected" href="http://inthetelling.com/blog">Blog</a></li>
			<li><a href="../aboutus.html">About Us</a></li>
			<li><a href="../getstarted.html" class="buttonx">Get Started</a></li>
		</ul>
	</div>
	</nav> 
    <div class="hero">
	<div class="hero-image blogpic">
		<div class="hero-content">
			<p>
				Partnered with educators, we bring the art of <strong>digital storytelling</strong> to instruction.
			</p>
		</div>
	</div>
	</div>
    
	<div class="row gridrow">
    
    <!--i stopped adding starting here - so I need to find the place to close that div tag for the row -->
    
	<div id="main" class="wrapper">