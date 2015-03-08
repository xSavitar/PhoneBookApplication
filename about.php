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
					<li><a href="developers.php">Developers Coner</a></li>
					<li class="active"><a href="about.php">About</a></li>
				</ul>
			</nav>

			<div id="headerpic">
				<center><h3>About this Application</h3></center>
			</div>

			<div id="about_text">
				<p>
					<h3><center> Phone Book Application Release</center></h3>
					<table class="table table-hover">
						<thead>
							<th>Version</th>
							<th>Release</th>
							<th>Core Languages</th>
							<th>Framework</th>
							<th>Database</th>
							<th>Developers</th>
						</thead>

						<tbody>
							<tr>
								<td>Version 1.0</td>
								<td>Alpha release, Beta release, stable</td>
								<td>HTML 5, CSS 3, PHP 5</td>
								<td>Bootstrap 3.0</td>
								<td>MySQL</td>
								<td>Alangi Derick</td>
							</tr>

							<tr>
								<td>Version 1.1</td>
								<td>Alpha release, unstable</td>
								<td>HTML 5, CSS 3, PHP 5</td>
								<td>CodeIgniter, Bootstrap 3.0</td>
								<td>---------</td>
								<td>Alangi Derick</td>
							</tr>
						</tbody>
					</table>
					This is a mini project done on the idea of a phone book application to 
					register contacts to a database, view them using tables, and other 
					functionalities. This is a small project to be taken to a frame-work when need 
					arises. Phone Book applications are written in many languages but this one is 
					written in HTML and a little PHP but i intend writing the whole app again in OO PHP.
				</p>
					<hr />
				<p>
					<b>Developers Conner: <b> If you like this application, and you want to work on it, 
					i will like you to follow me here... <br /><a href="developers.php"> Read more >></a> 
					<hr />

					<marquee><center><blockquote>
						&quot;Being Creative is a gift and not how much you can do, so be Aware!&quot;
					</blockquote></center></marquee>
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