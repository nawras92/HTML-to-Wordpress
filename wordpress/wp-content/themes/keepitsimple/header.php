<!DOCTYPE html>
<html class="no-js" lang="<?php bloginfo("language"); ?>">
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>
    <?php bloginfo("name");  ?>
  </title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->

   <?php if (is_rtl()): ?>
       <link rel="stylesheet" href="<?php echo  get_template_directory_uri();?>/assets/css/keepitsimple-rtl.css">
    <?php else: ?>
       <link rel="stylesheet" href="<?php echo  get_template_directory_uri();?>/assets/css/keepitsimple.css">
    <?php endif; ?>


   <!-- Script
   ================================================== -->
	<script src="assets/js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

  <?php wp_head(); ?>
</head>

<body>

  <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>
   <!-- Header
   ================================================== -->
   <header id="top">

   	<div class="row">

   		<div class="header-content twelve columns">

		      <h1 id="logo-text"><a href="<?php echo site_url(); ?>" title="">
            <?php bloginfo("name");  ?>
          </a></h1>
			  	<p id="intro" style="color:#000;">
            <?php  bloginfo("description");  ?>
          </p>
			</div>

	   </div>

	   <nav id="nav-wrap">

	   	<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>

	   	<div class="row">

			   	<ul id="nav" class="nav">
			      	<li class="current"><a href="index.html">Home</a></li>
			      	<li class="has-children"><a href="#">Dropdown</a>
	                  <ul>
	                     <li><a href="#">Submenu 01</a></li>
	                     <li><a href="#">Submenu 02</a></li>
	                     <li><a href="#">Submenu 03</a></li>
	                  </ul>
	               </li>
	               <li><a href="demo.html">Demo</a></li>
	               <li><a href="archives.html">Archives</a></li>
			      	<li class="has-children"><a href="single.html">Blog</a>
							<ul>
	                     <li><a href="blog.html">Blog Entries</a></li>
	                     <li><a href="single.html">Single Blog</a></li>
	                  </ul>
			      	</li>
			      	<li><a href="page.html">Page</a></li>
			   	</ul> <!-- end #nav -->

	   	</div>

	   </nav> <!-- end #nav-wrap -->

   </header> <!-- Header End -->
