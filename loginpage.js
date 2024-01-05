// Example JavaScript for form validation
function validateForm() {
    var username = document.forms["registrationForm"]["username"].value;
    if (username == "") {
        alert("Username must be filled out");
        return false;
    }

    // Add more validation rules as needed
}
