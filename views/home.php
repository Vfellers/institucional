<!-- Banner Pagina Inicial Home -->

<?php

$dados = [
    [
        "title" => "Curso de programação PHP", 
        "description" => "O melhor curso do Brasil",
        "img" => "banner1.jpg",
        "imgMobile" => "banner1m.jpg"
    ],
    [
        "title" => "Curso de JAVA", 
        "description" => "O melhor do Java",
        "img" => "banner2.jpg",
        "imgMobile" => "banner2m.jpg"
    ]

]
?>

<div id="carouselExampleCaptions" class="carousel slide">

   <div class="carousel-inner">
<!--php inicio  -->
    <?php foreach($dados as $ch => $b){
        $active = ($ch == 0) ? "active" : "";
        $img = ($isMobile) ? $b["imgMobile"] : $b["img"]   //$isMobile foi setado no index
    ?>

    <div class="carousel-item <?php echo $active ?>">
      <img src="<?php echo URL_SITE."img/".$img ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5 class="bg-dark"> <?php echo $b["title"]  ?> </h5>
        <p class="bg-dark">  <?php echo $b["description"] ?> </p> -->
        <a href="#" class="btn btn-danger">ASSINE JÁ</a>
      </div>
    </div>
    
    <?php } ?>
<!--php fim  --> 

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<!-- STACKS -->
<?php
$stacks = [
    [
        "title" => "PHP",
        "description" => "Iniciante",
        "img" => "imagem1.jpg",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar Site"
    ],
    [
        "title" => "Java",
        "description" => "Avançado",
        "img" => "imagem2.jpg",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar Site"
    ],
    [
        "title" => "JavaScript",
        "description" => "Médio",
        "img" => "imagem3.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar Site"
    ],[
        "title" => "CSS",
        "description" => "Profissional",
        "img" => "imagem4.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar Site"
    ]

]
?>


<div class="container p-4">
    <div class="row">

        <?php
        foreach($stacks as $stack){
            $url_site = URL_SITE;
            echo <<<HTML

            <div class="col col-sm-12 col-md-3">
                <div class="card">
                    <img src="{$url_site}img/{$stack['img']}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> {$stack['title']} </h5>
                        <p class="card-text">{$stack['description']}</p>
                        <a href="{$stack['btnAction']}" class="btn btn-primary">{$stack['btnLabel']}</a>
                    </div>
                </div>
            </div>

            HTML;
        }
        ?>
    </div>
</div>