<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header(); ?>
<div class="wrapper" id="single-wrapper">

  <?php while ( have_posts() ) : the_post(); ?> 
   
 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>        
    <div id="content">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="col-md-12">
            <div class="featured-image" style="background:url(<?php echo the_post_thumbnail_url( 'full' ); ?>) no-repeat center; background-size:cover;">

              <header class="entry-header">

                <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

                <div class="entry-meta">

                  Published: <?php the_time('F j, Y'); ?>

                </div><!-- .entry-meta -->

              </header><!-- .entry-header -->  
                        
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row gutter-30">
        
            <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
                
                <main id="main" class="site-main" role="main">

                    <div class="entry-content">

                      <?php the_content(); ?>

                      <?php
                        wp_link_pages( array(
                          'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                          'after'  => '</div>',
                        ) );
                      ?>

                    </div><!-- .entry-content -->

                    <footer class="entry-footer">

                      <?php // understrap_entry_footer(); ?>

                    </footer><!-- .entry-footer -->



                  <?php // the_post_navigation(); ?>

                  <?php
                  // If comments are open or we have at least one comment, load up the comment template
                  if ( comments_open() || get_comments_number() ) :
                      comments_template();
                  endif;
                  ?>
                        
                    

                </main><!-- #main -->
                
            </div><!-- #primary -->
        
        <?php get_sidebar(); ?>

        </div><!-- .row -->
      </div><!-- Container end -->
    </div>

  </article><!-- #post-## -->    
  <?php endwhile; // end of the loop. ?> 
   
</div><!-- Wrapper end -->

<?php get_footer(); ?>
