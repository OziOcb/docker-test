<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<nav id="nav-below" class="post-pagination" role="navigation">
	<?php echo paginate_links(array(
	'prev_text'          => '<i class="fa fa-chevron-left"></i>',
	'next_text'          => '<i class="fa fa-chevron-right"></i>'));?>
</nav>
<?php } ?>