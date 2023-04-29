<?php
// include("connection.php");
 // if(isset($_POST['colorValue']))
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // $colorValue = $_POST['colorValue'];
 
   // $servername = "localhost";
   // $username = "root";
   // $password = "password";
   // $dbname = "mydatabase";
   // $conn = new mysqli($servername, $username, $password, $dbname); 
  
 // if ($conn->connect_error) {
    // die("Nem sikerült a csatlakozás: " . $conn->connect_error);
  // } 

  // $sql = "INSERT INTO colors (color_value) VALUES ('$colorValue')";

  // if ($conn->query($sql) === TRUE) {
    // echo "Sikerült elmentened az általad kíválasztott színt";
  // } else {
    // echo "Hiba: " . $sql . "<br>" . $conn->error;
  // }

  // $conn->close();
// }
// ?>
<?php
include("connection.php");

$username = $_SESSION['username'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $colorValue = $_POST['favcolor'];

  $sql = "UPDATE user SET color_value = '$colorValue' WHERE username = '$username'";
  $result = $conn->query($sql);

  if ($result === TRUE && $colorValue != $_SESSION['color']) {
    $_SESSION['color'] = $colorValue;
    $_SESSION['colorsuccess'] = 'Szín beállítása sikeres!';
    echo "<script>";
    header("Refresh:0; url=".$_SERVER['HTTP_REFERER']);
    echo "</script>";
  } else {
    $_SESSION['colorerror'] = 'A kívánt szín már használatban van!';
    echo "<script>";
    header("Refresh:0; url=".$_SERVER['HTTP_REFERER']);
    echo "</script>";
  }
} else {
  $sql = "SELECT color_value FROM user WHERE username = '$username'";
  $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $colorValue = $row['color_value'];
    } else {
      $colorValue = '#707070';
      $sql = "INSERT INTO user (color_value) VALUES ('$colorValue')";
      $conn->query($sql);
    }

  $_SESSION['color'] = $colorValue;
}

$conn->close();
?>



<!-- if ($result->num_rows > 0) {
    $sql = "INSERT INTO colors (user_id, color_value) VALUES ($userId, '$colorValue')";
  } else {
    $sql = "UPDATE colors SET color_value = '$colorValue' WHERE user_id = $user_id";
    $sql = ("SELECT * FROM colors WHERE user_id = $_SESSION['user_id']");
  $result = mysqli_query($conn,$sql);
  } -->



