<?php 
  function RelatedItem($params = null) { 
  $relatedItems = $params['data'];
?>

<section class="related-section container flex-column">
  <header>
    <h2><?php HandsIcon(); echo $params['title']; ?></h2>
  </header>

  <ul class="grid gap-base">
    <?php foreach ($relatedItems as $item) : ?>
      
      <li>
        <a href="<?= get_the_permalink($item) ?>" title="<?= get_the_title($item, $item->ID) ?>">
          <img src="<?= get_field('product_image', $item->ID)['sizes']['medium']?>" alt="">
          <span><?= wp_trim_words(get_the_title($item, $item->ID), 6) ?></span>
        </a>
      </li>
    
    <?php endforeach ?>
  </ul>
  
</section>

<?php } ?>