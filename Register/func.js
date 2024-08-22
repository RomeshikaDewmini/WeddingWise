// External JavaScript code

// Function to handle the form submission
function registerFormSubmit(event) {
  event.preventDefault();
  
  // Get form input values
  var firstName = document.getElementById("firstname").value;
  var lastName = document.getElementById("lastname").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var repassword = document.getElementById("repassword").value;
  
  // Perform validation and further processing as needed
  
  // Example: Display an alert with the form data
  var message = "Registration Successful!\n\n";
  message += "First Name: " + firstName + "\n";
  message += "Last Name: " + lastName + "\n";
  message += "Email: " + email + "\n";
  message += "Password: " + password + "\n";
  message += "Re-Password: " + repassword + "\n";
  
  alert(message);
}

// Attach event listener to the form submission
var registerForm = document.getElementById("registration-form");
registerForm.addEventListener("submit", registerFormSubmit);



// Function to check password and re-write password
function validateForm() {
  var password = document.getElementById("password").value;
  var repassword = document.getElementById("repassword").value;

  if (password !== repassword) {
    alert("Passwords do not match! Try Again!");
    return false; // Prevent form submission
  }
  return true; // Allow form submission
}

// Attach the checkPassword function to the form's submit event
  document.querySelector('form').addEventListener('submit', checkPassword);
  