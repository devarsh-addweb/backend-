function dev(){
    var gandhinagar = {lat: 23.2156, lng: 72.6369};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center: gandhinagar
    });

    var map = new google.maps.map({
        position: gandhinagar,
        map: map
    });
}

