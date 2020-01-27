<?php
// replace "bigfoot" with project name
add_action('after_setup_theme', 'bigfoot_setup');
function bigfoot_setup()
{
  // Bigfoot Updater Includes
  load_theme_textdomain('bigfoot', get_template_directory() . '/languages');
  add_theme_support('title-tag');
  add_theme_support('automatic-feed-links');
  add_theme_support('post-thumbnails');
  global $content_width;
  if (!isset($content_width)) $content_width = 640;
  register_nav_menus(
    array(
      'main-menu' => __('Main Menu', 'bigfoot'), 'theme_location' => 'Head Navigation',
      'footer-nav' => __('Footer Navigation', 'bigfoot'), 'theme_location' => 'Footer Top',
      'mobile-nav' => __('Mobile Navigation', 'bigfoot'), 'theme_location' => 'Mobile Hamburger Menu',
      'account-quicklinks' => __('My Account Quick Links', 'bigfoot'), 'theme_location' => 'My Account Dropdown'
    )
  );
}

add_action('wp_enqueue_scripts', 'bigfoot_load_scripts');
function bigfoot_load_scripts()
{
  // styles
  wp_enqueue_style('style', get_stylesheet_uri(), array(), null, 'all');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), null, 'all');

  // scripts
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.js', array(), '3xx', true);
  wp_enqueue_script('bootstrapBundle', get_template_directory_uri() . '/js/bootstrap/bootstrap.bundle.js', array('jquery'), '4.1.1', true);
  wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('smartmenus', get_template_directory_uri() . '/js/smartmenus/jquery.smartmenus.js', array('jquery'), '1.0', true);
  wp_enqueue_script('lightbox', get_template_directory_uri() . '/js/lightbox/lightbox.js', array('jquery'), '1.0', true);
  wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints/waypoints.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('masonry', get_template_directory_uri() . '/js/masonry.js', array('jquery'), '4.0', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}

add_action('comment_form_before', 'bigfoot_enqueue_comment_reply_script');
function bigfoot_enqueue_comment_reply_script()
{
  if (get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}

add_filter('the_title', 'bigfoot_title');
function bigfoot_title($title)
{
  if ($title == '') {
    return '&rarr;';
  } else {
    return $title;
  }
}

add_filter('wp_title', 'bigfoot_filter_wp_title');
function bigfoot_filter_wp_title($title)
{
  return $title . esc_attr(get_bloginfo('name'));
}

add_action('widgets_init', 'bigfoot_widgets_init');
function bigfoot_widgets_init()
{
  register_sidebar(array(
    'name' => __('Sidebar Widget Area', 'bigfoot'),
    'id' => 'primary-widget-area',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s col-md-12">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => __('Footer Block 1', 'bigfoot'),
    'id' => 'footer-block-1',
    'before_widget' => '<div>',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="footer-box-title %2$s">',
    'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => __('Footer Block 2', 'bigfoot'),
    'id' => 'footer-block-2',
    'before_widget' => '<div>',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="footer-box-title %2$s">',
    'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => __('Footer Block 3', 'bigfoot'),
    'id' => 'footer-block-3',
    'before_widget' => '<div>',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="footer-box-title %2$s">',
    'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => __('Footer Block 4', 'bigfoot'),
    'id' => 'footer-block-4',
    'before_widget' => '<div>',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="footer-box-title %2$s">',
    'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => __('Footer Top Nav', 'bigfoot'),
    'id' => 'footer-nav',
    'before_widget' => '<div>',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="footer-box-title %2$s">',
    'after_title' => '</h3>',
  ));
  register_sidebar(array(
    'name' => __('Footer Top Block', 'bigfoot'),
    'id' => 'footer-block',
    'before_widget' => '<div>',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="footer-top-title %2$s">',
    'after_title' => '</h3>',
  ));

  // woocommerce shop sidebar check
  if (class_exists('woocommerce')) {
    register_sidebar(array(
      'name' => __('Shop Sidebar', 'bigfoot'),
      'id' => 'shop-widget-area',
      'before_widget' => '<li id="%1$s" class="widget-container %2$s col-md-12">',
      'after_widget' => "</li>",
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ));
  }
}

// Custom search form for HTML 5 using Bootstrap 4
add_filter('get_search_form', 'html5_search_form');
function html5_search_form($form)
{
  $form = '
    <form
      class="form-inline justify-content-center my-2 my-lg-0"
      id="searchForm"
      role="search"
      method="get"
      action="' . home_url('/') . '"
    >
      <div class="input-group">
        <input
          class="form-control"
          type="search"
          placeholder="Search..."
          value="' . get_search_query() . '"
          name="s"
          aria-label="Search Website"
        >
        <div class="input-group-append">
          <button class="btn btn-outline-success" type="submit">
            <span class="fa fa-search"></span>
          </button>
        </div>
      </div>
    </form>
  ';

  return $form;
}

// display option shortcode
// usage: [getOption option="OPTION"]
// replace @ in email strings with <i class="fa fa-at"></i>
add_shortcode('getOption', 'handle_option_shortcode');
function handle_option_shortcode($option)
{
  extract(shortcode_atts(array(
    'option' => 'option',
  ), $option));

  $opt = get_option($option);

  if (strpos('@', $opt)) {
    $opt = str_replace('@', '<i class="fa fa-at"></i>', $opt);
  } else {
    // dont change opt
  }

  return $opt;
}

// Remove admin bar for non editors
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
  if (!current_user_can('manage_options') && !is_admin()) {
    show_admin_bar(false);
  }
}
function bigfoot_custom_pings($comment)
{
  $GLOBALS['comment'] = $comment;
  ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}

