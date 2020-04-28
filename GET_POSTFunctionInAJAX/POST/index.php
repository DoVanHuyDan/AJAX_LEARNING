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
            $("#input").keyup(function()
            {
                var name = $("#input").val().trim();
                $.post("suggestion.php",
                {
                    suggestion: name
                },function(data,status){
                    $("#test").html(data);
                });
            });
        });
    
    </script>
</head>
<body>
    <input type="text" name="name" id="input">
    <p id="test">
    </p>
</body>
</html>