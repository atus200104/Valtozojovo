<?php session_start(); ?>
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

	<!--Donation Form-->
	<link rel="stylesheet" href="asset/css/Donationform.css" type="text/css">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<link href="asset/css/lebeges.css" rel="stylesheet" type="text/css">
	
	<link href="asset/css/cookieanimation.css" rel="stylesheet" type="text/css">
	
	<link href="asset/css/scrolltop.css" rel="stylesheet" type="text/css">

	<title>VáltozóJövő - Táborozás</title>

	<!--CAPTCHA meghívása webről-->
	<script src="https://www.google.com/recaptcha/enterprise.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=6LcuCQklAAAAAMrqxtvVDIRUXBKrmDVtAWpLy-us"></script>

</head>
<body>
	<nav id="nav">
		<div class="navbar" id="navbar">
				<!-- USER logged in -->
				<?php if (isset($_SESSION['username'])): ?>
					<a href="logout.php" class="button">
    					<i id="logout-icon" class="bi bi-power"></i>
    					<span class="tooltip" id="tooltip">Kijelentkezés</span>
				    </a>
					<p id="navtext"><b style="visibility: visible; opacity: 1;">Üdvözöllek <?php echo $_SESSION['username']; ?>!</b></p>
				
                    <a href="felhaszn.php" class="trigger"><i id="person" class="bi bi-person-circle"></i></a>
				
			

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

<div class="animated fadeInLeft">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="asset/img/carousel1.jpg" class="d-block w-100" alt="First slide">
      </div>
      <div class="carousel-item">
        <img src="asset/img/kepek5.jpg" class="d-block w-100" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img src="asset/img/kepek1.jpg" class="d-block w-100" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img src="asset/img/kepek4.jpg" class="d-block w-100" alt="Fourth slide">
      </div>
    </div>
  </div>
</div>


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


	
<!--NAVIGÁCIÓ-->
	 <section id="referenciak" class="wow fadeInUp" data-wow-delay="0.1s">
		<div class="container-fluid clearfix">
			<div class="row">
				<div class="col-xl-3">
					<div class="keret position-sticky">
						<h4 class="fst-italic py-3 px-3 text-white text-center" style="border:2px solid black; background-color: purple">Navigáció</h4>
						<div class="oldalnav">
							<ul>
								<a href="index.php"><li>Főoldal</li></a>
							    <li class="active">Táborozz Velünk!</li>
								<a href="Donation.php"><li >Támogasd a Természetet!</li></a>

								<a href="Esemeny.php"><li>Eddigi események</li></a>

								<li class="dropdown"><a href="Területek.php">Területek</a>
									<div class="dropdown-content">
										<a href="Aggtelek.php">Aggteleki Nemzeti Park</a>
										<a href="Balatonfelv.php">Balaton-felvidéki Nemzeti Park</a>
										<a href="Bukki.php">Bükki Nemezeti Park</a>
										<a href="DunaDrava.php">Duna-Dráva Nemzeti Park</a>
										<a href="DunaIpoly.php">Duna-Ipoly Nemzeti Park</a>
										<a href="Ferto.php">Fertő-Hanság Nemzeti Park</a>
										<a href="Hortobagyi.php">Hortobágyi Nemzeti Park</a>
										<a href="Kiskun.php">Kiskunsági Nemezeti Park</a>
										<a href="Koros.php">Körös-Maros Nemzeti Park</a>
										<a href="Orsegi.php">Őrségi Nemzeti Park</a>
									</div>
									<a class="arrownav down"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
