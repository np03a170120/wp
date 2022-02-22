<section class="nav-menu-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="nav-logo">
                    <a href="<?php echo home_url(); ?>"> <img src="<?php echo home_url(); ?>/wp-content/themes/ultrabyte/images/ultrabyte-logo.png" alt=""></a>
                </div>
                <div class="nav-bar-box text-right">
                    <li class="log small"> <a href="http://ubmis.ultrabyteit.com/" target="_blank">Login</a></li>
                    <ul class="nav-menu-list">
                       <li><?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'menu_class' => 'nav-menu-list')); ?> </li>
<!--                         <li class="log">
                            <a href="https://www.ultrabytehosting.com/" target="_blank">Domain/ Hosting</a>
                        </li> -->
                        <li class="log">
                            <a href="https://ubmis.ultrabyteit.com/" target="_blank">Login</a>
                        </li>
                   </ul>
               </div>
               <div class="nav-sticky-btn">
                <button id="hamburger-menu" data-toggle="ham-navigation" class="hamburger-menu-button"><span
                    class="hamburger-menu-button-open"></button>
                    <nav id="ham-navigation" class="ham-menu">
                        <div class="menu-ham-menu">
                            <div class="ham-menu-content">
                                <ul>
                                    <li> 
                                      <?php wp_nav_menu( array( 'theme_location' => 'Sider_menu', 'menu_class' => '')); ?> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
</section>