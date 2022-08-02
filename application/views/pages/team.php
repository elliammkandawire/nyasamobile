<!--==================================================-->
<!----- Start Techno Team Area ----->
<!--==================================================-->
<div class="team_area pt-85 pb-80">
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
<!----- End Techno Team Area ----->
<!--==================================================-->
