			<!-- start footer -->
			<footer id="footerWrapper">
				<section id="mainFooter">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="footerWidget text-center">
									<h3 class="bigTitle text-center">
										<?php
											foreach($contact as $key => $value):
												echo '<i class="'.$value[0].'"></i>&nbsp;'.$value[1].'<br>';
											endforeach;
										?>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="footerRights">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="socialNetwork">
									<?php
										foreach($social_network as $key => $value):
											echo '<li><a data-original-title="follow me on '.$key.'" href="'.$value[1].'" class="tips" title=""><i class="'.$value[0].' iconRounded"></i></a></li>';
											echo "\n";
										endforeach;
									?>
								</ul>
							</div>
							<div class="col-md-12">
								<p>Copyright &copy; 2014 <a href="#" target="blank">Play Maker Fan Club.</a> All rights reserved.</p>
							</div>
						</div>
					</div>
				</section>
			</footer>
			<!-- end footer -->
		</div>
		<!-- end global wrapper -->
		
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/respond/respond.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/jquery/jquery-1.10.2.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js'); ?>"></script>
		<!-- third party plugins  -->
		<script type="text/javascript" src="<?php echo base_url('/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/easing/jquery.easing.1.3.js'); ?>"></script>
		<!-- carousel -->
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/owl.carousel/owl-carousel/owl.carousel.min.js'); ?>"></script>
		<!-- pop up -->
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/magnific-popup/jquery.magnific-popup.min.js'); ?>"></script>
		<!-- Supersized slider -->
		<?php if($current_view === 'home') { ?>
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/supersized/js/supersized.3.2.7.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/supersized/theme/supersized.shutter.min.js'); ?>"></script>
		<?php } ?>
		<!-- isotope -->
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/isotope/jquery.isotope.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/isotope/jquery.isotope.sloppy-masonry.min.js'); ?>"></script>
		<!-- parallax -->
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/parallax/js/jquery.stellar.min.js'); ?>"></script>
		<!-- appear -->
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/appear/jquery.appear.js'); ?>"></script>
		<!-- toucheeffect -->
		<script type="text/javascript" src="<?php echo base_url('/assets/js-plugin/toucheeffect/toucheffects.js'); ?>"></script>	
		<!-- Custom  -->
		<script type="text/javascript" src="<?php echo base_url('/assets/js/custom.js'); ?>"></script>
	</body>
</html>