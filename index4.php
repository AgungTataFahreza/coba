<!DOCTYPE html>
<html>

<head>
    <title>test page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>

    <script>
        var count = 0;

        $(document).ready(function() {
            $(".addCF").click(function() {

                if (count == 0) {
                    $("#customFields").empty();
                }
                $("#customFields").append('<tr valign="top"><th scope="row"><label for="customFieldName">Custom Field</label></th><td><input type="text" class="code" id="customFieldName" name="customFieldName[]" value="" placeholder="Input Name" /> &nbsp; <input type="text" class="code" id="customFieldValue" name="customFieldValue[]" value="" placeholder="Input Value" /> &nbsp; <a href="javascript:void(0);" class="remCF">Remove</a></td></tr>');
                count++;
            });
            $("#customFields").on('click', '.remCF', function() {
                $(this).parent().parent().remove();
            });
        });
    </script>
</head>

<body>
    <table class="form-table">
        <thead>
            <tr valign="top">
                <th scope="row"><label for="customFieldName">Custom Field</label></th>
                <td>
                    <input type="text" class="code" id="customFieldName" name="customFieldName[]" value="" placeholder="Input Name" /> &nbsp;
                    <input type="text" class="code" id="customFieldValue" name="customFieldValue[]" value="" placeholder="Input Value" /> &nbsp;
                    <a href="javascript:void(0);" class="addCF">Add</a>
                </td>
            </tr>
        </thead>
        <tbody id="customFields">
        </tbody>
    </table>
</body>

</html>