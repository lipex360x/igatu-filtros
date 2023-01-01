<?php get_header(); ?>

<?php PageHeader(array('title' => get_the_title())); ?>

<section class="cards">

  <div class="container">

    <?php 
      get_template_part('src/template-parts/product/show', 'filtro');
      
      $relatedElements = get_field('elementos_relacionados');

      if($relatedElements) :
    ?>
    
    <h2>Elementos Relacionados</h2>

    <ul class="related-items">

    <?php
      foreach ($relatedElements as $element) :
        // var_dump($element->ID);
        // var_dump(get_field('product_image', $element->ID)['sizes']);
    ?>
      <li>
        <a href="<?= get_the_permalink($element) ?>">
          <img src="<?= get_field('product_image', $element->ID)['sizes']['medium']?>" alt="">
          <span><?= get_the_title($element, $element->ID) ?></span>
        </a>
      </li>
    
      <?php endforeach ?>

    </ul>

    <?php endif; ?>

  </div>

</section>

<?php get_footer(); ?>
