<?php $this->load->view("default/site/include/header"); ?>
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

<!-- Modal -->
<div class="modalServicos centraliza-itens" id="modalHome">
    <div class="bloco">
        <button class="fecha" onclick="ModalHome('fecha')">
            <img src="<?= base_url(); ?>arquivos/assets/img/btn-close.png" alt="Botão Fecha" />
        </button>


        <h3 id="txtTitulo">Exames, Odontologia e Consultas.</h3>
        <p style="text-align: center" id="txtDescricao">Nos chame no whatsapp para saber mais.</p>
        <p style="text-align: center;font-size: 20px; font-weight: bold; color: #01E675;" id="txtDescricao"> <img style="width: 25px; vertical-align: text-top; margin-right: 5px;" src="<?= base_url(); ?>arquivos/assets/img/whatsapp.png">0800 580 9771</p>
        <br>
        <a href="https://api.whatsapp.com/send?phone=5508005809771" target="_blank">
            <button style="background-color: #01E675;height: 50px; width: 190px;color: #ffffff;font-weight: 800;font-size: 13px;border-radius: 15px; border: none;" formtarget="_blank">FALAR NO WHATSAPP</button>
        </a>


        <!-- <a href="#" id="link">
          <button class="agenda">AGENDAR</button>
        </a> -->
    </div>

    <div class="fundoPreto" onclick="ModalHome('fecha')"></div>
</div>

