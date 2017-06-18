<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reservation | Rent-a-Bike</title>
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
    		<li class="active"><a href="reservation.php">Reservation</a></li>
      	<li><a href="prices.php">Prices</a></li>
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

<!-- Reservation Header Image -->
<div class="row">
	<div class="col-xs-12 padding-0">
  	<img class="img-responsive full-width item" src="images/slide_1.png" alt="header image" />
  	<a href="maps.php"><img class="img-responsive map" src="images/map.svg" alt="map" /></a>
    <img class="img-responsive brm-header" src="images/brm_header.svg" alt="bicycle repair man" />
    <img class="img-responsive speech_header" src="images/speech_reservation.svg" alt="reserve you bike, and we will have it ready when you arrive" />    
  </div>
</div>

<!-- Reservation Header -->
<div class="row">
	<div class="page-header text-center blue-background">
  	<img class="img-responsive arrows" src="images/arrow_down_left.svg" alt="arrow down left" />
		<h1>Reservation</h1>
    <img class="img-responsive arrows" src="images/arrow_down_right.svg" alt="arrow down right" />
	</div>
</div>

<!-- Bikes Available Start -->
<div class="row extra-top-margin">
	<div class="col-sm-6">
  	<div class="col-xs-3">
    	<img class="img-responsive center-block" src="images/city_bike.jpg" alt="City bike" />
      <p class="text-center reservation-bike-name">City Bike</p>
    </div>
    <div class="col-xs-3">
    	<img class="img-responsive center-block" src="images/granny_bike.jpg" alt="Granny bike" />
    	<p class="text-center reservation-bike-name">Granny Bike</p>
    </div>
    <div class="col-xs-3">
    	<img class="img-responsive center-block" src="images/tour_bike.jpg" alt="Tour bike" />
    	<p class="text-center reservation-bike-name">Tour Bike</p>
    </div>
    <div class="col-xs-3">
    	<img class="img-responsive center-block" src="images/mountain_bike.jpg" alt="Mountain bike" />
    	<p class="text-center reservation-bike-name">Mountain Bike</p>
    </div>
  </div>
  <div class="col-sm-6">
  	<div class="col-xs-3">
    	<img class="img-responsive center-block" src="images/cargo_bike.jpg" alt="Cargo bike" />
    	<p class="text-center reservation-bike-name">Cargo Bike</p>
    </div>
    <div class="col-xs-3">
    	<img class="img-responsive center-block" src="images/tandem.jpg" alt="Tandem" />
    	<p class="text-center reservation-bike-name">Tandem</p>
    </div>
    <div class="col-xs-3">
    	<img class="img-responsive center-block" src="images/scooter.jpg" alt="Scooter" />
    	<p class="text-center reservation-bike-name">Scooter</p>
    </div>
    <div class="col-xs-3">
    	<img class="img-responsive center-block" src="images/kids_bike.jpg" alt="Kids bike" />
    	<p class="text-center reservation-bike-name">Kids Bike</p>
    </div>
  </div>
</div>
<!-- Bikes Available End -->

<!-- Reservation Start -->

