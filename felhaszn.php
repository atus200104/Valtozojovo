<?php session_start(); ?>
<?php if(isset($_SESSION['username']))?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
	<meta name="description" content="Zoldjovo">
	<meta name="author" content="Tóth Attila">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="asset/css/styles.css" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

	<!--Log In / Sign In-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="asset/css/login-register.css">

	<!-- Search Icon
	<link rel="stylesheet" type="text/css" href="asset/css/SearchIconStyles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
	
	<!--Person Icon-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<!--Footer-->
	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/footers/">

	<!--FAVICON-->
	<link rel="icon" type="image/x-icon" href="asset/img/Logo.ico">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<link href="asset/css/lebeges.css" rel="stylesheet" type="text/css">

	<link href="asset/css/cookieanimation.css" rel="stylesheet" type="text/css">

	<link href="asset/css/scrolltop.css" rel="stylesheet" type="text/css">

	<title>VáltozóJövő - Felhasználó</title>

	<!--CAPTCHA meghívása webről-->
	<script src="https://www.google.com/recaptcha/enterprise.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=6LcuCQklAAAAAMrqxtvVDIRUXBKrmDVtAWpLy-us"></script>

</head>

<body>
	<nav id="nav">
		<div class="navbar" id="navbar">
				<!-- USER logged in -->
				<?php if (isset($_SESSION['username'])): ?>
					<a href="index.php" class="button2">
    					<i id="logout-icon" class="bi bi-arrow-left"></i>
				    </a>
					<p id="navtext"><b style="visibility: visible; opacity: 1;">Üdvözöllek <?php echo $_SESSION['username']; ?>!</b></p>
				
                    <a href="#" class="trigger"><i id="person" class="bi bi-person-circle"></i></a>
				

			<!-- USER logged out -->
				<?php else: ?>
					<a href="index.php"><img src="asset/img/Logo.ico" alt="logo"></a>
					<p id="navtext"><b style="visibility: visible; opacity: 1;">Változó Jövő, ahol segítségre találsz</b></p>
			
					<!-- <button class="btn-search">
						<a><i class="fas fa-search"></i></a>
					</button>
					<input type="text" class="input-search" placeholder="Kattintson a kereséshez..."> -->
				<a href="#popup" class="trigger"><i id="person" class="bi bi-person-circle"></i></a>
				<?php endif; ?>
    	 </div>
    </nav>
   

	<!-- <section id="szolgaltatasok" class="wow fadeInLeft" data-wow-delay="0.2s">
		<div class="container-fluid bg-secondary clearfix" >
			<div class="box">
				<span class="box1"><a href="#"><img src="img/aggteleki-logo-57x48-e1394573623114.png"></a></span>
			</div>
			<div class="box">
				<span class="box2"><a href="#"><img src="img/logo-balaton-felvidek-e1394573687333-1.png"></a></span>
			</div>
			<div class="box">
				<span class="box3"><a href="#"><img src="img/logo-bukk-e1394574400422.png"></a></span>
			</div>
			<div class="box">
				<span class="box4"><a href="#"><img src="img/logo-duna-drava-e1394573725311.png"></a></span>
			</div>
			<div class="box">
				<span class="box5"><a href="#"><img src="img/logo-duna-ipoly.png"></a></span>
			</div>
			<div class="box">
				<span class="box6"><a href="#"><img src="img/logo-ferto-hansag.png"></a></span>
			</div>
			<div class="box">
				<span class="box7"><a href="#"><img src="img/logo-hortobagy.png"></a></span>
			</div>
			<div class="box">
				<span class="box8"><a href="#"><img src="img/logo-kiskunsag.png"></a></span>
			</div>
			<div class="box">
				<span class="box9"><a href="#"><img src="img/logo-koros-maros-e1394573776774.png"></a></span>
			</div>
			<div class="box">
				<span class="box10"><a href="#"><img src="img/logo-orsegi-e1394574435736.png"></a></span>
			</div>
		</div>
	</section> -->


<!--TARTALOM-->
<div class="col-xl-12" style="margin-top: 150px; margin-bottom: 100px;">
  <form action="asset/PHP/save_color.php" method="POST" class="form-container wow fadeInUp" style="padding: 10px; display: flex; flex-direction: row; justify-content: space-between; align-items: center;">

	<div class="form-column form-right">
		<i id="profile" class="bi bi-person-square profile" style="color: <?php echo $_SESSION['color']?>"></i>
      
      
      <b><p style="text-transform: uppercase;"><?php echo $_SESSION['username']; ?></p></b>
      <hr style="border:1px solid black; width: 95%">
      <b><p style="text-align: center;">Email: <br><?php echo $_SESSION['email']; ?></p></b>

      <b><p style="text-align: center;">Jelszó: <br><span style="-webkit-text-security: disc; font-size: 25px"><?php echo $_SESSION['password']; ?></span></p></b>

      <hr style="border:1px solid black; width: 95%">

      <input style="border-radius: 10px; font-weight: bold;" type="text" id="newusername" name="newusername" placeholder="Új felhasználónév">

      <!-- Input field for new password -->
      <input style="border-radius: 10px; font-weight: bold;" type="password" id="newpassword" name="newpassword" placeholder="Új jelszó">

