<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calc</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.1/css/uikit.gradient.css" />
</head>

<body>
    <input type="text" placeholder="1" id="param1" /> <p>
    <input type="text" placeholder="2" id="param2" /> <p>
    <input type="button" style="width: 100px"  id="ajax" />

    <p id="res"> </p>


<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.1/js/uikit.min.js"></script>
<script   src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>

<script>
    $("#ajax").on("click", function (){
        $.ajax({
            type: "GET",
            url: "test2.php",
            data: {param1: $('#param1').val(), param2: $('#param2').val()},
        }).done(function (data) {
            $("#res").append(data);
            });
    });
</script>
</body>