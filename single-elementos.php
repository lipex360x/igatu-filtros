<?php get_header(); ?>

<?php PageHeader(array('title' => get_the_title())); ?>

<?php 
  get_template_part('src/template-parts/product/show', 'elemento') ;
  
  $relatedItens = get_field('filtros_relacionados');

  if($relatedItens) {
    RelatedItem(array(
      'title' => 'Itens Relacionados',
      'data' => $relatedItens,
    ));
  }

  ElementSection();
  get_footer(); 

?>
