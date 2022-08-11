

<!--==================================================-->
<!----- Start Techno Blog Area ----->
<!--==================================================-->
<!--<div class="blog_area pt-85 pb-65">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			--><?php //foreach ($news["content"] as $article): ?>
<!--			<div class="col-lg-4 col-md-6 col-sm-12">-->
<!--				<div class="single_blog mb-30">-->
<!--					<div class="single_blog_thumb pb-4">-->
<!--						<a href="--><?php //echo base_url() ?><!--news/--><?php //echo $article->slug ?><!--"><img style="object-fit: cover; height: 300px;" src="--><?php //echo base_url() ?><!--assets/images/news/--><?php //echo $article->picture ?><!--" alt=""></a>-->
<!--					</div>-->
<!--					<div class="single_blog_content pl-4 pr-4">-->
<!--						<div class="Techno_blog_meta">-->
<!--							<a href="#">--><?php //echo $article->author ?><!--</a>-->
<!--							<span class="meta-date pl-3">-->
<!--							    --><?php
//							      $date=date_create($article->datetime);
//							      echo date_format($date,"M d, Y");
//							    ?>
<!--							</span>-->
<!--						</div>-->
<!--						<div class="blog_page_title pb-35">-->
<!--							<h3><a href="--><?php //echo base_url() ?><!--news/--><?php //echo $article->slug ?><!--">--><?php //echo $article->title ?><!--</a></h3>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			--><?php //endforeach; ?>
<!--		</div>-->
		<!-- start pagination -->
<!--		<div class="row">-->
<!--			<div class="col-md-12">-->
<!--				<div class="paginations">-->
<!--					<ul class="page-numbers">-->
<!--						<li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-left"></i></a></li>-->
<!--						--><?php //for($i=0; $i<json_decode($news["totalPages"])[0]->pages; $i++){ ?>
<!--							<li><a class="page-numbers" href="--><?php //echo base_url() ?><!--news?page=--><?php //echo $i ?><!--">--><?php //echo $i+1 ?><!--</a></li>-->
<!--						--><?php //} ?>
<!--						<li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-right"></i></a></li>-->
<!--					</ul>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!--==================================================-->
<!----- End Techno Blog Area ----->
<!--==================================================-->


<div class="testimonial_area pt-80 pb-100">
	<div class="container">
		<div class="row">
			<div class="testimonial_list2 owl-carousel curosel-style">
				<div class="testimonial_style_three d-flex">
					<div class="testimonial_style_three_thumb">
						<img style="object-fit: cover; height: 580px; width: 580px" src="<?php echo base_url() ?>assets/images/news/<?php echo $news["content"][0]->picture ?>" alt="" />
					</div>
					<div class="testimonial_style_three_content">
						<div class="testimonial_style_three_title">
							<h4><?php echo $news["content"][0]->title ?></h4>
							<span><?php echo $news["content"][0]->author ?></span>
						</div>
						<div class="testimonial_style_three_text pt-4">
							<p><?php echo substr($news["content"][0]->content,0,300) ?></p>
						</div>
						<div class="testimonial_style_three_quote mt-4">
							<i class="fa fa-quote-left"></i>
						</div>
						<div class="service_style_one_button pt-3">
							<a href="<?php echo base_url() ?>news/<?php echo $news["content"][0]->slug ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="margin-top: 50px">
		<div class="row">
			<?php foreach ($news["content"] as $article): ?>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="service_style_ten wow flipInY" data-wow-delay="0ms" data-wow-duration="2500ms">
					<div class="single_service_style_ten">
						<div class="service_style_ten_icon pb-2">
							<div class="icon">
								<i class="flaticon-clock"></i>
							</div>
							<div class="Techno_blog_meta">
								<a href="#"><?php echo $article->author ?></a>
								<span class="meta-date pl-3">
							    <?php
								$date=date_create($article->datetime);
								echo date_format($date,"M d, Y");
								?>
							</span>
							</div>
						</div>
						<div class="service_style_ten_content">
							<h4 class="pb-2"><a href="<?php echo base_url() ?>news/<?php echo $article->slug ?>"><?php echo $article->title ?></a></h4>
							<p><?php echo substr($article->content, 0, 100) ?></p>
						</div>
						<div class="service_style_one_button pt-3">
							<a href="<?php echo base_url() ?>news/<?php echo $article->slug ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>

		</div>
	</div>

</div>
<!--==================================================-->
<!----- End Techno Testimonial Area ----->
<!--==================================================-->


