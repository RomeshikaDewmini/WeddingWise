<?php
$filepath = realpath(dirname(__FILE__));

spl_autoload_register(function ($classes) {

    include 'user/classes/' . $classes . ".php";
});

$users = new Users();
//Session::CheckSession();
$msg = Session::get('msg');
if (isset($msg)) {
    echo $msg;
}

?>
<!DOCTYPE html>

<head>
   
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>

<body>

    <div class="margin">

        <img src="logo1.png" alt="WeddingWise" class="logo">

        <hr class="hr1">
        <div class="main-menu-1">
            <a href="#">Login</a>
            <a href="homepage.html">Home</a>
            <a href="#">Promotions</a>
            <a href="../reg.html">Register</a>
            <a href="#">My Account</a>
            <a href="#">Contact Us</a>
        </div>
        <hr class="hr2">

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
            $userLog = $users->userLoginAuthentication($_POST);
            if (isset($userLog)) {
                echo $userLog;
            }

            $logout = Session::get('logout');
            if (isset($logout)) {
                echo $logout;
            }
        }
        ?>


        <div class="login-container">
            <h1>Login</h1>
            <form action="" method="post">
                <label>User name</label>
                <div class="input field">
                    <input type="text" name="email" placeholder="Username" required>
                </div>
                <div class="input field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                </div><br>
                <div class="remember">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" name="login">Login</button>
                
                <div class="signup">
                    <p></p>
                    <label>Not yet member? </label>
                    <a href="../register/Reg.html">Signup</a>
                </div>


            </form>
        </div>



        <div class="footer">
            <div class="footer-content">

                <div>
                    <div class="rectangle"></div>
                    <img src="logo1.png" alt="WeddingWise" class="logo2">
                    <div class="footer-menu-1">
                        <a href="#">Feedbacks</a>
                        <a href="#">Terms & Condititons</a>
                        <a href="privacy policy/privacy.html">Privacy Policy</a>
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
                        <p>&copy; 2023 WeddingWise. All Rights Reserved. </p>
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