<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>TinyMCE</title>
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
			<h1 class="page-header">TinyMCE
				<small><?=$pages;?></small>
			</h1>
		</div>
	</div>
	
	<div class="row">
	<div class="col-md-12">
		<textarea class="tinymce"></textarea>
	</div>
	</div>
</div>

<footer>
	<div class="container">
		<p><a href="https://github.com/we-pe/AngularJSRequireJSExample">&hearts; Me on github</a></p>
	</div>
</footer>

<script src="<?=base_url();?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="<?=base_url();?>assets/tinymce/js/tinymce/jquery.tinymce.min.js"></script>

<script type="text/javascript">
	tinymce.init({
		selector: "textarea.tinymce",
		theme: "modern",
		max_height: 200,
		min_height: 160,
		height : 180,
		plugins: [
			"advlist autolink lists link charmap print preview anchor",
			"searchreplace visualblocks code",
			"insertdatetime table contextmenu paste image responsivefilemanager"
		],
		relative_urls: false,
		remove_script_host: false,
		filemanager_title:"Filemanager",
		filemanager_crossdomain: true,
		external_filemanager_path:"<?=base_url();?>assets/filemanager/",
		external_plugins: { "filemanager" : "<?=base_url();?>assets/filemanager/plugin.min.js"},
		filemanager_access_key:"hAi123",
				
		toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image responsivefilemanager link",
		image_advtab: true
	});
</script>

</body>
</html>