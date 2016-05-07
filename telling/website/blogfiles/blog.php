<?php
require('wp-blog-header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>In The Telling: Bringing the art of storytelling to online courses</title>
	<link href="./favicon.ico" rel="icon" type="image/x-icon"></link>
	<link rel="apple-touch-icon-precomposed"                 href="../apple-touch-icon.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72"   href="../apple-touch-icon-72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../apple-touch-icon-114.png" />	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="../css/normalize.css"></link>
	<link rel="stylesheet" href="../css/base.css"></link>
	<!-- this must be after any @media-containing css: -->
	<script src="../js/vendor/respond.min.js" type="text/javascript"></script> 
	<!--This must be after respond.js (we don't want it injected in IE7/8): -->
	<link href="../css/retina.css" media="screen" rel="stylesheet" type="text/css"></link>
	<script src="../js/frills.js"></script> 
</head>
<body>
<nav class="top-bar">
	<a href="#" class="toggle-topbar menu-icon"><span>&#9776;</span></a> 
	<div class="logo">
		<a href="index.html">
			<h1>In The Telling</h1>
		</a>
	</div>
	<div class="top-nav">
		<ul>
			<li><a href="../what.html">What We Do</a></li>
			<li><a class="../selected" href="why.html">Why We Do It</a></li>
			<li><a href="../testimonials.html">Testimonials</a></li>
			<li><a href="../aboutus.html">About Us</a></li>
			<li><a href="../getstarted.html" class="buttonx">Get Started</a></li>
		</ul>
	</div>
</nav> 
<div class="hero">
	<div class="hero-image why">
		<div class="hero-content">
			<p>
            	The lecture is the <strong>last mile</strong> in modernizing instruction for mobile learners.
			</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="col col-1">
		<p>
        
        
<?php
require('wp-blog-header.php');
?>

<?php
$posts = get_posts('numberposts=10&order=ASC&orderby=post_title');
foreach ($posts as $post) : setup_postdata( $post ); ?>
<?php the_date(); echo "<br />"; ?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a><br />
<div style="font-size:12px;color:#666;"><?php the_excerpt(); ?> </div>
<?php
endforeach;
?>


        
        </p>
	</div>
	
</div>



<footer> 
<div class="footer row">
	<div class="col col-3">
		<!-- future -->
	</div>
	<div class="col col-3">
		<!-- future -->
	</div>
	<div class="col col-3">
		<div class="contact">
			<h5>Contact</h5>
			<p>
				<a href="http://goo.gl/maps/VriQK" target="_blank"> 3980 Broadway<br>
				Suite 201<br>
				Boulder, CO 80304 </a> 
			</p>
			<p>
				<a href="tel:720-443-2488">720.443.2488</a><br>
				720.293.6155 (fax) 
			</p>
			<p>
				<a href="mailto:contact@inthetelling.com">contact@inthetelling.com</a> 
			</p>
		</div>
	</div>
</div>
</footer> 

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42208015-1', 'inthetelling.com');
  ga('send', 'pageview');

</script>

</body>
</html>
