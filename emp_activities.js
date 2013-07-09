$(document).ready(function () {
	$('#emp_submit1').click(function() {

		$.ajax({
			type: "POST",
			url: "add_data.php",
			data: $("#add_data").serialize(),
			success: function(data){
				console.log(data);

	/*$('#warning').show("fast").delay(2000).hide("slow");
	*/	$('#warning').text("Proccesing...");
	if(data==true){
		$('#warning').text("Yep success");
		$('#warning').show("fast").delay(2000).hide("slow");
	}else{
		$('#warning').text("Ooh no can not insert data");
		$('#warning').show("fast").delay(2000).hide("slow");
	}
}
});
	});


	$('#emp_submit').click(function() {	
		$.ajax({
			type: "POST",
			url: "add_day_data.php",
			data: $("#add_data_day").serialize(),
			success: function(data){
				console.log(data);
				$('#warning').text("Proccesing...");
				if(data=="success"){
					$('#warning').text("Yep success");
					$('#warning').show("fast").delay(2000).hide("slow");
				}else{
					$('#warning').text("Ooh no can not insert data");
					$('#warning').show("fast").delay(2000).hide("slow");
				}
			}
		});
	});
	$('#delete').click(function() {
		var hour=$('input[id=hours]').text();
		console.log(hour);
		$.ajax({
			type: "POST",
			url: "del_data.php",
			data: $("#delete_data").serialize(),
			success: function(data){
				console.log(data);
	// $('#warning').show('fast');
	$('#warning').text("Proccesing...");
	if(data==true){
		$('#warning').text("Yep success");
		$('#warning').show("fast").delay(2000).hide("slow");
	}else{
		$('#warning').text("Ooh no can not delete data");
		$('#warning').show("fast").delay(2000).hide("slow");
	}
}
});
	});
	$('#delete1').click(function() {
		$.ajax({
			type: "POST",
			url: "del_data_day.php",
			data: $("#delete_day_data").serialize(),
			success: function(data){
				console.log(data);
				/*$('#warning').show('fast');*/
				$('#warning').text("Proccesing...");
				if(data==true){
					$('#warning').text("Yep success");
					$('#warning').show("fast").delay(2000).hide("slow");
				}else{
					$('#warning').text("Ooh no can not delete data");
					$('#warning').show("fast").delay(2000).hide("slow");
				}
			}
		});
	});

	$('#update').click(function() {
		$.ajax({
			type: "POST",
			url: "update_data.php",
			data: $("#update_data").serialize(),
			success: function(data){
				/*console.log(data);*/
				/*$('#warning').show('fast');*/
				$('#warning').text("Proccesing...");

				if(data==true){

					$('#warning').text("Yep success");
					$('#warning').show("fast").delay(2000).hide("slow");
				}else{
					$('#warning').text("Ooh no can not update data!");
					$('#warning').show("fast").delay(2000).hide("slow");
				}
			}
		});
	});
	$('#update1').click(function() {
		$.ajax({
			type: "POST",
			url: "update_data_day.php",
			data: $("#update_day_data").serialize(),
			success: function(data){
				console.log(data);
				/*$('#warning').show('fast');*/
				$('#warning').text("Proccesing...");
				if(data==true){
					$('#warning').text("Yep success");
					$('#warning').show("fast").delay(2000).hide("slow");
				}else{
					$('#warning').text("Ooh no can not update data!");
					$('#warning').show("fast").delay(2000).hide("slow");
				}
			}
		});
	});
	$('#add').click(function() {
		$("#delete_data").hide("fast");
		$("#delete_day_data").hide("fast");	
		$("#update_data").hide("fast");	
		$("#update_day_data").hide("fast");
		$("#add_data").show("slow");	
		$("#add_data_day").show("slow");		 
	});
	$('#del').click(function() {
		$("#add_data").hide("fast");
		$("#add_data_day").hide("fast");
		$("#update_data").hide("fast");
		$("#update_day_data").hide("fast");	
		$("#delete_data").show("slow");	

		$("#delete_day_data").show("slow");
		$('#updt').css("margin-right", "370px");		 

	});
	$('#updt').click(function() {
		$("#add_data").hide("fast");
		$("#add_data_day").hide("fast");	
		$("#delete_data").hide("fast");	
		$("#delete_day_data").hide("fast");	
		$("#update_data").show("slow");	
		$("#update_day_data").show("slow");	 

	});
});