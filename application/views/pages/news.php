

<!--==================================================-->
<!----- Start Techno Blog Area ----->
<!--==================================================-->
<div class="blog_area pt-85 pb-65">
	<div class="container">
		<div class="row">
			<?php foreach ($news["content"] as $article): ?>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="single_blog mb-30">
					<div class="single_blog_thumb pb-4">
						<a href="<?php echo base_url() ?>news/<?php echo $article->slug ?>"><img style="object-fit: cover; height: 300px;" src="<?php echo base_url() ?>assets/images/news/<?php echo $article->picture ?>" alt=""></a>
					</div>
					<div class="single_blog_content pl-4 pr-4">
						<div class="Techno_blog_meta">
							<a href="#"><?php echo $article->author ?></a>
							<span class="meta-date pl-3">
							    <?php
							      $date=date_create($article->datetime);
							      echo date_format($date,"M d, Y");
							    ?>
							</span>
						</div>
						<div class="blog_page_title pb-35">
							<h3><a href="<?php echo base_url() ?>news/<?php echo $article->slug ?>"><?php echo $article->title ?></a></h3>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<!-- start pagination -->
		<div class="row">
			<div class="col-md-12">
				<div class="paginations">
					<ul class="page-numbers">
						<li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-left"></i></a></li>
						<?php for($i=0; $i<json_decode($news["totalPages"])[0]->pages; $i++){ ?>
							<li><a class="page-numbers" href="<?php echo base_url() ?>news?page=<?php echo $i ?>"><?php echo $i+1 ?></a></li>
						<?php } ?>
						<li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-right"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!----- End Techno Blog Area ----->
<!--==================================================-->
