<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="">

</head>

<body>
    <form action="" method="post">
        <input type="checkbox" value="sepak bola" name="checkbox[]">Sepak Bola<br>
        <input type="checkbox" value="tenis meja" name="checkbox[]">Tenis Meja<br>
        <input type="checkbox" value="basket" name="checkbox[]">Basket<br>
        <button type="submit" name="btn">save</button>
    </form>
    <script>
        var arr1 = [{
            user_id: 1,
            user_name: "XXXX",
            location: "India"
        }, {
            user_id: 2,
            user_name: "YYYY",
            location: "India"
        }, {
            user_id: 3,
            user_name: "ZZZZ",
            location: "India"
        }];

        var arr2 = [{
            user_id: 1,
            user_name: "XXXX",
            location: "United States"
        }, {
            user_id: 3,
            user_name: "ZZZZ",
            location: "India"
        }, {
            user_id: 4,
            user_name: "AAAA",
            location: "Germany"
        }, {
            user_id: 5,
            user_name: "BBBB",
            location: "England"
        }]

        var keys1 = {};
        var keys2 = {};

        var inserted = [];
        var updated = [];
        var deleted = [];

        arr1.forEach(function(item) {
            keys1[item.user_id] = item;
        });

        arr2.forEach(function(item) {
            keys2[item.user_id] = item;
        });

        arr1.forEach(function(item) {
            var obj = keys2[item.user_id]
            if (!obj) {
                deleted.push(item);
            } else {
                if (obj.username !== item.username || obj.location !== item.location) {
                    updated.push(item);
                }
            }
        });

        arr2.forEach(function(item) {
            if (!keys1[item.user_id]) {
                inserted.push(item);
            }
        });



        document.addEventListener("DOMContentLoaded", function(event) {
            console.log(arr1);
            console.log(arr2);
            console.log(keys1);
            console.log(keys2);
            console.log('inserted', inserted);
            console.log('updated', updated);
            console.log('deleted', deleted);
        });
    </script>
</body>

</html>