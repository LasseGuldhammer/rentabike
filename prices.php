<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prices | Rent-a-Bike</title>
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
      	<li class="active"><a href="prices.php">Prices</a></li>
      	<li><a href="maps.php">Maps</a></li>
      	<li><a href="gallery.php">Gallery</a></li>            
      	<li><a href="about.php">About</a></li>
    	</ul>
    </div>
  </div>
</nav>
<!-- Navigation End -->

<!-- Fluid Container Start -->
<div class="container-fluid">

<!-- Prices Header Image -->
<div class="row">
	<div class="col-xs-12 padding-0">
  	<img class="img-responsive full-width" src="images/slide_1.png" alt="header image" />
  	<a href="maps.php"><img class="img-responsive map" src="images/map.svg" alt="map" /></a>
    <img class="img-responsive brm-header" src="images/brm_header.svg" alt="bicycle repair man" />
    <img class="img-responsive speech_header" src="images/speech_prices.svg" alt="the more you rent, the cheaper it gets" />
  </div>
</div>

<!-- Prices Header -->
<div class="row">
	<div class="page-header text-center blue-background">
  	<img class="img-responsive arrows" src="images/arrow_down_left.svg" alt="arrow down left" />
		<h1>Prices</h1>
    <img class="img-responsive arrows" src="images/arrow_down_right.svg" alt="arrow down right" />
	</div>
</div>

<!-- Bikes Available Start -->
<div class="row extra-top-margin">
	<div class="col-sm-12 center-block">
  	<div class="inline-block reservation-bike">
    	<img class="img-responsive" src="images/city_bike.jpg" alt="City bike" />
      <p class="text-center reservation-bike-name">City Bike</p>
    </div>
    <div class="inline-block reservation-bike">
    	<img class="img-responsive" src="images/granny_bike.jpg" alt="Granny bike" />
    	<p class="text-center reservation-bike-name">Granny Bike</p>
    </div>
    <div class="inline-block reservation-bike">
    	<img class="img-responsive" src="images/tour_bike.jpg" alt="Tour bike" />
    	<p class="text-center reservation-bike-name">Tour Bike</p>
    </div>
    <div class="inline-block reservation-bike">
    	<img class="img-responsive" src="images/mountain_bike.jpg" alt="Mountain bike" />
    	<p class="text-center reservation-bike-name">Mountain Bike</p>
    </div>
    <div class="inline-block reservation-bike">
    	<img class="img-responsive" src="images/tandem.jpg" alt="Tandem" />
    	<p class="text-center reservation-bike-name">Tandem</p>
    </div>
    <div class="inline-block reservation-bike">
    	<img class="img-responsive" src="images/scooter.jpg" alt="Scooter" />
    	<p class="text-center reservation-bike-name">Scooter</p>
    </div>
    <div class="inline-block reservation-bike">
    	<img class="img-responsive" src="images/kids_bike.jpg" alt="Kids bike" />
    	<p class="text-center reservation-bike-name">Kids Bike</p>
    </div>
  </div>
</div>
<!-- Bikes Available End -->

<!-- Rental Prices Image #1 -->
<div class="row">
	<div class="col-xs-12">
  	<img class="img-responsive" src="images/prices_1.svg" alt="rental prices image" />
  </div>  
</div>

<!-- Rental Prices Image #2 -->
<div class="row extra-top-margin">
	<div class="col-md-1">
  	<img class="img-responsive center-block" src="images/cargo_bike.jpg" alt="Cargo bike" />
    <p class="text-center reservation-bike-name">Cargo Bike</p>
  </div>
	<div class="col-md-11">
  	<img class="img-responsive" src="images/prices_2.svg" alt="rental prices image" />
  </div>
</div>

<?php include 'footer.php';?>

</div>
<!-- Fluid Container End -->

</body>
</html>