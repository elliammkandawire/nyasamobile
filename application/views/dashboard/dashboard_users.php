
       
    
        <div class="col-lg-9"><!--start col-lg-4-->
			 <div class="w3-card-16">

			    <?php if(isset($_SESSION['message'])){ $message=$_SESSION['message']; ?>
				<?php $word="successfully"; if(strpos($message,$word)){ $status="success"; }else{ $status="danger" ;} ?>
					<div class="alert alert-<?php echo $status ?> alert-dismissible fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Feedback!</strong> <?php echo $message ?>
					</div>
				<?php $_SESSION['message']=null; } ?>
					<header class="w3-container w3-blue">
							<h5>Users</h5>
							 <button class="btn btn-success" data-toggle="modal" data-target="#add" onclick="add_summary_note()" data-whatever="@mdo"><i class="fa fa-plus"></i> Add</button>
					</header>

					
					<div class="row">
						<div class="col-sm-12 text-center">
							<nav aria-label="Page navigation">
								<ul class="pagination">
								<?php foreach($pagenation as $page_number): ?>
								  <li class="page-item <?php if($page==$page_number){ echo "active";} ?>"><a class="page-link active" href="<?php echo base_url() ?>users_admin/<?php echo $page_number ?>"><?php echo $page_number ?></a></li>

				                 <?php endforeach; ?>
								</ul>
							</nav>
						</div>
						</div>
						
						<div class="col-sm-4 w3-right">
						   <br>  
						   <form method="POST" action="<?php echo base_url() ?>home/search">
						      <input type="hidden" name="endpoint" value="users">
						      <input type="hidden" name="field" value="username">
						      <input type="hidden" name="page" value="dashboard_users">
							  <input type="text" class="form-control" placeholder="Search" name="search_text">
						   </form>
						   <br>
						</div>
					</div>
					<div id="container" style="width: 100%;" class="jumbotron">

					           <table class="w3-table w3-table-stripped table-bordered">
								  <thead>
									  <th>Username</th>
									  <th>Actions</th>
								  </thead>
                                  <tbody>
								    <?php foreach($home as $item): ?>
									       <td><?php echo $item->username;  ?></td>
										<td> <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit" data-whatever="@mdo" onclick="edit_user('<?php echo $item->username; ?>')"><i class="fa fa-edit"></i></button>
							  	             <button class="btn btn-warning btn-sm" onclick="delete_user('<?php echo $item->id; ?>','<?php echo $item->username; ?>')"><i class="fa fa-trash"></i></button></td>
									  </tr>
									<?php endforeach; ?>
									</tr>
									</tbody>
								</table>
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

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: 30%">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="POST" action="<?php echo base_url(); ?>home/create_user" enctype="multipart/form-data">
      	<div class="row">
      		<div class="col-lg-12">
			          <div class="form-group">
			            <label for="recipient-name" class="col-form-label">User Name*:</label>
			            <input type="text" class="form-control" name="username"  required="">
			          </div>
			          <div class="form-group">
			            <label for="message-text" class="col-form-label">Status*:</label>
			            <select  class="form-control" name="status" required="">
                          <option value="1">Active</option>
                          <option value="0">InActive</option>
                        </select>
			          </div>
			          <div class="form-group">
			            <label for="message-text" class="col-form-label">Role*:</label>
			            <select  class="form-control" name="role" required="">
                          <option value="1">Standard user</option>
                          <option value="0">Admin</option>
                        </select>
			          </div>
      		</div>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
       </form>
    </div>
  </div>
</div>

	
<?php $uri = $_SERVER['REQUEST_URI']; ?>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: 30%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" action="<?php echo base_url(); ?>home/update_user" enctype="multipart/form-data">
        <div class="row">
        	 <div class="col-lg-12">
        	 	 <input type="hidden" class="form-control" name="id" id="id" required="">
		          <input type="hidden" class="form-control" id="url"  value="<?php echo base_url(); ?>">
                  
                      <div class="form-group">
			            <label for="recipient-name" class="col-form-label">user Name*:</label>
			            <input type="text" class="form-control" name="username" id="username"  required="">
			          </div>
			          <div class="form-group">
			            <label for="message-text" class="col-form-label">New Password*:</label>
			            <input  type="text" class="form-control" name="password"  required="">
			          </div>
        	 </div>
        </div>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
       </form>
    </div>
  </div>
</div>






