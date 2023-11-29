<?php
  $navItens = [
    ["url" => "home", "label" => "HOME"], // CHave e valor do array
    ["url" => "profissional", "label" => "O PROFISSIONAL"],
    ["url" => "portifolio", "label" => "PORTIFÓLIO"],
    ["url" => "servicos", "label" => "SERVIÇOS"],
    ["url" => "contato", "label" => "CONTATO"]
  ];

  $page = (isset($_GET["page"])) ? $_GET["page"] : "home";
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Victor Feller Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

  <!-- Abre PHP -->
  <?php
    foreach ($navItens as $nav) {

      $active = ($nav["url"] == $page) ? "active" : "";   // Destacar pagina ativa

      echo <<<HTML

      <li class="nav-item">
        <a class="nav-link {$active}" aria-current="page" href="?page={$nav['url']}">{$nav['label']}</a>    <!-- vai puxar o link la de cima e o nome(label) -->
      </li>

      HTML;
    }
  ?>
<!-- Fecha PHP -->
    </ul>
  </div>
</nav>