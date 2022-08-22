
<!--==================================================-->
<!----- Start Techno About Area ----->
<!--==================================================-->
<div class="about_area pt-85 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="section_title text_left mb-40 mt-3">
					<div class="section_sub_title uppercase mb-3">
						<h6><?php echo $company_data->fullname ?></h6>
					</div>
					<div class="section_main_title">
						<h1><?php echo $company_data->motto ?></h1>
					</div>
					<div class="em_bar">
						<div class="em_bar_bg"></div>
					</div>
					<div class="section_content_text bold pt-5">
						<p>
							<?php
							   $array = explode('.', $company_data->background, 2);
							   echo $array[0];
							?>
						</p>
					</div>
				</div>
				<div class="singel_about_left mb-30">
					<div class="singel_about_left_inner mb-3">
						<div class="singel-about-content boder pl-4">
							<p><?php echo $array[1]; ?></p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!--==================================================-->
	<!----- Start Techno About Area ----->
	<!--==================================================-->
	<div class="team_member pt-85 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="section_title text_left mb-60 mt-3">
						<div class="section_sub_title uppercase mb-3">
							<h6>OUR STAFF</h6>
						</div>
						<div class="section_main_title">
							<h1>Meet Our Patriotic Staff</h1>
						</div>
						<div class="em_bar">
							<div class="em_bar_bg"></div>
						</div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="team_join_thumb">
						<img style="object-fit: cover; width: 100%; height: 800px" src="<?php echo base_url() ?>assets/images/about/<?php echo $company_data->about_picture  ?>" alt="" />
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End Techno About Area ----->
	<!--==================================================-->

	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="section_title text_left mb-60 mt-3">
					<div class="section_sub_title uppercase mb-3">
						<h6>TEAM MEMBER</h6>
					</div>
					<div class="section_main_title">
						<h1>Management Team</h1>
					</div>
					<div class="em_bar">
						<div class="em_bar_bg"></div>
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach ($teams as $team): ?>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
					<div class="team_style_three mb-30">
						<div class="team_style_three_inner">
							<div class="team_style_three-thumb">
								<div class="team_style_three_thumb_inner">
									<img src="<?php echo base_url() ?>assets/images/team/<?php echo $team->picture ?>" alt="" />
								</div>
							</div>
							<div class="team_style_three_content">
								<div class="team_style_three_title">
									<h4><?php echo $team->fullname ?></h4>
								</div>
								<div class="team_style_three_sub_title">
									<span><?php echo $team->position ?></span>
								</div>
								<div class="team_style_three_icon">
									<a href="<?php echo $team->facebook ?>"><i class="fa fa-facebook"></i></a>
									<a href="<?php echo $team->twitter ?>"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!--==================================================-->
<!----- End Techno About Area ----->
<!--==================================================-->

<!--==================================================-->
<!----- Start Techno Subscribe Area ----->
<!--==================================================-->
<div class="subscribe_area bg_color pt-30 pb-45">
	<div class="container">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<div class="single_subscribe_contact">
					<div class="subscribe_content_title white text_center pb-30">
						<h2>Best of Nyasa Mobile</h2>
						<h6>Sign up for highlights from around the Group</h6>
					</div>
					<form action="#">
						<div class="subscribe_form">
							<input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Enter Your Email">
							<div class="help-block with-errors"></div>
						</div>
						<div class="subscribe_form_send">
							<button type="submit" class="btn">
								Subscribe
							</button>
							<div id="msgSubmit" class="h3 text-center hidden"></div>
							<div class="clearfix"></div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
</div>

<!--==================================================-->
<!----- End Techno Subscribe Area ----->
<!--==================================================-->

<!--==================================================-->
<!----- Start Techno Flipbox Top Feature Area ----->
<!--==================================================-->
<!--<div class="flipbox_area top_feature pb-70 two">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">-->
<!--				<div class="Techno_flipbox mb-30">-->
<!--					<div class="Techno_flipbox_font">-->
<!--						<div class="Techno_flipbox_inner">-->
<!--							<div class="Techno_flipbox_icon">-->
<!--								<div class="icon">-->
<!--									<i class="flaticon-code"></i>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="flipbox_title">-->
<!--								<h3>Responsive Design</h3>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="Techno_flipbox_back">-->
<!--						<div class="Techno_flipbox_inner">-->
<!--							<div class="flipbox_title">-->
<!--								<h3>Responsive Design</h3>-->
<!--							</div>-->
<!--							<div class="flipbox_desc pt-3">-->
<!--								<p>Our experience design arm, method, helps businesses connect the dots</p>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">-->
<!--				<div class="Techno_flipbox mb-30">-->
<!--					<div class="Techno_flipbox_font">-->
<!--						<div class="Techno_flipbox_inner">-->
<!--							<div class="Techno_flipbox_icon">-->
<!--								<div class="icon">-->
<!--									<i class="flaticon-call"></i>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="flipbox_title">-->
<!--								<h3>24/7 Online Support</h3>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="Techno_flipbox_back">-->
<!--						<div class="Techno_flipbox_inner">-->
<!--							<div class="flipbox_title">-->
<!--								<h3>24/7 Online Support</h3>-->
<!--							</div>-->
<!--							<div class="flipbox_desc pt-3">-->
<!--								<p>Our experience design arm, method, helps businesses connect the dots</p>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">-->
<!--				<div class="Techno_flipbox mb-30">-->
<!--					<div class="Techno_flipbox_font">-->
<!--						<div class="Techno_flipbox_inner">-->
<!--							<div class="Techno_flipbox_icon">-->
<!--								<div class="icon">-->
<!--									<i class="flaticon-developer"></i>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="flipbox_title">-->
<!--								<h3>Quality Product</h3>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="Techno_flipbox_back">-->
<!--						<div class="Techno_flipbox_inner">-->
<!--							<div class="flipbox_title">-->
<!--								<h3>Quality Product</h3>-->
<!--							</div>-->
<!--							<div class="flipbox_desc pt-3">-->
<!--								<p>Our experience design arm, method, helps businesses connect the dots</p>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">-->
<!--				<div class="Techno_flipbox mb-30">-->
<!--					<div class="Techno_flipbox_font">-->
<!--						<div class="Techno_flipbox_inner">-->
<!--							<div class="Techno_flipbox_icon">-->
<!--								<div class="icon">-->
<!--									<i class="flaticon-global-1"></i>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="flipbox_title">-->
<!--								<h3>Productiv Software</h3>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="Techno_flipbox_back">-->
<!--						<div class="Techno_flipbox_inner">-->
<!--							<div class="flipbox_title">-->
<!--								<h3>Productivi Software</h3>-->
<!--							</div>-->
<!--							<div class="flipbox_desc pt-3">-->
<!--								<p>Our experience design arm, method, helps businesses connect the dots</p>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!---->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!--==================================================-->
<!----- End Techno Flipbox Top Feature Area ----->
<!--==================================================-->

