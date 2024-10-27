document.addEventListener("DOMContentLoaded", function() {
    // Get the register form
    var register = document.getElementById("register");

    // Get the popup box
    var popupBox = document.getElementById("popup-box");

    // Get the OK button inside the popup box
    var okBtn = document.getElementById("ok-btn");

    // When the register form is submitted, display the popup box
    registerForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting
        popupBox.style.display = "block";
    });

    // When the user clicks on the close button or outside the popup box, close the popup box
    window.addEventListener("click", function(event) {
        if (event.target == popupBox) {
            popupBox.style.display = "none";
        }
    });

    // When the OK button is clicked, redirect to the login page
    okBtn.addEventListener("click", function() {
        // Redirect to the login page, replace "login.html" with your actual login page URL
        window.location.href = "login.html";
    });
});
