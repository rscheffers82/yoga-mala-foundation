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
				<script src="https://donorbox.org/widget.js" type="text/javascript"></script><iframe src="https://donorbox.org/embed/yoga-mala-foundation" height="685px" width="100%" style="max-width:500px; min-width:310px; max-height:none!important" seamless="seamless" id="dbox-form-embed" name="donorbox" frameborder="0" scrolling="no"></iframe>
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
