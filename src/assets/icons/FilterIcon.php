<?php
  function FilterIcon($args = null) {
    $icon = '<path d="M42.1,48H213.9a8,8,0,0,1,5.9,13.4l-65.7,72.3a7.8,7.8,0,0,0-2.1,5.4v56.6a7.9,7.9,0,0,1-3.6,6.7l-32,21.3a8,8,0,0,1-12.4-6.6v-78a7.8,7.8,0,0,0-2.1-5.4L36.2,61.4A8,8,0,0,1,42.1,48Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>';

    SvgIcon(array(
      'width' => 25,
      'height' => 25,
      'viewBox' => '0 0 250 250',
      'icon' => $icon
    ));
  }
