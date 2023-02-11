<?php 
  function ElementSection($params = null) {
    $getElementos = new WP_Query(array(
      'post_type' => 'elementos',
      'posts_per_page' => $params['posts_per_page'] ?? 3,
      'orderby' => 'title',
      'order' => 'ASC',
    ));

    $params = array(
      'title' => 'Catálogo de Elementos',
      'subtitle' => 'Veja todos os Elementos',
      'data'=> $getElementos,
    );

    $postLink = get_post_type_archive_link('elementos');

    wp_reset_postdata();
?>

<section class="container flex-column spacing-top-5xl spacing-bottom-5xl">
  <header>
    <h2><?php ElementIcon(); echo $params['title']; ?></h2>

    <?php if(isset($params['subtitle'])) : ?>
      <a href="<?= $postLink ?>"><?php CardsIcon(); echo $params['subtitle'] ?></a>
    <?php endif ?>
  </header>
  
  <div class="cards">
    <?php while($params['data']->have_posts()) : $params['data']->the_post(); ?>

    <?php get_template_part('src/template-parts/product/content', 'elementos') ?>

    <?php endwhile ?>
  </div>
</section>

<?php }; ?>