add_filter('get_comments_number', 'bigfoot_comments_number');
function bigfoot_comments_number($count)
{
  if (!is_admin()) {
    global $id;
    $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
    return count($comments_by_type['comment']);
  } else {
    return $count;
  }
}

// Bootstrap comment form
function bs_comment_form()
{

  $fields =  array(

    'author' => '
      <div class="comment-form-author">
        <div class="form-group">
            <label for="author">' . __('Name', 'domainreference') . '</label> ' . ($req ? '<span class="required">*</span>' : '') . '
            <input id="author" class="form-control" name="author" placeholder="Your Name" type="text" value="' . esc_attr($commenter['comment_author']) . '" ' . $aria_req . ' />
        </div>
      </div>
    ',

    'email' => '
      <div class="comment-form-email">
        <div class="form-group">
            <label for="email">' . __('Email', 'domainreference') . '</label> ' . ($req ? '<span class="required">*</span>' : '') . '
            <input id="email" name="email" class="form-control" placeholder="Your Email Address" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" ' . $aria_req . ' />
        </div>
      </div>
    ',

    'url' => '
      <div class="comment-form-url">
        <div class="form-group">
            <label for="url">' . __('Website', 'domainreference') . '</label>' . '
            <input id="url" name="url" class="form-control" type="text" placeholder="Your Website" value="' . esc_attr($commenter['comment_author_url']) . '" />
        </div>
      </div>
    ',
  );
  $comments_args = array(

    'class_submit' => 'btn btn-primary submit',

    // change "Leave a Reply" to "Comment"
    'title_reply' => 'Discuss this post ?',
    'fields' => apply_filters('comment_form_default_fields', $fields),
    'comment_field' =>  '
      <div class="comment-form-comment">
        <div class="form-group">
            <label for="comment">' . _x('Comment', 'noun') . '</label>
            <textarea id="comment" name="comment" class="form-control" placeholder="Type Your Comment.." rows="8" aria-required="true">' . '</textarea>
        </div>
      </div>
    ',
    'comment_notes_after' => ' '
  );

  return comment_form($comments_args);
}

//breadcrumbs
add_theme_support('yoast-seo-breadcrumbs');


// Remove version strings from static JS and CSS
function bf_remove_wp_ver_css_js($src)
{
  if (strpos($src, 'ver=' . get_bloginfo('version')))
    $src = remove_query_arg('ver', $src);
  return $src;
}
add_filter('style_loader_src', 'bf_remove_wp_ver_css_js', 9999);
add_filter('script_loader_src', 'bf_remove_wp_ver_css_js', 9999);

// Register Custom Navigation Walker
// More info - https://wp-bootstrap.github.io/wp-bootstrap-navwalker/
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

/********* Echos Kingcomposer page content *********/
function show_kc_content( $post_id ) {
	
	if ( function_exists( 'kc_do_shortcode' ) ) {    
	
		$raw_content = kc_raw_content( $post_id );

		echo kc_do_shortcode( $raw_content );
		
	} else {
		
		echo do_shortcode ($post->post_content);
		
	}
	
}