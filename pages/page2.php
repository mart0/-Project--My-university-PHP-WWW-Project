<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script> 
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
				<li><a href="#page1">Main</a></li>
				<li class="right clear"><a href="#page2">Log in</a></li>
				
			</ul>
		</nav>
		<div id="wrapper-content">
			<section class="left clear">
				<div id="city_option">
					<select name="city" id="city">
						<option value="select" selected="selected">Select location</option>
						<option id="option_sofia">Sofia</option>
						<option id="option_plovdiv">Plovdiv</option>
						<option id="option_stara_zagora">Stara Zagora</option>
					</select>
				</div>
				<!-- Sofia Forecast -->
				<div id="sofia_forecast">
					<nav>
						<ul>
							<li id="sofia_today"> Today in Sofia</li>
							<li id="sofia_24"> Next 24 hours</li>
							<li id="sofia_5day"> Next 5 days</li>
						</ul>
					</nav>
				<div id="sofia_today_field">
						<form action="">
							<label for="date_new">Date: </label>
							<input type="date" class="date_new" value="" placeholder="DD/MM/YYYY" required="required" min="1" max="2014"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					<canvas>sapod</canvas>
				</div>
				<div id="sofia_24_field">
					<div class="hour_1">
						<p>+2</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_2">
						<p>+4</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_3">
						<p>+6</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_4">
						<p>+8</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_5">
						<p>+10</p>					
						<button type="button" class="forward">"Forward"</button>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+12</p><button class="back">Back</button>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+14</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+16</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+18</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+20</p><button type="button" class="forward1">Forward</button>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields2">
						<p>+22</p><button class="back1">Back</button>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields2">
						<p>+24</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
				</div>
				<div id="sofia_5day_field">
					<div class="hour_1">
						<p>+1</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_2">
						<p>+2</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_3">
						<p>+3</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_4">
						<p>+4</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_5">
						<p>+5</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
				</div>	
				</div>
				<!-- Plovdiv Forecast -->
				<div id="plovdiv_forecast">
					<nav>
						<ul>
							<li id="plovdiv_today"> Today in Plovdiv</li>
							<li id="plovdiv_24"> Next 24 hours</li>
							<li id="plovdiv_5day"> Next 5 days</li>
						</ul>
					</nav>
				<div id="plovdiv_today_field">
						<form action="">
							<label for="date_new">Date: </label>
							<input type="date" class="date_new" value="" placeholder="DD/MM/YYYY" required="required" min="1" max="2014"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					<canvas>sapod</canvas>
				</div>
				<div id="plovdiv_24_field">
					<div class="hour_1">
						<p>+2</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_2">
						<p>+4</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_3">
						<p>+6</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_4">
						<p>+8</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_5">
						<p>+10</p>					
						<button type="button" class="forward">"Forward"</button>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+12</p><button class="back">Back</button>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+14</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+16</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+18</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+20</p><button type="button" class="forward1">Forward</button>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields2">
						<p>+22</p><button class="back1">Back</button>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields2">
						<p>+24</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
				</div>
				<div id="plovdiv_5day_field">
					<div class="hour_1">
						<p>+1</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_2">
						<p>+2</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_3">
						<p>+3</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_4">
						<p>+4</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_5">
						<p>+5</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
				</div>	
				</div>
				<!-- Stara Zagora Forecast -->
				<div id="stara_zagora_forecast">
					<nav>
						<ul>
							<li id="stara_zagora_today"> Today in Stara Zagora</li>
							<li id="stara_zagora_24"> Next 24 hours</li>
							<li id="stara_zagora_5day"> Next 5 days</li>
						</ul>
					</nav>
				<div id="stara_zagora_today_field">
						<form action="">
							<label for="date_new">Date: </label>
							<input type="date" class="date_new" value="" placeholder="DD/MM/YYYY" required="required" min="1" max="2014"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					<canvas>sapod</canvas>
				</div>
				<div id="stara_zagora_24_field">
					<div class="hour_1">
						<p>+2</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_2">
						<p>+4</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_3">
						<p>+6</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_4">
						<p>+8</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_5">
						<p>+10</p>					
						<button type="button" class="forward">"Forward"</button>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+12</p><button class="back">Back</button>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+14</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+16</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+18</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields1">
						<p>+20</p><button type="button" class="forward1">Forward</button>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields2">
						<p>+22</p><button class="back1">Back</button>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hidden_fields2">
						<p>+24</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
				</div>
				<div id="stara_zagora_5day_field">
					<div class="hour_1">
						<p>+1</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_2">
						<p>+2</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_3">
						<p>+3</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_4">
						<p>+4</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required" ><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
					<div class="hour_5">
						<p>+5</p>
						<form action="">
							<label for="hour_new">Date: </label>
							<input type="date" min="1" max="2014" class="hour_new" required="required"><br/><br/><br/>
							<label for="temperature_new" >Temperature: </label>
							<input type="text" class="temperature_new" value="" placeholder="&#x2103;" required="required"><br/><br/><br/>
							<label for="humidity_new">Humidity: </label>
							<input type="text" class="humidity_new" value="" placeholder="%" required="required">
						</form>
					</div>
				</div>	
				</div>
			</section>
		</div>
		<footer>
		</footer>
	</div>
	<script>
		$(document).ready(function () {
			/* Forecast Sofia */
			$('#option_sofia').on('click', function () {
				$('#plovdiv_forecast').hide("fast").css("display","none");
				$('#stara_zagora_forecast').hide("fast").css("display","none");
				$('#sofia_forecast, #sofia_forecast nav').show("slow").css("display", "inline-block");
    		});
    		/* Sofia today */
    		$('#sofia_today').on('click', function () {
    			$('#sofia_24_field').hide("fast");
    			$('.hidden_fields1').hide("fast");
    			$('.hidden_fields2').hide("fast");
    			$('#sofia_5day_field').hide("fast");
				$('#sofia_today_field').show("slow");
				$('#sofia_today').css("text-decoration", "underline");
				$('#sofia_24, #sofia_5day').css("text-decoration", "none");
    		});
    		/* Sofia 24 hours */
    		$('#sofia_24').on('click', function () {
    			$('#sofia_today_field').hide("fast");
    			$('#sofia_5day_field').hide("fast");
    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow");
				$('#sofia_24_field').show("slow");
				$('#sofia_24').css("text-decoration", "underline");
				$('#sofia_today, #sofia_5day').css("text-decoration", "none");
    		});
    		$('.forward').on('click', function () {
    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').hide("fast");
				$('.hidden_fields1').show("slow").css("display", "table-cell");
    		});
    		$('.forward1').on('click', function () {
    			$('.hidden_fields1').hide("fast");
				$('.hidden_fields2').show("slow").css("display", "table-cell");
			});
			$('.back1').on('click', function () {
    			$('.hidden_fields2').hide("fast");
				$('.hidden_fields1').show("slow").css("display", "table-cell");
			});
			$('.back').on('click', function () {
    			$('.hidden_fields1').hide("fast");
    			$('.hidden_fields2').hide("fast");
				$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow").css("display", "table-cell");
			});
			/* Sofia 5 days */
    		$('#sofia_5day').on('click', function () {
    			$('#sofia_24_field').hide("fast");
    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow");
    			$('#sofia_today_field').hide("fast");
				$('#sofia_5day_field').show("slow").css("display", "table-cell");
				$('#sofia_5day').css("text-decoration", "underline");
				$('#sofia_24, #sofia_today').css("text-decoration", "none");
    		});
    		/* Forecast Plovdiv */
    		$('#option_plovdiv').on('click', function () {
				$('#sofia_forecast').hide("fast").css("display","none");
				$('#stara_zagora_forecast').hide("fast").css("display","none");
				$('#plovdiv_forecast, #plovdiv_forecast nav').show("slow").css("display", "inline-block");
    		});
    		/* Plovdiv today */
    		$('#plovdiv_today').on('click', function () {
    			$('#plovdiv_24_field').hide("fast");
    			$('.hidden_fields1').hide("fast");
    			$('.hidden_fields2').hide("fast");
    			$('#plovdiv_5day_field').hide("fast");
				$('#plovdiv_today_field').show("slow");
				$('#plovdiv_today').css("text-decoration", "underline");
				$('#plovdiv_24, #plovdiv_5day').css("text-decoration", "none");
    		});
    		/* Plovdiv 24 hours */
    		$('#plovdiv_24').on('click', function () {
    			$('#plovdiv_today_field').hide("fast");
    			$('#plovdiv_5day_field').hide("fast");
    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow");
				$('#plovdiv_24_field').show("slow");
				$('#plovdiv_24').css("text-decoration", "underline");
				$('#plovdiv_today, #plovdiv_5day').css("text-decoration", "none");
    		});
    		$('.forward').on('click', function () {
    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').hide("fast");
				$('.hidden_fields1').show("slow").css("display", "table-cell");
    		});
    		$('.forward1').on('click', function () {
    			$('.hidden_fields1').hide("fast");
				$('.hidden_fields2').show("slow").css("display", "table-cell");
			});
			$('.back1').on('click', function () {
    			$('.hidden_fields2').hide("fast");
				$('.hidden_fields1').show("slow").css("display", "table-cell");
			});
			$('.back').on('click', function () {
    			$('.hidden_fields1').hide("fast");
    			$('.hidden_fields2').hide("fast");
				$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow").css("display", "table-cell");
			});
			/* Plovdiv 5 days*/
    		$('#plovdiv_5day').on('click', function () {
    			$('#plovdiv_24_field').hide("fast");
    			$('#plovdiv_today_field').hide("fast");
    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow");
				$('#plovdiv_5day_field').show("slow").css("display", "table-cell");
				$('#plovdiv_5day').css("text-decoration", "underline");
				$('#plovdiv_24, #plovdiv_today').css("text-decoration", "none");
    		});
    		/* Forecast Stara Zagora */
    		$('#option_stara_zagora').on('click', function () {
				$('#sofia_forecast').hide("fast").css("display","none");
				$('#plovdiv_forecast').hide("fast").css("display","none");
				$('#stara_zagora_forecast, #stara_zagora_forecast nav').show("slow").css("display", "inline-block");
    		});
    		/* Stara Zagora today */
    		$('#stara_zagora_today').on('click', function () {
    			$('#stara_zagora_24_field').hide("fast");
    			$('.hidden_fields1').hide("fast");
    			$('.hidden_fields2').hide("fast");
    			$('#stara_zagora_5day_field').hide("fast");
				$('#stara_zagora_today_field').show("slow");
				$('#stara_zagora_today').css("text-decoration", "underline");
				$('#stara_zagora_24, #stara_zagora_5day').css("text-decoration", "none");
    		});
    		/* Stara Zagora 24 hours */
    		$('#stara_zagora_24').on('click', function () {
    			$('#stara_zagora_today_field').hide("fast");
    			$('#stara_zagora_5day_field').hide("fast");
    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow");
				$('#stara_zagora_24_field').show("slow");
				$('#stara_zagora_24').css("text-decoration", "underline");
				$('#stara_zagora_today, #stara_zagora_5day').css("text-decoration", "none");
    		});
    		$('.forward').on('click', function () {
    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').hide("fast");
				$('.hidden_fields1').show("slow").css("display", "table-cell");
    		});
    		$('.forward1').on('click', function () {
    			$('.hidden_fields1').hide("fast");
				$('.hidden_fields2').show("slow").css("display", "table-cell");
			});
			$('.back1').on('click', function () {
    			$('.hidden_fields2').hide("fast");
				$('.hidden_fields1').show("slow").css("display", "table-cell");
			});
			$('.back').on('click', function () {
    			$('.hidden_fields1').hide("fast");
    			$('.hidden_fields2').hide("fast");
				$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow").css("display", "table-cell");
			});
			/* Stara Zagora 5 days*/
    		$('#stara_zagora_5day').on('click', function () {
    			$('#stara_zagora_24_field').hide("fast");
    			$('#stara_zagora_today_field').hide("fast");
    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow");
				$('#stara_zagora_5day_field').show("slow").css("display", "table-cell");
				$('#stara_zagora_5day').css("text-decoration", "underline");
				$('#stara_zagora_24, #stara_zagora_today').css("text-decoration", "none");
    		});
    	});















    		/* Forecast Plovdiv 
    		$('#option_plovdiv').on('click', function () {
				$('#plovdiv_forecast nav').show("slow").css("display", "inline-block");
				$('#sofia_forecast').hide("fast");
    		});
    		$('#plovdiv_today').on('click', function () {
    			$('#plovdiv_24_pic').hide("fast");
    			$('#plovdiv_5day_pic').hide("fast");
				$('#plovdiv_today_pic').show("slow");
    		});
    		$('#plovdiv_24').on('click', function () {
    			$('#plovdiv_today_pic').hide("fast");
    			$('#plovdiv_5day_pic').hide("fast");
				$('#plovdiv_24_pic').show("slow");
    		});
    		$('#plovdiv_5day').on('click', function () {
    			$('#plovdiv_24_pic').hide("fast");
    			$('#plovdiv_today_pic').hide("fast");
				$('#plovdiv_5day_pic').show("slow");
    		});
    		Forecast Stara Zagora
    		$('#option_stara_zagora').on('click', function () {
				$('#stara_zagora_forecast nav').show("slow").css("display", "inline-block");
				$('#sofia_forecast').hide("fast");
    			$('#plovdiv_forecast').hide("fast");
    		});
    		$('#stara_zagora_today').on('click', function () {
    			$('#stara_zagora_24_pic').hide("fast");
    			$('#stara_zagora_5day_pic').hide("fast");
				$('#stara_zagora_today_pic').show("slow");
    		});
    		$('#stara_zagora_24').on('click', function () {
    			$('#stara_zagora_today_pic').hide("fast");
    			$('#stara_zagora_5day_pic').hide("fast");
				$('#stara_zagora_24_pic').show("slow");
    		});
    		$('#stara_zagora_5day').on('click', function () {
    			$('#stara_zagora_24_pic').hide("fast");
    			$('#stara_zagora_today_pic').hide("fast");
				$('#stara_zagora_5day_pic').show("slow");
    		});   */ 
		
	</script>
</body>
</html>