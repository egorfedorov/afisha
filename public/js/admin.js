var lat;
var lng;
var zoom;
var map;
var my_marker;
var geocoder;

// ------------------------------------------------------------------------

// Init map
function mapInit() {
	if (GBrowserIsCompatible()) {
		// Get lat and lng
        if ($('#lat').val() != '') lat = parseFloat($('#lat').val()); 
        if ($('#lng').val() != '') lng = parseFloat($('#lng').val());
        if ($('#zom').val() != '') zoom = parseFloat($('#zoom').val());
        
        // Createmap
        map = new GMap2(document.getElementById('map'));        
        geocoder = new GClientGeocoder();      	
        
        // get array of map types 
        var mapTypes = map.getMapTypes();
          
      	// Map position and zoom
      	map.setCenter(new GLatLng(lat, lng), zoom);                                           
        
        // Set UI elements
        map.setUIToDefault();
      
      	// Set my marker
      	setMyMarker();                                
    }
}

// ------------------------------------------------------------------------

// Create draggable marker with user coordinates (country)
function setMyMarker() {            
	my_marker = new GMarker(new GLatLng(lat, lng), {draggable: true});        
  
    $('#lat').val(lat);                   
    $('#lng').val(lng);
    $('#zoom').val(zoom);
    
    GEvent.addListener(my_marker, 'dragend', function(){
		var point = my_marker.getPoint();
		map.panTo(point);
        $('#lat').val(point.lat());                   
        $('#lng').val(point.lng());
        $('#zoom').val(map.getZoom());
    });            

    map.addOverlay(my_marker);
}

// ------------------------------------------------------------------------

function set_location(city_id) {						
	lat = cities[city_id].lat;
	lng = cities[city_id].lng;
	zoom = cities[city_id].zoom;	
	$('#lat').val(lat);                   
    $('#lng').val(lng);
    $('#zoom').val(zoom);
    map.setCenter(new GLatLng(lat, lng), parseInt(zoom));
    my_marker.setLatLng(new GLatLng(lat, lng));
}

// ------------------------------------------------------------------------

// Geo location
function geo_search() {
  var address = $("#geopos").attr('value');
    geocoder.getLatLng(
      address,
      function(point) {	  
        if (point) {   
          $('#lat').val(point.lat());                   
          $('#lng').val(point.lng());
          $('#zoom').val(16);
          map.setZoom(16);
          map.panTo(point);
          my_marker.setLatLng(point);                                        
        }
      }
    );
}

// ------------------------------------------------------------------------

// Event listeners
$(document).ready(function() {    
	
	// Check/Uncheck weight table element
	$('#weight_table input').click(function() {
		// Request markers
		$.ajax({		
		type: "POST",
		url: "mattress/checkbox",
		data: "id="+$(this).val()+"&status="+$(this).attr('checked'),		
		success: function(){}
		});
	});
    
    $('#geo_search').click(function() {
        geo_search();
    });
	    
});

// ------------------------------------------------------------------------