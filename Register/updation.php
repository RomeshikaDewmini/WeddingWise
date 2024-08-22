<?php
require('config.php');
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$em = $_POST['em'];
$pw = $_POST['pw'];
$rp = $_POST['rp'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <link rel="stylesheet" href="update1.css">
    <script src="func.js"></script>

</head>
<body class="backimg">
    <header>
        <div class="margin">
            <img src="logoM.png" alt="WeddingWise" class="logo">
            <a href="/Users/nirmal/Documents/Uni/Sem 2/IWT/Assignment/Assignment 2/WeddingWisee/homepage1.html"><img src="logoM.png" alt="WeddingWise" class="logo"></a>
            <hr class="hr1">
            <div class="main-menu-1">
                <a href="#">Login</a>
                <a href="#">Home</a>
                <a href="#">Promotions</a>
                <a href="#">Register</a>
                <a href="#">My Account</a>
                <a href="#">Contact Us</a>
            </div>
            <hr class="hr2">
        </div>
    </header>

    <?php   
    if(isset($_POST['signupdate'])) {
        $useID = $_POST['useID'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $repassword = $_POST['repassword'];

        $query = "UPDATE Register SET firstname='$firstname', lastname='$lastname', email='$email', pass='$pass', repassword='$repassword' WHERE useID='$useID'";

        $data = mysqli_query($conn, $query);

        if($data) {
            echo "<script>alert('Record Updated'); window.location.href = 'registerdata.php';</script>";
            //header('Location: registerdata.php');

        } else {
            echo "Failed to Update Record"; 
        }
    }
    ?>

    <form action="" method="post" onsubmit="return validateForm()">
        <!-- Headings for the form -->
        <div class="headingsContainer">
            <center><h1>Update Your Details</h1></center>
        </div>

        <!-- Main container for all inputs -->
        <div class="registration-form" id="registrationForm">
            <label for="useID">User ID:</label>
            <input type="text" id="useID" name="useID" value="<?php echo $useID; ?>" required>

            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" value="<?php echo $fn; ?>" name="firstname" required>

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" value="<?php echo $ln; ?>" name="lastname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" value="<?php echo $em; ?>" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" value="<?php echo $pw; ?>" name="pass" required>

            <label for="repassword">Re-Write Password:</label>
            <input type="password" id="repassword" value="<?php echo $rp; ?>" name="repassword" required>

            <!-- Submit button -->
            <input type="submit" value="UPDATE" name="signupdate">

        

        </div>
    </form>

    <div class="footer">
        <div class="footer-content">
            <div>
                <div class="rectangle"></div>
                <img src="logoM.png" alt="WeddingWise" class="logo2">
                <div class="footer-menu-1">
                    <a href="#">Feedbacks</a>
                    <a href="/Users/nirmal/Documents/Uni/Sem 2/IWT/Assignment/Assignment 2/Terms & Conditions/Terms.html">Terms & Conditions</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">FAQ's</a>
                </div>

                <div class="footer-menu-2">
                    <a href="https://www.facebook.com/">
                        <img src="a1.png" width="40" height="40">
                    </a>
                    <a href="https://www.youtube.com/">
                        <img src="a3.png" width="40" height="40">
                    </a>
                    <a href="https://www.instagram.com/">
                        <img src="a2.png" width="40" height="40">
                    </a>
                    <a href="https://www.twitter.com/">
                        <img src="a4.png" width="40" height="40">
                    </a>
                </div>
            </div>

            <div class="rights">
                <center>
                    <p>&copy; 2023 WeddingWise. All Rights Reserved.</p>
                </center>
            </div>

            <div>
                <form class="footer-form">
                    <input type="email" id="email" name="email" placeholder="Subscribe for Email Letters" required>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
