<?php get_header(); ?>
<section id="content" class="container-fluid" role="main">
	<div class="container">
		<div class="row">
			<div id="post-wrapper" class="col-lg-8 col-md-8 col-sm-8 col-12 hentry">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry' ); ?>
				<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
				<?php endwhile; endif; ?>
				<footer class="entry-footer">
					<?php get_template_part( 'nav', 'below-single' ); ?>
				</footer>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>