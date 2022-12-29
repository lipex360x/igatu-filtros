<?php
  function BatteryIcon($args = null) {
    $icon = '<line x1="248" y1="96" x2="248" y2="160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line><rect x="52" y="36" width="144" height="184" rx="16" transform="translate(252 4) rotate(90)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect><line x1="142.4" y1="168" x2="142.4" y2="88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line><line x1="105.6" y1="168" x2="105.6" y2="88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line><line x1="68.8" y1="168" x2="68.8" y2="88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>';

    SvgIcon(array(
      'width' => 16,
      'height' => 16,
      'viewBox' => '15 0 240 200',
      'icon' => $icon
      )
    );
  }
