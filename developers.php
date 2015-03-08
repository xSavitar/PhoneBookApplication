<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html>
	<head>
		<title>Phone Book Application</title>
		<link rel="shortcut icon" href="img/pic.png" type="image/x-icon">
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0" />

		<!-- bootstrap and others -->
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/custom.css" rel="stylesheet" />

		<!-- bootstrap javascript -->
		<script src="js/bootstrap.min.js"> </script>
	</head>

	<body>

		<div class="container">
			<nav class="row">
				<ul class="nav nav-tabs nav-justified">
					<li><a href="index.php">Application</a></li>
					<li class="active"><a href="developers.php">Developers Coner</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</nav>

			<div id="headerpic">
				<center><h3>Developers Coner / Support</h3></center>
			</div>

			<div id="developers_text">
				<div class="jumbotron">
					<h1>Welcome to Developers page!</h1>
					<p>This page is only for those who want to develop on this applications.</p>
					<p><a class="btn btn-primary btn-lg" role="button">
					Learn more</a>
					</p>
				</div>


				<p>
					Welcome to the developers coner and this page will give you some tips on how to if you what to develop and add more functionalities to this application. If you will like to write to me directly, your idea, send me a mail <a href="mailto:alangiderick@gmail.com"> here </a>. This application is written in the following languages:- HTML 5, CSS 3, PHP 5. 
				</p>
					<hr />
				<p>
					<blockquote>
						&quot;Being Creative is a gift and not how much you can do, so be Aware!&quot;
					</blockquote>
				</p>
			</div>

			<div id="about_back">
				<a href="index.php"><button type="button" class="btn btn-primary">
				Back to Home </button></a>
			</div><br />
			<footer>
				<center><p>Copyright (c) <?php echo date('Y'); ?> | <a href="developers.php">Developers Coner
				</a> | Engineered by <a href="mailto:alangiderick@gmail.com">Alangi Derick</a></p><center>
			</footer>
		</div>
	</body>
</html>