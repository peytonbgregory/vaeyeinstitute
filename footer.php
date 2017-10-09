<section id="prefooter-contact">
  <div class="grid-container">
    <div class="grid-x align-middle grid-padding-y text-center small-up-1 medium-up-3 large-up-6">

      <div class="cell">
        <div>Appts Richmond</div>
        <a href="tel:">(804) 287-4216</a>
      </div>

      <div class="cell">
        <div>Richmond Toll Free</div>
        <a href="tel:">(800) 348-2393</a>
      </div>

      <div class="cell">
        <div>After Hours</div>
        <a href="tel:">(804) 764-7759</a>
      </div>

      <div class="cell">
        <div>Fax Number</div>
        <a href="tel:">(804) 287-4210</a>
      </div>

      <div class="cell">
        <div>Referring Provider</div>
        <a href="tel:">(804) 287-4700</a>
      </div>

      <div class="cell">
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
<hr>
            <div class="calliout large"><img class="mdvc-logo" src="/wp-content/uploads/2017/09/mdvc-logo.png" width="160" alt="MD Value Care" />
            </div>
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
            <h4 class="widget-title">Contact Us</h4>
            <?php echo do_shortcode('[contact-form-7 id="259" title="Contact Form Complete"]'); ?>
            <?php //dynamic_sidebar('footer-fourth'); ?>
          </div>
        </div>
      </div>
      </footer>
    </div><!-- .site-wrapper -->
    <script src="<?php echo THEME_DIR; ?>/dist/js/jquery.min.js"></script>
    <script src="<?php echo THEME_DIR; ?>/dist/js/foundation.min.js"></script>
    		<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl_f3fyVkXgG2jwTRRDxsKtiL8eZ5rsp8"></script>


    <script>
// Foundation
(function(){
    $(document).foundation();







    /*
    *  new_map
    *
    *  This function will render a Google Map onto the selected jQuery element
    *
    *  @type	function
    *  @date	8/11/2013
    *  @since	4.3.0
    *
    *  @param	$el (jQuery element)
    *  @return	n/a
    */

    function new_map( $el ) {

      // var
      var $markers = $el.find('.marker');


      // vars
      var args = {
        zoom		: 16,
        center		: new google.maps.LatLng(0, 0),
        mapTypeId	: google.maps.MapTypeId.ROADMAP
      };


      // create map
      var map = new google.maps.Map( $el[0], args);


      // add a markers reference
      map.markers = [];


      // add markers
      $markers.each(function(){

          add_marker( $(this), map );

      });


      // center map
      center_map( map );


      // return
      return map;

    }

    /*
    *  add_marker
    *
    *  This function will add a marker to the selected Google Map
    *
    *  @type	function
    *  @date	8/11/2013
    *  @since	4.3.0
    *
    *  @param	$marker (jQuery element)
    *  @param	map (Google Map object)
    *  @return	n/a
    */

    function add_marker( $marker, map ) {

      // var
      var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

      // create marker
      var marker = new google.maps.Marker({
        position	: latlng,
        map			: map
      });

      // add to array
      map.markers.push( marker );

      // if marker contains HTML, add it to an infoWindow
      if( $marker.html() )
      {
        // create info window
        var infowindow = new google.maps.InfoWindow({
          content		: $marker.html()
        });

        // show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function() {

          infowindow.open( map, marker );

        });
      }

    }

    /*
    *  center_map
    *
    *  This function will center the map, showing all markers attached to this map
    *
    *  @type	function
    *  @date	8/11/2013
    *  @since	4.3.0
    *
    *  @param	map (Google Map object)
    *  @return	n/a
    */

    function center_map( map ) {

      // vars
      var bounds = new google.maps.LatLngBounds();

      // loop through all markers and create bounds
      $.each( map.markers, function( i, marker ){

        var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

        bounds.extend( latlng );

      });

      // only 1 marker?
      if( map.markers.length == 1 )
      {
        // set center of map
          map.setCenter( bounds.getCenter() );
          map.setZoom( 16 );
      }
      else
      {
        // fit to bounds
        map.fitBounds( bounds );
      }

    }

    /*
    *  document ready
    *
    *  This function will render each map when the document is ready (page has loaded)
    *
    *  @type	function
    *  @date	8/11/2013
    *  @since	5.0.0
    *
    *  @param	n/a
    *  @return	n/a
    */
    // global var
    var map = null;

    $(document).ready(function(){

      $('.acf-map').each(function(){

        // create map
        map = new_map( $(this) );

      });

    });






})(jQuery)
    </script>
<script defer>
// Parallax
$(window).scroll(function(e){
  parallax();
});

function parallax(){
  var scrolled = $(window).scrollTop();
  $('.parallax').css('background-position','center ' + -(scrolled*0.12)+'px');
}



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
