<?php
  $lifeSpanLitres = get_field('desempenho')['vida_util']['litros'];
  $lifeSpanMonth = get_field('desempenho')['vida_util']['meses'];
  
  $lifeSpan = $lifeSpanLitres
  ? "$lifeSpanLitres litros / $lifeSpanMonth meses"
  : "$lifeSpanMonth meses (ver detalhes)";

?>

<a href="<?php the_permalink() ?>">
  <div class="product-card">
    <div class="image">
    <img src="<?= get_field('product_image')['sizes']['large'] ?>" /> 
    </div>

    <div class="content">
      <h3 class="title description"><?php the_title(); ?></h3>
      <div class="features">
        <span title="vazão máxima/nominal">
          <?php CalendarCheckIcon() ?> vida útil: <?= $lifeSpan ?>
        </span>

        <span>
          <?php ArrowsHorizontalIcon() ?> diâmetro: <?= get_field('dimensoes')['diametro']?> mm
        </span>

        <span>
          <?php ArrowsVerticalIcon() ?> altura: <?= get_field('dimensoes')['altura']?> mm
        </span>

        <span>
          <?php BarbellIcon() ?> peso: <?= get_field('dimensoes')['peso']?> kg
        </span>
      </div>
      
      <div class="details">
        <p class="show">Mais detalhes</p>
      </div>
    </div>
  </div>
</a>
