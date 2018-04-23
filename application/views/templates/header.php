<!DOCTYPE html>
<html>
<head>
	<title>ciBlog</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
	<script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li  class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">ciBlog</a></li>
				<li  class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>
				<li  class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>about">About</a></li>
				<li  class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a></li>
				<li  class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if( !$this->session->userdata('logged_in') ): ?>
					<li  class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a></li>
					<li  class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a></li>
				<?php else: ?>
					<li  class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Posts</a></li>
					<li  class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Categories</a></li>
					<li  class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</nav>

	<div class="container">

		<!-- Flash messages -->

		<?php if($this->session->flashdata('user_registered')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
		<?php endif; ?>
		<?php if($this->session->flashdata('post_created')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
		<?php endif; ?>
		<?php if($this->session->flashdata('post_updated')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
		<?php endif; ?>
		<?php if($this->session->flashdata('post_deleted')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
		<?php endif; ?>
		<?php if($this->session->flashdata('category_created')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
		<?php endif; ?>
		<?php if($this->session->flashdata('user_loggedin')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
		<?php endif; ?>
		<?php if($this->session->flashdata('login_failed')): ?>
			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
		<?php endif; ?>
		<?php if($this->session->flashdata('user_loggedout')): ?>
			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
		<?php endif; ?>
		<?php if($this->session->flashdata('category_deleted')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
		<?php endif; ?>
