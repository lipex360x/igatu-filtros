<?php function ProductSection(Array $params = null) { ?>

<section class="cards">
  <div class="container">

    <header class="header-cards">
      <h2><i class="ph-qr-code"></i> <?= $params['title']; ?></h2>
      <a href=""><i class="ph-target"></i> <?= $params['subtitle'] ?></a>
    </header>
    
    <div class="section-cards">
      <?php while($params['data']->have_posts()) : $params['data']->the_post(); ?>

      <a href="">
      <div class="card">
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

      <?php endwhile ?>

    </div>
  </div>
</section>

<?php }; ?>