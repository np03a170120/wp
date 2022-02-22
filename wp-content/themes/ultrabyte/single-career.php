<?php 
get_header(); 

if(have_posts()) { while(have_posts()){ the_post();

    ?>
    <section class="inner-nav">
<?php get_template_part('navigation'); ?>
    </section>
    <section class="page-xx">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header-light">
                        <h2>
                            <?php the_title(); ?> / Total vacancy :- <?php the_field('no_of_vacancy'); ?> 
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-colored-in career-in">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="typo-awsm">
                        <?php the_content(); ?>
                    </div>
                    <?php if(get_field('qualifications')){ ?> 
                    <div class="desig">
                        <div class="cnt-box-row">
                            <header class="header-qt st">
                                <h4>
                                    QUALIFICATIONS
                                </h4>
                            </header>
                            <div class="carer-list">
                                <?php the_field('qualifications'); ?>
                            </div>
                        </div>
                        </div>
                    <?php } ?>
                    <?php if(get_field('requirements')){ ?> 
                    <div class="desig">
                        <div class="cnt-box-row">
                            <header class="header-qt st">
                                <h4>
                                 Requirements
                             </h4>
                         </header>
                         <div class="carer-list">
                             <?php the_field('requirements'); ?>
                         </div>
                     </div>
                     </div>
                 <?php } ?>
                 
                 <div class="cnt-box-row">
                            <header class="header-qt">
                                <h4>
                                 Share this Job :-
                             </h4>
                         </header>
                         <div class="carer-list">
                              <?php echo do_shortcode('[do_widget id=a2a_share_save_widget-2]'); ?>
                         </div>
                     </div>
                     <div class="project-btn-wrapper viewsssss">
        <a href="" class="btn btn-global cat" data-toggle="modal" data-target="#agentOne">
            Apply Now
        </a>
    </div>
             </div>
         </div>
     </div>
 </section>
 <div class="modal fade modal-clr" id="agentOne" tabindex="-1" role="dialog" aria-labelledby="agentModal" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Recruitment Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
             <?php echo do_shortcode('[contact-form-7 id="223" title="Apply Now"]');?>

                </div>
            </div>
        </div>
    </div>
</div>
 <!-- modal box -->

<?php }}get_footer(); ?>
