<!--==================================================-->
<!----- Start Techno Service Area ----->
<!--==================================================-->
<div class="service_area bg_color2 pt-85 pb-75">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section_title text_center mb-55">
					<div class="section_sub_title uppercase mb-3">
						<h6>Partners</h6>
					</div>
					<div class="section_main_title">
						<h1>Our Partners</h1>
					</div>
					<div class="em_bar">
						<div class="em_bar_bg"></div>
					</div>
				</div>
			</div>
		</div>
		<?php foreach ($partners as $category): ?>
			<div class="section_main_title" style="margin-bottom: 10px">
				<h4><?php echo ucwords(str_replace("-"," ",$category[0]["category"])); ?></h4>
			</div>
		<div class="row">
			<?php foreach ($category as $partner): ?>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="service_style_one text_center pt-40 pb-40 pl-3 pr-3 mb-4">
					<div class="service_style_one_icon mb-30">
						<img style="object-fit: cover; height: 70px;" src="<?php echo base_url() ?>assets/images/parterners/<?php echo $partner["logo"]; ?>" alt="" />
					</div>
					<a target="_blank" href="<?php echo $partner["website"] ?>"><div class="service_style_one_title mb-30">
						<h4><?php echo $partner["name"]; ?></h4>
					</div>
					</a>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<!--==================================================-->
<!----- End Techno Service Area ----->
<!--==================================================-->
