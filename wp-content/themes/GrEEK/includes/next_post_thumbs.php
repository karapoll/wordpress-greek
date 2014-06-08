
<div id="post-nav"> 
 <?php while (have_posts()) : the_post(); ?>
 
    <?php $prevPost = get_previous_post(false);  
        if($prevPost) {  
            $args = array(  
                'posts_per_page' => 1,  
                'include' => $prevPost->ID  
            );  
            $prevPost = get_posts($args);  
            foreach ($prevPost as $post) {  
                setup_postdata($post);  
    ?>
        <div class="post-previous post-pagination"> 
        <a href="<?php the_permalink(); ?>" title="Previous Post">
			<?php the_post_thumbnail('post-widget', array('class' => 'post-prev-thumb') ); ?>
        </a>  
        <br><a href="<?php the_permalink(); ?>" title="Previous Post" class="post-pagination-link"><?php the_title(); ?></a>
        <div class="clear"></div>
        </div> 
        
         
    <?php wp_reset_postdata();  
            } //end foreach  
        } // end if  
          
        $nextPost = get_next_post(false);  
        if($nextPost) {  
            $args = array(  
                'posts_per_page' => 1,  
                'include' => $nextPost->ID  
            );  
            $nextPost = get_posts($args);  
            foreach ($nextPost as $post) {  
                setup_postdata($post);  
    ?>  
        <div class="post-next post-pagination">
        <a href="<?php the_permalink(); ?>" title="Next Post">
			<?php the_post_thumbnail('post-widget', array('class' => 'post-next-thumb') ); ?>
        </a>
        <br><a href="<?php the_permalink(); ?>" class="post-pagination-link" title="Next Post"><?php the_title(); ?></a>   
        <div class="clear"></div>
        </div>  
    <?php  
                wp_reset_postdata();  
            } //end foreach  
        } // end if  
    ?>

<?php endwhile; ?>
<div class="clear"></div>
</div>