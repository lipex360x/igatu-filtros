<?php
function themeStyles() {
  wp_enqueue_style('theme_extra_styles', get_theme_file_uri('/build/index.css'));
}
add_action('wp_enqueue_scripts', 'themeStyles');