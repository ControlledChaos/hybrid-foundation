<?php if ( has_nav_menu( 'primary' ) ) : // Check if there's a menu assigned to the 'primary' location. ?>

	<section class="menu-primary top-bar-section">

	<?php if ( current_theme_supports( 'popup-navigation' ) ) : ?>

		<a class="popup-navigation-close" href="#">Close</a>

	<?php endif; ?>

	<nav <?php hybrid_attr( 'menu', 'primary' ); ?>>

		<?php wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container'       => '',
				'menu_id'         => 'menu-primary-items',
				'menu_class'      => 'menu-items',
				'fallback_cb'     => '',
				'items_wrap'      => '<ul class="right sf-menu">%3$s</ul>',
				'walker' => new Foundationalize_Walker( array(
					'in_top_bar' => true,
					'item_type' => 'li',
					'has_dropdown_marker' => true
				)),
			)
		); ?>

	</nav><!-- #menu-primary -->

	</section>

<?php endif; // End check for menu. ?>