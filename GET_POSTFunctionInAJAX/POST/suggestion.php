<?php

    $existentName = array("huy","hoang","tuyen");

    
    if( isset($_POST) )
    {// get suggestion from index.php
        $name = $_POST['suggestion'];
        
        if( in_array($name , $existentName) )
        {
            echo "the name you just typed already exists";
        }
    }
?>