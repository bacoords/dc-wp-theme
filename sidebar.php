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
    <p class="widget_bio__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores esse aspernatur sed sunt tempore architecto nobis sit laborum, libero cumque at ad, aliquam cum quasi sint cupiditate temporibus dolore quaerat.</p>
    
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
