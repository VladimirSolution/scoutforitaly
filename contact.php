<!DOCTYPE html>
<html lang="en">
<head>
<title>ИСМ & Спорт Талент</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

<body>

	<?php if ($_GET["message"]) { ?>
		<div id="mail_msg" class="alert alert-success alert-dismissible">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    Пораката е успешно испратена.
		</div>
	<?php } ?>

<div class="super_container">

	<!-- Home -->
	<div class="home">
		<!-- Image by: https://unsplash.com/@breather -->
		<div class="home_background" style="background-image:url(images/home_slider_bcg2.jpg)"></div>

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_title">
							<h2>Контактирајте не</h2>
						</div>
						<div class="breadcrumbs">
							<span><a href="index.html">Дома</a></span>
							<span><a href="#">Контакт</a></span>
						</div>
					</div>
				</div>
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
							<span> +389 75 339 519</span>
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
								<a href="sponsors.html">Спонзори</a>
							</div>
						</div>
					</div>
				</li>
				<li class="menu_item">
					<div class="container">
						<div class="row">
							<div class="col">
								<a href="camp.html">Селективен Камп 2019</a>
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

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<div class="col-lg-6 contact_col">
					<div class="estate_contact_form">
						<div class="contact_title">Контакт форма</div>
						<div class="estate_contact_form_container">
							<form id="estate_contact_form" class="estate_contact_form" action="email.php" method="POST">
								<input id="estate_contact_form_name" class="estate_input_field estate_contact_form_name" type="text" name="name" placeholder="Име" required="required" data-error="Name is required.">
								<input id="estate_contact_form_email" class="estate_input_field estate_contact_form_email" type="email" name="email" placeholder="E-Маил" required="required" data-error="Valid email is required.">
								<input id="estate_contact_form_subject" class="estate_input_field estate_contact_form_subject" type="text" name="subject" placeholder="Наслов" required="required" data-error="Subject is required.">
								<textarea id="estate_contact_form_message" class="estate_text_field estate_contact_form_message" name="message" placeholder="Порака" required="required" data-error="Please, write us a message."></textarea>
								<button id="estate_contact_send_btn" name="submit" type="submit" class="estate_contact_send_btn trans_200" value="submit">Испрати</button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-3 contact_col">
					<div class="contact_title">Контакт информации</div>
					<ul class="contact_info_list estate_contact">
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
							<div class="contact_info_text">Перуџа, Италија</div>
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
							<div class="contact_info_text"><a href="#">www.scoutforitaly.com</a></div>
						</li>
					</ul>
					<div class="estate_social">
						<ul class="estate_social_list">
							<li class="footer_social_item"><a href="https://www.instagram.com/scoutforitaly/"><i class="fab fa-instagram"></i></a></li>
							<li class="footer_social_item"><a href="https://www.facebook.com/scoutforitaly/"><i class="fab fa-facebook-f"></i></a></li>
							<li class="footer_social_item"><a href=""><i class="fab fa-twitter"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-behance"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 contact_col">
					<div class="contact_title">За нас</div>
					<div class="estate_about_text">
						<p>Официјални застапници и претставници на ИСМ во Македонија и балканските земји е ЗССД Спорт Талент - Битола </p>

					</div>
				</div>

			</div>

		</div>



	<!-- Newsletter -->




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
								<li class="footer_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>
</body>

</html>
