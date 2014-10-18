<section id="superSizedSlider" class="scrollMenu">
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="slidecaption"></div>
			</div>
		</div>
	</div>
</section>
<section id="content">
	<section class="color0">
		<div class="container">
			<div class="row">
				<div class="col-md-6 pt40" data-nekoanim="fadeInLeftBig" data-nekodelay="200">
					<img src="<?php echo base_url('assets/frontend/images/'.$content_list['section-one']['content_media']); ?>" alt="" class="img-responsive" />
			</div>
			<div class="col-md-5 col-md-offset-1 pt40 mt40">
				<h1><?php echo $content_list['section-one']['content_header']; ?></h1>
				<p><?php echo $content_list['section-one']['content_body']; ?></p>
			</div>
		</div>
	</div>
</section>
<section class="color1">
	<div class="container">
		<div class="row">
			<div class="col-md-5 pt40 mt40">
				<h1><?php echo $content_list['section-two']['content_header']; ?></h1>
				<p><?php echo $content_list['section-two']['content_body']; ?></p>
			</div>
			<div class="col-md-6 col-md-offset-1 pt40 pb40" data-nekoanim="fadeInRightBig" data-nekodelay="300">
				<img src="<?php echo base_url('assets/frontend/images/'.$content_list['section-two']['content_media']); ?>" alt="" class="img-responsive"/>
			</div>
		</div>
	</div>
</section>
<section id="projectQuoteSection" class="pt40 pb40 color2">
	<div class="container">
		<div class="row"> 
			<div class="col-md-12 mb30 text-center" data-nekoanim="fadeInDown" data-nekodelay="300">
				<h1><?php echo $content_list['section-three']['content_header']; ?></h1>
				<p><?php echo $content_list['section-three']['content_body']; ?></p>
			</div>
		</div>
	</div>
</section>