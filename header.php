<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo get_bloginfo(); ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
<!--     
    < FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    
    <!-- Theme CSS ->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css"> -->
 <?php wp_head(); ?>
</head> 

<body>
    <header class="header text-center">	    
	    <h1 class="blog-name pt-lg-4 mb-0"><a href="index.html"><?php //echo get_bloginfo(); ?> ParijatInfoTech</a></h1>
	    <nav class="navbar navbar-expand-lg navbar-dark" >
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img8.jpg" alt="image" >			
					
					<div class="bio mb-3"><?php //echo bloginfo(); ?>ParijatInfoTech<br><!--//bio-->
                      <a href="<?php echo home_url('/about'); ?>">Find out more about me</a>
					</div>
					<ul class="social-list list-inline py-3 mx-auto">
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
			        </ul><!--//social-list-->
			        <hr> 
				</div><!--//profile-section-->
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item <?php if (is_front_page()) echo 'active'; ?>">
						<a class="nav-link" href="<?php echo home_url(); ?>"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item <?php if (is_archive('blog')) echo 'active'; ?>">
						<a class="nav-link" href="<?php echo home_url(); ?>/blog"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog List</a>
					</li>
					<li class="nav-item <?php if (is_page('about')) echo 'active'; ?>">
						<a class="nav-link" href="<?php echo home_url(); ?>/about"><i class="fas fa-user fa-fw mr-2"></i>About</a>
					</li>
				</ul>			
			</div>
		</nav>
    </header>