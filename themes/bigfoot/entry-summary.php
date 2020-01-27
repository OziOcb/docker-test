<section class="entry-summary">
	<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
	<?php the_excerpt(); ?>
	<a href="<?php the_permalink();?>" id="read-more-link" class="btn btn-primary" title="Read more about <?php echo the_title();?>"> Read More </a>
	<div class="clearfix"></div>
	<?php if( is_search() ) { ?>
	<div class="entry-links">
		<?php wp_link_pages(); ?>
	</div>
	<?php } ?>
</section>