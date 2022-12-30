<?php
  function CardsIcon($args = null) {
    $icon = '<rect x="32" y="80" width="160" height="128" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect><path d="M64,48H216a8,8,0,0,1,8,8V176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>';

    SvgIcon(array(
      'width' => 18,
      'height' => 16,
      'viewBox' => '0 0 220 220',
      'icon' => $icon
    ));
  }

