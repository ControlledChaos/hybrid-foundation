<?php if ( has_nav_menu( 'primary' ) ) : ?>

	<!-- Off Canvas Menu -->
	<aside class="left-off-canvas-menu off-canvas-menu">

		<?php wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'depth' => 0,
				'items_wrap' => '<ul>%3$s</ul>',
				'container' => false,
			)
		);?>

	</aside>
 	<a class="exit-off-canvas"></a>

<?php endif; ?>