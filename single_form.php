<?php
	include_once 'db.php';

	if (!empty($_POST['name'])) $name = $_POST['name']; else $name = null;
	if (!empty($_POST['surname'])) $surname = $_POST['surname']; else $surname = null;
	if (!empty($_POST['date_of_birth'])) $date_of_birth = $_POST['date_of_birth']; else $date_of_birth = null;
	if (!empty($_POST['mail'])) $mail = $_POST['mail']; else $mail = null;
	if (!empty($_POST['phone'])) $phone = $_POST['phone']; else $phone = null;
	$document_number = $_POST['document_number'];
	$position = $_POST['position'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$diet = $_POST['diet'];
	$guardian_name_surname = $_POST['guardian_name_surname'];
	$guardian_country = $_POST['guardian_country'];
	$guardian_document_number = $_POST['guardian_document_number'];
	$guardian_mail = $_POST['guardian_mail'];
	$guardian_phone = $_POST['guardian_phone'];
	$guardian_address = $_POST['guardian_address'];
	$club = $_POST['club'];
	$jersey_size = $_POST['jersey_size'];
	$document = $_POST['document'];


	if (isset($_POST['submit'])) {
		$name = mysqli_real_escape_string($conn, $name);
		$surname = mysqli_real_escape_string($conn, $surname);
		$date_of_birth = mysqli_real_escape_string($conn, $date_of_birth);
		$document_number = mysqli_real_escape_string($conn, $document_number);
		$mail = mysqli_real_escape_string($conn, $mail);
		$phone = mysqli_real_escape_string($conn, $phone);
		$position = mysqli_real_escape_string($conn, $position);
		$height = mysqli_real_escape_string($conn, $height);
		$weight = mysqli_real_escape_string($conn, $weight);
		$diet = mysqli_real_escape_string($conn, $diet);
		$guardian_name_surname = mysqli_real_escape_string($conn, $guardian_name_surname);
		$guardian_country = mysqli_real_escape_string($conn, $guardian_country);
		$guardian_document_number = mysqli_real_escape_string($conn, $guardian_document_number);
		$guardian_mail = mysqli_real_escape_string($conn, $guardian_mail);
		$guardian_phone = mysqli_real_escape_string($conn, $guardian_phone);
		$guardian_address = mysqli_real_escape_string($conn, $guardian_address);
		$club = mysqli_real_escape_string($conn, $club);
		$jersey_size = mysqli_real_escape_string($conn, $jersey_size);
		$document = mysqli_real_escape_string($conn, $document);
		if (!empty($_POST['name'])) $name = $_POST['name']; else $name = null;
		if (!empty($_POST['surname'])) $surname = $_POST['surname']; else $surname = null;
		if (!empty($_POST['date_of_birth'])) $date_of_birth = $_POST['date_of_birth']; else $date_of_birth = null;
		if (!empty($_POST['mail'])) $mail = $_POST['mail']; else $mail = null;
		if (!empty($_POST['phone'])) $phone = $_POST['phone']; else $phone = null;
		$sql = "INSERT INTO players (name, surname, date_of_birth, document_number, mail, phone, position, height, weight, diet, guardian_name_surname, guardian_country, guardian_document_number, guardian_mail, guardian_phone, guardian_address, club, jersey_size, document)
		 		VALUES ('{$name}', '{$surname}', '{$date_of_birth}', '{$document_number}', '{$mail}', '{$phone}', '{$position}', '{$height}', '{$weight}', '{$diet}', '{$guardian_name_surname}', '{$guardian_country}', '{$guardian_document_number}', '{$guardian_mail}', '{$guardian_phone}', '{$guardian_address}', '{$club}', '{$jersey_size}', '{$document}')";
		if (mysqli_query($conn, $sql)) {
			echo "<h4 style='margin: 0; background: #23161f; color: white; padding: 10px'>Успешно се регистриравте.</h4>";
			header("Refresh:1; url=index.html");
		}
		else {
			echo "<h4 style='margin: 0; background: #23161f; color: red; padding: 10px'>Грешка!</h4>";
		}
	}





?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>ИСМ & Спорт Талент</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The Estate Teplate">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

<div class="super_container">

	<!-- Home -->
	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">

				<!-- Home Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@aahubs -->
					<div class="home_slider_background" style="background-image:url(images/home_slider_bcg.jpg)"></div>
					<div class="home_slider_content_container text-center">
						<div class="home_slider_content">
							<h1 data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Италија ги избира најдобрите</h1>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@aahubs -->
					<div class="home_slider_background" style="background-image:url(images/home_slider_bcg.jpg)"></div>
					<div class="home_slider_content_container text-center">
						<div class="home_slider_content">
							<h1 data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Италија ги избира најдобрите</h1>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@aahubs -->
					<div class="home_slider_background" style="background-image:url(images/home_slider_bcg.jpg)"></div>
					<div class="home_slider_content_container text-center">
						<div class="home_slider_content">
							<h1 data-animation-in="flipInX" data-animation-out="animate-out fadeOut">Италија ги избира најдобрите</h1>
						</div>
					</div>
				</div>
			</div>

			<!-- Home Slider Nav -->
			<div class="home_slider_nav_left home_slider_nav d-flex flex-row align-items-center justify-content-end">
				<img src="images/nav_left.png" alt="">
			</div>

		</div>

	</div>

	<!-- Header -->

	<header class="header trans_300">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center trans_300">

						<!-- Logo -->

						<div class="logo_container">
							<a href="#">
								<div class="logo">
								<img src="images/logo_ism.png" alt="">
								</div>
							</a>
						</div>

						<!-- Main Navigation -->

						<nav class="main_nav">
							<ul class="main_nav_list">
							<li class="main_nav_item"><a href="index.html">Дома</a></li>
							<li class="main_nav_item"><a href="about.html">За Нас</a></li>
							<li class="main_nav_item"><a href="camp.html">Селективен Камп 2019</a></li>
							<li class="main_nav_item"><a href="sponsors.html">Спонзори</a></li>


							<li class="main_nav_item"><a href="gallery.html">Галерија</a></li>
							<li class="main_nav_item"><a href="news.php">Новости</a></li>
							<li class="main_nav_item"><a href="contact.php">Контакт</a></li>
							</ul>
						</nav>

						<!-- Phone Home -->

						<div class="phone_home text-center">
							<span>+389 75 339 519</span>
						</div>

						<!-- Hamburger -->

						<div class="hamburger_container menu_mm">
							<div class="hamburger menu_mm">
								<i class="fas fa-bars trans_200 menu_mm"></i>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Menu -->

		<div class="menu menu_mm">
			<ul class="menu_list">
				<li class="menu_item">
					<div class="container">
						<div class="row">
							<div class="col">
								<a href="index.html">Дома</a>
							</div>
						</div>
					</div>
				</li>
				<li class="menu_item">
					<div class="container">
						<div class="row">
							<div class="col">
								<a href="about.html">За Нас</a>
							</div>
						</div>
					</div>
				</li>
				<li class="menu_item">
					<div class="container">
						<div class="row">
							<div class="col">
								<a href="gallery.html">Галерија</a>
							</div>
						</div>
					</div>
				</li>
				<li class="menu_item">
					<div class="container">
						<div class="row">
							<div class="col">
								<a href="camp.html"> Селективен Камп 2019</a>
							</div>
						</div>
					</div>
				</li>
				<li class="menu_item">
					<div class="container">
						<div class="row">
							<div class="col">
								<a href="news.php">Новости</a>
							</div>
						</div>
					</div>
				</li>
				<li class="menu_item">
					<div class="container">
						<div class="row">
							<div class="col">
								<a href="contact.php">Контакт</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>

	</header>

	<!-- Search Box -->

	<div class="search_box">
		<div class="container">
			<div class="row">
				<div class="col">

					<div class="search_box_outer">
						<div class="search_box_inner">

							<!-- Search Box Title -->
							<div class="search_box_title text-center">
								<div class="search_box_title_inner">
									<div class="search_box_title_icon d-flex flex-column align-items-center justify-content-center"><img src="images/search.png" alt=""></div>
									<span>РЕГИСТРИРАЈ СЕ И БИДИ ВИДЕН</span>
								</div>
							</div>

							<!-- Search Arrow -->
							<div class="search_arrow_box">
								<div class="search_arrow_box_inner">
									<div class="search_arrow_circle d-flex flex-column align-items-center justify-content-center"><span>Зачлени се</span></div>
									<img src="images/search_arrow.png" alt="">
								</div>
							</div>

							<!-- Search Form -->
							<form class="search_form" method="POST">
								<div class="search_box_container">
									<ul class="dropdown_row clearfix">
										<li class="dropdown_item dropdown_item_4">
											<div class="dropdown_item_title">Име</div>
											<input type="text" class="form-control no-border-radius" name="name" value="<?=$name?>" required>
										</li>
										<li class="dropdown_item dropdown_item_4">
											<div class="dropdown_item_title">Презиме</div>
											<input type="text" class="form-control no-border-radius" name="surname" value="<?=$surname?>" required>
										</li>
										<li class="dropdown_item dropdown_item_4">
											<div class="dropdown_item_title">Мобилен број</div>
											<input type="text" class="form-control no-border-radius" name="phone" value="<?=$phone?>" required>
										</li>
										<li class="dropdown_item dropdown_item_4">
											<div class="dropdown_item_title">Е-маил</div>
											<input type="text" class="form-control no-border-radius" name="mail" value="<?=$mail?>" required>
										</li>
									</ul>
								</div>

								<div class="search_box_container">
									<ul class="dropdown_row clearfix">
										<li class="dropdown_item dropdown_item_3">
											<div class="dropdown_item_title">Дата на раѓање (формат:Година-Месец-Ден)</div>
											<input type="text" class="form-control no-border-radius" name="date_of_birth" value="<?=$date_of_birth?>" required>
										</li>
										<li class="dropdown_item dropdown_item_3">
											<div class="dropdown_item_title">Документ за идентификација</div>
											<select class="form-control no-border-radius" name="document">
												<option></option>
											  <option>Лична карта</option>
												<option>Пасош</option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_3">
											<div class="dropdown_item_title">Број на документ за идентификација</div>
											<input type="text" class="form-control no-border-radius" name="document_number" value="<?=$document_number?>">
										</li>

									</ul>
								</div>

								<div class="search_box_container">
									<ul class="dropdown_row clearfix">
									<li class="dropdown_item dropdown_item_5">
										<div class="dropdown_item_title">Име и презиме на родител</div>
										<input type="text" class="form-control no-border-radius" name="guardian_name_surname" value="<?=$guardian_name?>">
									</li>
										<li class="dropdown_item dropdown_item_4">
											<div class="dropdown_item_title">Е-маил на родител</div>
											<input type="text" class="form-control no-border-radius" name="guardian_mail" value="<?=$guardian_mail?>">
										</li>
										<li class="dropdown_item dropdown_item_4">
											<div class="dropdown_item_title">Телефон на родител</div>
											<input type="text" class="form-control no-border-radius" name="guardian_phone" value="<?=$guardian_phone?>">
										</li>
										<li class="dropdown_item dropdown_item_4">
											<div class="dropdown_item_title">Адреса на родител</div>
											<input type="text" class="form-control no-border-radius" name="guardian_address" value="<?=$guardian_address?>">
										</li>
										<li class="dropdown_item dropdown_item_4">
											<div class="dropdown_item_title">Земја на родител</div>
											<input type="text" class="form-control no-border-radius" name="guardian_country" value="<?=$guardian_country?>">
										</li>
									</ul>
								</div>

								<div class="search_box_container">
									<ul class="dropdown_row clearfix">

										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Позиција</div>
											<input type="text" class="form-control no-border-radius" name="position" value="<?=$position?>">
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Клуб / Школа</div>
											<input type="text" class="form-control no-border-radius" name="club" value="<?=$club?>">
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Специфична исхрана</div>
											<!-- <input type="text" class="form-control no-border-radius" name="diet"> -->
											<select class="form-control no-border-radius" name="diet">
												<option></option>
											  <option>Нормална</option>
												<option>Без свинско</option>
												<option>Вегетаријанска</option>
											</select>
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Висина</div>
											<input type="text" class="form-control no-border-radius" name="height" value="<?=$height?>">
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Тежина</div>
											<input type="text" class="form-control no-border-radius" name="weight" value="<?=$weight?>">
										</li>
										<li class="dropdown_item dropdown_item_6">
											<div class="dropdown_item_title">Големина на дрес</div>
											<select class="form-control no-border-radius" name="jersey_size">
												<option></option>
											  <option>8</option>
												<option>10</option>
												<option>12</option>
												<option>14</option>
												<option>S</option>
												<option>M</option>
												<option>L</option>
												<option>XL</option>
												<option>XXL</option>
											</select>
										</li>
										<li class="dropdown_item">
											<div class="search_button">
												<input value="Пријави се" name="submit" class="search_submit_button" type="submit">
											</div>
										</li>
										
									</ul>
								</div>
								<br>
										<p style="margin-left:25px;">*Се согласувам сите мои податоци да бидат користени согласно правилата и прописите за учество во сите настани организирани од ISM и Спорт талент</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>



























	<!-- Footer -->


		<footer class="footer">
			<div class="container">
				<div class="row">

					<!-- Footer About -->

					<div class="col-lg-3 footer_col">
						<div class="footer_col_title">
							<div class="logo_container">
								<a href="#">
									<div class="logo">
										<img src="i" alt="">

									</div>
								</a>
							</div>
						</div>
						<div class="footer_social">
							<ul class="footer_social_list">
							<li class="footer_social_item"><a href="https://www.instagram.com/scoutforitaly/"><i class="fab fa-instagram"></i></a></li>
							<li class="footer_social_item"><a href="https://www.facebook.com/scoutforitaly/"><i class="fab fa-facebook-f"></i></a></li>
							<li class="footer_social_item"><a href=""><i class="fab fa-twitter"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-behance"></i></a></li>
							</ul>
						</div>
						<div class="footer_about">
						<p>Официјални застапници и претставници на ИСМ во Македонија и балканските земји е ЗССД Спорт Талент - Битола</p>
						</div>
					</div>

					<!-- Footer Useful Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_col_title">Линкови</div>
						<ul class="footer_useful_links">
							<li class="useful_links_item"><a href="index.html">Дома</a></li>
							<li class="useful_links_item"><a href="about.html">За Нас</a></li>
							<li class="useful_links_item"><a href="sponsors.html">Спонзори</a></li>
							<li class="useful_links_item"><a href="gallery.html">Галерија</a></li>
							<li class="useful_links_item"><a href="contact.php">Контакт</a></li>

						</ul>
					</div>

					<!-- Footer Contact Form -->
					<div class="col-lg-3 footer_col">
						<div class="footer_col_title">Контактирајте не!</div>
						<div class="footer_contact_form_container">
							<form id="footer_contact_form" class="footer_contact_form" action="post">
								<input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Име" required="required" data-error="Name is required.">
								<input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-Маил" required="required" data-error="Valid email is required.">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Порака" required="required" data-error="Please, write us a message."></textarea>
								<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Submit">Испрати</button>
							</form>
						</div>
					</div>

					<!-- Footer Contact Info -->

					<div class="col-lg-3 footer_col">
						<div class="footer_col_title">Контакт информации</div>
						<ul class="contact_info_list">

							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
								<div class="contact_info_text">Перуџа  , Италија</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
								<div class="contact_info_text">+389 75 339 519</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">scoutforitaly@gmail.com</a></div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="https://colorlib.com">www.scoutforitaly.com</a></div>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</footer>

		<!-- Credits -->

		<div class="credits">
			<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> Сите права задржани | Изработено од <a href="#" target="_blank">Владимир</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
		</div>

	</div>

	<!-- Credits -->

	<div class="credits">
		<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Сите права задржани | Изработено од <a href="#" target="_blank">Владимир</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
	</div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
