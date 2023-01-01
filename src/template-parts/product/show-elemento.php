<section class="show container grid spacing-top-5xl">
  <div class="images">
    <img
      src="<?= get_field('product_image')['sizes']['large'] ?>"
      alt="<?= get_field('product_image')['title'] ?>"
    />

    <?php if(get_field('selo_inmetro')) : ?>
      <img
        src="<?= get_field('selo_inmetro')['sizes']['large'] ?>"
        alt="<?= get_field('product_image')['title'] ?>"
      />
    <?php endif; ?>
  </div>

  <div class="content">
    <p class="font-lg"><?= get_field('descricao') ?></p>
    
    <h2>Características</h2>
    <table>
      <tbody>
        <tr>
          <td>Modelo</td>
          <td><?= get_field('modelo') ?></td>
        </tr>

        <tr>
          <td rolspan=2>Código</td>
          <td><?= get_field('modelo') ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>