<?php
    //used to connect to the database
    define ('DB_HOST', "localhost");
    define ('DB_USERNAME', "root");
    define ('DB_PASSWORD',"");
    define ('DB_NAME',"phpcrud");

    //attempt to connect mysql database
    $mysqli = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

    //check the connection
    if($mysqli == false){
        die("ERROR WHILE CONNECTING TO THE DATABASE!!.".$mysqli->connct_error());
    }
    else{
        // echo "Database Connected Successfully !!";
    }
?>