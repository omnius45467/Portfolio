<?php get_header(); ?>

<div class="row">
	<div class="medium-9 columns">
		<main role="main">
			<!-- section -->
			<section>

				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
			<!-- /section -->
		</main>
	</div>
	<div class="medium-3 columns">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
