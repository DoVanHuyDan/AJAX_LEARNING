<?php

    if(isset($_POST['submit'])) // get data from index by ajax , not html
    {   
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $message = $_POST['message'];

        $emtyFieldsError = false;
        $invalidEmailError = false;
        if( empty($name) || empty($email) || empty($message) )
        {
            $emtyFieldsError = true;
            echo "<span>Fill up all fields!<span>";
        }
        else
        {
            if(!filter_var($email , FILTER_VALIDATE_EMAIL))
            {
                $invalidEmailError = true;
                echo "<span>Invalid Emmail!</span>";
            }
        }
        if( !$emtyFieldsError && !$invalidEmailError )
        {
            echo "<span id='ok'>Sent!</span>";
        }
    }

?>


<script>
     $("#mail-name, #mail-email , #mail-message").removeClass("error");
    var emtyFieldsError  = "<?php echo $emtyFieldsError; ?>";
    var invalidEmailError = "<?php echo $invalidEmailError; ?>";

    if( emtyFieldsError == true  )
    {
        $("#mail-name, #mail-email , #mail-message").addClass("error");
    }
    
    if( invalidEmailError == true )
    {
        $( "#mail-email" ).addClass("error");

    }

    if( invalidEmailError == false && emtyFieldsError == false )
    {
        $("#mail-name,#mail-email , #mail-message").val(""); // clear data if no erro is detected

    }


</script>