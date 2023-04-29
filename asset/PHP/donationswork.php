<?php 
    include("connection.php");
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					
    // Get the form data
			$name = htmlspecialchars($_POST['name']);
			$email = $_POST['email'];
			$email2 = $_POST['email2'];
			$donationOption = htmlspecialchars($_POST['donation-option']);
			$donationOption2 = $_POST['donation-option2'];
			$paymentMethod = $_POST['payment-method'];
			$cardNumber = $_POST['card-number'];
			$cardName = htmlspecialchars($_POST['card-name']);
            $year = $_POST['year'];
            $month = $_POST['month'];
			$cvc = htmlspecialchars($_POST['cvc']);									
  }

		// Hash the card number and CVC
			$hashedCardNumber = hash('sha256', $cardNumber);
			$hashedCvc = hash('sha256', $cvc);

		// Insert the data into the database
			if(!empty($cardNumber) && !empty($cvc) && !empty($cardName) && !empty($year) && !empty($month)){
				$sql = "INSERT INTO donations (name, email, email2, donation_option, donation_option2, payment_method, card_number, card_name, year, month, cvc) VALUES ('$name', '$email', '$email2', '$donationOption', '$donationOption2 Ft', '$paymentMethod', '$hashedCardNumber', '$cardName', '$year', '$month', '$hashedCvc')";
			}
			if(empty($cardNumber) && empty($cvc) && empty($cardName) && empty($year) && empty($month)){
				$sql = "INSERT INTO donations (name, email, email2, donation_option, donation_option2, payment_method, card_number, card_name, year, month, cvc) VALUES ('$name', '$email', '$email2', '$donationOption', '$donationOption2 Ft', '$paymentMethod', '0', 'none', '0', '0', '0')";
			}

	        if ($conn->query($sql) === TRUE) {
                if (isset($_POST['payment-method'])) {
                    $selected_radio = $_POST['payment-method'];
                  
                    // Check which radio button was selected
                    if ($selected_radio === 'transfer') {
                        // Send email for cash payment
                        if (isset($_SESSION['username'])) {
                            $to = $email;
                        } else {
                            $to = $email2;
                        }
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
                                width: 100%;
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
                          <h1>Köszönjük adományát!</h1>
                            
                          <img style= "width:100%; height:600px" src="https://valtozojovo.hu/asset/img/balaton5.jpg" alt="balatonkep">
                            
                          <h4>Kedves {$name}!</h4>
                          
                          <p>Megtisztel minket azzal, hogy mi általunk támogatja természetünket és hazánkat!</p>
                          <p>Mivel átutalással szeretne minket támogatni, kérjük felajánlott összegét küldje erre az adatokra:</p>
                          <p>Számlaszám: <br>
                          12345678-98765432-00000000</p>
                          <p>Név: <br>
                          Változó Jövő</p>
                            
                          <p>Ha nem Ön kezdeményezte ezt a tranzakciót akkor kérem törölje az üzenetet</p>
              
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
                  echo "window.alert('Köszönjük! Adatainkat emailben küldjük!');";
                  echo "window.location.href='" . $_SERVER['HTTP_REFERER'] . "';";
                  echo "</script>";
            			  

                    } else if ($selected_radio === 'card') {
                      // Send email for card payment
                      
                        $to = $email2;
                      $subject = '=?UTF-8?B?' . base64_encode('Tranzakció sikeres') . '?=';
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
                              width: 100%;
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
                          <h1>Köszönjük adományát!</h1>
                          
                          <img style="width="100%" height="600px" src="https://valtozojovo.hu/asset/img/balaton5.jpg" alt="balatonkep">
                          
                          <h4>Kedves {$name}!</h4>
                          
                          <p>Megtisztel minket azzal, hogy mi általunk támogatja természetünket és hazánkat!</p>
                          <p>Mivel úgy döntött kártyás fizetéssel támogat minket, így ezáltal nincs további teendője.</p>
                          <p>Mégegyszer köszönjük hogy támogat minket és hazánkat!</p>
                          
                          <p>Ha nem Ön kezdeményezte ezt a tranzakciót akkor kérem törölje az üzenetet</p>
              
                          <p>Köszönjük, hogy a mi oldalunkat választottad! Amennyiben bármilyen kérdésed van, fordulj hozzánk bizalommal.</p>
                          
                              <p style="text-align: center";><b>Üdvözlettel <br> 
                              A Változó Jövő csapata és társai</b></p>
                              
                              <p style="text-align: center; border: 2px solid black; background-color: #6ea2f5; padding: 10px"">
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
                	  echo "window.alert('Köszönjük az adományt!!');";
                	  echo "window.location.href='" . $_SERVER['HTTP_REFERER'] . "';";
                	  echo "</script>";
                    }
                  }
                  
				
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				}
			$conn->close();
?>