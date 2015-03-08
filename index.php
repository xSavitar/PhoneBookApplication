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
					<li class="active"><a href="index.php">Application</a></li>
					<li><a href="developers.php">Developers Coner</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</nav>

			<div id="headerpic">
				<center><h3>Phone Book Application</h3></center>
			</div>

			<div>
				<img src="img/android2.png" height="430px" width="40%">
			</div>

			<div id="buttonindex">
				<a href="viewcontacts.php?curPage=0&1892877a46578eed476577f9f483678457ae0">
				<button type="button" class="btn btn-primary">View Contacts </button></a> 
				&nbsp;&nbsp;&nbsp;
				<a href="registration.php"><button type="button" class="btn btn-primary">
				Register Contact </button></a>
			</div><br />
			<footer>
				<center><p>Copyright (c) <?php echo date('Y'); ?> | <a href="developers.php">Developers Coner
				</a> | Engineered by <a href="mailto:alangiderick@gmail.com">Alangi Derick</a></p><center>
			</footer>
		</div>
	</body>
</html>