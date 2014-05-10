<section id="page">
	<header class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1>User / Register</h1>
				</div>
			</div>
		</div>
	</header>
	<section id="content" class="mt30">
		<section class="color0">
			<div class="container">
				<div class="row">
					<div class="span12 text-center mb40">
						<h1>Register Form</h1>
						<!-- h2 class="subTitle">Lorem ipsum dolor sit amet</h2 -->
					</div>
					<div class="col-md-8 col-md-offset-2 boxFocus pt30 mb30">
						<div class="row">
							<div class="col-md-10 col-md-offset-1"> 
								<form class="mb15 pb40" role="form" id="register-form" action="<?php echo site_url('/user/do_register'); ?>" method="post">
									<div class="form-group">
										<label for="input-email">Email</label>
										<input type="email" placeholder="Enter email" name="input-email" id="input-email" class="form-control">
									</div>
									<div class="form-group">
										<label for="input-phone">Phone</label>
										<input type="text" placeholder="Enter phone" name="input-phone" id="input-phone" class="form-control" maxlength="10">
									</div>
									<div class="form-group">
										<label for="input-password">Password</label>
										<input type="password" placeholder="Enter password" name="input-password" id="input-password" class="form-control">
									</div>
									<div class="form-group">
										<label for="input-confirm-password">Confirm Password</label>
										<input type="password" placeholder="Enter password" name="input-confirm-password" id="input-confirm-password" class="form-control">
									</div>
									<button class="btn btn-lg btn-primary" type="submit" name="input-submit">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
</section>