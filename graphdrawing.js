function drawtemps(temps){
	var canvas = document.getElementById('tempgraph');
	var context = canvas.getContext("2d");
	
	var canvasHeight = 200;
	var canvasWidth = 800;
	var temperatureRadius = 3;
	var canvasRadiusBuffer = 2*temperatureRadius;
	var canvasTextBuffer = 30;
	var canvasTopBuffer = 20;
	var minTemp = -40;
	var maxTemp = 40;
	var length = temps.length;
	var pixPerCelcius = (canvasHeight/(maxTemp-minTemp));

	context.fillStyle = "rgb(255,0,0)";
	context.strokeStyle = "rgb(255,0,0)";
	for (var i = minTemp; i<=maxTemp ; i+=5) {
	 	context.fillText(i + "deg.",810,(-(i+minTemp))*pixPerCelcius + temperatureRadius + canvasTopBuffer);
	};
	//var temps = new Array(8,NaN,NaN,18,40,23,NaN,24,-40,21,15,12);
	var data = new Array();
	for (var counter = 0; counter < length;) {
		var temp1_x = (canvasWidth/12)*counter + temperatureRadius + 15;
		var temp1_y = (-(temps[counter]+minTemp))*pixPerCelcius + temperatureRadius + canvasTopBuffer;
		context.beginPath();
	 	context.arc(temp1_x,temp1_y,temperatureRadius,0,2*Math.PI);
	 	//context.fillText(temps[counter].toFixed(1) + " deg.",temp1_x ,temp1_y - 10);

	 	context.fill();

	 	context.save();
		context.fillStyle = "rgb(0,0,0)";

	 	context.fillText((2+counter*2) + ":00",temp1_x - 10,canvasTopBuffer + canvasHeight+canvasRadiusBuffer+canvasTextBuffer/2);
	 	var nulls = 0;
	 	var oldtemp = temps[counter];
	 	data.push(temps[counter]);

		while(isNaN(temps[++counter]) == true){
	 		if(counter > 11) break; 
	 		nulls++;
	 		context.fillText((2+counter*2) + ":00",(canvasWidth/12)*counter + temperatureRadius + 15 - 10,canvasTopBuffer + canvasHeight+canvasRadiusBuffer+canvasTextBuffer/2);
			
		};
		var newtemp = temps[counter];
		var temp2_x = (canvasWidth/12)*counter + temperatureRadius + 15;
		var temp2_y = (-(temps[counter]+minTemp))*pixPerCelcius + temperatureRadius + canvasTopBuffer;
		
		for(var i = 0; i < nulls; i++){
			context.beginPath();
			var x = (canvasWidth/12)*(counter - nulls + i) + temperatureRadius + 15;
			var temp = newtemp * ((i+1)/(nulls+1)) + oldtemp * ((nulls-i)/(nulls+1));
			data.push(temp);
			var y = (-(temp+minTemp))*pixPerCelcius + temperatureRadius + canvasTopBuffer;
		 	context.arc(x,y,temperatureRadius,0,2*Math.PI);
		 	//context.fillText(temp.toFixed(1) + " deg.",x ,y - 10);
		 	context.fill();
		}

		context.restore();

	 	context.beginPath();
	 	context.moveTo(temp1_x,temp1_y);
	 	context.lineTo((canvasWidth/12)*counter + 15,canvasTopBuffer + (-(temps[counter]+minTemp))*pixPerCelcius + temperatureRadius);
	 	context.stroke();


	};
	console.log(data);
	return data;
}

