<section class="spacing show-filter">
  <div class="container">
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
      <p>
        <?= get_field('descricao') ?>
      </p>

      <h2>Características</h2>
      <table>
        <tbody>
          <tr>
            <td>Modelo</td>
            <td>IGATU 446</td>
          </tr>

          <tr>
            <td>Código</td>
            <td>446FCBR</td>
          </tr>								

          <tr>
            <td>Classificação</td>
            <td>Aparelho por pressão</td>
          </tr>

          <tr>
            <td>Local de instalação</td>
            <td>POU (Ponto de uso)</td>
          </tr>

          <tr>
            <td>Composição básica</td>
            <td>Polipropileno (atóxico)</td>
          </tr>

          <tr>
            <td>Vazão nominal</td>
            <td>200 litros/hora</td>
          </tr>

          <tr>
            <td>Vazão máxima recomendada</td>
            <td>200 litros/hora</td>
          </tr>

          <tr>
            <td>Pressão de operação</td>
            <td>Máx.: 600 kPa || Mín.: 29 kPa</td>
          </tr>
          
          <tr>
            <td>Temperatura de operação</td>
            <td>Máx.: 42 ºC || Mín.: 2 ºC</td>
          </tr>

					<tr>
            <td>Diâmetro</td>
            <td>114 mm</td>
          </tr>
								
					<tr>
						<td>Altura</td>
						<td>222 mm</td>
					<tr>

					<tr>
            <td>Peso</td>
            <td>0,705 kg</td>
          </tr>
								
          <tr>
            <td>Modelos equivalentes</td>
            <td>Linha 200, AP200, WP200</td>
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
    </div>
      
  </div>
</section>