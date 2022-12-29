<?php
function themeScripts() {
  $themeScripts = 'theme-main-scripts';
  
  wp_localize_script($themeScripts, 'themeData', array('root_url' => get_site_url()));

  wp_enqueue_script($themeScripts, get_theme_file_uri('build/index.js'), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'themeScripts');
