			<footer id="footerWrapper" class="footer3">
				<section id="mainFooter">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="footerWidget text-center">
									<h1 class="bigTitle text-center"><?php echo $contact_us_list['phone'];?></h1> 
									<address class="text-center"><?php echo $contact_us_list['address'];?></address>
									<ul class="socialNetwork">
										<?php
											foreach ($social_network_list as $social_network) {
												$social_network_item = (strpos($social_network['option_value'], '|') !== 0)? explode('|', $social_network['option_value']): $social_network['option_value'];
										?>
										<li><a href="<?php echo $social_network_item[0]; ?>" class="tips" title="" data-original-title="follow me on <?php echo $social_network['option_key']; ?>"><i class="<?php echo $social_network_item[1]; ?> iconRounded iconSmall"></i></a></li>
										<?php } ?>
									</ul>    
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="footerRights">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<p>Copyright &copy; 2014 <a href="<?php echo site_url('/'); ?>" target="blank"><?php echo $web_meta_list['copyright']; ?></a> / All rights reserved.</p> 
							</div>
						</div>
					</div>
				</section>
			</footer>
		</div>
	</body>
</html>