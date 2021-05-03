<?php $this->load->view("default/site/include/header-lp"); ?>

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
        height: 260px;
    }
    @media only screen and (max-width: 425px) {
        #preco-img {
            padding: 40px 20px !important;
        }
    }
</style>

<!-- CONTADOR -->
<div class="contador-timer">
    <div class="container">
        <div class="col-md-12 centraliza-itens">
            <p>Oportunidade única! Essa semana estamos com um <br>benefício no agendamento, nos chame para saber mais! <b class="contador"></b></p>
        </div>
    </div>
</div>
<!-- FIM >> CONTADOR -->

<!-- Banner -->
<div class="bg-lp-cardiologia-secao-1" style="margin-top:70px;background-image: url('<?= base_url() ?>arquivos/assets/img/lp-psiquiatria/banner.png'); ">

    <div class="topo" style="position: relative">
        <div class="centraliza">
            <div class="col-2" style="margin-top: 100px; margin-right: 50px">
                <img style="width: 100px;margin-bottom: 50px;margin-top: -80px" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/logo.png"><br>
                <h1 style="color: white;font-size: 40px;">PROCURANDO<br>PSIQUIATRA?</h1><br>
                <h2 style="color: white">Se você chegou até aqui é porque algo em sua saúde está te preocupando.</h2><br>
                <h3 style="color: white;margin-right: 60px;">A partir de agora deixe conosco, que vamos cuidar de você e da sua saúde. Garantindo o melhor diagnóstico pelo menor preço!</h3><br>
                <br>
                <br>
                <div class="pulsando">
                    <a style="width: 300px;padding: 15px;font-size: 15px;background-color: white;border: 0px;border-radius: 10px;color: #7F1114;" class="animate__animated animate__pulse animate__infinite infinite" href="tel:+5508005809771"><img style="width: 20px; vertical-align: bottom;" src="<?= base_url(); ?>arquivos/assets/img/icone-telefone.png">  LIGUE AGORA PARA GANHAR! </a>
                </div>
                <br>
                <br>
                <br>
                <div class="pulsando">
                    <a style="width: 300px;padding: 15px;font-size: 15px;background-color: white;border: 0px;border-radius: 10px;color: #7F1114;" class="animate__animated animate__pulse animate__infinite infinite" href="https://wa.me/5508005809771"><img style="width: 20px; vertical-align: bottom;" src="<?= base_url(); ?>arquivos/assets/img/icone-whats.png">&nbsp;  CHAME NO WHATSAPP GANHAR! </a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

</div>

