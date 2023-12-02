<?php
const URL_SITE = "http://localhost/institucional/";
require_once "mobile_device_detect.php";                //Detectar se esta utilizando pelo celular 

$isMobile = mobile_device_detect();                     //Resultado da funcao
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL_SITE?>css/bootstrap.min.css">    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <link rel="stylesheet" href="<?php echo URL_SITE?>css/app.css">

    <title>Victor Feller - Dev - Brusque/SC</title>
</head>

<body>
    <main>
        <?php
            require_once "components/nav.php"
        ?>

        <div class="container<?php echo ($page == "home") ? "-fluid p-0" : "" ?>">          <!-- se a page estiver na home, vai mudar onome da classe de container para container-fluid que expande a imagem-->
                <?php
                require_once "views/{$page}.php"; // Vai puxar do nav a variavel $page que puxa qual pagina estou
                ?>
        </div>

        <?php
            require_once "components/footer.php"
        ?>

    </main>

    <script src="<?php echo URL_SITE?>js/bootstrap.bundle.min.js"></script> <!-- JS Bootstrap -->
</body>
</html>