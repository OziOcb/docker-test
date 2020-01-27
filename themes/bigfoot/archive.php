<?php get_header(); ?>
<section id="content" class="container" role="main">
	<div class="row">
		<div id="post-wrapper" class="col-lg-8 col-md-8 col-sm-8 col-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php comments_template(); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</section>
<?php get_footer(); ?>