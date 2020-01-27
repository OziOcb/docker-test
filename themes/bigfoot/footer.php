<div class="clear"></div>
</div>
<section id="footer" class="container-fluid" role="contentinfo">
	<div class="footer-top container">
		<div class="row">
			<div id="footer-nav" class="col-md-6 col-sm-6 col-12">
				<?php if ( is_active_sidebar( 'footer-nav' ) ) : ?>
<<<<<<< HEAD
					<?php dynamic_sidebar( 'footer-nav' ); ?>
=======
				<?php dynamic_sidebar( 'footer-nav' ); ?>
>>>>>>> edits
				<?php endif; ?>
			</div>
			<div id="footer-cta" class="col-md-6 col-sm-6 col-12">
				<?php if ( is_active_sidebar( 'footer-top-block' ) ) : ?>

				<?php dynamic_sidebar( 'footer-top-block' ); ?>

				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="footer-area container">
		<?php include('footer-widgets.php');?>

		<div id="copyright" class="container">
			<?php

				$website_email = get_option('website_contact_email');
				$email = str_replace('@', '<i class="fa fa-at"></i>', $website_email);

			?>
			<p>
				<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blank' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Made With <i class="fa fa-heart"></i> By %1$s.', 'blank' ), '&nbsp;<a href="https://www.bigfootdigital.co.uk">Bigfoot Digital</a>' ); echo "&nbsp; | &nbsp; <i class='fa fa-phone'></i> &nbsp;". get_option('website_contact_number') . "&nbsp; | &nbsp; <i class='fa fa-envelope-o'></i> &nbsp;". $email ."";?><br>
				<?php echo get_option('footer_statement');?> | <a href="privacy">Privacy Policy</a> | <a href="terms">Terms & Conditions</a>
			</p>
		</div>
	</div>
</section>
</div>
<?php wp_footer(); ?>
</body>
</html>