<!-- Depoimentos -->
<section style="background-color: #0095d9 !important; height: auto; padding-bottom: 25px" class="depoimentos">
    <div class="centraliza">

        <div class="owl-carousel owl-theme" id="depoimentos">


            <!-- Item 1 -->
            <div class="item">
                <div style="margin-top: 50px">
                    <div style="margin-bottom: -70px;"><img style="margin-left: 38%;border-radius: 50px; border: 5px solid white; width:85px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/sabrina.jpg"/></div>
                    <span><img style="margin-left: 35px; margin-bottom: 20px; width: 50px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/icone_depoimento.png"></span>
                    <div style="background-color: #EEEEEE; margin-top: -50px; margin-bottom: 50px; padding: 65px; border-radius: 10px; margin-right: 15px; margin-left: 15px;">
                        <div style="min-height: 200px" class="centraliza-itens">
                            <p style="text-align: center;font-weight: 600; color: #02428e;">Atendimento e ambientes excelentes. Super recomendo.</p>
                        </div>
                        <br>
                        <hr style="border-bottom: 5px solid #c8d4ed; width: 25%;">
                        <br>
                        <p style="font-size: 14px; text-align: center; text-transform: uppercase; font-weight: 600; color: #0095D9;">Sabrina Gasparini</p>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="item">
                <div style="margin-top: 50px">
                    <div style="margin-bottom: -70px;"><img style="margin-left: 38%;border-radius: 50px; border: 5px solid white; width:85px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/1.jpg"/></div>
                    <span><img style="margin-left: 35px; margin-bottom: 20px; width: 50px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/icone_depoimento.png"></span>
                    <div style="background-color: #EEEEEE; margin-top: -50px; margin-bottom: 50px; padding: 65px; border-radius: 10px; margin-right: 15px; margin-left: 15px;">
                        <div style="min-height: 200px" class="centraliza-itens">
                            <p style="text-align: center;font-weight: 600; color: #02428e;">Ambiente agradável e atendimento ágil, parabéns continuem assim.</p>
                        </div>
                        <br>
                        <hr style="border-bottom: 5px solid #c8d4ed; width: 25%;">
                        <br>
                        <p style="font-size: 14px; text-align: center; text-transform: uppercase; font-weight: 600; color: #0095D9;">Dulcelena Chaves Garcia</p>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="item">
                <div style="margin-top: 50px">
                    <div style="margin-bottom: -70px;"><img style="margin-left: 38%;border-radius: 50px; border: 5px solid white; width:85px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/joao.jpg"/></div>
                    <span><img style="margin-left: 35px; margin-bottom: 20px; width: 50px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/icone_depoimento.png"></span>
                    <div style="background-color: #EEEEEE; margin-top: -50px; margin-bottom: 50px; padding: 65px; border-radius: 10px; margin-right: 15px; margin-left: 15px;">
                        <div style="min-height: 200px" class="centraliza-itens">
                            <p style="text-align: center;font-weight: 600; color: #02428e;">Fantástica! Fui super bem atendido e muito ágil!</p>
                        </div>
                        <br>
                        <hr style="border-bottom: 5px solid #c8d4ed; width: 25%;">
                        <br>
                        <p style="font-size: 14px; text-align: center; text-transform: uppercase; font-weight: 600; color: #0095D9;">João Alves</p>
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="item">
                <div style="margin-top: 50px">
                    <div style="margin-bottom: -70px;"><img style="margin-left: 38%;border-radius: 50px; border: 5px solid white; width:85px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/1.jpg"/></div>
                    <span><img style="margin-left: 35px; margin-bottom: 20px; width: 50px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/icone_depoimento.png"></span>
                    <div style="background-color: #EEEEEE; margin-top: -50px; margin-bottom: 50px; padding: 65px; border-radius: 10px; margin-right: 15px; margin-left: 15px;">
                        <div style="min-height: 200px" class="centraliza-itens">
                            <p style="text-align: center;font-weight: 600; color: #02428e;">Amei a clínica tudo organizado, super atenciosos, médico então nem se fala. Vcs são ótimos. Sucesso sempre.</p>
                        </div>
                        <br>
                        <hr style="border-bottom: 5px solid #c8d4ed; width: 25%;">
                        <br>
                        <p style="font-size: 14px; text-align: center; text-transform: uppercase; font-weight: 600; color: #0095D9;">Cristiane Kotai</p>
                    </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="item">
                <div style="margin-top: 50px">
                    <div style="margin-bottom: -70px;"><img style="margin-left: 38%;border-radius: 50px; border: 5px solid white; width:85px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/1.jpg"/></div>
                    <span><img style="margin-left: 35px; margin-bottom: 20px; width: 50px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/icone_depoimento.png"></span>
                    <div style="background-color: #EEEEEE; margin-top: -50px; margin-bottom: 50px; padding: 65px; border-radius: 10px; margin-right: 15px; margin-left: 15px;">
                        <div style="min-height: 200px" class="centraliza-itens">
                            <p style="text-align: center;font-weight: 600; color: #02428e;">Atendimento Maravilhoso!!! Agilidade em todas as especialidades!!! Preço justo!!! Atendem até às 19h, que facilita para quem trabalha no comércio e/ou outras atividades!!! Parabéns S.O.S Dr.</p>
                        </div>
                        <br>
                        <hr style="border-bottom: 5px solid #c8d4ed; width: 25%;">
                        <br>
                        <p style="font-size: 14px; text-align: center; text-transform: uppercase; font-weight: 600; color: #0095D9;">Tânia Sueli Oliveira</p>
                    </div>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="item">
                <div style="margin-top: 50px">
                    <div style="margin-bottom: -70px;"><img style="margin-left: 38%;border-radius: 50px; border: 5px solid white; width:85px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/marcio.jpg"/></div>
                    <span><img style="margin-left: 35px; margin-bottom: 20px; width: 50px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/icone_depoimento.png"></span>
                    <div style="background-color: #EEEEEE; margin-top: -50px; margin-bottom: 50px; padding: 65px; border-radius: 10px; margin-right: 15px; margin-left: 15px;">
                        <div style="min-height: 200px" class="centraliza-itens">
                            <p style="text-align: center;font-weight: 600; color: #02428e;">Ótima clínica com preços acessíveis.</p>
                        </div>
                        <br>
                        <hr style="border-bottom: 5px solid #c8d4ed; width: 25%;">
                        <br>
                        <p style="font-size: 14px; text-align: center; text-transform: uppercase; font-weight: 600; color: #0095D9;">Marcio Bitencourte</p>
                    </div>
                </div>
            </div>


        </div>


    </div>

