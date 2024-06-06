<?php echo "hello blog"; ?>
<?php get_header(); ?>
<div class="main-wrapper">	    
	<article class="blog-post px-3 py-5 p-md-5">
		<div class="container">
			<header class="blog-post-header">
				<h2 class="title mb-2"><?php the_title(); ?></h2>
				<div class="meta mb-3">
					<span class="date">Published <?php echo get_the_date(); ?></span>
					<span class="time"> min read</span>
					<span class="comment"><a href="#comments"><?php comments_number('0 comments', '1 comment', '% comments'); ?></a></span>
				</div>
			
			</header>
			
			<div class="blog-post-body wp-content">
				<?php echo wpautop(get_the_content()); ?>
				<nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<svg class="svg-inline--fa fa-long-arrow-alt-left fa-w-14 arrow-prev" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg><!-- <i class="arrow-prev fas fa-long-arrow-alt-left"></i> --></a>
				  <a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.html">Next<svg class="svg-inline--fa fa-long-arrow-alt-right fa-w-14 arrow-next" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path></svg><!-- <i class="arrow-next fas fa-long-arrow-alt-right"></i> --></a>
				</nav>

			</div>
		</div>
	</article>
</div>
<?php get_footer(); ?>
