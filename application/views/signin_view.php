<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Content Management Systems</title>
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/font-awesome/css/font-awesome.css'); ?>">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/css/sb-admin.css'); ?>">
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/jquery/jquery-1.10.2.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js'); ?>"></script>
	    <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
	    <script type="text/javascript">
			$(function() {
				$('input:first').focus();
				
				$('body').on('submit', '#sign-in-form', function() {
					var formValidate = true;
					$(this).find('input').each(function() {
						if($(this).val() === '' || $(this).val() === null) {
							$('.input-group').has(this).addClass('has-error').next().replaceWith('<span class="help-block">Please enter your ' + $(this).attr('placeholder').toLowerCase() + '.</span>');
							formValidate = false;
						}
					});
					return formValidate;
				}); 
			});
		</script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Sign In</h3>
						</div>
						<div class="panel-body">
							<form action="<?php echo site_url('/cms/do_signin'); ?>" accept-charset="utf-8" method="post" role="form" id="sign-in-form">
								<div class="input-group">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-user"></span>
									</span>
									<input type="email" name="input-email" placeholder="Email" class="form-control">
								</div>
								<br>
								<div class="input-group">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-lock"></span>
									</span>
									<input type="password" name="input-password" placeholder="Password" class="form-control">
								</div>
								<br>
								<button value="signin" name="input-submit" class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Sign In</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>