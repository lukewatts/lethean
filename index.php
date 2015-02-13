<?php get_header(); ?>

	<main class="affinity4-main-content">

		<section>
			<article>
				
			</article>
		</section>

	</main><!-- .affinity4-main-content -->

	<nav id="affinity4-lateral-nav" class="affinity4-lateral-nav">
		
	<?php
		
		$lateral_nav_atts = array(
				'theme_location'  => 'lateral-nav',
				'container'       => 'ul',
				'menu_class'      => 'affinity4-navigation',
				'menu_id'         => 'affinity4-navigation'
			);

		wp_nav_menu( $lateral_nav_atts );

	?>

	<?php if ( is_active_sidebar( 'lateral-nav-sidebar' ) ) : ?>
			<?php dynamic_sidebar( 'lateral-nav-sidebar' ); ?>
	<?php endif; ?>

	</nav><!-- #affinity4-lateral-nav.affinity4-lateral-nav -->

<?php get_footer(); ?>