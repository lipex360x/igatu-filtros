<header class="header">
  <div class="container align-center justify-between">
    <a href="<?= site_url() ?>">
    <img
      src="<?= get_theme_file_uri('src/assets/logomarca.jpg')?>"
      alt="Logo Igatu Filtros"
    />
    </a>
    
    <div class="menu-section">
      
      <div class="menu-toggle">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
      </div>

      <nav>
        <ul>
          <li>
            <a href="#">Sobre nós</a>
          </li>
          <li>
            <a href="<?= get_post_type_archive_link('filtros') ?>">Filtros</a>
          </li>
          <li>
          <a href="<?= get_post_type_archive_link('elementos') ?>">Elementos</a>
          </li>
          <li>
            <a href="#">Fale Conosco</a>
          </li>
          <li>
            <a href="javascript:void(0)" class="search-toggle">
              <?php SearchIcon() ?>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>