<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Image Gallery</title>
	<link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<style type="text/css">

body{	
	padding-top: 80px;
	font-family: "Lato";
}

.glyphicon-picture {
	padding-right: 3px;
}

.jumbotron {
	color: #2c3e50;
	background: #ecf0f1;
}

.navbar-inverse {
	background-color: #2c3e50;
}

.navbar-inverse .navbar-nav li a {
	color: lightgrey;
}

.navbar-inverse .navbar-brand {	
	color: lightgrey;
}
</style>	
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        	</button>
			<a href="redirectAfterRegistration.php" class="navbar-brand"><span class="glyphicon glyphicon-picture"></span> Memory Museum</a>
		</div>
	
		<div class="collapse navbar-collapse" id="bs-nav-demo">
			<ul class="nav navbar-nav">
				
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				
			</ul>
		</div>
	</div>
</nav>

<div class="container">
<h1 class="text-center display-1">
<?php 
 echo "hello dear " . $_SESSION["username"];
?>
</h1>
	<div class="jumbotron">
		<h1><i class="fa fa-camera-retro"></i>Image Gallery</h1>
	</div>
	
	<div class="row">
		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail">
				<img src="https://images.unsplash.com/photo-1545570237-6da853c41c9a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
			</div>
		</div>

		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail">
				<img src="https://images.unsplash.com/photo-1545559054-8f4f9e855781?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
			</div>
		</div>

		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail">
				<img src="https://images.unsplash.com/photo-1545593305-2a0240c7cec3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
			</div>
		</div>

		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail">
				<img src="https://images.unsplash.com/photo-1508669232496-137b159c1cdb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80">
			</div>
		</div>

		<div class="col-lg-4 col-sm-6">
			<div class="thumbnail">
				<img src="https://images.unsplash.com/photo-1534406315430-4d7cf92bc690?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80">
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-6">
			<div class="thumbnail">
				<img src="https://images.unsplash.com/photo-1502809701328-25d749719304?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80">
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-6">
			<div class="thumbnail">
				<img src="https://images.unsplash.com/photo-1513682322455-ea8b2d81d418?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1866&q=80">
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-6">
			<div class="thumbnail">
				<img src="https://images.unsplash.com/photo-1453323403791-7fbd02be3e40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=635&q=80">
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-6">
			<div class="thumbnail">
				<img src="https://images.unsplash.com/photo-1514571948039-d3cb9e8f9750?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
			</div>
		</div>
	</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
