<ul class="row">
	<?php if ( is_active_sidebar( 'footer-block-1' ) ) : ?>
	<li class="footer-box col-md-3 col-sm-6 col-">
		<?php dynamic_sidebar( 'footer-block-1' ); ?>
	</li>
	<?php endif; ?>
	<?php if ( is_active_sidebar( 'footer-block-2' ) ) : ?>
	<li class="footer-box col-md-3 col-sm-6 col-">
		<?php dynamic_sidebar( 'footer-block-2' ); ?>
	</li>
	<?php endif; ?>
	<?php if ( is_active_sidebar( 'footer-block-3' ) ) : ?>
	<li class="footer-box col-md-3 col-sm-6 col-">
		<?php dynamic_sidebar( 'footer-block-3' ); ?>
	</li>
	<?php endif; ?>
	<?php if ( is_active_sidebar( 'footer-block-4' ) ) : ?>
	<li class="footer-box col-md-3 col-sm-6 col-">
		<?php dynamic_sidebar( 'footer-block-4' ); ?>
	</li>
	<?php endif; ?>
</ul>
</div>