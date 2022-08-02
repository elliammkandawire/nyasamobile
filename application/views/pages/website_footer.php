
<!--==================================================-->
<!----- Start Techno Footer Middle Area ----->
<!--==================================================-->
<div class="footer-middle pt-95" style="background-image:url(assets/images/call-bg.png)" >
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="widget widgets-company-info">
					<div class="footer-bottom-logo pb-40">
						<img style="object-fit: cover; height: 100px;" src="<?php echo base_url()?>assets/images/logo/<?php echo $company_data->logo ?>" alt="" />
					</div>
					<div class="company-info-desc">
						<p>
							<?php echo $company_data->motto ?>
						</p>
					</div>
					<div class="follow-company-info pt-3">
						<div class="follow-company-text mr-3">
							<a href="#"><p>Follow Us</p></a>
						</div>
						<div class="follow-company-icon">
							<a href="<?php echo $company_data->facebook ?>"><i class="fa fa-facebook"></i></a>
							<a href="<?php  echo $company_data->twitter ?>"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="widget widget-nav-menu">
					<h4 class="widget-title pb-4">Our Partners</h4>
					<div class="menu-quick-link-container ml-4">
						<ul id="menu-quick-link" class="menu">
							<?php foreach ($partners_category as $category): ?>
								<li><a href="<?php echo base_url() ?>partners/<?php echo $category->slug ?>"><?php echo ucwords(strtolower($category->name)) ?></a></li>
							<?php endforeach; ?>
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
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div id="em-recent-post-widget">
					<div class="single-widget-item">
						<h4 class="widget-title pb-3">Popular Post</h4>
						<?php foreach ($latest_news as $news):?>
						<div class="recent-post-item active pb-3">
							<div class="recent-post-image mr-3">
								<a href="<?php echo base_url() ?>news/<?php echo $news->slug ?>">
									<img style="object-fit: cover;" width="80" height="80" src="<?php echo base_url() ?>assets/images/news/<?php echo $news->picture ?>" alt="">
								</a>
							</div>
							<div class="recent-post-text">
								<h6><a href="<?php echo base_url() ?>news/<?php echo $news->slug ?>">
										<?php echo ucwords($news->title) ?>
									</a>
								</h6>
								<span class="rcomment">
									<?php
									$date=date_create($news->datetime);
									echo date_format($date,"M d, Y");
									?>
								</span>
							</div>
						</div>
						<?php endforeach; ?>

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
