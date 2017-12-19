
$(document).ready(function () {

    if (navigator.geolocation) {

        var watchID = navigator.geolocation.getCurrentPosition(myPositionCallBackFunction,
                                                            myPositionErrorCallbackFunction,
                                                          { enableHighAccuracy: true, timeout: 5000 });
    }
    else {
        alert("Esse lixo não suporta GEOLOCATION!");
    }


    function myPositionCallBackFunction(position) {

        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;

        var divMap = document.getElementById("mapa");
        var gLatLong = new google.maps.LatLng(latitude, longitude);
        var objConf = {
            zoom: 17,
            center: gLatLong
        }
        var gMapa = new google.maps.Map(divMap, objConf);
        //alert(latitude, longitude);
    }


    function myPositionErrorCallbackFunction(error) {
        var errorMessage = error.message;
        var errorCode = error.code;
        window.alert("Error: " + errorMessage + "/n Code:  " + errorCode);

    }

});