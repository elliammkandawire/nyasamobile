

<!-- BLOG AREA -->
<div class="blog_area blog-details-area pt-100 pb-100" id="blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-md-12">
						<div class="blog_details">
							<div class="blog_dtl_content">
								<div class="blog_dtl_top_bs pt-2">
									<span><?php echo $vacancy_details->category ?></span>
								</div>
								<h2><?php echo $vacancy_details->position ?></h2>
								<p>
									<?php  echo $vacancy_details->content ?>
								</p>

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
											<img style="object-fit: cover" height="80" src="<?php echo base_url() ?>assets/images/news/<?php echo $article->picture ?>" alt="">
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
