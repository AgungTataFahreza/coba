<script>
    var locations = {}; //A repository for markers (and the data from which they were contructed).


    var locs = {

        1: {

            info: 'user1',

            lat: 22.7377,

            lng: 75.878

        },

        2: {

            info: 'user2',

            lat: 22.7149,

            lng: 75.8432

        },

        3: {

            info: 'user3',

            lat: 22.7190,

            lng: 75.8972

        }

    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), {

        zoom: 9,

        maxZoom: 21,

        minZoom: 1,

        streetViewControl: false,

        center: new google.maps.LatLng(22.7533, 75.8937),

        mapTypeId: google.maps.MapTypeId.ROADMAP

    });

    function setMarkers(locObj) {

        $.each(locObj, function(key, loc) {

            if (!locations[key] && loc.lat !== undefined && loc.lng !== undefined) {

                //Marker has not yet been made (and there's enough data to create one).

                //Create marker

                loc.marker = new google.maps.Marker({

                    position: new google.maps.LatLng(loc.lat, loc.lng),

                    //icon: 'logo.png', //Marker icon).

                    map: map

                });

                var infowindow = new google.maps.InfoWindow();

                infowindow.setContent('<span style="color:#EA2E49;font-weight:bold">' + loc.info + '</span>');

                infowindow.open(map, loc.marker);

                //Attach click listener to marker

                google.maps.event.addListener(loc.marker, 'click', (function(key) {

                    return function() {

                        infowindow.setContent(locations[key].info);

                        infowindow.open(map, locations[key].marker);

                    }

                })(key));

                //Remember loc in the `locations` so its info can be displayed and so its marker can be deleted.

                locations[key] = loc;

            } else if (locations[key] && loc.remove) {

                //Remove marker from map

                if (locations[key].marker) {

                    locations[key].marker.setMap(null);

                }

                //Remove element from 'locations'

                delete locations[key];

            } else if (locations[key]) {

                //Update the previous data object with the latest data.

                $.extend(locations[key], loc);

                if (loc.lat !== undefined && loc.lng !== undefined) {

                    //Update marker position (maybe not necessary but doesn't hurt).

                    locations[key].marker.setPosition(

                        new google.maps.LatLng(loc.lat, loc.lng));

                }

                //locations[key].info looks after itself.

            }

        });

    }

    var ajaxObj = { //Object to save cluttering the namespace.

        options: {

            url: "process.php", //The resource that delivers loc data.

            dataType: "json" //The type of data tp be returned by the server.

        },

        delay: 500, //(milliseconds) the interval between successive gets.

        errorCount: 0, //running total of ajax errors.

        errorThreshold: 5, //the number of ajax errors beyond which the get cycle should cease.

        ticker: null, //setTimeout reference - allows the get cycle to be cancelled with clearTimeout(ajaxObj.ticker);

        get: function() { //a function which initiates

            if (ajaxObj.errorCount < ajaxObj.errorThreshold) {

                ajaxObj.ticker = setTimeout(getMarkerData, ajaxObj.delay);

            }

        },

        fail: function(jqXHR, textStatus, errorThrown) {

            console.log(errorThrown);

            ajaxObj.errorCount++;

        }

    };

    //Ajax master routine

    function getMarkerData() {

        $.ajax(ajaxObj.options)

            .done(setMarkers) //fires when ajax returns successfully

            .fail(ajaxObj.fail) //fires when an ajax error occurs

            .always(ajaxObj.get); //fires after ajax success or ajax error

    }

    setMarkers(locs); //Create markers from the initial data set served with the document.

    ajaxObj.get(); //Start the get cycle.
</script>