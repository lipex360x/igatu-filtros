<?php

  $getNbrText = new WP_Query(array(
    'post_type' => 'fixedtexts',
    'search_title' => 'NBR',
    'orderby' => 'title',
    'order' => 'ASC',
  ));

  $nbrPost = $getNbrText->posts[0];
  $nbrText = !empty(get_field('nbr')) ? get_field('nbr') : get_field('texto', $nbrPost->ID);

?>

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

        <tr>
          <td>Composição básica</td>
          <td><?= get_field('composicao') ?></td>
        </tr>
        
        <tr>
          <td>Classificação</td>
          <td>
            <table class="borderless">
              <tr>
                <td>Tipo: <?= get_field('classificacao')['tipo'] ?></td>
              </tr>
              <tr>
                <td>Local de Instalação: <?= get_field('instalacao') ?></td>
              </tr>
            </table>
          </td>
        </tr>

        <tr>
          <td>Vazão</td>
          <td>
            <table class="borderless">
              <tr>
                <td>Nominal: <?= get_field('vazao')['nominal'] ?> litros / hora</td>
              </tr>
              <tr>
                <td>Máxima*: <?= get_field('vazao')['maxima'] ?> litros / hora</td>
              </tr>
            </table>
          </td>
        </tr>

        <tr>
          <td>Pressão de operação</td>
          <td>
            <table class="borderless">
              <tr>
                <td>Máxima: <?= get_field('pressao')['maxima'] ?> kPa</td>
              </tr>
              <tr>
                <td>Mínima: <?= get_field('pressao')['minima'] ?> kPa</td>
              </tr>
            </table>
          </td>
        </tr>

        <tr>
          <td>Temperatura de operação</td>
          <td>
            <table class="borderless">
              <tr>
                <td>Máxima: <?= get_field('temperatura')['maxima'] ?> ºC</td>
              </tr>
              <tr>
                <td>Mínima: <?= get_field('temperatura')['minima'] ?> ºC</td>
              </tr>
            </table>
          </td>
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

        <tr>
          <td>Conexões de Entrada e Saída</td>
          <td><?= get_field('conexoes') ?>"</td>
        </tr>

        <tr>
          <td>Modelos equivalentes</td>
          <td><?= get_field('modelos_equivalentes') ?></td>
        </tr>

      </tbody>
    </table>

    <h2>Desempenho</h2>
    <table class="table table-hover table-sm">
      <tbody>
        <tr>
          <td>Retenção de partículas</td>
          <td>Classe C (≥ 5 a &lt; 15 µm)</td>
        </tr>
        
        <tr>
          <td>Redução de cloro livre</td>
          <td>≥ 75%</td>
        </tr>

        <tr>
          <td>Eficiência bacteriológica</td>
          <td>Não se aplica</td>
        </tr>

        <tr>
          <td>Controle do nível microbiológico</td>
          <td>Aprovado</td>
        </tr>

        <tr>
          <td>Limite máx. de concentração de extraíveis</td>
          <td>Aprovado</td>
        </tr>								
      </tbody>
    </table>

    <h2>Elemento Filtrante</h2>
    <table class="table table-hover table-sm">
      <tbody>
        <tr>
          <td>Modelo</td>
          <td>IGATU 446 CB</td>
        </tr>

        <tr>
          <td>Composição</td>
          <td>Carvão ativado em bloco impregnado com prata coloidal (atóxicos)</td>
        </tr>

        <tr>
          <td>Vida útil</td>
          <td>4000 litros ou até seis meses que poderão variar de acordo com a qualidade da água e da frequência de uso.</td>
        </tr>
      </tbody>
    </table>

    <div><p><small>* Valores recomendados, ** Valores aproximados</small></p></div>
    <div class="nbr"><p><?= $nbrText ?></p></div>

  </div>
</section>

