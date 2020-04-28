<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function()
        {
            $("#btn").click(function()

            {   // $.get("link to datafile to load", callback function( data gotten from the datafile, status of that process ))
                $.get("test.txt", function(data, status)
                {
                    $("#div").html(data);
                    alert(status);
                });
            });
        });
    </script>
</head>
<body>
    <div id="div">

    </div>
    <button id="btn">
        show more here
    </button>
</body>
</html>