function drawhumidities(humidities){
	var canvas = document.getElementById('humgraph');
	var context = canvas.getContext("2d");
	
	var canvasHeight = 200;
	var canvasWidth = 800;
	var temperatureRadius = 3;
	var canvasRadiusBuffer = 2*temperatureRadius;
	var canvasTextBuffer = 30;
	var canvasTopBuffer = 20;
	var minHum = 0;
	var maxHum = 100;
	var length = humidities.length;
	var pixPerCelcius = (canvasHeight/(maxHum-minHum));

	context.fillStyle = "rgb(255,0,0)";
	context.strokeStyle = "rgb(255,0,0)";
	for (var i = minHum; i<=maxHum ; i+=10) {
	 	context.fillText(i + "%",810,(-(i+minHum))*pixPerCelcius + temperatureRadius + canvasTopBuffer);
	};
	
	//var temps = new Array(8,NaN,NaN,18,40,23,NaN,24,-40,21,15,12);

var data1 = new Array();
	for (var counter = 0; counter < length;) {
		var hum1_x = (canvasWidth/12)*counter + temperatureRadius + 15;
		var hum1_y = (-(humidities[counter]+minHum))*pixPerCelcius + temperatureRadius + canvasTopBuffer;
		context.beginPath();
	 	context.arc(hum1_x,hum1_y,temperatureRadius,0,2*Math.PI);
	 	context.fillText(humidities[counter] + "%",hum1_x ,hum1_y - 10);
	 	context.fill();
	 	context.save();
		context.fillStyle = "rgb(0,0,0)";
	 	context.fillText((2+counter*2) + ":00",hum1_x - 10,canvasTopBuffer + canvasHeight+canvasRadiusBuffer+canvasTextBuffer/2);
	 	var nulls = 0;
	 	var oldHum = humidities[counter];
	 	data1.push(humidities[counter]);
		while(isNaN(humidities[++counter]) == true){
	 		if(counter > 11) break; 
	 		nulls++;
	 		context.fillText((2+counter*2) + ":00",(canvasWidth/12)*counter + temperatureRadius + 15 - 10,canvasTopBuffer + canvasHeight+canvasRadiusBuffer+canvasTextBuffer/2);
			
		};

		var newHum = humidities[counter];
		var hum2_x = (canvasWidth/12)*counter + temperatureRadius + 15;
		var hum2_y = (-(humidities[counter]+minHum))*pixPerCelcius + temperatureRadius + canvasTopBuffer;
			
			for(var i = 0; i < nulls; i++){
			context.beginPath();
			var x = (canvasWidth/12)*(counter - nulls + i) + temperatureRadius + 15;
			var hum = newHum * ((i+1)/(nulls+1)) + oldHum * ((nulls-i)/(nulls+1));
			data1.push(hum);
			var y = (-(hum+minHum))*pixPerCelcius + temperatureRadius + canvasTopBuffer;
		 	context.arc(x,y,temperatureRadius,0,2*Math.PI);
		 	//context.fillText(hum.toFixed(1) + " deg.",x ,y - 10);
		 	context.fill();
		}
		
		context.restore();

	 	context.beginPath();
	 	context.moveTo(hum1_x,hum1_y);
	 	context.lineTo((canvasWidth/12)*counter + 15,canvasTopBuffer + (-(humidities[counter]+minHum))*pixPerCelcius + temperatureRadius);
	 	context.stroke();

	 	
	}
	console.log(data1);
	 	return data1;

}


