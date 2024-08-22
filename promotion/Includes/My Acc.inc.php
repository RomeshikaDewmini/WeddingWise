
<?php
// Include the database connection file
require_once "db.inc.php";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

session_start();

// Check if the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION['useID'])) {
    header("Location: login.php");
    exit();
}
// Assuming you have the logged-in user's information available
$loggedInUserId = $_SESSION['user_id'];

// PHP code to handle the profile picture upload
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['profile-picture'])) {
      $profilePicture = $_FILES['profile-picture'];
  
    }
  }
// Prepare and execute the query to fetch user details
$query = "SELECT firstname, lastname, email FROM Register WHERE useID = ?";
$stmt = $connection->prepare($query);
$stmt->bind_param("i", $loggedInUserId);
$stmt->execute();
$stmt->bind_result($firstname, $lastname, $email);

// Fetch the user details
$stmt->fetch();

// Close the statement
$stmt->close();

// PHP code to handle the user data update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $newpass = $_POST['newpass'];
    $renewpass = $_POST['renewpass'];
    


    $sql = "UPDATE Register (firstname, lastname,email, pass) VALUES ( '$firstname', '$lastname','$email', '$pass')";

