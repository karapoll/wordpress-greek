<?php if( vp_option('enableslider') == '1'){ ?>

    <!-- Start Featured Carousel -->
    <div class="container">
        <div class="list_carousel">
        <ul id="featured-posts">
        
        
        <?php
		$category = vp_option( 'slider_cat');
		$args = array( 'numberposts' => 6, 'order'=> 'DESC', 'category' => $category );
		$postslist = get_posts( $args );
		foreach ($postslist as $post) :  setup_postdata($post);
									
		$x++;
		?>
        <li class="<?php echo (($x%3==0)?'last ':'first '); ?>carousel-item">
            <div class="post-margin">
                <h6><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h6>
                <span><i class="fa fa-clock-o"></i> <?php the_time('F d, Y') ?></span>
            </div>
            
            <?php if( has_post_thumbnail() ){ ?>
            <div class="featured-image">
            <?php the_post_thumbnail('post-carousel'); ?>
                <div class="post-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <?php if( vp_metabox('post_format.format') == 'standard' ){
							echo '<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>';
						}elseif( vp_metabox('post_format.format') == 'video' ){
							echo '<i class="fa fa-play-circle-o fa-stack-1x fa-inverse"></i>';
						}else{
							echo '<i class="fa fa-picture-o fa-stack-1x fa-inverse"></i>';
						}?>
                    </span>
                </div>
            </div>
            <?php } ?>
            
            <div class="post-margin">
                <p><?php content('15'); ?></p>
            </div>
        </li>
        <?php wp_reset_query(); endforeach; ?>
        
        </ul>
        
        <div class="clear"></div>
            
            <div class="carousel-controls">
                <a id="prev2" class="prev" href="#"><i class="fa fa-angle-left"></i></a>
                <a id="next2" class="next" href="#"><i class="fa fa-angle-right"></i></a>
              <div class="clear"></div>
            </div>
      </div>
    </div>
    <!-- Start Featured Carousel -->
    
    <?php if( $x < 4 ){ ?>
    <div class="spacing-30"></div>
    <?php } ?>
	
<?php } ?>