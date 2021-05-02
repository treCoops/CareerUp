
let map;
let markers = [];

function initMap() {
	map = new google.maps.Map(document.getElementById("gMap"), {
		zoom: 7,
		center: {
			lat: 6.9271,
			lng: 79.8612
		},
	});

	let marker = {lat: 6.9271, lng: 79.8612};
	addMarker(marker);

	map.addListener("click", (mapsMouseEvent) => {
		let latitude = mapsMouseEvent.latLng.lat();
		let longitude = mapsMouseEvent.latLng.lng();

		$('#txtLocationLatitude').val(latitude);
		$('#txtLocationLongitude').val(longitude);
		$('#txtLocationZoom').val(map.getZoom());

		deleteMarkers();

		let marker = {lat: latitude, lng: longitude};
		addMarker(marker);

	});

	map.addListener("zoom_changed", () => {
		$('#txtLocationZoom').val(map.getZoom());
	});
}

function addMarker(location) {
	let marker = new google.maps.Marker({
		position: location,
		map: map
	});
	markers.push(marker);
}

function setMapOnAll(map) {
	for (let i = 0; i < markers.length; i++) {
		markers[i].setMap(map);
	}
}

function clearMarkers() {
	setMapOnAll(null);
}

function showMarkers() {
	setMapOnAll(map);
}

function deleteMarkers() {
	clearMarkers();
	markers = [];
}
