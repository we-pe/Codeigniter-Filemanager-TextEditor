<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Codeigniter - Text Editor - File Manager</title>
		<meta name="author" content="Bagus We Pe">
		<script src="<?=base_url();?>assets/jquery/jquery-3.1.0.min.js"></script>
		<script src="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?=base_url();?>assets/bootstrap/css/modern-business.css" />
	</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?=base_url();?>">Home</a>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">TinyMCE <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?=base_url();?>tinymce/secure">Secure</a>
						</li>
						<li><a href="<?=base_url();?>tinymce/insecure">InSecure</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">CKEditor <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?=base_url();?>ckeditor/secure">Secure</a>
						</li>
						<li><a href="<?=base_url();?>ckeditor/insecure">InSecure</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Text Field <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?=base_url();?>field/secure">Secure</a>
						</li>
						<li><a href="<?=base_url();?>field/insecure">InSecure</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Codeigniter - File Manager - Text Editor
			</h1>
		</div>
	</div>
	

	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<h3><i class="fa fa-check-circle"></i> Codeigniter 3.1.4 Built</h3>
					<p>Built by using <a href="http://startbootstrap.com">Codeigniter 3.1.4</a> version with HMVC method. Make sure you're up to date with Codeigniter HMVC documentation!</p>
				</div>
				<div class="col-lg-4 col-md-4">
					<h3><i class="fa fa-folder-open"></i> Responsive File Manager</h3>
					<p>Using Responsive File Manager to manage media files on your hosting.</p>
				</div>
				<div class="col-lg-4 col-md-4">
					<h3><i class="fa fa-pencil"></i> TinyMCE &amp; CKEditor</h3>
					<p>Integrated with famous WYSIWYG, TinyMCE and CKEditor.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<footer>
	<div class="container">
		<p><a href="https://github.com/we-pe/AngularJSRequireJSExample">&hearts; Me on github</a></p>
	</div>
</footer>

</body>
</html>