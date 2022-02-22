<?php 
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
                    <a href = "<?php the_field('website_link'); ?>">
                        <div class="inner-header-lg">
                            <h4> <?php the_title(); ?> </h4>
                        </div>
                    </a>
                    <div class="inner-par">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<section class="page-light-in">-->
    <!--    <div class="page-label-box-rt p-label">-->
    <!--        <h4>-->
    <!--            Details-->
    <!--        </h4>-->
    <!--    </div>-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12">-->
    <!--                <div class="project-requirement">-->
    <!--                    <p>-->
    <!--                        <span>Requirement</span>-->
    <!--                        <?php the_field('requirement'); ?>-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--                <div class="project-requirement">-->
    <!--                    <p>-->
    <!--                        <span>Outcome</span>-->
    <!--                        <?php the_field('outcome'); ?>-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <section class="project-photo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-screen-cap">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <?php
        $images = get_field('inerimg');
        if(!empty($images)){ ?>
            <div class="project-banner">
                <img src="<?php echo $images['url']; ?>" alt="">
            </div>
        <?php } ?>
    </section>
    <section class="page-colored-in project-responsive">
        <div class="page-label-box p-label">
            <h4>
                Responsive
            </h4>
        </div>
        <div class="container">
            <div class="row">
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
                <div class="col-lg-6 text-center">
                    <div class="scroll-frame-phone">
                        <img src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/images/screen/phone.png" class="phone-case" alt="">
                        <?php
                        $images = get_field('mobimg');
                        if(!empty($images)){ ?>
                            <div class="scroll-frame scroll-frame-abs">
                                <img src="<?php echo $images['url']; ?>" alt="">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project-technology">
        <div class="container">
            <div class="row">
              <?php if (have_rows('ssicon')) { $count=1; while (have_rows('ssicon')) { the_row(); ?>    
                <div class="col-lg-3">
                    <div class="single-techno-box">
                        <?php
                        $image = get_sub_field('toolimage');
                        if(!empty($image)){ ?>
                            <img src="<?php echo $image['url']; ?>" alt="">
                        <?php } ?>
                        <div class="techo-caption text-center">
                            <?php the_sub_field('toolname'); ?>
                        </div>
                    </div>
                </div>
            <?php }}wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<section class="project-t-cst">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="project-dtl-c-box">
                    <div class="project-c-cap">
                        Contribution
                    </div>
                    <ul>
                        <li>
                            <span>Year</span>
                            <?php the_field('year'); ?>
                        </li>
                        <li>
                            <span>Role</span>
                            <?php the_field('role'); ?>
                        </li>
                        <li>
                            <span> Type</span>
                            <?php the_field('type'); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="project-btn-wrapper views">
        <a href="<?php the_field('website_link', $post->ID); ?>" class="btn btn-global"  target="_blank">
            View Project
        </a>
    </div>
</section>

<?php }}get_footer(); ?>