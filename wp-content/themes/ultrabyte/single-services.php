<?php 
get_header(); 

if(have_posts()) { while(have_posts()){ the_post();

    ?>
    <section class="inner-nav">
<?php get_template_part('navigation'); ?>
    </section>
    <section class="page-colored-in">
        <div class="container">
            <div class="single-services-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-sng-wrap">
                        <header class="inner-header-llg">
                            <h3>
                               <?php the_title(); ?>
                           </h3>
                       </header>
                       <div class="service-omg">
                           <img src="<?php the_post_thumbnail_url(); ?>">
                       </div>
                       <div class="typo-awsm">
                           <?php the_content(); ?>
                       </div>
                       
                   </div>
               </div>
            <div class="col-lg-12">
                <?php
                $feathrue = get_field('feathures');
                if(!empty($feathrue)){ ?>
                    <header class="header-qt  mt-40">
                        <h4>
                            Features :
                        </h4>
                    </header>
                    <div class="carer-list">
                       <p>
                        <?php echo $feathrue; ?>
                    </p>
                </div>
            <?php } ?>
				           <div class="project-btn-wrapper viewsssss">
        <a href="" class="btn btn-global cat" data-toggle="modal" data-target="#agentOne">
            Inquiry
        </a>
    </div>
        </div>
    </div>
     </div>
</div>
</section>
 <div class="modal fade modal-clr" id="agentOne" tabindex="-1" role="dialog" aria-labelledby="agentModal" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Inquiry Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
            <?php echo do_shortcode('[contact-form-7 id="556" title="Inquiryy"]');?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }}get_footer(); ?>