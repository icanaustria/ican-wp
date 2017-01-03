<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<iframe src="//npt.icanaustria.at/pledgecounter2" frameborder="0" width="100%" height="80"></iframe>

		<?php dynamic_sidebar( 'sidebar1' ); ?>
		
	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>