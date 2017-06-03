var polylineCoordinates_{!! $id !!} = [
	@foreach ($options['coordinates'] as $coordinate)
		new google.maps.LatLng({!! $coordinate['latitude'] !!}, {!! $coordinate['longitude'] !!}),
	@endforeach
];

var polyline_{!! $id !!} = new google.maps.Polyline({
	path: polylineCoordinates_{!! $id !!},
	geodesic: {!! $options['strokeColor'] ? 'true' : 'false' !!},
	strokeColor: '{!! $options['strokeColor'] !!}',
	strokeOpacity: {!! $options['strokeOpacity'] !!},
	strokeWeight: {!! $options['strokeWeight'] !!},
	editable: {!! $options['editable'] ? 'true' : 'false' !!},
	clickable: {!! $options['clickable'] ? 'true' : 'false' !!},
});

polyline_{!! $id !!}.setMap({!! $options['map'] !!});


	function insertIntoText(){
		// convert polyline to json
		// first move coordinates polyline to array
		var coordinates_poly = polyline_{!! $id !!}.getPath().getArray();
		var newCoordinates_poly = [];
		for(var i = 0; i < coordinates_poly.length; i++){
			lat_poly = coordinates_poly[i].lat();
			lng_poly = coordinates_poly[i].lng();

			latlng_poly = [lat_poly, lng_poly];
			newCoordinates_poly.push(latlng_poly);
		}
		// second convert array to json
		var str_coordinates_poly = JSON.stringify(newCoordinates_poly);
		var json_poly = "{\"coordinates\":" + str_coordinates_poly + "}";

		// insert JSON into input field

		if(!document.getElementById('json_polyline')){
			console.log('No element');
		}else{
			document.getElementById('json_polyline').value = json_poly;
		}
	}

	insertIntoText();

	// event to create polyline by click

	@if($options['addpoint'])
		google.maps.event.addListener(map_{!! $id !!}, 'click', function(event){
		var path = polyline_{!! $id !!}.getPath();
		path.push(event.latLng);
		insertIntoText();
		});
	@endif

shapes.push({
	'polyline_{!! $id !!}': polyline_{!! $id !!}
});

