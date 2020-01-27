<section class="entry-meta">
	<span class="author vcard"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_author_posts_link(); ?></span>
	<span class="meta-sep"> &nbsp;&nbsp;&nbsp;&nbsp;</span>
	<span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<?php the_time( get_option( 'date_format' ) ); ?></span>
	<span class="meta-sep"> &nbsp;&nbsp;&nbsp;&nbsp;</span>
	<span class="meta-cat"><i class="fa fa-list-ul" aria-hidden="true"></i>&nbsp;&nbsp;<?php _e( 'Categories: ', 'sps_blank' ); ?><?php the_category( ', ' ); ?></span>
	<span class="meta-comments">
		<?php if ( comments_open() ) { 
echo '<span class="meta-sep">&nbsp;&nbsp;&nbsp;&nbsp;</span><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;&nbsp;<span class="comments-link"><a href="' . get_comments_link() . '">' . sprintf( __( 'Comments', 'sps_blank' ) ) . '</a></span>';
} ?>
	</span>
</section>