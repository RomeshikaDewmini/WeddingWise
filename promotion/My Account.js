document.getElementById("registrationForm").addEventListener("submit", redirectToHomepage);
        
function redirectToHomepage(event) {
    event.preventDefault(); // Prevent the form from being submitted immediately
    window.location.href = "homepage1.html";
}
// Editable Information
const firstname = document.getElementById('firstname');
const lastname = document.getElementById('lastname');
const email = document.getElementById('email');
const pass = document.getElementById('pass');
const repassword = document.getElementById('repassword');
