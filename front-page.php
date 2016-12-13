<?php
/**
 * Front Page
 *
 * @package understrap
 */

get_header(); ?>

  <?php
//    if ( is_front_page() && is_home() ) {
//
//        get_sidebar('hero'); 
//
//        get_sidebar('statichero');
//        
//    } else {
//    // Do nothing...or?
//    }
    ?>

    <div class="wrapper" id="wrapper-page-front">

      <div id="content" class="container-fluid">

        <div class="row">

          <div id="primary" class="col-md-12 content-area">

            <main id="main" class="site-main" role="main">

            <div class="fp-feat">
                    
              <div class="row">
                
                <div class="col-md-6 col-xl-4 offset-xl-1 flex-xs-middle">
                 <div class="p-a-2">
                  <h2>Welcome!</h2>
                  <p>We all desire to be understood. To simply share our hearts and be heard. This blog fulfills that need. Here I share my heart, the good and the bad, as I navigate through being a wife, a mother, sister, daughter, and friend.</p>
                  <a href="/" class="fp-feat__btn">More About Me</a>
                  </div>
                </div>
                <div class="col-md-6 offset-xl-1">
                  <img src="https://daynacoords.com/wp-content/uploads/2016/12/family.jpg" alt="Dayna Coords" class="img-fluid pull-xs-right">
                </div>
                
              </div>
                                        
              </div>
             
             
             <div class="row">
               <div class="col-md-12">
                 <div class="text-xs-center">
                   <br><br><br>
                   <h2>Recent Articles</h2>
                   
                 </div>
               </div>
             </div>
             <div class="container">
             
              <div class="row">



              <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>

                  <?php while ( have_posts() ) : the_post(); ?>

                    <div class="col-sm-12 col-md-4">
                      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background:url(<?php if(has_post_thumbnail()){ echo the_post_thumbnail_url( 'large' ); } else { echo get_stylesheet_directory_uri() . "/src/img/family-lg.jpg"; } ?>) no-repeat center; background-size:cover;">

                        <a href="<?php the_permalink(); ?>">

                          <header class="entry-header">

                            <?php the_title('<h2 class="entry-title">','</h2>'); ?>

                            <?php if ( 'post' == get_post_type() ) : ?>

                              <div class="entry-meta">
                                <?php the_time('F j, Y'); ?>
                              </div><!-- .entry-meta -->

                            <?php endif; ?>

                          </header><!-- .entry-header -->



                            <div class="entry-content">

                                      <?php
                                          // the_excerpt();
                                      ?>

                              <?php
                        //			 	wp_link_pages( array(
                        //					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                        //					'after'  => '</div>',
                        //				) );
                              ?>

                            </div><!-- .entry-content -->

                          <footer class="entry-footer">

                            <?php // understrap_entry_footer(); ?>

                          </footer><!-- .entry-footer -->

                        </a>

                      </article><!-- #post-## -->
                    </div>

                  <?php endwhile; ?>

                  <?php the_posts_navigation(); ?>

                <?php else : ?>

                <?php get_template_part( 'loop-templates/content', 'none' ); ?>

              <?php endif; ?>
              
              </div>
              </div>
            </main>
            <!-- #main -->

          </div>
          <!-- #primary -->

          <?php // get_sidebar(); ?>

        </div>
        <!-- .row -->

      </div>
      <!-- Container end -->

    </div>
    <!-- Wrapper end -->

    <?php get_footer(); ?>