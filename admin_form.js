$(document).ready(function () {
    function toggle_inputs() {
   var inputs=document.getElementsByTagName('input');
	for(i=0;i<inputs.length;i++){
    inputs[i].disabled=false;
	}  
}
});

$(document).ready(function () {
		

    	$('#add_emp').click(function() {
    		$('#location_form').hide("fast");
    		$('#assign_form').hide("fast");
    		$('#del_location').hide("fast");
    		$('#del_employee').hide("fast");
    		$('#edit_employee').hide("fast");
    		$('#employee_form').show("slow");

        });
    	$('#admin_submit').click(function() {

    			$.ajax({
				    type: "POST",
				    url: "form_employee.php",
				    data: $("#employee_form").serialize(),
				    success: function(data){
				    	console.log(data);
				    	$('#warning').show('fast');
				    	$('#warning').text("Proccesing...");
				    	if(data==true){
				    		$('#warning').text("Yep success");
				    	}else{

				    		$('#warning').text("Ooh no can not insert data or this user name allready exist");
				    	}
				    }
				 });

    	});

        
        $('#add_loc').click(function() {
        	$('#employee_form').hide("fast");
    		$('#assign_form').hide("fast");
    		$('#del_location').hide("fast");
    		$('#del_employee').hide("fast");
    		$('#edit_employee').hide("fast");
        	$("#location_form").show("slow").css("display","inline-block","float","right");
    	});

        $('#loc_submit').click(function() {

    			$.ajax({
				    type: "POST",
				    url: "form_location.php",
				    data: $("#location_form").serialize(),
				    success: function(data){
				    	console.log(data);
				    	$('#warning').show('fast');
				    	$('#warning').text("Proccesing...");
				    	if(data==true){
				    		$('#warning').text("Yep success");
				    	}else{

				    		$('#warning').text("Ooh no can not assign this location to this employee");
				    	}
				    }
				 });

    	});
    	
        

    	$('#assign').click(function() {
    		$('#location_form').hide("fast");
    		$('#employee_form').hide("fast");
    		$('#del_location').hide("fast");
    		$('#del_employee').hide("fast");
    		$('#edit_employee').hide("fast");
    		$('#assign_form').show("slow");
        });

    	$('#assing_submit').click(function() {

    			$.ajax({
				    type: "POST",
				    url: "assign_form.php",
				    data: $("#assign_form").serialize(),
				    success: function(data){
				    	console.log(data);
				    	$('#warning').show('fast');
				    	$('#warning').text("Proccesing...");
				    	if(data==true){
				    		$('#warning').text("Yep success");
				    	}else{

				    		$('#warning').text("Ooh no can not assign this location to this employee");
				    	}
				    }
				 });

    	});
    	

        $('#del_loc').click(function() {
    		$('#location_form').hide("fast");
    		$('#employee_form').hide("fast");
    		$('#assign_form').hide("fast");
    		$('#del_employee').hide("fast");
    		$('#edit_employee').hide("fast");
    		$('#del_location').show("slow");
        });
        $('#del_emp').click(function() {
    		$('#location_form').hide("fast");
    		$('#employee_form').hide("fast");
    		$('#assign_form').hide("fast");
    		$('#del_location').hide("fast");
    		$('#edit_employee').hide("fast");
    		$('#del_employee').show("slow");
        });
        $('#edit').click(function() {
    		$('#location_form').hide("fast");
    		$('#employee_form').hide("fast");
    		$('#assign_form').hide("fast");
    		$('#del_location').hide("fast");
    		$('#del_employee').hide("fast");
    		$('#edit_employee').show("slow");
        });
	});   