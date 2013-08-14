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
				$('#sofia_24_field').show("slow");
				$('#sofia_24').css("text-decoration", "underline");
				$('#sofia_today, #sofia_5day').css("text-decoration", "none");
    		});
    		$('.hour_5 button').on('click', function () {
    			$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').hide("fast");
				$('.hidden_fields1').show("slow").css("display", "table-cell");
    		});
    		$('.hidden_fields1 button').on('click', function () {
    			$('.hidden_fields1').hide("fast");
				$('.hidden_fields2').show("slow").css("display", "table-cell");
			});
			$('.hidden_fields2 button').on('click', function () {
    			$('.hidden_fields2').hide("fast");
				$('.hidden_fields1').show("slow").css("display", "table-cell");
			});
			$('.back').on('click', function () {
    			$('.hidden_fields1').hide("fast");
    			$('.hidden_fields2').hide("fast");
				$('.hour_1, .hour_2, .hour_3, .hour_4, .hour_5').show("slow").css("display", "table-cell");
			});

			/*
			$('#sofia_today').on('click', function () {
    			$('#sofia_24_field').hide("fast");
    			$('.hidden_fields1').hide("fast");
    			$('.hidden_fields2').hide("fast");
    			$('#sofia_5day_field').hide("fast");
				$('#sofia_today_field').show("slow");
				$('#sofia_today').css("text-decoration", "underline");
				$('#sofia_24, #sofia_5day').css("text-decoration", "none");
    		});
			*/
    		$('#sofia_5day').on('click', function () {
    			$('#sofia_24_field').hide("fast");
    			$('.hidden_fields1').hide("fast");
    			$('.hidden_fields2').hide("fast");
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
    		$('#plovdiv_today').on('click', function () {
    			$('#plovdiv_24_pic').hide("fast");
    			$('#plovdiv_5day_pic').hide("fast");
				$('#plovdiv_today_pic').show("slow");
				$('#plovdiv_today').css("text-decoration", "underline");
				$('#plovdiv_24, #plovdiv_5day').css("text-decoration", "none");
    		});
    		$('#plovdiv_24').on('click', function () {
    			$('#plovdiv_today_pic').hide("fast");
    			$('#plovdiv_5day_pic').hide("fast");
				$('#plovdiv_24_pic').show("slow");
				$('#plovdiv_24').css("text-decoration", "underline");
				$('#plovdiv_today, #plovdiv_5day').css("text-decoration", "none");
    		});
    		$('#plovdiv_5day').on('click', function () {
    			$('#plovdiv_24_pic').hide("fast");
    			$('#plovdiv_today_pic').hide("fast");
				$('#plovdiv_5day_pic').show("slow");
				$('#plovdiv_5day').css("text-decoration", "underline");
				$('#plovdiv_24, #plovdiv_today').css("text-decoration", "none");

    		});
    		/* Forecast Stara Zagora */
    		$('#option_stara_zagora').on('click', function () {
    			$('#sofia_forecast').hide("fast").css("display","none");
				$('#plovdiv_forecast').hide("fast").css("display","none");
				$('#stara_zagora_forecast, #stara_zagora_forecast nav').show("slow").css("display", "inline-block");
    		});
    		$('#stara_zagora_today').on('click', function () {
    			$('#stara_zagora_24_pic').hide("fast");
    			$('#stara_zagora_5day_pic').hide("fast");
				$('#stara_zagora_today_pic').show("slow");
				$('#stara_zagora_today').css("text-decoration", "underline");
				$('#stara_zagora_24, #stara_zagora_5day').css("text-decoration", "none");
    		});
    		$('#stara_zagora_24').on('click', function () {
    			$('#stara_zagora_today_pic').hide("fast");
    			$('#stara_zagora_5day_pic').hide("fast");
				$('#stara_zagora_24_pic').show("slow");
				$('#stara_zagora_24').css("text-decoration", "underline");
				$('#stara_zagora_today, #stara_zagora_5day').css("text-decoration", "none");
    		});
    		$('#stara_zagora_5day').on('click', function () {
    			$('#stara_zagora_24_pic').hide("fast");
    			$('#stara_zagora_today_pic').hide("fast");
				$('#stara_zagora_5day_pic').show("slow");
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
	