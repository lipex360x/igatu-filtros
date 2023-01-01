<?php get_header(); ?>

<?php PageHeader(array('title' => 'Catálogo de Filtros')); ?>

<div class="archive container grid gap-base spacing-top-5xl">

  <?php while(have_posts()) : the_post(); ?>
  
  <?php get_template_part('src/template-parts/product/content', 'filtros') ?>

  <?php endwhile; ?>

</div>
  
<?php get_footer(); ?>