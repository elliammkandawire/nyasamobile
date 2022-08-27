
<!--==================================================-->
<!----- Start Techno Footer Middle Area ----->
<!--==================================================-->
<div class="footer-middle pt-95" style="background-color: #1c103a" >
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-6 col-sm-12">
				<div class="widget widgets-company-info">
					<div class="footer-bottom-logo pb-40">
						<img style="object-fit: cover; height: 100px; margin-top: 50%" src="<?php echo base_url()?>assets/images/logo/<?php echo $company_data->logo ?>" alt="" />
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="widget widget-nav-menu">
					<h4 class="widget-title pb-4">Quick Links</h4>
					<div class="menu-quick-link-container ml-4">
						<ul id="menu-quick-link" class="menu">
							   <li><a href="<?php echo base_url() ?>">Home</a></li>
								<li><a href="<?php echo base_url() ?>aboutUs">About Us</a></li>
								<li><a href="<?php echo base_url() ?>partnerships">Partners</a></li>
								<li><a href="<?php echo base_url() ?>careers">Careers</a></li>
								<li><a href="<?php echo base_url() ?>news">Stories</a></li>
								<li><a href="<?php echo base_url() ?>contact">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="widget widgets-company-info">
					<h3 class="widget-title pb-4">Company Address</h3>
					<div class="footer-social-info">
						<p><span>Address :</span>
							<?php  echo $company_data->location ?><br>
							<?php  echo $company_data->postal_address ?>
						</p>
					</div>
					<div class="footer-social-info">
						<p><span>Phone :</span><?php echo $company_data->phone ?></p>
					</div>
					<div class="footer-social-info">
						<p><span>Email :</span><?php echo $company_data->email ?></p>
					</div>

				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div id="em-recent-post-widget">
					<div class="single-widget-item">
						<h4 class="widget-title pb-3">FIND US ON SOCIAL MEDIA</h4>
						<div class="footer_middle_social">
							<div class="footer_middle_social_icon">
								<a class="color1" href="<?php echo $company_data->facebook; ?>"><i class="fa fa-facebook"></i></a>
								<a class="color2" href="<?php echo $company_data->twitter; ?>"><i class="fa fa-twitter"></i></a>
								<a class="color3" href="<?php echo $company_data->instagram; ?>"><i class="fa fa-instagram"></i></a>
								<a class="color3" href="<?php echo $company_data->youtube; ?>"><i class="fa fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="row footer-bottom mt-70 pt-3 pb-1">
			<div class="col-lg-6 col-md-6">
				<div class="footer-bottom-content">
					<div class="footer-bottom-content-copy">
						<p>© 2022 <?php echo $company_data->fullname ?>.All Rights Reserved. </p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="footer-bottom-right">
					<div class="footer-bottom-right-text">
						<a class="absod" href="#">Privacy Policy </a>
						<a href="#"> Terms & Conditions</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!----- End Techno Footer Middle Area ----->
<!--==================================================-->

<!-- jquery js -->
<script src="<?php echo base_url() ?>assets/js/vendor/jquery-3.2.1.min.js"></script>
<!-- bootstrap js -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- carousel js -->
<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
<!-- counterup js -->
<script src="<?php echo base_url() ?>assets/js/jquery.counterup.min.js"></script>
<!-- waypoints js -->
<script src="<?php echo base_url() ?>assets/js/waypoints.min.js"></script>
<!-- wow js -->
<script src="<?php echo base_url() ?>assets/js/wow.js"></script>
<!-- imagesloaded js -->
<script src="<?php echo base_url() ?>assets/js/imagesloaded.pkgd.min.js"></script>
<!-- venobox js -->
<script src="<?php echo base_url() ?>venobox/venobox.js"></script>
<!-- ajax mail js -->
<script src="<?php echo base_url() ?>assets/js/ajax-mail.js"></script>
<!--  testimonial js -->
<script src="<?php echo base_url() ?>assets/js/testimonial.js"></script>
<!--  animated-text js -->
<script src="<?php echo base_url() ?>assets/js/animated-text.js"></script>
<!-- venobox min js -->
<script src="<?php echo base_url() ?>venobox/venobox.min.js"></script>
<!-- isotope js -->
<script src="<?php echo base_url() ?>assets/js/isotope.pkgd.min.js"></script>
<!-- jquery nivo slider pack js -->
<script src="<?php echo base_url() ?>assets/js/jquery.nivo.slider.pack.js"></script>
<!-- jquery meanmenu js -->
<script src="<?php echo base_url() ?>assets/js/jquery.meanmenu.js"></script>
<!-- jquery scrollup js -->
<script src="<?php echo base_url() ?>assets/js/jquery.scrollUp.js"></script>
<!-- theme js -->
<script src="<?php echo base_url() ?>assets/js/theme.js"></script>
<!-- jquery js -->
</body>
</html>
