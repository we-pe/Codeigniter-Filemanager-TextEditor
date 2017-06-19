<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Text Field</title>
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
			<h1 class="page-header">TextField
				<small><?=$pages;?></small>
			</h1>
		</div>
	</div>
	
	<div class="row">
	<div class="col-md-6">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Choose File" name="files" id="files">
			<span class="input-group-addon">
				<a data-toggle="modal" href="javascript:(0);" data-target="#myModal" >
					Browse
				</a>
			</span>
		</div>
	</div>
	</div>
</div>

<footer>
	<div class="container">
		<p><a href="https://github.com/we-pe/Codeigniter-Filemanager-TextEditor">&hearts; Me on github</a></p>
	</div>
</footer>

<div class="modal fade" id="myModal">
<div class="modal-dialog">
	<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title">Choose File</h4>
	</div>
	<div class="modal-body" style="padding:0px; margin:0px; width: 100%;">
		<iframe width="100%" height="450" src="<?=base_url();?>assets/filemanager/dialog.php?type=2&field_id=files&relative_url=2&fldr=masuk" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
	</div>
	</div>
</div>
</div>

</body>
</html>