<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/w3css/w3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/w3css/w3-4.css">
	<!-- Bootstrap CSS -->
	<link href="<?php echo base_url(); ?>assets/css/admin.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/assets/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--	<link href="--><?php //echo base_url(); ?><!--assets\libs\summernote\summernote-bs4.css" rel="stylesheet" type="text/css">-->
<!--	<script src="--><?php //echo base_url() ?><!--assets\libs\summernote\summernote-bs4.min.js"></script>-->
<!--	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">-->
<!--	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">-->

     <style type="text/css">
      .body
      {
        padding: 10px;
        border: 2px solid #000;
        border-radius: 15px;
        -moz-border-radius: 15px;
      }
	  .main-color{
		  background-color: #822676;
		  color: whitesmoke;
	  }
  </style>
       
</head>
<body>
<div class="w3-container" id="body">
   <div class="row">
<!--   	  <div class="col-lg-1"></div>-->
       <div class="col-lg-12 offset-lg-1">
           <div class="w3-bar w3-black w3-border w3-large">
			  <a href="<?php echo base_url(); ?>dashboard" class="w3-bar-item w3-button w3-black"><i class="fa fa-home"></i></a>
			  <a href="<?php echo base_url(); ?>index.php" class="w3-bar-item w3-button"><i class="fa fa-globe"></i></a>
			  <a href="<?php echo base_url(); ?>logout" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></a>
			</div>
       </div>
   </div>

	<div class="col-lg-1"></div>
   <div class="col-lg-12 offset-lg-1" style="padding: 0%;">
    <div class="card">
      <div class="card-body">
       
            <nav class="breadcrumb">
                <a class="breadcrumb-item" href="<?php echo base_url() ?>dashboard">Home</a>
            </nav>
            <div class="row">
	     		<div class="col-lg-2"><!--start col-lg-3-->
					<div class="w3-card-16">
						<header class="w3-container brand-color">
							<h5 style="color: whitesmoke">Quick Links</h5>
						</header>
						
						<ul class="list-group ">
							<a href="<?php echo base_url(); ?>dashboard" class="list-group-item"><i class="fa fa-home"></i> Home</a>
							<a href="<?php echo base_url() ?>slider" class="list-group-item"><i class="fa fa-camera"></i> Slider</a>
							<a href="<?php echo base_url() ?>careers_admin" class="list-group-item"><i class="fa fa-clock-o"></i> Careers</a>
							<a href="<?php echo base_url() ?>news_admin" class="list-group-item"><i class="fa fa-book"></i> Stories</a>
                            <a href="<?php echo base_url() ?>team_admin"  class="list-group-item"><i class="fa fa-users"></i> Team</a>
<!--							<a href="--><?php //echo base_url() ?><!--services_admin" class="list-group-item"><i class="fa fa-balance-scale"></i> Services</a>-->
                            <a href="<?php echo base_url() ?>partners_admin" class="list-group-item"><i class="fa fa-users"></i> Partners</a>
<!--                            <a href="--><?php //echo base_url() ?><!--gallery" class="list-group-item"><i class="fa fa-camera"></i> Gallery</a>-->
<!--							<a href="--><?php // echo base_url() ?><!--admin_resources" class="list-group-item"><i class="fa fa-book"></i> Resources</a>-->
							<a href="<?php echo base_url(); ?>" target="_blank" class="list-group-item"><i class="fa fa-globe"></i> Website</a>
							<a href="<?php echo base_url(); ?>logout"  class="list-group-item"><i class="fa fa-sign-out"></i> Logout</a>
							
						</ul>
						
					</div>
			  </div>




