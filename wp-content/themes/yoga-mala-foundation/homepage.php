<?php
/*
Template Name: Homepage
*/
?>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css" integrity="sha256-xpOKVlYXzQ3P03j397+jWFZLMBXLES3IiryeClgU5og= sha384-gP4DhqyoT9b1vaikoHi9XQ8If7UNLO73JFOOlQV1RATrA7D0O7TjJZifac6NwPps sha512-AKwIib1E+xDeXe0tCgbc9uSvPwVYl6Awj7xl0FoaPFostZHOuDQ1abnDNCYtxL/HWEnVOMrFyf91TDgLPi9pNg==" crossorigin="anonymous"> -->

<?php get_header(); ?>

	<div class="heroCTA">
		<h1><?php the_field('hero_message'); ?></h1>
	</div>

	<div class="introVideo">
		<?php the_field('intro_video');?>
	</div>


	<div class="learn">
    <p><?php the_field('learn_more');?></p>
	</div>
</div> <!-- .hero -->

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-12 medium-12 columns" role="main">

					<div class="mission" data-scrollReveal="over .75s">

						<?php the_field('mission');?>

					</div>

					<hr>

					<div id="programsHeader" class="row">

						<!-- Text above the programs -->
						<div class="columns small-12">
							<h2><?php the_field('programs_title');?></h2>
							<p><?php the_field('programs_description');?></p>
							<br>
						</div>
					</div>

					<div class="programs row">
						<!-- First Col -->
						<div class="large-4 medium-12 columns" data-scrollreveal="enter right and move 10px over 0.75s and wait 1s">

							<ul class="accordion" data-accordion data-options="data-slide-speed: 400;" data-allow-all-closed="true" data-multi-expand="true">
								<li class="accordion-item is-active">
									<a class="accordion-title">
										<button class="open-modal video-still-button" data-video-id="<?php the_field('program_1_video_id'); ?>">
											<img class="video-image" src="<?php the_field('program_1_video_still'); ?>" alt="<?php the_field('program_1_title'); ?>">
										</button>
									</a>
									<div class="accordion-content" data-tab-content>
										<div class="image-title-wrapper">
											<img class="thumb" src="<?php the_field('program_1_image');?>" />
											<h3><?php the_field('program_1_title');?></h3>
										</div>
										<br>
										<?php the_field('program_1_text');?>
									</div>
								</li>
							</ul>

						</div><!-- end first col-->

						<!-- Second col-->
						<div class="large-4 medium-6 columns" data-scrollreveal="enter right and move 10px over 0.75s and wait 1s">
							<ul class="accordion" data-accordion data-options="data-slide-speed: 400;" data-allow-all-closed="true" data-multi-expand="true">
								<li class="accordion-item is-active">
									<a class="accordion-title">
										<button class="open-modal video-still-button" data-video-id="<?php the_field('program_2_video_id'); ?>">
											<img class="video-image" src="<?php the_field('program_2_video_still'); ?>" alt="<?php the_field('program_2_title'); ?>">
										</button>
									</a>
									<div class="accordion-content" data-tab-content>
										<div class="image-title-wrapper">
											<img class="thumb" src="<?php the_field('program_2_image');?>" />
											<h3><?php the_field('program_2_title');?></h3>
										</div>
										<br>
										<?php the_field('program_2_text');?>
									</div>
								</li>
							</ul>
						</div><!-- End Second col -->

						<!-- Third col-->
						<div class="large-4 medium-6 columns" data-scrollreveal="enter right and move 10px over 0.75s and wait 1s">
							<ul class="accordion" data-accordion data-options="data-slide-speed: 400;" data-allow-all-closed="true" data-multi-expand="true">
								<li class="accordion-item is-active">
									<a class="accordion-title">
										<button class="open-modal video-still-button" data-video-id="<?php the_field('program_3_video_id'); ?>">
											<img class="video-image" src="<?php the_field('program_3_video_still'); ?>" alt="<?php the_field('program_3_title'); ?>">
										</button>
									</a>
									<div class="accordion-content" data-tab-content>
										<div class="image-title-wrapper">
											<img class="thumb" src="<?php the_field('program_3_image');?>" />
											<h3><?php the_field('program_3_title');?></h3>
										</div>
										<br>
										<?php the_field('program_3_text');?>
									</div>
								</li>
							</ul>
						</div>
					</div><!-- end #Programs.row -->

					<!-- Programs without Video row -->
					<div class="programs no-video row">
						<div class="large-4 medium-6 columns" data-scrollreveal="enter right and move 10px over 0.75s and wait 1s">
							<ul class="accordion" data-accordion data-options="data-slide-speed: 400;" data-allow-all-closed="true" data-multi-expand="true">
								<li class="accordion-item" data-accordion-item>
									<a class="accordion-title">
										<img class="thumb" src="<?php the_field('program_4_image');?>" />
										<h3><?php the_field('program_4_title');?></h3>
									</a>
									<div class="accordion-content" data-tab-content>
										<p><?php the_field('program_4_text');?></p>
									</div>
								</li>

								<li class="accordion-item" data-accordion-item>
									<a class="accordion-title">
										<img class="thumb" src="<?php the_field('program_5_image');?>" />
										<h3><?php the_field('program_5_title');?></h3>
									</a>
									<div class="accordion-content" data-tab-content>
										<p><?php the_field('program_5_text');?></p>
									</div>
								</li>
							</ul>
						</div>

						<div class="large-4 medium-6 columns" data-scrollreveal="enter right and move 10px over 0.75s and wait 1s">
							<ul class="accordion" data-accordion data-options="data-slide-speed: 400;" data-allow-all-closed="true" data-multi-expand="true">
								<li class="accordion-item" data-accordion-item>
									<a class="accordion-title">
										<img class="thumb" src="<?php the_field('program_6_image');?>" />
										<h3><?php the_field('program_6_title');?></h3>
									</a>
									<div class="accordion-content" data-tab-content>
										<p><?php the_field('program_6_text');?></p>
									</div>
								</li>
								<li class="accordion-item" data-accordion-item>
									<a class="accordion-title">
										<img class="thumb" src="<?php the_field('program_7_image');?>" />
										<h3><?php the_field('program_7_title');?></h3>
									</a>
									<div class="accordion-content" data-tab-content>
										<p><?php the_field('program_7_text');?></p>
									</div>
								</li>
							</ul>
						</div>

						<div class="large-4 medium-6 columns" data-scrollreveal="enter right and move 10px over 0.75s and wait 1s">
							<ul class="accordion" data-accordion data-options="data-slide-speed: 400;" data-allow-all-closed="true" data-multi-expand="true">
								
							<li class="accordion-item" data-accordion-item>
									<a class="accordion-title">
										<img class="thumb" src="<?php the_field('program_8_image');?>" />
										<h3><?php the_field('program_8_title');?></h3>
									</a>
									<div class="accordion-content" data-tab-content>
										<p><?php the_field('program_8_text');?></p>
									</div>
								</li>

								<li class="accordion-item" data-accordion-item>
									<a class="accordion-title">
										<img class="thumb" src="<?php the_field('program_9_image');?>" />
										<h3><?php the_field('program_9_title');?></h3>
									</a>
									<div class="accordion-content" data-tab-content>
										<p><?php the_field('program_9_text');?></p>
									</div>
								</li>

								<li class="large-4 medium-12">
									<button class="button" data-open="pastprojects"> <?php the_field('past_projects_link');?> »</button>
								</li>
							</ul>
						</div>

						<!-- Past Project hidden in a reveal modal -->
						<div class="small reveal" id="pastprojects" data-reveal>
							<?php the_field('pastprojects');?>
						  <button class="close-button" data-close aria-label="Close modal" type="button">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					</div><!-- end Programs without Video row -->

					<hr>

					<div id="partners" class="row">

						<div class="large-5 medium-5 columns" data-scrollreveal="enter left and move 10px over 0.75s">
							<h2><?php the_field('partners_title');?></h2>
						</div>

						<div class="large-7 medium-7 columns" data-scrollreveal="enter right and move 10px over 0.75s and wait .5s">
							<img src="https://yogamalafoundation.ca/wp-content/themes/yoga-mala-foundation/assets/images/heretobe.png" alt="Here to be"/>
							<p><?php the_field('lulu_text');?></p>

							<img src="https://yogamalafoundation.ca/wp-content/themes/yoga-mala-foundation/assets/images/naadalogo.png" alt="Naada Yoga"/>
							<p><?php the_field('naada_text');?></p>

						</div>

					</div>

					<div id="sponsors" class="row">

						<div class="large-5 medium-5 columns" data-scrollreveal="enter left and move 10px over 0.75s">
							<h2><?php the_field('sponsors_title');?></h2>
						</div>

						<div class="large-7 medium-7 columns" data-scrollreveal="enter right and move 10px over 0.75s and wait 1s">
							<img src="https://yogamalafoundation.ca/wp-content/themes/yoga-mala-foundation/assets/images/lole.png" alt="Lole"/>
						</div>

					</div>

					<hr>

					<div id="contact" class="row">

						<h2 data-scrollreveal="enter left and move 10px over 0.75s"><?php the_field('get_involved_title');?></h2>

						<div class="large-7 large-offset-1 medium-7 columns" data-scrollreveal="enter left and move 10px over 0.75s and wait .75s">
							<p><?php the_field('get_involved');?></p>
						</div>

						<div class="large-4 medium-4 columns" data-scrollreveal="enter left and move 10px over 0.75s and wait 1.5s">
							<button class="button contact" type="button" data-toggle="contact-dropdown"><?php the_field('contact_button_text');?></button>
							<div class="dropdown-pane" id="contact-dropdown" data-dropdown data-auto-focus="true">
								 <?php
								 	$contactform = get_field('contact_form');
									echo do_shortcode($contactform);
									?>
								</div>
						</div>

					</div>

					<hr>

					<div id="donate" class="row" data-scrollReveal="over .75s">

						<div class="large-7 large-offset-1 medium-7 columns">
							<h2><?php the_field('donate_cta');?></h2>
						</div>

						<div class="large-4 medium-4 columns cta">
							<a class="button large" href="<?php echo get_page_link(14); ?>"><?php the_field('donate_button');?></a>
						</div>

					</div>


				</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

	<div class="reveal large" id="program-video-modal" data-reveal>
		<button class="close-button close-modal" aria-label="Close modal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="flex-video">
			<iframe id="program-video-iframe" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
		</div>
	</div>

	<div class="reveal" id="error-modal" data-reveal>
		<button class="close-button" aria-label="Close modal" data-close type="button">
			<span aria-hidden="true">&times;</span>
		</button>
		<p style="margin-top: 2rem; white-space: pre-wrap;"></p>
	</div>
</div>
<style>
	div.programs .accordion-item.is-active .accordion-content {
		cursor: default;
    margin: 0rem -1.5rem -1.5rem;
    padding: 1rem 1.5rem;
	}

	.video-still-button {
			position: relative;
			transition: opacity .3s ease;
		}

		.video-still-button:hover {
			cursor: pointer;
			opacity: 0.75;
		}

		.video-still-button:before {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			content: ' ';
		}

		.image-title-wrapper {
			display: flex;
			justify-content: space-between;
		}
</style>

<?php get_footer(); ?>
