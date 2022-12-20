<?php
class RegisterFiltro {
  function __construct() {
    $this->singularName = 'filtro';
    $this->pluralName = 'Filtros';
    $this->menuIcon = 'dashicons-filter';

    add_action('init', array($this, 'register'));
  }

  function register() {
    register_post_type($this->singularName, array(
      'rewrite' => array('slug' => $this->pluralName),
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

$registerCPT = new RegisterFiltro();