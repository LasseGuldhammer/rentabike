<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About | Rent-a-Bike</title>
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
      	<li><a href="maps.php">Maps</a></li>
      	<li><a href="gallery.php">Gallery</a></li>            
      	<li class="active"><a href="about.php">About</a></li>
    	</ul>
    </div>
  </div>
</nav>
<!-- Navigation End -->

<!-- Fluid Container Start -->
<div class="container-fluid">

<!-- About Header Image -->
<div class="row">
	<div class="col-xs-12 padding-0">
  	<img class="img-responsive full-width" src="images/slide_1.png" alt="header image" />
  	<a href="maps.php"><img class="img-responsive map" src="images/map.svg" alt="map" /></a>
    <img class="img-responsive brm-header" src="images/brm_header.svg" alt="bicycle repair man" />
    <img class="img-responsive speech_about" src="images/speech_about.svg" alt="the more you rent, the cheaper it gets" />
  </div>
</div>

<!-- A Brief History Of Cycling In Amsterdam -->
<div class="row">
	<div class="page-header text-center blue-background">
  	<img class="img-responsive arrows" src="images/arrow_down_left.svg" alt="arrow down left" />    
		<h1>A Brief History Of Cycling In Amsterdam</h1>
    <img class="img-responsive arrows" src="images/arrow_down_right.svg" alt="arrow down right" />
	</div>
</div>

<div class="row extra-top-margin">
	<div class="col-sm-6">
  	<img class="img-responsive center-block extra-top-margin" src="images/history_1.svg" alt="history image" />
  </div>
  <div class="col-sm-6">
  	<img class="img-responsive center-block extra-top-margin black-border" src="images/history_2.jpg" alt="history image" />
  </div>
</div>

<div class="row">
	<div class="col-sm-6">
  	<img class="img-responsive center-block extra-top-margin black-border" src="images/history_4.jpg" alt="history image" />
  </div>
  <div class="col-sm-6">
  	<img class="img-responsive center-block extra-top-margin" src="images/history_3.svg" alt="history image" />
  </div>
</div>

<!-- Tours -->
<div class="row extra-top-margin">
	<div class="page-header text-center blue-background">
  	<img class="img-responsive arrows" src="images/arrow_down_left.svg" alt="arrow down left" />    
		<h1>Tours</h1>
    <img class="img-responsive arrows" src="images/arrow_down_right.svg" alt="arrow down right" />
	</div>
</div>

<div class="row extra-top-margin">
	<div class="col-sm-6">
  	<img class="img-responsive center-block extra-top-margin" src="images/tours_1.svg" alt="tours image" />
  </div>
  <div class="col-sm-6">
  	<img class="img-responsive center-block extra-top-margin black-border" src="images/tours_2.jpg" alt="tours image" />
  </div>
</div>

<div class="row">
	<div class="col-sm-6 orange-background black-border text-center white-font extra-top-margin">
  	<h2 class="bangers">Popular Cycling Areas And<br /> Destinations Close To Amsterdam</h2>
    <ul class="white-font extra-top-margin">
    	<li>Zaanse Schans</li>
      <li>Ilperveld and Twiske</li>
      <li>Volendam and Marken</li>
      <li>Broek in Waterland</li>
      <li>Muiden</li>
      <li>Weesp</li>
      <li>De Ronde Venen</li>
      <li>Ouderkerk aan de Amstel</li>
      <li>Haarlemmermeer (Badhoevedorp)</li>
      <li>Spaarnwoude (Halfweg)</li>
    </ul>
    <div class="center-block white-background black-border extra-top-margin about-div">
    	<p class="black-font">There are cycling routes throughout the Netherlands. There is also plenty of choice nearby Amsterdam. The cycling routes are set out through various organizations like the National Tourist Information board (VVV) and the Dutch Cyclists Union (de Fietsersbond). You can download various routes.</p>
    </div>
  </div>
  <div class="col-sm-6">
  	<h1 class="bangers text-center extra-top-margin map-header">Check Out Our <br />Interactive Map</h1>
    <a href="maps.php"><img class="img-responsive center-block black-border map-image" src="images/map_image.svg" alt="map image" /></a>
  </div>
</div>

<?php include 'footer.php';?>

</div>
<!-- Fluid Container End -->

</body>
</html>