<?php
  function BarbellIcon($args = null) {
    $icon = '<rect x="56" y="56" width="40" height="144" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect><rect x="160" y="56" width="40" height="144" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect><path d="M200,80h24a8,8,0,0,1,8,8v80a8,8,0,0,1-8,8H200" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path><path d="M56,176H32a8,8,0,0,1-8-8V88a8,8,0,0,1,8-8H56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path><line x1="96" y1="128" x2="160" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line><line x1="232" y1="128" x2="248" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line><line x1="8" y1="128" x2="24" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>';

    SvgIcon(array(
      'width' => 16,
      'height' => 16,
      'viewBox' => '10 0 250 200',
      'icon' => $icon
    ));
  }

