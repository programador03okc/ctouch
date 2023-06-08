<?php
/*
 * Plugin Name:       ShortBuild
 * Plugin URI:        
 * Description:       Shortbuild plugin is comptible for Themeansar themes.
 * Version:           1.6.9
 * Author:            managethemes
 * Author URI:        https://managethemes.com
  * License:           GPL-2.0+
 * Tested up to: 	  5.4.2
 * Requires: 		  4.6 or higher
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       shortbuild
 * Domain Path:       /languages
 */
 
define( 'SBP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'SBP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );



define( 'SBP_PLUGIN_PLUGIN_NAME', 'shortbuild' );
define( 'SBP_PLUGIN_VERSION', '1.6.7' );
define( 'SBP_PLUGIN_TEMPLATE_URL', SBP_PLUGIN_URL.'inc/demo/' );

require SBP_PLUGIN_DIR . 'inc/init.php';
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.2
 */
if( !function_exists( 'run_shortbuild_bu')){

    function run_shortbuild_bu() {

        return Shortbuild_Bu::instance();
    }
    run_shortbuild_bu()->run();
}


$theme_name = wp_get_theme();
if('Businessup' == $theme_name->name){
register_activation_hook( __FILE__, 'sbp_bu_page_installation_function');
function sbp_bu_page_installation_function()
{

	$item_details_page = get_option('item_details_page'); 
    if(!$item_details_page){
	require_once('inc/short/pages/home.php');
	update_option( 'item_details_page', 'Done' );
   }		
    
}
}

function sbp_activate() {
	$theme = wp_get_theme();
	if ( 'Short' == $theme->name ){
		require_once('inc/short/features/customizer.php');
		require_once('inc/short/sections/homepage.php');
	}
	
	
	if ( 'Bagility' == $theme->name ){
		require_once('inc/bagility/features/customizer.php');
		require_once('inc/bagility/sections/homepage.php');
	}

}
add_action( 'init', 'sbp_activate' );

function sbp_enqueue(){
	wp_enqueue_style('sbp-custom-controls-css', plugin_dir_url(__FILE__) . 'assets/css/customizer.css', false, '1.0.0');
}
add_action('admin_enqueue_scripts', 'sbp_enqueue');


function sbp_customizer_section_live_preview() {
	wp_enqueue_script(
		'sbp-section-customizer-preview', plugin_dir_url(__FILE__) . 'assets/js/customizer.js', array(
			'jquery',
			'customize-preview',
		), 999, true
	);
}
add_action( 'customize_preview_init', 'sbp_customizer_section_live_preview' );


$theme = wp_get_theme();
if ( 'Short' == $theme->name || 'Bagility' == $theme->name ){
register_activation_hook( __FILE__, 'sbp_page_installation_function');
function sbp_page_installation_function()
{	
$item_details_page = get_option('item_details_page'); 
    if(!$item_details_page){
	require_once('inc/short/pages/home.php');
	require_once('inc/short/pages/about.php');
	require_once('inc/short/pages/blog.php');
	require_once('inc/short/pages/contact.php');
	update_option( 'item_details_page', 'Done' );
   }
}
}

function shortbuild_news_excerpt() {
    global $post;
    $excerpt = get_the_content();
    $excerpt = strip_tags(preg_replace(" (\[.*?\])", '', $excerpt));
    $excerpt = strip_shortcodes($excerpt);
    $original_len = strlen($excerpt);
    $short_excerpt_length = get_theme_mod('short_excerpt_length',180);
    $excerpt = substr($excerpt, 0, $short_excerpt_length);
    $len = strlen($excerpt);
    if ($original_len > 275) {
        $excerpt = $excerpt;
        return $excerpt . '<div class="news-excerpt-btn"><a href="' . esc_url(get_permalink()) . '" class="more-link">' . esc_html__("Read More", "shortbuild") . '</a></div>';
    } else {
        return $excerpt;
    }
}

if ( 'Newses' == $theme->name) {
require_once('inc/newses/widgets/widgets-common-functions.php');
require_once ('inc/newses/widgets/widgets-base.php');
require_once ('inc/newses/widgets/widgets-init.php');
require_once ('inc/newses/widgets/widgets-common-functions.php');
/* Theme Widgets*/
require_once ('inc/newses/widgets/widget-posts-carousel.php');
require_once ('inc/newses/widgets/widget-posts-double-category.php');
require_once ('inc/newses/widgets/widget-latest-news.php');
require_once ('inc/newses/widgets/widget-posts-list.php');
require_once ('inc/newses/widgets/widget-posts-tabbed.php');
require_once ('inc/newses/widgets/widget-posts-slider.php');
require_once ('inc/newses/widgets/featured-post-widget.php');
require_once ('inc/newses/widgets/widget-design-slider.php');
}
?>