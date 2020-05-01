<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />

<div id='map' style='height: 350px;'></div>
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoicmFzb2FuYWFvIiwiYSI6ImNrOW83NGVoMDAxd3UzbHFwamRyMmo0NmcifQ.rFSwMw3nYtNbsTgoazBbrg';
	var map = new mapboxgl.Map({
		container: 'map',
		style: 'mapbox://styles/mapbox/streets-v11'
	});

	// Add zoom and rotation controls to the map.
	map.addControl(new mapboxgl.NavigationControl());
</script>