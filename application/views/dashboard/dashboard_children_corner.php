
<div class="col-lg-9"><!--start col-lg-4-->
	<?php if(isset($_SESSION['message'])){ $message=$_SESSION['message']; ?>
		<?php $word="successfully"; if(strpos($message,$word)){ $status="success"; }else{ $status="danger" ;} ?>
		<div class="alert alert-<?php echo $status ?> alert-dismissible fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Feedback!</strong> <?php echo $message ?>
		</div>
		<?php $_SESSION['message']=null; } ?>
	<div class="w3-card-16">
		<header class="w3-container w3-blue">
			<h5>Children Corner</h5>
			<button class="btn btn-success" data-toggle="modal" data-target="#add_client" data-whatever="@mdo"><i class="fa fa-plus"></i> Add</button>
		</header>
		<div id="container" class="row" style="width: 100%;">
			<?php foreach($data as $activism): ?>
				<div class="gallery w3-container col-lg-3">
					<a target="_blank">
						<img src="<?php echo base_url(); ?>images\children_corner\<?php echo $activism->picture_url; ?>" alt="" style="object-fit: cover; height: 200px;" >
					</a>
					<div class="desc"><?php echo $activism->title;  ?></div>
					<div class="container">
						<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_client" data-whatever="@mdo" onclick="edit_children_corner('<?php echo $activism->slug; ?>')"><i class="fa fa-edit"></i></button>
						<button class="btn btn-warning btn-sm" onclick="deleteItem('<?php echo $activism->slug; ?>','<?php echo $activism->title; ?>','delete_children-corner')"><i class="fa fa-trash"></i></button>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="col-md-12 col-sm-12 col-xs-12 text-center">
			<nav aria-label="Page navigation">
				<ul class="pagination">
					<?php foreach($pagenation as $page_number): ?>
						<li class="page-item <?php if($page==$page_number){ echo "active";} ?>"><a class="page-link active" href="<?php echo base_url() ?>children-corner_admin/<?php echo $page_number ?>"><?php echo $page_number ?></a></li>
					<?php endforeach; ?>
				</ul>
			</nav>
		</div>
	</div>
</div><!--end col-lg-4-->


</div>
</div>
</div>
</div>


<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

<div class="modal fade" id="add_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" style="width: 60%">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart('add_children-corner');?>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Title:</label>
							<input type="text" class="form-control" name="title"  required="">
						</div>
						<div class="form-group">
							<label for="message-text" class="col-form-label">Content:</label>
							<textarea class="form-control summernote"  rows="15" name="content" style="white-space: pre-wrap;"></textarea>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="message-text" class="col-form-label">Picture:</label>
							<input type="file" class="form-control" name="picture_url" accept=".jpg, .png, .jpeg, .gif"  onchange="readURL(this,'picture')">
						</div>

						<div>
							<img src="#" alt="" style="object-fit: cover; height: 200px; width: 50%;" id="picture">
						</div>
						<br>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>



<div class="modal fade" id="edit_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" style="width: 50%;">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Client</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<?php echo form_open_multipart('update_children-corner');?>
				<div class="row">
					<div class="col-lg-6">
						<input type="hidden" class="form-control" name="slug" id="slug" required="">
						<input type="hidden" class="form-control" id="url"  value="<?php echo base_url(); ?>">

						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Title:</label>
							<input type="text" class="form-control" id="title" name="title"  required="">
						</div>
						<div class="form-group">
							<label for="message-text" class="col-form-label">Content:</label>
							<textarea class="form-control summernote"  rows="15" name="content" id="content" style="white-space: pre-wrap;"></textarea>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="message-text" class="col-form-label">Picture:</label>
							<input type="file" class="form-control" name="picture_url" accept=".jpg, .png, .jpeg, .gif"  onchange="readURL(this,'picture_edit')">
							<input type="hidden" id="current_picture" name="current_picture">
						</div>

						<div>
							<img src="#" alt="" style="object-fit: cover; height: 200px; width: 50%;" id="picture_edit">
						</div>
						<br>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Edit</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>






