<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title><?php echo $web_meta['title']; ?></title>
		<meta name="description" content="<?php echo $web_meta['description']; ?>">
		<meta name="author" content="<?php echo $web_meta['author']; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Bootstrap  -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>">
		<!-- web font  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>
		<!-- Pop up-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/js-plugin/magnific-popup/magnific-popup.css'); ?>">
		<!-- Supersized slider-->
		<link rel="stylesheet" href="<?php echo base_url('/assets/js-plugin/supersized/css/supersized.css'); ?>" type="text/css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url('/assets/js-plugin/supersized/theme/supersized.shutter.css'); ?>" type="text/css" media="screen">
		<!-- Owl carousel-->
		<link rel="stylesheet" href="<?php echo base_url('/assets/js-plugin/owl.carousel/owl-carousel/owl.carousel.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('/assets/js-plugin/owl.carousel/owl-carousel/owl.theme.css'); ?>">
		<!-- nekoAnim-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/js-plugin/appear/nekoAnim.css'); ?>">
		<!-- isotope -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/js-plugin/isotope/css/style.css'); ?>">
		<!-- icon fonts -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/font-icons/custom-icons/css/custom-icons.css'); ?>">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/font-icons/custom-icons/css/custom-icons-ie7.css'); ?>">
		<!-- Custom css -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/css/layout.css'); ?>">
		<link type="text/css" id="colors" rel="stylesheet" href="<?php echo base_url('/assets/css/sea-green.css'); ?>">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/css/custom.css'); ?>">
		<style type="text/css">
			.page-header.bigHeader {
				padding-bottom:0;
				background-image:url('<?php echo base_url('/assets/images/theme-pics/big-header.jpg'); ?>');
				background-position: top center;
				background-repeat: no-repeat;
			}
		</style>
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
		<script src="<?php echo base_url('/assets/js/modernizr-2.6.1.min.js'); ?>"></script>
		<!--link rel="shortcut icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png"-->
	</head>
	<!--body class="header1 activateAppearAnimation"-->
	<body>
		<!-- globalWrapper -->
		<div id="globalWrapper">
			<header class="navbar-fixed-top">
				<div id="mainHeader" role="banner">
					<div class="container">
						<nav class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="<?php echo site_url('/'); ?>"><img src="<?php echo base_url('/assets/images/'.$web_meta['logo']); ?>" alt=""/></a>
							</div>
							<div class="collapse navbar-collapse" id="mainMenu">
								<ul class="nav navbar-nav pull-right">
									<?php
										$menu_list = array(
											'Home' => '/',
											'Promotion' => 'promotion',
											'Team' => 'team',
											'User' => array(
												'Register' => 'user/register',
												'Sign-In' => 'user/sign-in'
											),
											'Contact' => 'contact'
										);
										foreach($menu_list as $key => $val) {
											$attr = (strtolower($key) === $current_view)? ' active': '';
											echo '<li class="primary">';
											if(is_array($val)) {
												echo '<a class="firstLevel'.$attr.'" href="javascript:void(0);">'.$key.'</a>';
												echo '<ul class="subMenu">';
												foreach($val as $sub_key => $sub_val) {
													echo '<li><a href="'.site_url($sub_val).'">'.str_replace('-', ' ', $sub_key).'</a></li>';
												}
												echo '</ul>';
											} else {
												echo '<a class="firstLevel'.$attr.'" href="'.site_url($val).'">'.$key.'</a>';
											}
											echo (strtolower($key) !== 'contact')? '</li><li class="sep"></li>': '</li>';
										}
									?>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</header>
			<!-- end header -->