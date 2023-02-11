<?php get_header(); ?>

<?php PageHeader(array('title' => get_the_title())); ?>

<?php
  get_template_part('src/template-parts/product/show', 'filtro');

  $relatedItens = get_field('elementos_relacionados');

  if($relatedItens) {
    RelatedItem(array(
      'title' => 'Itens Relacionados',
      'data' => $relatedItens,
    ));
  }
  
  FilterSection(); 
  
  get_footer(); 
?>
