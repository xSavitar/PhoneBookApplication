<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html>
	<head>
		<link rel="shortcut icon" href="img/pic.png" type="image/x-icon">
		<title>Phone Book Application</title>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0" />

		<!-- bootstrap and others -->
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/custom.css" rel="stylesheet" />

		<script type="text/javascript">
			function ask(){
				confirm("Do you want to delete this contact?");
			}
		</script>
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
				<center><h3>Search Results, found 0 Contact(s)</h3></center>
			</div>


			<table class="table table-bordered table-hover table-responsive">
				<tbody>
					<?php 

							echo "<br /><br /><br />
							<br /><br /><br /><center><h3>No record(s) found with given Information</h3></center>
							<center><h4>So table is empty</h4></center><br /><br /><br /><br /><br /><br />
							<br /><br /><br /><br />";
					 ?>
				</tbody>
			</table>

			<div id="buttonsearch">
				<a href="searchtype.php"><button type="button" class="btn btn-primary">
				Search Another Contact </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
				
				<a href="registration.php"><button type="button" class="btn btn-primary">
				Register Another Contact </button></a>
			</div>
			<br />
			<footer>
				<center><p>Copyright (c) <?php echo date('Y'); ?> | <a href="developers.php">Developers Coner
				</a> | Engineered by <a href="mailto:alangiderick@gmail.com">Alangi Derick</a></p><center>
			</footer>
		</div>

		<!-- bootstrap javascript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>