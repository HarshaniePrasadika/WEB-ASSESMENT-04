function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    
    var errorName = document.getElementById("errorName");
    var errorEmail = document.getElementById("errorEmail");
    var errorMessage = document.getElementById("errorMessage");
    
    var isValid = true;
    
    if (name === "") {
        errorName.innerHTML = "Name is required.";
        isValid = false;
    } else {
        errorName.innerHTML = "";
    }
    
    if (email === "") {
        errorEmail.innerHTML = "Email is required.";
        isValid = false;
    } else {
        errorEmail.innerHTML = "";
    }
    
    if (message === "") {
        errorMessage.innerHTML = "Message is required.";
        isValid = false;
    } else {
        errormessage.innerHTML = "";
    }
    
    return isValid;
}