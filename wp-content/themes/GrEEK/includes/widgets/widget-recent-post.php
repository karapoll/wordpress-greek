<?php ob_start(); ?>
<?php
class LatestPosts extends WP_Widget
{
  function LatestPosts()
  {
    $widget_ops = array('classname' => 'LatestPosts', 'description' => 'Displays Latest Blog Posts' );
    $this->WP_Widget('LatestPosts', 'Euclid: Latest Posts', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'display_number' => '', 'latest_post_title' => '' ) );
    $display_number = $instance['display_number'];
	$latest_post_title = $instance['latest_post_title'];
?>

  <p>
  <label for="<?php echo $this->get_field_id('latest_post_title'); ?>">Widget Title: 
  <input class="widefat" id="<?php echo $this->get_field_id('latest_post_title'); ?>" name="<?php echo $this->get_field_name('latest_post_title'); ?>" type="text" value="<?php echo esc_attr($latest_post_title); ?>" />
  </label>
  </p>

  <p><label for="<?php echo $this->get_field_id('display_number'); ?>">Number of posts: <input class="widefat" id="<?php echo $this->get_field_id('display_number'); ?>" name="<?php echo $this->get_field_name('display_number'); ?>" type="text" value="<?php echo esc_attr($display_number); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['display_number'] = $new_instance['display_number'];
	$instance['latest_post_title'] = $new_instance['latest_post_title'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $display_number = empty($instance['display_number']) ? ' ' : apply_filters('widget_title', $instance['display_number']);
	$latest_post_title = empty($instance['latest_post_title']) ? ' ' : apply_filters('widget_title', $instance['latest_post_title']);
 
    if (!empty($display_number))
      echo $before_title . $latest_post_title . $after_title;;
 
    // WIDGET CODE GOES HERE
    euclid_latest_post( $display_number );
	
	echo $after_widget;
	
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("LatestPosts");') );?>


<?php function euclid_latest_post( $numberofposts ){ ?>
	<!-- Start Widget -->
                <ul class="widget-recent-posts">
                <?php
				$args = array(
					'orderby'  => 'date',
					'order'    => 'DESC',
					'posts_per_page' => $numberofposts,
				);
												
				query_posts($args);
				while ( have_posts() ) : the_post(); 
				?>
                
                <li>
                <div class="post-image">
                <div class="post-mask"></div>
                <?php the_post_thumbnail('post-widget'); ?>
                </div>
                
                <h6><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h6>
                <span>November 02, 2013</span>
                <div class="clear"></div>
                </li> 
                
                <?php endwhile; wp_reset_query(); ?> 
                </ul>
   <!-- End Widget -->
<?php } ?>

<?php ob_end_clean(); ?>