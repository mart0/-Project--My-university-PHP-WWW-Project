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
							<li id="today" class="1"> Today </li>
							<li id="24_hour" class="2"> Next 24 hours</li>
							<li id="5_days" class="3"> Next 5 days</li>
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
				<div id="result"> 
					<label for="date">Date:</label>
				    <span class="date"></span> <br/>
					<label for="temperature" >Temperature: </label>
					<span class="temperature"></span> <br/>
					<label for="humidity">Humidity: </label>
					<span class="humidity"></span>
					<br/>
				</div>
				<div id="field_24">
					<div class="hour_1">
						<p class="h_0"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_0"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_0"></span>
						
					</div>
					<div class="hour_2">
						<p class="h_1"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_1"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_1"></span>
					</div>
					<div class="hour_3">
						<p class="h_2"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_2"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_2"></span>
					</div>
					<div class="hour_4">
						<p class="h_3"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity"></span>
					</div>
					<div class="hour_5">
						<p class="h_4"></p>
						<img src="images/forward.png" class="forward">
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_4"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_4"></span>
					</div>
					<div class="hidden_fields1 hour_6">
						
						<p class="h_5"></p>
						<img src="images/back.png" class="back">
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_5"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_5"></span>
					</div>
					<div class="hidden_fields1 hour_7">
						<p class="h_6"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_6"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_6"></span>
					</div>
					<div class="hidden_fields1 hour_8">
						<p class="h_7"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_7"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_7"></span>
					</div>
					<div class="hidden_fields1 hour_9">
						<p class="h_8"></p>
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_8"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_8"></span>
					</div>
					<div class="hidden_fields1 hour_10">
						<p class="h_9"></p>
						<img src="images/forward.png" class="forward1">
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_9"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_9"></span>
					</div>
					<div class="hidden_fields2 hour_11">
						
						<p class="h_10"></p>
						<img src="images/back.png" class="back1">
						<label for="date">Date:</label>
				    	<span class="date"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_10"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_10"></span>
					</div>
					<div class="hidden_fields2 hour_12">
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
					<div class="day_date">
						<label for="date">Date:</label>
				    	<span class="date_0"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_0"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_0"></span>
					</div>
					<div class="day_date">
						<label for="date">Date:</label>
				    	<span class="date_1"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_1"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_1"></span>
					</div>
					<div class="day_date">
						<label for="date">Date:</label>
				    	<span class="date_2" data-id></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_2"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_2"></span>
					</div>
					<div class="day_date">
						<label for="date">Date:</label>
				    	<span class="date_3"></span> <br/>
						<label for="temperature" >Temperature: </label>
						<span class="temperature_3"></span> <br/>
						<label for="humidity">Humidity: </label>
						<span class="humidity_3"></span>
					</div>
					<div class="day_date">
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
 	

