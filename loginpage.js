function validateForm() {
    var username = document.forms["registrationForm"]["username"].value;
    var password = document.forms["registrationForm"]["password"].value;
    if (username == "" || password == "") {
        alert("Both username and password must be filled out");
        return false;
    }
}
