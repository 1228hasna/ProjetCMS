<?php
$activate = array(
        'avril-sidebar-primary' => array(
            'search-1',
            'recent-posts-1',
            'archives-1',
        ),
		'avril-footer-widget-area' => array(
			 'text-1',
            'categories-1',
            'archives-1',
			'search-1',
        )
    );
    /* the default titles will appear */
   update_option('widget_text', array(
        1 => array('title' => '',
        'text'=>'<div class="footer-logo"><img src="'.CLEVERFOX_PLUGIN_URL.'inc/evion/images/logo-2.png" alt=""></div>
                        <p>'.sprintf(/* translators: %s: Description */esc_html__( '%s.', 'clever-fox' ),CLEVERFOX_FOOTER_ABOUT).'</p>
		'),        
		2 => array('title' => 'Recent Posts'),
		3 => array('title' => 'Categories'), 
        ));
		 update_option('widget_categories', array(
			1 => array('title' => 'Categories'), 
			2 => array('title' => 'Categories')));

		update_option('widget_archives', array(
			1 => array('title' => 'Archives'), 
			2 => array('title' => 'Archives')));
			
		update_option('widget_search', array(
			1 => array('title' => 'Search'), 
			2 => array('title' => 'Search')));	
		
    update_option('sidebars_widgets',  $activate);
	$MediaId = get_option('avril_media_id');
	set_theme_mod( 'custom_logo', $MediaId[0] );
	set_theme_mod('nav_btn_lbl','Book Now');
	set_theme_mod('slider_opacity','0');
