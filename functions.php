<?php
// COMPONENTS
require_once get_theme_file_path('src/components/index.php');

// ROUTES
require_once get_theme_file_path('/src/routes/index.php');

// STYLES
require_once get_theme_file_path('/src/styles/index.php');

// SCRIPTS
require_once get_theme_file_path('/src/scripts/index.php');

// CUSTOM POST TYPES
require_once get_theme_file_path('/src/custom-posts/index.php');

// ICONS
require_once get_theme_file_path('/src/assets/icons/index.php');


// FEATURES: Theme Supports
function themeFeatures() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('Landscape', 400, 260, true);
  add_image_size('Portrait', 480, 650, true);
  add_image_size('pageBanner', 1500, 350, true);
}
add_action('after_setup_theme', 'themeFeatures');

// Query Post Where
function postWhere($where, $wp_query) {
  global $wpdb;
  if($title = $wp_query->get('search_title')) {
    $where .= " AND " . $wpdb->posts . ".post_title LIKE '" . esc_sql($wpdb->esc_like($title)) . "%'";
  }
  return $where;
}
add_filter('posts_where', 'postWhere', 10, 2);

// WP Migration
function migrationIgnoreFiles() {
  $exclude[] = 'themes/wp-gen-theme/node_modules';
  return $exclude;
}
add_action('ai1wm_exclude_content_from_export', 'migrationIgnoreFiles');
