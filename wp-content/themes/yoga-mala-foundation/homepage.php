<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="heroCTA">
		<h1><?php the_field('hero_message'); ?></h1>
	</div>

	<div class="learn">
    <p><?php the_field('learn_more');?></p>
	</div>
</div> <!-- .hero -->

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-12 medium-12 columns" role="main">

					<div class="mission">

						<?php the_field('mission');?>

					</div>

					<div id="programs" class="row">

						<!-- 1st col -->
						<div class="large-4 medium-4 columns">
							<h2><?php the_field('programs_title');?></h2>
							<p><?php the_field('programs_description');?></p>
						</div>

						<!-- 2nd col -->
						<div class="large-4 medium-4 columns">

							<div class="program">
								<div class="pHeader">
									<?php the_field('program_1_image');?>
									<h3><?php the_field('progam_1_title');?></h3>
								</div>
								<p><?php the_field('program_1_text');?></p>
							</div>

							<div class="program">
								<div class="pHeader">
									<?php the_field('program_2_image');?>
									<h3><?php the_field('progam_2_title');?></h3>
								</div>
								<p><?php the_field('program_2_text');?></p>
							</div>

							<div class="program">
								<div class="pHeader">
									<?php the_field('program_3_image');?>
									<h3><?php the_field('progam_3_title');?></h3>
								</div>
								<p><?php the_field('program_3_text');?></p>
							</div>

						</div>

						<!-- 3rd col -->
						<div class="large-4 medium-4 columns">

							<div class="program">
								<div class="pHeader">
									<?php //the_field('program_4_image');?>
									<h3><?php //the_field('progam_4_title');?></h3>
								</div>
								<p><?php// the_field('program_4_text');?></p>
							</div>

							<div class="program">
								<div class="pHeader">
									<?php //the_field('program_5_image');?>
									<h3><?php //the_field('progam_5_title');?></h3>
								</div>
								<p><?php //the_field('program_5_text');?></p>
							</div>

							<div class="program">
								<div class="pHeader">
									<?php //the_field('program_6_image');?>
									<h3><?php //the_field('progam_6_title');?></h3>
								</div>
								<p><?php //the_field('program_6_text');?></p>
							</div>

						</div>

					</div><!-- end #programs -->




				</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
