<?php
class QueryFixedtexts {
  function __construct() {
    $this->slug = 'fixedtexts';

    add_action('pre_get_posts', array($this, 'setQuery'));
  }

  function setQuery($query) {
    if(!is_admin() && $query->is_main_query() && is_post_type_archive($this->slug)) {
      $query->set('orderby', 'title');
      $query->set('order', 'ASC');
      $query->set('posts_per_page', -1);
    }  
  }

}

$queryFixedtexts = new QueryFixedtexts;