<?php 
  function FilterSection($params = null) {

    $getFiltros = new WP_Query(array(
      'post_type' => 'filtros',
      'posts_per_page' => $params['posts_per_page'] ?? 3,
      'orderby' => 'title',
      'order' => 'ASC',
    ));

    $params = array(
      'title' => 'Catálogo de Filtros',
      'subtitle' => 'Veja todos os Filtros',
      'data'=> $getFiltros,
    );

    $postLink = get_post_type_archive_link('filtros');

    wp_reset_postdata();
?>

<section class="container flex-column">
  <header>
    <h2> <?php QrCodeIcon(); echo $params['title']; ?> </h2>

    <?php if(isset($params['subtitle'])) : ?>
      <a href="<?= $postLink ?>">
        <?php CardsIcon(); echo $params['subtitle'] ?>
      </a>
    <?php endif ?>
  </header>
  
  <div class="cards">
    <?php while($params['data']->have_posts()) : $params['data']->the_post(); ?>

    <?php get_template_part('src/template-parts/product/content', 'filtros') ?>

    <?php endwhile ?>
  </div>
</section>

<?php }; ?>