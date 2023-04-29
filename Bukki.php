<?php session_start() ?>
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

	<link rel="stylesheet" type="text/css" href="asset/css/gombstyle.css">
	
	<link href="asset/css/cookieanimation.css" rel="stylesheet" type="text/css">
	
	<link href="asset/css/scrolltop.css" rel="stylesheet" type="text/css">

	<title>VáltozóJövő - Bükki Nemzeti Park</title>

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
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
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
      <div class="carousel-item">
        <img src="asset/img/kepek6.jpg" class="d-block w-100" alt="Fifth slide">
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
								
								<?php if (isset($_SESSION['username'])): ?>
								<a href="Tabor.php"><li>Táborozz Velünk!</li></a>
								<?php else: ?>
								<a href="#popup" onclick="showAlert()"><li>Táborozz Velünk!</li></a>
								<script>
									function showAlert(){
										alert("Kérlek regisztrálj vagy jelentkezz be az oldal használatához");
									}
								</script>
								<?php endif; ?>
								
								<a href="Donation.php"><li>Támogasd a Természetet!</li></a>

								<a href="Esemeny.php"><li>Eddigi események</li></a>

								<li class="dropdown active"><a href="Területek.php">Területek</a>
									<div class="dropdown-content">
										<a href="Aggtelek.php">Aggteleki Nemzeti Park</a>
										<a href="Balatonfelv.php">Balaton-felvidéki Nemzeti Park</a>
										<a class="active1" style="margin-bottom: 2px">Bükki Nemezeti Park</a>
										<a href="DunaDrava.php">Duna-Dráva Nemzeti Park</a>
										<a href="DunaIpoly.php">Duna-Ipoly Nemzeti Park</a>
										<a href="Ferto.php">Fertő-Hanság Nemzeti Park</a>
										<a href="Hortobagyi.php">Hortobágyi Nemzeti Park</a>
										<a href="Kiskun.php">Kiskunsági Nemezeti Park</a>
										<a href="Koros.php">Körös-Maros Nemzeti Park</a>
										<a href="Orsegi.php">Őrségi Nemzeti Park</a>
									</div>
									<a class="arrownav down" style="border-color: white;"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
	<!--NAVIGÁCIÓ-->

	<!--TARTALOM-->
	<div class="col-xl-6 keret">
		 
		<h2 class="fst-italic py-3 px-3 text-white" style="border:2px solid black; background-color: purple">Bükki Nemzeti Park</h2>
			
		<!--SOR 1-->
			<div class="row wow fadeInUp" data-wow-delay="0.2s">
				<div class="col-md-6 lightbox-trigger">
					<img class="img-fluid thumbnail leftimage my-4" src="asset/img/bukk1.jpg">
				</div>

				<div class="col-md-6">
					<h3 class="my-4"><strong>Védd te is, amit ajándékba kaptunk!</strong></h3>
					<h4>A mi felelősségünk minden tőlünk telhetőt megtenni azért, hogy egy olyan bolygón éljünk, amely nemcsak nekünk, hanem minden földi életnek otthont ad.</h4>
				</div>
				<hr class="my-4">
			</div>
		<!--SOR 1-->

		<!--SOR 2-->
			<div class="row wow fadeInUp" data-wow-delay="0.3s">
				<div class="col-md-6">
					<h3 class="blog-post-title mb-1">Főbb látnivalók a Bükki Nemzeti Parkban:</h3>
					<h6>Az egyik legnépszerűbb látnivaló a park erdői között zakatoló erdei vasút. A park hegy csúcsain még megtalálhatóak olyan vármaradványok, amiket az idő vasfoga epuszíttott már. Azonban Diósgyőri vár és Hollókői vár tökéletes állapotban vannak és hazánk legfontosabb műemlékei közé tartoznak. Kulturális helyszínként is szolgálnak, több rendezvény és fesztivál is kerül megrendezésre a várak falain belül.</h6>
				</div>

				<div class="col-md-6 lightbox-trigger">
					<img class="img-fluid thumbnail rightimage" style="margin-top: 20px;" src="asset/img/bukk2.jpg">
				</div>
				<hr class="my-4">
			</div>
		<!--SOR 2-->

		<!--SOR 3-->
			<div class="row wow fadeInUp" data-wow-delay="0.4s">
				<div class="col-md-6 lightbox-trigger">
					<img class="img-fluid thumbnail leftimage" src="asset/img/bukk3.jpg">
				</div>

				<div class="col-md-6 my-4">
					<h6>A Bükki Nemzeti Park az Északi-középhegységben fekszik. 1977-ben alapították, így az egyik legrégebbi nemzeti park hazánkban. 40 ezer hektáron helyezkedik el, székhelye Egerben található. </h6>
					<h6>Legnagyobb részét tengeri üledékes kőzet borítja, mészkő és dolomit. Majdnem az egész parkot, több mint a 90 %-át erdő borítja. Csere-tölgyesek, hegyvidéki bükkösök és gyertyános tölgyesek nyújtanak élőhelyet a hegyvidék állatainak. </h6>
				</div>

				<hr class="my-4">
			</div>
		<!--SOR 3-->

		<!--SOR 4-->
			<div class="row wow fadeInUp" data-wow-delay="0.5s">
				<div class="col-md-6">
					<h6>A hegy természetes élőhelye a kerecsensólyomnak, a hiúznak, vadmacskának és szinte az összes Magyarországon előforduló denevérfajnak. Barna medve (ursus arctos) egyre ritkábban látható a hegyen, de azért az igazgatóság előre figyelmezteti a kirándulókat, mi a teendő, ha mégis találkoznál eggyel. </h6>
					<h6>A Nemzeti Park történelmi jelentőséggel is bír, hiszen a neandervölgyi ember eszközeit és a csontmaradványait is felfedezték itt.</h6>
				</div>

				<div class="col-md-6 lightbox-trigger">
					<img class="img-fluid thumbnail rightimage" src="asset/img/bukk4.jpg">
				</div>
				<hr class="my-4">
			</div>
		<!--SOR 4-->

			<div class="row wow fadeInUp" data-wow-delay="0.6s">
				<div class="container-fluid">
					<div class="row justify-content-center align-items-center">
					  <div class="col-12">
						<h2 class="fst-italic py-3 px-3 text-white text-center" style="border:4px solid black; background-color: purple">Jelenlegi táborhelyünk és helyszín-információ</h2>
						<h4 class="text-center">„BIKK-BETYÁR” Természetismereti tábor</h4>
						<img src="asset/img/Bukkimap.png" alt="Bukkimap" class="img-fluid keret">
					  </div>
					</div>
						<div class="col-md-12">
							<h6 class="py-3 join text-center">Jelentkezni a 
							<?php if(isset($_SESSION['username'])) : ?>
								<a href="Tabor.php">
								<?php else: ?>
								<a href="#popup" onclick="showAlert()">
								<?php endif; ?>
							    <u>Táborozz Velünk! </u></a>fülön teheti meg!<br><br>
								Ha szeretné megtekinteni a helyszínt kérem kattintson <a href="https://goo.gl/maps/DmihnCtFfRcLWabN9"><u>ide</u></a><br><br>
								A pontos időpontokért email-ben érdeklődjön ügyfálszolgálatunknál vagy tájékozódjon <a href="index.php"><u>főoldalunkon</u></a></h6>
						</div>
				</div>
				<!--EZ HÍVJA MEG A TÁBLÁT--><div id="data" style="display: none;"></div>
			</div>
	</div>  
	<!--TARTALOM-->
	
			<!--HÍREK-->
				<div class="col-xl-3">
					<div class="keret">
						<h4 class="fst-italic py-3 px-3 text-white text-center" style="border:2px solid black; background-color: purple">Jelentősebb események</h4>
						<div class="news">
							<p class="text-center"><strong><u>Csillagdai esték - 2023.07.18</u></strong></p>
							<p style="margin-left: 35px">A Hortobágy Magyarország egyik legkevésbé fényszennyezett területe – a zavaró fények hiánya a természetességnek is szinonímája, s ez az élővilág zavartalanságának is is alapvető feltétele.A zavaró fényektől mentes nemzeti park látogatói számára az éjszaka több látványosságot is nyújt. Talán a legfontosabb a szabad szemmel is látható csillagok száma.</p>
							
							<hr class="my-2" style="margin-left: 30px; margin-right: 30px; border: 1px solid black">
							
							<p class="text-center"><strong><u>Éjszaka a Tőserdőben - A macskabagoly nyomában 2023.08.03.</u></strong></p>
							<p style="margin-left: 35px">A macskabagoly korán fészkelő bagolyfélénk, a nászidőszak alatt igen aktív. Ilyenkor jellegzetes hangokkal kommunikálnak egymással. A hímek huhogó hangot hallatnak, míg a tojók nyávogó hangon kuvikolnak.</p>
							
							<hr class="my-2" style="margin-left: 30px; margin-right: 30px; border: 1px solid black">
							
							<p class="text-center"><u><strong>Hévízi-csatorna - kenutúra 2023.06.03</strong></u></p>
							<p style="padding-right: 60px; margin-left: 35px">A Hévízi-tó meleg vízének nagy részét a Hévízi-csatorna vezeti el. A télen is 20 ºC feletti víz felett a pára takaró mögül különféle tündérrózsák, és vízi madarak tűnnek elő.</p>
						  </div>
						</div>

						<div class="row wow fadeInUp" data-wow-delay="0.4s">
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
						</div>


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
										<p id="#phone">Telefonszám: +36/06 12 345 6789</p>
									</div>
								</div>
							</div>
						</div>
						<!-- EZ A TÁBLA LEKÉRDEZŐ GOMBJA -->
						<div class="row wow fadeInUp" data-wow-delay="0.4s">
							<div style="margin-top: 15px">
								<div class="keret">
							<h4 class="fst-italic py-3 px-3 text-white text-center" style="border:2px solid black; background-color: purple">Jelenlegi adatok</h4>
									<button id="showTable7Btn" onclick="showTable(7)" class="my-button">Állatok</button>
									<button id="hideTable7Btn" onclick="hideTable(7)" class="my-button" style="display: none;">Bezár</button>
									<button id="showTable8Btn" onclick="showTable(8)" class="my-button">Növények</button>		
									<button id="hideTable8Btn" onclick="hideTable(8)" class="my-button" style="display: none;">Bezár</button>
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
							<button type="submit" id="submitBtn" disabled class="form-submit " value="Regisztráció" name="submit">Regisztráció</button>


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
	
<!--KÉP MEGJELENÍTÉSE KATTINTÁSRA-->
<div class="lightbox">
	<div class="lightbox-content">
		<img src="" alt="">
		<span class="close1"></span>
	</div>
</div>
<!--KÉP MEGJELENÍTÉSE KATTINTÁSRA-->

<!--BACK TO TOP BUTTON-->
<button id="back-to-top" onclick="scrollToTop()"><i class="bi bi-arrow-up up"></i></button>
<script src="asset/js/top.js"></script>
<!--BACK TO TOP BUTTON-->

<!--KÉPEK-->
<script src="asset/js/gallery.js"></script>
<!--KÉPEK-->

<!--LOGIN/REG_EXIT-->
<script src="asset/js/login_reg.js"></script>
<!--LOGIN/REG_EXIT-->


<!--Animations-->
<script src="asset/js/navbaranimation.js"></script>
<script src="asset/js/wow.min.js"></script>
<script src="asset/js/main.js"></script>
<!--COOKIE RULE/ANIMATION/STORING-->
<script src="asset/js/popup.js"></script>

<script src="asset/js/table.js"></script>

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