<!--..................  Ajax start ....................... -->

	<script type="text/javascript">
	$(document).ready(function () {
			$('#today').on('click',function(){
				var $id = $('#location').children(":selected").attr("id");
				console.log($id);
				$('#result').hide("fast");
				$('#field_24').hide("fast");
				$('#field_5day').hide("fast");
				$.ajax({
					type: "GET",
					url: 'http://localhost/Weather%20Center/load_info.php?id='+$id,
					dataType: 'json',
					success: function(info){
						$('#result').show("fast");
						$('#result').find('.date').text(info.date);
						$('#result').find('.temperature').text(info.temperature);
						$('#result').find('.humidity').text(info.humidity);
						//alert('Successfuly inserter data');
					}

				});
			});

			$('#24_hour').on('click',function(){
				var $id = $('#location').children(":selected").attr("id");
				console.log($id);
				$('#result').hide("fast");
				$('#field_5day').hide("fast");
				$.ajax({
					type: "GET",
					url: 'http://localhost/Weather%20Center/load_info_24hours.php?id='+$id,
					dataType: 'json',
					success: function(info){
						console.log(info);
						$('#field_24').show("fast");
						$i=0;
						$.each(info.hour, function() { 
							$('#field_24').find('.date').text(info.date);
							$('#field_24').find('.h_'+$i).text(info.hour[$i]);
							$('#field_24').find('.temperature_'+$i).text(info.temp[$i]);
							$('#field_24').find('.humidity_'+$i).text(info.humidity[$i]);
							++$i
						});
						//alert("info");
					}

				});
			});

				$('#5_days').on('click',function(){
				var $id = $('#location').children(":selected").attr("id");
				console.log($id);
				$('#result').hide("fast");
				$('#field_24').hide("fast");
				$.ajax({
					type: "GET",
					url: 'http://localhost/Weather%20Center/load_info_5days.php?id='+$id,
					dataType: 'json',
					complete: function(info){
						//$json = JSON.parse (info);/ / Convert the JSON format input
						var dates = info.responseJSON.date;
						var temps = info.responseJSON.temp;
						var humidities = info.responseJSON.humidity;
						console.log(dates);
						
						$('#field_5day').show("fast");
						console.log(dates[2]);

						if(dates!=null){
							for(var i=0;i<dates.length;i++){
								if(dates[i]!=0 && temps[i]!=0 && humidities[i]!=0){
									$('#field_5day').find('.date_'+i).text(dates[i]);
									$('#field_5day').find('.temperature_'+i).text(temps[i]);
								 	$('#field_5day').find('.humidity_'+i).text(humidities[i]);
							 	}else{
							 		$('#field_5day').find('.date_'+i).closest('.day_date').hide("fast");
									// $('#field_5day').find('.temperature_'+i).hide("fast");
								 // 	$('#field_5day').find('.humidity_'+i).hide("fast");
							 	}
							}
						}else{
							for(var i=0;i<5;i++){
								$('#field_5day').find('.date_'+i).text("no info");
								$('#field_5day').find('.temperature_'+i).text("no info");
								$('#field_5day').find('.humidity_'+i).text("no info");
							}
						}
					}
					// success: function(info){
					// 	$('#sofia_field_5day').show("fast");
					// 	alert("info");
					// 	$i=0;
					// 	$.each(info.temp, function() { 
					// 	$('#sofia_field_5day').find('.date_'+$i).text(info.date[$i]);
					// 	$('#sofia_field_5day').find('.temperature_'+$i).text(info.temp[$i]);
					// 	$('#sofia_field_5day').find('.humidity_'+$i).text(info.humidity[$i]);
					// 	++$i
					// 	});
					// 	//alert('Successfuly inserter data');
					// },
			/*		error: function(request,error) {
						 console.log(arguments);
						 console.log ( " Can't do because: " + JSON.stringify() );
						}*/
				});
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
	});
	</script>

	});
	</script>


