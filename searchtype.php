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
				<h5><b>Search Contact(s) By: </b></h5>
				<div class="row">
						<div id="searchtype" class="col-sm-6">
							<form role="form" class="bs-example bs-example-form" method="post" action="search.php">
								<select class="form-control" name="search"><optgroup>
							            <option selected="selected" value="">Choose a search category</option>
							            <option value="First Name">First Name</option>
							            <option value="Last Name">Last Name</option>
							            <option value="Phone Number">Phone Number</option>
							          </optgroup>
							    </select>

							    <div id="search_button"><a href="search.php">
							    	<input type="submit" name="continue" value="Continue to Search" class="btn btn-primary"></a>
								</div>
						    </form>
						</div>
					</div>
			</div>
			<div id="Engine">
				<h5>Engine</h5>
			</div>
			<br /><br /><br /><br /><br />

			<div id="buttonengine">
				<a href="viewcontacts.php?curPage=0&1892877a46578eed476577f9f483678457ae0">
				<button type="button" class="btn btn-primary">View Contacts </button></a> 
				&nbsp;&nbsp;&nbsp;
			</div><br />
			<footer>
				<center><p>Copyright (c) <?php echo date('Y'); ?> | <a href="developers.php">Developers Coner
				</a> | Engineered by <a href="mailto:alangiderick@gmail.com">Alangi Derick</a></p><center>
			</footer>
		</div>
	</body>
</html>