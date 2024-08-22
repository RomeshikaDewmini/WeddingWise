<?php
/*error_reporting(E_ALL);
ini_set('display_errors', 1);
*/?>


<?php
    include_once 'config.php';
?>

<?php
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $pass= $_POST["pass"];
    $repassword = $_POST["repassword"];


    $sql = "INSERT INTO Register (firstname, lastname,email, pass, repassword) VALUES ( '$firstname', '$lastname','$email', '$pass', '$repassword')";


    if (mysqli_query($conn, $sql))
    {
        //echo "<script> alert ('Record inserted Successful!')</script>";
        echo "<script>alert('Record inserted Successful!'); window.location.href = '../homepage.html';</script>";

    }
    else
    {
        echo "<script> alert ('Error in Insertion!') </script>";

    }
    //var_dump($conn);
    mysqli_close($conn);

    ?>