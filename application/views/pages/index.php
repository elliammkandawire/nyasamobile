
<!--==================================================-->
<!-- Start Techno Slider Area -->
<!--==================================================-->
<div class="slider_list owl-carousel">
	<?php foreach ($sliders as $slider): ?>
	<div class="slider_area d-flex align-items-center slider1" id="home" style="background-image: url(<?php echo base_url() ?>assets/images/slider/<?php echo $slider->picture ?>);">
		<div class="container">
			<div class="row">
				<!--Start Single Portfolio -->
				<div class="col-lg-12">
					<div class="single_slider">
						<div class="slider_content">
							<div class="slider_text">
								<div class="slider_text_inner">
									<h5><?php echo $slider->title ?></h5>
									<h1><?php echo $slider->content ?></h1>
								</div>
								<div class="slider_button pt-5 d-flex">
									<div class="button">
										<a href="<?php echo base_url() ?>partnerships">Our Partners<i class="fa fa-long-arrow-right"></i></a>
										<a class="active" href="<?php echo base_url() ?>aboutUs">About Us<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>
<!--==================================================-->
<!-- End Techno Slider Area -->
<!--==================================================-->
