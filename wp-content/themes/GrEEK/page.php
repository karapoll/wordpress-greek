<?php get_header(); ?>
    
    
    
    <!-- Start Main Container -->
    <div class="container">
    <?php while (have_posts()) : the_post(); ?>
    
    <div class="full-width page-conainer">
    <div class="post-margin">
    <h5 class="page-title"><?php the_title(); ?></h5>
    
    <!-- Start Entry -->
    <?php the_content(); ?>
    <!-- End Entry -->
    
    </div>
    </div>
    
    <div class="clear"></div>
    <?php endwhile; ?>
    </div>
	<!-- End Main Container -->
	
	
    
    
<?php get_footer(); ?>