<?php
/**
 *Template Name: Wahaya Homepage
 */

get_header(); ?>
			
	<div class="content">
	
		<div class="inner-content home-content grid-x  grid-padding-x">
		<div class="pattern-container"></div>
		    <main class="main" role="main">
				<div class="grid-y hero-y-container">
					<div class="cell small-2 medium-3 large-3"></div>
					<div class="cell small-5 medium-5 large-5">
						<div class="grid-x">
							<div class="hero-banner small-12 medium-10 large-6 cell large-offset-2 grid-margin-x">MANAGED IT SOLUTIONS</div>
						</div>
					</div>
					<div class="cell small-5 medium-3 large-3">
						<div class="grid-x">
							<div class="hero-subtext  small-12 large-6 medium-10 large-offset-2 grid-margin-x">Wahaya provides technology solutions and services to help small and mid-sized organizations sustain growth and reinforce routine processes. Backed by technology experts, We help organizations gain the full benefits of existing systems, make strategic investments in implementing replacement solutions and maintain infrastructure that is secure, dynamic, and reliable. We offers a full range of solutions including a full managed services agreement, or something mobile computing, Virtual CIO, IT strategy, virtualization, cloud computing, business continuity, network security and IP telephony.</div>
						</div>
					</div>
				</div>
			</main> <!-- end #main -->
		    <div class="services-container">
					<div id="services-box" class="grid-y medium-grid-frame large-grid-frame services-box">
						<div class="cell medium-2 large-2 small-2 mission-box">
							<div class="services-banner">Our mission is to provide a higher level of customer service than people are used to. In this fast moving world, many companies strive to compete by price and selection alone. In addition to price and selection, customer service, customer satisfaction, and customer commitment are our goals. Below you will find information on each of our services.</div>
						</div>
						<div class="flex-services">
							<div class="service-box">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/services-1.jpg"/>
								<div class="service-bg-box">
									<h2>Managed Services</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="service-box">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/services-2.jpg"/>
								<div class="service-bg-box">
									<h2>Disaster Mitigation</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="service-box">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/services-3.jpg"/>
								<div class="service-bg-box">
									<h2>Virtualization Services</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="service-box">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/services-4.jpg"/>
								<div class="service-bg-box">
									<h2>Security & Compliance</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="service-box">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/services-5.jpg"/>
								<div class="service-bg-box">
									<h2>Unified Communications</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="service-box">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/services-6.png"/>
								<div class="service-bg-box">
									<h2>Hardware & Software</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
					</div>
			</div>
		</div>
			<div class="blog-promoted">
				<div class="post-carousel">
					<?php
						$args = array( 'category_name' => 'Featured');
						$featuredposts = get_posts($args);
						foreach($featuredposts as $post) :
							setup_postdata($post);	
							$media = get_attached_media($post);?>
							<div class="outer-card">
								<div class="post-card">
									<div class="post-thumbnail">
										<?php getTheFirstImage(); ?>
									</div>
									<div class="post-content">
										<div class="featured-post-title"><a href="<? the_permalink() ?>"><?php the_title(); ?></a></div>
										<?php $myExcerpt = wp_trim_words( get_the_content(), 60, '...' ) ; 
										echo $myExcerpt ;  ?>
									</div>
									<div class="read-more-featured"><a href="<? the_permalink() ?>">Read More</a></div>
								</div>
							</div>
						<?php
						endforeach; 
						wp_reset_postdata();
						?>
				</div>
			</div>
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>