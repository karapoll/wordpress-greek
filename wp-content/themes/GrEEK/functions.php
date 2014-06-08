<?php
ob_start();


/*-----------------------------------------------------------------------------------*/
/* Includes */
/*-----------------------------------------------------------------------------------*/
include_once('vafpress/bootstrap.php');
require_once('includes/widgets/widget-recent-post.php');


/*-----------------------------------------------------------------------------------*/
/*	Load Jquery Files
/*-----------------------------------------------------------------------------------*/
function theme_scripts() {
	
	// Load Standard Files
	wp_enqueue_script( 'jquery-file', get_template_directory_uri() . '/js/jquery-2.0.3.min.js', array() );
	wp_enqueue_script( 'carouselFred', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js', array() );
	wp_enqueue_script( 'hoverintent', get_template_directory_uri() . '/js/hoverIntent.js', array() );
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js', array() );
	wp_enqueue_script( 'orbit-slider', get_template_directory_uri() . '/js/orbit.min.js', array() );
	
	// Load Comment Script
	if( is_single() ){ wp_enqueue_script( 'comment-reply' ); }
			
	}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


/*-----------------------------------------------------------------------------------*/
/*	Load CSS Files
/*-----------------------------------------------------------------------------------*/
function theme_styles()  {  

		// Load CSS
		wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css', array());
		wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css', array());
		wp_enqueue_style( 'superfish', get_template_directory_uri() . '/css/superfish.css', array());
		wp_enqueue_style( 'fontawsome', get_template_directory_uri() . '/css/font-awsome/css/font-awesome.css', array());
		wp_enqueue_style( 'orbit-css', get_template_directory_uri() . '/css/orbit.css', array());
		wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array());
		
		// Color Scheme
		if( vp_option('color_scheme') == 'red' ){ 
		wp_enqueue_style( 'color-scheme', get_template_directory_uri() . '/css/color/red.css', array());
		}elseif( vp_option('color_scheme') == 'yellow' ){
		wp_enqueue_style( 'color-scheme', get_template_directory_uri() . '/css/color/yellow.css', array());
		}elseif( vp_option('color_scheme') == 'orange' ){
		wp_enqueue_style( 'color-scheme', get_template_directory_uri() . '/css/color/orange.css', array());
		}elseif( vp_option('color_scheme') == 'purple' ){
		wp_enqueue_style( 'color-scheme', get_template_directory_uri() . '/css/color/purple.css', array());
		}elseif( vp_option('color_scheme') == 'green' ){
		wp_enqueue_style( 'color-scheme', get_template_directory_uri() . '/css/color/green.css', array());
		}
		
		}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


/*-----------------------------------------------------------------------------------*/
/*	Featured Images and Image Sizes
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 960;
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

/* Posts Image Sizes */
add_image_size( 'post-standard', 610,350, true );
add_image_size( 'post-widget', 70,70, true );
add_image_size( 'post-carousel', 290,130, true );


/*-----------------------------------------------------------------------------------*/
/*	Register Navigation Menu
/*-----------------------------------------------------------------------------------*/

/* Main Nav Menu */
register_nav_menu( 'header_menu','Navigation Menu for Header' );


/*-----------------------------------------------------------------------------------*/
/*	Add Sidebars
/*-----------------------------------------------------------------------------------*/
/* Homepage */
if ( function_exists('register_sidebar') )
	register_sidebars(1,array(
		'name' => 'Main Widget',
		'before_widget' => '<div class="widget-container">',
		'after_widget'  => '<div class="clear"></div></div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	));
	
/* Single Page */
if ( function_exists('register_sidebar') )
	register_sidebars(1,array(
		'name' => 'Single Page Widget',
		'before_widget' => '<div class="widget-container">',
		'after_widget'  => '<div class="clear"></div></div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	));


/*-----------------------------------------------------------------------------------*/
/*	Function to Limit words and Filter Tags or elements
/*-----------------------------------------------------------------------------------*/
	function content($num) {
		$theContent = get_the_content();
			$output = preg_replace('/<a[^>]+./','', $theContent);
			$output = preg_replace( '/<a>.*<\/a>/', '', $output );
			$output = preg_replace('/<img[^>]+./','', $theContent);
			$output = preg_replace( '/<div>.*<\/div>/', '', $output );
			$output = preg_replace( '/<blockquote>.*<\/blockquote>/', '', $output );
			$output = preg_replace( '/<h1>.*<\/h1>/', '', $output );
			$output = preg_replace( '/<h2>.*<\/h2>/', '', $output );
			$output = preg_replace( '/<h3>.*<\/h3>/', '', $output );
			$output = preg_replace( '/<h4>.*<\/h4>/', '', $output );
			$output = preg_replace( '/<h5>.*<\/h5>/', '', $output );
			$output = preg_replace( '/<h6>.*<\/h6>/', '', $output );
			$output = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $output );
			$limit = $num+1;
			
		$content = explode(' ', $output, $limit);
		array_pop($content);
		
		$content = implode(" ",$content);
		echo $content;
	}


/*-----------------------------------------------------------------------------------*/
/*	Function for Pagination
/*-----------------------------------------------------------------------------------*/	
	function pagination($pages = '', $range = 2)
		{  
			$showitems = ($range * 2)+1;  
			
			global $paged;
			if(empty($paged)) $paged = 1;
			
			if($pages == '')
			{
				global $wp_query;
				$pages = $wp_query->max_num_pages;
				if(!$pages)
				{
					$pages = 1;
					}
				}   
			
			if(1 != $pages)
				{
			echo '<div class="spacing-20"></div><ul class="pagination">';
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
					 
		if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";
			
		for ($i=1; $i <= $pages; $i++)
			{
		if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
		echo ($paged == $i)? "<li class='current'><a href=''>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
			}
		}
			
		if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";  
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
		echo "</ul>\n";
			}
		}
		

/*-----------------------------------------------------------------------------------*/
/*	Comments list Function
/*-----------------------------------------------------------------------------------*/

// filter to replace class on reply link
add_filter('comment_reply_link', 'replace_reply_link_class');
function replace_reply_link_class($class){
    $class = str_replace("class='comment-reply-link", "class='button comment-reply", $class);
    return $class;
}

/* Fetch Comments */
function theme_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
?>
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
        
		<!-- Start Comment List -->
        <div id="div-comment-<?php comment_ID() ?>">
        
        <div class="avatar-container">
        <div class="avatar-mask"></div>
        <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, 70 ); ?>
        </div>
        
        <div class="comment-header">
        <?php printf(__('%s','textdomain_techblog'), get_comment_author_link()) ?> &bull; <?php printf( __('%1$s at %2$s', 'textdomain_techblog'), get_comment_date(),  get_comment_time()) ?> <?php edit_comment_link(__('(Edit)','textdomain_techblog'),'  ','' ); ?>
        </div>
        
        <!-- Comment Text -->
        <div class="comment-text">
        <?php if ($comment->comment_approved == '0') : ?>
		<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.','textdomain_techblog') ?></em>
        <br /><br />
        <?php endif; ?>
        
        <?php comment_text() ?>
        <div class="reply-link"><?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'], reply_text => 'Reply'))) ?></div>
        </div>
        <!-- End Comment Text -->
                            
         </div>
        <!-- End Comment List -->   

<?php }


ob_end_clean();
?>