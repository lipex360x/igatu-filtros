<div>
  <a href="<?php the_permalink() ?>">
    <div class="product-card">
      <div class="image">
      <img src="<?= get_field('product_image')['sizes']['large'] ?>" /> 
      </div>

      <div class="content">
        <h3 class="title description"><?php the_title(); ?></h3>
        <div class="features">
          <span title="vazão máxima/nominal">
             <?php BatteryIcon() ?> vazão: <?php //get_field('vazao')['nominal']?> litros/h
          </span>
        </div>
        
        <div class="details">
          <p class="show">Mais detalhes</p>
        </div>
      </div>
    </div>
  </a>
</div>