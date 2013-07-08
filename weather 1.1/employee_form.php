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
				<li><a href="">To the main page</a></li>
			</ul>
		</nav>
		<div id="wrapper-content">
			<section>
				<form action="add_data.php" method="post">
					
						<label for="user_name">Location&nbsp;&nbsp;&nbsp;</label>
							<?php 
								$query="SELECT id_location, location_name
						                FROM location";
								$res = $mysqli->query($query);
								if (!$res) {
								    echo 'Could not run query: ' . $mysqli->error();
								    exit;
								}
									echo '<select name="location" id="location">';
									while (($row = mysqli_fetch_row($res)))
								{	
								 echo '<option value='."$row[0]|$row[1]".'>'. $row[1].'</option>'; 
							    
								}?>
							</select>
						<br/><br/>
						<label for="date">Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" id="date" name="date" placeholder="DD/MM/YYYY"> <br/><br/>
						<label for="temperature">Temperature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" id="temperature" name="temperature" placeholder="&#x2103;"><br/><br/>
						<label for="humidity">Humidity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" id="humidity" name="name" placeholder="%"> <br/><br/>
						<label for="hours">Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="number" id="hours" name="hours" placeholder="hours"> <br/><br/>
						<button type="submit" id="emp_submit">Submit</button>
					
				</form>
			</section>
		 </div>
	</div>
	<script type="text/javascript" scr="admin_form.js"></script>
	<script type="text/javascript" scr="jquery-1.9.1.min.js"></script>
</body>
</html>