</section>

<!-- Preços -->
<div style="width: 100%;display: none">

    <div class="col-2">
        <div class="bg-preco-ginecologista" style="background-image: url('<?= base_url() ?>arquivos/assets/img/lp-psiquiatria/tabela.png');"></div>
        <div style="height: 300px;margin-bottom: 20px;margin-right: 10px;background-repeat: no-repeat;background-position: center;background-size: contain; background-image: url('<?= base_url() ?>arquivos/assets/img/lp-psiquiatria/bg-print.png');"></div>
    </div>

    <div class="col-2">
        <div style="height: 70px; background-color: #013575">
            <h2 class="text-align-center" style="color: white;padding: 15px;"></h2>
        </div>
        <div id="preco-img" style="height: auto; background-color: #02428e;padding: 80px; color: #ffffff;">
            <div class="img-preco-oftalmo" style="background-image: url('<?= base_url() ?>arquivos/assets/img/lp-psiquiatria/preco.png');"></div>
            <div style="width: 150%">
                <a style="width: 300px;padding: 15px;font-size: 15px;background-color: white;border: 0px;border-radius: 10px;color: #7F1114;" class="animated infinite pulse" href="tel:+5508005809771"><img style="width: 20px; vertical-align: bottom;" src="<?= base_url(); ?>arquivos/assets/img/icone-telefone.png">  LIGUE AGORA PARA AGENDAR! </a>
                <br>
                <br>
                <br>
                <a style="width: 300px;padding: 15px;font-size: 15px;background-color: white;border: 0px;border-radius: 10px;color: #7F1114;" class="animated infinite pulse" href="https://wa.me/5508005809771"><img style="width: 20px; vertical-align: bottom;" src="<?= base_url(); ?>arquivos/assets/img/icone-whats.png">&nbsp;  AGENDE AGORA MESMO! </a>
            </div>
        </div>
    </div>

</div>
<div class="clear"></div>

