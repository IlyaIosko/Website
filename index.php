<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Purrfect Match</title>
	<link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<style style="text/css">

body {
	background: url(https://images.unsplash.com/photo-1488441770602-aed21fc49bd5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjI0MX0&auto=format&fit=crop&w=1350&q=80);
	background-size: cover;
	font-family: Lato;
	font-weight: bold;
}

html {
	height: 100%;
}

#frontPageContent {
	padding-top: 25%;
	text-align: center;
}

h1 {
	font-weight: bold;
}

h4 {
	padding-bottom: 8px;
}

.btn-default {
	background-color: Transparent;
	border-color: black;
}

hr {
	width: 250px;
	border-color: black;
	border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}

h1, h4 {
	text-shadow: 2px 4px 5px rgba(5, 5, 5, 0.4);
}

@media print {
    nav {
      display: block;
      font-style: italic;
      color: black;
    }
  }

.redirectToForm {
	color: black;
}
</style>
</head>
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
				<a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-picture"></span> Memory Museum</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
				</ul>
				
			</div>
		</div>
	</nav>	


<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div id="frontPageContent">
				
				<h1>Image Gallery</h1>
				<h4>Welcome to Memory Museum</h3>
				<hr>
				<button class="btn btn-default btn-lg"><i class="fa fa-camera-retro"></i><a class="redirectToForm" href="form.php">Get started!</a></button>
			</div>		
		</div>
	</div>
</div>

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>
