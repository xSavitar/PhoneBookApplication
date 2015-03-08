<?php include("config.php"); ?>
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
				<center><h3>Available Contacts in Phone Book</h3></center>
			</div>


			<table class="table table-bordered table-hover table-responsive">
				<thead>
					<th> First Name </th>
					<th> Last Name </th>
					<th> Country </th>
					<th> Phone Number </th>
					<th><center> Edit Contact </center></th>
					<th><center> Delete Contact </center></th>
				</thead>

				<tbody>
					<?php 
						//sets total subset of a page
						define('SHOWMAX', 6);
						//gets the total number of contacts in the table
						$getTotal = "SELECT COUNT(*) FROM Contacts";
						$total = mysql_query($getTotal);
						$row = mysql_fetch_row($total);
						$totalContacts = $row[0];

						//set the current page
						$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;

						//calculate the start row
						$startRow = ($curPage * SHOWMAX);
						$sql = "SELECT * FROM Contacts ORDER BY fname, lname LIMIT " . $startRow . ", " . SHOWMAX;
						$result = mysql_query($sql);
						while($res = mysql_fetch_array($result)){
							echo "<tr>";
							echo "<td>" . $res['fname'] . "</td>";
							echo "<td>" . $res['lname'] . "</td>";
							echo "<td>" . $res['country'] . "</td>";
							echo "<td>" . $res['phonenumber'] . "</td>";
							echo '<td><a href="edit.php?id='.$res['contactid'] . '"><center>
								<button class="btn btn-success"> Edit </button></center></a></td>';
							echo '<td><a href="deletecontact.php?id='.$res['contactid'] . '"><center>
								<button class="btn btn-danger" onclick=ask();> Delete </button></center></a></td>';
							echo "</tr>";
						}
					 ?>
				</tbody>
			</table>

			<div id="pagination">
				<center>
					<?php 
						echo $startRow;
						if ($startRow < $totalContacts) {
							echo ' to ';
							if ($startRow+SHOWMAX < $totalContacts) {
								echo (($startRow-1)+SHOWMAX);
							}
							else {
								echo ($totalContacts-1);
							}
						}
						echo " of " . ($totalContacts-1) . "<br />";

						// create a back link if current page greater than 0

						if ($curPage > 0) {
							echo "<a href=".$_SERVER['PHP_SELF']."?curPage=".($curPage-1) 
							."&".sha1(md5('secret-key')).">
							<span class=\"glyphicon glyphicon-step-backward\"></span> Prev &nbsp;&nbsp;&nbsp;";
						}
						// otherwise leave the cell empty
						else {
							echo '&nbsp;';
						}

						// create a forward link if more records exist
						if ($startRow+SHOWMAX < $totalContacts) {
							echo "<a href=".$_SERVER['PHP_SELF']."?curPage=".($curPage+1)."&". 
							sha1(md5('secret-key'))."> Next 
							<span class=\"glyphicon glyphicon-step-forward\"></span></a>";
						}
						// otherwise leave the cell empty
						else {
							echo '&nbsp;';
						}
					?>
				</center><br />
			</div>

			<div id="buttonsearch">
				<a href="searchtype.php"><button type="button" class="btn btn-primary">
				Search a Contact </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
				
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