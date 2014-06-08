<?php get_header(); ?>

	<?php get_template_part('includes/featured'); ?>
    
    <!-- Start Main Container -->
    <div class="container">
    
        <!-- Start Posts Container -->
        <div class="grid-2-3" id="post-container">
 			
            <?php 
			/* ================================================================== */
			/* Start of Loop */
			/* ================================================================== */
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			?>     
        	<!-- Start Post Item -->
            <div class="post">
            	<div class="post-margin">
                
                <div class="post-avatar">
                    <div class="avatar-frame"></div>
                    <?php echo get_avatar( $post->post_author, 70 ); ?>
                </div>
                
                <h4 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                	<ul class="post-status">
                    <li><i class="fa fa-clock-o"></i><?php the_time('F d, Y') ?></li>
                    <li><i class="fa fa-folder-open-o"></i><?php the_category(', '); ?></li>
                    <li><i class="fa fa-comment-o"></i><?php comments_number(); ?></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
            		<?php if( has_post_thumbnail() ){ ?>
                    <div class="featured-image">
                    <?php if( vp_metabox('post_format.format') == 'standard' ){
						if( has_post_thumbnail() ){ the_post_thumbnail('post-standard'); }
						$posticon = 'pencil';
					}elseif( vp_metabox('post_format.format') == 'video' ){
						echo vp_metabox('video_embed.embed_code');
						$posticon = 'play-circle-o';
					}else{ ?>
						
						<!-- Start Post Gallery -->
						<div class="post-gallery">
						<?php
						$x=0;
						$group =  vp_metabox('gallery.image_group');
						foreach ($group as $value){
						?>
						<img src="<?php echo vp_metabox('gallery.image_group.'.$x.'.image'); ?>" />
						<?php $x = $x+1; ?>
                        <?php $posticon = 'picture-o'; ?>
						<?php } ?>
						</div>
						<!-- End Post Gallery -->
					<?php } ?>
                    
                    <div class="post-icon">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-<?php echo $posticon; ?> fa-stack-1x fa-inverse"></i>
                    </span>
                    </div>
                    </div>
                    <?php } ?>
            
            <div class="post-margin">
            <p><?php content('90'); ?></p>
            </div>
            
             <ul class="post-social">
             <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>&t=<?php the_title(); ?>" target="_blank">
             <i class="fa fa-facebook"></i></a>
             </li>
                        
             <li>
             <a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>" target="_blank">
             <i class="fa fa-twitter"></i></a>
             </li>
                        
             <li>
             <a href="https://plus.google.com/share?<?php echo get_permalink(); ?>" target="_blank">
             <i class="fa fa-google-plus"></i></a>
             </li>
            
            <li>
            <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>" target="_blank">
            <i class="fa fa-linkedin"></i></a>
            </li>
            
            <li>
            <a href="<?php echo get_permalink(); ?>" class="readmore">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
            </li>
            </ul>
            
            <div class="clear"></div>
            </div>
            <!-- End Post Item -->
            
            <?php
			/* ================================================================== */
			/* End of Loop */
			/* ================================================================== */
			endwhile;
			
			/* ================================================================== */
			/* Else if Nothing Found */
			/* ================================================================== */
			else :
			?>
            
            <div class="post">
            <div class="post-margin">
            <?php if ( is_search() ) { ?>
            <h3>Search Result for: <?php the_search_query(); ?> </h3>
            <p>Sorry the query you search does not match any of our database! And therefore did not display any result</p>
            <?php }else{ ?>
            <h3>No Post Found</h3>
            <p>Sorry Nothing to display, either the posts have been deleted or transfered.</p>
            <?php } ?>
            <div class="clear"></div>
            </div>
            </div>
            
            <?php
			/* ================================================================== */
			/* End If */
			/* ================================================================== */
			endif;
			?>
            
        <!-- Start Pagination -->
            <?php pagination(); ?>
        <!-- End Pagination -->
            
        <div class="clear"></div>
        </div>
        <!-- End Posts Container -->
		
        <!-- Start Sidebar -->
    	<?php get_sidebar(); ?>
        <!-- End Sidebar -->
    
    <div class="clear"></div>
    </div>
	<!-- End Main Container -->
	
	
    
    

<?php get_footer(); ?>