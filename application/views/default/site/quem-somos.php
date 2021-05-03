    <?php $this->load->view("default/site/include/header"); ?>
    <link rel="stylesheet" href="https://sosdr.com/arquivos/assets/css/bootstrap-grid.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .bg-blog
        {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
        }
        .bg-blog:hover
        {
            transition:  all 0.3s;

        }
        .bg-opacity
        {
            background-color: rgba(0, 0, 0, 0.6901960784313725);
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }
        .img-blog
        {
            width: 90%;
            margin-left: 5%;
            margin-bottom: -140px;
        }
        .categoria
        {
            border-radius: 25px;
            background-color: #fff;
            padding: 3px 5px;
            font-size: 12px;
            font-weight: bold;
            color: #000;
            width: fit-content;
            margin-bottom: 5px;
        }
        .bg-blog:hover .bg-opacity
        {
            background-color: rgba(0, 0, 0, 0.2);
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

        .text-right
        {
            text-align: right !important;
        }

        .banner-quem-somos
        {
            min-height: 650px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            margin-top: -20px;
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
            height: 5px;
            background-color: #cb3232;
            margin-bottom: 50px;
        }
        .icones-quem-somos
        {
            position: relative;
            top: -90px;
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

        @media (max-width: 425px)
        {
            .banner-quem-somos
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
            .banner-quem-somos
            {
                background-position-x: -470px;
            }

            .depoimentos
            {
                padding: 50px 0px;
            }
        }

        @media (max-width: 991px)
        {
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
        }
    </style>

    <section class="banner-quem-somos" style="background-image: url('<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/banner.png')"></section>

    <section class="nossa-historia">
        <div class="container">
            <div class="barrinha-vermelha"></div>
            <div class="row">
                <div class="col-md-6">
                    <h1>A NOSSA META É QUE OS SERVIÇOS DE SAÚDE DE QUALIDADE SEJAM ACESSÍVEIS A TODOS.</h1>
                    <p>A conscientização é a nossa principal bandeira e através dos nossos modernos Centros de Diagnóstico e Acompanhamento buscamos desafogar as UTI's, diminuindo assim os custos, tanto para o prestador quanto para o paciente, e consequentemente tornamos a saúde um serviço mais democrático.</p>
                </div>
                <div class="col-md-6">
                    <img data-aos="fade-down" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/cruz.png">
                </div>
            </div>
        </div>
    </section>

    <section class="icones-quem-somos">
        <div class="container">
            <div class="row">
                <div style="margin-bottom: 20px" class="col-md-3 col-sm-6 centraliza-itens">
                    <img data-aos="flip-up" data-aos-duration="3000" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/icone-1.png">
                </div>
                <div style="margin-bottom: 20px" class="col-md-3 col-sm-6 centraliza-itens">
                    <img data-aos="flip-up" data-aos-duration="3000" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/icone-2.png">
                </div>
                <div style="margin-bottom: 20px" class="col-md-3 col-sm-6 centraliza-itens">
                    <img data-aos="flip-up" data-aos-duration="3000" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/icone-3.png">
                </div>
                <div style="margin-bottom: 20px" class="col-md-3 col-sm-6 centraliza-itens">
                    <img data-aos="flip-up" data-aos-duration="3000" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/icone-4.png">
                </div>
            </div>
        </div>
    </section>

    <section data-aos="fade-up-right" data-aos-duration="2000" class="depoimentos">
        <div class="container">
            <div style="margin-bottom: 20px" class="row">
                <div class="col-md-8">
                    <img class="img-gente" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/gente-cuidando.png">
                    <p class="txt-gente" style="color: #ffff;margin-left: 20px;">É GENTE CUIDANDO DA GENTE</p>
                </div>
                <div class="col-md-4"></div>
            </div>

            <div class="depoimentos-quem-somos owl-carousel owl-theme">
                <div class="item">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="padding: 50px;">
                                <img class="img" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/depoimento-1.png">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div style="min-height: 300px" class="centraliza-itens">
                                <p style="text-align: left;font-size: 15px;">SOSDr e muito mais que um trabalho, e aprendizado e Amor ao proximo . O trabalho com responsabilidade, empenho, capacitação e amor nos direciona para a fidelização dos nossos clientes e para a conquista de novos. A SOSDr é uma empresa que nos incentiva,  dá suporte e permite que cada um de nós colaboradores possa construir sua própria história. Tenho muito orgulho de fazer parte desta empresa.  E mais a Sosdr proporciona um excelente desenvolvimento profissional a todos nós colaboradores Vivemos na SOSDr cada dia um novo desafio,  com qualidade, ver a  satisfação do cliente, do departamento e de si próprio. Esse senso de responsabilidade e cooperação entre todos da equipe é o que me motiva cada dia mais. São esses diferenciais que geram os bons resultados que apresentamos aos nossos clientes. <b>Gente cuidando de Gente!!!</b></p>
                            </div>
                            <h3>CLAUDINEI CÂNDIDO</h3>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="padding: 50px;">
                                <img class="img" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/depoimento-2.png">
                                <div class="barrinha"></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div style="min-height: 300px" class="centraliza-itens">
                                <p style="text-align: left;font-size: 15px;">Imagine acordar um dia e já se passaram 38 anos, sem perspectiva de realizar algo grandioso, que faça a diferença em sua vida e na vida dos outros, e de repente no meio dessa confusão mental uma luz se acende, uma oportunidade surge, e vc sente que essa é a oportunidade da sua vida, novos sonhos, novos anseios o desejo de crescer ressuscita, o nome dessa oportunidade é SOS DR, hoje sou apaixonada pelo que faço, passo mais tempo com essa família do que até mesmo com a minha família, o desejo de fazer com que essa empresa cresça cada vez mais me motiva todos os dias, comemoro cada vitória como um gol em uma final de campeonato, é emocionante a  cada conquista!! A SOS DR despertou todos os sentimentos lindos e verdadeiros, e tenho certeza que Irei desfrutar de muitos outros sentimentos de gratidão e satisfação por fazer parte de uma empresa que cuida de pessoas em um momento tão difícil. Gente cuidando de gente essa é a minha nova missão 💙 </p>
                            </div>
                            <h3>RENATA</h3>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="padding: 50px;">
                                <img class="img" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/depoimento-3.png">
                                <div class="barrinha"></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div style="min-height: 300px" class="centraliza-itens">
                                <p style="text-align: left;font-size: 15px;">Trabalhar na sos dr, é algo que realmente mudou na minha vida. Antes eu trabalhava em lugares que não valorizavam os pacientes de forma humana e aqui, eu vejo uma preocupação maior, um interesse maior pelo ser humano que entra pela porta. E o melhor de tudo é ver o reconhecimento dos pacientes, a satisfação e o sorriso no rosto em que eles vão embora! Obrigada a toda equipe sos dr pelo apoio e companheirismo! </p>
                            </div>
                            <h3>DRA MARIA LAURA</h3>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="padding: 50px;">
                                <img class="img" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/depoimento-5.png">
                                <div class="barrinha"></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div style="min-height: 300px" class="centraliza-itens">
                                <p style="text-align: left;font-size: 15px;">Ser sos é ter certeza de cuidar bem das pessoas e ser bem cuidado, é valorizar e ser valorizado, é colocar as pessoas acima de números e contas, é simplesmente ser humano. Uma honra e alegria trabalhar nessa empresa</p>
                            </div>
                            <h3>JOÃO</h3>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="padding: 50px;">
                                <img class="img" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/depoimento-6.png">
                                <div class="barrinha"></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div style="min-height: 300px" class="centraliza-itens">
                                <p style="text-align: left;font-size: 15px;">Trabalhar na SOS é sonhar com um futuro melhor e torná-lo possível através de esforço e carinho. É plantar gentileza e desabrochar sorrisos. É atender com excelência, cuidar de quem precisa e ser feliz por ajudar. É gente cuidando de gente. 💙 </p>
                            </div>
                            <h3>ANA JULIA</h3>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="padding: 50px;">
                                <img class="img" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/depoimento-7.png">
                                <div class="barrinha"></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div style="min-height: 300px" class="centraliza-itens">
                                <p style="text-align: left;font-size: 15px;">SOS Dr♥️É uma honra imensurável fazer parte dessa equipe que tanto admiro. Que possamos continuar exercendo nossa função com todo amor, excelência, simplicidade, carinho e foco, sempre. Na SosDr aprendi que as oportunidades são como uma escada, onde sempre temos que subir degrau um de cada vez sem perder o foco, sendo humilde, tendo empatia e sempre gente cuidando de gente. Gratidão SOS Dr ❤️ </p>
                            </div>
                            <h3>FRANCIELE</h3>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="padding: 50px;">
                                <img class="img" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/depoimento-8.png">
                                <div class="barrinha"></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div style="min-height: 300px" class="centraliza-itens">
                                <p style="text-align: left;font-size: 15px;">Trabalhar na SOS DR é aprendizado e transformação constante...  É gratificante ver vidas sendo transformadas por nosso trabalho! Tenho muito orgulho em fazer parte da Primeira clínica DO BRASIL especializada em saúde preventiva! Gratidão pela oportunidade de engrenar minha carreira em uma empresa humana, é acreditar e lutar  é possível conquistar nossos  sonhos e desejos  a vontade de sempre + percorre a nosso sangue azul   que não só prega como realmente demonstra, por meio de seus valores e ação, que somos gente cuidando de gente! 💙 </p>
                            </div>
                            <h3>LETÍCIA</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="midia-quem-somos">
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
                    <div data-aos="zoom-in" data-aos-duration="2000" style="margin-bottom: 60px" class="col-md-3 col-sm-6">
                        <div class="card-midia">
                            <img class="img-anima" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/g1.png">
                            <p>Marília ganha centro médico moderno e com atendimento em diversas áreas da saúde ...</p>
                            <a href="https://g1.globo.com/sp/bauru-marilia/especial-publicitario/sos-dr/noticia/2018/09/06/marilia-ganha-centro-medico-de-especialidades-com-precos-acessiveis.ghtml">Leia mais</a>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="2000" style="margin-bottom: 60px" class="col-md-3 col-sm-6">
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
    </section>

    <section class="info-quem-somos">
        <div class="row">
            <div class="col-md-6 azul">
                <img data-aos="fade-up-right" data-aos-duration="2000" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/bg-1.png">
            </div>
            <div class="col-md-6 valores">
                <img data-aos="zoom-out-left" data-aos-duration="2000" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/valores.png">
            </div>
        </div>
    </section>
    <section style="display: none" class="info-quem-somos-mobile">
        <div class="container">
            <div class="row">
                <div class="col-md-6 azul">
                    <img data-aos="fade-up-right" data-aos-duration="2000" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/bg-1.png">
                </div>
                <div class="col-md-6 valores">
                    <img data-aos="zoom-out-left" data-aos-duration="2000" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/valores.png">
                </div>
            </div>
        </div>
    </section>

    <section class="blog-quem-somos" style="background-image: url('<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/bg-blog.png')">
        <div class="container">
            <div class="row">
                <div style="padding: 50px" class="col-md-5">
                    <h2 style="margin-top: 110px">Compartilhar conhecimento é a melhor forma de prevenção</h2>
                    <a href="https://sosdr.com/blog">Conheça nosso Blog</a>
                </div>
            </div>
        </div>
    </section>

    <section class="rodape-quem-somos">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img data-aos="fade-up" data-aos-duration="3000" width="100%" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/elementos.png">
                </div>
                <div class="col-md-4 text-right">
                    <h3>Quer nos conhecer melhor?</h3>
                    <p>Acesse nossos canais de comunicação</p>
                    <a href="https://www.facebook.com/sosdr.oficial" target="_blank">
                        <img style="width: 40px; margin-right: 5px" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/icone-face.png">
                    </a>
                    <a href="https://www.instagram.com/sosdr.oficial/" target="_blank">
                        <img style="width: 40px; margin-right: 5px" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/icone-instagram.png">
                    </a>
                    <a href="mailto:contato@sosdr.com.br">
                        <img style="width: 40px; margin-right: 5px" src="<?= base_url(); ?>arquivos/assets/img/nova-quem-somos/icone-email.png">
                    </a>
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
        setTimeout(function () {
            $(".ajuda-whats").css("bottom","0px");
        },5000);
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