<?php
// SIDEBARS AND WIDGETIZED AREAS
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'jointswp'),
		'description' => __('The first (primary) sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'jointswp'),
		'description' => __('The offcanvas sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

    register_sidebar( array(
    	'id' => 'salebike',
        'name' => __( 'Bike Gallery', 'theme-slug' ),
        'description' => __( 'Widgets in this area will be shown at the top of the sidebar on a Gallery Bike Post Page.', 'theme-slug' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
    ) );

    register_sidebar( array(
    	'id' => 'footer1',
        'name' => __( 'Footer 1', 'theme-slug' ),
        'description' => __( 'Widgets in this area will be shown in the footer, on the left.', 'theme-slug' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle text-center">',
		'after_title' => '</h4>',
    ) );

    register_sidebar( array(
    	'id' => 'footer2',
        'name' => __( 'Footer 2', 'theme-slug' ),
        'description' => __( 'Widgets in this area will be shown in the footer, left of center.', 'theme-slug' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle text-center">',
		'after_title' => '</h4>',
    ) );

    register_sidebar( array(
    	'id' => 'footer3',
        'name' => __( 'Footer 3', 'theme-slug' ),
        'description' => __( 'Widgets in this area will be shown in the footer, right of center.', 'theme-slug' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle text-center">',
		'after_title' => '</h4>',
    ) );
    
	register_sidebar(array(
		'id' => 'social',
		'name' => __('Social Media', 'jointswp'),
		'description' => __('Social Media sidebar on the Home page.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle text-center">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointswp'),
		'description' => __('The second (secondary) sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!