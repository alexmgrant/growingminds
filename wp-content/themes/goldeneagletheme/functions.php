<?php

ob_start();

include_once TEMPLATEPATH . '/functions/inkthemes-functions.php';
$functions_path = STYLESHEETPATH . '/functions/';
/* These files build out the options interface.  Likely won't need to edit these. */
require_once ($functions_path . 'admin-functions.php');  // Custom functions and plugins
require_once ($functions_path . 'admin-interface.php');  // Admin Interfaces (options,framework, seo)
/* These files build out the theme specific options and associated functions. */
require_once ($functions_path . 'theme-options.php');   // Options panel settings and custom settings
require_once ($functions_path . 'dynamic-image.php');
include_once TEMPLATEPATH . '/functions/shortcodes.php';
?>
<?php

/* ----------------------------------------------------------------------------------- */
/* Styles Enqueue */
/* ----------------------------------------------------------------------------------- */

function inkthemes_add_stylesheet() {
    wp_enqueue_style('coloroptions', get_template_directory_uri() . "/color/" . inkthemes_get_option('inkthemes_altstylesheet') . ".css", '', '', 'all');
	 wp_enqueue_style('shortcodes', get_template_directory_uri() . "/css/shortcode.css", '', '', 'all');
}

add_action('init', 'inkthemes_add_stylesheet');
/* ----------------------------------------------------------------------------------- */
/* jQuery Enqueue */
/* ----------------------------------------------------------------------------------- */

function inkthemes_wp_enqueue_scripts() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('inkthemes-ddsmoothmenu', get_stylesheet_directory_uri() . '/js/ddsmoothmenu.js', array('jquery'));
        wp_enqueue_script('inkthemes-slider', get_stylesheet_directory_uri() . '/js/slides.min.jquery.js', array('jquery'));
        wp_enqueue_script('inkthemes-jquery.prettyPhoto', get_stylesheet_directory_uri() . '/js/jquery.prettyPhoto.js', array('jquery'));
        wp_enqueue_script('inkthemes-tipsy', get_stylesheet_directory_uri() . '/js/jquery.tipsy.js', array('jquery'));
		wp_enqueue_script('inkthemes-validate', get_stylesheet_directory_uri() . '/js/jquery.validate.min.js', array('jquery'));
		wp_enqueue_script('inkthemes-effect', get_stylesheet_directory_uri() . '/js/frontend-effect.js', array('jquery'));
		 wp_enqueue_script('inkthemes-mobilemenu', get_stylesheet_directory_uri() . '/js/mobilemenu.js', array('jquery'));
		  wp_enqueue_script('gall-effect', get_stylesheet_directory_uri() . '/js/gall-effect.js', array('jquery'));
        wp_enqueue_script('inkthemes-custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'));
    } elseif (is_admin()) {
        
    }
}

// add featured image to posts and pages
add_theme_support( 'post-thumbnails' );

add_action('init', 'inkthemes_wp_enqueue_scripts');
//Front Page Rename
$get_status = get_option('re_nm');
$get_file_ac = TEMPLATEPATH . '/front-page.php';
$get_file_dl = TEMPLATEPATH . '/front-page-hold.php';
//True Part
if ($get_status === 'off' && file_exists($get_file_ac)) {
    rename("$get_file_ac", "$get_file_dl");
}
//False Part
if ($get_status === 'on' && file_exists($get_file_dl)) {
    rename("$get_file_dl", "$get_file_ac");
}

//
function inkthemes_get_option($name) {
    $options = get_option('inkthemes_options');
    if (isset($options[$name]))
        return $options[$name];
}

//
function inkthemes_update_option($name, $value) {
    $options = get_option('inkthemes_options');
    $options[$name] = $value;
    return update_option('inkthemes_options', $options);
}

//
function inkthemes_delete_option($name) {
    $options = get_option('inkthemes_options');
    unset($options[$name]);
    return update_option('inkthemes_options', $options);
}

// Custom Post Type Team Member

add_action( 'init', 'register_cpt_team_member' );

function register_cpt_team_member() {

    $labels = array( 
        'name' => _x( 'Team Members', 'team_member' ),
        'singular_name' => _x( 'Team Member', 'team_member' ),
        'add_new' => _x( 'Add New', 'team_member' ),
        'add_new_item' => _x( 'Add New Team Member', 'team_member' ),
        'edit_item' => _x( 'Edit Team Member', 'team_member' ),
        'new_item' => _x( 'New Team Member', 'team_member' ),
        'view_item' => _x( 'View Team Member', 'team_member' ),
        'search_items' => _x( 'Search Team Members', 'team_member' ),
        'not_found' => _x( 'No team members found', 'team_member' ),
        'not_found_in_trash' => _x( 'No team members found in Trash', 'team_member' ),
        'parent_item_colon' => _x( 'Parent Team Member:', 'team_member' ),
        'menu_name' => _x( 'Team Members', 'team_member' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'taxonomies' => array( 'category', 'post_tag' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'team_member', $args );
}
?>