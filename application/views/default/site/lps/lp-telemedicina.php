<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>

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

    <!-- Icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Arquivos De Modelagem da Página -->
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/fontes.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/estilo.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/costumizavel.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/responsivo.css" />

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Alerta -->
    <script type="text/javascript" src="<?= base_url() ?>arquivos/plugins/sweetalert/sweetalert2.all.js"></script>

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

</head>
<body>

<div class="modalServicos centraliza-itens" id="modalLps" style="height: 100%;left: -10px !important;">
    <div class="bloco" style="overflow: auto !important;">

        <button class="fecha" onclick="ModalLps('fecha')">
            <img src="<?= base_url(); ?>arquivos/assets/img/btn-close.png" alt="Botão Fecha">
        </button>

        <h4 id="txtTituloExame">Agende agora</h4>
        <p style="text-align: center; padding-top: 10px;">Deixe seu contato<br>que vamos te ligar ainda hoje</p>

        <form method="post" action="">

            <div class="row">
                <label class="text-align-left">Nome Completo</label>
                <input style="height: 40px;width: 100%;" type="text" name="name" required>
            </div>

            <div class="row">
                <label class="text-align-left">E-mail</label>
                <input style="height: 40px;width: 100%;" type="email" name="email">
            </div>

            <div class="row">
                <label class="text-align-left">Celular / Telefone</label>
                <input style="height: 40px;width: 100%;" id="campoCel1" type="tel" name="phone" required>
            </div>

            <div class="row text-align-center">
                <button type="submit" id="btn_envia" class="btn-azul">Enviar</button>
            </div>

        </form>

    </div>

    <div class="fundoPreto" onclick="ModalLps('fecha')"></div>
</div>

<link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/bootstrap-grid.min.css" />

<style>
    html
    {
        overflow-x: hidden;
    }
    .bg-preco-ginecologista
    {
        margin-top: 40px;
        margin-bottom: 40px;
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        height: 450px;
    }
    @media only screen and (max-width: 425px) {
        #preco-img {
            padding: 40px 20px !important;
        }
    }

</style>

<!-- Banner -->
<div class="bg-lp-cardiologia-secao-1" style="background-image: url('<?= base_url() ?>arquivos/assets/img/lp-telemedicina/banner.png'); ">

    <div class="topo" style="position: relative">
        <div class="row">
            <div class="container">
                <div class="col-md-6" style="margin-top: 150px; margin-right: 50px">
                    <img style="width: 150px;margin-bottom: 50px;margin-top: -80px" src="<?= base_url() ?>arquivos/assets/img/lp-telemedicina/logo/SosOnline_3.svg"><br>
                    <h1 style="color: white;font-size: 40px;">VOCÊ PRECISA DE<br>MÉDICO AGORA?</h1><br>
                    <h2 style="color: white">Nós da SOS Dr Online podemos te ajudar!</h2><br>
                    <h3 style="color: white;margin-right: 60px;">Preço de uma consulta: R$110,00. Clicando no link agora: GRATUITO!</h3><br>
                    <br>
                    <br>
                    <button onclick="ModalLps('abre')" style="width: 320px;padding: 20px;font-size: 14px;background-color: white;border: 0px;border-radius: 10px;color: #CE3F7D;"> SEJA ATENDIDO HOJE GRATUITAMENTE </button>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Icones -->
<div style="width: 100%; height: auto; background-color: #eeeeee;padding: 30px 15px;">
    <div class="aaa">
        <div class="padding-icones">
            <div class="row">
                <div style="margin-top: 30px; margin-bottom: 30px" class="col-lg-2 col-md-2 col-4">
                    <img style="width: 100%;" src="<?= base_url() ?>arquivos/assets/img/lp-telemedicina/icone-1.svg">
                </div>
                <div style="margin-top: 30px; margin-bottom: 30px" class="col-lg-2 col-md-2 col-4">
                    <img style="width: 100%;" src="<?= base_url() ?>arquivos/assets/img/lp-telemedicina/icone-2.svg">
                </div>
                <div style="margin-top: 30px; margin-bottom: 30px" class="col-lg-2 col-md-2 col-4">
                    <img style="width: 100%" src="<?= base_url() ?>arquivos/assets/img/lp-telemedicina/icone-3.svg">
                </div>
                <div style="margin-top: 30px; margin-bottom: 30px" class="col-lg-2 col-md-2 col-4">
                    <img style="width: 100%;" src="<?= base_url() ?>arquivos/assets/img/lp-telemedicina/icone-4.svg">
                </div>
                <div style="margin-top: 30px; margin-bottom: 30px" class="col-lg-2 col-md-2 col-4">
                    <img style="width: 100%;" src="<?= base_url() ?>arquivos/assets/img/lp-telemedicina/icone-5.svg">
                </div>
                <div style="margin-top: 30px; margin-bottom: 30px" class="col-lg-2 col-md-2 col-4">
                    <img style="width: 100%;" src="<?= base_url() ?>arquivos/assets/img/lp-telemedicina/icone-6.svg">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Depoimentos -->
