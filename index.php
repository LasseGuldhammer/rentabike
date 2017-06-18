<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | Rent-a-Bike</title>
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
      	<li><a href="about.php">About</a></li>
    	</ul>
    </div>
  </div>
</nav>
<!-- Navigation End -->
  
<!-- Carousel Start-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">	
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  	<img class="img-responsive kaphow" src="images/kaphow.svg" alt="kaphow" />
    <img class="img-responsive brm-header" src="images/brm_header.svg" alt="bicycle repair man" />
    <img class="img-responsive speech_header" src="images/speech_carousel.svg" alt="welcome to rent-a-bike, we are the oldest rental in Amsterdam" />
    <div class="item active">
      <img class="full-width" src="images/slide_1.png" alt="slide 1">
    </div>

    <div class="item">
      <img class="full-width" src="images/slide_2.png" alt="slide 2">
    </div>

    <div class="item">
      <img class="full-width" src="images/slide_3.png" alt="slide 3">
    </div>

    <div class="item">
      <img class="full-width" src="images/slide_4.png" alt="slide 4">
    </div>
  </div>  

  	<!-- Left and right controls -->
 	 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  	</a>
 	 <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  	</a>
	</div>
<!-- Carousel End -->

<!-- Fluid Container Start -->
<div class="container-fluid">

<!-- Check Out Our Bikes! -->
<div class="row">	
    <div class="page-header text-center blue-background">
    	<img class="img-responsive arrows" src="images/arrow_down_left.svg" alt="arrow down left" />
		<h1>Check Out Our Bikes!</h1>
        <img class="img-responsive arrows" src="images/arrow_down_right.svg" alt="arrow down right" />
	</div>
    
</div>

<!-- Our Bikes Start -->
<div class="row">
	<div class="col-xs-6 col-sm-3">
    	<img class="img-responsive center-block" src="images/city_bike.jpg" alt="City bike" />
    	<p class="text-center bike-name">City Bike</p>
      <p class="text-center bike-name"><a href="#CityBikeModal" class="btn bike-btn blue-background" data-toggle="modal" role="button">See More</a></p>
    </div>
    <div class="col-xs-6 col-sm-3">
    	<img class="img-responsive center-block" src="images/granny_bike.jpg" alt="Granny bike" />
    	<p class="text-center bike-name">Granny Bike</p>
      <p class="text-center bike-name"><a href="#GrannyBikeModal" class="btn bike-btn blue-background" data-toggle="modal" role="button">See More</a></p>
    </div>
    <div class="col-xs-6 col-sm-3">
    	<img class="img-responsive center-block" src="images/tour_bike.jpg" alt="Tour bike" />
    	<p class="text-center bike-name">Tour Bike</p>
      <p class="text-center bike-name"><a href="#TourBikeModal" class="btn bike-btn blue-background" data-toggle="modal" role="button">See More</a></p>
    </div>
    <div class="col-xs-6 col-sm-3">
    	<img class="img-responsive center-block" src="images/mountain_bike.jpg" alt="Mountain bike" />
    	<p class="text-center bike-name">Mountain Bike</p>
      <p class="text-center bike-name"><a href="#MountainBikeModal" class="btn bike-btn blue-background" data-toggle="modal" role="button">See More</a></p>
    </div>
