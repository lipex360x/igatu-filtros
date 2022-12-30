<?php get_header(); ?>

<?php PageHeader(array('title' => get_the_title())); ?>

<?php

  $getElementos = new WP_Query(array(
    'post_type' => 'filtros',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC',
    'meta_query' => array(
      array(
        'key' => 'related_elementos',
        'compare' => 'LIKE',
        'value' => '"' . get_the_id() . '"'
      )
    )
  ));

  while($getElementos->have_posts()) {
    $getElementos->the_post();
    get_template_part('src/template-parts/product/content', 'filtros');
  }

  wp_reset_postdata();
?>

<section class="cards">

  <div class="container">

    <?php get_template_part('src/template-parts/product/show', 'filtro') ?>

    <?php 
  
      // $request = array(
      //   'title' => 'Produtos Relacionados',
      //   'subtitle' => 'Veja todos os Filtros',
      //   'data'=> $getFiltros,
      // );
      
      // ProductSection($request);
    ?>

  </div>

</section>

<?php get_footer(); ?>
