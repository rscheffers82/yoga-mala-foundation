<?php
/*
Template Name: Donation page
*/
?>

<?php get_header(); ?>

		<div class="donation-header">
			<div class="left">
				<h1><?php the_field('header_headline'); ?></h1>
				<p><?php the_field('header_subline'); ?></p>
			</div>
			<div class="right">
				<!-- Replace the image with Donorbox code -->
				<img src="http://ymf.wpengine.com/wp-content/uploads/2017/10/donorbox.jpg">
			</div>

		</div>
	</div> <!-- .hero -->

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-8 medium-8 columns" role="main">


			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->


<?php get_footer(); ?>