<!-- Banner -->
<div class="conteudo-banner">
    <section class="owl-carousel owl-theme banner" id="banner">
        <div class="item s1">
            <div class="centraliza text-align-center">
                <p class="titulo">
                    <b>Centros de Saúde Preventiva</b><br>atendendo a saúde como um todo.
                </p>

                <p class="subtitulo">
                    Ligue <b style="font-size: 1.7em;"><a href="tel:+5508005809771" style="color: #fff;">0800 580 9771</a></b> <br> para agendar agora mesmo.
                </p>

                <div style="display:none">
                    <div id="consultas">

                        <!-- BTNS -->
                        <div class="row">

                            <div class="btn selecionado" id="btnConsultaMedica">
                                <p>
                                    <span></span>
                                    Consultas
                                </p>
                            </div>

                            <div class="btn" id="btnConsultaOdontologica" onclick="Abre('odontologia','consultas','exames')">
                                <p>
                                    <span></span>
                                <p class="ativoPC">Odontologia</p>
                                <p class="ativoCEL">Odonto</p>
                                </p>
                            </div>

                            <div class="btn" id="btnExames" onclick="Abre('exames','consultas','odontologia')">
                                <p>
                                    <span></span>
                                    Exames
                                </p>
                            </div>

                        </div>

                        <!-- SELECT CONSULTAS -->
                        <div class="row">
                            <form id="form_consulta">
                                <div class="input">
                                    <select name="busca" id="campoBusca">
                                        <option disabled selected value="">Selecione a área</option>
                                        <?php foreach ($consultas as $consulta): ?>
                                            <option value="<?= $consulta->nome ?>"><?= $consulta->nome ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    <i class="fas fa-arrow-circle-down"></i>
                                </div>

                                <button type="button" onclick="ModalAgendaExame('abre',$('#campoBusca').val())" id="btn_age">AGENDAR</button>
                            </form>
                            <!--                      <div id="carregando" style="display: none;">-->
                            <!--                          <img src="--><?//= base_url(); ?><!--arquivos/assets/img/carregando-branco.svg" alt="Carregando" />-->
                            <!--                      </div>-->

                            <div class="clear"></div>
                        </div>

                    </div>

                    <div style="display: none;" id="odontologia">

                        <!-- BTNS -->
                        <div class="row">

                            <div class="btn" id="btnConsultaMedica"  onclick="Abre('consultas','odontologia','exames')">
                                <p>
                                    <span></span>
                                    Consultas
                                </p>
                            </div>

                            <div class="btn selecionado" id="btnConsultaOdontologica" onclick="Abre('odontologia','consultas','exames')">
                                <p>
                                    <span></span>
                                <p class="ativoPC">Odontologia</p>
                                <p class="ativoCEL">Odonto</p>
                                </p>
                            </div>

                            <div class="btn" id="btnExames" onclick="Abre('exames','consultas','odontologia')">
                                <p>
                                    <span></span>
                                    Exames
                                </p>
                            </div>

                        </div>

                        <!-- SELECT CONSULTAS -->
                        <div class="row">
                            <form id="form_consulta">
                                <div class="input">
                                    <select name="busca" id="campoBuscaOdonto">
                                        <option disabled selected value="">Selecione a área</option>
                                        <?php foreach ($odontologia as $odonto): ?>
                                            <option value="<?= $odonto->nome ?>"><?= $odonto->nome ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    <i class="fas fa-arrow-circle-down"></i>
                                </div>

                                <button type="button" onclick="ModalAgendaExame('abre',$('#campoBuscaOdonto').val())" id="btn_age">AGENDAR</button>
                            </form>
                            <div id="carregando" style="display: none;">
                                <img src="<?= base_url(); ?>arquivos/assets/img/carregando-branco.svg" alt="Carregando" />
                            </div>

                            <div class="clear"></div>
                        </div>

                    </div>

                    <div style="display: none;" id="exames">

                        <!-- BTNS -->
                        <div class="row">

                            <div class="btn" id="btnConsultaMedica"  onclick="Abre('consultas','odontologia','exames')">
                                <p>
                                    <span></span>
                                    Consultas
                                </p>
                            </div>

                            <div class="btn" id="btnConsultaOdontologica" onclick="Abre('odontologia','consultas','exames')">
                                <p>
                                    <span></span>
                                <p class="ativoPC">Odontologia</p>
                                <p class="ativoCEL">Odonto</p>
                                </p>
                            </div>

                            <div class="btn selecionado" id="btnExames" onclick="Abre('exames','consultas','odontologia')">
                                <p>
                                    <span></span>
                                    Exames
                                </p>
                            </div>

                        </div>

                        <!-- SELECT CONSULTAS -->
                        <div class="row">
                            <form id="form_consulta">
                                <div class="input">
                                    <select name="busca" id="campoBuscaExame">
                                        <option disabled selected value="">Selecione a área</option>
                                        <?php foreach ($exames as $exame): ?>
                                            <option value="<?= $exame->nome ?>"><?= $exame->nome ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    <i class="fas fa-arrow-circle-down"></i>
                                </div>

                                <button type="button" onclick="ModalAgendaExame('abre',$('#campoBuscaExame').val())" id="btn_age">AGENDAR</button>
                            </form>
                            <div id="carregando" style="display: none;">
                                <img src="<?= base_url(); ?>arquivos/assets/img/carregando-branco.svg" alt="Carregando" />
                            </div>

                            <div class="clear"></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div style="display: none" class="item s2">
            <div class="centraliza text-align-left">
                <div class="texto">
                    <h1>
                        Sabia que você pode <b>Não estar emagrecendo</b>
                        por fatores hormonais?
                    </h1>

                    <div class="cor">
                        <h3>Em breve teremos <br>um presente para você!</h3>
                    </div>

                    <h6>
                        Aproveite nossa campanha de endocrino para conhecer como
                        o seu corpo funciona e descobrir a melhor forma de
                        emagrecer.
                    </h6>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Econometro -->
<section class="econometro">
    <div class="centraliza">
        <h2>Econômetro</h2>
        <p>Veja quanto nossos pacientes já economizaram se prevenindo</p>
        <h4 id="econometroVal">Calculando...</h4>
    </div>
</section>

<!-- Icones -->
<section class="icones">
    <div class="centraliza text-align-center aniview" data-av-animation="fadeIn">

        <div class="col-3">
            <img src="<?= base_url(); ?>arquivos/assets/img/icones/coracao.png" alt="Coração" />
            <h4>De bem com você</h4>
            <p>O seu bem-estar é nossa </br> maior preocupação.</p>
        </div>

        <div class="col-3">
            <img src="<?= base_url(); ?>arquivos/assets/img/icones/pessoas.png" alt="Pessoas" />
            <h4 style="color: #7ec1ad;">SAÚDE PREVENTIVA</h4>
            <p>Muitos problemas podem ser facilmente prevenidos com a realização de exames preventivos.</p>
        </div>

        <div class="col-3">
            <img src="<?= base_url(); ?>arquivos/assets/img/icones/saude.png" alt="Saude" />
            <h4 style="color: #d5652c;">Policlínica</h4>
            <p>Diversas especialidades </br> em um só lugar.</p>
        </div>

        <div class="clear"></div>
    </div>
