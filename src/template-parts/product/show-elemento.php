<?php 
  // var_dump(get_field('desempenho'));

  $getThirdMarks = new WP_Query(array(
    'post_type' => 'fixedtexts',
    'search_title' => 'Marcas Terceiras',
    'orderby' => 'title',
    'order' => 'ASC',
  ));

  $thirdMarks = $getThirdMarks->posts[0];
  $thirdMarksText = get_field('texto', $thirdMarks->ID);
?>

<section class="show container grid spacing-top-5xl">
  <div class="images">
    <img
      src="<?= get_field('imagem')['sizes']['large'] ?>"
      alt="<?= get_field('imagem')['title'] ?>"
    />

    <?php if(get_field('selo_inmetro')) : ?>
      <img
        src="<?= get_field('selo_inmetro')['sizes']['large'] ?>"
        alt="<?= get_field('imagem')['title'] ?>"
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
          <td><?= get_field('codigo') ?></td>
        </tr>

        <tr>
          <td rolspan=2>Aplicação</td>
          <td><?= get_field('aplicacao') ?></td>
        </tr>

        <tr>
          <td rolspan=2>Composição Básica</td>
          <td><?= get_field('composicao') ?></td>
        </tr>

        <tr>
          <td>Dimensões</td>
          <td>
            <table class="borderless">
              <tr>
                <td>Diâmetro: <?= get_field('dimensoes')['diametro'] ?> mm</td>
              </tr>
              <tr>
                <td>Altura: <?= get_field('dimensoes')['altura'] ?> mm</td>
              </tr>
              <tr>
                <td>Peso**: <?= get_field('dimensoes')['peso'] ?> kg</td>
              </tr>
            </table>
          </td>
        </tr>
      </tbody>
    </table>

    <h2>Desempenho</h2>
    <table class="table table-hover table-sm">
      <tbody>
        <tr>
        <td>Retenção de partículas</td>
          <td>
            <table class="borderless">
              <?php foreach(get_field('desempenho')['classe'] as $classe) : ?>
              <tr>
                <td><?= $classe ?></td>
              </tr>
              <?php endforeach; ?>
            </table>
          </td>
        </tr>
        
        <tr>
          <td>Redução de cloro livre</td>
          <td>≥ <?= get_field('desempenho')['cloro'] ?>%</td>
        </tr>

        <tr>
          <td>Eficiência bacteriológica</td>
          <td><?= get_field('desempenho')['eficiencia_bac'] ?></td>
        </tr>

        <tr>
          <td>Vida útil</td>
          <td><?= get_field('desempenho')['vida_util'] ?></td>
        </tr>
      </tbody>
    </table>

    <div><p><small>* Valores recomendados, ** Valores aproximados</small></p></div>
    <div class="otherTexts"><p><?= $thirdMarksText ?></p></div>
    
  </div>
</section>