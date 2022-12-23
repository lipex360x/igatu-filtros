<?php 
  function ProductSection(Array $params = null) { 
    $postType = $params['data']->query['post_type'];  
    $postLink = get_post_type_archive_link($postType);
?>

<section class="cards">
  <div class="container">

    <header class="header-cards">
      <h2><i class="ph-qr-code"></i> <?= $params['title']; ?></h2>
      <a href="<?= $postLink ?>"><i class="ph-target"></i> <?= $params['subtitle'] ?></a>
    </header>
    
    <div class="section-cards">
      <?php while($params['data']->have_posts()) : $params['data']->the_post(); ?>

      <?php get_template_part('src/template-parts/product/content', $postType) ?>

      <?php endwhile ?>
    </div>

  </div>
</section>

<?php }; ?>