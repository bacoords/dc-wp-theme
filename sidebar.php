<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package understrap
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="col-md-3 offset-md-1 widget-area" role="complementary">

  <aside id="bio" class="widget widget_bio">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/family.jpg" alt="Family">
    <h2 class="widget_bio__name">Hi, I'm Dayna!</h2>
    <p class="widget_bio__desc">We all desire to be understood. To simply share our hearts and be heard. This blog fulfills that need. Here I share my heart, the good and the bad, as I navigate through being a wife, a mother, sister, daughter, and friend.</p>
    
<!--    <h4 class="widget_bio__social-header text-xs-center">Connect with Me</h4>-->

  </aside>
  <aside id="bio" class="widget widget_social">
    <div class="widget_social">
      <ul class="widget_social__list">
        <li><a href="#"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest fa-fw" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </aside>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
</div><!-- #secondary -->
