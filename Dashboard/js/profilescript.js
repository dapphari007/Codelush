// JavaScript

document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("profileForm");
    const usernameInput = document.getElementById("username");
    const emailInput = document.getElementById("email");
    const usernameSection = document.getElementById("usernameSection");

    // Add an event listener for form submission
    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get the values from the form inputs
        const username = usernameInput.value.trim(); // Trim whitespace
        const email = emailInput.value.trim(); // Trim whitespace

        // Update the DOM elements with the new values
        if (username !== "") {
            // Update the username section only if the username is not empty
            usernameSection.textContent = `Username: ${username}`;
        }

       
    });
});
