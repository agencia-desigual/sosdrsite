<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123913380-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-123913380-1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WK8LP6V');</script>
    <!-- End Google Tag Manager -->


    <!-- Init code pzw.io  //-->
    <script>
        var $_PowerZAP = { defaultCountry: '+55', widget_id: '12336', company: "15571" }; (function(i,s,o,g,r,a,m){ i[r]={context:{id:'b05af1a80c2928d5c5f5eba59bab59ec'}};a=o;o=s.createElement(o); o.async=1;o.src=g;m=s.getElementsByTagName(a)[0];m.parentNode.insertBefore(o,m); })(window,document,'script','https://w-cdn.huggy.io/widget.min.js?v=8.0.0','pwz');
    </script><!-- End code pzw.io  //-->


    <meta charset="utf-8">
    <title><?= $seo['titulo']; ?></title>


    <!-- Meta Tags -->
    <meta name="google-site-verification" content="zK2sUWwMFyBM5caBS1e5MMr0359CBm9iooxYo8uUe7Y" />
    <meta name="keywords" content="<?= $seo['palavras']; ?>">
    <meta name="description" content="<?= $seo['descricao']; ?>">
    <meta name="author" content="SOS Dr">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="googlebot" content="all, index, follow">
    <meta name="revisit" content="10 days">
    <meta name="Revisit-After" content="10 Days">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="format-detection" content="telephone=no">

    <!-- Facebook -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="<?= $url; ?>">
    <meta property="og:title" content="<?= $smo['titulo']; ?>">
    <meta property="og:site_name" content="SOS Dr">
    <meta property="og:description" content="<?= $smo['descricao']; ?>">
    <meta property="og:image" content="<?= base_url(); ?>arquivos/assets/img/imagem-fb.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">

    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>arquivos/assets/img/favicon.png"/>

    <!-- Plugin OWL -->
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/plugins/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/plugins/owl.carousel/dist/assets/owl.theme.default.css" />

    <!-- Icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Arquivos De Modelagem da Página -->
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/animacoes.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/fontes.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/estilo.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/costumizavel.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/responsivo.css" />

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Mascara -->
    <script src="<?= base_url(); ?>arquivos/assets/js/mascara.js"></script>

    <!-- Instagram -->
    <script type="text/javascript" src="<?= base_url() ?>arquivos/plugins/instagram/insta.min.js"></script>

    <!-- Alerta -->
    <script type="text/javascript" src="<?= base_url() ?>arquivos/plugins/sweetalert/sweetalert2.all.js"></script>
</head>
<body>

    <div class="modalServicos centraliza-itens" id="modalLps">
    <div class="bloco">
        <button class="fecha" onclick="ModalLps('fecha')">
            <img src="<?= base_url(); ?>arquivos/assets/img/btn-close.png" alt="Botão Fecha">
        </button>


        <!--            <h4 id="txtTituloExame">Titulo Teste</h4>-->
        <p style="text-align: center; padding-top: 10px;">
            Para realizar o agendamento ligue:

            <span style="padding-top: 13px; display: block; font-size: 1.7em; color: #0094d6; font-weight: bold;">
                  <a style="text-decoration: none; color: #02428E !important;" href="tel:551434334922">(14) 3433-4922</a>
              </span>
        </p>

        <p style="text-align: center; padding-top: 10px;">
            Ou agende pelo WhatsApp:
        </p><div id="addBtn">
            <a href="https://api.whatsapp.com/send?l=pt_BR&phone=5514997000922" target="_blank"><button class="btnModal">Agendar Pelo WhatsApp</button></a>
        </div>
        <p></p>

    </div>

    <div class="fundoPreto" onclick="ModalLps('fecha')"></div>
</div>