<!-- Form Start -->
<form class="form-horizontal" role="form">
	<!-- Outer Div #1 2/3 Start -->
  <div class="row">
  <div class="col-sm-8">
		<fieldset>
    	<legend class="col-sm-offset-1 col-sm-11 bangers">Our Bikes</legend>
    	<!-- Our Bikes Div #1 Start -->
    	<div class="col-sm-6">
				<div class="form-group">    	
    			<label class="control-label col-sm-7 col-md-8">City Bike:</label>
    				<div class="col-sm-5 col-md-4">
    					<input type="number" class="form-control" placeholder="Amount">
    				</div>        	
  				</div>
    		<div class="form-group">    	
    			<label class="control-label col-sm-7 col-md-8">Granny Bike:</label>
    				<div class="col-sm-5 col-md-4">
    					<input type="number" class="form-control" placeholder="Amount">
    				</div>        	
  				</div>
    		<div class="form-group">    	
    			<label class="control-label col-sm-7 col-md-8">Tour Bike:</label>
    				<div class="col-sm-5 col-md-4">
    					<input type="number" class="form-control" placeholder="Amount">
    				</div>        	
  				</div>
    		<div class="form-group">    	
    			<label class="control-label col-sm-7 col-md-8">Mountain Bike:</label>
    				<div class="col-sm-5 col-md-4">
    					<input type="number" class="form-control" placeholder="Amount">
    				</div>        	
  				</div>    
    		</div>
    	<!-- Our Bikes Div #1 End -->
    	<!-- Our Bikes Div #2 Start -->
    	<div class="col-sm-6">
    		<div class="form-group">    	
    			<label class="control-label col-sm-7 col-md-8">Cargo Bike:</label>
    				<div class="col-sm-5 col-md-4">
    					<input type="number" class="form-control" placeholder="Amount">
    				</div>        	
  				</div>
    		<div class="form-group">    	
    			<label class="control-label col-sm-7 col-md-8">Tandem:</label>
    				<div class="col-sm-5 col-md-4">
    					<input type="number" class="form-control" placeholder="Amount">
    				</div>        	
  				</div>
    		<div class="form-group">    	
    			<label class="control-label col-sm-7 col-md-8">Scooter:</label>
    				<div class="col-sm-5 col-md-4">
    					<input type="number" class="form-control" placeholder="Amount">
    				</div>        	
  				</div>
    		<div class="form-group">    	
    			<label class="control-label col-sm-7 col-md-8">Kids Bike:</label>
    				<div class="col-sm-5 col-md-4">
    					<input type="number" class="form-control" placeholder="Amount">
    				</div>        	
  				</div>
    		</div>    
    	<!-- Our Bikes Div #2 End -->
  	</fieldset>
  </div>
  <!-- Outer Div #1 2/3 End -->
  <!-- Outer Div #2 1/3 Start -->
  <div class="col-sm-4 accessories-margin">
  	<fieldset>
    	<legend class="col-sm-offset-1 col-sm-11 bangers">Accessories</legend>
    	<!-- Accessories Div Start -->
    	<div class="col-sm-12">
				<div class="form-group">    	
    			<label class="control-label col-sm-7 col-md-8">Bike Chain:</label>
    				<div class="col-sm-5 col-md-4">
    					<input type="number" class="form-control" placeholder="Amount">
    				</div>        	
  				</div>
    		<div class="form-group">    	
    			<label class="control-label col-sm-7 col-md-8">Bike Bag:</label>
    				<div class="col-sm-5 col-md-4">
    					<input type="number" class="form-control" placeholder="Amount">
    				</div>        	
  				</div>
    		<div class="form-group">    	
    			<label class="control-label col-sm-7 col-md-8">Helmet:</label>
    				<div class="col-sm-5 col-md-4">
    					<input type="number" class="form-control" placeholder="Amount">
    				</div>        	
  				</div>
    		<div class="form-group">    	
    			<label class="control-label col-sm-7 col-md-8">Child Seat:</label>
    				<div class="col-sm-5 col-md-4">
    					<input type="number" class="form-control" placeholder="Amount">
    				</div>        	
  				</div>
    		</div>
    	</fieldset>
    </div>
    <!-- Accessories Div End -->
  <!-- Outer Div #2 1/3 End -->
  </div>
  <div class="row">
  	<!-- Contact Information Div Start -->
  	<div class="col-xs-12">
  	<fieldset>
  		<legend class="col-sm-offset-1 col-sm-11 bangers">Contact Information</legend>
      	<div class="col-sm-6">
      	<div class="col-md-6">
  			<div class="form-group">
    			<label class="control-label col-sm-2" for="name">Name:</label>
    				<div class="col-sm-10">
      				<input type="text" class="form-control" id="name" placeholder="Enter name">
    				</div>
  				</div>
          </div>
          <div class="col-md-6">
  			<div class="form-group">
    			<label class="control-label col-sm-2" for="email">Email:</label>
    				<div class="col-sm-10">
      				<input type="email" class="form-control" id="email" placeholder="Enter email">
    				</div>
  				</div>
          </div>
          </div>
          <div class="col-sm-6">
          <div class="col-md-6">
  			<div class="form-group">
    			<label class="control-label col-sm-2" for="email">Phone:</label>
    				<div class="col-sm-10">
      				<input type="tel" class="form-control" id="phone" placeholder="Enter phone number">
    				</div>
  				</div>
          </div>
          <div class="col-md-6">
  			<div class="form-group">
    			<label class="control-label col-sm-2" for="date">Date:</label>
    				<div class="col-sm-10">
      				<input type="date" class="form-control" id="date">
    				</div>
  				</div>
          </div>
          </div>
  			<div class="form-group">
    			<div class="col-sm-offset-1 col-sm-11">
      			<button type="submit" class="btn btn-default btn-lg bangers">Submit</button>
    			</div>
  			</div>
  		</fieldset>
      </div>
    <!-- Contact Information Div End -->      
    </div>
	</form>
	<!-- Form End -->
<!-- Reservation End -->

<!-- Deliveries -->
<div class="row">
	<div class="page-header text-center blue-background">
  	<img class="img-responsive arrows" src="images/arrow_down_left.svg" alt="arrow down left" />
		<h1>Deliveries</h1>
    <img class="img-responsive arrows" src="images/arrow_down_right.svg" alt="arrow down right" />
	</div>
</div>

<!-- Deliveries Images -->

<div class="row extra-top-margin">
	<div class="col-sm-offset-1 col-sm-5">
  	<img class="img-responsive center-block deliveries-margin" src="images/deliveries_1.svg" alt="deliveries from bicycle repair man" />
  </div>
  <div class="col-sm-6">
  	<img class="img-responsive center-block black-border" src="images/deliveries_2.jpg" alt="deliveries truck" />
  </div>
</div>

<?php include 'footer.php';?>

</div>
<!-- Fluid Container End -->

</body>
</html>