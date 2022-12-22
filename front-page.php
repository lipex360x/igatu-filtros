<?php get_header(); ?>

<?php get_template_part('src/template-parts/hero/index') ?>

<?php
    $getFiltros = new WP_Query(array(
      'post_type' => 'filtro',
      'posts_per_page' => 3,
      'orderby' => 'title',
      'order' => 'ASC',
    ));

    $request = array(
      'title' => 'Catálogo de Filtros',
      'subtitle' => 'Veja todos os Filtros',
      'url' => '/filtros',
      'data'=> $getFiltros,
    );
    
    ProductSection($request);

    // $getElementos = new WP_Query(array(
    //   'post_type' => 'filtro',
    //   'posts_per_page' => 3,
    //   'orderby' => 'title',
    //   'order' => 'ASC',
    // ));

    // $request = array(
    //   'title' => 'Catálogo de Elementos Filtrantes',
    //   'subtitle' => 'Veja todos os Filtros',
    //   'url' => '/filtros',
    //   'data'=> $getElementos,
    // );

    // // ProductSection($request);

    // wp_reset_postdata();    
    
  ?>

<?php get_footer(); ?>