<div style="width: 100%; height: auto; background-color: #0095D9;padding: 30px 15px;">
    <div class="container">
        <div class="col-md-12">
            <img class="depoimentos-desktop" width="100%" src="<?= base_url(); ?>arquivos/assets/img/lp-telemedicina/depoimentos.png">
            <img class="depoimentos-mobile" width="100%" src="<?= base_url(); ?>arquivos/assets/img/lp-telemedicina/depoimento-mobile.png">
        </div>
    </div>
</div>

<!-- Botão -->
<div style="width: 100%; height: auto; background-color: #eeeeee;padding: 30px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="centraliza-itens">
                    <div style="margin-top: 30px; margin-bottom: 30px">
                        <button onclick="ModalLps('abre')" style="width: 320px;padding: 20px;font-size: 14px;background-color: #02428e;border: 0px;border-radius: 10px;color: #fff;"> AGENDE HOJE GRATUITAMENTE </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cards -->
<div style="width: 100%; height: auto; background-color: #02428e;padding: 30px 0px;">
    <div class="container">
        <div class="row">
            <div class="centraliza-itens">
                <div style="margin-top: 30px; margin-bottom: 30px" class="col">
                    <img style="width: 320px;" src="<?= base_url() ?>arquivos/assets/img/lp-telemedicina/cards/1.png">
                </div>
                <div style="margin-top: 30px; margin-bottom: 30px" class="col">
                    <img style="width: 320px;" src="<?= base_url() ?>arquivos/assets/img/lp-telemedicina/cards/2.png">
                </div>
                <div style="margin-top: 30px; margin-bottom: 30px" class="col">
                    <img style="width: 320px;" src="<?= base_url() ?>arquivos/assets/img/lp-telemedicina/cards/3.png">
                </div>
                <div style="margin-top: 30px; margin-bottom: 30px" class="col">
                    <img style="width: 320px;" src="<?= base_url() ?>arquivos/assets/img/lp-telemedicina/cards/4.png">
                </div>
                <div style="margin-top: 30px; margin-bottom: 30px" class="col">
                    <img style="width: 320px;" src="<?= base_url() ?>arquivos/assets/img/lp-telemedicina/cards/5.png">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Botão -->
<div style="width: 100%; height: auto; background-color: #fff;padding: 30px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="centraliza-itens">
                    <div style="margin-top: 30px; margin-bottom: 30px">
                        <button onclick="ModalLps('abre')" style="width: 320px;padding: 20px;font-size: 14px;background-color: #02428e;border: 0px;border-radius: 10px;color: #fff;"> AGENDE HOJE GRATUITAMENTE </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Econometro -->
<div class="econometro-desktop" style="width: 100%; height: auto; background-color: #FFFFFF;padding: 30px 15px;">
    <div class="container">
        <div class="col-md-12">
            <img width="100%" src="<?= base_url(); ?>arquivos/assets/img/lp-telemedicina/econometro.png">
        </div>
    </div>
</div>

<div class="econometro-mobile">
    <img width="100%" src="<?= base_url(); ?>arquivos/assets/img/lp-telemedicina/econometro-mobile.png">
</div>

<!-- Rodapé -->
<div style="width: 100%; height: auto; background-color: #013069">

    <div class="container">

        <div class="row" style="padding-top: 35px;margin-bottom: 0px; margin-top: 25px;height: auto; background-color: #013069">
            <div class="col-md-12 text-center centraliza-itens">
                <a href="https://sosdr.com" class="btn-sos-dr" style="float: left; text-align: center;margin-bottom: 20px;"> SOSDR.COM </a>
            </div>
        </div>

    </div>

</div>

<!-- Mascara -->
<script src="<?= base_url(); ?>arquivos/assets/js/mascara.js"></script>

<!-- JS Unico - referente a está pagina -->
<script type="text/javascript">

    $( document ).ready(function() {
        console.log( "ready!" );
        var SPMaskBehavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
            spOptions = {
                onKeyPress: function(val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };

        $('#campoCel1').mask(SPMaskBehavior, spOptions);
    });

    <?php if($msg != null): ?>

    <?php if($msg == true): ?>

    Swal.fire({
        type: 'success',
        title: 'Sucesso!',
        text: 'Contato enviado com sucesso. Em breve entraremos em contato.',
    });


    <?php else: ?>

    Swal.fire({
        type: 'error',
        title: 'Opss',
        text: 'Ocorreu um erro ao enviar contato, tente novamente.',
    });

    <?php endif; ?>

    <?php endif; ?>


    function ModalLps(acao)
    {
        if(acao == "fecha")
        {
            $("#modalLps").css("opacity", "0");

            setTimeout(function(){
                $("#modalLps").css("display", "none");
            },500);
        }
        else
        {
            $("#modalLps").css("display", "flex")

            setTimeout(function(){
                $("#modalLps").css("opacity", "1");
            },500);
        }
    }

</script>
</body>
</html>

