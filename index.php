<!Doctype html>
<html>
	<head>
		<title>Random countdown !</title>

		<!-- Character set -->
        <meta charset="UTF-8">

        <!-- Configure viewport for mobile / tabled devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!-- Define keywords for search engines -->
        <meta name="keywords" content="freelance, startup, développeur, scala, java, android, web">

		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
		<link rel="stylesheet" media="screen" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" media="screen" href="css/style.css">
	</head>
	<body>
		<div id="content">
			<audio id="alarm-sound">
				<source src="alarm.mp3" type="audio/mpeg">
			</audio>

			<div id="timer">
				0 s
			</div>

			<button id="reload-btn" class="btn btn-default btn-lg btn-circle">
				<i class="glyphicon glyphicon-repeat"></i>
			</button> 
		</div>

		<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>