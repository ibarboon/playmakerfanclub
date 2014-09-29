<section id="page">
	<header class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1><?php echo ucwords(str_replace('-', ' ', $current_view)); ?></h1>
					<p>Lorem ipsum dolor sit amet,</p>
				</div>
				<div class="col-sm-6 hidden-xs">
					<ul id="navTrail">
						<li><a href="index.html">Home</a></li>
						<li id="navTrailLast"><?php echo ucwords(str_replace('-', ' ', $current_view)); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<section id="content" class="mt30 pb30">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<article class="post clearfix">
						<div class="postPic">
							<div class="imgBorder mb15">
								<a href="blog-post.html"><img src="<?php echo base_url('assets/frontend/images/blog/blog-pic2.jpg'); ?>" alt="" class="img-responsive"/></a>
							</div>
						</div>
						<div class="row">
							<section class="col-sm-12 col-xs-12">
								<h2><a href="blog-post.html">Okay, Houston, we’ve had a problem here</a></h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce auctor lacus ac justo varius in vehicula nibh mattis. Aenean ac diam metus. Aliquam tempor tincidunt pretium. Suspendisse bibendum, sapien venenatis vestibulum commodo, eros lectus iaculis magna, sit amet pellentesque ligula turpis a nibh... <a href="blog-post.html" class="readMore">read more</a>
								</p>
								<ul class="entry-meta">
									<li class="entry-date"><a href="#"><i class="icon-pin"></i>&nbsp;12 Oct. 2027</a></li>
									<li class="entry-author"><a href="#"><i class="icon-male"></i>&nbsp;Admin</a></li>
								</ul>
							</section>
						</div>
					</article>
					<hr class="lineLines mb40 mt30">
					<article class="post clearfix">
						<div class="postPic">
							<div class="imgBorder mb15">
								<a href="blog-post.html"><img src="<?php echo base_url('assets/frontend/images/blog/blog-pic2.jpg'); ?>" alt="" class="img-responsive"/></a>
							</div>
						</div>
						<div class="row">
							<section class="col-sm-12 col-xs-12">
								<h2><a href="blog-post.html">I feel fine. How about you?</a></h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce auctor lacus ac justo varius in vehicula nibh mattis. Aenean ac diam metus. Aliquam tempor tincidunt pretium. Suspendisse bibendum, sapien venenatis vestibulum commodo, eros lectus iaculis magna, sit amet pellentesque ligula turpis a nibh... <a href="blog-post.html" class="readMore">read more</a>
								</p>
								<ul class="entry-meta">
									<li class="entry-date"><a href="#"><i class="icon-pin"></i>&nbsp;12 Oct. 2027</a></li>
									<li class="entry-author"><a href="#"><i class="icon-male"></i>&nbsp;Admin</a></li>
								</ul>
							</section>
						</div>
					</article>
				</div>
				<!-- Sidebar -->
				<aside class="col-md-4">
					<section>
						<h1>Latest news from planet earth</h1>
						<p>Nullam sed tortor odio. Suspendisse tincidunt dictum nisi, nec convallis odio lacinia ac. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
					</section>
					<section class="widget">
						<h3>Categories</h3>
						<ul class="list-unstyled iconList">
							<li><a href="#">Solace of a lonely highway</a></li>
							<li><a href="#">Write with purpose</a></li>
							<li><a href="#">Tree on a lake</a></li>
							<li><a href="#">Don’t stop questioning</a></li>
							<li><a href="#">Overheard this morning</a></li>
						</ul>
					</section>
					<section class="widget">
						<h3>Archives</h3>
						<ul class="list-unstyled iconList">
							<li><a href="#">March 2012</a></li>
							<li><a href="#">September 2011</a></li>
							<li><a href="#">July 2011</a></li>
							<li><a href="#">June 2011</a></li>
						</ul>
					</section>
				</aside>
			</div>
		</div>
	</section>
</section>