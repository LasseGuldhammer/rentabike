<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bikes | Rent-a-Bike</title>
  <link href="css/reset.css" rel="stylesheet">
  <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  <link href="css/stylesheet.css" rel="stylesheet">
</head>

<body>
  
<!-- Navigation Start -->
<nav class="navbar navbar-default blue-background">
  <div class="container-fluid">
    <div class="navbar-header">
    	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    	<a class="navbar-brand" href="index.php"><img class="img-responsive navbar-logo" src="images/logo.svg" alt="logo" /></a>
   	</div>
    <div class="collapse navbar-collapse" id="myNavbar">
    	<ul class="nav navbar-nav">
    		<li><a href="reservation.php">Reservation</a></li>
      	<li><a href="prices.php">Prices</a></li>
      	<li class="active"><a href="maps.php">Maps</a></li>
      	<li><a href="gallery.php">Gallery</a></li>            
      	<li><a href="about.php">About</a></li>
    	</ul>
    </div>
  </div>
</nav>
<!-- Navigation End -->

<!-- Fluid Container Start -->
<div class="container-fluid">

<div class="row">
	<div class="col-xs-12">

<!-- Google Maps -->
    <div class="center-block" id="map"></div>
    <script>
      function initMap() {
		
		// Coordinates
		var myLatLng = {lat: 52.370, lng: 4.90};
		var positionCoffee = {lat: 52.345, lng: 4.95};
		var positionBrewery = {lat: 52.220, lng: 4.5534};
		var positionSarphartipark = {lat: 52.210, lng: 4.5346}
		var positionCircle = {lat: 52.365, lng: 4.90};
  
		// Google Maps configuration
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: myLatLng,
          zoom: 12,
		  mapTypeId: google.maps.MapTypeId.ROADMAP
        });
		
		// Bicycling layer
		// var bikeLayer = new google.maps.BicyclingLayer();
  	//	bikeLayer.setMap(map);
		
		// Custom icons
		var iconCoffee = 'images/icons/coffee.png';
		var iconBrewery = 'images/icons/beergarden.png';
		var iconSarphartipark = 'images/icons/terrace.png';
		
		// Markers
		var markerCoffee = new google.maps.Marker({
    		position: positionCoffee,
    		map: map,
				icon: iconCoffee,
				draggable: false,
   	 		title: 'Coffee here'
	    });
			
		var markerBrewery = new google.maps.Marker({
    		position: positionBrewery,
    		map: map,
				icon: iconBrewery,
				draggable: false,
   	 		title: 'Brewery t IJ'
	    });
			
		var markerSarphartipark = new google.maps.Marker({
    		position: positionSarphartipark,
    		map: map,
				icon: iconSarphartipark,
				draggable: false,
   	 		title: 'Sarphartipark'
	    });
		
		// Coffee Info Window
		var stringCoffee = 
		'<div id="content">'+
      	'<div id="siteNotice">'+
      	'</div>'+
     	'<h1 id="firstHeading" class="firstHeading">Coffee Shop</h1>'+
     	'<div id="bodyContent">'+
     	'<p>Drink coffee here!</p>'+
      	'</div>'+
      	'</div>';
	  
	  	var infowindowCoffee = new google.maps.InfoWindow({
    	content: stringCoffee
 		});
		
		markerCoffee.addListener('click', function() {
    	infowindowCoffee.open(map, markerCoffee);
 		});
		
		// Brewery Info Window
		var stringBrewery = 
		'<div id="content">'+
      	'<div id="siteNotice">'+
      	'</div>'+
     	'<h1 id="firstHeading" class="firstHeading">Brewery t IJ</h1>'+
     	'<div id="bodyContent">'+
     	'<p>Brouwerij ‘t IJ</p>'+
      	'</div>'+
      	'</div>';
	  
	  	var infowindowBrewery = new google.maps.InfoWindow({
    	content: stringBrewery
 		});
		
		markerBrewery.addListener('click', function() {
    	infowindowBrewery.open(map, markerBrewery);
 		});
		
		// Circle
		var Circle = new google.maps.Circle({
      	strokeColor: '#FF0000',
      	strokeOpacity: 0.8,
      	strokeWeight: 2,
      	fillColor: '#FF0000',
      	fillOpacity: 0.35,
      	map: map,
      	center: positionCircle,
      	radius: 1000,
		editable: true
    	});
		
		
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
        
	</div>
</div>

<?php include 'footer.php';?>

</div>

</body>
</html>
