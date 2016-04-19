
$(function() {
    getLocation();
});
function getLocation() {
	
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(setPosition);
	} else { 
		alert("Your Device does not support HTML5 GeoLocation");
	}
}
function setPosition(position){
	latitude = position.coords.latitude;
	longitude = position.coords.longitude;

	$.ajax({url: window.location.href+"/index.php/main/set_current_coords/"+latitude+"/"+longitude, success: function(result){
        //alert(result);
    }});
}	
