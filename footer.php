<?php // START OF footer.php ?>
  <div class="sub-footer container-fluid test">
    <div class="col-lg-3 test">
      <h2>Title</h2>
      <ul>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
      </ul>
    </div>
    <div class="col-lg-3 test">
      <h2>Title</h2>
      <ul>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
      </ul>
    </div>
    <div class="col-lg-3 test">
      <h2>Title</h2>
      <ul>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
      </ul>
    </div>
    <div class="col-lg-3 test">
      <h2>Title</h2>
      <ul>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
      </ul>
    </div>
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
          'fallback_cb'     => false
        );

        wp_nav_menu( $footer_nav_atts );

      ?>
            
    </div><!-- .col-lg-8.center -->
    
	</footer>
	
<?php wp_footer(); ?>
</body>
</html><?php // END OF footer.php ?>