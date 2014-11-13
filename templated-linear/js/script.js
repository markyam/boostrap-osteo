$(document).ready(function() {
    $( "#map_canvas_circle" ).hide();
    initialize_marker();
    $( "#circle" ).click(function() {
        $( "#map_canvas_marker" ).hide();
        $( "#map_canvas_circle" ).fadeIn("slow");
        initialize_circles();
    });
});

function initialize_marker() {
    var myLatlng = new google.maps.LatLng(48.5976105,2.4929845);
    var mapOptions = {
        zoom: 9,
        center: myLatlng
    }
    var map = new google.maps.Map(document.getElementById('map_canvas_marker'), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
    });

    google.maps.event.addDomListener(window, 'load', initialize_marker);
}

function initialize_circles() {
    var kmRadius = 25;
    var position = new google.maps.LatLng(48.5976105,2.4929845);
    var mapOptions = {
        zoom: 9,
        center: position
    }
    var map = new google.maps.Map(document.getElementById('map_canvas_circle'), mapOptions);

    var marker = new google.maps.Circle({
        center: position,
        map: map,
        strokeColor: '#000',
        strokeWeight: 2,
        strokeOpacity: 0.5,
        fillColor: '#f0f0f0',
        fillOpacity: 0.5,
        radius: kmRadius * 1000
    });

    google.maps.event.addDomListener(window, 'load', initialize_circles);
}