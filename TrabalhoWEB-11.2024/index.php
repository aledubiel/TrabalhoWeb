<?php include('config.php'); ?>

<!DOCTYPE html>
<!--Idiomas-->
<html lang="en, pt-br">

<head>
    <!--Padrão Unicode para a codificação dos caracteres-->
    <meta charset="UTF-8">
    <!--Mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--SEO = Search Engine Optimization-->
    <meta name="description" content="Descrição do site">
    <meta name="keywords" content="Palavra-chave 1, 2, 3, etc">

    <!--Google Fonts - Open Sans-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Css-->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/style.css">

    <link rel="shortcut icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon">

    <!--Título do site-->
    <title>IFPR</title>
</head>

<body>
    <?php
    //Obtendo a url se existir ou home
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    switch ($url) {
        case 'depoimentos':
            echo '<target target="depoimentos"/>';
            break;
        case 'servicos':
            echo '<target target="servicos"/>';
            break;
    }
    ?>

    <!--header-->
 <!--   <header>
        <div class="center">
            <div class="logo left">
                <a href="<?php echo INCLUDE_PATH; ?>">
                    <img src="<?php echo INCLUDE_PATH; ?>logo_ifpr.png" alt="IFPR">
                </a>
            </div>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="bars-mobile fa-solid fa-bars"></div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
            
        </div>
    </header> -->

    <body>
    <header>
        <div class="logo"><a href="<?php echo INCLUDE_PATH; ?>home"><img src="<?php echo INCLUDE_PATH; ?>/assets/img/Logo.png" alt="Logo AD Importados"></a></div>
        <div class="menu">
            <nav>
                <b><a href="<?php echo INCLUDE_PATH; ?>home">Home</a> |
                     <!-- <a href="/garantia.html">Garantia</a> |-->
                    <a href="<?php echo INCLUDE_PATH; ?>quemSomos">Quem Somos</a> |
                    <a href="<?php echo INCLUDE_PATH; ?>modelos">Modelos</a> |
                    <a href="<?php echo INCLUDE_PATH; ?>faleconosco">Fale Conosco</a></b>
            </nav>
        </div>
    </header>
    <!--header-->

    <!--Recortar todo o conteúdo e colar em: pages/home.php-->
    <?php

    //Se a URL existe
    if (file_exists('pages/' . $url . '.php')) {
        include('pages/' . $url . '.php');
    } else {
        if ($url != 'depoimentos' && $url != 'servicos') {
            $pagina404 = true;
            include('pages/404.php');
        } else {
            include('pages/home.php');
        }
    }
    ?>


    <!--footer-->
    <footer>
        <div class="footer-container">
            <div class="footer-links">
                <a href="/index.html">Home</a> |
                 <!-- <a href="/garantia.html">Garantia</a> |-->
                <a href="/quemSomos.html">Quem Somos</a> |
                <a href="/modelos.html">Modelos</a> |
                <a href="/faleconosco.html">Fale Conosco</a>
            </div>
            <div class="footer-social">
                <a href="https://facebook.com" target="_blank"><img src="<?php echo INCLUDE_PATH; ?>/assets/img/icons8-facebook-48.png" alt="Facebook"></a>
                <a href="https://whatsapp.com" target="_blank"><img src="<?php echo INCLUDE_PATH; ?>/assets/img/icons8-whatsapp-48.png" alt="WhatsApp"></a>
                <a href="https://instagram.com" target="_blank"><img src="<?php echo INCLUDE_PATH; ?>/assets/img/icons8-instagram-48.png" alt="Instagram"></a>
            </div>
            <div class="footer-info">
                <p>&copy; 2024 AD Importados. Todos os direitos reservados.</p>
                <p>Rua Teste, 123 - Cidade - Estado - CEP 00000-000</p>
                <p>Email: contato@adimportados.com.br | Telefone: (00) 0000-0000</p>
            </div>
        </div>
    </footer>
    <!--footer-->

    <!--CDN Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="<?php echo INCLUDE_PATH; ?>assets/js/scripts.js"></script>

    <?php if ($url == 'home' || $url == '' || $url == 'faleconosco' || $url == 'modelos') { ?>
        <script src="<?php echo INCLUDE_PATH; ?>assets/js/enviaForm.js"></script>
        <script src="<?php echo INCLUDE_PATH; ?>assets/js/slider.js"></script>
        <a href="https://wa.me/5542988895383" class="btnWhatsApp" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>  
    <?php } ?>


    <?php if($url == 'home' || $url ==''){ ?>
        <script src="<?php echo INCLUDE_PATH; ?>assets/js/especialidades.js"></script>
    <?php } ?>

    
</body>

</html>