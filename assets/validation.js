document.getElementById("contactForm").addEventListener("submit", function(event) {
    // Prevent form submission if validation fails
    if (!validateForm()) {
        event.preventDefault();
    }
});

function validateForm() {
    let valid = true;

    // Reset error messages
    document.getElementById("nameError").classList.add("hidden");
    document.getElementById("emailError").classList.add("hidden");
    document.getElementById("messageError").classList.add("hidden");

    // Validate name
    const name = document.getElementById("name").value.trim();
    if (name === "") {
        document.getElementById("nameError").classList.remove("hidden");
        valid = false;
    }

    // Validate email
    const email = document.getElementById("email").value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "" || !emailRegex.test(email)) {
        document.getElementById("emailError").classList.remove("hidden");
        valid = false;
    }

    // Validate message
    const message = document.getElementById("message").value.trim();
    if (message === "") {
        document.getElementById("messageError").classList.remove("hidden");
        valid = false;
    }

    return valid;
}
