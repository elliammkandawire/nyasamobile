

<!-- BLOG AREA -->
<div class="blog_area blog-details-area pt-100 pb-100" id="blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-md-12">
						<div class="blog_details">
							<div class="blog_dtl_thumb">
								<img style="object-fit: cover; height: 500px;" src="<?php echo base_url() ?>assets/images/news/<?php echo $news_details->picture ?>" alt="">
							</div>

							<div class="blog_dtl_content">
								<div class="blog_dtl_top_bs pt-2">
									<span>Business</span>
								</div>
								<h2><?php echo $news_details->title; ?></h2>
								<!-- BLOG META -->
								<div class="Techno-blog-meta">
									<div class="Techno-blog-meta-left">
										<?php
										$date=date_create($news_details->datetime);
										echo date_format($date,"d M Y");
										?>
										</span>
									</div>
								</div>
								<p>
									<?php echo $news_details->content ?>
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="blog_reply_coment_dtl mt-5">
							<div class="reply_ttl">
								<h3>Leave  Comments</h3>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="contact_from">
										<form id="contact_form" action="mail.php" method="POST">
											<div class="row">
												<div class="col-lg-6">
													<div class="form_box mb-30">
														<input type="text" name="name" placeholder="Name">
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form_box mb-30">
														<input type="email" name="email" placeholder="Email Address">
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form_box mb-30">
														<input type="text" name="phone" placeholder="Phone Number">
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form_box mb-30">
														<input type="text" name="web" placeholder="Website">
													</div>
												</div>

												<div class="col-lg-12">
													<div class="form_box mb-30">
														<textarea name="message" id="message" cols="30" rows="10" placeholder="Write a Message"></textarea>
													</div>
													<div class="quote_btn text_center">
														<button class="btn" type="submit">Send Message</button>
													</div>
												</div>
											</div>
										</form>
										<p class="form-message"></p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
			<div class=" col-lg-4 col-md-5 col-sm-12 col-xs-12 sidebar-right content-widget pdsr">
				<div class="blog-left-side widget">
					<div id="search-3" class="widget widget_search">
						<div class="search">
							<form action="#" method="get">
								<input type="text" name="s" value="" placeholder="Type Your Keyword" title="Search for:">
								<button type="submit" class="icons">
									<i class="fa fa-search"></i>
								</button>
							</form>
						</div>
					</div>

					<div id="em_recent_post_widget-6" class="widget widget_recent_data">
						<div class="single-widget-item">
							<h2 class="widget-title">Popular Post</h2>
							<?php foreach ($latest_news as $article): ?>
							<div class="recent-post-item">
								<div class="recent-post-image">
									<a href="<?php echo  base_url()?>news/<?php echo $article->slug ?>">
										<img style="object-fit: cover; height: 50px; width: 60px"  height="80" src="<?php echo base_url() ?>assets/images/news/<?php echo $article->picture ?>" alt="">
									</a>
								</div>
								<div class="recent-post-text">

									<h4><a href="<?php echo  base_url()?>news/<?php echo $article->slug ?>">
											<?php echo $article->title ?>
										</a>
									</h4>
									<span class="rcomment">
									  <?php
									  $date=date_create($article->datetime);
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

		</div>
	</div>
</div>
<!-- BLOG_AREA END -->
