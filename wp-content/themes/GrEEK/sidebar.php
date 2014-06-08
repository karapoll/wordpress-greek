<div class="grid-3">
	<?php if( is_single() ){ ?>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) :  endif; ?> 
    <?php }else{ ?>
    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) :  endif; ?>
    <?php } ?>
<div class="clear"></div>
</div>