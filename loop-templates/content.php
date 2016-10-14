<?php
/**
 * @package understrap
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
  
  <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
  
  
	<header class="entry-header">
        



		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php the_time('F j, Y'); ?>
				<br>
				<?php the_tags(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>
        
  <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>    
        
        
	</header><!-- .entry-header -->


    
		<div class="entry-content">

	            <?php
	                the_excerpt();
	            ?>

			<?php
//				wp_link_pages( array(
//					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
//					'after'  => '</div>',
//				) );
			?>
	        
		</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php // understrap_entry_footer(); ?>
		
	</footer><!-- .entry-footer -->
    
</article><!-- #post-## -->
