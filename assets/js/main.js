
$(function() {
    getLocation();
});
function getLocation() {
	
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(setPosition,showError);
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

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            alert("User denied the request for Geolocation.");
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Location information is unavailable.");
            break;
        case error.TIMEOUT:
            alert("The request to get user location timed out.");
            break;
        case error.UNKNOWN_ERROR:
            alert("An unknown error occurred.");
            break;
    }
}

function hideShowDiv(id){
	$("#"+id).toggleClass('hidden');
}

