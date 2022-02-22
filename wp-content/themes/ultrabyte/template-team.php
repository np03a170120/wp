<?php 
/* Template Name:Team*/
get_header(); 

if(have_posts()) { while(have_posts()){ the_post();

    ?>  
    <section class="inner-nav">
<?php get_template_part('navigation'); ?>
    </section>
    <section class="team-top-section page-lite-in">
        <div class="container">
            <div class="row">
                <?php 
                $args = array(
                    'post_type'       => array('team'),
                    'post_status'     =>'publish',
                    'orderby'       =>'rand',
                    'posts_per_page'  => 1,
                    'tax_query'           => array(
                      array(
                        'taxonomy'      => 'team_cat',
                        'field'     => 'term_id',
                        'terms'         => 6,
                        'operator'      => 'IN'
                    )
                  )
                );
                $queryProd = new WP_Query($args);
                if($queryProd->have_posts()){ $count= 0;
                    while($queryProd->have_posts()){
                      $queryProd->the_post();
                      global $product;
                      ?>
                      <div class="col-lg-12">
                        <div class="team-special-circle">
                            <div class="team-image-lg">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div>
                        </div>
                        <div class="floated-txt float-txt-top">
                            <h3>
                                <span>Elite</span> <span> Member</span>
                            </h3>
                        </div>
                        <div class="floated-txt float-txt-aside">
                            <h4>
                                <span>Strive</span> <span>to be</span><span>better</span>
                            </h4>
                        </div>
                        <div class="floated-txt txt-aside-lt">
                            <h4>
                                <span>Work</span> <span>Amazing</span>
                            </h4>
                        </div>
                        <div class="floated-txt float-txt-bottom text-right">
                            <h3>
                                <span><?php the_title(); ?></span>
                            </h3>
                        </div>
                        <div class="splash-image-top">
                            <img src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/images/team/splash-svg-watercolor.png" alt="">
                        </div>
                    </div>
                <?php }}wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <section class="page-lite-in member-area">
        <div class="container">
            <div class="row">
                <?php 
                $args = array(
                    'post_type'       => array('team'),
                    'post_status'     =>'publish',
                    'orderby'       =>'rand',
                    'posts_per_page'  => 1,
                    'tax_query'           => array(
                      array(
                        'taxonomy'      => 'team_cat',
                        'field'     => 'term_id',
                        'terms'         => 9,
                        'operator'      => 'IN'
                    )
                  )
                );
                $queryProd = new WP_Query($args);
                if($queryProd->have_posts()){ $count= 0;
                    while($queryProd->have_posts()){
                      $queryProd->the_post();
                      global $product;
                      ?>
                      <div class="col-lg-12">
                        <div class="member-single">
                            <div class="member-image-wrapper member-bod">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="member-desc member-desc-colored">
                                <h5>
                                  <?php the_field('teampost'); ?>
                              </h5>
                              <h4>
                               <?php the_title(); ?>
                           </h4>
                           <?php the_content(); ?>
                       </div>
                   </div>
               </div>
           <?php }}wp_reset_postdata(); ?>
       </div>
       <div class="row">
        <?php 
        $args = array(
            'post_type'       => array('team'),
            'post_status'     =>'publish',
            'orderby' => 'menu_order',
     'order' =>'ASC',
            'tax_query'           => array(
              array(
                'taxonomy'      => 'team_cat',
                'field'     => 'term_id',
                'terms'         => 7,
                'operator'      => 'IN'
            )
          )
        );
        $queryProd = new WP_Query($args);
        if($queryProd->have_posts()){ $count= 0;
            while($queryProd->have_posts()){
              $queryProd->the_post();
              global $product;
              ?>
              <div class="col-lg-6 pr-lg-0">
                <div class="member-single">
                    <div class="member-image-wrapper">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="member-front">
                    </div>
                    <div class="member-desc">
                        <h5>
                          <?php the_field('teampost'); ?>
                      </h5>
                      <h4>
                        <?php the_title(); ?>
                    </h4>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php }}wp_reset_postdata(); ?>
    <?php 
    $args = array(
        'post_type'       => array('team'),
        'post_status'     =>'publish',
'orderby' => 'menu_order',
     'order' =>'ASC',
     'posts_per_page'  => 2,
        'tax_query'           => array(
          array(
            'taxonomy'      => 'team_cat',
            'field'     => 'term_id',
            'terms'         => 12,
            'operator'      => 'IN'
        )
      )
    );
    $counter = 0;
    $queryProd = new WP_Query($args);
    if($queryProd->have_posts()){ $count= 0;
        while($queryProd->have_posts()){
          $queryProd->the_post();
          global $product;
          ?>
          <div class="col-lg-6 pr-lg-0">
            <div class="member-single">
                <div class="member-desc">
                 <h5>
                  <?php the_field('teampost'); ?>
              </h5>
              <h4>
                <?php the_title(); ?>
            </h4>
            <?php the_content(); ?>
        </div>
        <div class="member-image-wrapper">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="member-front">
            <?php
            $images = get_field('hover_image_');
            if(!empty($images)){ ?>
                <img src="<?php echo $images['url']; ?>" alt="" class="member-back">
            <?php } ?>
        </div>
    </div>
</div>
<?php }}wp_reset_postdata(); ?>
<?php 
$args = array(
    'post_type'       => array('team'),
    'post_status'     =>'publish',
    'offset' => '2',
    'posts_per_page'  => 2,
    'orderby' => 'menu_order',
     'order' =>'ASC',
    'tax_query'           => array(
      array(
        'taxonomy'      => 'team_cat',
        'field'     => 'term_id',
        'terms'         => 12,
        'operator'      => 'IN'
    )
  )
);
$queryProd = new WP_Query($args);
if($queryProd->have_posts()){ $count= 0;
    while($queryProd->have_posts()){
      $queryProd->the_post();
      global $product;
      ?>
      <div class="col-lg-6 pr-lg-0">
        <div class="member-single">
            <div class="member-image-wrapper">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="member-front">
                <?php
                $images = get_field('hover_image_');
                if(!empty($images)){ ?>
                    <img src="<?php echo $images['url']; ?>" alt="" class="member-back">
                <?php } ?>
            </div>
            <div class="member-desc">
                <h5>
                  <?php the_field('teampost'); ?>
              </h5>
              <h4>
                <?php the_title(); ?>
            </h4>
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php }}wp_reset_postdata(); ?>
<?php 
$args = array(
    'post_type'       => array('team'),
    'post_status'     =>'publish',
    'offset' => '4',
    'posts_per_page'  => 2,
    'orderby' => 'menu_order',
     'order' =>'ASC',
    'tax_query'           => array(
      array(
        'taxonomy'      => 'team_cat',
        'field'     => 'term_id',
        'terms'         => 12,
        'operator'      => 'IN'
    )
  )
);
$counter = 0;
$queryProd = new WP_Query($args);
if($queryProd->have_posts()){ $count= 0;
    while($queryProd->have_posts()){
      $queryProd->the_post();
      global $product;
      ?>
      <div class="col-lg-6 pr-lg-0">
        <div class="member-single">
            <div class="member-desc">
             <h5>
              <?php the_field('teampost'); ?>
          </h5>
          <h4>
            <?php the_title(); ?>
        </h4>
        <?php the_content(); ?>
    </div>
    <div class="member-image-wrapper">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="member-front">
        <?php
        $images = get_field('hover_image_');
        if(!empty($images)){ ?>
            <img src="<?php echo $images['url']; ?>" alt="" class="member-back">
        <?php } ?>
    </div>
</div>
</div>
<?php }}wp_reset_postdata(); ?>
<?php 
$args = array(
    'post_type'       => array('team'),
    'post_status'     =>'publish',
    'offset' => '6',
    'posts_per_page'  => 2,
    'orderby' => 'menu_order',
     'order' =>'ASC',
    'tax_query'           => array(
      array(
        'taxonomy'      => 'team_cat',
        'field'     => 'term_id',
        'terms'         => 12,
        'operator'      => 'IN'
    )
  )
);
$queryProd = new WP_Query($args);
if($queryProd->have_posts()){ $count= 0;
    while($queryProd->have_posts()){
      $queryProd->the_post();
      global $product;
      ?>
      <div class="col-lg-6 pr-lg-0">
        <div class="member-single">
            <div class="member-image-wrapper">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="member-front">
                <?php
                $images = get_field('hover_image_');
                if(!empty($images)){ ?>
                    <img src="<?php echo $images['url']; ?>" alt="" class="member-back">
                <?php } ?>
            </div>
            <div class="member-desc">
                <h5>
                  <?php the_field('teampost'); ?>
              </h5>
              <h4>
                <?php the_title(); ?>
            </h4>
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php }}wp_reset_postdata(); ?>
<?php 
$args = array(
    'post_type'       => array('team'),
    'post_status'     =>'publish',
    'offset' => '8',
    'posts_per_page'  => 2,
    'orderby' => 'menu_order',
     'order' =>'ASC',
    'tax_query'           => array(
      array(
        'taxonomy'      => 'team_cat',
        'field'     => 'term_id',
        'terms'         => 12,
        'operator'      => 'IN'
    )
  )
);
$counter = 0;
$queryProd = new WP_Query($args);
if($queryProd->have_posts()){ $count= 0;
    while($queryProd->have_posts()){
      $queryProd->the_post();
      global $product;
      ?>
      <div class="col-lg-6 pr-lg-0">
        <div class="member-single">
            <div class="member-desc">
             <h5>
              <?php the_field('teampost'); ?>
          </h5>
          <h4>
            <?php the_title(); ?>
        </h4>
        <?php the_content(); ?>
    </div>
    <div class="member-image-wrapper">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="member-front">
        <?php
        $images = get_field('hover_image_');
        if(!empty($images)){ ?>
            <img src="<?php echo $images['url']; ?>" alt="" class="member-back">
        <?php } ?>
    </div>
</div>
</div>
<?php }}wp_reset_postdata(); ?>
<?php 
$args = array(
    'post_type'       => array('team'),
    'post_status'     =>'publish',
    'offset' => '10',
    'posts_per_page'  => 2,
    'orderby' => 'menu_order',
     'order' =>'ASC',
    'tax_query'           => array(
      array(
        'taxonomy'      => 'team_cat',
        'field'     => 'term_id',
        'terms'         => 12,
        'operator'      => 'IN'
    )
  )
);
$queryProd = new WP_Query($args);
if($queryProd->have_posts()){ $count= 0;
    while($queryProd->have_posts()){
      $queryProd->the_post();
      global $product;
      ?>
      <div class="col-lg-6 pr-lg-0">
        <div class="member-single">
            <div class="member-image-wrapper">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="member-front">
                <?php
                $images = get_field('hover_image_');
                if(!empty($images)){ ?>
                    <img src="<?php echo $images['url']; ?>" alt="" class="member-back">
                <?php } ?>
            </div>
            <div class="member-desc">
                <h5>
                  <?php the_field('teampost'); ?>
              </h5>
              <h4>
                <?php the_title(); ?>
            </h4>
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php }}wp_reset_postdata(); ?>
<?php 
$args = array(
    'post_type'       => array('team'),
    'post_status'     =>'publish',
    'offset' => '12',
    'posts_per_page'  => 2,
    'orderby' => 'menu_order',
     'order' =>'ASC',
    'tax_query'           => array(
      array(
        'taxonomy'      => 'team_cat',
        'field'     => 'term_id',
        'terms'         => 12,
        'operator'      => 'IN'
    )
  )
);
$counter = 0;
$queryProd = new WP_Query($args);
if($queryProd->have_posts()){ $count= 0;
    while($queryProd->have_posts()){
      $queryProd->the_post();
      global $product;
      ?>
      <div class="col-lg-6 pr-lg-0">
        <div class="member-single">
            <div class="member-desc">
             <h5>
              <?php the_field('teampost'); ?>
          </h5>
          <h4>
            <?php the_title(); ?>
        </h4>
        <?php the_content(); ?>
    </div>
    <div class="member-image-wrapper">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="member-front">
        <?php
        $images = get_field('hover_image_');
        if(!empty($images)){ ?>
            <img src="<?php echo $images['url']; ?>" alt="" class="member-back">
        <?php } ?>
    </div>
</div>
</div>
<?php }}wp_reset_postdata(); ?>
<?php 
$args = array(
    'post_type'       => array('team'),
    'post_status'     =>'publish',
    'offset' => '14',
    'posts_per_page'  => 2,
    'orderby' => 'menu_order',
     'order' =>'ASC',
    'tax_query'           => array(
      array(
        'taxonomy'      => 'team_cat',
        'field'     => 'term_id',
        'terms'         => 12,
        'operator'      => 'IN'
    )
  )
);
$queryProd = new WP_Query($args);
if($queryProd->have_posts()){ $count= 0;
    while($queryProd->have_posts()){
      $queryProd->the_post();
      global $product;
      ?>
      <div class="col-lg-6 pr-lg-0">
        <div class="member-single">
            <div class="member-image-wrapper">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="member-front">
                <?php
                $images = get_field('hover_image_');
                if(!empty($images)){ ?>
                    <img src="<?php echo $images['url']; ?>" alt="" class="member-back">
                <?php } ?>
            </div>
            <div class="member-desc">
                <h5>
                  <?php the_field('teampost'); ?>
              </h5>
              <h4>
                <?php the_title(); ?>
            </h4>
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php }}wp_reset_postdata(); ?>
<?php 
$args = array(
    'post_type'       => array('team'),
    'post_status'     =>'publish',
    'offset' => '16',
    'posts_per_page'  => 2,
    'orderby' => 'menu_order',
     'order' =>'ASC',
    'tax_query'           => array(
      array(
        'taxonomy'      => 'team_cat',
        'field'     => 'term_id',
        'terms'         => 12,
        'operator'      => 'IN'
    )
  )
);
$counter = 0;
$queryProd = new WP_Query($args);
if($queryProd->have_posts()){ $count= 0;
    while($queryProd->have_posts()){
      $queryProd->the_post();
      global $product;
      ?>
      <div class="col-lg-6 pr-lg-0">
        <div class="member-single">
            <div class="member-desc">
             <h5>
              <?php the_field('teampost'); ?>
          </h5>
          <h4>
            <?php the_title(); ?>
        </h4>
        <?php the_content(); ?>
    </div>
    <div class="member-image-wrapper">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="member-front">
        <?php
        $images = get_field('hover_image_');
        if(!empty($images)){ ?>
            <img src="<?php echo $images['url']; ?>" alt="" class="member-back">
        <?php } ?>
    </div>
</div>
</div>
<?php }}wp_reset_postdata(); ?>
<?php 
$args = array(
    'post_type'       => array('team'),
    'post_status'     =>'publish',
    'offset' => '18',
    'posts_per_page'  => 2,
    'orderby' => 'menu_order',
     'order' =>'ASC',
    'tax_query'           => array(
      array(
        'taxonomy'      => 'team_cat',
        'field'     => 'term_id',
        'terms'         => 12,
        'operator'      => 'IN'
    )
  )
);
$queryProd = new WP_Query($args);
if($queryProd->have_posts()){ $count= 0;
    while($queryProd->have_posts()){
      $queryProd->the_post();
      global $product;
      ?>
      <div class="col-lg-6 pr-lg-0">
        <div class="member-single">
            <div class="member-image-wrapper">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="member-front">
                <?php
                $images = get_field('hover_image_');
                if(!empty($images)){ ?>
                    <img src="<?php echo $images['url']; ?>" alt="" class="member-back">
                <?php } ?>
            </div>
            <div class="member-desc">
                <h5>
                  <?php the_field('teampost'); ?>
              </h5>
              <h4>
                <?php the_title(); ?>
            </h4>
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php }}wp_reset_postdata(); ?>
<?php 
$args = array(
    'post_type'       => array('team'),
    'post_status'     =>'publish',
    'offset' => '20',
    'posts_per_page'  => 2,
    'orderby' => 'menu_order',
     'order' =>'ASC',
    'tax_query'           => array(
      array(
        'taxonomy'      => 'team_cat',
        'field'     => 'term_id',
        'terms'         => 12,
        'operator'      => 'IN'
    )
  )
);
$counter = 0;
$queryProd = new WP_Query($args);
if($queryProd->have_posts()){ $count= 0;
    while($queryProd->have_posts()){
      $queryProd->the_post();
      global $product;
      ?>
      <div class="col-lg-6 pr-lg-0">
        <div class="member-single">
            <div class="member-desc">
             <h5>
              <?php the_field('teampost'); ?>
          </h5>
          <h4>
            <?php the_title(); ?>
        </h4>
        <?php the_content(); ?>
    </div>
    <div class="member-image-wrapper">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="member-front">
        <?php
        $images = get_field('hover_image_');
        if(!empty($images)){ ?>
            <img src="<?php echo $images['url']; ?>" alt="" class="member-back">
        <?php } ?>
    </div>
</div>
</div>
<?php }}wp_reset_postdata(); ?>
</div>
</div>
</section>
<?php }}get_footer(); ?>