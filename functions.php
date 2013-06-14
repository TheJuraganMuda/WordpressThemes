<?php

/* =============================================================================
You don't Change This
========================================================================== */
function remove_footer_admin () {
echo 'Themes by <a href="http://www.twitter.com/@BIGalma_" target="_blank">@BIGalma_</a> | Designed by <a href="http://www.mypalucity.com" target="_blank">MyPaluCity</a></p>';
}
/* =============================================================================
You Allow to change this
========================================================================== */

/* Login Logo to url*/

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
/* Login Logo*/
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/images/bo-login-logo.png);
            padding-bottom: 30px;
        }

        body.login  {
  /* fallback */
  background-color: #6699cc;
  background-image: none;
  background-position: center center;
  background-repeat: no-repeat;

  /* Safari 4-5, Chrome 1-9 */
  /* Can't specify a percentage size? Laaaaaame. */
  background: -webkit-gradient(radial, center center, 0, center center, 460, from(#fff), to(#6699cc));

  /* Safari 5.1+, Chrome 10+ */
  background: -webkit-radial-gradient(circle, #fff, #6699cc);

  /* Firefox 3.6+ */
  background: -moz-radial-gradient(circle, #fff, #6699cc);

  /* IE 10 */
  background: -ms-radial-gradient(circle, #fff, #6699cc);

  /* Opera couldn't do radial gradients, then at some point they started supporting the -webkit- syntax, how it kinda does but it's kinda broken (doesn't do sizing) */
       }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


if ( ! isset( $content_width ) ) $content_width = 300;
/* This theme uses wp_nav_menu() in one location.	 */
		if(function_exists('register_nav_menu')) {
		register_nav_menu('primary', __('Primary Nav Menu', ""));
		register_nav_menu('secondary', __('Secondary Nav Menu', ""));

	}

# Sidebar
add_theme_support( 'automatic-feed-links' );
# Remove Default Author Profile Fields in WordPress
add_filter('user_contactmethods','hide_profile_fields',10,1);
function hide_profile_fields( $contactmethods ) {
unset($contactmethods['aim']);
unset($contactmethods['jabber']);
unset($contactmethods['yim']);
return $contactmethods;
}

/* the_breadcrumbs*/
	function the_breadcrumbs() {
 
  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '&raquo;'; // delimiter between crumbs
  $home = 'Beranda'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb
 
  global $post;
  $homeLink = home_url('');
 
  if (is_home() || is_front_page()) {
 
    if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
 
  } else {
 
    echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
 
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
 
    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;
 
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
 
    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</div>';
 
  }
}
/* end the_breadcrumbs()*/

/* enable_more_buttons	 */
add_filter("mce_buttons_3", "enable_more_buttons");

/* sidebar	 */
register_sidebar(array('name'=>'ads',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="judulkolom">',
'after_title' => '</h3>',
));
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'left',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="judulkolom">',
'after_title' => '</h3>',
));
register_sidebar(array('name'=>'right',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3 class="judulkolom">',
'after_title' => '</h3>',
));	
register_sidebar(array('name'=>'footeradsx',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));	
register_sidebar(array('name'=>'pariwisata',
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));	

/* end of sidebar	 */




function custom_excerpt($new_length = 20, $new_more = '...') {
  add_filter('excerpt_length', function () use ($new_length) {
    return $new_length;
  }, 999);
  add_filter('excerpt_more', function () use ($new_more) {
    return $new_more;
  });
  $output = get_the_excerpt();
  $output = apply_filters('wptexturize', $output);
  $output = apply_filters('convert_chars', $output);
  $output = '<p>' . $output . '</p>';
  echo $output;
}

function new_excerpt_more($more) {
       global $post;
	return ' <a href="'. get_permalink($post->ID) . '">>>selengkapnya</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>
