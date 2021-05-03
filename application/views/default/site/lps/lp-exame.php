<?php $this->load->view("default/site/include/header-lp"); ?>
<link rel="stylesheet" href="https://sosdr.com/arquivos/assets/css/bootstrap-grid.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
    header
    {
        height: 90px !important;
    }

    header nav ul li.login, header nav ul li.submenu
    {
        z-index: 99;
    }

    @media (max-width: 1100px)
    {
        .col-4
        {
            width: 50%;
        }
    }

    .conteudo-banner .owl-theme .owl-dots
    {
        display: none !important;
    }

    @media (max-width: 580px)
    {
        .col-4
        {
            width: 100%;
        }
    }

    @media (max-width: 425px) {
        .banner{
            background-image: none !important;
            background: linear-gradient(90deg, rgba(13,7,108,1) 0%, rgba(2,66,142,1) 35%, rgba(25,87,161,1) 100%) !important;
        }
    }

</style>
<style>

    .contador-timer
    {
        position: fixed !important;
        height: auto !important;
        width: 100% !important;
        background-color: #861316 !important;
        z-index: 999 !important;
        padding: 15px 0px !important;
        top: 0px;
        display: none;
    }

    .pulsando {

        transform: scale(0.7);
        animation: pulse 3s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(0.7);
        }

        50% {
            transform: scale(0.9);
        }

        100% {
            transform: scale(0.7);
        }
    }

    .dataExpira
    {
        color: #fff;
        font-size: 75px;
        display: inline;
        display: block;
        margin: 0 auto;
        text-align: center;
        margin-top: 25px;
    }

    .dataExpira p
    {
        display: inline;
        margin-right: 5px;
        margin-left: 5px;
    }

    .dataExpira b
    {
        color: #cb3232;
        font-size: 50px;
    }

    .text-right
    {
        text-align: right !important;
    }

    .altura-banner
    {
        min-height: 650px;
    }

    .banner-principal
    {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        margin-top: -20px;
    }

    .banner-principal .texto-banner
    {
        padding: 170px 120px 0px;
    }

    .banner-principal h1
    {
        color: #fff;
        font-size: 60px;
        line-height: 50px;
    }

    .banner-principal p
    {
        color: #fff;
        font-size: 18px;
        margin-top: 15px;
    }

    .tabela .azul
    {
        color: #27448b;
        font-size: 25px;
        font-weight: 600;
    }

    .tabela .cinza
    {
        color: #616161;
        font-size: 25px;
        font-weight: 500;
    }

    .tabela .cinza span
    {
        color: #616161;
        font-size: 25px;
        font-weight: 600 !important;
    }

    .tabela .azul span
    {
        color: #cb3232;
    }

    .icones-exames
    {
        padding: 50px 0px;
    }

    .texto-maior
    {
        font-size: 30px;
        text-align: center !important;
        font-weight: 600;

    }

    .texto-maior b
    {
        color: #27448b;
    }

    .text-center
    {
        text-align: center !important;
    }

    .preco
    {
        width: 100%;
        background-color: #27448b;
        min-height: 220px;
    }




    .nossa-historia
    {
        padding: 70px 0px 150px;
    }
    .nossa-historia h1
    {
        color: #03428d;
        font-weight: 200;
        letter-spacing: 2px;
        line-height: 50px;

    }
    .nossa-historia p
    {
        color: #393939;
        font-size: 17px;
        line-height: 25px;
    }
    .nossa-historia img
    {
        width: 470px;
        margin-left: 57px;
    }

    .barrinha-vermelha
    {
        width: 100%;
        height: 2px;
        background-color: #cb3232;
        margin-bottom: 50px;
    }
    .icones-quem-somos
    {
        position: relative;
        top: -140px;
        z-index: 9;
    }

    .depoimentos
    {
        background-color: #27448b;
        padding: 200px 0px 100px;
        position: relative;
        top: -210px;
    }
    .depoimentos-quem-somos p
    {
        color: #fff;
        line-height: 28px;
    }
    .depoimentos .img
    {
        border-radius: 20px;
        width: 100%;
    }
    .depoimentos h3
    {
        color: #fff;
        text-transform: uppercase;
        text-align: left;
        font-weight: 700;

    }

    .resultados
    {
        margin-top: -100px;
    }
    .resultados .img
    {
        width: 100%;
        margin-top: -75px;
    }
    .conhecer
    {
        background: #f4f4f4;
        padding: 75px 0px;
    }

    .midia .titulo
    {
        width: 100%;
    }

    .midia
    {
        background-color: #f2f2f2;
        padding: 40px;
        border-radius: 20px;
        margin-top: -130px;
        margin-bottom: 80px;
    }

    .midia .card-midia
    {
        text-align: center;
    }
    .midia .card-midia p
    {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .midia .card-midia a
    {
        background-color: #27448b;
        padding: 10px 20px;
        border-radius: 20px;
        text-transform: uppercase;
        color: #fff;
        text-decoration: none;
        border: 1px solid #27448b;
    }

    .midia .card-midia a:hover
    {
        background-color: #fff;
        border: 1px solid #27448b;
        color: #27448b;
    }

    .blog-quem-somos a
    {
        background-color: #ce3133;
        color: #fff;
        padding: 10px;
        font-weight: 700;
        border: 1px solid #ce3133;
        text-decoration: none;
    }

    .blog-quem-somos a:hover
    {
        background-color: #fff;
        color: #ce3133;
        border: 1px solid #ce3133;
    }

    .info-quem-somos .azul,
    .info-quem-somos-mobile .azul
    {
        background-color: #27448b;
        z-index: 99;
    }

    .info-quem-somos .azul img
    {
        margin-left: 40%;
        margin-top: -40px;
    }

    .info-quem-somos .valores img
    {

        z-index: 9;
        margin-top: 100px;
        margin-left: 0px;

    }

    .blog-quem-somos
    {
        min-height: 420px;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .blog-quem-somos h2
    {
        margin-top: 150px;
        margin-bottom: 20px;
        font-weight: 700;
        color: #27448b;
    }

    .rodape-quem-somos
    {
        padding: 50px 0px 0px 0px;
    }

    .rodape-quem-somos h3
    {
        margin-top: 150px;
        margin-bottom: 20px;
        font-weight: 700;
        color: #27448b;
        font-size: 40px;
    }

    .rodape-quem-somos p
    {
        font-size: 16px;
        color: #5c5c5c;
    }

    .txt-gente
    {
        display: none;
    }

    .duvidas
    {
        min-height: 720px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .preco .titulo
    {
        background-color: #cb3232;
        max-width: 550px;
        display: block;
        margin: 0 auto;
        margin-top: 100px;
        position: relative;
        top: -30px;
        border-radius: 20px;
        padding: 15px;
    }

    .titulo p
    {
        text-align: center;
        font-size: 30px;
        font-weight: 600;
        color: #fff;
    }

    .preco small
    {
        text-align: center;
        display: block;
        color: #fff;
        font-size: 16px;
        margin-top: -10px;
    }

    .btn-whats img
    {
        width: 36px;
        position: relative;
        top: 8px;
    }

    .btn-whats a
    {
        background-color: #7ad16d;
        color: #fff;
        font-weight: 600;
        padding: 10px 30px 15px 30px;
        border-radius: 30px;
        font-size: 35px;
    }

    .doutor .row
    {
        margin: 0 !important;
    }

    .doutor .cinza
    {
        background-color: #f2f2f2;
        min-height: 500px;
        padding: 4% 17% 4% 20%;
        /*padding: 70px 280px 70px 180px;*/
    }

    .doutor .azul
    {
        background-color: #27448b;
        min-height: 500px;
    }

    .doutor .azul img
    {
        position: relative;
        left: -50%;
        top: 6%;
    }

    .doutor p
    {
        color: #27448b;
        font-size: 19px;
        margin-top: 25px;
        text-align: justify;
    }

    .doutor b
    {
        color: #27448b;
        font-size: 19px;
        margin-top: 25px;
        text-align: right;
    }


    .especializada
    {
        margin-top: 50px;
    }

    .especializada .brasil img
    {
        max-width: 320px;
    }

    .especializada .descricao
    {
        padding: 0px 60px 1px 130px;
    }

    .especializada .descricao p
    {
        font-size: 27px;
        color: #5c5c5c;
        text-align: right;
    }

    .especializada .icones
    {
        background-color: transparent;
        padding: 0px;
        text-align: right;
        margin-top: 10px;
    }

    .especializada .descricao h3
    {
        font-size: 50px;
        color: #27448b;
        text-align: right;
    }

    .azul-quem-somos
    {
        height: 200px;
        max-height: 200px;
        background-color: #27448b;
        margin-top: 200px;
    }

    .mt-whats
    {
        margin-top: 300px;
    }

    @media (max-width: 425px)
    {

        .btn-whats-fixo img
        {
            width: 300px;
        }

        .tabela img
        {
            width: 100%;
        }

        .duvidas
        {
            min-height: 560px;
        }

        .banner-principal .texto-banner
        {
            padding: 40px 20px 0px !important;
        }

        .banner-principal
        {
            background-position-x: -354px !important;
            min-height: 500px;
        }

        .info-quem-somos-mobile
        {
            display: none !important;
        }

        .info-quem-somos
        {
            display: none;
        }

        .info-quem-somos-mobile .azul img
        {
            width: 80% !important;
            margin: 0 auto !important;
        }
        .info-quem-somos-mobile .valores img
        {
            width: 80% !important;
            margin: 0 auto !important;
        }
    }
    @media (max-width: 768px)
    {

        .mt-whats
        {
            margin-top: 15px;
        }

        .azul-quem-somos
        {
            height: auto;
            max-height: initial;
            padding-bottom: 30px;
        }

        .especializada .descricao
        {
            padding: 0px;
        }

        .especializada .descricao h3
        {
            text-align: center;
        }

        .especializada .descricao p
        {
            text-align: center;
        }

        .especializada .icones
        {
            text-align: center;
        }

        .banner-principal
        {
            background-position-x: -470px;
        }

        .depoimentos
        {
            padding: 50px 0px;
        }

        .doutor .cinza
        {
            padding: 50px;
        }

        .doutor .azul
        {
            display: none;
        }

        .doutor .cinza img
        {
            width: 100%;
        }
    }
    @media (max-width: 991px)
    {
        .banner-principal .texto-banner
        {
            padding: 120px 20px 0px;
        }

        .duvidas
        {
            background-position-x: -360px;
        }

        .img-gente
        {
            width: 100%;
            display: none;
        }

        .txt-gente
        {
            display: block;
        }

        .nossa-historia img
        {
            width: 100%;
            margin-left: 0px;
        }

        .topo img
        {
            width: 100%;
        }
        .depoimentos
        {
            top: 0px;
        }
        .midia
        {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .rodape-quem-somos .text-right
        {
            text-align: center !important;
            margin-bottom: 50px;
        }

        .rodape-quem-somos h3
        {
            margin-top: 50px;
        }

        .info-quem-somos .azul img
        {
            text-align: center;
            display: block;
            margin: 0 auto !important;
        }
        .info-quem-somos .valores img
        {
            display: block;
            margin: 0 auto;
            padding: 30px;
        }
    }
    @media (max-width: 1340px)
    {
        .info-quem-somos .azul img
        {
            margin-left: 35%;
        }
    }
    @media (max-width: 1230px)
    {
        .info-quem-somos .azul img
        {
            margin-left: 28%;
        }
    }
    @media (max-width: 1130px)
    {
        .info-quem-somos .azul img
        {
            margin-left: 20%;
        }
    }
    @media (max-width: 1024px)
    {
        .info-quem-somos .azul img
        {
            margin-left: 13%;
        }

        .doutor .azul img
        {
            width: 100%;
            top: 25%;
        }
    }

    .btn-whats-fixo
    {
        display: block;
        position: fixed;
        bottom: 15px;
        right: 15px;
        z-index: 999999;
    }

</style>

<div class="btn-whats-fixo">
    <a class="pulsando" target="_blank" href="https://api.whatsapp.com/send?phone=5508005809771?&amp;text=Quero agendar um checkup express">
        <img src="<?= base_url() ?>arquivos/assets/img/lps/exame/btn-agenda-exame.png">
    </a>
</div>

<div class="contador-timer">
    <div class="container">
        <div class="col-md-12 centraliza-itens">
            <p>Oportunidade única! Essa semana estamos com um <br>benefício no agendamento, nos chame para saber mais! <b class="contador"><span class="contHora">00</span>:<span class="contMinuto">00</span>:<span class="contSegundo">00</span></b></p>
        </div>
    </div>
</div>

<section class="altura-banner banner-principal" style="background-image: url('<?= base_url(); ?>arquivos/assets/img/lps/exame/banner.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="texto-banner">
                    <h1>TEM ALGO ERRADO!</h1>
                    <p>Sim, isso mesmo. Tem algo errado. Hoje no Brasil <b>morrem mais de 100 pessoas POR HORA</b> de doenças silenciosas. Poderia ser eu, você ou pior, seus pais, seus avós, seus filhos. E tudo poderia ter sido evitado. Vamos contar um pouco mais como.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="icones-exames">
    <div class="container">
        <div class="barrinha-vermelha"></div>
        <div class="row">
            <div class="col-md-3 mb-3 text-center">
                <img src="<?= base_url(); ?>arquivos/assets/img/lps/exame/icone-1.png">
                <p>Você sabia que pessoas com doenças na boca têm mais <b>risco doenças cardíacas?</b></p>
            </div>
            <div class="col-md-3 mb-3 text-center">
                <img src="<?= base_url(); ?>arquivos/assets/img/lps/exame/icone-2.png">
                <p><b>A cada hora</b> mais de 16 pessoas morrem de problema cardíaco tratável no Brasil</p>
            </div>
            <div class="col-md-3 mb-3 text-center">
                <img src="<?= base_url(); ?>arquivos/assets/img/lps/exame/icone-3.png">
                <p><b>A cada minuto</b> morre uma pessoa por obesidade</p>
            </div>
            <div class="col-md-3 mb-3 text-center">
                <img src="<?= base_url(); ?>arquivos/assets/img/lps/exame/icone-4.png">
                <p><b>A cada meia hora</b> uma mulher descobre que têm câncer de útero no país</p>
            </div>
        </div>
        <div style="margin-top: 30px;" class="barrinha-vermelha"></div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="texto-maior">
                    <p><b>O que isso tem em comum?</b><br>Um exame básico de avaliação poderia identificar essas doenças logo no começo</p>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>

<section class="duvidas" style="background-image: url('<?= base_url(); ?>arquivos/assets/img/lps/exame/duvida.png');">
</section>

<section class="tabela">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3">
                <p class="azul">Nós da SOS Dr oferecemos esse serviço através do que chamamos de <br><span>CHECK UP EXPRESS</span></p>
                <p class="cinza">Se você entrar em contato <span>AGORA</span> conseguimos incluir:</p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 text-center">
                <img src="<?= base_url(); ?>arquivos/assets/img/lps/exame/tabela.png">
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>

<section class="preco">

    <div class="titulo">
        <p>De R$ 70,00 por GRATUITO</p>
    </div>

    <small>Essa semana estamos com uma oportunidade única no agendamento</small>

    <span class="dataExpira"><p class="contHora"></p><b>:</b><p class="contMinuto"></p><b>:</b><p class="contSegundo"></p></span>


</section>

<section class="btn-whats">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="centraliza-itens mt-5 mb-5">
                    <a class="pulsando" href="https://api.whatsapp.com/send?phone=5508005809771?&amp;text=Quero agendar um checkup express">
                        <img src="<?= base_url(); ?>arquivos/assets/img/lps/exame/icone-whats.png"> quero agendar check up express
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="doutor">
    <div class="row">
        <div class="col-md-8 cinza">
            <img src="<?= base_url(); ?>arquivos/assets/img/lps/exame/comentario.png">
            <p>O caso da dona Cecília é marcante! Ela descobriu que tinha diabetes nível 2 ao fazer um <b>exame de rotina gratuito na SOS.</b> Logo depois de descobrir, já conseguimos encaminhar ela para um médico adequado para que pudesse seguir o tratamento. Não sabemos o que poderia ter acontecido com ela se não tivesse descoberto logo no início!</p>
            <b style="float: right;">Dr. Farias</b>
        </div>
        <div class="col-md-4 azul">
            <img src="<?= base_url(); ?>arquivos/assets/img/lps/exame/medico.png">
        </div>
    </div>
</section>

<section class="especializada">
    <div class="container">
        <div class="row">
            <div class="col-md-6 brasil text-center centraliza-itens">
                <img src="<?= base_url(); ?>arquivos/assets/img/lps/exame/brasil.png">
            </div>
            <div class="col-md-6 descricao">
                <h3>Mas quem é a SOS Dr?</h3>
                <p>Somos a primeira rede de clínicas especializada em prevenção no Brasil!</p>
                <div class="icones">
                    <a href="https://www.facebook.com/sosdr.oficial" target="_blank">
                        <img src="<?= base_url(); ?>arquivos/assets/img/lps/exame/facebook.png">
                    </a>
                    <a href="https://www.instagram.com/sosdr.oficial/" target="_blank">
                        <img src="<?= base_url(); ?>arquivos/assets/img/lps/exame/insta.png">
                    </a>
                    <a href="mailto:contato@sosdr.com.br" target="_blank">
                        <img src="<?= base_url(); ?>arquivos/assets/img/lps/exame/email.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="azul-quem-somos">
        <div class="icones-quem-somos">
            <div class="container">
                <div class="row">
                    <div style="margin-bottom: 20px" class="col-md-3 col-sm-6 centraliza-itens">
                        <img src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/icone-1.png">
                    </div>
                    <div style="margin-bottom: 20px" class="col-md-3 col-sm-6 centraliza-itens">
                        <img src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/icone-2.png">
                    </div>
                    <div style="margin-bottom: 20px" class="col-md-3 col-sm-6 centraliza-itens">
                        <img src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/icone-3.png">
                    </div>
                    <div style="margin-bottom: 20px" class="col-md-3 col-sm-6 centraliza-itens">
                        <img src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/icone-4.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="midia-quem-somos">
            <div class="container">
                <div class="midia">

                    <div class="row">
                        <div style="margin-bottom: 40px" class="col-md-12">
                            <img class="titulo img-gente" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/sos-na-midia.png">
                            <p class="txt-gente" style="color: #27448b;margin-left: 20px;font-weight: 700;font-size: 25px;">#SOSNAMÍDIA</p>
                            <div class="row">
                                <div class="col-md-7"></div>
                                <div class="col-md-5">
                                    <!--                                <p style="margin-top: 10px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit non nulla in tempus.</p>-->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6"></div>
                        <div style="margin-bottom: 60px" class="col-md-3 col-sm-6">
                            <div class="card-midia">
                                <img class="img-anima" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/g1.png">
                                <p>Marília ganha centro médico moderno e com atendimento em diversas áreas da saúde ...</p>
                                <a href="https://g1.globo.com/sp/bauru-marilia/especial-publicitario/sos-dr/noticia/2018/09/06/marilia-ganha-centro-medico-de-especialidades-com-precos-acessiveis.ghtml">Leia mais</a>
                            </div>
                        </div>
                        <div style="margin-bottom: 60px" class="col-md-3 col-sm-6">
                            <div class="card-midia">
                                <img width="65%" class="" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/solutudo.png">
                                <p>“Impactar a vida das pessoas”: Irmãos criam espaço de saúde acessível em Marília ...</p>
                                <a href="https://conteudo.solutudo.com.br/marilia/onde-ir-marilia/impactar-a-vida-das-pessoas-irmaos-criam-espaco-de-saude-acessivel-em-marilia/">Leia mais</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6"></div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="btn-whats mt-whats">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="centraliza-itens mt-5 mb-5">
                    <a class="pulsando" target="_blank" href="https://api.whatsapp.com/send?phone=5508005809771?&amp;text=Quero agendar um checkup express">
                        <img src="<?= base_url(); ?>arquivos/assets/img/lps/exame/icone-whats.png"> quero agendar check up express
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Plugin OWL -->
<script src="https://sosdr.com/arquivos/plugins/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Plugin Aniview (Scroll Magic) -->
<!-- <script src="https://sosdr.com/arquivos/plugins/aniview/jquery.aniview.js"></script> -->

<!-- JavaScript -->
<script src='https://sosdr.com/arquivos/assets/js/mascara.js'></script>
<script src='https://sosdr.com/arquivos/assets/js/funcoes.js'></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Materialize -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>

    $(document).scroll(function () {
        var y = $(this).scrollTop();
        console.log(y)
        if (y >= 1900 && y <= 2500) {
            $('.contador-timer').fadeIn();
        } else {
            $('.contador-timer').fadeOut();
        }

    });

    setTimeout(function () {
        $(".ajuda-whats").css("bottom","0px");
    },5000);
</script>
<script>


    // Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2099 03:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        $(".contHora").html(hours);
        $(".contMinuto").html(minutes);
        $(".contSegundo").html(seconds);

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
<!-- JS Unico - referente a está pagina -->
<script type="text/javascript">

    // Scroll Magic
    // $('.aniview').AniView();


    $('.depoimentos-quem-somos').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

    $('#banner').owlCarousel({
        touchDrag  : false,
        mouseDrag  : false,
        loop: false,
        margin: 0,
        stagePadding: 0,
        nav: false,
        autoplay: false,
        items: 1,
    });

    // Slide depoimentos
    $('#depoimentos').owlCarousel({
        loop: true,
        margin: 0,
        stagePadding: 0,
        nav: false,
        autoplay: false,
        items: 3,
        responsive : {
            320 : {
                items: 1,
                nav: false
            },
            450 : {
                items: 1,
                nav: false
            },
            600 : {
                items: 2,
                nav: false
            },
            850 : {
                items: 2,
                nav: false
            },
            1440 : {
                items: 3
            }
        }
    });


    // Slide dicas
    $('#dicas').owlCarousel({
        loop: true,
        margin: 0,
        stagePadding: 0,
        nav: true,
        autoplay: true,
        items: 1,
    });

    // instagram
    var feed = new Instafeed({
        get: 'user',
        tagName: 'sosdr.oficial',
        target: 'instaImg',
        userId: '7447108373',
        clientId: '	f31c272b31974fc2848ff3ddadff98f5',
        accessToken: '7447108373.1677ed0.225d48ac24bb4927a4e504975b351b24',
        sortBy: 'most-recent',
        resolution: 'standard_resolution',
        limit: 5,
        template: '<img src="{{image}}" class="img-instagram" />'
    });
    feed.run();

    $("#dicas .owl-prev").html('<i class="fa fa-chevron-left" aria-hidden="true"></i>');
    $("#dicas .owl-next").html('<i class="fa fa-chevron-right" aria-hidden="true"></i>');

    // setTimeout(function(){
    //     btnAgenda('btnConsultaMedica','144');
    // },1000);


    /**
     *  ---------------------------------------
     *              ECONOMETRO
     *  ---------------------------------------
     */

    var valorExistente = 3185161.76;


    // Formata nomero com mascara de moeda
    function formatMoney(number, places, symbol, thousand, decimal) {
        places = !isNaN(places = Math.abs(places)) ? places : 2;
        symbol = symbol !== undefined ? symbol : "$";
        thousand = thousand || ",";
        decimal = decimal || ".";
        var negative = number < 0 ? "-" : "",
            i = parseInt(number = Math.abs(+number || 0).toFixed(places), 10) + "",
            j = (j = i.length) > 3 ? j % 3 : 0;
        return symbol + negative + (j ? i.substr(0, j) + thousand : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousand) + (places ? decimal + Math.abs(number - i).toFixed(places).slice(2) : "");
    }


    function econometro()
    {
        // Pega os minutos
        var minutos = "831871";
        var valorInicial = valorExistente;

        // Passa para int
        minutos = parseInt(minutos) * 60;
        minutos = minutos / 10;

        // Faz o calculo
        var valorAtual = valorInicial + (minutos * 1.01);

        valorExistente = parseFloat(valorAtual.toFixed(2));

        // Exibe
        $("#econometroVal").html(formatMoney(valorExistente, 2,"R$ ",".",","));
    }


    function econometroAumenta()
    {
        var valor = parseFloat(valorExistente);

        valor = valor + 1.01;
        valorExistente = parseFloat(valor.toFixed(2));

        // Exibe
        $("#econometroVal").html(formatMoney(valorExistente, 2,"R$ ",".",","));
    }


    econometro();
    setInterval(econometroAumenta, 10000);


</script>

<script>
    $(".img-anima").hover(function(){
        $(this).attr("src", function(index, attr){
            return attr.replace(".png", "-colorido.png");
        });
    }, function(){
        $(this).attr("src", function(index, attr){
            return attr.replace("-colorido.png", ".png");
        });
    });
</script>
<script>
    AOS.init();
</script>

</body>
</html>