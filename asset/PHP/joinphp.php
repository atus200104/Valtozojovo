<?php 
include("connection.php");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $first_name = htmlspecialchars($_POST['first_name']);
        $last_name = htmlspecialchars($_POST['last_name']);

        $birth_date = $_POST['birth_date'];
        $location = htmlspecialchars($_POST['location']);

        $parent_first_name = htmlspecialchars($_POST['parent_first_name']);
        $parent_last_name = htmlspecialchars($_POST['parent_last_name']);
        $address1 = htmlspecialchars($_POST['address1']);
        $address2 = htmlspecialchars($_POST['address2']);
        $city = htmlspecialchars($_POST['city']);
        $county = htmlspecialchars($_POST['county']);
        $postal_code = htmlspecialchars($_POST['postal_code']);
        $country = htmlspecialchars($_POST['country']);
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];

		
        if(!empty($address2)){
            $sql = "INSERT INTO `join` (first_name, last_name, birth_date, location, parent_first_name, 
                    parent_last_name, address1, address2, city, county, postal_code, country, mobile, email) 
                    VALUES ('$first_name', '$last_name', '$birth_date', '$location', '$parent_first_name', 
                    '$parent_last_name', '$address1', '$address2', '$city', '$county', '$postal_code',
                    '$country', '$mobile', '$email')";
        }
        else{
            $sql = "INSERT INTO `join` (first_name, last_name, birth_date, location, parent_first_name, 
                    parent_last_name, address1, address2, city, county, postal_code, country, mobile, email) 
                    VALUES ('$first_name', '$last_name', '$birth_date', '$location', '$parent_first_name', 
                    '$parent_last_name', '$address1', 'Nincs', '$city', '$county', '$postal_code',
                    '$country', '$mobile', '$email')";
            }
					
			if ($conn->query($sql) === TRUE) {
			    if(!empty($address2)){
                    // Send email
                          $to = $email;
                        $subject = '=?UTF-8?B?' . base64_encode('Adományozás teendői!') . '?=';
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
                              .text-center{
                                text-align: center;
                              }
                
                              .bodystyle{
                                border: 1px solid black; 
                                background-color: #c5f5ff; 
                                padding: 10px;
                              }
                            </style>
                          </head>
                        <body>
                        <div class="bodystyle">
                          <h1>Jelentkezését sikeresen megkaptuk!</h1>
                            
                          <img style= "width:100%; height:600px" src="https://valtozojovo.hu/asset/img/balaton5.jpg" alt="balatonkep">
                            
                           <p>Köszönjük, hogy programjaink közül választott és egyaránt jelentkezett is.</p>
                            <p>Beküldött adatai:</p>
                            <p>Gyermek neve: {$first_name} {$last_name}</p>
                            <p>Születési éve: {$birth_date}</p>
                            <p>Helyszín: {$location}</p>
                            <p>Szülő/gondviselő neve: {$parent_first_name} {$parent_last_name}</p>
                            <p>Ország: {$country}</p>
                            <p>Megye: {$county}</p>
                            <p>Irányítószám: {$postal_code}</p>
                            <p>Utca/házszám: {$address1}</p>
                            <p>Emelet/ajtó: {$address2}</p>
                            <p>Telefonszám: {$mobile}</p>
                            <p>Email: {$email}</p>
                            
                          <p>Ha nem ön jelentkezett kérem értesítse ügyfélszolgálatunkat!</p>
              
                          <p>Köszönjük, hogy a mi oldalunkat választottad! Amennyiben bármilyen kérdésed van, fordulj hozzánk bizalommal.</p>
                          
                          <p style="text-align: center";><b>Üdvözlettel <br> 
                          A Változó Jövő csapata és társai</b></p>
                                
                          <p style="text-align: center; border: 2px solid black; background-color: #6ea2f5; padding: 10px">
                          VáltozóJövő.hu<img style="width:30px" src="https://valtozojovo.hu/asset/img/Logo.ico" alt="Image"></p>
                          </div>
                      </body>
                    </html>
EOM;
                          
                    $headers = "From:valtozoj@valtozojovo.hu" . "\r\n" .
                               "Reply-To: valtozoj@valtozojovo.hu" . "\r\n" .
                               "X-Mailer: PHP/" . phpversion() . "\r\n" .
                               "MIME-Version: 1.0\r\n" .
                               "Content-type: text/html; charset=UTF-8\r\n";
                         
            
                    mail($to, $subject, $message, $headers);
                    
                    echo "<script>";
                    echo "window.alert('Sikeres Jelentkezés!');";
                    echo "window.location.href='".$_SERVER['HTTP_REFERER']."';";
                    echo "</script>";
			    }
			    elseif(empty($address2)){
			         // Send email
                        $to = $email;
                        $subject = '=?UTF-8?B?' . base64_encode('Adományozás teendői!') . '?=';
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
                              .text-center{
                                text-align: center;
                              }
                
                              .bodystyle{
                                border: 1px solid black; 
                                background-color: #c5f5ff; 
                                padding: 10px;
                              }
                            </style>
                          </head>
                        <body>
                        <div class="bodystyle">
                          <h1>Jelentkezését sikeresen megkaptuk!</h1>
                            
                          <img style= "width:100%; height:600px" src="https://valtozojovo.hu/asset/img/balaton5.jpg" alt="balatonkep">
                            
                          <h4>Kedves {$parent_first_name} {$parent_last_name}!</h4>
                          
                          <p>Köszönjük, hogy programjaink közül választott és egyaránt jelentkezett is.</p>
                            <p>Beküldött adatai:</p>
                            <p>Gyermek neve: {$first_name} {$last_name}</p>
                            <p>Születési éve: {$birth_date}</p>
                            <p>Helyszín: {$location}</p>
                            <p>Szülő/gondviselő neve: {$parent_first_name} {$parent_last_name}</p>
                            <p>Ország: {$country}</p>
                            <p>Megye: {$county}</p>
                            <p>Irányítószám: {$postal_code}</p>
                            <p>Utca/házszám: {$address1}</p>
                            <p>Telefonszám: {$mobile}</p>
                            <p>Email: {$email}</p>
                            
                          <p>Ha nem ön jelentkezett kérem értesítse ügyfélszolgálatunkat!</p>
              
                          <p>Köszönjük, hogy a mi oldalunkat választottad! Amennyiben bármilyen kérdésed van, fordulj hozzánk bizalommal.</p>
                          
                          <p style="text-align: center";><b>Üdvözlettel <br> 
                          A Változó Jövő csapata és társai</b></p>
                                
                          <p style="text-align: center; border: 2px solid black; background-color: #6ea2f5; padding: 10px">
                          VáltozóJövő.hu<img style="width:30px" src="https://valtozojovo.hu/asset/img/Logo.ico" alt="Image"></p>
                          </div>
                      </body>
                    </html>
EOM;
                          
                    $headers = "From:valtozoj@valtozojovo.hu" . "\r\n" .
                               "Reply-To: valtozoj@valtozojovo.hu" . "\r\n" .
                               "X-Mailer: PHP/" . phpversion() . "\r\n" .
                               "MIME-Version: 1.0\r\n" .
                               "Content-type: text/html; charset=UTF-8\r\n";
                         
            
                    mail($to, $subject, $message, $headers);
                    
                    echo "<script>";
                    echo "window.alert('Sikeres Jelentkezés!');";
                    echo "window.location.href='".$_SERVER['HTTP_REFERER']."';";
                    echo "</script>";
			    }
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
					$conn->close();
				}
	?>