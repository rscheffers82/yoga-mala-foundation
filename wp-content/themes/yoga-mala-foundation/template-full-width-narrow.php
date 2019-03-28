<?php
/*
Template Name: Full Width Narrow (No Sidebar)
*/
?>

<?php get_header(); ?>

</div> <!-- .hero -->

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-10 large-offset-1 medium-10 medium-offset-1 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

				<?php endwhile; endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
