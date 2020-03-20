var map;
var geocoder;

function initMap() {
	var rouen = {latitude: 49.4404591, longitude: 1.0939658};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: rouen
    });

    var marker = new google.maps.Marker({
      position: rouen,
      map: map
    });

    var cdata = JSON.parse(document.getElementById('data').innerHTML);
    geocoder = new google.maps.Geocoder();
    codeAddress(cdata);

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllCreches(allData)
}

function showAllCreches(allData) {
	var infoWind = new google.maps.InfoWindow;
	Array.prototype.forEach.call(allData, function(data){
		var content = document.createElement('div');
		var strong = document.createElement('strong');

		strong.textContent = data.nom;
		content.appendChild(strong);

		var img = document.createElement('img');
		img.src = 'img/Leopard.jpg';
		img.style.width = '100px';
		content.appendChild(img);

		var marker = new google.maps.Marker({
	      position: new google.maps.LatLng(data.latitude, data.longitude),
	      map: map
	    });

	    marker.addListener('mouseover', function(){
	    	infoWind.setContent(content);
	    	infoWind.open(map, marker);
	    })
	})
}

function codeAddress(cdata) {
   Array.prototype.forEach.call(cdata, function(data){
    	var adresse = data.nom + ' ' + data.adresse;
	    geocoder.geocode( { 'adresse': adresse}, function(results, status) {
	      if (status == 'OK') {
	        map.setCenter(results[0].geometry.location);
	        var points = {};
	        points.id = data.id;
	        points.latitude = map.getCenter().latitude();
	        points.longitude = map.getCenter().longitude();
	        updateCrecheWithLatLng(points);
	      } else {
	        alert('Geocode was not successful for the following reason: ' + status);
	      }
	    });
	});
}

function updateCrecheWithLatLng(points) {
	$.ajax({
		url:"action.php",
		method:"post",
		data: points,
		success: function(res) {
			console.log(res);
		}
	})
}
