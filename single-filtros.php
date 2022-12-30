<?php get_header(); ?>

<?php PageHeader(array('title' => get_the_title())); ?>

<section class="cards">

  <div class="container">

    <?php get_template_part('src/template-parts/product/show', 'filtro') ?>

    <?php 
      $getElementos = new WP_Query(array(
        'post_type' => 'elementos',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
        'meta_query' => array(
          array(
            'key' => 'related_filtros',
            'compare' => 'LIKE',
            'value' => '"' . get_the_id() . '"'
          )
        )
      ));

      if($getElementos->have_posts()) :
    ?>

    <h2>Elementos Relacionados</h2>

      <?php while($getElementos->have_posts()) : $getElementos->the_post(); ?>
  
      <a href="<?= the_permalink() ?>"><?= the_title(); ?></a>
  
      <?php endwhile; endif; wp_reset_postdata(); ?>

  </div>

</section>

<?php get_footer(); ?>
