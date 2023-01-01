<?php get_header(); ?>

<?php PageHeader(array('title' => get_the_title())); ?>


<section class="cards">

  <div class="container">

    <?php get_template_part('src/template-parts/product/show', 'elemento') ?>

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
