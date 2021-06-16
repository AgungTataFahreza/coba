<?php
define("API_KEY", "AIzaSyAytdkdRwRKeK1QW1YLGo5ukME6OIv_gtU");

$wayPoints = ["Uttam Nagar West, New Delhi, Delhi", "Meerut", "Aligarh", "Anupshahr", "Bulandshahr"];
?>
<html>

<head>
    <title>How to draw Path on Map using Google Maps Direction API</title>
    <style>
        #map-layer {
            max-width: 900px;
            min-height: 550px;
        }

        .lbl-locations {
            font-weight: bold;
            margin-bottom: 15px;
        }

        .locations-option {
            display: inline-block;
            margin-right: 15px;
        }

        .btn-draw {
            background: green;
            color: #ffffff;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>

<body>
    <h1>How to draw Path on Map using Google Maps Direction API</h1>
    <div class="lbl-locations">Travel Mode</div>

    <div>
        <input type="radio" name="travel_mode" class="travel_mode" value="WALKING"> WALKING

        <input type="radio" name="travel_mode" class="travel_mode" value="DRIVING" checked> DRIVING
    </div>
    <div>&nbsp;</div>
    <div class="lbl-locations">Way Points</div>
    <div>

        <?php
        foreach ($wayPoints as $wayPoint) {
        ?>
            <div class="locations-option"><input type="checkbox" name="way_points[]" class="way_points" value="<?php echo $wayPoint; ?>"> <?php echo $wayPoint; ?></div>
        <?php
        }
        ?>
        <input type="button" id="drawPath" value="Draw Path" class="btn-draw" />
    </div>

    <div id="map-layer"></div>
    <script>
        var map;
        var waypoints

        function initMap() {
            //gambar map pertama kali
            var mapLayer = document.getElementById("map-layer");
            var centerCoordinates = new google.maps.LatLng(28.6139, 77.2090);
            var defaultOptions = {
                center: centerCoordinates,
                zoom: 8,
                mapTypeId: 'roadmap'
            }
            map = new google.maps.Map(mapLayer, defaultOptions);
            var infoWindow = new google.maps.InfoWindow;
            var bounds = new google.maps.LatLngBounds();

            function bindInfoWindow(marker, map, infoWindow, html) {
                google.maps.event.addListener(marker, 'click', function() {
                    infoWindow.setContent(html);
                    infoWindow.open(map, marker);
                });
            }

            var image = "pinpin.png";

            //function buat marker
            function addMarker(lat, lng, info) {
                var pt = new google.maps.LatLng(lat, lng);
                bounds.extend(pt);
                var marker = new google.maps.Marker({
                    map: map,
                    position: pt,
                    icon: image
                });
                map.fitBounds(bounds);
                bindInfoWindow(marker, map, infoWindow, info);
            }

            //gambar rute
            var directionsService = new google.maps.DirectionsService;
            var directionsDisplay = new google.maps.DirectionsRenderer;
            directionsDisplay.setMap(map);

            //function gambar rute ketika di click
            $("#drawPath").on("click", function() {
                waypoints = [{
                    location: new google.maps.LatLng(51.744915, 0.573389),
                    stopover: false
                }, {
                    location: new google.maps.LatLng(51.775197, 0.592035),
                    stopover: false
                }, {
                    location: new google.maps.LatLng(51.731653, 0.665789),
                    stopover: false
                }, {
                    location: new google.maps.LatLng(51.671305, 0.714838),
                    stopover: false
                }, {
                    location: new google.maps.LatLng(51.65319, 0.601305),
                    stopover: false
                }];
                var locationCount = waypoints.length;
                if (locationCount > 0) {
                    var start = waypoints[0].location;
                    var end = waypoints[locationCount - 1].location;
                    drawPath(directionsService, directionsDisplay, start, end);
                }

                //memanggil function marker
                addMarker(51.744915, 0.573389, "bus 1");
                addMarker(51.775197, 0.592035, "bus 2");
                addMarker(51.731653, 0.665789, "bus 3");
            });
        }

        //function gambar rute
        function drawPath(directionsService, directionsDisplay, start, end) {
            directionsService.route({
                origin: start,
                destination: end,
                waypoints: waypoints,
                optimizeWaypoints: true,
                // travelMode: $("input[name='travel_mode']:checked").val()
                travelMode: 'DRIVING'
            }, function(response, status) {
                if (status === 'OK') {
                    directionsDisplay.setDirections(response);
                } else {
                    window.alert('Problem in showing direction due to ' + status);
                }
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo API_KEY; ?>&callback=initMap">
    </script>
</body>

</html>