<?php
class RegisterFixedtexts {
  function __construct() {
    $this->slug = 'fixedtexts';
    $this->singularName = 'Texto Fixo';
    $this->pluralName = 'Textos Fixos';
    $this->menuIcon = 'dashicons-edit';

    add_action('init', array($this, 'register'));
  }

  function register() {
    register_post_type($this->slug, array(
      // 'rewrite' => array('slug' => $this->slug),
      'has_archive' => true,
      'public' => true,
      'menu_icon' => $this->menuIcon,
      'show_in_rest' => true,
      'supports' => array('title'),
      'labels' => array(
        'name' => $this->pluralName,
        'sigular_name' => $this->singularName,
        'add_new_item' => "Add New {$this->singularName}",
        'edit_item' => "Edit {$this->singularName}",
        'all_items' => "All {$this->pluralName}",
      )
    ));
  }
}

$registerFixedtexts = new RegisterFixedtexts();
