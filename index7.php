<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="text" class="angka"><br>
        <input type="text" class="angka"><br>
        <input type="text" class="angka"><br>
        <button type="button" id="go">Go</button>
    </form>
    <script src="jquery.js">
    </script>
    <script>
        $(document).ready(function() {
            // console.log("!");
            // alert('hai');
            $("#go").click(function() {
                var inputs = $(".angka");
                for (var i = 0; i < inputs.length; i++) {
                    console.log($(inputs[i]).val());
                }
            });
        });
    </script>
</body>

</html>