<div id="sidebar" class="col-lg-4 col-md-4 col-sm-12 col-12" role="complementary">
	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
	<div id="primary" class="widget-area">
		<ul class="">
			<?php dynamic_sidebar( 'primary-widget-area' ); ?>
		</ul>
	</div>
	<?php endif; ?>
</div>