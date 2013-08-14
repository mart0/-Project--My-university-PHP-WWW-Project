$(document).ready(function () {
    function toggle_inputs() {
   var inputs=document.getElementsByTagName('input');
	for(i=0;i<inputs.length;i++){
    inputs[i].disabled=false;
	}  
}
});