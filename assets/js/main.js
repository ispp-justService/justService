
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
	// 37.3647904 , -5.9885559

	$( "#latitude" ).html( '<input type="hidden" name="latitude" value="'+latitude+'">' );
	$( "#longitude" ).html( '<input type="hidden" name="longitude" value="'+longitude+'">' );
}

