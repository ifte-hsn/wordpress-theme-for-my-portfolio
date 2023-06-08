<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="Content-Type" content="text/html; <?php bloginfo( 'charset' ); ?>">
	<title>
		<?php 
			wp_title('|',true,'right'); 
			bloginfo("name")
		?>
	</title>
	<meta name="description" content="<?php bloginfo("name") ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo THEMEROOT ?>/images/favicon.png">


	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- preloader -->
<div id="preloader">
	<div class="book">
		<div class="inner">
			<div class="left"></div>
			<div class="middle"></div>
			<div class="right"></div>
		</div>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>

<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

	<!-- header -->
	<header class="header-classic">

			<div class="container-xl">
				<!-- header top -->
				<div class="header-top">
					<div class="row align-items-center">

						<div class="col-md-4 col-xs-12">
							<!-- site logo -->
							<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo THEMEROOT ?>/images/logo.svg" alt="logo" /></a> 
						</div>

						<div class="col-md-8 d-none d-md-block">
							<!-- social icons -->
							<ul class="social-icons list-unstyled list-inline mb-0 float-end">
								<li class="list-inline-item"><a href="https://www.facebook.com/if.shishir/"><i class="fab fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="https://medium.com/@ifte.hsn"><i class="fab fa-medium"></i></a></li>
								<li class="list-inline-item"><a href="https://www.youtube.com/@iftekharhossain-shishir"><i class="fab fa-youtube"></i></a></li>
								<li class="list-inline-item"><a href="https://www.linkedin.com/in/iftekhar-hossain-369bbb6a/"><i class="fab fa-linkedin"></i></a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg">
				<!-- header bottom -->
				<div class="header-bottom  w-100">
					
					<div class="container-xl">
						<div class="d-flex align-items-center">
							<div class="collapse navbar-collapse flex-grow-1">
								<!-- menus -->
								<ul class="navbar-nav">
									<li class="nav-item dropdown active">
										<a class="nav-link dropdown-toggle" href="index.html">Home</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="index.html">Magazine</a></li>
											<li><a class="dropdown-item" href="personal.html">Personal</a></li>
											<li><a class="dropdown-item" href="personal-alt.html">Personal Alt</a></li>
											<li><a class="dropdown-item" href="minimal.html">Minimal</a></li>
											<li><a class="dropdown-item" href="classic.html">Classic</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="category.html">Lifestyle</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="category.html">Inspiration</a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#">Pages</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="category.html">Category</a></li>
											<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
											<li><a class="dropdown-item" href="blog-single-alt.html">Blog Single Alt</a></li>
											<li><a class="dropdown-item" href="about.html">About</a></li>
											<li><a class="dropdown-item" href="contact.html">Contact</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contact.html">Contact</a>
									</li>
								</ul>
							</div>

							<!-- header buttons -->
							<div class="header-buttons">
								<button class="search icon-button">
									<i class="icon-magnifier"></i>
								</button>
								<button class="burger-menu icon-button ms-2 float-end float-lg-none">
									<span class="burger-icon"></span>
								</button>
							</div>
						</div>
					</div>

				</div>
			</nav>

	</header>