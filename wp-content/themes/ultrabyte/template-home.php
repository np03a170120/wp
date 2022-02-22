<?php /* Template Name: Home*/
get_header(); 

?>
<?php get_template_part('navigation'); ?>
<div class="slideshow slider-wrapper">
	<div class="slider ">
		<?php 
		$args = array(
			'post_type' => 'slider',
			'orderby' => 'menu_order',
			'order' => 'ASC',
			'post_status' => 'publish'
		);
		$query = new WP_Query( $args);
		while ($query ->have_posts()) { $query-> the_post();
			?>
			<?php if ( get_field('for_normal_design') == true ) { ?>
				<div class="item">
					<div class="slide-box <?php echo get_the_excerpt(); ?>-slide-box">
						<div class="slider-container">
							<div class="container">
								<div class="row">
									<div class="col-lg-6">
										<div class="banner-caption-box">
											<h4>
												UltraByte
											</h4>
											<h2 class="text-bold">
												<?php the_title(); ?>
											</h2>
											<h3 class="text-bold">
												<?php the_content(); ?>
											</h3>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="scroll-frame scroll-frame-desktop animated jackInTheBox">
											<div class="scroll-frame-desktop-bar">
												<div class="ptn"></div>
												<div class="ptn ptn-sec"></div>
												<div class="ptn ptn-thr"></div>
											</div>
											<img src="<?php the_post_thumbnail_url(); ?>" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="progress-round">
						<div class="slider-progress">
							<div class="progress"></div>
						</div>
					</div>
				</div>
			<?php }wp_reset_postdata(); ?>
		<?php } ?>
		<?php 
		$args = array(
			'post_type' => 'slider',
			'orderby' => 'menu_order',
			'order' => 'ASC',
			'post_status' => 'publish'
		);
		$query = new WP_Query( $args);
		while ($query ->have_posts()) { $query-> the_post();
			?>
			<?php if ( get_field('for_resposive') == true ) { ?>

				<div class="item">
					<div class="slide-box <?php echo get_the_excerpt(); ?>-slide-box">
						<div class="slider-container">
							<div class="container">
								<div class="row">
									<div class="col-lg-6">
										<div class="banner-caption-box">
											<h4>
												UltraByte
											</h4>
											<h2 class="text-bold">
												<?php the_title(); ?>
											</h2>
											<h3 class="text-bold">
												<?php the_content(); ?>
											</h3>
										</div>
									</div>
									<div class="col-lg-6">
										<?php
										$images = get_field('image1');
										if(!empty($images)){ ?>
											<div class="scroll-frame-phone">
												<img src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/images/screen/phone.png" class="phone-case" alt="">
												<div class="scroll-frame scroll-frame-abs">
													<img src="<?php echo $images['url']; ?>" alt="">
												</div>
											</div>
										<?php } ?>
										<?php
										$images = get_field('image2');
										if(!empty($images)){ ?>
											<div class="scroll-frame-phone ">
												<img src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/images/screen/phone.png" class="phone-case" alt="">
												<div class="scroll-frame scroll-frame-abs delay-nm">
													<img class="delay-nm" src="<?php echo $images['url']; ?>" alt="">
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="progress-round">
						<div class="slider-progress">
							<div class="progress"></div>
						</div>
					</div>
				</div>
			<?php }wp_reset_postdata(); ?>
		<?php } ?>

		
	</div>
</div>
<section class="page-wrapper-lt">
	<div class="opaque-heading">
		<h3>
			01
		</h3>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<header class="section-header text-center ">
					<h3 class="fade-in">
						OUR SERVICES
					</h3>
				</header>
			</div>
		</div>
		<div class="row">
			<?php 
			$args = array(
				'post_type' => 'services',
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'posts_per_page' => '4',
				'post_status' => 'publish'
			);
			$counter = 0;
			$query = new WP_Query( $args);
			if( $query->have_posts() ) { while( $query->have_posts() ) { $query->the_post(); 
				if( $counter % 2 == 0 ) {
// echo $counter;
					
					?>
					<div class="col-lg-12">
						<div class="row mb-40px">
							<div class="col-lg-4">
								<div class="round-icon-box fade-in">
								    		<a href="<?php the_permalink(); ?>">
                                        		<img src="<?php the_post_thumbnail_url(); ?>">
                                     </a>
								
								</div>
							</div>
							<div class="col-lg-6">
								<div class="content-sum-box scale-in">
									<header class="content-header">
										<h4>
											<a href="<?php the_permalink(); ?>">
                                        	<?php the_title(); ?>
                                     </a>
										
										</h4>
									</header>
									<p class="content-par-fancy m-normal">
										<?php
										echo wp_trim_words( get_the_content(), 40, '...' );
										?>        
									</p>
									<a href="<?php the_permalink(); ?>" class="more-anchor more-par">
                                         Read More
                                     </a>
								</div>
							</div>
						</div>
					</div>
				<?php }else{ ?>
					<div class="col-lg-12">
						<div class="row mb-40px">
							<div class="col-lg-3">

							</div>
							<div class="col-lg-4 max">
								<div class="round-icon-box ">
										<a href="<?php the_permalink(); ?>">
                                        	<img src="<?php the_post_thumbnail_url(); ?>">
                                     </a>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="content-sum-box scale-in">
									<header class="content-header">
										<h4>
												<a href="<?php the_permalink(); ?>">
                                        	<?php the_title(); ?>
                                     </a>
										</h4>
									</header>
									<p class="content-par-fancy m-normal">
										<?php
										echo wp_trim_words( get_the_content(), 40, '...' );
										?>        
									</p>
									<a href="<?php the_permalink(); ?>" class="more-anchor more-par">
                                         Read More
                                     </a>
								</div>
							</div>
							<div class="col-lg-4 min">
								<div class="round-icon-box ">
									<a href="<?php the_permalink(); ?>">
                                        	<img src="<?php the_post_thumbnail_url(); ?>">
                                     </a>
								</div>
							</div>
						</div>
					</div>
				<?php  } $counter++; }}wp_reset_postdata(); ?>

			</div>
		</div>
	</section>
	<section class="page-w-ptn">
		<div class="opaque-heading">
			<h3>
				02
			</h3>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<header class="section-header text-center">
						<h3 class="fade-in">
							Our Process
						</h3>
					</header>
				</div>
			</div>
			<div class="row">
				<?php if (have_rows('proces',60)) { $count=1; while (have_rows('proces',60)) { the_row(); ?>    
					<div class="col-lg-3 text-center">
						<div class="rounded-box-item fade-up">
							<?php
							$images = get_sub_field('primage');
							if(!empty($images)){ ?>
								<div class="rounded-box-icon">
									<img src="<?php echo $images['url']; ?>" alt="">
									<div class="process-step-count">
										0<?php echo $count; ?>
									</div>
								</div>
							<?php } ?>
							<div class="rounded-caption">
								<h3>
									<?php the_sub_field('prtitle'); ?>
								</h3>
								<p class="content-par-fancy">
									<?php the_sub_field('prcaption'); ?>
								</p>
							</div>
						</div>
					</div>
					<?php $count++;}}wp_reset_postdata(); ?>
				</div>
			</div>
		</section>
		<section class="page-wrapper-dk">
			<div class="opaque-heading opaque-heading-rt">
				<h3>
					03
				</h3>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<header class="section-header text-center">
							<h3>
								Featured Projects
							</h3>
						</header>
					</div>
				</div>
				<div class="row ">
					<div class="col-lg-12">
						<div class="slick-project owl-carousel owl-theme owl-project">
							<?php 
							$args = array(
								'post_type' => 'project',
								'orderby' => 'menu_order',
								'order' => 'DSC',
								'posts_per_page' => '7',
								'post_status' => 'publish'
							);
							$query = new WP_Query( $args);
							if( $query->have_posts() ) { while( $query->have_posts() ) { $query->the_post(); 
								?>
								<div class="project-box">
									<a href="<?php the_permalink(); ?>" target="_blank"> 
										<?php
										$images = get_field('inerimg');
										if(!empty($images)){ ?>
											<img src="<?php echo $images['url']; ?>" alt="">
										<?php } ?>
									</a>
									<div class="project-caption">
										<h4>
											<?php the_title(); ?>
										</h4>
										<div class="project-tech-list">
											<?php the_field('role'); ?>
											<p><?php the_field('type'); ?></p>
										</div>
										<div class="project-btn-wrapper">
											<a href="<?php the_permalink(); ?>" class="btn btn-global" target="_blank">
												View Project
											</a>
										</div>
									</div>
								</div>
							<?php }}wp_reset_postdata(); ?>
						</div>
						<div class="slider-counter"></div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="page-wrapper-lt">
			<div class="opaque-heading">
				<h3>
					04
				</h3>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<header class="section-header text-center">
							<h3>
								Client Testimonials
							</h3>
						</header>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="testimonial-body">
							<div class="owl-carousel owl-theme owl-testimonial">
								<?php if (have_rows('testamoial',60)) { $count=1; while (have_rows('testamoial',60)) { the_row(); ?>  
									<div class="testimonial-content">
										<div class="tetimonial-cont-mvl">
											<blockquote class="blockquote"><?php the_sub_field('captopm'); ?>
										</blockquote>
										<div class="client-desig-po">
											<h3>
												<?php the_sub_field('full_names'); ?>
											</h3>
											<h4>
												<?php the_sub_field('faaddress'); ?>
											</h4>
										</div>
										<?php
										$images = get_sub_field('frontimg');
										if(!empty($images)){ ?>
											<div class="testo-user-img">
												<img src="<?php echo $images['url']; ?>" alt="">
											</div>
										<?php } ?>
									</div>
								</div>
							<?php }}wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="dfx">
						<div class="scroll-frame-desktop image">

							<div class="content-video-wrapper">
							    								<img src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/images/vid.jpg">
								<a href="" class="btn-play-wrap modal-trigger" data-toggle="modal" data-target="#videoModal">
									<span><i class="fas fa-play"></i></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- video popup modal -->
	<section id="videoModalBody" class="custom-modal">
		<div class="modal-close-box"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="video-player-modal">
						<iframe src="https://www.youtube.com/embed/<?php the_field('video_link',60); ?>" frameborder="0"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>




		<section class="page-wrapper-dk sec-client">
			<div class="opaque-heading opaque-heading-rt">
				<h3>
					05
				</h3>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<header class="section-header text-center">
							<h3>
								Our Clients
							</h3>
						</header>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="owl-carousel owl-theme owl-client">
							<?php 
							$images = get_field('partnerss',60); 
							if( $images ){ ?>
								<?php foreach( $images as $image ){ ?>
									<div class="company-logo-box">
										<img src="<?php echo $image['url']; ?>" alt="">
									</div>
								<?php }} ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php get_footer(); ?>