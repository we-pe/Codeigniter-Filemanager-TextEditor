<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CKEditor</title>
		<meta name="author" content="Bagus We Pe">
		<script src="<?=base_url();?>assets/jquery/jquery-3.1.0.min.js"></script>
		<script src="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?=base_url();?>assets/bootstrap/css/modern-business.css" />

		<script src="<?=base_url();?>assets/ckeditor/ckeditor.js"></script>
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
			<h1 class="page-header">CKEditor
				<small><?=$pages;?></small>
			</h1>
		</div>
	</div>
	
	<div class="row">
	<div class="col-md-12">
		<textarea id="ckeditor"></textarea>
	</div>
	</div>
</div>

<footer>
	<div class="container">
		<p><a href="https://github.com/we-pe/AngularJSRequireJSExample">&hearts; Me on github</a></p>
	</div>
</footer>

<script type="text/javascript">
	CKEDITOR.replace('ckeditor', {
		customConfig: '<?=base_url();?>assets/ckeditor/wepe_config.js',
		filebrowserImageBrowseUrl: '<?=base_url('assets/filemanager/dialog.php?type=1&editor=ckeditor&fldr=');?>'
	});
</script>

</body>
</html>