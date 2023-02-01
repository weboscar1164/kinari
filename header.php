<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="ja" class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title><?php echo bloginfo('name') . ' ' . bloginfo('description'); //ブログのname descriptionを表示 ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	-->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">
	 <!-- <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700">
	<link rel="stylesheet" href="<?php //echo get_stylesheet_uri(); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>./css/animate.css" type="text/css" />
 	<link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" />
	 <link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/css/icomoon.css" type="text/css" />
	 <link rel="stylesheet" href="<?php //echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" />  -->
	<?php wp_head(); ?>	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">
	<div id="fh5co-logo">
		<h1 ><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
		<p><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('description'); //ブログのdescriptionを表示 ?></a></p><!-- /header-sub -->
	</div>
			<nav id="fh5co-main-menu" role="navigation">
				<?php
					wp_nav_menu(
					//.header-listを置き換えて、PC用メニューを動的に表示する
					array(
					'depth' => 1,
					'theme_location' => 'global', //グローバルメニューをここに表示すると指定
					'container' => 'false',
					'menu_class' => 'header-list',
					)
					);
				?>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2020 web shop oscar</span></small></p>
				<ul>
					<!-- <li><a href="#"><i class="fab fa-facebook-f"></i></i></a></li> -->
					<!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> -->
					<li class="shop-icon"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/minne_appicon.png" alt=""></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>

		</aside>
		<div id="fh5co-main">