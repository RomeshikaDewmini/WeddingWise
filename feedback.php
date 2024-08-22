<?php
/*error_reporting(E_ALL);
ini_set('display_errors', 1);
*/?>


<?php
    include_once 'connect_feedback.php';
?>

<?php
    $firstName = $_POST["firstName"];
    $phoneNumber = $_POST["phoneNumber"];
    $emailAddress = $_POST["emailAddress"];
    $dateOfEvent= $_POST["dateOfEvent"];
    $feedback = $_POST["feedback"];
    $rating = $_POST["rating"];


    $sql = "INSERT INTO feedback (firstName, phoneNumber,emailAddress, dateOfEvent, feedback, rating) VALUES ( '$firstName', '$phoneNumber','$emailAddress', '$dateOfEvent', '$feedback', '$rating')";


    if (mysqli_query($conn, $sql))
    {
        echo "<script> alert ('Record inserted Successful!')</script>";

    }
    else
    {
        echo "<script> alert ('Error in Insertion!') </script>";

    }
    //var_dump($conn);
    mysqli_close($conn);

    ?>

    <!DOCTYPE html>
<html>

<head>
    <script src="feedback.js"></script>
    <link rel="stylesheet" type="text/css" href="feedback.css">
    <title>WeddingWise - Home Page</title>
    <link rel="icon" type="image/png" href="logo.png">
</head>

