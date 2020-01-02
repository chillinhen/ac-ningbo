<?php
/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/
// Customizer Additions
require ( 'inc/customizer.php' );
// add ACF Theme Options and Fields
require_once ('acf/acf-include.php');
// add Custom Posts
//require_once ('inc/custom-posts.php');
// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    //HTML5 support
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 1024, '', true); // Large Thumbnail
    add_image_size('medium', 600, '', true); // Medium Thumbnail
    add_image_size('small', 315, '', true); // Small Thumbnail
    add_image_size( 'favorite-small', 575, 325, true );//Favorite Thumbnail
    add_image_size('banner', 9999, 415, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds
    add_theme_support('custom-background', array(
      'default-color' => '#f2f2f2',
      //'default-image' => get_template_directory_uri() . '/library/img/bg.png',
      //'default-image'          => '',
      //'default-repeat'         => 'no-repeat',
      //'default-position-x'     => 'left',
      //'default-position-y'     => 'top',
      //'default-size'           => 'auto',
      //'default-attachment'     => 'scroll',
    ));

    //Alt Attribute for random Header
    //add SVG
    function add_svg($svg_mime) {
      $svg_mime['svg'] = 'image/svg+xml';
      return $svg_mime;
    }
    add_filter('upload_mimes', 'add_svg');
    //replace deprecated wp_title
    add_theme_support('title-tag');
    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
    //enable html5 tags
    add_theme_support( 'html5', array( 'gallery' ) );

    // Localisation Support
    load_theme_textdomain('ac-ningbo', get_template_directory() . '/languages');

    //add editor styles	
   // add_editor_style('editor-styles.css');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/
//order blog Posts
// Runs before the posts are fetched

add_filter( 'pre_get_posts' , 'acnb_post_order' );

// Function accepting current query

function acnb_post_order( $query ) {

// Check if the query is for home and alter only the primary query

if(!($query->is_home && $query->is_main_query()))

// Query was for home, then set order

$query->set( 'order' , 'asc' );}

//replace deprecated wp_title
function filter_title_part($title) {
    $name = get_bloginfo('name');
    global $post;
    $title = get_the_title();
    $parent = get_the_title($post->post_parent);
    return array($name, $parent, $title);
}

function an_document_title_separator($sep) {
    // change separator for singular blog post
    if (is_singular(array('post', 'page'))) {
        $sep = '|';
    }

    return $sep;
}

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/assets/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('popper', get_template_directory_uri() . '/assets/js/lib/popper.min.js', array(), '', true); // Popper
        wp_enqueue_script('popper'); // Enqueue it!

        wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/lib/bootstrap.min.js', array(), '4.1.3', true); // Bootstrap
        wp_enqueue_script('bootstrap'); // Enqueue it!

        // lightbox
       wp_register_script('nivo-lightbox', get_stylesheet_directory_uri() . '/assets/js/nivo-lightbox.min.js', array('jquery'), '', true);
       wp_enqueue_script('nivo-lightbox');

        wp_register_script('html5blankscripts', get_template_directory_uri() . '/assets/js/custom_scripts.js', array('jquery', 'bootstrap'), '1.0.0', true); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!

        // custom vanilla scripts - concat later
        wp_enqueue_script('dom_helper', get_template_directory_uri() . '/assets/js/lib/dom_helper.js', array(), '1.0.0', true); // 
        wp_enqueue_script('scroll', get_template_directory_uri() . '/assets/js/scroll-to-top.js', array('dom_helper'), '1.0.0', true); // 
        wp_enqueue_script('checkbox', get_template_directory_uri() . '/assets/js/custom-checkbox.js', array('dom_helper'), '1.0.0', true); // 
        wp_enqueue_script('category', get_template_directory_uri() . '/assets/js/category-grids.js', array('dom_helper'), '1.0.0', true); // 
        wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu.js', array('dom_helper'), '1.0.0', true); // 

        // Cookie Bar
        wp_enqueue_script('cookie-bar', get_template_directory_uri() . '/assets/cookie-bar/cookiebar-latest.min.js?theme=white&tracking=1&thirdparty=1&refreshPage=1&showNoConsent=1&hideDetailsBtn=1&remember=30&privacyPage=https%3A%2F%2Faachen-ningbo.de%2Fde%2Fdatenschutzerklaerung%2F', array('jquery'), false, true);

    }
}


// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/assets/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.min.css', array(), '1.0', 'all');

    //fonts
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css', 'style', '1.0', 'all');

    //icons
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), '5.0.10', 'all');

    //icons
    wp_enqueue_style('fontawesomeV4', get_template_directory_uri() . '/assets/css/v4-shims.min.css', array(), '5.0.10', 'all');

    //icons
    wp_enqueue_style('themify', get_template_directory_uri() . '/assets/css/themify-icons.css', array(), '5.0.10', 'all');

    //lightbox
    //wp_enqueue_style('nivo-lightbox', get_stylesheet_directory_uri() . '/assets/css/nivo-lightbox.css', 'style', '1.0', 'all', array());

    wp_enqueue_style('ac-ningbo', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');

    wp_enqueue_style('screen', get_stylesheet_directory_uri() . '/assets/css/screen.css', 'style', '1.0', 'all', array('fontawesome','ac-ningbo'));
    //wp_enqueue_style( 'editor-style', get_template_directory_uri() . '/assets/css/editor-styles.css', array('ac-ningbo') );
    //wp_enqueue_style('print', get_stylesheet_directory_uri() . '/assets/css/print.css', 'style', '1.0', 'print', array('fontawesome','ac-ningbo'));
}

function sak_theme_add_editor_styles() {
    global $post;
    $post_type = get_post_type( $post->ID );
    $editor_style = 'editor-style-' . $post_type . '.css';
    add_editor_style( $editor_style );
}
//add_action( 'pre_get_posts', 'sak_theme_add_editor_styles' );

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'ac-ningbo'), // Main Navigation
        'footer-menu' => __('Footer Menu', 'ac-ningbo') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}


// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Footer Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'ac-ningbo'),
        'description' => __('Description for this widget-area...', 'ac-ningbo'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Footer Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'ac-ningbo'),
        'description' => __('Description for this widget-area...', 'ac-ningbo'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
        // Define Sidebar Widget Area 1
        register_sidebar(array(
            'name' => __('Sidebar Widget Area 1', 'ac-ningbo'),
            'description' => __('Description for this widget-area in sidebar...', 'ac-ningbo'),
            'id' => 'sidebar-widget-area-1',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
            ));
    // Define Sidebar Language
    register_sidebar(array(
        'name' => __('Language', 'ac-ningbo'),
        'description' => __('Language Switch', 'ac-ningbo'),
        'id' => 'language',
        'before_widget' => '<div id="languages-menu">',
        'after_widget' => '</div>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

function html5wp_news($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 15;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 80;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . _e('View Article', 'ac-ningbo') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}



// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

//Register acf-gb block
add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'downloadlist',
			'title'				=> __('Download List'),
			'description'		=> __('A custom download list.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comment',
			'keywords'			=> array( 'list', 'downloads' ),
		));
	}
}
function my_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu

add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
//add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
//add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/



/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

?>
