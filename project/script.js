function validate() {
    var email = document.getElementById("email");
    var password = document.getElementById("pass");

    var emailex = /^[a-z_.]+@[a-z]{2,}\.[a-z]{2,}(\.[a-z]{2,})?$/;
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()])[a-zA-Z\d!@#$%^&*()]{8,}$/;

    if (email.value.trim() == "" || !email.value.match(emailex)) {
        email.style.border = "solid 1px red";
        alert("Please enter a valid email address.");
        return false;
    } else {
        email.style.border = "1.5px solid rgba(0,0,0,0.1)";
    }

    if (password.value.trim() == "" || !password.value.match(passwordRegex)) {
        password.style.border = "solid 1px red";
        alert("Please enter a valid password (at least 8 characters including at least one uppercase letter, one lowercase letter, one digit, and one special character).");
        return false;
    } else {
        password.style.border = "1.5px solid rgba(0,0,0,0.1)";
    }

    return true;
}


function signUpVal() {
    var first = document.getElementById("fname");
    var last = document.getElementById("lname");
    var email = document.getElementById("iemail");
    var mobile = document.getElementById("mobile");
    var password = document.getElementById("pass");
    var cpassword = document.getElementById("cpass");

    const mobileRegex = /^(\+88|\+88-|0088|0088-)?01[3-9]\d{8}$/
    var nameRegex = /^[A-Za-z ]+$/;
    var emailex = /^[a-z_.0-9]+@[a-z]{2,}\.[a-z]{2,}(\.[a-z]{2,})?$/;
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()])[a-zA-Z\d!@#$%^&*()]{8,}$/;

    if (first.value.trim() == "" || !first.value.match(nameRegex)) {
        alert("Please enter a valid first name");
        return false;
    } else {
        // document.getElementById("efname").innerHTML = ""
    }

    if (last.value.trim() == "" || !last.value.match(nameRegex)) {

        alert("Please enter a valid last name");
        return false;
    } else {

    }

    if (email.value.trim() == "" || !email.value.match(emailex)) {

        alert("Please enter a valid email address.");
        return false;
    } else {

    }

    if (password.value.trim() == "" || !password.value.match(passwordRegex)) {

        alert("Please enter a valid password (at least 8 characters including at least 1 special character, 1 uppercase letter, 1 lowercase letter, and 1 digit).");
        return false;
    } else {

    }

    if (mobile.value.trim() == "" || !mobile.value.match(mobileRegex)) {

        alert("Please enter a valid BD number");
        return false;
    } else {

    }

    if (cpassword.value != password.value) {
        alert("Password does not match")
        return false
    } else {
    }
}
