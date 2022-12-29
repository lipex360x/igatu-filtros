<?php 
  function PageHeader($args = null) {  
    if(!isset($args['title'])) $args['title'] = get_the_title();
    if(!isset($args['subtitle'])) $args['subtitle'] = get_field('page_banner_subtitle');

    if(!isset($args['photo'])) {
      $args['photo'] = (get_field('page_banner_background_image') && !is_archive() && !is_home())
        ? get_field('page_banner_background_image')['sizes']['pageBanner']
        : get_theme_file_uri('src/assets/ocean.jpg');
    }
  ?>

  <div class="page-banner">
  <div class="bg-image" style="background-image: url(<?= $args['photo'] ?>)"></div>
  <div class="container content">
    <h2 class="title"><?= $args['title'] ?></h2>

    <div class="intro">
      <p><?= $args['subtitle'] ?></p>
    </div>
  </div>
</div>

<?php } ?>

