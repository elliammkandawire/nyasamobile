<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $company_data->shortname."-".$company_data->motto ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="<?php echo base_url() ?>assets/images/logo/<?php echo $company_data->logo ?>">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" type="text/css" media="all" />
	<!-- carousel CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css" type="text/css" media="all" />
	<!-- responsive CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css" type="text/css" media="all" />
	<!-- nivo-slider CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/nivo-slider.css" type="text/css" media="all" />
	<!-- animate CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css" type="text/css" media="all" />
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animated-text.css" type="text/css" media="all" />
	<!-- font-awesome CSS -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/font-awesome/css/font-awesome.min.css">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flaticon.css" type="text/css" media="all" />
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme-default.css" type="text/css" media="all" />
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/meanmenu.min.css" type="text/css" media="all" />
	<!-- Main Style CSS -->
	<link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/style.css" type="text/css" media="all" />
	<!-- transitions CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.transitions.css" type="text/css" media="all" />
	<!-- venobox CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>venobox/venobox.css" type="text/css" media="all" />
	<!-- widget CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/widget.css" type="text/css" media="all" />
	<!-- modernizr js -->
	<script src="<?php echo base_url() ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>

</head>
<body>


<!--==================================================-->
<!-- Start	Techno Header Top Menu Area Css -->
<!--==================================================-->
<div class="header_top_menu pt-2 pb-2 bg_color">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-sm-8">
				<div class="header_top_menu_address">
					<div class="header_top_menu_address_inner">
						<ul>
							<li><a href="mailto:<?php  echo $company_data->email ?>"><i class="fa fa-envelope-o"></i><?php  echo $company_data->email ?></a></li>
							<li><a href="tel:<?php  echo $company_data->phone ?>"><i class="fa fa-phone"></i><?php  echo $company_data->phone ?></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-4">
				<div class="header_top_menu_icon">
					<div class="header_top_menu_icon_inner">
						<ul>
							<li><a href="<?php  echo $company_data->facebook ?>"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php  echo $company_data->twitter ?>"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!--==================================================-->
<!-- End	Techno Header Top Menu Area Css -->
<!--===================================================-->

<!--==================================================-->
<!-- Start Techno Main Menu Area -->
<!--==================================================-->
<div id="sticky-header" class="Techno_nav_manu d-md-none d-lg-block d-sm-none d-none">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="logo mt-4">
					<a class="logo_img" href="<?php echo  base_url()?>" title="<?php echo $company_data->fullname  ?>">
						<img style="object-fit: cover; height: 70px;" src="<?php echo base_url() ?>assets/images/logo/<?php echo $company_data->logo ?>" alt="" />
					</a>
					<a class="main_sticky" href="<?php echo base_url() ?>" title="<?php echo $company_data->fullname  ?>">
						<img style="object-fit: cover; height: 60px;" src="<?php echo base_url()?>assets/images/logo/<?php echo $company_data->logo ?>" alt="<?php echo $company_data->fullname  ?>" />
					</a>
				</div>
			</div>
			<div class="col-md-9">
				<nav class="Techno_menu">
					<ul class="nav_scroll">
						<li><a href="<?php echo base_url() ?>">Home</a>
						</li>
						<li><a href="#">Company</a>
							<ul class="sub-menu">
								<li><a href="<?php echo base_url() ?>aboutUs">About Us</a></li>
								<li><a href="<?php echo base_url() ?>team">Management Team</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url() ?>partnerships">Partnerships</a>
							<ul class="sub-menu">
								<?php foreach ($partners_category as $category): ?>
								<li><a href="<?php echo base_url() ?>partners?category=<?php echo $category->slug ?>"><?php echo strtolower($category->name) ?></a></li>
								<?php endforeach; ?>
							</ul>
						</li>
						<li><a href="<?php echo  base_url() ?>careers">Careers</a>
						</li>
						<li><a href="<?php echo base_url()?>news">News </a>
						</li>
						<li><a href="<?php echo base_url() ?>contact">Contact</a>
						</li>
					</ul>
					<div class="donate-btn-header">
						<a class="dtbtn" href="tel:<?php echo $company_data->phone ?>">Call Now</a>
					</div>
				</nav>

			</div>
		</div>
	</div>
</div>

<!-- Techno Mobile Menu Area -->
<div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
	<div class="mobile-menu">
		<nav class="Techno_menu">
			<ul class="nav_scroll">
				<li><a href="<?php echo base_url() ?>">Home</a>
				</li>
				<li><a href="#">Company</a>
					<ul class="sub-menu">
						<li><a href="<?php echo base_url() ?>aboutUs">About Us</a></li>
						<li><a href="<?php echo base_url() ?>team">Management Team</a></li>
					</ul>
				</li>
				<li><a href="<?php echo base_url() ?>partnerships">Partnerships</a>
					<ul class="sub-menu">
						<?php foreach ($partners_category as $category): ?>
							<li><a href="<?php echo base_url() ?>partners?category=<?php echo $category->slug ?>"><?php echo strtolower($category->name) ?></a></li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li><a href="<?php echo  base_url() ?>careers">Careers</a>
				</li>
				<li><a href="<?php echo base_url()?>news">News </a>
				</li>
				<li><a href="<?php echo base_url() ?>contact">Contact</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
<!--==================================================-->
<!-- End Techno Main Menu Area -->
<!--==================================================-->
