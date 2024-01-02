<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jplayer.blue.monday.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/swipebox.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/main-style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" />

	<!-- Style Css -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/revolution.all.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/revolution3.css">

    <!-- Modernizr -->
    <script src="<?php bloginfo('template_url'); ?>/js/modernizr.js.download"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
	
	
</head>

<body <?php body_class(); ?>>
	
	<div id="jquery_jplayer_2" class="jp-jplayer" style="width: 0px; height: 0px;"><img id="jp_poster_0" style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_0" preload="metadata" src="http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a" title="Bubble"></audio></div>

	<div class="wrapper">
		<header class="sticky animated slideInDown"> 
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<div class="header-content">
							<div class="menus">
								<nav>
									<ul>
										<li class="active"><a href="<?php echo get_home_url(); ?>" title="">HOME</a></li>
										<li><a href="<?php echo get_home_url(); ?>/bio/" title="">Bio</a></li>
										<li><a href="<?php echo get_home_url(); ?>/gallery-video" title="">Pics/Video</a></li>
									</ul>
								</nav>
							</div>
							<div class="logo desktop_logo">
								<a href="<?php echo get_home_url(); ?>" title="" class="white-logo"><img src="<?php echo get_field('logo','option'); ?>" alt=""></a>
								<a href="<?php echo get_home_url(); ?>" title="" class="dark-logo"><img src="<?php echo get_field('logo','option'); ?>" alt=""></a>
							</div>
							
							<div class="logo mobile_logo">
								<div class="white-logo"><img src="<?php echo get_field('logo','option'); ?>" alt=""></div>
								<div class="dark-logo"><img src="<?php echo get_field('logo','option'); ?>" alt=""></div>
							</div>
							<div class="rightMenu">
								<nav>
									<ul>
										<li><a href="<?php echo get_home_url(); ?>/teaching" title="">Teaching</a></li>
										<li><a href="<?php echo get_home_url(); ?>/contact" title="">Contact</a></li>
									</ul>
								</nav>
							</div>
							<div class="socail">
								 <ul class="social-links hd-v">
					                					                    <li><a target="_blank" href="http://Twitter.com/aaplus100" title=""><i class="fab fa-twitter"></i></a></li>
					                					                    <li><a target="_blank" href="https://m.facebook.com/AmbDynAlley" title=""><i class="fab fa-facebook-f"></i></a></li>
					                					                    <li><a target="_blank" href="https://www.instagram.com/amber_allen_music/" title=""><i class="fab fa-instagram"></i></a></li>

                                                                    <li><a target="_blank" href="https://www.youtube.com/@queengqueen100" title=""><i class="fab fa-youtube"></i></a></li>
					                					            </ul>
					            							
							</div>
							<div class="menu-btn d-none">
								<span class="bar1"></span>
								<span class="bar2"></span>
								<span class="bar3"></span>
							</div>
						</div><!--header-content end-->
					</div>
				</div>
			</div>
		</header><!--header end-->



		<div class="responsive-mobile-menu">
			<ul>
				<li><a href="<?php echo get_home_url(); ?>" title="">HOME</a></li>
				<li><a href="<?php echo get_home_url(); ?>/bio/" title="">Bio</a></li>
				<li><a href="<?php echo get_home_url(); ?>/gallery-video" title="">Pics/Video</a></li>
				<li><a href="<?php echo get_home_url(); ?>/teaching" title="">Teaching</a></li>
				<li><a href="<?php echo get_home_url(); ?>/contact" title="">Contact</a></li>
			</ul>
			
			<div class="socail">
								 <ul class="social-links hd-v">
					                					                    <li><a target="_blank" href="http://Twitter.com/aaplus100" title=""><i class="fab fa-twitter"></i></a></li>
					                					                    <li><a target="_blank" href="https://m.facebook.com/AmbDynAlley" title=""><i class="fab fa-facebook-f"></i></a></li>
					                					                    <li><a target="_blank" href="https://www.instagram.com/amber_allen_music/" title=""><i class="fab fa-instagram"></i></a></li>

                                                                    <li><a target="_blank" href="https://www.youtube.com/@queengqueen100" title=""><i class="fab fa-youtube"></i></a></li>
					                					            </ul>
					            							
							</div>
		</div><!--responsive-menu end-->



		<?php get_sidebar('banner'); ?>