</section>

<!-- Colsutas -->
<section style="background-color: white; height: 800px; width: 100%">

    <div class="centraliza">
        <h3 style="font-size: 2.5em;line-height: 1em;font-weight: bold;padding: 70px 0px 50px;color: #03428D;text-align: center;">Prevenir diminui 90% o risco de casos mais graves.<br>Agende seu atendimento o quanto antes!</h3>

        <div class="col-2" style="padding-bottom: 80px;">
            <h3 style="font-size: 1.3em;line-height: 1em;font-weight: bold;padding: 25px 0px 25px;color: #03428D;text-align: left;">Consultas</h3>

            <?php for ($i=0; $i<=4; $i++): ?>

                <div class="div-servicos-consultas">
                    <img class="img-servicos-consulta" src="<?=  base_url(); ?>arquivos/assets/img/icones/servicos/site/<?= $consultas[$i]->imagem?>">
                    <h3 class="titulo-servicos-consulta"><?= $consultas[$i]->nome?></h3>
                    <div class="centraliza-itens">
                        <span style="display: block">
                            <a onclick="ModalAgendaExame('abre','<?= $consultas[$i]->nome?>')"><button class="btn-servicos-consultas-telefone">AGENDAR TELEFONE</button></a>
                        </span>
                    </div>
                </div>

            <?php endfor; ?>

            <a href="<?= base_url(); ?>servicos/consultas-medicas"><button class="btn-servicos-consultas-especialidades">+ CONSULTAS</button></a>
        </div>

        <div class="col-2">
            <h3 style="font-size: 1.3em;line-height: 1em;font-weight: bold;padding: 25px 0px 25px;color: #03428D;text-align: left;">Exames</h3>

            <?php for ($i=0; $i<=1; $i++): ?>

                <div class="div-servicos-consultas">
                    <img class="img-servicos-consulta" src="<?=  base_url(); ?>arquivos/assets/img/icones/servicos/site/<?= $exames[$i]->imagem?>">
                    <h3 class="titulo-servicos-consulta"><?= $exames[$i]->nome?></h3>
                    <div class="centraliza-itens">
                        <span style="display: block">
                            <a href="https://api.whatsapp.com/send?l=pt_BR&amp;phone=5508005809771&amp;text=Olá! Vi no site que vocês atendem <?= $exames[$i]->nome?> e gostaria de agendar um horário" target="_blank"><button class="btn-servicos-consultas-telefone">AGENDAR PELO WHATSAPP</button></a>
                        </span>
                    </div>
                </div>

            <?php endfor; ?>


            <a href="<?= base_url(); ?>servicos/exames-diversos"><button class="btn-servicos-consultas-exames">+ EXAMES</button></a>

            <h3 style="margin-top:50px;font-size: 1.3em;line-height: 1em;font-weight: bold;padding: 25px 0px 25px;color: #03428D;text-align: left;">Odontologia</h3>

            <?php for ($i=0; $i<=1; $i++): ?>

                <div class="div-servicos-consultas">
                    <img class="img-servicos-consulta" src="<?=  base_url(); ?>arquivos/assets/img/icones/servicos/site/<?= $odontologia[$i]->imagem?>">
                    <h3 class="titulo-servicos-consulta"><?= $odontologia[$i]->nome?></h3>
                    <div class="centraliza-itens">
                        <span style="display: block">
                            <a onclick="ModalAgendaExame('abre','<?= $odontologia[$i]->nome ?>')"><button class="btn-servicos-consultas-telefone">AGENDAR TELEFONE</button></a>
                            <!--                            <a href="https://sosdr.com/agendamento/1993" target="_blank"><button class="btn-servicos-consultas-online">AGENDAR ONLINE</button></a>-->
                        </span>
                    </div>
                </div>

            <?php endfor; ?>

            <a href="<?= base_url(); ?>servicos/consultas-odontologicas"><button style="margin-bottom: 50px;" class="btn-servicos-consultas-odonto">+ ODONTOLOGIA</button></a>
        </div>

    </div>

