<!-- Start Widget -->
            <div class="widget-container">
            	<h6 class="widget-title">Recent Posts</h6>
                 
                <ul class="widget-recent-posts">
                <?php
				$args = array( 'numberposts' => 4, 'order'=> 'DESC');
				$postslist = get_posts( $args );
				foreach ($postslist as $post) :  setup_postdata($post);
				$x++;
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
                
                <?php wp_reset_query(); endforeach; ?>  
                </ul>
                    
            <div class="clear"></div>
            </div>
            <!-- End Widget -->