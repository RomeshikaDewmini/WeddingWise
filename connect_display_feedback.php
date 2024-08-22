<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "wwise";


    //create connection
    $conn = new mysqli($servername, $username, $password, $db);

if(mysqli_connect_errno()){
die('Database connection failed' . mysqli_connect_error());}
else{
echo "";}
    
    

    ?>