<?php get_header(); ?>

<?php PageHeader(array('title' => get_the_title())); ?>

<section class="cards">

  <div class="container">

    <?php get_template_part('src/template-parts/product/content', 'filtros') ?>

  </div>

</section>

<?php get_footer(); ?>
