function formValidation() {

    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var browser = document.getElementById('browser');
    var reason = document.getElementById('reason');
    if (name.value.length === 0) {
        document.getElementById('p0').innerText = "* All fields are mandatory *";
        name.focus();
        return false;
    }
    if (reason.value.length === 0) {
        document.getElementById('p4').innerText = "* All fields are mandatory *";
        reason.focus();
        return false;
    }

    if (inputAlphabet(name, "* For your name please use alphabets only *")) {
        if (lengthDefine(name, 6, 8)) {
            if (emailValidation(email, "* Please enter a valid email address *")) {
                if (trueSelection(browser, "* Please Choose any one option")) {
                    return true;
                }
            }
        }
    }
    return false;
}

function inputAlphabet(inputtext, alertMsg) {
    var alphaExp = /^[a-zA-Z]+$/;
    if (inputtext.value.match(alphaExp)) {
        return true;
    } else {
        document.getElementById('p1').innerText = alertMsg;
        inputtext.focus();
        return false;
    }
}

function textAlphanumeric(inputtext, alertMsg) {
    var alphaExp = /^[0-9a-zA-Z]+$/;
    if (inputtext.value.match(alphaExp)) {
        return true;
    } else {
        document.getElementById('p4').innerText = alertMsg;
        return false;
    }
}

function lengthDefine(inputtext, min, max) {
    var uInput = inputtext.value;
    if (uInput.length >= min && uInput.length <= max) {
        return true;
    } else {
        document.getElementById('p1').innerText = "* Please enter between " + min + " and " + max + " characters *";
        inputtext.focus();
        return false;
    }
}

function trueSelection(inputtext, alertMsg) {
    if (inputtext.value === "Please Choose...") {
        document.getElementById('p3').innerText = alertMsg;
        inputtext.focus();
        return false;
    } else {
        return true;
    }
}

function emailValidation(inputtext, alertMsg) {
    var emailExp = /^[\w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
    if (inputtext.value.match(emailExp)) {
        return true;
    } else {
        document.getElementById('p2').innerText = alertMsg;
        inputtext.focus();
        return false;
    }
}