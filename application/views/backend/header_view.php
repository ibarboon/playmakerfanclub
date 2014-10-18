<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>สนามฟุตบอล Play Maker | Backend</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url('assets/backend/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('assets/backend/css/sb-admin.css'); ?>" rel="stylesheet" type="text/css">
		<style type="text/css">
			#page-wrapper { min-height: 600px; }
		</style>
		<script type="text/javascript" src="<?php echo base_url('assets/backend/js/jquery-1.11.0.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/backend/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/backend/js/view.'.$current_page.'.js'); ?>"></script>
	</head>
	<body>
		<div id="wrapper">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url('backend/dashboard'); ?>">สนามฟุตบอล Play Maker | Backend</a>
				</div>
				<ul class="nav navbar-right top-nav">
					<li>
						<a href="javascript: void(0);"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $user_data['username']; ?></a>
					</li>
					<li>
						<a href="<?php echo site_url('backend/do_signout'); ?>"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a>
					</li>
				</ul>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav side-nav">
						<?php
							foreach ($menu_list as $menu) {
								$attr = ($menu['option_key'] === $current_page)? ' class="active"': NULL;
								$display = explode("|", $menu['option_value']);
						?>
						<li <?php echo $attr; ?>>
							<a href="<?php echo site_url('backend/'.$menu['option_key']); ?>"><span class="glyphicon <?php echo $display[1]; ?>"></span>&nbsp;<?php echo $display[0]; ?></a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</nav>
			<div id="page-wrapper">
				<div class="container-fluid">