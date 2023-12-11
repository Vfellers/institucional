<?php

//Conexao banco
$sql="SELECT * FROM portifolio";
$qry = mysqli_query($con, $sql) or die("ERRO NA CONSULTA");  


$sites=[];
$i=0;

while ($data = mysqli_fetch_assoc($qry)){
    $sites[$i]=$data;
    $i++;
}



// $sites = [
//     [
//         "imagem" => "img\imagem1.jpg",
//         "link" => "www.google.com",
//         "nome" => "Google"
//     ],

//     [
//         "imagem" => "img\imagem2.jpg",
//         "link" => "www.globo.com",
//         "nome" => "Globo"
//     ],

//     [
//         "imagem" => "img\imagem3.png",
//         "link" => "www.globo.com",
//         "nome" => "Vito"
//     ],

//     [
//         "imagem" => "img\imagem4.png",
//         "link" => "www.globo.com",
//         "nome" => "Lala"
//     ],

//     [
//         "imagem" => "img\banner1m.jpg",
//         "link" => "www.globo.com",
//         "nome" => "Teste"
//     ],

//     [
//         "imagem" => "img\banner1m.jpg",
//         "link" => "www.globo.com",
//         "nome" => "Link"
//     ],
// ];
?>

<div class="title my-5 text-center text-primary"><h1>Participei no desenvolvimento</h1></div>

<div class="row my-5">
    <?php
    foreach ($sites as $site) {
        echo <<<HTML
        
        <div class="col-sm-12 col-md-4">
            <figure class="figure text-center border border-primary rounded">
                <img src="{$site['imagem']}" class="figure-img img-fluid rounded mh-80" alt="...">
                <figcaption class="figure-caption fs-3"> <a class="text-decoration-none text-primary" href="{$site['link']}">{$site['nome']}</a> </figcaption>
            </figure>
        </div>
        
        HTML;
    }
    ?>

</div>



   