<?php

include("connection.php");
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUsername = $_POST['newusername'];
    $newPassword = $_POST['newpassword'];


    if (!empty($newUsername) && $newUsername !== $_SESSION['username']) {
        // Check if new username already exists in database
        $sql = "SELECT * FROM user WHERE username='$newUsername'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $errorMessage = 'A felhasználónév foglalt.';
        }
    }
    
    // Validate new username and password
    if (!empty($newUsername)) {
        // Check if new username already exists in database
        if ($newUsername === $_SESSION['username']) {
            $_SESSION['currentusermatcherror'] = 'Felhasználóneved már használod!' . $conn->error;
        }
        elseif($newUsername !== $_SESSION['username']){
            $sql = "SELECT * FROM user WHERE username='$newUsername'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $_SESSION['usermatcherror'] = 'A felhasználónév már foglalt.';
            }else {
                // Update username
                $sql = "UPDATE user SET username='$newUsername' WHERE username='{$_SESSION['username']}'";
                if ($conn->query($sql) === TRUE) {
                    if(!empty($newUsername)){
                        // Update session username
                        $_SESSION['username'] = $newUsername;
                        $_SESSION['userupdatesuccess'] = 'Felhasználónév sikeresen frissítve!<br>';
                    }
                } else {
                    // Set error message
                    $_SESSION['userupdateerror'] = 'Hiba a felhasználónév frissítésében: ' . $conn->error;
                }
            } 
        }
    }
    

    if(!empty($newPassword)){
        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $newPassword)){
            $_SESSION['passworderror'] = 'A jelszónak tartalmaznia kell legalább 1 kis, 1 nagy és legalább 1 számot és legyen minimum 8 karakter hosszú!. ' . $conn->error;
        } 
        elseif(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $newPassword) && $newPassword === $_SESSION['password']) {
            $_SESSION['passwordmatcherror'] = 'Ez a jelszó már használatban van!' . $conn->error;
        }
    else{
    // Hash password using SHA256 algorithm
    $newPasswordHashed = hash('sha256', $newPassword);
    // Update password
        $sql = "UPDATE user SET password='$newPasswordHashed' WHERE username='{$_SESSION['username']}'";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['passwordupdatesuccess'] = 'Jelszó sikeresen frissítve!.';
            $_SESSION['password'] = $newPassword;
        } else {
            $_SESSION['passwordupdateerror'] = 'Hiba a jelszó frissítésében: ' . $conn->error;
            }
        }
    }
}

// Redirect user back to the previous page
header("Location: {$_SERVER['HTTP_REFERER']}");
$conn->close();
?>