<!--NAVIGÁCIÓ-->

	<!--TARTALOM-->
	<div class="col-xl-6 keret">
		<article>
		<h2 class="fst-italic py-3 px-3 text-white" style="border:2px solid black; background-color: purple">Jelentkezz bátran!</h2>
		
			<div class="row wow fadeInUp" data-wow-delay="0.2s">
				<div class="col-md-12 justify-content-center">
				

				<form action="asset/PHP/joinphp.php" class="form-control" style="width: 100%;" method="post" id="donation-form">
					  <div class="form-row">
						<h4>Gyermek neve<b class="text-danger">*</b></h4>
							<label for="first_name">Vezetéknév:</label>
								<input type="text" id="first_name" name="first_name" placeholder="Gyermek Vezetékneve" required>
								
							<label for="last_name">Keresztnév:</label>
								<input type="text" id="last_name" name="last_name" placeholder="Gyermek Keresztneve" required>

							<label for="birth_date">Születési év:</label>
							<input type="date" id="birth_date" name="birth_date" max="2018-12-31" min="1995-01-01" required>
							
							
						<label for="location">Helyszín</label>
							<select type="text" id="location" name="location" required>
								<option value="Szalamandra Erdei Iskola - Aggteleki Nemezeti Park">Szalamandra Erdei Iskola - Aggteleki Nemezeti Park</option>
								<option value="Zánkai Erzsébet-tabor - Balaton-felvidéki Nemezeti Park">Zánkai Erzsébet-tábor - Balaton-felvidéki Nemezeti Park</option>
								<option value="„BIKK-BETYÁR” Természetismereti tábor - Bükki Nemezeti Park">„BIKK-BETYÁR” Természetismereti tábor - Bükki Nemezeti Park</option>
								<option value="Béda tábor - Duna-Dráva Nemezeti Park">Béda tábor - Duna-Dráva Nemzeti Park</option>
								<option value="Nagybörzsönyi Ifjúsági Tábor - Duna-Ipoly Nemezeti Park">Nagybörzsönyi Ifjúsági Tábor - Duna-Ipoly Nemezeti Park</option>
								<option value="XXII. Szigetközi Természetismereti tábor - Fertő-Hanság Nemezeti Park">XXII. Szigetközi Természetismereti tábor - Fertő-Hanság Nemzeti Park</option>
								<option value="Családi hagyományörző tábor - Hortobágyi Nemzeti Park">Családi hagyományőrző tábor - Hortobágyi Nemzeti Park</option>
								<option value="Önkéntes természetvédelmi tábor - Kiskunsági Nemzeti Park">Önkéntes természetvédelmi tábor - Kiskunsági Nemzeti Park</option>
								<option value="Állatparki KalandoZOO tábor - Körös-Maros Nemzeti Park">Állatparki KalandoZOO tábor - Körös-Maros Nemzeti Park</option>
								<option value="Szaknyér Ifjúsági Tábor - Őrségi Nemezeti Park">Szaknyér Ifjúsági Tábor - Őrségi Nemezeti Park</option>
							</select>

								<br><br>
							<h4>Szülő/Gondviselő neve <b class="text-danger">*</b></h4>
								<label for="parent_first_name">Vezetéknév</label>
									<input type="text" id="parent_first_name" name="parent_first_name" placeholder="Szülő Vezetékneve" required>
								
								<label for="parent-last-name">Keresztnév</label>
									<input type="text" id="parent_last_name" name="parent_last_name" placeholder="Szülő Keresztneve" required>
									
									
								<br><br>
							<h4>Lakcím <b class="text-danger">*</b></h4>
							    <label for="country">Ország:</label>
									<input type="text" id="country" name="country" placeholder="Ország" value="Magyarország" readonly>
									
								<label for="county">Megye:</label>
    								<select type="text" id="county" name="county" required>
    								    <option value="Baranya megye">Baranya megye</option>
    								    <option value="Bács-Kiskun megye">Bács-Kiskun megye</option>
    								    <option value="Békés megye">Békés megye</option>
    								    <option value="Borsod-Abaúj-Zemplén megye">Borsod-Abaúj-Zemplén megye</option>
    								    <option value="Csongrád-Csanád megye">Csongrád-Csanád megye</option>
    								    <option value="Fejér megye">Fejér megye</option>
    								    <option value="Győr-Moson-Sopron megye">Győr-Moson-Sopron megye</option>
    								    <option value="Hajdú-Bihar megye">Hajdú-Bihar megye</option>
    								    <option value="Heves megye">Heves megye</option>
    								    <option value="Jász-Nagykun-Szolnok megye">Jász-Nagykun-Szolnok megye</option>
    								    <option value="Komárom-Esztergom megye">Komárom-Esztergom megye</option>
    								    <option value="Nógrád megye">Nógrád megye</option>
    								    <option value="Pest megye">Pest megye</option>
    								    <option value="Somogy megye">Somogy megye</option>
    								    <option value="Szabolcs-Szatmár-Bereg megye">Szabolcs-Szatmár-Bereg megye</option>
    								    <option value="Tolna megye">Tolna megye</option>
    								    <option value="Vas megye">Vas megye</option>
    								    <option value="Veszprém megye">Veszprém megye</option>
    								    <option value="Zala megye">Zala megye</option>
    								    
    								</select>
									
								<label for="postal_code">Irányítószám:</label>
									<input type="text" id="postal_code" name="postal_code" placeholder="Irányítószám" oninput="return onlyNumberKey(event)" inputmode="numeric" minlength="4" maxlength="4" required>
									
								<label for="city">Város:</label>
									<input type="text" id="city" name="city" placeholder="Város" required>
								
								<label for="address1">Utca, Házszám:</label>
									<input type="text" id="address1" name="address1" placeholder="Utca, Házszám" required>
								
								<label for="address2">Lépcsőház, Emelet, Ajtó:<b class="text-warning">*</b></label>
									<input type="text" id="address2" name="address2" placeholder="Emelet, ajtó (Nem kötelező)">

								<br>
							<h4>Elérhetőség<b class="text-danger">*</b></h4>
								<label for="mobile">Telefonszám</label>
									<input type="tel" id="mobile" name="mobile" placeholder="+36123456789 vagy 06123456789" pattern="((?:\+?3|0)6)(?:-|\()?(\d{1,2})(?:-|\))?(\d{3})-?(\d{3,4})" minlength="11" maxlength="12" required>
									<label class="text-danger">Csak magyar telefonszám fogadható el(+36 / 06)!</label>
									
									
								<label for="email">Email:</label>
        						<?php if (isset($_SESSION['username'])): ?>
                                <input type="email" id="email" name="email" placeholder="email@mail.com" value="<?php echo $_SESSION['email']; ?>" pattern="^[a-zA-Z0-9._%+-]+@(gmail|yahoo|hotmail|outlook|live|aol)\.(com|com\.[a-zA-Z]{2}|co\.uk)$" readonly>
                                <?php else: ?>
                                <input type="email" id="email" name="email" placeholder="email@mail.com" pattern="^[a-zA-Z0-9._%+-]+@(gmail|yahoo|hotmail|outlook|live|aol)\.(com|com\.[a-zA-Z]{2}|co\.uk)$" required>
                                <?php endif; ?>
							    <br>
							    
							<div class="button-container">
								<button class="w-100" type="submit-button">Jelentkezés</button>
							</div>	
					  </form>
				</div>
			</div>
		</article>
	</div>  
	<!--TARTALOM-->

			<!--HÍREK-->
				<div class="col-xl-3">
					<div class="keret">
					<h4 class="fst-italic py-3 px-3 text-white text-center" style="border:2px solid black; background-color: purple">Időpontok</h4>
						<div class="news">
							<p class="text-center"><strong><u>Táboraink és kezdésük!</u></strong></p>
							<!-- SOR 1 -->
							<p class="text-center mx-4">Szalamandra Erdei Iskola - Aggteleki Nemezeti Park <br> 2023 Június 19 (hétfő) - 2023 Június 23 (péntek)</p>
							<hr class="my-2" style="margin-left: 30px; margin-right: 30px; border: 1px solid black">
							<!-- SOR 1 -->

							<!-- SOR 2 -->
							<p class="text-center mx-4">Zánkai Erzsébet-tábor - Balaton-felvidéki Nemezeti Park <br> 2023 Június 26 (hétfő) - 2023 Június 30 (péntek)</p>
							<hr class="my-2" style="margin-left: 30px; margin-right: 30px; border: 1px solid black">
							<!-- SOR 2 -->

							<!-- SOR 3 -->
							<p class="text-center mx-4">„BIKK-BETYÁR” Természetismereti tábor - Bükki Nemezeti Park <br> 2023 Július 3 (hétfő) - 2023 Július 7 (péntek)</p>
							<hr class="my-2" style="margin-left: 30px; margin-right: 30px; border: 1px solid black">
							<!-- SOR 3 -->

							<!-- SOR 4 -->
							<p class="text-center mx-4">Béda tábor - Duna-Dráva Nemzeti Park <br> 2023 Július 10 (hétfő) - 2023 Július 14 (péntek)</p>
							<hr class="my-2" style="margin-left: 30px; margin-right: 30px; border: 1px solid black">
							<!-- SOR 4 -->

							<!-- SOR 5 -->
							<p class="text-center mx-4">Nagybörzsönyi Ifjúsági Tábor - Duna-Ipoly Nemezeti Park <br> 2023 Július 17 (hétfő) - 2023 Július 21 (péntek)</p>
							<hr class="my-2" style="margin-left: 30px; margin-right: 30px; border: 1px solid black">
							<!-- SOR 5 -->

							<!-- SOR 6 -->
							<p class="text-center mx-4">XXII. Szigetközi Természetismereti tábor - Fertő-Hanság Nemzeti Park <br> 2023 Július 24 (hétfő) - 2023 Július 28 (péntek)</p>
							<hr class="my-2" style="margin-left: 30px; margin-right: 30px; border: 1px solid black">
							<!-- SOR 6 -->
							
							<!-- SOR 7 -->
							<p class="text-center mx-4">Családi hagyományőrző tábor - Hortobágyi Nemzeti Park <br> 2023 Július 31 (hétfő) - 2023 augusztus 4 (péntek)</p>
							<hr class="my-2" style="margin-left: 30px; margin-right: 30px; border: 1px solid black">
							<!-- SOR 7 -->

							<!-- SOR 8 -->
							<p class="text-center mx-4">Önkéntes természetvédelmi tábor - Kiskunsági Nemzeti Park <br> 2023 augusztus 7 (hétfő) - 2023 augusztus 11 (péntek)</p>
							<hr class="my-2" style="margin-left: 30px; margin-right: 30px; border: 1px solid black">
							<!-- SOR 8 -->

							<!-- SOR 9 -->
							<p class="text-center mx-4">Állatparki KalandoZOO tábor - Körös-Maros Nemzeti Park <br> 2023 augusztus 14 (hétfő) - 2023 augusztus 18 (péntek)</p>
							<hr class="my-2" style="margin-left: 30px; margin-right: 30px; border: 1px solid black">
							<!-- SOR 9 -->

							<!-- SOR 10 -->
							<p class="text-center mx-4">Szaknyér Ifjúsági Tábor - Őrségi Nemezeti Park <br> 2023 augusztus 21 (hétfő) - 2023 augusztus 25 (péntek)</p>
							<!-- SOR 10 -->
						  </div>
						</div>

						<!-- <div class="row wow fadeInUp" data-wow-delay="0.4s">
							<div style="margin-top: 15px; margin-bottom: 5px;">
								<div class="keret">
									<h4 class="fst-italic py-3 px-3 text-white text-center" style="border:2px solid black; background-color: purple">Info</h4>
									<section id="szolgaltatasok">
                            <div class="px-3">
                                    <p class="text-center"><strong><u>Túravezetés</u></strong></p>
                                    <p style="margin-left: 25px">Gyermekek körében kifejezetten kedvelt program, melyben remek alkalom nyílik közelebb kerülni a természethez.</p>
                                    <p style="margin-left: 25px">2015-ben indult az első túravezetés a Bükki Nemzeti Park területén.</p>
                                    <hr class="my-2" style="margin-left: 30px; margin-right: 30px; border: 1px solid black">
                                    <p class="text-center"><strong><u>Kempingezés</u></strong></p>
                                    <p style="margin-left: 25px">Ki ne vágyna egy jó kempingezésre egy jó társasággal!Mályvacukor sütögetés a tábortűz mellett, fantasztikus történet mesélésekkel fűszerezve.</p>
                                    <p style="margin-left: 25px">A túrázást követő évben döntöttünk úgy, hogy szeretnénk bővíteni a közösségi élményeinket, erre kíváló lehetőséget biztosít a kempingezés</p>
                                    <hr class="my-2" style="margin-left: 30px; margin-right: 30px; border: 1px solid black">
                                    <p class="text-center"><strong><u>Nyári táborok</u></strong></p>
                                    <p style="margin-left: 25px">Az elmúlt években a nagy érdeklődés miatt kettő turnust fogunk indítani nyáron a lelkesek számára.</p>
                                    <p style="margin-left: 25px">Első turnus a 12-17 éves gyerekeknek indul augusztus első hetében. Második turnus a 18-25 éves fiataloknak szól, nekik augusztus második hetében várható a tábor kezdete.</p>
                                    <p style="margin-left: 25px">Mindenkit kérünk, hogy a korosztályának megfelelő csoportba jelentkezzen a köveztkező email címen!<br>info@nemzet.hu<br>További infót a Táborozz velünk! oldalon találhattok.</p>
										  </div>	
									</section>
								</div>
							</div>
						</div> -->


						<div class="row wow fadeInUp" data-wow-delay="0.4s">
							<div style="margin-top: 15px">
								<div class="keret">
									<h4 class="fst-italic py-3 px-3 text-white text-center" style="border:2px solid black; background-color: purple">Ügyfélszolgálat</h4>
									<div class="px-3 border border-dark">
										<table class="table">
										  <thead>
											<tr>
											  <th>Nap</th>
											  <th>Nyitás</th>
											  <th>Zárás</th>
											</tr>
										  </thead>
										  <tbody>
											<tr>
											  <td>Hétfő</td>
											  <td>7:00</td>
											  <td>19:00</td>
											</tr>
											<tr>
											  <td>Kedd</td>
											  <td>7:00</td>
											  <td>19:00</td>
											</tr>
											<tr>
											  <td>Szerda</td>
											  <td>7:00</td>
											  <td>19:00</td>
											</tr>
											<tr>
											  <td>Csütörtök</td>
											  <td>7:00</td>
											  <td>19:00</td>
											</tr>
											<tr>
											  <td>Péntek</td>
											  <td>7:00</td>
											  <td>19:00</td>
											</tr>
											<tr>
											  <td>Szombat</td>
											  <td>8:00</td>
											  <td>17:00</td>
											</tr>
										  </tbody>
										  <tfoot>
											<tr>
											  <td>Vasárnap</td>
											  <td class="text-danger">ZÁRVA!</td>
											  <td></td>
											</tr>
										  </tfoot>
										</table>
										<h4 class="fst-italic py-3 px-3 text-white text-center" style="border:2px solid black; background-color: purple">Kapcsolat</h4>
										<p>Email: valtozoj@valtozojovo.hu vagy <a href="mailto:valtozoj@valtozojovo.hu ;"><br> katt ide.</a></p> 
										<p id="phone">Telefonszám: +36/06 12 345 6789</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!--HÍREK-->

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

