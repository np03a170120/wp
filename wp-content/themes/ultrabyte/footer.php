
<section class="page-footer-lt">
    <div class="container">
   <!--      <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="subscribe-box">
                    <div class="label-bold">
                        Subscribe to our newsletter & stay connected
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="enter your email id here...">
                        <button class="btn button-subs">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-content">
                    <div class="footer-link text-center">
                        <ul>
                            <li>
                                <a href="<?php echo home_url('privacy-policy'); ?>">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('terms-conditions'); ?>">
                                    Terms & Conditions
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('contact-us'); ?>">
                                    Contact US
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="footer-content">
                    <div class="footer-social text-center">
                        <ul>
                            <li>
                                <a href=" <?php the_field('facebook_link',185); ?>" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href=" <?php the_field('twitter_link',185); ?>" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href=" <?php the_field('instagram_link',185); ?>" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            
                            <li>
                                <a href=" <?php the_field('linkedin_link',185); ?>" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
							 <li>
                                <a href=" <?php the_field('skype',185); ?>" >
                                    <i class="fab fa-skype"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="footer-contact">
                    <p>
                        <i class="fas fa-map-marker-alt"></i> <?php the_field('location',185); ?>

                    </p>
                    <ul>
                        <li>
                            <i class="far fa-envelope"></i>  <?php the_field('email',185); ?>
                        </li>
                        <li>
                            <i class="fas fa-mobile-alt"></i>   <?php the_field('landline_number',185); ?> ,                                      <?php the_field('phone_number',185); ?>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div id='fb-root'></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <div class='fb-customerchat'
    attribution="wordpress"
    page_id='1488605528060551'
  >
</div>
<script src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/js/bootstrap.min.js"></script>
<script src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/js/owl.carousel.min.js"></script>
<script src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/js/slick.js"></script>
<script src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/js/TweenMax.min.js"></script>
<script src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/js/split-text.js"></script>
<script src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/js/scroll-magic.js"></script>
<script src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/js/scroll-setup.js"></script>
<script src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/js/scroll-tween.js"></script>

<script src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/js/custom.js"></script>
        <?php wp_footer(); ?>


</body>
</html>