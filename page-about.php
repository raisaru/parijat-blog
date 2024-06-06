<?php echo "hello"; ?>
<?php
get_header(); ?>

<div class="main-wrapper">
    <article class="about-section py-5">
        <div class="container">
            <h2 class="title mb-3"><?php the_title(); ?>  Hello</h2>
            <h5 class="mt-5"><?php echo get_the_content(); ?></h5>
 
        </div>
    </article><!--//about-section-->

    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center">
            <h2 class="heading">ParijatInfoTech</h2>
            <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
            <form class="signup-form form-inline justify-content-center pt-3">
                <div class="form-group">
                    <label class="sr-only" for="semail">Your email</label>
                    <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>
        </div><!--//container-->
    </section>
    </div><!--//main-wrapper-->

<?php get_footer(); ?>