<!-- Icones -->
<div style="width: 100%; height: auto; background-color: #eeeeee">
    <div class="centraliza">
        <div class="centraliza-itens">
            <div style="margin-top: 30px; margin-bottom: 30px" class="col-4-icones">
                <img style=" width: 150px;" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-1.png"><br>
                <h2 style="font-size: 20px; color: #02428e;">Mais de<br>100.000<br>pacientes<br>atendidos.</h2>
            </div>
            <div style="margin-top: 30px; margin-bottom: 30px" class="col-4-icones">
                <img style=" width: 150px;" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-2.png"><br>
                <h2 style="font-size: 20px; color: #02428e;">Nota dada<br>por nossos<br>pacientes.<br><p style="font-size: 12px;">Fonte: pesquisa interna</p></h2>

            </div>
            <div style="margin-top: 30px; margin-bottom: 30px" class="col-4-icones">
                <img style=" width: 150px;" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-3.png"><br>
                <h2 style="font-size: 20px; color: #02428e;">Médicos com<br>experiência e<br>professores de<br>universidades.</h2>
            </div>
            <div style="margin-top: 30px; margin-bottom: 30px" class="col-4-icones">
                <img style=" width: 150px;" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-4.png"><br>
                <h2 style="font-size: 20px; color: #02428e;">Sem<br>Mensalidade.</h2>
            </div>
        </div>
    </div>
    <div class="centraliza">
        <div class="col-2"></div>
        <div class="col-2"></div>
    </div>
</div>
<div class="clear"></div>

<!-- Voce Sabia -->
<div style="width: 100%; display: none">

    <div class="col-2">
        <div style="height: auto; background-color: #0094d6">
            <h2 class="texto-voce-sabia">
                É importante ser consultado com um psiquiatria para cuidar da sua saúde mental. Você sabia que mais de 30 milhões de brasileiros sofrem de depressão e alguns nem sabem?
            </h2>
        </div>
    </div>
    <div class="col-2">
        <div style="height: auto; background-color: #ffffff">
            <h2 style="color: #013069;font-size: 18px; margin-top: 20px" class="texto-voce-sabia">
                Agende sua consulta agora mesmo,
                de forma rápida e prática, clicando
                no botão abaixo<br><br>
                <a href="https://wa.me/5508005809771" style="width: 200px;padding: 20px;font-size: 15px;background-color: #c20e1a;border: 0px;border-radius: 10px;color: #ffffff;" class="animated infinite pulse"> AGENDE JÁ! </a>

            </h2>
        </div>

    </div>

</div>
<div class="clear"></div>

<!-- Rodapé -->
<div style="width: 100%; height: auto; background-color: #013069">

    <div class="centraliza">

        <div style="height: auto; background-color: #013069">
            <div class="">
                <h2 style="padding: 50px 0px 50px 0px;" class="texto-voce-sabia">
                    Gostou e quer nos conhecer melhor?<p style="font-size: 22px; display: inline">Acesse nosso site!</p>
                    <a href="https://sosdr.com" class="btn-sos-dr"> SOSDR.COM </a>
                </h2>
            </div>
        </div>

        <hr style="border: 1px solid #27448a">

        <div style="margin-bottom: 30px; margin-top: 25px;height: auto; background-color: #013069">

            <div style="border-right: 1px solid #27448a" class="col-2">
                <a href="https://play.google.com/store/apps/details?id=com.optimizeit.sosdrap" target="_blank">
                    <img style="margin-right: 15px;margin-top: 25px;margin-bottom: 25px" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-app.png">
                </a>
                <a href="https://www.instagram.com/sosdr.oficial/" target="_blank">
                    <img style="margin-right: 15px;margin-top: 25px;margin-bottom: 25px" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-insta.png">
                </a>
                <a href="https://www.facebook.com/sosdr.oficial" target="_blank">
                    <img style="margin-right: 15px;margin-top: 25px;margin-bottom: 25px" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-face.png">
                </a>
            </div>

            <div>
                <a style="text-decoration: none;" href="https://wa.me/5508005809771">
                            <span>
                                <img style="width: 40px !important;" class="icones-contato" src="<?= base_url() ?>arquivos/assets/img/whats.png">
                                <p style="position: relative;top: -35px;display: inline; color: #ffffff;font-weight: bold;font-size: 30px;">0800 580 9771</p>
                            </span>
                </a>
            </div>

        </div>
        <div class="clear"></div>
    </div>

    <div style="display: none; width: 100%; height: auto; background-color: #013473;">
        <div class="centraliza-itens">
            <h2 style="padding: 50px 0px 50px 0px;" class="texto-voce-sabia">
                Rua Nove de Julho, 1397 - Unidade Marília
            </h2>
        </div>
    </div>

