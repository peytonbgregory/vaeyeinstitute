<section id="prefooter-contact">
  <div class="grid-container">
    <div class="grid-x align-middle grid-padding-y text-center">

      <div class="cell auto">
        <div>Appts Richmond</div>
        <a href="tel:">(804) 287-4216</a>
      </div>

      <div class="cell auto">
        <div>Richmond Toll Free</div>
        <a href="tel:">(800) 348-2393</a>
      </div>

      <div class="cell auto">
        <div>After Hours</div>
        <a href="tel:">(804) 764-7759</a>
      </div>

      <div class="cell auto">
        <div>Fax Number</div>
        <a href="tel:">(804) 287-4210</a>
      </div>

      <div class="cell auto">
        <div>Referring Provider</div>
        <a href="tel:">(804) 287-4700</a>
      </div>

      <div class="cell auto">
        <div>  Referring Provider Fax</div>
        <a href="tel:">(804) 282-1967</a>
      </div>
    </div>
  </div>
</section>
      <footer class="site-footer bg-light-gray">
        <div class="grid-container">
        <div class="grid-x grid-margin-x grid-padding-y small-up-1 medium-up-4 large-up-4">
          <div class="cell">
            <div class="widget">
              <h4 class="widget-title">Quick Links</h4>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-first','menu_class' => 'vertical menu align-left icons icon-left' ) ); ?>
            </div>
            <?php //dynamic_sidebar('footer-first'); ?>

          </div>
          <div class="cell">
            <div class="widget">
              <h4 class="widget-title">Patient Information</h4>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-second','menu_class' => 'vertical menu align-left icons icon-left' ) ); ?>
          </div>
            <?php //dynamic_sidebar('footer-second'); ?>
          </div>
          <div class="cell">
            <div class="widget">
              <h4 class="widget-title">Our Locations</h4>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-third','menu_class' => 'vertical menu align-left icons icon-left' ) ); ?>
          </div>
            <?php  //dynamic_sidebar('footer-third'); ?>
          </div>
          <div class="cell">

            <?php dynamic_sidebar('footer-fourth'); ?>
          </div>
        </div>
      </div>
      </footer>
    </div><!-- .site-wrapper -->
    <script src="<?php echo THEME_DIR; ?>/dist/js/jquery.min.js"></script>
    <script src="<?php echo THEME_DIR; ?>/dist/js/foundation.min.js"></script>
    <script>
// Foundation
(function(){
    $(document).foundation();
})(jQuery)
    </script>
<script>
//Google Analytics
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-30074089-1', 'auto');
    ga('send', 'pageview');
// Live Chat Now, NOW!
    var lhnAccountN = "27812-1";
    var lhnButtonN = 4825;
    var lhnChatPosition = 'righttab';
    var lhnWindowN = 0;
    var lhnDepartmentN = 32410;
  </script>
  <!-- <a href="http://www.livehelpnow.net/products/live-chat-system" target="_blank" style="font-size:1em;" id="lhnHelp">VEI Live Chat</a>
  <script src="//www.livehelpnow.net/lhn/widgets/chatbutton/lhnchatbutton-current.min.js" id="lhnscript"></script> -->
  </body>
</html>
<?php wp_footer();
