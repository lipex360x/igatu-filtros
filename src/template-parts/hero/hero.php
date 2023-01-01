<section class="hero container gap-base justify-between spacing-top-5xl">
  <div class="content flex flex-column justify-center gap-base">
    <h2><?= get_field('hero_titulo') ?></h2>
    <?= get_field('hero_subtitulo') ?>
    <a href="#" class="button">Quero saber mais!</a>
  </div>
  
  <img
    src="<?= get_field('hero_imagem')['sizes']['large'] ?>"
    alt="<?= get_field('hero_imagem')['alt']?>"
  />
  
</section>