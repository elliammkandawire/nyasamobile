
<!--<div class="contact_address_area pt-80 pb-70">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-lg-12">-->
<!--				<div class="section_title text_center mb-55">-->
<!--					<div class="section_sub_title uppercase mb-3">-->
<!--						<h6>CONTACT US</h6>-->
<!--					</div>-->
<!--					<div class="section_main_title">-->
<!--						<h1>We Are Here For You</h1>-->
<!--					</div>-->
<!--					<div class="em_bar">-->
<!--						<div class="em_bar_bg"></div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="row">-->
<!--			<div class="col-lg-4 col-md-6 col-sm-12">-->
<!--				<div class="single_contact_address text_center mb-30">-->
<!--					<div class="contact_address_icon pb-3">-->
<!--						<i class="fa fa-map-o"></i>-->
<!--					</div>-->
<!--					<div class="contact_address_title pb-2">-->
<!--						<h4>Our Address</h4>-->
<!--					</div>-->
<!--					<div class="contact_address_text">-->
<!--						<p>-->
<!--							--><?php //echo $company_data->location."<br>".$company_data->postal_address ?>
<!--						</p>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-4 col-md-6 col-sm-12">-->
<!--				<div class="single_contact_address text_center mb-30">-->
<!--					<div class="contact_address_icon pb-3">-->
<!--						<i class="fa fa-envelope-o"></i>-->
<!--					</div>-->
<!--					<div class="contact_address_title pb-2">-->
<!--						<h4>Email</h4>-->
<!--					</div>-->
<!--					<div class="contact_address_text">-->
<!--						<p>--><?php //echo $company_data->email ?><!--</p>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-4 col-md-6 col-sm-12">-->
<!--				<div class="single_contact_address text_center mb-30">-->
<!--					<div class="contact_address_icon pb-3">-->
<!--						<i class="fa fa-volume-control-phone"></i>-->
<!--					</div>-->
<!--					<div class="contact_address_title pb-2">-->
<!--						<h4>Contact Directly</h4>-->
<!--					</div>-->
<!--					<div class="contact_address_text">-->
<!--						<p>--><?php // echo $company_data->phone ?><!--</p>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!---->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->


<!-- ============================================================== -->
<!-- Start Techno Contact Address Area -->
<!-- ============================================================== -->

<div class="contact_address_area bg_color2 pt-80 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section_title text_center mb-55">
					<div class="section_sub_title uppercase mb-3">
						<h6>CONTACT US</h6>
					</div>
					<div class="section_main_title">
						<h1>We Are Here For You</h1>
					</div>
					<div class="em_bar">
						<div class="em_bar_bg"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="single_contact_now">
					<div class="single_contact_now_inner">
						<div class="single_contact_now_icon">
							<i class="fa fa-phone"></i>
						</div>
						<div class="single_contact_now_content">
							<h4>Phone Number</h4>
							<p class="m-0 pt-2"><?php  echo $company_data->phone ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="single_contact_now">
					<div class="single_contact_now_inner">
						<div class="single_contact_now_icon">
							<i class="fa fa-envelope-o"></i>
						</div>
						<div class="single_contact_now_content">
							<h4>Email Address</h4>
							<p class="m-0 pt-2"><?php echo $company_data->email ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="single_contact_now">
					<div class="single_contact_now_inner">
						<div class="single_contact_now_icon">
							<i class="fa fa-address-card"></i>
						</div>
						<div class="single_contact_now_content">
							<h4>Postal Address</h4>
							<p class="m-0 pt-2"><?php echo $company_data->postal_address ?></p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- End Techno Contact Address Area -->
<!-- ============================================================== -->

<!--==================================================-->
<!----- End Techno Map Area ----->
<!--==================================================-->
<div class="google_map_area" style="margin-bottom: -10px">
	<div class="row-fluid">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="google_map_area">
				<iframe src="<?php echo $company_data->map_src ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!----- End Techno Map Area ----->
<!--==================================================-->