<!-- .................. Ajax end .......................-->
	// <script>
	// 	$(document).ready(function () {
	// 		/* Forecast Sofia */
	// 		$('#option_sofia').on('click', function () {
	// 			$('#plovdiv_forecast').hide("fast").css("display","none");
	// 			$('#stara_zagora_forecast').hide("fast").css("display","none");
	// 			$('#sofia_forecast, #sofia_forecast nav').show("slow").css("display", "inline-block");
 //    		});
 //    		/* Sofia today */
 //    		$('#1').on('click', function () {
 //    			$('#sofia_field_24').hide("fast");
 //    			$('.hidden_fields1').hide("fast");
 //    			$('.hidden_fields2').hide("fast");
 //    			$('#sofia_field_5day').hide("fast");
	// 			$('#sofia_today_field').show("slow");
	// 			$('#1').css("text-decoration", "underline");
	// 			$('#2, #sofia_5day').css("text-decoration", "none");
 //    		});
 //    		/* Sofia 24 hours */
 //    		$('#2').on('click', function () {
 //    			$('#sofia_today_field').hide("fast");
 //    			$('#sofia_field_5day').hide("fast");
 //    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow");
	// 			$('#sofia_field_24').show("slow");
	// 			$('#2').css("text-decoration", "underline");
	// 			$('#sofia_today, #sofia_5day').css("text-decoration", "none");
 //    		});
 //    		$('.forward').on('click', function () {
 //    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').hide("fast");
	// 			$('.hidden_fields1').show("slow").css("display", "table-cell");
 //    		});
 //    		$('.forward1').on('click', function () {
 //    			$('.hidden_fields1').hide("fast");
	// 			$('.hidden_fields2').show("slow").css("display", "table-cell");
	// 		});
	// 		$('.back1').on('click', function () {
 //    			$('.hidden_fields2').hide("fast");
	// 			$('.hidden_fields1').show("slow").css("display", "table-cell");
	// 		});
	// 		$('.back').on('click', function () {
 //    			$('.hidden_fields1').hide("fast");
 //    			$('.hidden_fields2').hide("fast");
	// 			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow").css("display", "table-cell");
	// 		});
	// 		/* Sofia 5 days */
 //    		$('#sofia_5day').on('click', function () {
 //    			$('#sofia_field_24').hide("fast");
 //    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow");
 //    			$('#sofia_today_field').hide("fast");
	// 			$('#sofia_field_5day').show("slow").css("display", "table-cell");
	// 			$('#sofia_5day').css("text-decoration", "underline");
	// 			$('#sofia_24, #sofia_today').css("text-decoration", "none");
 //    		});
 //    		/* Forecast Plovdiv */
 //    		$('#option_plovdiv').on('click', function () {
	// 			$('#sofia_forecast').hide("fast").css("display","none");
	// 			$('#stara_zagora_forecast').hide("fast").css("display","none");
	// 			$('#plovdiv_forecast, #plovdiv_forecast nav').show("slow").css("display", "inline-block");
 //    		});
 //    		/* Plovdiv today */
 //    		$('#plovdiv_today').on('click', function () {
 //    			$('#plovdiv_field_24').hide("fast");
 //    			$('.hidden_fields1').hide("fast");
 //    			$('.hidden_fields2').hide("fast");
 //    			$('#plovdiv_field_5day').hide("fast");
	// 			$('#plovdiv_today_field').show("slow");
	// 			$('#plovdiv_today').css("text-decoration", "underline");
	// 			$('#plovdiv_24, #plovdiv_5day').css("text-decoration", "none");
 //    		});
 //    		/* Plovdiv 24 hours */
 //    		$('#plovdiv_24').on('click', function () {
 //    			$('#plovdiv_today_field').hide("fast");
 //    			$('#plovdiv_field_5day').hide("fast");
 //    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow");
	// 			$('#plovdiv_field_24').show("slow");
	// 			$('#plovdiv_24').css("text-decoration", "underline");
	// 			$('#plovdiv_today, #plovdiv_5day').css("text-decoration", "none");
 //    		});
 //    		$('.forward').on('click', function () {
 //    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').hide("fast");
	// 			$('.hidden_fields1').show("slow").css("display", "table-cell");
 //    		});
 //    		$('.forward1').on('click', function () {
 //    			$('.hidden_fields1').hide("fast");
	// 			$('.hidden_fields2').show("slow").css("display", "table-cell");
	// 		});
	// 		$('.back1').on('click', function () {
 //    			$('.hidden_fields2').hide("fast");
	// 			$('.hidden_fields1').show("slow").css("display", "table-cell");
	// 		});
	// 		$('.back').on('click', function () {
 //    			$('.hidden_fields1').hide("fast");
 //    			$('.hidden_fields2').hide("fast");
	// 			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow").css("display", "table-cell");
	// 		});
	// 		/* Plovdiv 5 days*/
 //    		$('#plovdiv_5day').on('click', function () {
 //    			$('#plovdiv_field_24').hide("fast");
 //    			$('#plovdiv_today_field').hide("fast");
 //    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow");
	// 			$('#plovdiv_field_5day').show("slow").css("display", "table-cell");
	// 			$('#plovdiv_5day').css("text-decoration", "underline");
	// 			$('#plovdiv_24, #plovdiv_today').css("text-decoration", "none");
 //    		});
 //    		/* Forecast Stara Zagora */
 //    		$('#option_Stara Zagora').on('click', function () {
	// 			$('#sofia_forecast').hide("fast").css("display","none");
	// 			$('#plovdiv_forecast').hide("fast").css("display","none");
	// 			$('#stara_zagora_forecast, #stara_zagora_forecast nav').show("slow").css("display", "inline-block");
 //    		});
 //    		/* Stara Zagora today */
 //    		$('#stara_zagora_today').on('click', function () {
 //    			$('#stara_zagora_field_24').hide("fast");
 //    			$('.hidden_fields1').hide("fast");
 //    			$('.hidden_fields2').hide("fast");
 //    			$('#stara_zagora_field_5day').hide("fast");
	// 			$('#stara_zagora_today_field').show("slow");
	// 			$('#stara_zagora_today').css("text-decoration", "underline");
	// 			$('#stara_zagora_24, #stara_zagora_5day').css("text-decoration", "none");
 //    		});
 //    		/* Stara Zagora 24 hours */
 //    		$('#stara_zagora_24').on('click', function () {
 //    			$('#stara_zagora_today_field').hide("fast");
 //    			$('#stara_zagora_field_5day').hide("fast");
 //    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow");
	// 			$('#stara_zagora_field_24').show("slow");
	// 			$('#stara_zagora_24').css("text-decoration", "underline");
	// 			$('#stara_zagora_today, #stara_zagora_5day').css("text-decoration", "none");
 //    		});
 //    		$('.forward').on('click', function () {
 //    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').hide("fast");
	// 			$('.hidden_fields1').show("slow").css("display", "table-cell");
 //    		});
 //    		$('.forward1').on('click', function () {
 //    			$('.hidden_fields1').hide("fast");
	// 			$('.hidden_fields2').show("slow").css("display", "table-cell");
	// 		});
	// 		$('.back1').on('click', function () {
 //    			$('.hidden_fields2').hide("fast");
	// 			$('.hidden_fields1').show("slow").css("display", "table-cell");
	// 		});
	// 		$('.back').on('click', function () {
 //    			$('.hidden_fields1').hide("fast");
 //    			$('.hidden_fields2').hide("fast");
	// 			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow").css("display", "table-cell");
	// 		});
	// 		/* Stara Zagora 5 days*/
 //    		$('#stara_zagora_5day').on('click', function () {
 //    			$('#stara_zagora_field_24').hide("fast");
 //    			$('#stara_zagora_today_field').hide("fast");
 //    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow");
	// 			$('#stara_zagora_field_5day').show("slow").css("display", "table-cell");
	// 			$('#stara_zagora_5day').css("text-decoration", "underline");
	// 			$('#stara_zagora_24, #stara_zagora_today').css("text-decoration", "none");
 //    		});
 //    	});















 //    		/* Forecast Plovdiv 
 //    		$('#option_plovdiv').on('click', function () {
	// 			$('#plovdiv_forecast nav').show("slow").css("display", "inline-block");
	// 			$('#sofia_forecast').hide("fast");
 //    		});
 //    		$('#plovdiv_today').on('click', function () {
 //    			$('#plovdiv_24_pic').hide("fast");
 //    			$('#plovdiv_5day_pic').hide("fast");
	// 			$('#plovdiv_today_pic').show("slow");
 //    		});
 //    		$('#plovdiv_24').on('click', function () {
 //    			$('#plovdiv_today_pic').hide("fast");
 //    			$('#plovdiv_5day_pic').hide("fast");
	// 			$('#plovdiv_24_pic').show("slow");
 //    		});
 //    		$('#plovdiv_5day').on('click', function () {
 //    			$('#plovdiv_24_pic').hide("fast");
 //    			$('#plovdiv_today_pic').hide("fast");
	// 			$('#plovdiv_5day_pic').show("slow");
 //    		});
 //    		Forecast Stara Zagora
 //    		$('#option_stara_zagora').on('click', function () {
	// 			$('#stara_zagora_forecast nav').show("slow").css("display", "inline-block");
	// 			$('#sofia_forecast').hide("fast");
 //    			$('#plovdiv_forecast').hide("fast");
 //    		});
 //    		$('#stara_zagora_today').on('click', function () {
 //    			$('#stara_zagora_24_pic').hide("fast");
 //    			$('#stara_zagora_5day_pic').hide("fast");
	// 			$('#stara_zagora_today_pic').show("slow");
 //    		});
 //    		$('#stara_zagora_24').on('click', function () {
 //    			$('#stara_zagora_today_pic').hide("fast");
 //    			$('#stara_zagora_5day_pic').hide("fast");
	// 			$('#stara_zagora_24_pic').show("slow");
 //    		});
 //    		$('#stara_zagora_5day').on('click', function () {
 //    			$('#stara_zagora_24_pic').hide("fast");
 //    			$('#stara_zagora_today_pic').hide("fast");
	// 			$('#stara_zagora_5day_pic').show("slow");
 //    		});   */ 
		
	// </script>
</body>
</html>