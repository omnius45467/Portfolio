<?php
/* Template Name: Home Page Template */
get_header(); ?>

    <div class="container">
        <div class="row">
        <div class="col-md-8">



            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

                </article>
                <!-- /article -->

            <?php endwhile; endif; ?>

        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
