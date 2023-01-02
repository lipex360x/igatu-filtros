<?php
class QueryFixedtexts {
  function __construct() {
    $this->slug = 'fixedtexts';

    add_action('pre_get_posts', array($this, 'setQuery'));
    add_filter('posts_where', array($this, 'postWhere'), 10, 2);
  }

  function setQuery($query) {
    if(!is_admin() && $query->is_main_query() && is_post_type_archive($this->slug)) {
      $query->set('orderby', 'title');
      $query->set('order', 'ASC');
      $query->set('posts_per_page', -1);
    }  
  }

  function postWhere($where, $wp_query) {
    global $wpdb;
    if($title = $wp_query->get('search_title')) {
      $where .= " AND " . $wpdb->posts . ".post_title LIKE '" . esc_sql($wpdb->esc_like($title)) . "%'";
    }
    return $where;
  }
}

$queryFixedtexts = new QueryFixedtexts;