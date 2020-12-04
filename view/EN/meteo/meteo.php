<main>

<p id="tempImage"></p><img alt="temp" src="/assets/temperature/medium.png" style="width: 100px;" id='itemp'>
<p id="temp"></p>
    <p id="wind"></p>
<img src="/assets/crewmates/brown.png" alt="brown" id="brown" class="au" onclick="document.getElementById('brown').src='/assets/crewmates/brown-dead.png'" style="width: 50px;">

    <script>

    window.onload = getLocation();
    var y = document.getElementById("tempImage");
    var x = document.getElementById("temp");
    var x = document.getElementById("wind");
    var itemp = document.getElementById('itemp');
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(getMeteo);
        } else {
            x.innerHTML = "Geolocation is not available on this machine.";
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
            temp = meteo.current_condition.tmp;
            y.innerHTML = "Current condition:" + temp +"°C";
            if(temp>=-273 && temp<22) {
                itemp.src = "/assets/temperature/cold.png";
            }
            else if(temp>=22 && temp<27){
                itemp.src = "/assets/temperature/medium.png";
            }
            else if(temp>=27 && temp<200){
                itemp.src = "/assets/temperature/hot.png";
            }
            z.innerHTML = "There is currently a wind " + meteo.current_condition.wnd_dir + " going up to " + meteo.current_condition.wnd_spd + "km/h with blowings up to " + meteo.current_condition.wnd_gust + "km/h.";
        }
    }

    function tempLogo(){

    }
</script>

</main>