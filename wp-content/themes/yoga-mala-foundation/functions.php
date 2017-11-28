<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php');


// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php');

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php');

// Adds Custom Logo and Logo URL to login Page
add_action('login_head', 'custom_login_logo');
function custom_login_logo() {
		echo '<style type="text/css">
		h1 a { background-image:url('.get_template_directory_uri().'/assets/images/ymf-logo.svg) !important; background-size: 320px 75px !important;height: 75px !important; width: 320px !important; margin-bottom: 0 !important; padding-bottom: 10px !important; }
		.login form { margin-top: 10px !important; }
		</style>';
}

function url_login_logo(){
		return get_bloginfo( 'wpurl' );
}
add_filter('login_headerurl', 'url_login_logo');

// WPML Manually Menu siwtcher insert
// add WPML Language Toggle Manually
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items',10,2 );
function new_nav_menu_items($items,$args) {
    if ( function_exists('icl_get_languages')  && $args->theme_location == 'homepage-main-nav' ) {
        $languages = icl_get_languages('skip_missing=0');
        if(1 < count($languages)){
            foreach($languages as $l){
                if(!$l['active']){
                    $items .= '<li class="menu-item language"><a href="'.$l['url'].'">'. $l['native_name'] .'</a></li>';
                }
            }
        }
    }
    return $items;
}