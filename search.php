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
				<center><h3>Search a Contact</h3></center>
			</div>

			<div class="search">
				<h4><span id="searchtitle">Fusion</span> <span id="search">Search</span></h4>
				<?php 
					if(isset($_POST['continue'])){
						$search_cat = $_POST['search'];
							if($search_cat=="First Name"){
									$engine = "fname";
							}
							if($search_cat=="Last Name"){
								$engine = "lname";
							}
							if($search_cat=="Phone Number"){
								$engine = "phonenumber";
							}
							if($search_cat == ""){
								header('Location: searchtype.php');
							}

							$_GET['name'] = $engine;
							$name = $_GET['name'];
						}
				?>
				<h5><b>Enter <?php echo $search_cat; ?>: </b></h5>
				<div class="row">
						<div id="searchtype" class="col-sm-6">
							<form role="form" class="bs-example bs-example-form" method="post" 
							action="query_engine.php">
								<div class="row">
									<div class="input-group col-md-12">
										<input type="text" autofocus name="something" class="form-control" placeholder="Enter Information here..." required>
										<span class="input-group-btn">
											<a href="query_engine.php?search=<?php echo $name;?>">
											<input class="btn btn-default" type="submit" value="Search" name="engine">
											</a>
										</span>&nbsp;&nbsp;
										<span class="glyphicon glyphicon-search" id="searchglyph"></span>
									</div>
								</div>
						    </form>
						</div>
					</div>
			</div>
			<div id="Engine">
				<h4>Engine</h4>
			</div>
			<br /><br /><br /><br />

			<div id="buttonindex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="searchtype.php">
				<button type="button" class="btn btn-primary">Back to Category </button></a> 
			</div><br />
			<footer>
				<center><p>Copyright (c) <?php echo date('Y'); ?> | <a href="developers.php">Developers Coner
				</a> | Engineered by <a href="mailto:alangiderick@gmail.com">Alangi Derick</a></p><center>
			</footer>
		</div>
	</body>
</html>