<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>
<?php get_sidebar('footerfull'); ?>

  <div class="wrapper" id="wrapper-footer">

    <div class="container">
     
      <div class="row">
       
        <div class="col-md-12">
            
          <div class="text-xs-center">
            
             <a class="footer-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                               
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/svg/logo.svg" alt="<?php bloginfo( 'name' ); ?>" height="45px">

              </a>
            
          </div>
          
        </div>
        
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <div class="text-xs-center">
            
            <div class="footer-social">
              <ul class="footer-social__list">
                <li><a href="#"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest fa-fw" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="row">
        <div class="col-md-12">
          <div class="text-xs-center">
                                        <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'container_class' => 'footer-nav',
                                        'menu_class' => 'footer-nav-ul',
                                        'fallback_cb' => '',
                                        'menu_id' => 'footer-menu',
                                        'walker' => new wp_bootstrap_navwalker()
                                    )
                            ); ?>
          </div>
        </div>
      </div>
      
      
      
      
      <div class="row">

        <div class="col-md-12">

          <footer id="colophon" class="site-footer" role="contentinfo">

            <div class="site-info">
<!--
              <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'understrap' ) ); ?>">
                <?php printf( __( 'Proudly Powered by %s', 'understrap' ), 'WordPress' ); ?>
              </a>
              <span class="sep"> | </span> 
-->
              &copy; 2016 DaynaCoords.com
            </div>
            <!-- .site-info -->

          </footer>
          <!-- #colophon -->

        </div>
        <!--col end -->

      </div>
      <!-- row end -->

    </div>
    <!-- container end -->

  </div>
  <!-- wrapper end -->

  </div>
  <!-- #page -->

  <?php wp_footer(); ?>

    </body>

    </html>
