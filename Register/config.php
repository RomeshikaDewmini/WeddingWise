 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "wwise";


    //create connection
    $conn = new mysqli($servername, $username, $password, $db);
    
    //check connection
    if ($conn -> connection_error)
    {
        die("Connection failed: ".$conn -> connection_error);
    }
    else
    {
        echo "Connected Successfully";
    }

    ?>