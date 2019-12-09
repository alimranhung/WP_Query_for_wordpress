<?php
if(class_exists("Attachments")){
	require_once "lib/attachments.php";
}
	
if(site_url()=="http://localhost/wordpress2019"){
	define("VERSION", time());
}else{
	define("VERSION", wp_get_theme()->get("Version"));
}
function portfolio_bootstraping(){
    load_theme_textdomain( "portfolio" );
	add_theme_support( "post-thumbnails" );
	$portfolio_custom_header_deatils = array(
		"header-text" => true,
		"default-text-color"	=>	"#ddd",
		"width"	=>	1200,
		"height"=> 800,
		"flex-height"=> 800,
		"flex-width"=> 1200,
	);
	add_theme_support("custom-header", $portfolio_custom_header_deatils);
	$portfolio_custom_logo_defaults = array(
		"width"	=> "60",
		"height"=>	"60",
	);
	add_theme_support("custom-logo", $portfolio_custom_logo_defaults);
	add_theme_support("custom-background");
	add_theme_support( 'html5', array( 'search-form' ) );
    add_theme_support( "title-tag" );
    register_nav_menus( array(
    'menu-1' => esc_html__( 'Primary', 'portfolio' ),
    'menu-2' => esc_html__( 'Footer menu', 'portfolio' ),
	) );
	add_theme_support( "post-formats", array("image", "video", "audio", "quote", "link") );

	// add_image_size("portfolio-square", 400,400, true);
	// add_image_size("portfolio-portrait", 401, 600);
	// add_image_size( "portfolio-landscape",1000, 500);
	// add_image_size( "portfolio-landscape-hard-cropped",600, 400);

	add_image_size("portfolio-square-new1", 400,400, true);//Default center center
	add_image_size("portfolio-square-new2", 401, 401, array("left", "top"));
	add_image_size( "portfolio-square-new3",500, 500, array("bottom", "right"));
	add_image_size( "portfolio-square-new4",600, 600, array("top", "right"));
}
add_action( "after_setup_theme", "portfolio_bootstraping" );

function portfolio_style(){

    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), array(), VERSION, 'all' );
    wp_enqueue_style( "fontawesome-css", get_theme_file_uri( "/assets/css/fontawesome-all.min.css" ), array(), VERSION, 'all' );
    wp_enqueue_style( "featherlight-css", get_theme_file_uri( "/assets/css/featherlight.min.css" ), array(), VERSION, 'all' );
    wp_enqueue_style( "tiny-css", get_theme_file_uri( "/assets/css/tiny-slider.css" ), array(), VERSION, 'all' );
    wp_enqueue_style( "portfolio-style", get_stylesheet_uri(), null, 'all' );
    wp_enqueue_style( "responsive-css", get_theme_file_uri( "/assets/css/responsive.css" ), array(), VERSION, 'all' );
   
	wp_enqueue_style( "dashicons");


    wp_enqueue_script( "bootstrap", get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array("jquery"), VERSION, true );
    wp_enqueue_script( "scrollUp", get_theme_file_uri( "/assets/js/jquery.scrollUp.min.js" ), array("jquery"), VERSION, true );
	wp_enqueue_script( "easing", get_theme_file_uri( "/assets/js/jquery.easing.min.js" ), array("jquery"), VERSION, true );
	
    wp_enqueue_script( "featherlight-js", get_theme_file_uri( "/assets/js/featherlight.min.js" ), array("jquery"), VERSION, true );
    wp_enqueue_script( "tiny-js", get_theme_file_uri( "/assets/js/tiny-slider.js" ), array("jquery"), VERSION, true );
   
    wp_enqueue_script( "featherlight-js", get_theme_file_uri( "/assets/js/jquery.waypoints.min.js" ), array("jquery"), VERSION, true );
	wp_enqueue_script( "typed", get_theme_file_uri( "/assets/js/typed.min.js" ), array("jquery"), VERSION, true );
	wp_enqueue_script( "javascript", get_theme_file_uri( "/assets/js/javascript.js" ), array("jquery"), VERSION, true );

    wp_enqueue_script( "main-jquery-js", get_theme_file_uri( "/assets/js/main.js"), array("jquery",  "featherlight-js"), VERSION, true );
	
	
	
}
add_action("wp_enqueue_scripts", "portfolio_style");


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Single post sidebar', 'portfolio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Right Sidebar here.', 'portfolio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Project sidebar menu', 'portfolio' ),
		'id'            => 'portfolio_project_sidebar',
		'description'   => esc_html__( 'Add footer menu here.', 'portfolio' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer left site', 'portfolio' ),
		'id'            => 'portfolio_footer_left_site',
		'description'   => esc_html__( 'Add footer left widgets here.', 'portfolio' ),
		'before_widget' => '<div class="col-lg-7 col-sm-6"><div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer right site', 'portfolio' ),
		'id'            => 'portfolio_footer_right_site',
		'description'   => esc_html__( 'Add footer right widgets here.', 'portfolio' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'portfolio_widgets_init' );


function portfolio_the_excerpt_protect($excerpt){
	if(!post_password_required( )){
		return	$excerpt;
	}else{
		echo get_the_password_form();
	}
}
add_filter( "the_excerpt", "portfolio_the_excerpt_protect");

function protfolio_protected_title_change(){
	return "Locked: %s";
}

add_filter( "protected_title_format",  "protfolio_protected_title_change");



function portfolio_nav_add_class($classess, $item){
	$classess[]="list-inline-item";
	return $classess;
};
add_filter("nav_menu_css_class", "portfolio_nav_add_class", 10, 2);



if(!function_exists("portfolio_about_page_template_banner")){
	function portfolio_about_page_template_banner(){
		if(is_page()){
			$portfolio_feat_image = get_the_post_thumbnail_url(null, "large");
			?>
			<style>
				.page-header{
					background-image:url(<?php echo $portfolio_feat_image; ?>);
				}
			</style>
			<?php
		}
	
	
	
		if(is_front_page()){
			if(current_theme_supports("custom-header")){
				?>
					<style>
						.homepage-slides-area{
							background-image:url(<?php echo header_image(); ?>);
							background-size:cover;
							background-position:center;
						}
						.homepage-content-inner h1, .homepage-content-inner p{
							color:#<?php echo get_header_textcolor(); ?>;
							font-size:100px;
							<?php
								if(!display_header_text()){
									echo "display: none";
								}
							?>
						}
					</style>
				<?php
			}
		}
	}
	add_action("wp_head", "portfolio_about_page_template_banner");
}




function portfolio_body_class($classess){
	unset($classess[array_search("imran", $classess)]);
	$classess[] = "hi";
	return $classess;
}
add_filter("body_class", "portfolio_body_class");

function portfolio_post_classs($classess){
	unset($classess[array_search("status-publish", $classess)]);

	$classess[] = "postlist";
	return $classess;
}
add_filter("post_class", "portfolio_post_classs");


function portfolio_highlight_search_results($text){
    if(is_search()){
        $pattern = '/('. join('|', explode(' ', get_search_query())).')/i';
        $text = preg_replace($pattern, '<span class="search-highlight">\0</span>', $text);
    }
    return $text;
}
add_filter('the_content', 'portfolio_highlight_search_results');
add_filter('the_excerpt', 'portfolio_highlight_search_results');
add_filter('the_title', 'portfolio_highlight_search_results');

function portfolio_image_srcset(){
	return null;
}
add_filter("wp_calculate_image_srcset",  "portfolio_image_srcset");
