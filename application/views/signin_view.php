<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Play Maker Fan Club | Sign In</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/sb-admin.css'); ?>">
		<style type="text/css">
			body { padding-top: 60px; }
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">CMS | Sign In</h3>
						</div>
						<div class="panel-body">
							<?php if(!is_null($signin_status)) { ?>
							<div class="alert alert-danger">The email or password is incorrect.</div>
							<?php } ?>
							<form action="<?php echo site_url('/user/do_signin'); ?>" accept-charset="utf-8" method="post" role="form" id="sign-in-form">
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
								<button value="signin" name="in-submit" class="btn btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Sign In</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/jquery/jquery-1.10.2.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
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
	</body>
</html>