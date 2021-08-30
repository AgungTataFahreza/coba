<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>checked demo</title>
    <style>
        input,
        label {
            line-height: 1.5em;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>

<body>

    <form>
        <div>
            <input type="radio" class="fruit" name="fruit" value="orange" id="orange">
            <label for="orange">orange</label>
        </div>
        <div>
            <input type="radio" class="fruit" name="fruit" value="apple" id="apple">
            <label for="apple">apple</label>
        </div>
        <div>
            <input type="radio" class="fruit" name="fruit" value="banana" id="banana">
            <label for="banana">banana</label>
        </div>
        <div id="log"></div>
    </form>

    <script>
        $(".fruit").on("click", function() {
            $("#log").html($(this).val() + " is checked!");
        });
    </script>

</body>

</html>