<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="heroCTA">
		<h2><?php the_field('hero_title'); ?></h2>
		<p><?php the_field('hero_text'); ?></p>
		<a class="button" href="<?php the_field('hero_button_url'); ?>">
				<?php the_field('hero_button_description'); ?> <span class="arrow"></span>
		</a>
	</div>

</div> <!-- .hero -->

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-12 medium-12 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

				<?php endwhile; endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