</section>

<!-- Aplicativo -->
<section style="display: none" class="aplicativo">
    <div class="centraliza">

        <div class="col-2 divCelular aniview" data-av-animation="fadeInLeft">
            <img src="<?= base_url(); ?>arquivos/assets/img/celular.png" class="celular" alt="Celular" />
        </div>

        <div class="col-2 aniview" data-av-animation="fadeIn">
            <div class="texto">
                <h3>
                    Tá no app, </br>
                    Tá na mão.
                </h3>

                <p>
                    Baixe o <b>app grátis</b> e tenha </br>
                    na mão os serviços SOS Dr
                </p>

                <!-- <a href="#">
              <img src="<?= base_url(); ?>arquivos/assets/img/botoes/apple.png" alt="Aple Store" />
            </a> -->

                <a href="https://play.google.com/store/apps/details?id=com.optimizeit.sosdrap" target="_blank">
                    <img src="<?= base_url(); ?>arquivos/assets/img/botoes/play-store.png" alt="Google Play" />
                </a>
            </div>
        </div>

        <div class="clear"></div>
    </div>
</section>

<!-- Agenda! -->
<section class="agenda bg-cinza text-align-center">
    <div class="centraliza">
        <h2 class="color-azulEscuro size-20 p-b-40">O que gostaria de agendar?</h2>

        <div class="col-3">
            <div class="centraliza">
                <a href="<?= base_url(); ?>servicos/consultas-medicas">
                    <button style="background-color: #27448b;">Consulta médica</button>
                </a>
                <p>
                    Confira todas as nossas áreas.
                </p>
            </div>
        </div>

        <div class="col-3">
            <div class="centraliza">
                <a href="<?= base_url(); ?>servicos/consultas-odontologicas">
                    <button style="background-color: #0094d6;">Consulta odontológica</button>
                </a>
                <p>
                    Confira todos os nossos procedimentos odontológicos.
                </p>
            </div>
        </div>

        <div class="col-3">
            <div class="centraliza">
                <a href="<?= base_url(); ?>servicos/exames-diversos">
                    <button style="background-color: #7ec1ad;">Exames</button>
                </a>
                <p>
                    Exames laboratoriais e de imagem para você.
                </p>
            </div>
        </div>

        <div class="clear"></div>
    </div>
</section>

<!-- Blog -->
<section class="quer-ajuda" id="pag_comeca">

    <div class="agenda bg-cinza text-align-center">
        <div class="centraliza">
            <h2 class="color-azulEscuro size-20 p-b-40">Confira nossas dicas para se cuidar diariamente!</h2>

            <div class="centraliza-itens">
                <div>
                    <a href="<?= base_url(); ?>blog">
                        <button style="width: 100%;padding: 20px 0px;border: 0px;border-radius: 10px;background-color: #0094d9;color: #fff;font-size: 1.3em; width: 300px;margin-top: -25px; margin-bottom: -25px;">Ver todas</button>
                    </a>
                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>

    <?php foreach ($blog as $item) : ?>
        <a href="<?= base_url(); ?>blog/<?= $item->url ?>">
            <div class="col-4">
                <div>
                    <div class="item bg-cinza text-align-center bg-blog" style="background-image: url('<?= base_url() ?>arquivos/assets/img/blog/<?= $item->imagem ?>');border-radius: 0px;">
                        <div class="bg-opacity">
                            <div style="text-align: left !important;">
                                <h4 style="text-transform: uppercase; margin-top: 250px" class="color-branco size-20 m-l-20"><?= substr($item->titulo,0,25).'...'; ?></h4>
                                <p style="text-transform: uppercase" class="color-cinza size-09 m-l-20 categoria">
                                    <?= substr($item->categoria,0,25).'...'; ?>
                                </p>
                                <p style="text-transform: inherit" class="color-branco size-09 m-l-20">
                                    <?= $item->resumo ?>...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
    <div class="clear"></div>
</section>

<?php $this->load->view("default/site/include/footer"); ?>

<!-- JS Unico - referente a está pagina -->
<script type="text/javascript">

    // Scroll Magic
    // $('.aniview').AniView();


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
        var minutos = "<?= $minutos; ?>";
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
</body>
</html>