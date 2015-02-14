<?php // START OF footer.php ?>
  <div class="sub-footer container-fluid test">
    
    <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
			<?php dynamic_sidebar( 'footer-area-1' ); ?>
	<?php endif; ?>
    
    <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
			<?php dynamic_sidebar( 'footer-area-2' ); ?>
	<?php endif; ?>
    
    <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
			<?php dynamic_sidebar( 'footer-area-3' ); ?>
	<?php endif; ?>
    
    <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
			<?php dynamic_sidebar( 'footer-area-4' ); ?>
	<?php endif; ?>
    
  </div>

	<footer class="container-fluid">
    
    <div class="col-lg-12">
        
      <div class="copyright-info">&copy; 2015 - Lethean Theme by <a href="http://affinity4.ie" title="Affinity4" target="_blank">Affinity4</a></div>

      <div class="socials list-unstyled list-inline">
        <a class="affinity4-img-replace affinity4-facebook" href="https://facebook.com" title="Facebook" target="_blank">Facebook</a>
        <a class="affinity4-img-replace affinity4-twitter" href="https://twitter.com" title="Twitter" target="_blank">Twitter</a>
        <a class="affinity4-img-replace affinity4-github" href="https://plus.google.com" title="Google+" target="_blank">Github</a>
      </div>
      
      <?php
		
        $footer_nav_atts = array(
          'theme_location'  => 'footer-nav',
          'container'       => false,
          'menu_class'      => 'footer-nav',
          'menu_id'         => 'footer-nav',
          'fallback_cb'     => false,
          'depth'           => -1
        );

        wp_nav_menu( $footer_nav_atts );

      ?>
            
    </div><!-- .col-lg-8.center -->
    
	</footer>
	
<?php wp_footer(); ?>
</body>
</html><?php // END OF footer.php ?>