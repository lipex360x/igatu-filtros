<?php
class RegisterCarcacas {
  function __construct() {
    $this->slug = 'carcacas';
    $this->singularName = 'Carcaça';
    $this->pluralName = 'Carcaças';
    $this->menuIcon = 'dashicons-star-empty';

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

$registerCarcacas = new RegisterCarcacas();