<!--LOGIN/REGISTRATION FORM-->
<div id="popup" class="overlay" >
	<div class="wrapper">
		<a href="#" class="close">&times;</a>
		<div class="column details">
			<div class="signin">
				<h1 class="text-white">Bejelentkezés</h1>
				<form action="login.php" method="POST" class="text-center">
					<input type="name" placeholder="Felhasználónév" name="username" class="margin" required>
					<input type="password" placeholder="Jelszó" name="password" class="margin" required>
					<button type="submit" value="Bejelentkezés" name="submit" class="form-submit">Bejelentkezés</button>
				</form>
					<span class="text-center text-white">Még nics fiókod?<button sytle="color:#10011f" id="signup">Regisztrálj most!</button></span>
			</div>
			<div class="signup">
				<h1 class="text-white">Regisztráció</h1>
				<form action="register.php" method="POST" class="text-center">
					<input type="text" id="username" name="username" placeholder="Felhasználónév"  class="margin" required>
					<input type="email" id="email" name="email" placeholder="Email" class="margin" pattern="^[a-zA-Z0-9._%+-]+@(gmail|yahoo|hotmail|outlook|live|aol)\.(com|com\.[a-zA-Z]{2}|co\.uk)$" oninvalid="alert('Csak gmail, yahoo, hotmail vagy outlook fiókot használhat!');" required>
					<input type="password" name="password" id="password" placeholder="Jelszó" class="margin" required>
					<input type="password" name="passwordagain" id="passwordagain" placeholder="Jelszó Újra" class="margin" required>


						<div class="recaptcha-container">
							<div type="hidden" name="g-recaptcha-response" class="g-recaptcha" data-size="normal" data-sitekey="6LdK1AwlAAAAAJ0DnAHU-Gqa9lnCYx_WdyMPaEMd" data-callback="enableSubmit" style="-moz-transform:scale(0.77); -ms-transform:scale(0.77); -o-transform:scale(0.77); -moz-transform-origin:0; -ms-transform-origin:0; -o-transform-origin:0; -webkit-transform:scale(0.77); transform:scale(0.77); -webkit-transform-origin:0 0; transform-origin:0; filter: progid:DXImageTransform.Microsoft.Matrix(M11=0.77,M12=0,M21=0,M22=0.77,SizingMethod='auto expand');" required></div>
						</div>
							<button type="submit" id="submitBtn" disabled class="form-submit" value="Regisztráció" name="submit">Regisztráció</button>


				</form>
					<span class="text-center text-white">Már van fiókod?<button sytle="color:#10011f" id="signin">Jelentkezz be!</button></span>
			</div>
		</div>
	
			<div class="column content">
				<div class="signin text-white">
					<h1 style="color:#a10ba1">Üdvözlünk weblapunkon!</h1>
				</div>
				<div class="signup text-white">
					<h1 style="color:#a10ba1">Üdvözlünk az oldalon!</h1>
					<b><p class="text-white">Örülünk hogy minket választ!</p></b>
				</div>
			</div>
		</div>
	</div>
<!--LOGIN/REGISTRATION FORM-->

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

<!--LOGIN/REG_EXIT-->
<script src="asset/js/login_reg.js"></script>
<!--LOGIN/REG_EXIT-->

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

<script src="asset/js/donationanimation.js"></script>

<!--CAPTCHA box and validation-->
<script src="asset/js/captcha.js"></script>

<script src="asset/js/captcha.js"></script>

<!-- Automatic logout (Change time in javascript) -->
<?php 
  if (isset($_SESSION['username'])) {
    echo '<script>var loggedIn = true;</script>';
    echo '<script src="asset/js/logintimer.js"></script>';
  }
?>

</body>
</html>