<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html,body{
            margin:0;
            padding:0;
            height:100%;
        }
        #map{
           height: 90%;
           width:100%;
        }
    </style>
</head>
<body>
    <div id="map"></div>


    <script>
        function initMap() {
         let map;
         const image =
    "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png";
         const location={
             lat:28.6158253779028,
             lng:77.37250863636356
         }

         map=new google.maps.Map(document.getElementById('map'),{
             center:location,
             zoom:18
         });

         marker=new google.maps.Marker({
             position:location,
             map,
             icon:image,
             title:"Current Location"
         });

         infoWindow=new google.maps.InfoWindow();

         let locationBtn=document.createElement("button");

         locationBtn.textContent="Find Current Loaction";

         locationBtn.classList.add('custom-map-control-button');

         map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationBtn);

         locationBtn.addEventListener("click",()=>{

            if(navigator.geolocation){

                navigator.geolocation.getCurrentPosition((position)=>{

const pos={
    lat:position.coords.latitude,
    lng:position.coords.longitude
}

infoWindow.setPosition(pos);
infowindow.setContent("current position");
infowindow.openMap(map);
map.setCenter(pos);
},()=>{
                    console.log("some error");
                }
                );
                

            }
            else{

                console.log("Browser doesnot support geolocation");

            }

         });




        }
    </script>
      <script 
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKEIICunI38phOE2KyXX9VF0r9zAdWZSs&callback=initMap">
  </script>
</body>
</html>