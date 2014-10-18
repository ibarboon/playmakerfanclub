<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title><?php echo $web_meta_list['title']; ?></title>
		<meta name="description" content="<?php echo $web_meta_list['description']; ?>">
		<meta name="author" content="<?php echo $web_meta_list['author']; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:100,300,400">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/js-plugin/supersized/css/supersized.css'); ?>" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/js-plugin/supersized/theme/supersized.shutter.css'); ?>" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/js-plugin/animation-framework/animate.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/js-plugin/magnific-popup/magnific-popup.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/js-plugin/owl.carousel/owl-carousel/owl.carousel.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/js-plugin/owl.carousel/owl-carousel/owl.transitions.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/js-plugin/owl.carousel/owl-carousel/owl.theme.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/js-plugin/appear/nekoAnim.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/font-icons/custom-icons/css/custom-icons.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/layout.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/sea-green.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/custom.css'); ?>">
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
		<script src="<?php echo base_url('assets/frontend/js/modernizr-2.6.1.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/respond/respond.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/jquery/jquery-1.10.2.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/bootstrap/js/bootstrap.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/easing/jquery.easing.1.3.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/owl.carousel/owl-carousel/owl.carousel.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/magnific-popup/jquery.magnific-popup.min.js'); ?>"></script>
		<?php if ($current_view === 'home') { ?>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/supersized/js/supersized.3.2.7.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/supersized/theme/supersized.shutter.min.js'); ?>"></script>
		<script type="text/javascript">
			$(function($){
				"use strict";
				if($('#superSizedSlider').length){
					$('#superSizedSlider').height($(window).height());
					$.supersized({
						// Functionality
						slideshow               :   1,          // Slideshow on/off
						autoplay                :   1,          // Slideshow starts playing automatically
						start_slide             :   1,          // Start slide (0 is random)
						stop_loop               :   0,          // Pauses slideshow on last slide
						random                  :   0,          // Randomize slide order (Ignores start slide)
						slide_interval          :   12000,      // Length between transitions
						transition              :   1,          // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
						transition_speed        :   1000,       // Speed of transition
						new_window              :   1,          // Image links open in new window/tab
						pause_hover             :   0,          // Pause slideshow on hover
						keyboard_nav            :   1,          // Keyboard navigation on/off
						performance             :   1,          // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
						image_protect           :   1,          // Disables image dragging and right click with Javascript
						// Size & Position     
						min_width               :   0,          // Min width allowed (in pixels)
						min_height              :   0,          // Min height allowed (in pixels)
						vertical_center         :   1,          // Vertically center background
						horizontal_center       :   1,          // Horizontally center background
						fit_always              :   0,          // Image will never exceed browser width or height (Ignores min. dimensions)
						fit_portrait            :   1,          // Portrait images will not exceed browser height
						fit_landscape           :   0,          // Landscape images will not exceed browser width
						// Components       
						slide_links             :   'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
						thumb_links             :   0,          // Individual thumb links for each slide
						thumbnail_navigation    :   0,          // Thumbnail navigation
						slides: [ // Slideshow Images
						<?php
						foreach ($super_sized_slider_list as $key => $value) {
							echo "{image : './assets/frontend/images/slider/super/$value[option_key]', title : '<h1>$value[option_value]</h1>', thumb : '', url : ''}";
							echo (($key + 1) !== count($super_sized_slider_list))? ',': NULL;
						}
						?>
						],
						// Theme Options               
						progress_bar: 0, // Timer for each slide     
						mouse_scrub: 0
					});
				}
			});
		</script>
		<?php } ?>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/isotope/jquery.isotope.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/isotope/jquery.isotope.sloppy-masonry.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/neko-contact-ajax-plugin/js/jquery.form.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/neko-contact-ajax-plugin/js/jquery.validate.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/parallax/js/jquery.stellar.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/appear/jquery.appear.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js-plugin/toucheeffect/toucheffects.js'); ?>"></script>	
		<script type="text/javascript" src="<?php echo base_url('assets/frontend/js/custom.js'); ?>"></script>
	</head>
	<body class="activateAppearAnimation header5">
		<div id="globalWrapper">
			<header class="navbar-fixed-top">
				<div id="preHeader" class="hidden-xs">
					<div class="container">
						<div class="row">
							<div class="col-xs-6"></div>
							<div class="col-xs-6">
								<div id="contactBloc" class="clearfix">
									<ul class="socialNetwork">
										<?php
											foreach ($social_network_list as $social_network) {
												$social_network_item = (strpos($social_network['option_value'], '|') !== 0)? explode('|', $social_network['option_value']): $social_network['option_value'];
										?>
										<li><a href="<?php echo $social_network_item[0]; ?>" class="tips" title="follow me on <?php echo $social_network['option_key']; ?>"><i class="<?php echo $social_network_item[1]; ?>"></i></a></li>
										<?php } ?>
									</ul>
									<span class="contactPhone"><i class="icon-phone"></i><?php echo $contact_us_list['phone'];?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="mainHeader" role="banner">
					<div class="container">
						<nav class="navbar navbar-default scrollMenu" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="<?php echo site_url('home'); ?>"><img src="<?php echo base_url('assets/frontend/images/'.$web_meta_list['main_logo']); ?>"/></a>
							</div>
							<div class="collapse navbar-collapse" id="mainMenu">
								<ul class="nav navbar-nav pull-right">
									<?php
										foreach ($menu_list as $menu) {
											$attr = ($menu['option_key'] === $current_view)? ' active': NULL;
									?>
									<li class="primary">
										<a href="<?php echo site_url($menu['option_key']); ?>" class="firstLevel<?php echo $attr; ?>"><?php echo $menu['option_value'] ?></a>
									</li>
									<?php } ?>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</header>