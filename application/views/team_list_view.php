<section id="page">
	<header class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1>Team</h1>
				</div>
			</div>
		</div>
	</header>
	<section id="content" class="mt30">
		<!-- start team -->
	<section id="services" class="color0">
		<div class="container pt40 pb40">
			<div class="row">
				<div class="span12 text-center mb40">
					<h1>Teams</h1>
					<h2 class="subTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
				</div>
			</div>
			<div class="row">
				<?php for($n = 1; $n < 13; ++$n) { ?>
				<!-- team item -->
				<div class="col-md-3 col-sm-12">
					<article class="boxIcon">
						<a href="#">
							<div class="imgBorder">
								<img alt="" src="<?php echo base_url('/assets/images/team/team-corporate-1.jpg'); ?>" class="img-circle img-responsive">
							</div>
							<h2>Team <?php echo $n; ?></h2>
						</a>
					</article>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- end team -->
	</section>
</section>