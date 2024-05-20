document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById("loginForm");

    loginForm.addEventListener("submit", function(event) {
        const usernameField = document.getElementById("loginUsername");
        const passwordField = document.getElementById("loginPassword");
        const username = usernameField.value.trim();
        const password = passwordField.value.trim();
        let valid = true;

        // Reset any previous error styles
        usernameField.classList.remove("border-red-500");
        passwordField.classList.remove("border-red-500");

        if (username === "") {
            usernameField.classList.add("border-red-500");
            valid = false;
        }

        if (password === "") {
            passwordField.classList.add("border-red-500");
            valid = false;
        }

        if (!valid) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
});
