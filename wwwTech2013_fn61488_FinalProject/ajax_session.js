$(document).ready(function(){
$.ajax({
	    type: "POST",
	    url: "session.php",
	    success: function(data){
	    	console.log("session invoked");
	    	console.log(data);
	    	if(data==true){
	    		$('#warning').hide('fast');
	    		$('#content').show('fast');
	    		$('#login').hide('fast');
	    		$('#logout').show('fast');
	    		$.ajax({
	    			type: "POST",
				    url: "load_locations.php",
				    dataType: 'json',
				    success: function(data){
				    	console.log(data.name[1]);
				    	var i=0;
				    	$.each(data.name, function() { 
				    		$(".location").append(new Option(data.name[i], data.id[i]+"|"+data.name[i]));
				    		++i;
				    	});
				    }
	    		});
	    	}else{
	    		$('#warning').text("You first have to log in!");
		    	$('#content').hide('fast');
		    	$('#login').show('fast');
	    		$('#logout').hide('fast');
	    	}
	    }
	});
});