<?php function ProductSection(Array $params = null) { ?>

<?php //var_dump($params); ?>

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
            <span><i class="ph-battery-high"></i> hello</span>
            <span><i class="ph-battery-high"></i> hello</span>
            <span><i class="ph-battery-high"></i> hello</span>
          </div>
          <div class="details">
            <p class="duration">57 Min</p>
            <p class="price">Mais detalhes</p>
          </div>
        </div>
      </div>
      </a>

      <?php endwhile ?>

    </div>
  </div>
</section>

<?php }; ?>