<html>

<p id="demo1"></p>
<p id="demo2"></p>

<script>

    window.onload = getLocation();
    var y = document.getElementById("demo1");
    var x = document.getElementById("demo2");
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(getMeteo);
        } else {
            x.innerHTML = "La géolocalisation n'est pas disponible sur cet appareil.";
        }
    }

    function getMeteo(position){
        var requestURL = "https://www.prevision-meteo.ch/services/json/lat="+position.coords.latitude+"lng="+position.coords.longitude ;
        var request = new XMLHttpRequest();
        request.open('GET', requestURL);
        request.responseType = 'json';
        request.send();
        request.onload = function (){
            var meteo = request.response;
            x.innerHTML = "Position : latitude= " + position.coords.latitude +"<br/> longitude=  " + position.coords.latitude;
            y.innerHTML = "Température actuelle:" + meteo.current_condition.tmp +"°C";
        }
    }

</script>

</html>