</div>
<div class="row">
	<div class="col-xs-6 col-sm-3">
    	<img class="img-responsive center-block" src="images/cargo_bike.jpg" alt="Cargo bike" />
    	<p class="text-center bike-name">Cargo Bike</p>
      <p class="text-center bike-name"><a href="#CargoBikeModal" class="btn bike-btn blue-background" data-toggle="modal" role="button">See More</a></p>
    </div>
    <div class="col-xs-6 col-sm-3">
    	<img class="img-responsive center-block" src="images/tandem.jpg" alt="Tandem" />
    	<p class="text-center bike-name">Tandem</p>
      <p class="text-center bike-name"><a href="#TandemModal" class="btn bike-btn blue-background" data-toggle="modal" role="button">See More</a></p>
    </div>
    <div class="col-xs-6 col-sm-3">
    	<img class="img-responsive center-block" src="images/scooter.jpg" alt="Scooter" />
    	<p class="text-center bike-name">Scooter</p>
      <p class="text-center bike-name"><a href="#ScooterModal" class="btn bike-btn blue-background" data-toggle="modal" role="button">See More</a></p>
    </div>
    <div class="col-xs-6 col-sm-3">
    	<img class="img-responsive center-block" src="images/kids_bike.jpg" alt="Kids bike" />
    	<p class="text-center bike-name">Kids Bike</p>
      <p class="text-center bike-name"><a href="#KidsBikeModal" class="btn bike-btn blue-background" data-toggle="modal" role="button">See More</a></p>
    </div>
</div>
<!-- Our Bikes End -->

<!-- Bike Modals Start -->

<!-- City Bike Modal -->
<div id="CityBikeModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close bangers" data-dismiss="modal">X</button>
        <h1 class="modal-title bangers">City Bike</h1>
      </div>
      <div class="modal-body">
        <img class="img-responsive center-block black-border" src="images/city_bike.jpg" alt="city bike" />
        <p class="text-center">A comfortable city bike with backpedal brake (no gears)<br />        
        	 Theft insurance (optional)<br />
					 24 hours: 3,00&euro;<br />
					 12 hours: 1,50&euro;</p>
        <h3 class="bangers">Accessories</h3>
        <div class="row">
        	<div class="col-xs-3">   
          	<img class="img-responsive center-block accessories" src="images/bike_chain.jpg" alt="bike chain" />       	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/bike_bag.jpg" alt="bike bag" />          	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/helmet.jpg" alt="helmet" />
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/child_seat.jpg" alt="child seat" />
          </div>
        </div>
        <div class="row extra-top-margin">
        	<div class="col-xs-6">
          	<a href="prices.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Prices</a>
          </div>
          <div class="col-xs-6">
          	<a href="reservation.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Reservation</a>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>

<!-- Granny Bike Modal -->
<div id="GrannyBikeModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close bangers" data-dismiss="modal">X</button>
        <h1 class="modal-title bangers">Granny Bike</h1>
      </div>
      <div class="modal-body">
        <img class="img-responsive center-block black-border" src="images/granny_bike.jpg" alt="granny bike" />
        <p class="text-center">Old school, and amongst locals, very popular backpedal brake bike (no gears). The Dutch call it 'Omafiets' - this means granny bike.<br />        
        	 Theft insurance (optional)<br />
					 24 hours: 3,00&euro;<br />
					 12 hours: 1,50&euro;</p>
        <h3 class="bangers">Accessories</h3>
        <div class="row">
        	<div class="col-xs-3">   
          	<img class="img-responsive center-block accessories" src="images/bike_chain.jpg" alt="bike chain" />       	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/bike_bag.jpg" alt="bike bag" />          	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/helmet.jpg" alt="helmet" />
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/child_seat.jpg" alt="child seat" />
          </div>
        </div>
        <div class="row extra-top-margin">
        	<div class="col-xs-6">
          	<a href="prices.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Prices</a>
          </div>
          <div class="col-xs-6">
          	<a href="reservation.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Reservation</a>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>

<!-- Tour Bike Modal -->
<div id="TourBikeModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close bangers" data-dismiss="modal">X</button>
        <h1 class="modal-title bangers">Tour Bike</h1>
      </div>
      <div class="modal-body">
        <img class="img-responsive center-block black-border" src="images/tour_bike.jpg" alt="tour bike" />
        <p class="text-center">Comfortable touring bike “7-speed” for a city tour or an extended tour in the surroundings of Amsterdam<br />        
        	 Theft insurance (optional)<br />
					 24 hours: 3,00&euro;<br />
					 12 hours: 1,50&euro;</p>
        <h3 class="bangers">Accessories</h3>
        <div class="row">
        	<div class="col-xs-3">   
          	<img class="img-responsive center-block accessories" src="images/bike_chain.jpg" alt="bike chain" />       	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/bike_bag.jpg" alt="bike bag" />          	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/helmet.jpg" alt="helmet" />
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/child_seat.jpg" alt="child seat" />
          </div>
        </div>
        <div class="row extra-top-margin">
        	<div class="col-xs-6">
          	<a href="prices.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Prices</a>
          </div>
          <div class="col-xs-6">
          	<a href="reservation.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Reservation</a>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>

