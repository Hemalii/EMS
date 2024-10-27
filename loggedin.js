// Assume this function retrieves the logged-in user from your backend or authentication system
function getLoggedInUser() {
    // Replace this with your logic to get the logged-in user
    return "JohnDoe"; // For example
}

// When the page loads, update the displayed user
window.onload = function() {
    var loggedInUser = getLoggedInUser();
    document.getElementById("logged-in-user").innerText = "Logged in as: " + loggedInUser;
};
