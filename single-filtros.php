<?php get_header(); ?>

<?php 
  PageHeader(array('title' => get_the_title()));

  get_template_part('src/template-parts/product/show', 'filtro');

  $relatedElements = get_field('elementos_relacionados');

  if($relatedElements) {
    RelatedItem(array(
      'title' => 'Itens Relacionados',
      'data' => $relatedElements,
    ));
  }
  
  FilterSection(); 
  
  get_footer(); 
?>
