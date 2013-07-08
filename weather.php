<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script> 
	
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
	<title>dalipiche.com</title>
	<link rel="stylesheet" type="text/css" href="main-page.css">
</head>
<body>
	<?php  require_once "database_config.php";?>
	<div id="wrapper">
		<header> 
			<h1>Weather center</h1>
		</header>
		<nav class="left clear">
			<ul>
				
				<li class="right clear"><a href="login.html">Log in</a></li>
				
			</ul>
		</nav>
		<div id="wrapper-content">
			<section class="left clear">
				<div id="city_option">
					<!-- <select name="city" id="city">
						<option value="select" selected="selected">Select location</option>
						<option id="option_sofia">Sofia</option>
						<option id="option_plovdiv">Plovdiv</option>
						<option id="option_stara_zagora">Stara Zagora</option>
					</select> -->
					<div id="options">
						<ul>
							<li id="today" > Today </li>
							<li id="24_hour"> Next 24 hours</li>
							<li id="5_days" > Next 5 days</li>
							<li id="graphics" >Graphics</li>
						</ul>
					</div>
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
								 echo '<option id='.$row[0].' value='. $row[0] .'>'. $row[1].'</option>'; 
							    
								}?>
							</select>
				</div>
				<canvas id="tempgraph" width="800px" height="260px"></canvas>
				<canvas id="humgraph" width="800px" height="260px"></canvas>
				<div id="result"> 
					<img src="" id="today_image"><br/>
					<label for="date">Date:</label>
				    <span class="date"></span> <br/>
					<label for="temperature" >Temperature: </label>
					<span class="temperature"></span> <br/>
					<label for="humidity">Humidity: </label>
					<span class="humidity"></span>
					<br/>
				</div>
				<div id="field_24">
					<div class="hour_0">
						<img src="" class="image">
						<p class="h_0"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_0"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_0"></span>
						
					</div>
					<div class="hour_1">
						<img src="" class="image">
						<p class="h_1"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_1"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_1"></span>
					</div>
					<div class="hour_2">
						<img src="" class="image">
						<p class="h_2"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_2"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_2"></span>
					</div>
					<div class="hour_3">
						<img src="" class="image">
						<p class="h_3"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_3"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_3"></span>
					</div>
					<div class="hour_4">
						<img src="" class="image">
						<p class="h_4"></p>
						<img src="images/forward.png" class="forward">
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_4"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_4"></span>
					</div>
					<div class="hidden_fields1 hour_5">
						<img src="" class="image">
						<p class="h_5"></p>
						<img src="images/back.png" class="back">
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_5"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_5"></span>
					</div>
					<div class="hidden_fields1 hour_6">
						<img src="" class="image">
						<p class="h_6"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_6"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_6"></span>
					</div>
					<div class="hidden_fields1 hour_7">
						<img src="" class="image">
						<p class="h_7"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_7"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_7"></span>
					</div>
					<div class="hidden_fields1 hour_8">
						<img src="" class="image">
						<p class="h_8"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_8"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_8"></span>
					</div>
					<div class="hidden_fields1 hour_9">
						<img src="images/forward.png" class="forward1">
						<img src="" class="image">
						<p class="h_9"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_9"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_9"></span>
					</div>
					<div class="hidden_fields2 hour_10">
						<img src="images/back.png" class="back1">
						<img src="" class="image">
						<p class="h_10"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_10"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_10"></span>
					</div>
					<div class="hidden_fields2 hour_11">
						<img src="" class="image">
						<p class="h_11"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_11"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_11"></span>
					</div>
				</div>
				
				
				<div id="field_5day">
					<div id="day_date_0">
						<img src="" class="image">
						<label for="date">Date:</label>
				    	<span class="date_0"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_0"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_0"></span>
					</div>
					<div id="day_date_1">
						<img src="" class="image">
						<label for="date">Date:</label>
				    	<span class="date_1"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_1"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_1"></span>
					</div>
					<div id="day_date_2">
						<img src="" class="image">
						<label for="date">Date:</label>
				    	<span class="date_2" data-id></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_2"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_2"></span>
					</div>
					<div id="day_date_3">
						<img src="" class="image">
						<label for="date">Date:</label>
				    	<span class="date_3"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_3"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_3"></span>
					</div>
					<div id="day_date_4">
						<img src="" class="image">
						<label for="date">Date:</label>
				    	<span class="date_4"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_4"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_4"></span>
					</div>
				</div>
			</section>
		</div>
		<footer>
			<p>Designed by <a href="http://martomarinov.wordpress.com/">Martin Marinov</a> 
				and <a href="http://bg.linkedin.com/pub/gergana-atanasova/72/2b4/165/">Gergana Atanasova</a>, 
				Copyright &#169; 2013. All rights reserved.</p>
		</footer>
	</div>
	<script src="Chart.js"></script>
 	<script src="graphdrawing.js"></script>
</body>
</html>