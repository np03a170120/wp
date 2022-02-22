<?php
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );
add_image_size( 'package', 370, 220 );
add_image_size( 'services', 130, 130 );
add_image_size( 'size', 486, 400 );
add_image_size( 'servicess', 200, 200 );

register_post_type(
  'slider', array(
    'labels' => array(
      'name' => 'Slider',
      'singular_name' => 'Slider',
      'add_new' => 'Add new Slider',
      'add_new_item' => 'Add new Slider',
      'edit_item' => 'Edit Slider',
      'Search_items' => 'Search Slider',
      'not_found' => 'No Slider found',
      'not_found_in_trash' => 'No Slider found in trash'
      ),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'query_var' => true,
    'show_in_nav_menus' => true,
    'exclude_from_search' => false,
    'has_archive' => false,
    'supports' => array('title','editor','thumbnail','excerpt','page-attributes'),
    )
  );
register_post_type(
  'services', array(
    'labels' => array(
      'name' => 'Services',
      'singular_name' => 'Services',
      'add_new' => 'Add new Services',
      'add_new_item' => 'Add new Services',
      'edit_item' => 'Edit Services',
      'Search_items' => 'Search Services',
      'not_found' => 'No Services found',
      'not_found_in_trash' => 'No Services found in trash'
      ),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'query_var' => true,
    'show_in_nav_menus' => true,
    'exclude_from_search' => false,
    'has_archive' => false,
    'supports' => array('title','editor','thumbnail','excerpt','page-attributes'),
    )
  );register_post_type(
  'project', array(
    'labels' => array(
      'name' => 'Project',
      'singular_name' => 'Project',
      'add_new' => 'Add new Project',
      'add_new_item' => 'Add new Project',
      'edit_item' => 'Edit Project',
      'Search_items' => 'Search Project',
      'not_found' => 'No Project found',
      'not_found_in_trash' => 'No Project found in trash'
      ),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'query_var' => true,
    'show_in_nav_menus' => true,
    'exclude_from_search' => false,
    'has_archive' => false,
    'supports' => array('title','editor','thumbnail','excerpt','page-attributes'),
    )
  );
  register_post_type(
  'product', array(
    'labels' => array(
      'name' => 'Product',
      'singular_name' => 'Product',
      'add_new' => 'Add new Product',
      'add_new_item' => 'Add new Product',
      'edit_item' => 'Edit Product',
      'Search_items' => 'Search Product',
      'not_found' => 'No Product found',
      'not_found_in_trash' => 'No Product found in trash'
      ),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'query_var' => true,
    'show_in_nav_menus' => true,
    'exclude_from_search' => false,
    'has_archive' => false,
    'supports' => array('title','editor','thumbnail','excerpt','page-attributes'),
    )
  );
    register_post_type(
  'team', array(
    'labels' => array(
      'name' => 'Team',
      'singular_name' => 'Team',
      'add_new' => 'Add new Team',
      'add_new_item' => 'Add new Team',
      'edit_item' => 'Edit Team',
      'Search_items' => 'Search Team',
      'not_found' => 'No Team found',
      'not_found_in_trash' => 'No Team found in trash'
      ),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'query_var' => true,
    'show_in_nav_menus' => true,
    'exclude_from_search' => false,
    'has_archive' => false,
    'supports' => array('title','editor','thumbnail','excerpt','page-attributes'),
    )
  );
      register_post_type(
  'career', array(
    'labels' => array(
      'name' => 'Career',
      'singular_name' => 'Career',
      'add_new' => 'Add new Career',
      'add_new_item' => 'Add new Career',
      'edit_item' => 'Edit Career',
      'Search_items' => 'Search Career',
      'not_found' => 'No Career found',
      'not_found_in_trash' => 'No Career found in trash'
      ),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'query_var' => true,
    'show_in_nav_menus' => true,
    'exclude_from_search' => false,
    'has_archive' => false,
    'supports' => array('title','editor','thumbnail','excerpt','page-attributes'),
    )
  );
add_action('init', 'wpshout_register_taxonomy');
function wpshout_register_taxonomy() {
   $args = array(
       'hierarchical' => true,
       'label' => 'Categories',
   );
   register_taxonomy( 'package_category', array( 'project'), $args );
      register_taxonomy( 'team_cat', array( 'team'), $args );

}
register_nav_menus( array(
  'main_menu' => 'Main Menu',
  'Sider_menu' => 'Slider Menu',
   'category-menu' => __( 'Category Menu', 'saavthok' ),
  'footer_left' => 'Footer Left'
) );
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

?>