<?php
  function ArrowsVerticalIcon($args = null) {
    $icon = '<polyline points="96 56 128 24 160 56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline><line x1="128" y1="232" x2="128" y2="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line><polyline points="160 200 128 232 96 200" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>';

    SvgIcon(array(
      'width' => 16,
      'height' => 16,
      'viewBox' => '15 30 240 200',
      'icon' => $icon
    ));
  }
