<?php
/* Template Name: Default Page Template */
get_header(); ?>
<div class="row content">
    <div class="medium-9 columns">

        <h1><?php the_title(); ?></h1>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_content(); ?>

            </article>
            <!-- /article -->

        <?php endwhile; endif; ?>

    </div>
    <div class="medium-3 columns">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
