function drawingOnCompleteCirlce(event) {
  	var radius = event.overlay.getRadius();
  	var center = event.overlay.getCenter();
  	console.log("Center: " + center + " - Radius: " + radius );
  	
}

function drawingOnCompletePolygon(event) {
	var coordinates = [];
	var vertices = event.overlay.getPath();
	

	// Iterate over the vertices.
 	for (var i =0; i < vertices.getLength(); i++) {
 		var xy = vertices.getAt(i);
 		coord = {lat:xy.lat(), long:xy.lng()};
 		coordinates.push(coord);
	}

	// make the first coordinate the last coordinate to complete shape path
	var xy = vertices.getAt(0);
	coordinates.push({lat:xy.lat(), long:xy.lng()});
	
	// save to form
	$('#geodata').val(JSON.stringify(coordinates));
  
}

function drawingOnEdit() {
   alert("Edit");
}


function placesAutocompleteOnChange(event) {
  var place = placesAutocomplete.getPlace();
   if (place.geometry.viewport) {
       map.fitBounds(place.geometry.viewport);
   } else {
       map.setCenter(place.geometry.location);
       map.setZoom(17);
   }
}