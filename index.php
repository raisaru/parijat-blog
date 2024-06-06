<?php get_header(); ?>

<div class="main-wrapper">
    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center">
            <h2 class="heading">This Blog Template Made For Developers</h2>
            <div class="intro">Welcome to ParijatInfoTech. Subscribe and get the latest blog post in your inbox.</div>
            <form class="signup-form form-inline justify-content-center pt-3">
                <div class="form-group">
                    <label class="sr-only" for="semail">Your email</label>
                    <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail"
                        placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>
        </div>
    </section>

    <section class="blog-list px-3 py-5 p-md-5">
        <div class="container">
            <?php $args = array(
                'post_type' => 'blog', // Custom post type 'blog'
                'posts_per_page' => 6,
                'post_status' => 'publish',
            );
            $the_query = new WP_Query($args);?>
            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="item mb-5">
                <div class="media">
                    <img class="mr-3 img-fluid post-thumb d-none d-md-flex"
                        src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    <div class="media-body">
                        <h3 class="title mb-1"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                        </h3>
                        <div class="meta mb-1">
                        <span class="date">Published <?php echo get_the_date('F n, Y'); ?></span>
                                    <span class="time"><?php echo get_field('reading_time'); ?> min read</span>
                                </span><span class="comment"><a href="#"><?php comments_number('0 comments', '1 comment', '% comments'); ?></a></span></div> 

                        <div class="intro"><?php echo get_the_excerpt(); ?></div>
                        <a class="more-link" href="<?php echo get_the_permalink(); ?>">Read more →</a>
                    </div>

                    <!--//media-body-->
                </div>
                <!--//media-->
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
            <nav class="blog-nav nav nav-justified my-5">
                <a class="nav-link-next nav-item nav-link rounded" href="<?php echo home_url(); ?>/blog">Blog Lists<svg
                        class="svg-inline--fa fa-long-arrow-alt-right fa-w-14 arrow-next" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z">
                        </path>
                    </svg><!-- <i class="arrow-next fas fa-long-arrow-alt-right"></i> --></a>
            </nav>
        </div>
    </section>
</div>

<?php get_footer(); ?>