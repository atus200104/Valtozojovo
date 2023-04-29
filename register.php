<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "cp9";
	$username = "valtozoj";
	$password = "Valtozo1234";
	$dbname = "valtozoj_donation";

	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "donation";

   // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the form data
    $username_input = "";
    $email_input = "";
    $password_input = "";
    $passwordagain = "";

    if (isset($_POST["username"])) {
        $username_input = test_input($_POST["username"]);
    }

    if (isset($_POST["email"])) {
        $email_input = test_input($_POST["email"]);
    }

    if (isset($_POST["password"])) {
        $password_input = test_input($_POST["password"]);
    }
    
    if (isset($_POST["passwordagain"])) {
        $password_again = test_input($_POST["passwordagain"]);
    }
}

    // Check if the email already exists
    $sql_check_email = "SELECT * FROM user WHERE email='$email_input'";
    $result_check_email = mysqli_query($conn, $sql_check_email);
    if (mysqli_num_rows($result_check_email) > 0) {
        // Email already exists
        echo "<script>";
        echo "window.alert('Email cím már létezik, kérlek használj másikat!');";
        echo "window.history.go(-1);";
        echo "</script>";
        exit;
    }
    

    // Check if the username already exists
    $sql_check_username = "SELECT * FROM user WHERE username='$username_input'";
    $result_check_username = mysqli_query($conn, $sql_check_username);
    if (mysqli_num_rows($result_check_username) > 0) {
        // Username already exists, suggest a new one
        $new_username = $username_input . rand(100, 999);
        echo "<form id='form' method='post'>";
        echo "<input type='hidden' id='new_username' name='new_username' value='".$new_username."'>";
        echo "<input type='hidden' id='email' name='email' value='".$email_input."'>";
        echo "<input type='hidden' id='password' name='password' value='".$password_input."'>";
        echo "<input type='hidden' id='password' name='password' value='".$password_again."'>";
        echo "</form>";
        echo "<script>
            var confirmed = false;
            function confirmUsername() {
                var new_username = '".$new_username."';
                var suggested_username = prompt('A felhasználónév már foglalt! Kérlek írjon egy új felhasználónevet vagy kattintson az OK gombra a felhasználónév elfogadásához!', new_username);
                if (suggested_username !== null) {
                    document.getElementById('new_username').value = suggested_username;
                    confirmed = true;
                    document.getElementById('form').submit(); // submit the form
                    return true;
                } else {
                    return false;
                }
            }
            if(confirmUsername()) {
                // Don't submit the form yet, wait for the suggested username
            } else {
                window.alert('Visszatérés az előző oldalra!');
                window.location.href='".$_SERVER['HTTP_REFERER']."';
            }
        </script>";
        exit;
    }

    // Update the $username_input variable with the suggested username
    if (!empty($_POST['new_username'])) {
        $username_input = test_input($_POST['new_username']);
    }
    
    
    // Password validation
    if($password_again === $password_input){
        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $password_input)) {
            echo "<script>";
            echo "window.alert('A jelszó tartalmazzon legalább 1 kis, 1 nagy és legalább 1 számot és legyen minimum 8 karakter hosszú!');";
            echo "window.history.go(-1);";
            echo "</script>";
            exit;
        }
    }
    else{
        echo "<script>";
        echo "window.alert('A jelszónak egyeznie kell!');";
        echo "window.history.go(-1);";
        echo "</script>";
        exit;
    }

    // Hash the password
    $hashedPassword = hash('sha256', $password_input);
    
    // Set the email value to the session variable
    $_SESSION['email'] = $email_input;
    
    //Base color for every user
    $color = '#707070';
    $_SESSION['color'] = $color;

    // Insert the data into the database
    $sql_username = "'$username_input'";
    $sql = "INSERT INTO user (username, email, password, color_value) VALUES ($sql_username, '$email_input', '$hashedPassword', '$color')";


    if ($conn->query($sql) === TRUE) {
        // Send confirmation email
        $to = $email_input;
        $subject = '=?UTF-8?B?' . base64_encode('Sikeres Regisztráció!') . '?=';
        $message = <<<EOM
        <html>
          <head>
            <style>
              body {
                font-family: Arial, sans-serif;
                font-size: 16px;
                line-height: 1.6;
                color: #333;
              }
              h1 {
                font-size: 24px;
                margin-bottom: 20px;
                padding: 20px;
                border: 2px solid black;
                background-color: #6ea2f5;
                text-align: center;
              }
              h4 {
                font-size: 18px;
                margin-bottom: 10px;
                text-align: center;
              }
              p {
                margin-bottom: 10px;
                text-align: center;
              }
              a {
                color: #337ab7;
                text-decoration: none;
              }
              img {
                display: inline-block;
                vertical-align: middle;
              }
            </style>
          </head>
          <body>
            <h1>Köszönjük regisztrációját!</h1>
            
            <img style="width="100%" height="600px" src="https://valtozojovo.hu/asset/img/balaton5.jpg" alt="balatonkep">
            
            <h4>Kedves {$username_input}!</h4>
            
            <p>Köszönjük, hogy regisztrált az weboldalunkon! A böngészés folytatásához kérjük, hogy kattintson az alábbi linkre és jelentkezzen be!</p>
            <p><a href="https://valtozojovo.hu">valtozojovo.hu</a></p>
            
            <p>Ha nem Te regisztráltál az weboldalunkra, kérjük, hagyd figyelmen kívül ezt az üzenetet.</p>

            <p>Köszönjük, hogy a mi oldalunkat választottad! Amennyiben bármilyen kérdésed van, fordulj hozzánk bizalommal.</p>
            
                <p style="text-align: center";><b>Üdvözlettel <br> 
                A Változó Jövő csapata és társai</b></p>
                
                <p style="text-align: center; border: 2px solid black; background-color: #6ea2f5; padding: 10px"">
                VáltozóJövő.hu<img style="width:30px" src="https://valtozojovo.hu/asset/img/Logo.ico" alt="Image"></p>
          </body>
        </html>
EOM;
        
        $headers = "From: valtozoj@valtozojovo.hu\r\n";
        $headers .= "Reply-To: valtozoj@valtozojovo.hu \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        mail($to, $subject, $message, $headers);
    
        echo "<script>";
        echo "alert('Sikeres Regisztráció!');";
        echo "window.history.go(-2);";
        echo "</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();


// Sanitize the input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
    

?>