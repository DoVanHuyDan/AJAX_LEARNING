<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <style>
        form {
            width: 400px;
            height: fit-content;
            margin: 0 auto;

        }

        .error {
            box-shadow: 2px 2px 2px 2px red;
        }

        span {
            color: red;
        }

        #ok {
            color: green;
        }
    </style>

    <script>
        $(document).ready(function() {
           
            $("form").submit(function(event) { // prevent the form from redirecting to mail.php 
           
                event.preventDefault(); 
                var name = $("#mail-name").val();
                var email = $("#mail-email").val();
                var gender = $("#mail-gender").val();
                var message = $("#mail-message").val();
                var submit = $("#mail-submit").val();
                
                $("#form-message").load("mail.php", { // send all bellow data to mail.php using POST method
                    name: name,
                    email: email,
                    gender: gender,
                    message: message,
                    submit: submit
                });
            });
            //

          
        });
    </script>
</head>

<body>
    <div id="body">
        <form action="mail.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input id="mail-email"  name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input id="mail-name" type="text" class="form-control" name="name" placeholder="Password">
            </div>
            <div class="form-group">
                <select id="mail-gender" name="gender" id="">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">message</label>
                <br>
                <textarea id="mail-message" name="message" id="message" placeholder="message"></textarea>
            </div>

            <button id="mail-submit" type="submit" class="btn btn-primary">Send</button>
            <p id="form-message">
            </p>
        </form>
    </div>
</body>

</html>