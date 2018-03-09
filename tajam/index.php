
<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href='img/icon.png' type="image/png">
	<title>tajam</title>

	<!-- Bootstrap 4.0 CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/main.css"><!-- Основные стили -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css"><!-- Основные стили -->


	<!-- Bootstrap 4.0 JS-->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	
	<script type="text/javascript" src='js/common.js'></script><!-- site js file -->

	<script type="text/javascript" src='js/chat.js'></script><!-- site js file -->
	<!--[if lt IE 9]>
   		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	 <![endif]-->

</head>	
<body>
	<div class='chat-toggler'>
		<i class="fas fa-comments fa-2x"></i>
	</div>
	<div class='chat'>
		<div class='chat-header'>
			<h1>Chat</h1>
			<div class='chat-exit'>-</div>
		</div>
		<div class='chat-window'>
			<div class='chat-body'>
			</div>
		</div>
		<div class='chat-footer'>
			  <form id="pac_form" action="">
				<input type='text' placeholder="Enter your name" id='pac_name' class='name' maxlength="32" required>
				<textarea id='pac_text' class='message' maxlength="150" required></textarea>
				<button>send</button>
			</form>
		</div>
	</div>
	<div class='navigation-fluid'>
		    <div class='navigation container'>
				<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
					<a class="navbar-brand" href="#">
						<img src='img/logo.png' alt="logo">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigationbar" 
					aria-controls="navigationbar" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navigationbar">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="#home">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#about">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#expertise">Expertise</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#team">Teams</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#works">Works</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#testimonials">People say</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contact">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
		    </div>	
		</div>
	<header id='home'>
		<div class='header-content'>
			<div id="slider-box" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<h1>We Are Awesome Creative Agency 1</h1>
						<hr class='line'>
						<p>
							This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.
						</p>
					</div>
					<div class="carousel-item">
						<h1>We Are Awesome Creative Agency 2</h1>
						<hr class='line'>
						<p>
							This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.
						</p>
					</div>
					<div class="carousel-item">
						<h1>We Are Awesome Creative Agency 3</h1>
						<hr class='line'>
						<p>
							This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.
						</p>
					</div>
					<div class="carousel-item">
						<h1>We Are Awesome Creative Agency 4</h1>
						<hr class='line'>
						<p>
							This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.
						</p>
					</div>
				</div>
			</div>
			<div class='slider-control'>
				<ol class="carousel-indicators">
					<li data-target="#slider-box" data-slide-to="0" class="active">
					</li>
					<li data-target="#slider-box" data-slide-to="1"></li>
					<li data-target="#slider-box" data-slide-to="2"></li>
					<li data-target="#slider-box" data-slide-to="3"></li>
				</ol>
			</div>
		</div>
	</header>
	<main>
		<section class='about container' id='about'>
			<img src='img/about.png'>
			<div class='about-text'>
				<h1>OUR STORY</h1>
				<p>
					This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
					<br><br>
					Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
				</p>
				<button>LEARN MORE</button>
			</div>
		</section>
		<section class='about-media container-fluid' id='about-video'>
			<div class='about-play'>
				<a onclick="document.getElementById('about-video').innerHTML = iframevideo;">
					<img src="img/play.png" alt=""/>
				</a>
                <p>WATCH OUR STORY</p>
            </div>
		</section>
		<section class="expertise container" id='expertise'>
			<h1>EXPERTISE</h1>
			<p>Lorem ipsum dolor sit amet proin gravida nibh vel velit</p>
			<hr class='line'>
			<div class='row'>
				<div class='col-md-4'>
					<img src='img/expertise/1.png'>
					<h1>WEB DESIGN & DEVELOPMENT</h1>
					<p>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.
					</p>
				</div>
				<div class='col-md-4'>
					<img src='img/expertise/2.png'>
					<h1>BRANDING IDENTITY</h1>
					<p>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.
					</p>
				</div>
				<div class='col-md-4'>
					<img src='img/expertise/3.png'>
					<h1>MOBILE APP</h1>
					<p>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.
					</p>
				</div>
				<div class='col-md-4'>
					<img src='img/expertise/4.png'>
					<h1>SEARCH ENGINE OPTIMIZATION</h1>
					<p>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.
					</p>
				</div>
				<div class='col-md-4'>
					<img src='img/expertise/5.png'>
					<h1>GAME DEVELOPMENT</h1>
					<p>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.
					</p>
				</div>
				<div class='col-md-4'>
					<img src='img/expertise/6.png'>
					<h1>MADE WITH LOVE</h1>
					<p>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.
					</p>
				</div>
			</div>
		</section>
		<section class='team container-fluid' id='team'>
			<div class='team-content container'>
				<h1>MEET OUR AMAZING TEAM</h1>
				<p>Lorem ipsum dolor sit amet proin gravida nibh vel velit</p>
				<hr class="line">
				<div class='teams'>
					<div class='team-item'>
						<figure class='photo'>
						</figure>
						<div class='team-text'>
							<h1>SEMF UCUK</h1>
							<h2>CEO & FOUNDER</h2>
						</div>
					</div>
					<div class='team-item'>
						<figure class='photo'>
						</figure>
						<div class='team-text'>
							<h1>DIK ADALIN</h1>
							<h2>ENGINEERING</h2>
						</div>
					</div>
					<div class='team-item'>
						<figure class='photo'>
						</figure>
						<div class='team-text'>
							<h1>JENG KOL</h1>
							<h2>DESIGNER</h2>
						</div>
					</div>
					<div class='team-item'>
						<figure class='photo'>
						</figure>
						<div class='team-text'>
							<h1>PET ROMAK</h1>
							<h2>MARKETING</h2>
						</div>
					</div>
				</div>
				<p>Become part of our dream team, let’s join us ! </p>
				<button>
					WE ARE HIRING
				</button>
			</div>
		</section>
		<section class='works container-fluid' id='works'>
			<div class='works-header container'>
				<h1>OUR WORKS</h1>
				<p>
					See All Project in dribbble
					<i class='fas fa-chevron-right'></i>
				</p>
			</div>
			<div class='row works-body'>
				<div class='col-lg-2 col-md-3 col-sm-6 work-item'>
					<img src='img/works/1.jpg'>
				</div>
				<div class='col-lg-2 col-md-3 col-sm-6 work-item'>
					<img src='img/works/2.jpg'>
				</div>
				<div class='col-lg-2 col-md-3 col-sm-6 work-item'>
					<img src='img/works/1.jpg'>
				</div>
				<div class='col-lg-2 col-md-3 col-sm-6 work-item'>
					<img src='img/works/2.jpg'>
				</div>
				<div class='col-lg-2 col-md-3 col-sm-6 work-item'>
					<img src='img/works/1.jpg'>
				</div>
				<div class='col-lg-2 col-md-3 col-sm-6 work-item'>
					<img src='img/works/2.jpg'>
				</div>
				<div class='col-lg-2 col-md-3 col-sm-6 work-item'>
					<img src='img/works/2.jpg'>
				</div>
				<div class='col-lg-2 col-md-3 col-sm-6 work-item'>
					<img src='img/works/1.jpg'>
				</div>
				<div class='col-lg-2 col-md-3 col-sm-6 work-item'>
					<img src='img/works/2.jpg'>
				</div>
				<div class='col-lg-2 col-md-3 col-sm-6 work-item'>
					<img src='img/works/1.jpg'>
				</div>
				<div class='col-lg-2 col-md-3 col-sm-6 work-item'>
					<img src='img/works/2.jpg'>
				</div>
				<div class='col-lg-2 col-md-3 col-sm-6 work-item'>
					<img src='img/works/1.jpg'>
				</div>
			</div>
			<button>
				LOAD MORE
			</button>	
		</section>
		<section class='testimonials container-fluid' id='testimonials'>
			<div class='testimonials-content'>
				<h1>“</h1>
				<div id="testimonials-box" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item">
							<p>
								This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
							</p>
							<h1>JANE GALADRIEL</h1>
							<h2>CEO TENGKUREP</h2>
						</div>
						<div class="carousel-item">
							<p>
								This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
							</p>
							<h1>JANE GALADRIEL 2</h1>
							<h2>CEO TENGKUREP</h2>
						</div>
						<div class="carousel-item active">
							<p>
								This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
							</p>
							<h1>JANE GALADRIEL 3</h1>
							<h2>CEO TENGKUREP</h2>
						</div>
						<div class="carousel-item">
							<p>
								This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
							</p>
							<h1>JANE GALADRIEL 4</h1>
							<h2>CEO TENGKUREP</h2>
						</div>
						<div class="carousel-item">
							<p>
								This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
							</p>
							<h1>JANE GALADRIEL 5</h1>
							<h2>CEO TENGKUREP</h2>
						</div>
						<a class="carousel-control-prev" href="#testimonials-box" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						</a>
						<ol class="carousel-indicators">
							<li data-target="#testimonials-box" data-slide-to="0" style='background-image: url(img/testimonials/1.png);'></li>
							<li data-target="#testimonials-box" data-slide-to="1" style='background-image: url(img/testimonials/2.png);'></li>
							<li data-target="#testimonials-box" data-slide-to="2" class="active" 
								style='background-image: url(img/testimonials/3.png);'></li>
							<li data-target="#testimonials-box" data-slide-to="3" style='background-image: url(img/testimonials/4.png);'></li>
							<li data-target="#testimonials-box" data-slide-to="4" style='background-image: url(img/testimonials/5.png);'></li>
						</ol>
						<a class="carousel-control-next" href="#testimonials-box" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class='contact container' id='contact'>
			<div class='row'>
				<div class='col-lg-6 col-md-12 col-sm-12'>
					<h1>GIVE US A GOOD NEWS</h1>
					<form method="get">
						<input type="text" name="name" placeholder="Name">
						<input type="email" name="email" placeholder="Email">
						<input type="text" name="subject" placeholder="Subject">
						<textarea name='massage'>Your Massage</textarea>
						<button>SUBMIT</button>
					</form>
				</div>
				<div class='col-lg-6 col-md-12 col-sm-12 client'>
					<h1>OUR HAPPY CLIENT</h1>
					<div class='left'>
						<img src='img/clients/left/1.png'>
						<img src='img/clients/left/2.png'>
						<img src='img/clients/left/3.png'>
						<img src='img/clients/left/4.png'>
						<img src='img/clients/left/5.png'>
					</div>
					<div class='right'>
						<img src='img/clients/right/1.png'>
						<img src='img/clients/right/2.png'>
						<img src='img/clients/right/3.png'>
						<img src='img/clients/right/4.png'>
						<img src='img/clients/right/5.png'>
					</div>
				</div>
			</div>
		</section>
	</main>	
	<footer class='container-fluid'>
		<div class='footer-content container'>
			<div class='row'>
				<div class='col-md-4'>
					<a class="brand" href="#">
						<img src='img/logo.png' alt="logo">
					</a>
					<p>
						lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit. Duis sed odio sit amet auctror a ornare odio non mauris vitae erat in elit
					</p>
				</div>
				<div class='col-md-4'>
					<h1>OUR STUDIO</h1>
					<div class='our-studio'>
						<i class="fas fa-map-marker-alt"></i>
						<p>Ruko cucruk, Jl. Radio luar dalem jos No.12 - 13, Kalideres - Jakarta Barat11480 - Indonesia</p>
					</div>
					<div class='our-studio'>
						<i class="fas fa-phone"></i>
						<p>(+62) 21-2224 3333</p>
					</div>
				</div>
				<div class='col-md-4'>
					<h1>STAY IN TOUCH</h1>
					<div>
                	<input type="text" name="email" placeholder="Subscribe our newsletter">
                		<a class="arrowsub" href="#">
                			<i class="fas fa-paper-plane"></i>
                		</a>
	                </div>
	                <div class="socials">
	                	<a href="#"><i class="fab fa-facebook"></i></a>
	                    <a href="#"><i class="fab fa-twitter"></i></a>
	                    <a href="#"><i class="fab fa-dribbble"></i></a>
	                    <a href="#"><i class="fab fa-instagram"></i></a>
	                    <a href="#"><i class="fab fa-google-plus"></i></a>
	                    <a href="#"><i class="fab fa-youtube"></i></a>
	                </div>
					</div>
			</div>
			<div class='copy'>
				<ul>
					<li><a herf='#'>HELP</a></li>
					<li><a herf='#'>TERMS & CONDITION</a></li>
					<li><a herf='#'>PRIVACY</a></li>
					<li><a herf='#'>Copyright © 2015 - Tajem Creative</a></li>
				</ul>
			</div>
		</div>
	</footer>

	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"><!--иконочный шрифт-->
	<link rel="stylesheet" type="text/css" href="css/animation.css">
	<!--ШРИФТЫ-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:900,300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:900,700,400" rel="stylesheet">
</body>
</html>