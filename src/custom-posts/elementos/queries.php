<?php
class QueryElementos {
  function __construct() {
    $this->singularName = 'elemento';

    add_action('pre_get_posts', array($this, 'setQuery'));
  }

  function setQuery($query) {
    if(!is_admin() && $query->is_main_query() && is_post_type_archive($this->singularName)) {
      $query->set('orderby', 'title');
      $query->set('order', 'ASC');
      $query->set('posts_per_page', -1);
    }  
  }
}

$registerQuery = new QueryElementos();