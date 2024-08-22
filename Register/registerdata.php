<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "wwise";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

      
   
    
    
    

    // Check if the delete button is clicked
    if (isset($_POST['delbtn'])) {
        // Get the ID of the record to delete
        $id = $_POST['id'];

        // Create the DELETE query
        $deleteQuery = "DELETE FROM Register WHERE useID = '$id'";

        // Execute the DELETE query
        if (mysqli_query($connection, $deleteQuery)) {
           echo "<script>alert('Record deleted successfully.'); window.location.href = 'registerdata.php';</script>";;
            //header('Location: Reg.html');
        } else {
            echo "Error deleting record: " . mysqli_error($connection);
        }
    }

    // Query the "Register" table to fetch data
    $query = "SELECT * FROM Register";
    $result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Wedding Wise - Register Data</title>
    <link rel="stylesheet" href="regdata1.css">


</head>
<body>
    <header>
        <div class="margin">
            <img src="logoM.png" alt="WeddingWise" class="logo">
            <hr class="hr1">
            <div class="main-menu-1">
                <a href="#">Login</a>
                <a href="#">Home</a>
                <a href="#">Promotions</a>
                <a href="Reg.html">Register</a>
                <a href="#">My Account</a>
                <a href="#">Contact Us</a>
            </div>
            <hr class="hr2">
        </div>
    </header>

    <center><h1>Register Data</h1></center>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Re-Password</th>
            <th>Action</th>
            <th>Action</th>
        </tr>

        <?php
            // Loop through the data and display it
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['firstname'] . '</td>';
                echo '<td>' . $row['lastname'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['pass'] . '</td>';
                echo '<td>' . $row['repassword'] . '</td>';

                echo '<td class="action-column">';
                echo '<form action="updation.php" method="post">';
                echo '<input type="hidden" name="useID" value="' . $row['useID'] . '">';
                echo '<input type="hidden" name="firstname" value="' . $row['firstname'] . '">';
                echo '<input type="hidden" name="lastname" value="' . $row['lastname'] . '">';
                echo '<input type="hidden" name="email" value="' . $row['email'] . '">';
                echo '<input type="hidden" name="pass" value="' . $row['pass'] . '">';
                echo '<input type="hidden" name="repassword" value="' . $row['repassword'] . '">';
                echo '<button type="submit" class="edit" name="editbtn">Edit</button>';
                echo '</form>';
                echo '</td>';

                echo '<td class="action-column">';
                echo '<form action="" method="post">';
                echo '<input type="hidden" name="id" value="' . $row['useID'] . '">';
                echo '<button type="submit" class="delbtn" name="delbtn">Delete</button>';
                echo '</form>';
                echo '</td>';

                echo '</tr>';
            }
        ?>
    </table>

    <div class="footer">
        <div class="footer-content">
            <div>
                <div class="rectangle"></div>
                <img src="logoM.png" alt="WeddingWise" class="logo2">
                <div class="footer-menu-1">
                    <a href="#">Feedbacks</a>
                    <a href="Terms.html">Terms & Condititons</a>
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

<?php
    // Close the database connection
    mysqli_close($connection);
?>