<body>
    <header>
        <div class="margin">
            <a href="homepage.html">
                <img src="logo.png" alt="WeddingWise" class="logo">
            </a>
            <hr class="hr1">

            <div class="main-menu-1">
                <a href="#">Login</a>
                <a href="homepage.html">Home</a>
                <a href="#">Promotions</a>
                <a href="#">Register</a>
                <a href="#">My Account</a>
                <a href="#">Contact Us</a>
            </div>

            <hr class="hr2">

        </div>
    </header>
    <br><br>
    <h1>Feedbacks</h1>
    <br><br>
    <h3>Sort by Rating:</h3>
    <a href="star5.html" class="rating-text-link">
        <div class="star-rating">
            <div class="star-row">
                <span class="rating-text">5 Stars</span>
                <span class="star" style="color: gold;">&#9733;</span>
                <span class="star" style="color: gold;">&#9733;</span>
                <span class="star" style="color: gold;">&#9733;</span>
                <span class="star" style="color: gold;">&#9733;</span>
                <span class="star" style="color: gold;">&#9733;</span>
            </div>
        </div>
    </a>

    <a href="star4.html" class="rating-text-link">
        <div class="star-rating">
            <div class="star-row">
                <span class="rating-text">4 Stars</span>
                <span class="star" style="color: gold;">&#9733;</span>
                <span class="star" style="color: gold;">&#9733;</span>
                <span class="star" style="color: gold;">&#9733;</span>
                <span class="star" style="color: gold;">&#9733;</span>
                <span class="star" style="color: lightgray;">&#9733;</span>
            </div>
        </div>
    </a>

    <a href="star3.html" class="rating-text-link">
        <div class="star-rating">
            <div class="star-row">
                <span class="rating-text">3 Stars</span>
                <span class="star" style="color: gold;">&#9733;</span>
                <span class="star" style="color: gold;">&#9733;</span>
                <span class="star" style="color: gold;">&#9733;</span>
                <span class="star" style="color: lightgray;">&#9733;</span>
                <span class="star" style="color: lightgray;">&#9733;</span>
            </div>
        </div>
        </a>

    <a href="star2.html" class="rating-text-link">
        <div class="star-rating">
            <div class="star-row">
                <span class="rating-text">2 Stars</span>
                <span class="star" style="color: gold;">&#9733;</span>
                <span class="star" style="color: gold;">&#9733;</span>
                <span class="star" style="color: lightgray;">&#9733;</span>
                <span class="star" style="color: lightgray;">&#9733;</span>
                <span class="star" style="color: lightgray;">&#9733;</span>
            </div>
        </div>
    </a>

    <a href="star1.html" class="rating-text-link">
        <div class="star-rating">
            <div class="star-row">
                <span class="rating-text">1 Stars</span>
                <span class="star" style="color: gold;">&#9733;</span>
                <span class="star" style="color: lightgray;">&#9733;</span>
                <span class="star" style="color: lightgray;">&#9733;</span>
                <span class="star" style="color: lightgray;">&#9733;</span>
                <span class="star" style="color: lightgray;">&#9733;</span>
            </div>
        </div>
    </a>
                <br>

                <h3>All Feedbacks:</h3><br>

                <div class="feedbacks">
                    <div class="feedback">
                        <h3>Emma Thompson</h3>
                        <p>The wedding hall exceeded our expectations! The decor was stunning, and the service was impeccable. Highly recommended!</p>
                    </div>

                    <div class="feedback">
                        <h3>Liam Wilson</h3>
                        <p>We had an amazing experience with your website. The reservation process was seamless, and the wedding hall was perfect for our special day.</p>
                    </div>

                    <div class="feedback">
                        <h3>Ava Johnson</h3>
                        <p>The attention to detail in the wedding hall was impressive. Everything was beautifully arranged, and the staff was attentive and friendly.</p>
                    </div>

                    <div class="feedback">
                        <h3>Noah Anderson</h3>
                        <p>Our wedding day was made memorable by the elegant wedding hall we reserved through your website. Thank you for a wonderful experience.</p>
                    </div>

                    <div class="feedback">
                        <h3>Olivia Davis</h3>
                        <p>The ambiance of the wedding hall was enchanting. It created the perfect atmosphere for our dream wedding. Thank you for making it possible.</p>
                    </div>

                    <div class="feedback">
                        <h3>Sophia Martinez</h3>
                        <p>The reservation process was simple and hassle-free. The wedding hall itself was breathtaking, and the staff made sure everything ran smoothly.</p>
                    </div>

                    <div class="feedback">
                        <h3>Mia Thompson</h3>
                        <p>We couldn't be happier with the wedding hall we booked through your website. It was elegant, spacious, and provided a magical setting for our celebration.</p>
                    </div>

                    <div class="feedback">
                        <h3>Jackson Wilson</h3>
                        <p>The level of professionalism displayed by the staff at the wedding hall was outstanding. They went above and beyond to make our day unforgettable.</p>
                    </div>

                    <div class="feedback">
                        <h3>Ava Davis</h3>
                        <p>The wedding hall was exactly what we envisioned. The attention to detail in the decor and the excellent service made our wedding a memorable event. </p>

                        <div class="feedback">
                            <h3>Jackson Wilson</h3>
                            <p>The </p>
                        </div>

                        <div class="feedback">
                            <h3>Aiden Anderson</h3>
                            <p>We received numerous compliments from our guests about the beautiful wedding hall. It was the perfect backdrop for our special day. </p>
                        </div>

                        <div class="feedback">
                            <h3>Emma Garcia</h3>
                            <p> The wedding hall exceeded our expectations in terms of elegance and sophistication. It created a romantic ambiance that made our wedding unforgettable. </p>
                        </div>

                        <div class="feedback">
                            <h3>Liam Martinez</h3>
                            <p>The reservation process was smooth, and the communication with the staff was excellent. The wedding hall was simply stunning. </p>
                        </div>

                        <div class="feedback">
                            <h3>Olivia Johnson</h3>
                            <p>The wedding hall provided a picturesque setting for our wedding ceremony. The facilities were top-notch, and the service was exceptional. </p>
                        </div>

                        <div class="feedback">
                            <h3>Sophia Thompson</h3>
                            <p>We were blown away by the stunning views from the wedding hall. It made our wedding feel like a fairytale come true. </p>
                        </div>

                        <div class="feedback">
                            <h3>Mia Wilson</h3>
                            <p>The wedding hall had a warm and inviting atmosphere. It was the perfect choice for our intimate wedding celebration. </p>
                        </div>

                    </div>


                    <div class="formCont">
                        <h1>Feedback Form</h1>

                        <form action="feedback.php" method="post">
                            <label for="firstName">First Name:</label> <br>
                            <input type="text" id="firstName" name="firstName" placeholder="Michael" required> <br>

                            <label for="phoneNumber">Phone Number:</label> <br>
                            <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10}" placeholder="0761234567" required> <br>

                            <label for="emailAddress">Email Address:</label> <br>
                            <input type="email" id="emailAddress" name="emailAddress" placeholder="Michael123@gmail.com" required> <br>

                            <label for="dateOfEvent">Date of Event:</label> <br>
                            <input type="date" id="dateOfEvent" name="dateOfEvent" required> <br> <br>

                            <label for="feedback">Feedback:</label> <br>
                            <textarea id="feedback" name="feedback" rows="4" cols="50" class="text" required></textarea> <br>


                            <label for="rating">Rating:</label> <br>
                            <div class="rating">
                                <input type="radio" id="star5" name="rating" value="5">
                                <label for="star5"></label>
                                <input type="radio" id="star4" name="rating" value="4">
                                <label for="star4"></label>
                                <input type="radio" id="star3" name="rating" value="3">
                                <label for="star3"></label>
                                <input type="radio" id="star2" name="rating" value="2">
                                <label for="star2"></label>
                                <input type="radio" id="star1" name="rating" value="1">
                                <label for="star1"></label>
                            </div> <br> <br>


                            <input type="submit" value="Submit" class="button2" id="Button2">

                        </form>
                        

                    </div>
                    <br><br>
                    

                    <div class="footerContainter">

                        <div class="footer">
                            <div class="footer-content">

                                <div>

                                    <img src="logo.png" alt="WeddingWise" class="logo2">
                                    <div class="footer-menu-1">
                                        <a href="feedback.html">Feedbacks</a>
                                        
                                        <a href="#">Terms & Condititons</a>
                                        <a href="#">Privacy Policy</a>
                                        <a href="#">FAQ's</a>
<a href="display_feedback.php">Admin- View Feedbacks</a>

                                    </div>

                                    <div class="footer-menu-2">
                                        <a href="#">
                                            <img src="a1.png" width="40" height="40">
                                        </a>
                                        <a href="#">
                                            <img src="a3.png" width="40" height="40">
                                        </a>

                                        <a href="#">
                                            <img src="a2.png" width="40" height="40">
                                        </a>
                                        <a href="#">
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
                                        <input type="submit" value="Submit" id="Button1">
                                    </form>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
</body>

</html>