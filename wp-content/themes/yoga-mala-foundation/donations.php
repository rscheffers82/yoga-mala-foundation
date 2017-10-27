<?php
/*
Template Name: Donation page
*/
?>

<?php get_header(); ?>

<style>
.donation-header {
	position: absolute;
	left: 2vw;
	right: 2vw;
}

.left,
.right {
	display: inline-block;
	width: 45%;
}

.left {
	padding: 2vw;
	text-align: right;
}

.right {
	text-align: center;
	position: absolute;
	top: 8.5rem;
}

.right img {
	width: 65%;
}

</style>

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

<?php get_footer(); ?>