<!-- Mountain Bike Modal -->
<div id="MountainBikeModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close bangers" data-dismiss="modal">X</button>
        <h1 class="modal-title bangers">Mountain Bike</h1>
      </div>
      <div class="modal-body">
        <img class="img-responsive center-block black-border" src="images/mountain_bike.jpg" alt="mountain bike" />
        <p class="text-center">Our mountain bikes are equipped with handbrakes and 21 gears<br />        
        	 Theft insurance (optional)<br />
					 24 hours: 3,00&euro;<br />
					 12 hours: 1,50&euro;</p>
        <h3 class="bangers">Accessories</h3>
        <div class="row">
        	<div class="col-xs-3">   
          	<img class="img-responsive center-block accessories" src="images/bike_chain.jpg" alt="bike chain" />       	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/bike_bag.jpg" alt="bike bag" />          	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/helmet.jpg" alt="helmet" />
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/child_seat.jpg" alt="child seat" />
          </div>
        </div>
        <div class="row extra-top-margin">
        	<div class="col-xs-6">
          	<a href="prices.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Prices</a>
          </div>
          <div class="col-xs-6">
          	<a href="reservation.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Reservation</a>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>

<!-- Cargo Bike Modal -->
<div id="CargoBikeModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close bangers" data-dismiss="modal">X</button>
        <h1 class="modal-title bangers">Cargo Bike</h1>
      </div>
      <div class="modal-body">
        <img class="img-responsive center-block black-border" src="images/cargo_bike.jpg" alt="cargo bike" />
        <p class="text-center">This cargo bike is ideal to get around Amsterdam with two kids, and if you like to move objects rather than kids, we also have the classic cargo bike<br />        
        	 Theft insurance is not possible on the cargo bike, <br />
however we do provide you with two good locks</p>
        <h3 class="bangers">Accessories</h3>
        <div class="row">
        	<div class="col-xs-3">   
          	<img class="img-responsive center-block accessories" src="images/bike_chain.jpg" alt="bike chain" />       	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/bike_bag.jpg" alt="bike bag" />          	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/helmet.jpg" alt="helmet" />
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/child_seat.jpg" alt="child seat" />
          </div>
        </div>
        <div class="row extra-top-margin">
        	<div class="col-xs-6">
          	<a href="prices.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Prices</a>
          </div>
          <div class="col-xs-6">
          	<a href="reservation.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Reservation</a>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>

<!-- Tandem Modal -->
<div id="TandemModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close bangers" data-dismiss="modal">X</button>
        <h1 class="modal-title bangers">Tandem</h1>
      </div>
      <div class="modal-body">
        <img class="img-responsive center-block black-border" src="images/tandem.jpg" alt="tandem" />
        <p class="text-center">Explore Amsterdam with the two of you on one bike.<br />        
        	 Theft insurance (optional)<br />
					 24 hours: 3,00&euro;<br />
					 12 hours: 1,50&euro;</p>
        <h3 class="bangers">Accessories</h3>
        <div class="row">
        	<div class="col-xs-3">   
          	<img class="img-responsive center-block accessories" src="images/bike_chain.jpg" alt="bike chain" />       	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/bike_bag.jpg" alt="bike bag" />          	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/helmet.jpg" alt="helmet" />
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/child_seat.jpg" alt="child seat" />
          </div>
        </div>
        <div class="row extra-top-margin">
        	<div class="col-xs-6">
          	<a href="prices.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Prices</a>
          </div>
          <div class="col-xs-6">
          	<a href="reservation.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Reservation</a>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>

