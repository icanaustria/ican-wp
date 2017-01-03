<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="##da1f3d">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			
			ga('create', 'UA-89357964-1', 'auto');
			ga('send', 'pageview');
		</script>
		<!-- end analytics -->
<style>
h1,h2,h3,h4,h5,h6,
.h1,.h2,.h3,.h4,.h5,.h6 {
font-family:inherit !important;
font-weight:600 !important;
text-transform:none !important;
}
.top-bar li a {
font-family:inherit !important;
}
.top-bar .top-bar-right li a {
font-size:.85rem;
}
.top-bar .top-bar-right {
display:none;
}
.top-bar ul {
    margin-left: -.7rem;
}
.top-bar ul,
.top-bar li a {
border:none !important;
}
h2.front-title {
	font-size:1rem;
}
footer h4 {
font-size:1.25rem !important;
}
#header-logo img {
max-width:200px;
}
.row {
max-width:1140px;
}
</style>

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
			
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				
				<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
				
				<div class="off-canvas-content" data-off-canvas-content>
					
					<header class="header" role="banner">
							
						<div class="row">
							<div class="large-4 columns">
								<a href="<?php echo home_url(); ?>"><span class="header-logo-font1">ican austria</span><br/><span class="header-logo-font2">Kampagne zur Abschaffung<br/>von Nuklearwaffen</span></a>	
							</div>
							<div id="header-logo" class="large-4 columns">
								<center><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" /></center>
							</div>	
							<div id="header-socialbox" class="large-2 columns">
								<a href="http://www.facebook.com/ICAN-Austria" title="Like on Facebook" target="_blank"><i class="fi-social-facebook large"></i></a>		
								<a href="http://twitter.com/@icanaustria" title="Follow on Twitter" target="_blank"><i class="fi-social-twitter large"></i></a>
								<a href="http://www.youtube.com/user/ICANinAction" title="Subscribe to Youtube Channel" target="_blank"><i class="fi-social-youtube large"></i></a>
							</div>
							<div id="header-search" class="large-2 columns">									
								<form method="get" id="desktop-search" class="search-form" action="http://www.icanaustria.at">
								<input type="text" class="header-search-input-box" value="" placeholder="Suchen →" name="s" id="fffff">
								<input type="submit" class="header-search-button" id="searchsubmit" value="">
								</form>
							</div>
						</div>		
				
						<?php get_template_part( 'parts/nav', 'topbar' ); ?>
		 	
					</header> <!-- end .header -->