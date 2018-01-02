/* Validation functions for sign in and sign up forms */

/* Check Username Validity */
function checkUsername() {
  var username = document.getElementById("usernameInput").value;
  console.log(username.length);
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
    console.log(email);
    if(re.test(email.toLowerCase())) {
      document.getElementById("emailInput").style.borderColor = "green";
      console.log(email);
      return true;
    }
    else {
      document.getElementById("emailInput").style.borderColor = "red";
      console.log(email);
      return false;
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
