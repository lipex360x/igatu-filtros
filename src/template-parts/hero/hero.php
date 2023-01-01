<section class="spacing hero">
  <div class="container">
    <div class="content">
      <h2><?= get_field('hero_titulo') ?></h2>
      <?= get_field('hero_subtitulo') ?>
      <a href="#" class="button">Quero saber mais!</a>
    </div>
    
    <img
      src="<?= get_field('hero_imagem')['sizes']['large'] ?>"
      alt="<?= get_field('hero_imagem')['alt']?>"
    />
  </div>
</section>