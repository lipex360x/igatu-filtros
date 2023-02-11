<?php get_header(); ?>

<?php PageHeader(array('title' => 'Catálogo de Elementos')); ?>

<div class="archive container grid gap-base spacing-top-5xl spacing-bottom-5xl">

  <?php while(have_posts()) : the_post(); ?>
  
  <?php get_template_part('src/template-parts/product/content', 'elementos') ?>

  <?php endwhile; ?>

</div>
  
<?php get_footer(); ?>