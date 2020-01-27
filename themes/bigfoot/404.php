<?php get_header(); ?>
<section id="content" class="container-fluid" role="main">
	<div class="container">
		<div class="row">
			<div id="post-wrapper" class="col-12">
				<p>
					<?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?>
				</p>
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>