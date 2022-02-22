<?php 
/* Template Name: Project*/
get_header(); 

if(have_posts()) { while(have_posts()){ the_post();

	?>    
  <section class="inner-nav">
<?php get_template_part('navigation'); ?>
	</section>
	<section class="page-colored-in">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="inner-header-lg">
						<h4>
							PORTFOLIO
						</h4>
					</div>
					<div class="tabs-link-wrapper">
						<h4>
							Show:
						</h4>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<?php
                        $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                        // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
                        $menuID = $menuLocations['category-menu']; // Get the *primary* menu ID
                        $primaryNav = wp_get_nav_menu_items($menuID);
                        ?>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        	<?php
                        	$i = 0;
                        	if (is_array($primaryNav) || is_object($primaryNav)) {
                        		foreach ($primaryNav as $navItem) {
                        			?>
                        			<li class="nav-item">
                        				<a class="nav-link <?php echo ($i == 0) ? 'active' : ''; ?>" id="t<?php echo $i; ?>-tab" data-toggle="tab" href="#t<?php echo  $i; ?>" role="tab"
                        					aria-controls="t<?php echo $count; ?>" aria-selected="true">
                        					<?php echo $navItem->title; ?>
                        				</a>
                        			</li>
                        			<?php
                        			$i++;
                        		}
                        	}
                        	?>
                        </ul>
                  </div>
            </div>
      </div>
      <div class="row">
           <div class="col-lg-12">
                <div class="tab-content-wrapper">
                     <div class="tab-content" id="myTabContent">
                          <?php
                          $i = 0;
                          $j = 0;
                          if (is_array($primaryNav) || is_object($primaryNav)){
                               foreach ($primaryNav

                                    as $navItem) {
                                    $args = array(
                                         'posts_per_page' => -1,
                                         'post_type' => 'project',
                                         'tax_query' => array(
                                              array(
                                                   'taxonomy' => 'package_category',
                                                   'field' => 'term_id',
                                                   'terms' => $navItem->object_id,
                                             )
                                        )
                                   );
                                   ?>
                                   <div class="tab-pane fade <?php if($i == 0){ ?> show active <?php } ?>" id="t<?php echo $i; ?>" role="tabpanel" aria-labelledby="t<?php echo $i; ?>-tab">
                                         <div class="row">
                                              <?php
                                              $discover = new WP_Query($args);
                                              if ($discover->have_posts()) : while ($discover->have_posts()) : $discover->the_post();
                                                   ?>
                                                   <div class="col-lg-6 mb-4">
                                                        <div class="project-box">
                                                             <a href="<?php the_permalink(); ?>" target="_blank">
                                                                  <?php
                                                                  $images = get_field('frontimg');
                                                                  if(!empty($images)){ ?>
                                                                       <img src="<?php echo $images['url']; ?>" alt="">
                                                                       <?php } ?></a>
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
                                                    </div>
                                                    <?php
                                              endwhile;
                                        endif;
                                        wp_reset_postdata();
                                        wp_reset_query();
                                        ?> 
                                  </div>
                                  <?php          
                                  $i++;
                                  echo '</div>';
                            }
                      } 
                      ?>
                </div>
          </div>
    </div>
</div>
</div>
</section>
<?php }}get_footer(); ?>