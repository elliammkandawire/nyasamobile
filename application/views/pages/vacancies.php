

<!--==================================================-->
<!----- Start Techno Service Area ----->
<!--==================================================-->
<div class="service_area bg_color2 pt-85 pb-80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section_title text_center mb-55">
					<div class="section_sub_title uppercase mb-3">
						<h6>Vacancies</h6>
					</div>
					<div class="section_main_title">
						<h1>Career Opportunity</h1>
					</div>
					<div class="em_bar">
						<div class="em_bar_bg"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 250px">
			<?php foreach ($vacancies as $vacancy): ?>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="service_style_five pt-40 pb-40 pl-25 pr-3 mb-30">
					<div class="service_style_five_icon mb-30">
						<div class="icon">
							<i class="flaticon-business-and-finance"></i>
						</div>
					</div>
					<div class="service_style_five_title mb-2">
						<h4><?php echo $vacancy->position ?></h4>
					</div>
					<div class="service_style_five_text">
						<p><?php echo substr($vacancy->content, 0, 200) ?>...</p>
					</div>
					<div class="service_style_five_button">
						<a href="<?php echo base_url() ?>careers/<?php echo $vacancy->slug ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!--==================================================-->
<!----- End Techno Service Area ----->
<!--==================================================-->
