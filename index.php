<?php
const URL_SITE = "http://localhost/institucional/";
require_once "mobile_device_detect.php";                //Detectar se esta utilizando pelo celular 
require_once "conectarBanco.php";                       //conectar o arquivo que puxa o banco

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
        <?php
            require_once "components/nav.php"
        ?>

    <main>
        <div class="container<?php echo ($page == "home") ? "-fluid p-0" : "" ?>">          <!-- se a page estiver na home, vai mudar o nome da classe de container para container-fluid que expande a imagem-->
                <?php
                require_once "views/{$page}.php"; // Vai puxar do nav a variavel $page que puxa qual pagina estou
                ?>
        </div>

    </main>

        <?php
            require_once "components/footer.php"
        ?>

    <script>
        const URL = "<?php echo URL_SITE?>"   //NUMERO 1
    </script>
    <script src="<?php echo URL_SITE?>js/bootstrap.bundle.min.js"></script> <!-- JS Bootstrap -->
    <script src="<?php echo URL_SITE?>js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo URL_SITE?>js/app.js"></script>
</body>
</html>