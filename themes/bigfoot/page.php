<?php get_header(); ?>


<!-- Remove before going to production -->
<div class="container">
	<div class="row">
		<div class="col-12 bg-accent4 text-center pt-5" style="height:500px">dummy content</div>
		<div class="col-12 d-none d-xxs-block bg-secondary">
			<p>XXS Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia velit, consequuntur et placeat deserunt similique!</p>
		</div>
		<div class="col-12 d-none d-xs-block bg-danger">
			<p>XS Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia velit, consequuntur et placeat deserunt similique!</p>
		</div>
		<div class="col-12 d-none d-sm-block bg-warning">
			<p>SM Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia velit, consequuntur et placeat deserunt similique!</p>
		</div>
		<div class="col-12 d-none d-md-block bg-info">
			<p>MD Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia velit, consequuntur et placeat deserunt similique!</p>
		</div>
		<div class="col-12 d-none d-lg-block bg-light">
			<p>LG Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia velit, consequuntur et placeat deserunt similique!</p>
		</div>
		<div class="col-12 d-none d-xl-block bg-dark">
			<p>XL Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia velit, consequuntur et placeat deserunt similique!</p>
		</div>
		<div class="col-12 d-none d-xxl-block bg-success bg-gradient-primary">
			<p>XXL Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia velit, consequuntur et placeat deserunt similique!</p>
		</div>
		<div class="custom-class col-12 bg-primary bg-gradient-primary p-5">
			<h1>h1 test</h1>
			<div class="h1">Lorem, ipsum dolor.</div>
			<h2>h2 test</h2>
			<div class="h2">Lorem, ipsum dolor.</div>
			<h3>h3 test</h3>
			<div class="h3">Lorem, ipsum dolor.</div>
			<h4>h4 test</h4>
			<div class="h4">Lorem, ipsum dolor.</div>
			<h5>h5 test</h5>
			<div class="h5">Lorem, ipsum dolor.</div>
			<p class="text-accent4">CUSTOM CLASS Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia velit, consequuntur et placeat deserunt similique!</p>
			<a href="#" class="text-accent4">LINKS Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia velit, consequuntur et placeat deserunt similique!</a>
			<div class="lead">LEAD Lorem ipsum dolor sit amet.</div>
			<div class="display-1">DISPLAY1 Lorem ipsum.</div>
			<div class="display-2">DISPLAY2 Lorem ipsum.</div>
			<div class="display-3">DISPLAY3 Lorem ipsum.</div>
			<div class="display-4">DISPLAY4 Lorem ipsum.</div>
			<div class="blockquote">BLOCKQUOTE Lorem ipsum.</div>

			<button class="btn btn-warning btn-lg">button</button>

		</div>
	</div>
</div>
<!-- Remove before going to production END -->


<section id="content" role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>

</section>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>