<?php 
  function SearchIcon($args = null) {
    $icon = '<path d="M87 150C121.794 150 150 121.794 150 87C150 52.2061 121.794 24 87 24C52.2061 24 24 52.2061 24 87C24 121.794 52.2061 150 87 150Z" stroke="currentColor" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M131.55 131.55L168 168" stroke="currentColor" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"/>';

    SvgIcon(array(
      'width' => 16,
      'height' => 16,
      'viewBox' => '0 0 200 200',
      'icon' => $icon
    ));
  }
