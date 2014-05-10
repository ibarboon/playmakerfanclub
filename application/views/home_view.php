<!-- begin superSizedSlider -->
<section id="superSizedSlider" class="scrollMenu">
	<input type="hidden" id="input-slider-list" value="<?php echo site_url('home/get_slider_list'); ?>">
	<a id="prevslide" class="load-item"></a> <a id="nextslide" class="load-item"></a>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="slidecaption"></div>
			</div>
		</div>
	</div>
</section>
<!-- end superSizedSlider -->
<!-- begin content -->
<section id="content">
	<!-- begin promotions -->
	<section id="promotions" class="color0 pt40 pb40">
		<div class="container">
			<div class="row"> 
				<div class="col-md-12 mb30 text-center">
					<h1>Promotion</h1>
					<!--p class="subTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p-->
				</div>
				<section class="col-md-12">
					<!--div class="row mb15">
						<?php for($n = 1; $n < 5; ++$n) { ?>
						<div class="col-sm-3" data-nekoanim="fadeIn" data-nekodelay="100">
							<article>
								<div>
									<img src="<?php echo base_url('/assets/images/team/team-corporate-1.jpg'); ?>?>" alt="" class="img-responsive">
								</div>
								<div class="boxContent">
									<h3>Promotion # <?php echo $n; ?></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate nunc ut tellus sollicitudin placerat.</p>
								</div>
							</article>
						</div>
						<?php } ?>
					</div-->
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>วัน</th>
									<th colspan="3" style="text-align: center;">เวลา</th>
									<th>หมายเหตุ</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="2">จันทร์ - ศุกร์</td>
									<td>09.00 - 19.00 น.</td>
									<td>19.00 - 21.00 น.</td>
									<td>21.00 - 23.00 น.</td>
									<td rowspan="2">รวมผู้ตัดสิน</td>
								</tr>
								<tr>
									<td>1,750 บาท/ชั่วโมง</td>
									<td>2,500 บาท/ชั่วโมง</td>
									<td>2,350 บาท/ชั่วโมง</td>
								</tr>
								<tr>
									<td rowspan="2">เสาร์ - อาทิตย์ และวันหยุด</td>
									<td>08.00 - 18.00 น.</td>
									<td>18.00 - 20.00 น.</td>
									<td>20.00 - 24.00 น.</td>
									<td rowspan="2">รวมผู้ตัดสิน</td>
								</tr>
								<tr>
									<td>2,000 บาท/ชั่วโมง</td>
									<td>2,500 บาท/ชั่วโมง</td>
									<td>2,350 บาท/ชั่วโมง</td>
								</tr>
							</tbody>
						</table>
					</div>
				</section>
			</div>
		</div>
	</section>
	<!-- end promotions -->
	<!-- end parallax --> 
	<section id="paralaxSlice1" data-stellar-background-ratio="0.5">
		<div class="maskParent">
			<div class="paralaxMask"></div>
			<div class="paralaxText">
				<h2><?php echo $content['slogan'][0]['content_body']?></h2>
			</div>
		</div>
	</section>
	<!-- end parallax -->
	<!-- start about -->
	<section id="about" class="color0 pt40 pb40" >
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img class="img-responsive" alt="" src="<?php echo base_url('/assets/images/theme-pics/woman.jpg'); ?>?>">
				</div>
				<div class="col-md-8">
				<h1>About Us</h1>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
				<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
				<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- end about -->
	<!-- start parallax testimonial --> 
	<section id="paralaxSlice2" data-stellar-background-ratio="0.5">
		<div class="maskParent">
			<div class="paralaxMask"></div>
			<div class="paralaxText container">
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel nekoDataOwl  testimonialCarousel" data-neko_items="1" data-neko_singleitem="true" data-neko_paginationnumbers="true">
							<?php
								foreach($content['testimonial'] as $key => $value):
									echo '<div class="item">';
									echo '<img src="'.base_url('/assets/images/clients/'.$value['content_image']).'" class="img-circle mb15" alt="client">';
									echo '<blockquote class="text-center">'.$value['content_header'].': '.$value['content_body'].'</blockquote>';
									echo '</div>';
								endforeach;
							?>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- end parallax testimonial --> 
	<!-- start team -->
	<!--section id="services" class="color0">
		<div class="container pt40 pb40">
			<div class="row">
				<div class="span12 text-center mb40">
					<h1>Teams</h1>
					<h2 class="subTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
				</div>
			</div>
			<div class="row">
				<?php foreach($content['team_list'] as $key => $value): ?>
					<div class="col-md-3 col-sm-12">
						<article class="boxIcon">
							<a href="javascript:void(0);">
								<div class="imgBorder">
									<img alt="" src="<?php echo base_url('/assets/images/team/'.$value['team_image']); ?>" class="img-circle img-responsive">
								</div>
								<h2><?php echo $value['team_name']; ?></h2>
							</a>
						</article>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section-->
	<!-- end team -->
</section>
<!-- end content -->