$(document).ready(function(){
			$('#today').on('click',function(){
				var $id = $('#location').children(":selected").attr("id");
				console.log($id);
				$('#result').hide("fast");
				$('#field_24').hide("fast");
				$('#field_5day').hide("fast");
				$('#tempgraph').hide("fast");
				$('#humgraph').hide("fast");
				$('#fiveday_chart').hide('fast');
				$.ajax({
					type: "GET",
					url: 'http://localhost/Weather%20Center/load_info.php?id='+$id,
					dataType: 'json',
					success: function(info){
						$('#result').show("fast");
						var img=parseInt(info.image_id);
						console.log(img);
						switch(img)
						{
						case 1:
						  $('#result').find('#today_image').attr("src","images/sunny.png");
						  break;
						case 2:
						  $('#result').find('#today_image').attr("src","images/cloudy.png");
						  break;
						  case 3:
						  $('#result').find('#today_image').attr("src","images/rainy.png");
						  break;
						
						}
						$('#result').find('.date').text(info.date);
						$('#result').find('.temperature').text(info.temperature);
						$('#result').find('.humidity').text(info.humidity);
						//alert('Successfuly inserter data');
					}

				});
			});
			$('.forward').on('click', function () {
     			$('.hour_0, .hour_1, .hour_2, .hour_3, .hour_4').hide("fast");
     			$('.hidden_fields2').hide("fast");
				$('.hidden_fields1').show("slow").css("display", "table-cell");
    		});
    		$('.forward1').on('click', function () {
    			$('.hidden_fields1').hide("fast");
    			$('.hour_0, .hour_1, .hour_2, .hour_3, .hour_4').hide("fast");
				$('.hidden_fields2').show("slow").css("display", "table-cell");
			});
			$('.back').on('click', function () {
    			$('.hidden_fields1').hide("fast");
    			$('.hidden_fields2').hide("fast");
				$('.hour_0, .hour_1, .hour_2, .hour_3, .hour_4').show("slow").css("display", "table-cell");	
			});
			$('.back1').on('click', function () {
    			$('.hidden_fields2').hide("fast");
    			$('.hour_0, .hour_1, .hour_2, .hour_3, .hour_4').hide("fast");
				$('.hidden_fields1').css("display", "table-cell").show("slow");
			});

			$('#24_hour').on('click',function(){
				var $id = $('#location').children(":selected").attr("id");
				console.log($id);
				$('#result').hide("fast");
				$('#field_5day').hide("fast");
				$('#tempgraph').hide("fast");
				$('#humgraph').hide("fast");
				$('#fiveday_chart').hide('fast');
				$.ajax({
					type: "GET",
					url: 'http://localhost/Weather%20Center/load_info_24hours.php?id='+$id,
					dataType: 'json',
					success: function(info){
						console.log(info);
						
						var temps=[NaN,NaN, NaN, NaN, NaN,NaN, NaN, NaN,NaN,NaN,NaN,NaN];
						var hums=[NaN,NaN, NaN, NaN, NaN,NaN, NaN, NaN,NaN,NaN,NaN,NaN];
						var images=[NaN,NaN, NaN, NaN, NaN,NaN, NaN, NaN,NaN,NaN,NaN,NaN];
						var hours=[NaN,NaN, NaN, NaN, NaN,NaN, NaN, NaN,NaN,NaN,NaN,NaN];
						//console.log("info humidities:"+humidities)
						for(var k=0; k<info.hour.length;){
						//console.log(k);
						switch(parseInt(info.hour[k]))
							{
							case 2:
							//console.log(info.hour[k]);
							  temps[0]=info.temp[k];
							  images[0]=info.image_id[k];
							  hours[0]=info.hour[k];
							  //console.log("temp0:"+temps[0]);
							  hums[0]=info.humidity[k];
							  //k++;
							  break;
							case 4:
							  temps[1]=info.temp[k];
							  images[1]=info.image_id[k];
							  hours[1]=info.hour[k];
							 // console.log(info.hour[k]);
							 // console.log("temp1:"+temps[1]);
							  hums[1]=info.humidity[k];
							  //k++;
							  break;
							case 6:
							//console.log(info.hour[k]);
							 temps[2]=info.temp[k];
							 images[2]=info.image_id[k];
							  hours[2]=info.hour[k];
							 //console.log("temp2:"+temps[2]);
							 hums[2]=info.humidity[k];
							 //k++;
							  break;
							case 8:
							  temps[3]=info.temp[k];
							  images[3]=info.image_id[k];
							  hours[3]=info.hour[k];
							  //console.log("temp3:"+temps[3]);
							  hums[3]=info.humidity[k];
							 // k++;
							  break;
							 case 10:
							  temps[4]=info.temp[k];
							  images[4]=info.image_id[k];
							  hours[4]=info.hour[k];
							  console.log("temp4 :"+temps[4]);
							  hums[4]=info.humidity[k];
							  //k++;
							 break;
							 case 12:
							  temps[5]=info.temp[k];
							  images[5]=info.image_id[k];
							  hours[5]=info.hour[k];
							  console.log("temp5 :"+temps[5]);
							  hums[5]=info.humidity[k];
							 // k++;
							 break;
							 case 14:
							 images[6]=info.image_id[k];
							  hours[6]=info.hour[k];
							  temps[6]=info.temp[k];
							  hums[6]=info.humidity[k];
							 // k++;
							 break;
							 case 16:
							 images[7]=info.image_id[k];
							  hours[7]=info.hour[k];
							  temps[7]=info.temp[k];
							  hums[7]=info.humidity[k];
							  //k++;
							 break;
							 case 18:
							 images[8]=info.image_id[k];
							  hours[8]=info.hour[k];
							  temps[8]=info.temp[k];
							  hums[8]=info.humidity[k];
							 // k++;
							 break;
							 case 20:
							 images[9]=info.image_id[k];
							  hours[9]=info.hour[k];
							  temps[9]=info.temp[k];
							  hums[9]=info.humidity[k];
							 // k++;
							 break;
							 case 22:
							 images[10]=info.image_id[k];
							  hours[10]=info.hour[k];
							  temps[10]=info.temp[k];
							  hums[10]=info.humidity[k];
							  //k++;
							 break;
							  case 24:
							  images[11]=info.image_id[k];
							  hours[11]=info.hour[k];
							  temps[11]=info.temp[k];
							  hums[11]=info.humidity[k];
							 // k++;
							 break;
							}
							k++;
					}
							console.log("Array temps end if switch:"+temps);
							console.log("Array hums end if switch:"+hums);
							console.log(k);
						//$.each(info.hour, function() 
						for (var i=0;i<12;i++){ 
							if(info.date!=0 && temps[i]!=NaN && hums[i]!=NaN && images[i]!=NaN && hours[i]!=NaN){
								
								var img=parseInt(images[i]);
								//console.log(info.temp[i]);
								switch(img)
								{
								case 1:
								  $('#field_24').find('.hour_'+i).find('.image').attr("src","images/sunny.png");
								  break;
								case 2:
								  $('#field_24').find('.hour_'+i).find('.image').attr("src","images/cloudy.png");
								  break;
								  case 3:
								  $('#field_24').find('.hour_'+i).find('.image').attr("src","images/rainy.png");
								  break;
								}
									$('#field_24').find('.date').text(info.date);
									$('#field_24').find('.h_'+i).text(hours[i]);
									$('#field_24').find('.temperature_'+i).text(temps[i]);
									$('#field_24').find('.humidity_'+i).text(hums[i]);
									$('#field_24').find('.hour_'+i).show('fast');
									$('.hour_0, .hour_1, .hour_2, .hour_3, .hour_4').show('fast');

									$('.hidden_fields1, .hidden_fields2').hide("fast");
							
							}else{
								$('#field_24').find('.date').text('no info');
									//$('#field_24').find('.h_'+i).text('no info');
									$('#field_24').find('.temperature_'+i).text('no info');
									$('#field_24').find('.humidity_'+i).text('no info');
								//$('#field_24').find('.hour_'+i).hide('fast');
								//$('#field_24').find('.hour_'+i).css('display', 'none');
								
							}
						}
							//++i;
						//});
						$('#field_24').show("fast");
						//alert("info");
					}

				});
			});

				$('#5_days').on('click',function(){
				var $id = $('#location').children(":selected").attr("id");
				console.log($id);
				$('#result').hide("fast");
				$('#field_24').hide("fast");
				$('#tempgraph').hide("fast");
				$('#humgraph').hide("fast");
				$.ajax({
					type: "GET",
					url: 'http://localhost/Weather%20Center/load_info_5days.php?id='+$id,
					dataType: 'json',
					complete: function(info){
						//$json = JSON.parse (info);/ / Convert the JSON format input
						var dates = info.responseJSON.date;
						var temps = info.responseJSON.temp;
						var humidities = info.responseJSON.humidity;
						var image=info.responseJSON.image;
						console.log(dates);
						
						$('#field_5day').show("fast");
						console.log(dates[2]);

						if(dates!=null){
							for(var i=0;i<dates.length;i++){
								if(dates[i]!=0 && temps[i]!=0 && humidities[i]!=0 && image[i]!=0){
									var img=parseInt(image[i]);
									console.log(img);
									switch(img)
									{
									case 1:
									  $('#field_5day').find('#day_date_'+i).find('.image').attr("src","images/sunny.png");
									  break;
									case 2:
									  $('#field_5day').find('#day_date_'+i).find('.image').attr("src","images/cloudy.png");
									  break;
									  case 3:
									  $('#field_5day').find('#day_date_'+i).find('.image').attr("src","images/rainy.png");
									  break;
									}
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
						var ctx = $("#fiveday_chart").get(0).getContext("2d");
						var my5DayChart = new Chart(ctx);
						var data = {
							labels : dates,
							datasets : [
								{
						
									fillColor : "rgba(240,0,0,0.5)",
									strokeColor : "rgba(220,220,220,1)",
									pointColor : "rgba(220,220,220,1)",
									pointStrokeColor : "#fff",
									data : drawtemps(temps)
								},
							
								{
									fillColor : "rgba(0,50,240,0.5)",
									strokeColor : "rgba(220,220,220,1)",
									pointColor : "rgba(220,220,220,1)",
									pointStrokeColor : "#fff",
									data : drawhumidities(humidities)
								},
								
							]
						}
						new Chart(ctx).Line(data,options);
						$('#fiveday_chart').show('fast');
					}
					
				});
			});
			

			$('#graphics').on('click',function(){
				$('#result').hide("fast");
				$('#field_5day').hide("fast");
				$('#field_24').hide("fast");
				$('#fiveday_chart').hide('fast');
				
				var id = $('#location').children(":selected").attr("id");
				var temps=new Array();
				var humidities=new Array();
				var ctx = $("#tempgraph").get(0).getContext("2d");
				var myTempChart = new Chart(ctx);
				var ctx1 = $("#humgraph").get(0).getContext("2d");
				var myHumChart = new Chart(ctx);
				$.ajax({
					type: "GET",
					url: 'http://localhost/Weather%20Center/load_info_24hours.php?id='+id,
					dataType: 'json',
					success: function(info){
						console.log(info);
						$('#tempgraph').show("fast");
						$('#humgraph').show("fast");
						tempers=info.temp;
						humidities=info.humidity;
						var hours=info.hour;
						console.log("array hours:"+hours);
						console.log("array temps json:"+info.temp);
						for(var i = 0; i < tempers.length;i++){
							tempers[i] = parseInt(tempers[i]);
							humidities[i] = parseInt(humidities[i]);
						}
						var temps=[NaN,NaN, NaN, NaN, NaN,NaN, NaN, NaN,NaN,NaN,NaN,NaN];
						var hums=[NaN,NaN, NaN, NaN, NaN,NaN, NaN, NaN,NaN,NaN,NaN,NaN];
						console.log("info humidities:"+humidities)
						for(var k=0; k<info.hour.length;){
						//console.log(k);
						switch(parseInt(hours[k]))
							{
							case 2:
							console.log(info.hour[k]);
							  temps[0]=info.temp[k];
							  console.log("temp0:"+temps[0]);
							  hums[0]=info.humidity[k];
							  //k++;
							  break;
							case 4:
							  temps[1]=info.temp[k];
							  console.log(info.hour[k]);
							  console.log("temp1:"+temps[1]);
							  hums[1]=info.humidity[k];
							  //k++;
							  break;
							case 6:
							console.log(info.hour[k]);
							 temps[2]=info.temp[k];
							 console.log("temp2:"+temps[2]);
							 hums[2]=info.humidity[k];
							 //k++;
							  break;
							case 8:
							  temps[3]=info.temp[k];
							  console.log("temp3:"+temps[3]);
							  hums[3]=info.humidity[k];
							 // k++;
							  break;
							 case 10:
							  temps[4]=info.temp[k];
							  console.log("temp4 :"+temps[4]);
							  hums[4]=info.humidity[k];
							  //k++;
							 break;
							 case 12:
							  temps[5]=info.temp[k];
							  console.log("temp5 :"+temps[5]);
							  hums[5]=info.humidity[k];
							 // k++;
							 break;
							 case 14:
							  temps[6]=info.temp[k];
							  hums[6]=info.humidity[k];
							 // k++;
							 break;
							 case 16:
							  temps[7]=info.temp[k];
							  hums[7]=info.humidity[k];
							  //k++;
							 break;
							 case 18:
							  temps[8]=info.temp[k];
							  hums[8]=info.humidity[k];
							 // k++;
							 break;
							 case 20:
							  temps[9]=info.temp[k];
							  hums[9]=info.humidity[k];
							 // k++;
							 break;
							 case 22:
							  temps[10]=info.temp[k];
							  hums[10]=info.humidity[k];
							  //k++;
							 break;
							  case 24:
							  temps[11]=info.temp[k];
							  hums[11]=info.humidity[k];
							 // k++;
							 break;
							}
							k++;
					}
							console.log("Array temps end if switch:"+temps);
							console.log("Array hums end if switch:"+hums);
							console.log(k);
							
						//var array_temp=new Array();

						console.log("hums : "+drawhumidities(hums));

						var data1 = {
							labels : ["2:00","4:00","6:00","8:00","10:00","12:00","14:00","16:00","18:00","20:00","22:00","24:00"],
							datasets : [
								{
						
									fillColor : "rgba(240,0,0,0.5)",
									strokeColor : "rgba(220,220,220,1)",
									pointColor : "rgba(220,220,220,1)",
									pointStrokeColor : "#fff",
									data : drawtemps(temps)
								},
								
							]
						}
						var data2 = {
							labels : ["2:00","4:00","6:00","8:00","10:00","12:00","14:00","16:00","18:00","20:00","22:00","24:00"],
							datasets : [
								{
									fillColor : "rgba(0,50,240,0.5)",
									strokeColor : "rgba(220,220,220,1)",
									pointColor : "rgba(220,220,220,1)",
									pointStrokeColor : "#fff",


									data : drawhumidities(hums)

								},
								
							]
						}
				
						drawtemps(temps);
						drawhumidities(humidities);
						new Chart(ctx).Line(data1,options);
						new Chart(ctx1).Line(data2,options);
						//Chart.scaleFontColor="#666";
						//console.log(temps);
						}
						
				});
			});
	
});