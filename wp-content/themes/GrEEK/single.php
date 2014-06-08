<?php get_header(); ?>
    
    <?php get_template_part('includes/next_post_thumbs'); ?>
    
    <!-- Start Main Container -->
    <div class="container">
    
        <!-- Start Posts Container -->
        <div class="grid-2-3" id="post-container">
        	
            
            
            
            <?php 
			/* ================================================================== */
			/* Start of Loop */
			/* ================================================================== */
			while (have_posts()) : the_post();
			?>
        	<!-- Start Post Item -->
            <div class="post">
            	<div class="post-margin">
                
                <div class="post-avatar">
                    <div class="avatar-frame"></div>
                    <?php echo get_avatar( $post->post_author, 70 ); ?>
                </div>
                
                <h4><?php the_title(); ?></h4>
                	<ul class="post-status">
                    <li><i class="fa fa-clock-o"></i><?php the_time('F d, Y') ?></li>
                    <li><i class="fa fa-folder-open-o"></i><?php the_category(', '); ?></li>
                    <li><i class="fa fa-comment-o"></i><?php comments_number(); ?></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                
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
            
            <div class="post-margin">
            <?php the_content(); ?>

			<!-- Post Tags -->
            <?php
			$before = '
            <div class="post-tags">
            <span class="fa-stack fa-lg">
               <i class="fa fa-circle fa-stack-2x"></i>
               <i class="fa fa-tags fa-stack-1x fa-inverse"></i>
            </span>';
			
			$after = '</div>
            <div class="clear"></div>';
			
            the_tags( $before,', ',$after );
			?>
            <!-- End Post Tags -->
            
            </div>
            
            <!-- Post Social -->
            <ul class="post-social">
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>&t=<?php the_title(); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        
             <li><a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        
             <li><a href="https://plus.google.com/share?<?php echo get_permalink(); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            
            <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>" target="_blank">
            <i class="fa fa-linkedin"></i></a></li>
            </ul>
            <!-- End Post Social -->
            <div class="clear"></div>
            </div>
            <!-- End Post Item -->
            
            
            <?php
			/* ================================================================== */
			/* End of Loop */
			/* ================================================================== */
			endwhile;
			?>
            
            <?php get_template_part('includes/related-posts');  ?>
            
            <?php comments_template(); ?>
            
            
            
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