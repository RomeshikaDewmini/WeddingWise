// Function to handle form submission
function handleFormSubmit(event) {
    event.preventDefault();
  
    // Collect form data
    const email = document.getElementById('email').value;
  
    // Perform form validation
    if (!validateEmail(email)) {
      return;
    }
  
    console.log('Email submitted:', email);

    // Reset the form
    event.target.reset();
  }
  
  // Function to validate email
  function validateEmail(email) {
  }
  
  // Add event listener to the form submission
  const form = document.querySelector('.footer-form');
  form.addEventListener('submit', handleFormSubmit);
  