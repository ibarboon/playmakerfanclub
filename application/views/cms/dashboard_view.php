<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Play Maker Fan Club | CMS</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/sb-admin.css'); ?>">
	</head>
	<body>
		<!-- begin #wrapper -->
		<div id="wrapper">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Play Maker Fan Club | CMS</a>
				</div>			
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#">
							<span class="glyphicon glyphicon-user"></span> <?php echo $s_user_data['user_email']; ?>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('/user/sign-out'); ?>">
							<span class="glyphicon glyphicon-off"></span> Sign Out
						</a>
					</li>
				</ul>
				<div class="navbar-default navbar-static-side" role="navigation">
					<div class="sidebar-collapse">
						<ul class="nav" id="side-menu">
							<li>
								<a href="<?php echo site_url('/cms/dashboard/'); ?>"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a>
							</li>
						</ul>
					</div>
				</div>
			</nav><!-- begin #page-wrapper -->
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Blank</h1>
					</div>
				</div>
			</div><!-- end #page-wrapper -->
		</div>
		<!-- end #wrapper -->
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/jquery/jquery-1.10.2.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	</body>
</html>