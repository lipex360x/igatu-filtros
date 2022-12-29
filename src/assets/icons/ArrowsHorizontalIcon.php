<?php
  function ArrowsHorizontalIcon($args = null) {
    $icon = '<polyline points="56 96 24 128 56 160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline><polyline points="200 96 232 128 200 160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline><line x1="24" y1="128" x2="232" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>';

    SvgIcon(array(
      'width' => 16,
      'height' => 16,
      'viewBox' => '15 0 240 200',
      'icon' => $icon
    ));
  }


