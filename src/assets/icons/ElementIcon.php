<?php
  function ElementIcon($args = null) {
    $icon = '<ellipse cx="128" cy="80" rx="88" ry="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></ellipse><path d="M40,80v48c0,26.5,39.4,48,88,48s88-21.5,88-48V80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path><path d="M40,128v48c0,26.5,39.4,48,88,48s88-21.5,88-48V128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>';

    SvgIcon(array(
      'width' => 25,
      'height' => 25,
      'viewBox' => '0 0 250 250',
      'icon' => $icon
    ));
  }
