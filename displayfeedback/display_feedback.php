<?php
    include_once 'connect_display_feedback.php';
   
    
    mysqli_close($conn);
?>

<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="display_feedback.css">
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

 

     <div>
        <table id="myTable">

 



            <tr>
                <th>First Name</th>
                <th>Phone Number</th>
                <th>Email Address</th>
                <th>Date of Event</th>
                <th>Feedback</th>
                <th>Rating</th>
            </tr>
            
            <tr>
               <td>
               
               </td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
            </tr>
            
        </table>
    </div> <br><br><br><br><br>

   <style>
       #myTable {
           position: relative;
           left: 70px;
           top: 75px;
           width: 90%
       }

       table {
           border-collapse: collapse;
           width: 100%;
       }

       th, td {
           border: 1px solid black;
           padding: 8px;
           text-align: left;
       }

       th {
           background-color: #f2f2f2;
       }

       tr:hover {
           background-color: #f5f5f5;
       }
   </style>

   <div class="footerContainter">

        <div class="footer">
            <div class="footer-content">

                <div>
                    <div class="rectangle"></div>
                    <img src="logo.png" alt="WeddingWise" class="logo2">
                    <div class="footer-menu-1">
                        <a href="feedback.html">Feedbacks</a>
                        <a href="display_feedback.php">View My Feedbacks</a>
                        <a href="#">Terms & Condititons</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">FAQ's</a>

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
</body>

</html>