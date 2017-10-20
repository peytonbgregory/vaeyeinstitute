// JavaScript Document


// Foundation
(function(){
    $(document).foundation();
	
	})(jQuery)
(function(){
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




// Parallax
$(window).scroll(function(e){
  parallax();
});
function parallax(){
  var scrolled = $(window).scrollTop();
  $('.parallax').css('background-position','center ' + -(scrolled*0.12)+'px');
}




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