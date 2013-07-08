<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script> 
	<script src="jquery-1.9.1.min.js"></script>
	<script type="text/javascript" scr="admin_form.js"></script>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
	<title>dalipiche.com</title>
	<link rel="stylesheet" type="text/css" href="weather.css">
	<link rel="stylesheet" type="text/css" href="admin_form.css">
	<link rel="stylesheet" type="text/css" href="employee_form.css">
</head>
<body>
	<?php  require_once "database_config.php";?>
	<div id="wrapper">
		<header> 
			<h1>Weather center</h1>
		</header>
		<nav class="left clear">
			<ul>
				<li><a href="weather.php">Main</a></li>
				<li id="logout"><a href="logout.php">Log out</a></li>
			</ul>
		</nav>
		<div id="wrapper-content">
			<section>
				<form action="add_data.php" method="post">
					<div id="enter_data">
						<label for="location">Location&nbsp;&nbsp;&nbsp;</label>
						
						<?php 
							$query="SELECT id_location, location_name
						            FROM location";
								$res = $mysqli->query($query);
								if (!$res) {
								    echo 'Could not run query: ' . $mysqli->error();
								    exit;
								}
								echo '<select name="location" id="location">';
								while (($row = mysqli_fetch_row($res)) != null)
								{
									 echo '<option value='."$row[0]|$row[1]".'>'. $row[1].'</option>'; 
							    
								} 
								echo "</select>";?>
								<br> <br>
						<label for="date">Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="date" id="date" name="date" placeholder="DD/MM/YYYY" required="required"> <br><br>
						<label for="temperature">Temperature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="text" id="temperature" name="temperature" placeholder="&#x2103;" required="required"><br><br>
						<label for="humidity">Humidity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="text" id="humidity" name="humidity" placeholder="%" required="required"> <br/><br/>
						<label for="hours">Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="number" id="hours" name="hours" placeholder="hours" required="required" min="0" max="24" step="2"> <br/><br/>
						<button type="submit" id="emp_submit">Submit</button>
					</div>
				</form>
				<form id="second_form" action="add_day_data.php" method="post">
					<div id="enter_data2">
						<label for="location">Location&nbsp;&nbsp;&nbsp;</label>
						
						<?php 
							$query="SELECT id_location, location_name
						            FROM location";
								$res = $mysqli->query($query);
								if (!$res) {
								    echo 'Could not run query: ' . $mysqli->error();
								    exit;
								}
								echo '<select name="location" id="location">';
								while (($row = mysqli_fetch_row($res)) != null)
								{
									 echo '<option value='."$row[0]|$row[1]".'>'. $row[1].'</option>'; 
							    
								} 
								echo "</select>";?>
								<br> <br>
						<label for="date">Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="date" id="date" name="date" placeholder="DD/MM/YYYY" required="required"> <br><br>						
						<label for="temperature">Temperature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="text" id="temperature" name="temperature" placeholder="&#x2103;" required="required"><br><br>
						<label for="humidity">Humidity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="text" id="humidity" name="humidity" placeholder="%" required="required"> <br/><br/>
						<button type="submit" id="emp_submit">Submit</button>
					</div>
				</form>
			</section>
		 </div>
		 <footer>
		 		<p>Designed by <a href="http://martomarinov.wordpress.com/">Martin Marinov</a> and <a href="http://bg.linkedin.com/pub/gergana-atanasova/72/2b4/165/">Gergana Atanasova</a>, Copyright &#169; 2013. All rights reserved.</p>
			</footer>
	</div>
	<script type="text/javascript" scr="admin_form.js"></script>
	<script type="text/javascript" scr="jquery-1.9.1.min.js"></script>
</body>
</html>