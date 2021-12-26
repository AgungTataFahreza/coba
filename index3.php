<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 class="numbers">Rp 1.000.342</h1>
    <script src="jquery.js"></script>
    <script type="text/javascript">
        $('.numbers').each(function() {
            $(this).html(
                $(this).html().substr(0, $(this).html().length - 3) +
                "<span style='color: #3399ff'>" +
                $(this).html().substr(-3) +
                "</span>");
        });
    </script>
</body>

</html>