<div id="error-msg" class="error <?php if(isset($_SESSION['passwordupdateerror']) || isset($_SESSION['passworderror']) || isset($_SESSION['passwordmatcherror']) || 
	isset($_SESSION['userupdateerror']) || isset($_SESSION['currentusermatcherror']) || isset($_SESSION['usermatcherror']) ||
	isset($_SESSION['colorerror'])) { echo ' show'; } ?>">
	<?php
		// Check for password update error
		if (isset($_SESSION['passwordupdateerror'])) {
			echo "{$_SESSION['passwordupdateerror']}";
			unset($_SESSION['passwordupdateerror']);
		}

		// Check for password validation error
		if (isset($_SESSION['passworderror'])) {
			echo "{$_SESSION['passworderror']}";
			unset($_SESSION['passworderror']);
		}

		//Check for same password error
		if(isset($_SESSION['passwordmatcherror'])){
			echo "{$_SESSION['passwordmatcherror']}";
			unset($_SESSION['passwordmatcherror']);
		}

		// Check for username update error
		if (isset($_SESSION['userupdateerror'])) {
			echo "{$_SESSION['userupdateerror']}";
			unset($_SESSION['userupdateerror']);
		}

		//Check for same username error
		if(isset($_SESSION['currentusermatcherror'])){
			echo "{$_SESSION['currentusermatcherror']}";
			unset($_SESSION['currentusermatcherror']);
		}

		if(isset($_SESSION['usermatcherror'])){
			echo "{$_SESSION['usermatcherror']}";
			unset($_SESSION['usermatcherror']);
		}

		//Check for color error
		if(isset($_SESSION['colorerror'])){
			echo "{$_SESSION['colorerror']}";
			unset($_SESSION['colorerror']);
		}
	?>
</div>

<div id="success-msg" class="success<?php if(isset($_SESSION['colorsuccess']) || isset($_SESSION['userupdatesuccess']) || 
	isset($_SESSION['passwordupdatesuccess'])) { echo ' show'; } ?>">
	<?php
		//Check for color succes
		if(isset($_SESSION['colorsuccess'])){
			echo "{$_SESSION['colorsuccess']}";
			unset($_SESSION['colorsuccess']);
		}

		// Check for username update success
		if (isset($_SESSION['userupdatesuccess'])) {
			echo "{$_SESSION['userupdatesuccess']}";
			unset($_SESSION['userupdatesuccess']);
		}

		// Check for password update success
		if (isset($_SESSION['passwordupdatesuccess'])) {
			echo "{$_SESSION['passwordupdatesuccess']}";
			unset($_SESSION['passwordupdatesuccess']);
		}
	?>
</div>

      <hr style="border:1px solid black; width: 95%">

      <!-- Submit button for updating data -->
		<div class="cont">
			<button type="submit" class="colorsubmit" formaction="asset/PHP/update_data.php" style="background-color: #A73F3F; box-shadow: 2px 2px 5px black; padding: 5px; border-radius: 20px;">Változtatások mentése</button>
			<button type="submit" class="colorsubmit2" formaction="asset/PHP/save_color.php" style="background-color: #A73F3F; box-shadow: 2px 2px 5px black; padding: 5px; margin-right: 5px; border-radius: 20px">Szín véglegesítése</button>
			<input type="color" class="favcolor" id="favcolor" name="favcolor" value="<?php echo isset($_SESSION['color']) ? $_SESSION['color'] : '#707070'; ?>" style="height: 30px; width: 30px; float: right; margin-top: 4px;">
		</div>
	</div>
  </form>
</div>
<!--TARTALOM-->

<!--FOOTER-->
<div class="container wow fadeInUp" data-wow-delay="0.5s">
	<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top text-white">
	  <div class="col-md-4 d-flex align-items-center floatcim">
		<span class="mb-3 mb-md-0"><img src="asset/img/Logo.ico" style="height: 60px;">VáltozóJövő</span>
	  </div>
  
	  <ul class="nav col-md-4 justify-content-end list-unstyled d-flex float">
		<li class="aszfstylelist"><a href="Aszf.php" class="aszfstyle"><b>ÁSZF</b></a></li>
		<li><a href="mailto:valtozoj@valtozojovo.hu"><i class="bi bi-envelope-fill text-white ficon"></i></a></li>
		<li><a class="phone" href="tel:+06301234567"><i class="bi bi-telephone-fill text-white ficon" ></i></a></li>
	  </ul>
	</footer>
  </div>
<!--FOOTER-->

<!--COOKIE FIELD-->
<div id="cookiesPopup">
    <div id="cookiesContent">
        <div id="cookiesText">Ez az oldal sütiket használ annak érdekében, hogy jobb felhasználói élményben részesüljön.</div>
          <div id="cookiesButtons">
            <button id="acceptBtn" class="cookie-button" style="border-radius: 5px;">Elfogadás</button>
            <button id="closeBtn" class="cookie-button" style="border-radius: 5px;">Elutasítás</button>
        </div>
    </div>
  </div>
<!--COOKIE FIELD-->

<!--BACK TO TOP BUTTON-->
<button id="back-to-top" onclick="scrollToTop()"><i class="bi bi-arrow-up up"></i></button>
<script src="asset/js/top.js"></script>
<!--BACK TO TOP BUTTON-->

<!--Animations-->
<script src="asset/js/navbaranimation.js"></script>
<script src="asset/js/wow.min.js"></script>
<script src="asset/js/main.js"></script>
<!--COOKIE RULE/ANIMATION/STORING-->
<script src="asset/js/popup.js"></script>
<!--User Interface color picker-->
<script src="asset/js/login_reg.js"></script>

<!-- Automatic logout (Change time in javascript) -->
<?php 
  if (isset($_SESSION['username'])) {
    echo '<script>var loggedIn = true;</script>';
    echo '<script src="asset/js/logintimer.js"></script>';
  }
?>
</body>
</html>
