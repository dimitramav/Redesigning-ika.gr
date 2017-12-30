/* Validation functions for sign in and sign up forms */

/* Check Username Validity */
function checkUsername() {
  var username = document.getElementById("usernameInput").value;
  console.log(username.length);
  if(username.length < 5) {
    document.getElementById("usernameError").innerHTML = "Παρακαλώ εισάγεται ένα όνομα χρήστη με 5 χαρακτήρες και πάνω.";
    document.getElementById("usernameInput").style.borderColor = "red";
  }
  else {
    document.getElementById("usernameError").innerHTML = "";
    document.getElementById("usernameInput").style.borderColor = "green";
    return true;
  }
}

/* Check Email Validity */
function checkEmail() {
    /* Regular expression to check email */
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    /* Get email */
    var email = document.getElementById("emailInput").value;
    if(re.test(email.toLowerCase())) {
      document.getElementById("emailInput").style.borderColor = "green";
      return true;
    }
    else {
      document.getElementById("emailInput").style.borderColor = "red";
    }
    /* Test is a function that checks if a string matches a regular expression */
}

function validate() {
  /* Check if you have to disable or not the submission */
  if(checkUsername() && checkEmail()) {
    console.log("OK !");
    document.getElementById("mySubmit").disabled = false;
  }
  else {
    console.log("Not Ok !");
    document.getElementById("mySubmit").disabled = true;
  }
}
