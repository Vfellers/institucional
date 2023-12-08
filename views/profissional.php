<div class="row my-4">
    <div class="col-sm-12 col-md-4">
        <img src="<?php echo URL_SITE ?>img\vito.jpg" class="img-fluid">
        <!-- Fez pra pegar o caminho absoluto, acho que nao era necessario -->
    </div>

    <div class="col-sm-12 col-md-8">
        <h2>Victor Feller Dos Santos</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore corrupti nostrum error! Natus consectetur
            sapiente ea quam magnam voluptas molestias ducimus dicta, doloribus fuga ex placeat ab numquam aliquam
            mollitia.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis eum dolore, accusamus beatae corrupti cumque
            aliquid repellendus odio, magni deserunt quam magnam quia eos vitae praesentium soluta sed maxime repellat.
        </p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima eos illum natus, impedit ea consequatur
            asperiores! Perspiciatis voluptates vitae unde doloremque, ex ad excepturi, praesentium dolorum laudantium
            neque, consequatur cumque.</p>
    </div>
</div>


<!-- Abre php pra replicar os cursos -->
<?php
$atuacao = [
    [
        "title" => "PHP",
        "icon" => "icofont-file-php",
        "text" => "Curso pela Proway através do projeto Entra21"
    ],

    [
        "title" => "MYSQL",
        "icon" => "icofont-database",
        "text" => "Curso de MYSQL pela Proway, Senai e Curso em Video"
    ],

    [
        "title" => "JavaScript",
        "icon" => "icofont-file-javascript",
        "text" => "Curso de JavaScript pela Proway, Senai e Curso em Video"
    ],

    [
        "title" => "CSS",
        "icon" => "icofont-file-css",
        "text" => "Curso de CSS e Bootstrap pela Proway, Senai e Curso em Video"
    ]
];
?>

<!-- Repetiçao -->
<div class="row my-4">

    <?php
    foreach ($atuacao as $area) {
        echo <<<HTML
            <div class="col-sm-12 col-md-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class= "{$area['icon']} fs-1"></i>    
                        <h3>{$area['title']}</h3>
                        <p>{$area['text']}</p>
                    </div>
                </div>
            </div>
        HTML;
    }
    ?>


</div>