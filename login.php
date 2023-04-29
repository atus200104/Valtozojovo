<?php
session_start();
// Get the username and password from the form submission
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to the database
$db = new mysqli('cp9', 'valtozoj', 'Valtozo1234', 'valtozoj_donation');

// $db = new mysqli('localhost', 'root', '', 'donation');

// Check for errors connecting to the database
if ($db->connect_errno) {
  die('Sorry, we are having some technical difficulties.');
}

$passwordactual = $password;
$_SESSION['password'] = $passwordactual;

// Hash the password entered by the user
$hashed_password = hash('sha256', $password);

// Check if the username and hashed password are valid
$query = "SELECT * FROM user WHERE username='$username' AND password='$hashed_password'";
$result = $db->query($query);

if ($result->num_rows > 0) {
// Set the username in the session variable
echo '<script>
        var loggedIn = true;
      </script>';
// Get the user's email address from the database
$row = $result->fetch_assoc();
$email = $row['email'];
$color = $row['color_value'];
// Set the username and email in the session variable
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;

if($color == null){
  $_SESSION['color'] = "#D3D3D3";
}
else{
  $_SESSION['color'] = $color;
}



// Redirect to the home page after login
  echo "<script>";
  echo "window.alert('Sikeres Bejelentkezés!');";
  echo "window.location.href='index.php';";
  echo "</script>";
  exit();
} else {
// If the username and password are not valid, show an error message
  echo "<script>";
  echo "window.alert('Jelszó vagy felhasználónév helytelen!.');";
  echo "window.history.go(-1);";
  echo "</script>";
}

?>
