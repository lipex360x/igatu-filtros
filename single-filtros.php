<?php get_header(); ?>

<?php PageHeader(array('title' => get_the_title())); ?>

<section class="cards">

  <div class="container">

    <?php get_template_part('src/template-parts/product/show', 'filtro') ?>

  </div>

</section>

<?php get_footer(); ?>
