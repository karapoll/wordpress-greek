<?php if( has_nav_menu('header_menu') ){ ?>

	<?php wp_nav_menu( array(
		  	'theme_location' => 'header_menu',
			'container' => 'false',
			'items_wrap' => '<ul class="sf-menu">%3$s</ul>',
	)); ?>
	
<?php }else{ ?>

<p style="float:right; margin-top:15px; margin-right:15px; color:#FFFFFF">Please Setup your nav menu <a href="wp-admin/nav-menus.php" style="text-transform:uppercase;">Click here</a></p>

<?php } ?>