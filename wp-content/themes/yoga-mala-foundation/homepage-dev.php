<?php
/*
Template Name: Homepage dev
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

					<hr>

					<div id="programs" class="row">

						<!-- 1st col -->
						<div class="large-4 medium-4 columns one">
							<h2><?php the_field('programs_title');?></h2>
							<p><?php the_field('programs_description');?></p>
						</div>

						<!-- 2nd col -->
						<div class="large-4 medium-4 columns two">

							<ul class="accordion" data-accordion data-options="data-slide-speed: 400;">

								 <li class="accordion-item is-active" data-accordion-item>
									<a href="#" class="accordion-title">
										<img class="thumb" src="<?php the_field('program_1_image');?>" />
										<h3><?php the_field('program_1_title');?></h3>
									</a>
									<div class="accordion-content" data-tab-content>
										<p><?php the_field('program_1_text');?></p>
									</div>
								</li>

								<li class="accordion-item" data-accordion-item>
									<a href="#" class="accordion-title">
										<img class="thumb" src="<?php the_field('program_2_image');?>" />
										<h3><?php the_field('program_2_title');?></h3>
									</a>
									<div class="accordion-content" data-tab-content>
										<p><?php the_field('program_2_text');?></p>
									</div>
								</li>

								<li class="accordion-item" data-accordion-item>
									<a href="#" class="accordion-title">
										<img class="thumb" src="<?php the_field('program_3_image');?>" />
										<h3><?php the_field('program_3_title');?></h3>
									</a>
									<div class="accordion-content" data-tab-content>
										<p><?php the_field('program_3_text');?></p>
									</div>
								</li>

							</ul>

						</div>

						<!-- 3rd col -->
						<div class="large-4 medium-4 columns three">

							<ul class="accordion" data-accordion data-options="data-slide-speed: 400;">

								 <li class="accordion-item" data-accordion-item>
									<a href="#" class="accordion-title">
										<img class="thumb" src="<?php the_field('program_4_image');?>" />
										<h3><?php the_field('program_4_title');?></h3>
									</a>
									<div class="accordion-content" data-tab-content>
										<p><?php the_field('program_4_text');?></p>
									</div>
								</li>

								<li class="accordion-item" data-accordion-item>
									<a href="#" class="accordion-title">
										<img class="thumb" src="<?php the_field('program_5_image');?>" />
										<h3><?php the_field('program_5_title');?></h3>
									</a>
									<div class="accordion-content" data-tab-content>
										<p><?php the_field('program_5_text');?></p>
									</div>
								</li>

								<li class="accordion-item" data-accordion-item>
									<a href="#" class="accordion-title">
										<img class="thumb" src="<?php the_field('program_6_image');?>" />
										<h3><?php the_field('program_6_title');?></h3>
									</a>
									<div class="accordion-content" data-tab-content>
										<p><?php the_field('program_6_text');?></p>
									</div>
								</li>

							</ul>

						</div>

					</div><!-- end #programs -->

					<hr>

					<div id="partners" class="row">

						<div class="large-5 medium-5 columns">
							<h2><?php the_field('partners_title');?></h2>
						</div>

						<div class="large-7 medium-7 columns">
							<img src="wp-content/themes/yoga-mala-foundation/assets/images/heretobe.png" alt="Here to be"/>
							<p><?php the_field('lulu_text');?></p>

							<img src="wp-content/themes/yoga-mala-foundation/assets/images/naadalogo.png" alt="Naada Yoga"/>
							<p><?php the_field('naada_text');?></p>

						</div>

					</div>

					<div id="sponsors" class="row">

						<div class="large-5 medium-5 columns">
							<h2><?php the_field('sponsors_title');?></h2>
						</div>

						<div class="large-7 medium-7 columns">
							<img src="wp-content/themes/yoga-mala-foundation/assets/images/lole.png" alt="Lole"/>
						</div>

					</div>

					<hr>

					<div id="contact" class="row">
						<h2>Get Involved</h2>

					</div>


				</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="https://ymf.wpengine.com/wp-content/themes/yoga-mala-foundation/js/settings-scrollReveal.js"></script>
<?php get_footer(); ?>