</div>
<div class="clear"></div>

<!-- Fixo -->
<div class="rodape-fixo" style="display: none; position: fixed;bottom: 0px;left: 0px;width: 100%;z-index: 99; background-color: #27448a">
    <div style="padding: 20px;margin-top: 10px;" class="centraliza-itens">
        <a href="https://wa.me/5508005809771" class="animated infinite pulse" style="width: 160px !important;padding: 17px !important;font-size: 13px !important;background-color: #c20e1a !important;border: 0px !important; border-radius: 10px !important;color: #ffffff !important;"> AGENDE JÁ! </a>
    </div>
</div>

    <style>

        .ajuda-whats
        {
            display: block;
            width: 100%;
            left: -30px;
            position: relative;
            border: 10px;
            bottom: -150px;
        }

        .img-mobile-whats
        {
            width: 300px;
            display: block;
            left: -10px;
            position: relative;
            background-color: #fff;
            border-radius: 15px;
            border: 5px solid #75e39e;
            text-align: center;
        }

        @media only screen and (max-width: 425px) {
            .btn-whats-fixo .mobile
            {
                display: none !important;
            }
            .img-mobile-whats
            {
                width: 85%;


                display: block;
                left: 10%;
                position: relative;
                background-color: transparent;
                border-radius: 0px;
                border: 0px;
                text-align: center;
            }
            .ajuda-whats
            {
                display: block;
                width: 90%;
                left: 22px;
                position: relative;
                background-color: #fff;
                border-radius: 60px;
                border: 5px solid #75e39e;
                text-align: center;
            }
        }

    </style>
    <div class="btn-whats-fixo" style="display:block; position: fixed;right: 20px;bottom: 30px;z-index: 99">

        <div class="ajuda-whats">
            <a href="https://api.whatsapp.com/send?phone=5508005809771" target="_blank">
                <img class="img-mobile-whats" src="<?= base_url(); ?>arquivos/assets/img/pop-up-whats.png">
            </a>
        </div>

        <a class="mobile" href="https://api.whatsapp.com/send?phone=5508005809771" target="_blank">
            <button style="background-color: #25D366;height: 50px;padding-bottom: 7px; width: 240px;color: #ffffff;font-weight: 800;font-size: 13px;border-radius: 15px; border: none;" formtarget="_blank">
                <img style="margin-bottom: -8px;" width="30px" src="<?= base_url(); ?>arquivos/assets/img/btn-whtas.png">&nbsp;FALAR NO WHATSAPP
            </button>
        </a>
    </div>
    <script>
        setTimeout(function () {
            $(".ajuda-whats").css("bottom","0px");
        },5000);
    </script>

<!-- Plugin OWL -->
<script src="<?= base_url(); ?>arquivos/plugins/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" defer></script>

<!-- Mascara -->
<script src="<?= base_url(); ?>arquivos/assets/js/mascara.js"></script>

<!-- JS Unico - referente a está pagina -->
<script type="text/javascript">

    $( document ).ready(function() {
        console.log( "ready!" );

        var data = new Date(),
            dia  = data.getDate()+1,
            mes  = data.getMonth() + 1,
            ano  = data.getFullYear(),
            hora = data.getHours(),
            minuto = data.getMinutes() + 10;

        console.log("dia:"+dia + " mes:"+ mes + " ano:" + ano)

        $(".contador").countdown(ano+"/"+mes+"/"+dia+" "+hora+":"+minuto+":00", function(event) {
            $(this).text( event.strftime('%H:%M:%S') );
        });

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
                items: 3,
                nav: false
            },
            1440 : {
                items: 3
            }
        }
    });

</script>
</body>
</html>