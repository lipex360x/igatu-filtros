<?php 
  function RelatedItem($params = null) { 
  $relatedItems = $params['data'];
?>

<section class="related-section">
  <div class="container">

  <header class="header-container">
    <h2><?php QrCodeIcon(); echo $params['title']; ?></h2>
  </header>

  <ul class="related-items">

    <?php foreach ($relatedItems as $item) : ?>
      
      <li>
        <a href="<?= get_the_permalink($item) ?>">
          <img src="<?= get_field('product_image', $item->ID)['sizes']['medium']?>" alt="">
          <span><?= get_the_title($item, $item->ID) ?></span>
        </a>
      </li>
    
    <?php endforeach ?>

  </ul>

  </div>
</section>

<?php } ?>