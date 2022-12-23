<a href="<?php the_permalink() ?>">
  <div class="product-card">
    <div class="image">
      <img src="<?= get_field('product_image')['sizes']['large'] ?>" />
    </div>

    <div class="content">
      <h3 class="title description"><?php the_title(); ?></h3>
      <div class="features">
        <span title="vazão máxima/nominal"><i class="ph-battery-high"></i> vazão: <?= get_field('vazao')['nominal']?> litros/h</span>
        <span><i class="ph-arrows-horizontal"></i> diâmetro: <?= get_field('dimensoes')['diametro']?> mm</span>
        <span><i class="ph-arrows-vertical"></i> altura: <?= get_field('dimensoes')['altura']?> mm</span>
        <span><i class="ph-barbell-light"></i>peso: <?= get_field('dimensoes')['peso']?> kg</span>
      </div>
      
      <div class="details">
        <p class="show">Mais detalhes</p>
      </div>
    </div>
  </div>
</a>