<!-- Scooter Modal -->
<div id="ScooterModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close bangers" data-dismiss="modal">X</button>
        <h1 class="modal-title bangers">Scooter</h1>
      </div>
      <div class="modal-body">
        <img class="img-responsive center-block black-border" src="images/scooter.jpg" alt="scooter" />
        <p class="text-center">Many locals use a scooter to get from A to B in the centre of Amsterdam, and they are especially popular with students and young people <br />        
        	 Theft insurance (optional)<br />
					 24 hours: 3,00&euro;<br />
					 12 hours: 1,50&euro;</p>
        <h3 class="bangers">Accessories</h3>
        <div class="row">
        	<div class="col-xs-3">   
          	<img class="img-responsive center-block accessories" src="images/bike_chain.jpg" alt="bike chain" />       	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/bike_bag.jpg" alt="bike bag" />          	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/helmet.jpg" alt="helmet" />
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/child_seat.jpg" alt="child seat" />
          </div>
        </div>
        <div class="row extra-top-margin">
        	<div class="col-xs-6">
          	<a href="prices.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Prices</a>
          </div>
          <div class="col-xs-6">
          	<a href="reservation.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Reservation</a>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>

<!-- Kids Bike Modal -->
<div id="KidsBikeModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close bangers" data-dismiss="modal">X</button>
        <h1 class="modal-title bangers">Kids Bike</h1>
      </div>
      <div class="modal-body">
        <img class="img-responsive center-block black-border" src="images/kids_bike.jpg" alt="kids bike" />
        <p class="text-center">We rent out kids bikes in all sizes, as well as child seats and helmets<br />        
        	 Theft insurance (optional)<br />
					 24 hours: 3,00&euro;<br />
					 12 hours: 1,50&euro;</p>
        <h3 class="bangers">Accessories</h3>
        <div class="row">
        	<div class="col-xs-3">   
          	<img class="img-responsive center-block accessories" src="images/bike_chain.jpg" alt="bike chain" />       	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/bike_bag.jpg" alt="bike bag" />          	
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/helmet.jpg" alt="helmet" />
          </div>
          <div class="col-xs-3">
          	<img class="img-responsive center-block accessories" src="images/child_seat.jpg" alt="child seat" />
          </div>
        </div>
        <div class="row extra-top-margin">
        	<div class="col-xs-6">
          	<a href="prices.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Prices</a>
          </div>
          <div class="col-xs-6">
          	<a href="reservation.php" class="btn btn-lg center-block accessories-buttons blue-background" role="button">Reservation</a>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>

<!-- Bike Modals End -->

<!-- How To Bike In Amsterdam -->
<div class="row">
	<div class="page-header text-center blue-background">
  	<img class="img-responsive arrows" src="images/arrow_down_left.svg" alt="arrow down left" />    
		<h1>How To Bike In Amsterdam</h1>
    <img class="img-responsive arrows" src="images/arrow_down_right.svg" alt="arrow down right" />
	</div>
</div>

<!-- How To Bike In Amsterdam Image -->
<div class="row">
	<div class="col-xs-12 padding-0">
  	<img class="img-responsive" src="images/how_to_bike_in_amsterdam.svg" alt="how to bike in amsterdam image" />
  </div>
</div>

<!-- Bike Safely -->
<div class="row">
	<div class="page-header text-center blue-background">
  	<img class="img-responsive arrows" src="images/arrow_down_left.svg" alt="arrow down left" />    
		<h1>Bike Safely</h1>
    <img class="img-responsive arrows" src="images/arrow_down_right.svg" alt="arrow down right" />
	</div>
</div>

<!-- Bike Safely Image -->
<div class="row">
	<div class="col-xs-12 padding-0">
  	<img class="img-responsive" src="images/bike_safely.svg" alt="bike safely image" />
  </div>
</div>


<?php include 'footer.php';?>

</div>
<!-- Fluid Container End -->

</body>
</html>