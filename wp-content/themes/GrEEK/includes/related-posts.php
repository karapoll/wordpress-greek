<?php 
$category = get_the_category(); 
$category_id = $category[0]->term_taxonomy_id;
$args = array( 'numberposts' => 3, 'order'=> 'DESC', 'category' => $category_id, 'exclude' => $post->ID );
$postslist = get_posts( $args );
?>

<div class="post">
    <div class="post-margin">
    <?php foreach ($postslist as $post) :  setup_postdata($post); ?>
    
    <!-- Start Related Item -->
    <div class="related-posts">
    
    <div class="post-avatar">
    <div class="avatar-frame"></div>
    <?php the_post_thumbnail('post-widget'); ?>
    </div>
    
    <div class="related-posts-aligned">            
	<h6><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h6>
    <p><?php content('15'); ?></p>
    <div class="clear"></div>
    </div>
    
    <div class="clear"></div>
    </div>
    <!-- End Related Item -->
    
    <?php wp_reset_query(); endforeach; ?>
    <div class="clear"></div>
    </div>
</div>