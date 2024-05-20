// validate_register.js

// Function to validate the registration form
function validateForm(event) {
    const username = document.getElementById("registerUsername").value.trim();
    const password = document.getElementById("registerPassword").value.trim();
    const firstname = document.getElementById("registerFirstname").value.trim();
    const lastname = document.getElementById("registerLastname").value.trim();
    let isValid = true;

    if (username === "") {
        document.getElementById("usernameError").classList.remove("hidden");
        isValid = false;
    } else {
        document.getElementById("usernameError").classList.add("hidden");
    }

    if (password === "") {
        document.getElementById("passwordError").classList.remove("hidden");
        isValid = false;
    } else {
        document.getElementById("passwordError").classList.add("hidden");
    }

    if (firstname === "") {
        document.getElementById("firstnameError").classList.remove("hidden");
        isValid = false;
    } else {
        document.getElementById("firstnameError").classList.add("hidden");
    }

    if (lastname === "") {
        document.getElementById("lastnameError").classList.remove("hidden");
        isValid = false;
    } else {
        document.getElementById("lastnameError").classList.add("hidden");
    }

    if (!isValid) {
        event.preventDefault(); // Prevent form submission if fields are not valid
    }
}

// Attach the form validation function to the form submit event
document.getElementById("registerForm").addEventListener("submit", validateForm);
