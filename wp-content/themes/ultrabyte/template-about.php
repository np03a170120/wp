<?php 
/* Template Name: About Us*/
get_header(); 

if(have_posts()) { while(have_posts()){ the_post();

    ?>  
<section class="inner-nav">
<?php get_template_part('navigation'); ?>
</section>
<section class="smart-work-sec wow fadeInDown" data-wow-delay="0.5s">
    <img src="images/green-line-img.png" class="green-line-img" alt="">

    <div class="container">
        <div class="row">
            <div class="col-md-12 pad-left">
                <h4><span>ABOUT <strong>ULTRABYTE</strong> </span></h4>

                <h2> Builds better <strong>Business.</strong></h2>
                    <?php the_content(); ?>
                
                <div id="a-specializing">
                	<div class="row">
                		<div class="col-xs-12 col-sm-3 si-col">
                			<div class="img-wrapper">
                				<img src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/images/developing-digital-strategies.png" alt="" />
                			</div>
                			<div class="captions">Developing <br /> Digital Strategies</div>
                		</div>
                        <div class="col-xs-12 col-sm-3 si-col">
                            <div class="img-wrapper">
                                <img src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/images/creating-striking-designs.png" alt="" />
                            </div>
                            <div class="captions">Creating <br /> Striking Designs</div>
                        </div>
                        <div class="col-xs-12 col-sm-3 si-col">
                            <div class="img-wrapper">
                                <img src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/images/innovative-web-development.png" alt="" />
                            </div>
                            <div class="captions">Innovative <br /> Web Development</div>
                        </div>
                        <div class="col-xs-12 col-sm-3 si-col">
                            <div class="img-wrapper">
                                <img src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/images/developing-best-user-experience.png" alt="" />
                            </div>
                            <div class="captions">Developing <br /> Best User Experience</div>
                        </div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="wwd" data-speed="4" data-type="background">
  <article>
  <div id="wrapper">
        <div class="container">
             <div class="row">
                  <div class="col-12">
  <div class="h1">What we do</div>
  <div class="linewhite"></div>
  <div class="wwd_textmatter03"><p class="h2">We create <span class="h2bold">BRAND.</span></p>
  <p class="wwd_textmatter04">We believe in fusion of your knowledge about your business and our expertise of IT industry to create a <br>
    new BRAND. We have a firm belief in processes and hence follow this to achieve our goal.</p></div>
    
    <div class="develop_box">
    <div class="titleimgbg"><p class="wwd_titletext">Development Process</p></div>
    <div class="titleimgbox">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top" height="20"></td>
    <td align="left" valign="top"></td>
    <td align="left" valign="top"></td>
  </tr>
  <tr>
    <td width="6%" align="left" valign="top">&nbsp;</td>
    <td width="88%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="185" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="top" class="colorbg">
            <div class="bluetext">Analysis</div>
            <div class="greentext">Action</div>
            <div class="yellowtext">QA</div>
            <div class="orangetext">Platform</div>
            <div class="lpt">Marketing</div>
            <div class="dptt">Analytics</div>
            </td>
          </tr>
         
        </table></td>
        <td width="16" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="top"><img src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/images/colorimg1.png" width="16" height="348"></td>
          </tr>
        </table></td>
        <td width="675" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="top" height="6"></td>
          </tr>
          <tr>
            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="169" align="left" valign="top" class="colorbg02">
                
                <div class="bluetextsmall">Objective</div>
            <div class="greentextsmall">Graphic Design</div>
            <div class="yellowtextsmall">User Experience</div>
            <div class="orangetextsmall">Code Repository</div>
            <div class="lptextsmall">Adwords Campaign</div>
            <div class="dptextsmall">Traffic Analysis</div>
                
                
                </td>
                
                
                <td width="169" align="left" valign="top" class="colorbg02">
                <div class="bluetextsmall">Targets</div>
            <div class="greentextsmall">Web 2.0 Standards</div>
            <div class="yellowtextsmall">W3 Standards</div>
            <div class="orangetextsmall">Staging Server</div>
            <div class="lptextsmall">SEO</div>
            <div class="dptextsmall">Future Strategy</div>
                </td>
                
                
                <td width="169" align="left" valign="top" class="colorbg02">
                <div class="bluetextsmall">Competitors</div>
            <div class="greentextsmall">Logical Development</div>
            <div class="yellowtextsmall">Functionality</div>
            <div class="orangetextsmall">Live Server Hosting</div>
            <div class="lptextsmall">Social Media Marketing</div>
            <div class="dptextsmall">User Feedback</div>
                </td>
                
                
                <td width="168" align="left" valign="top" class="colorbg03">
                <div class="bluetextsmall">Budget</div>
            <div class="greentextsmall">Database Management</div>
            <div class="yellowtextsmall">Load Testing</div>
            <div class="orangetextsmall">Training and User Manual</div>
            <div class="lptextsmall">Email Marketing</div>
            <div class="dptextsmall">ROI</div>
           
                </td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        </tr>
    </table></td>
    <td width="6%" align="left" valign="top">&nbsp;</td>
  </tr>
</table>
</div>
    </div>
    </div>
    </div>
    
    
    

</div><!--end of wrapper-->
  </article><!--end of article-->
</section>
<section class="page-colored-in">
    <div class="container">
        <!--<div class="row">-->
        <!--    <div class="col-lg-12">-->
        <!--        <header class="inner-header-llg"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
        <!--            <h3>-->
        <!--                Builds better business-->
        <!--            </h3>-->
        <!--        </header>-->
        <!--        <div class="normal-p">-->
        <!--            <?php the_content(); ?>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="row  mt-40">
            <div class="col-lg-6">
                <header class="inner-header-llg">
                    <h3>
                        Technology
                    </h3>
                </header>
                <div class="normal-p">
                    <?php the_field('techdescription' , 109); ?>
                </div>

            </div>
            <div class="col-lg-6">
					<div class="prog-bars">
						<div class="prog-dsn">
							<p>Website Development</p>
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100"
								aria-valuemin="0" aria-valuemax="100" style="width:100%">
							100%</div>
						</div>
					</div>
					<div class="prog-dsn">
						<p>SEO/SMO</p>
						<div class="progress">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80"
							aria-valuemin="0" aria-valuemax="80" style="width:80%">
						80%</div>
					</div>
				</div>
				<div class="prog-dsn">
					<p>System Development</p>
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85"
						aria-valuemin="0" aria-valuemax="100" style="width:85%">
					85%</div>
				</div>
			</div>
			<div class="prog-dsn">
				<p>Graphic Designing</p>
				<div class="progress">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
					aria-valuemin="0" aria-valuemax="100" style="width:90%">
				90%</div>
			</div>
		</div>

	</div>
</div>
        </div>
        <div class="row  mt-40">
            <div class="col-lg-12">
                <header class="inner-header-llg">
                    <h5>
                        Clients
                    </h5>
                    <h3>
                    <?php the_field('clienttitle' , 109); ?>
                    </h3>
                </header>
                <div class="normal-p">
                    <?php the_field('clientdescription' , 109); ?>
                </div>
                <div class="row">
                    <?php 
                   $images = get_field('clientsimg',109); 
                   if( $images ){ ?>
                    <?php foreach( $images as $image ){ ?>
                    <div class="col-lg-3">
                        <div class="company-logo-box">
                            <img src="<?php echo $image['url']; ?>" alt="">
                        </div>
                    </div>
                <?php }} ?>
                    
                </div>
            </div>
        </div>
        <div class="row  mt-40">
            <div class="col-lg-12">
                <header class="inner-header-llg">
                    <h5>
                        Connect With Us
                    </h5>
                    <h3>
                        Be Our Agent / Agency
                    </h3>
                </header>
                <div class="normal-p">
                    <p>
                       Ultrabyte always welcome innovators to work with us. In case , you needed any help or want to work with us and get assist ,we always welcome you.
                       We will help you in your every  phase of IT and Digital sector.
                    </p>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="folded_corner">
                            <h3>
                                Become Our Agent 
                            </h3>
                            <p>
                                Become our agent and grow as we grow. We will provide you with all the necessary
                                tools
                                to
                                provide professional services to the customers.
                            </p>
                            <div class="btn-wrapper text-center">
                                <button class="btn btn-dk" data-toggle="modal" data-target="#agentOne">
                                    Become our agent
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="folded_corner">
                            <h3>
                                Work as a Agency
                            </h3>
                            <p>
                                Ultrabyte gives equal opportunity to everyone to work with us.So, if you have any query about our product, Feel free to connect with us. 
                            </p>
                            <div class="btn-wrapper text-center">
                                <button class="btn btn-dk" data-toggle="modal" data-target="#agenttwo">
                                    Work as a Agency 
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- modal box -->
<div class="modal fade modal-clr" id="agentOne" tabindex="-1" role="dialog" aria-labelledby="agentModal" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Become Our Agent</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
             <?php echo do_shortcode('[contact-form-7 id="5" title="agent"]');?>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-clr" id="agenttwo" tabindex="-1" role="dialog" aria-labelledby="agentModal" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Become Our Agency</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
             <?php echo do_shortcode('[contact-form-7 id="67" title="Agency"]');?>

                </div>
            </div>
        </div>
    </div>
</div>


<?php }}get_footer(); ?>
