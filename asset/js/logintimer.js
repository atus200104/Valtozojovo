var inactivityTime = 0;
// var logoutTime = 0.1667; // set logout time in minutes
var logoutTime = 30;
var logoutUrl = "logout2.php"; // set logout URL

// Start the inactivity timer
function startInactivityTimer() {
  document.addEventListener("mousemove", resetTimer);
  document.addEventListener("keypress", resetTimer);
  document.addEventListener("touchmove", resetTimer);
  resetTimer();
}

// Reset the inactivity timer
function resetTimer() {
  inactivityTime = 0;
}

// Check for inactivity and log out the user if necessary
function checkInactivity() {
  setInterval(function() {
    inactivityTime++;
    if (inactivityTime >= logoutTime * 60) { // check if logout time has been reached
      window.location.href = logoutUrl; // redirect to logout URL
    }
  }, 1000);
}

// Check if the user is logged in and start the inactivity timer if necessary
if (typeof loggedIn !== 'undefined' && loggedIn) {
  startInactivityTimer();
  checkInactivity();
}


// Timer for success message
setTimeout(function() {
  var successMsg = document.getElementById("success-msg");
  if (successMsg) {
    successMsg.classList.add("hide");
    setTimeout(function() {
      successMsg.style.display = "none";
    }, 1000); // wait for 1s before hiding the message
  }
}, 4000);

// Timer for error message
setTimeout(function() {
  var errorMsg = document.getElementById("error-msg");
  if (errorMsg) {
    errorMsg.classList.add("hide");
    setTimeout(function() {
      errorMsg.style.display = "none";
    }, 1000); // wait for 1s before hiding the message
  }
}, 4000);







//Color changer for the form and the buttons in the user interface
