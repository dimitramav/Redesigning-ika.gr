/* Validation functions for sign in and sign up forms */

/* Check Username Validity */
function checkUsername() {
  var username = document.getElementById("usernameInput").value;
  if(username.length < 4) {
    //document.getElementById("usernameError").innerHTML = "Παρακαλώ εισάγεται ένα όνομα χρήστη με 5 χαρακτήρες και πάνω.";
    //document.getElementById("usernameInput").style.borderColor = "red";
    return false;
  }
  else {
    document.getElementById("usernameError").innerHTML = "";
    //document.getElementById("usernameInput").style.borderColor = "green";
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
      return false;
    }
    /* Test is a function that checks if a string matches a regular expression */
}

function checkPassword() {
  /* Regular Expression for one uppercase, on lowercase, one number and one symbol */
  var re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[ -/:-@\[-`{-~]).{6,20}$/;
  var password = document.getElementById("password").value;

  if(re.test(password)) {
    document.getElementById("password").style.borderColor = "green";
    document.getElementById("errorPassword").innerHTML = "";
    return true;
  }
  else {
    document.getElementById("password").style.borderColor = "red";
    document.getElementById("errorPassword").innerHTML = "Ο κωδικός δεν πληρεί τις προϋποθέσεις.";
    return false;
  }

}

/* Check if the password matches the verifypassword */
function verifyPassword() {
  var password = document.getElementById("password").value;
  var verify = document.getElementById("verify").value;
  /* Check if they are the same */
  if((password === verify) && checkPassword()) {
    document.getElementById("verify").style.borderColor = "green";
    document.getElementById("errorVerify").innerHTML = "";
    document.getElementById("passwordMatches").innerHTML = "Ο κωδικός ταιριάζει.";
    return true;
  }
  else {
    document.getElementById("verify").style.borderColor = "red";
    document.getElementById("errorVerify").innerHTML = "Ο κωδικός ΔΕΝ ταιριάζει.";
    document.getElementById("passwordMatches").innerHTML = "";
    return false;
  }
}

function validate() {
  /* Check if you have to disable or not the submission */
  if(checkUsername() && checkEmail() && checkPassword() && verifyPassword()) {
    document.getElementById("mySubmit").disabled = false;
  }
  else {
    document.getElementById("mySubmit").disabled = true;
  }
}

/* Ajax call to check if username already exists */
$(document).ready(function(){
  $("#usernameInput").change(function(){
    $.ajax({
    url : "check_username.php",// your username checker url
    type : "POST",
    data : {"username":$("#usernameInput").val()},
    success : function (data)
            {
               if(data == "success" && $("#usernameInput").val().length > 4)
                {
                  $(".success").show();
                  $(".error").hide();
                  $( ".success" ).html("To Όνομα χρήστη είναι διαθέσιμο");
                  $("#usernameInput").css("border-color", "#00ff00");
                }
                else if(data == "success" && $("#usernameInput").val().length <= 4) {
                  $(".success").hide();
                  $(".error").show();
                  //$( ".success" ).html("To Όνομα χρήστη είναι διαθέσιμο");
                  $("#usernameInput").css("border-color", "#ff0000");
                  $( ".error" ).html("Το όνομα χρήστη πρέπει να έχει τουλάχιστον 5 χαρακτήρες");
                }
               else if(data == "fail" && $("#usernameInput").val().length > 4)
                {
                  $(".error").show();
                  $(".success").hide();
                  $( ".error" ).html("To Όνομα χρήστη ΔΕΝ είναι διαθέσιμο");
                  $("#usernameInput").css("border-color", "#ff0000");
                }
                else if(data == "fail" && $("#usernameInput").val().length <= 4) {
                  $(".success").hide();
                  $(".error").show();
                  //$( ".success" ).html("To Όνομα χρήστη είναι διαθέσιμο");
                  $("#usernameInput").css("border-color", "#ff0000");
                  $( ".error" ).html("Το όνομα χρήστη πρέπει να έχει τουλάχιστον 5 χαρακτήρες");
                }
            }
    });
  });
});
