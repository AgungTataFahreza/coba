<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAbtaoW3p5QeS1L1u4poMoLj1CEKDcjwgc" type="text/javascript"></script>

    <script>
        const elevationService = google.maps.ElevationService();
        const locations = [{
            lat: 27.986065,
            lng: 86.922623
        }];

        const promise = elevationService.getElevationForLocation({
            locations
        });

        promise
            .then((response) => {
                console.log(response.results);
            })
            .catch((error) => {
                console.log(error);
            });
    </script>
</body>

</html>