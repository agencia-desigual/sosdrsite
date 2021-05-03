<?php $this->load->view("default/site/include/header-lp"); ?>
<style>
    html
    {
        overflow-x: hidden;
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
<div class="bg-lp-cardiologia-secao-1" style="margin-top:70px;background-image: url('<?= base_url() ?>arquivos/assets/img/lp-ortopedia/banner.png'); ">

    <div class="topo" style="position: relative">
        <div class="centraliza">
            <div class="col-2" style="margin-top: 100px; margin-right: 50px">
                <img style="width: 100px;margin-bottom: 50px;margin-top: -80px" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/logo.png"><br>
                <h1 style="color: white;font-size: 40px;">PROCURANDO<br>ORTOPEDISTA?</h1><br>
                <h2 style="color: white">Se você chegou até aqui é porque algo em sua sáude está te preocupando.</h2><br>
                <h3 style="color: white;margin-right: 60px;">A partir de agora deixe conosco, que vamos cuidar de você e da sua sáude. Garantindo o melhor diagnóstico pelo menor preço!</h3><br>
                <br>
                <br>
                <div class="pulsando">
                    <a style="width: 300px;padding: 15px;font-size: 15px;background-color: white;border: 0px;border-radius: 10px;color: #7F1114;" href="tel:+5508005809771"><img style="width: 20px; vertical-align: bottom;" src="<?= base_url(); ?>arquivos/assets/img/icone-telefone.png">  LIGUE AGORA PARA GANHAR! </a>
                </div>
                <br>
                <br>
                <br>
                <div class="pulsando">
                    <a style="width: 300px;padding: 15px;font-size: 15px;background-color: white;border: 0px;border-radius: 10px;color: #7F1114;" class="pulsando" href="https://wa.me/5508005809771"><img style="width: 20px; vertical-align: bottom;" src="<?= base_url(); ?>arquivos/assets/img/icone-whats.png">&nbsp;  CHAME NO WHATSAPP GANHAR! </a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

</div>


<!-- Depoimentos -->
<?php $this->load->view("default/site/lps/include/depoimentos"); ?>


<!-- Preços -->
<div style="width: 100%;display: none">
    <div class="centraliza p-t-40 p-b-40">
       <div class="rolagem">
           <img src="<?= base_url() ?>arquivos/assets/img/lp-ortopedia/tabela.png" style="width: 100%;" />
           <div style="height: 300px;margin-bottom: 20px;margin-right: 10px;background-repeat: no-repeat;background-position: center;background-size: contain; background-image: url('<?= base_url() ?>arquivos/assets/img/lp-ortopedia/bg-print.png');"></div>
       </div> 
    </div>
</div>
<div class="clear"></div>

<!-- Icones -->
<?php $this->load->view("default/site/lps/include/icones"); ?>


<!-- Voce Sabia -->
<div style="width: 100%;">

    <div class="col-2">
        <div style="height: auto; background-color: #0094d6">
            <h2 class="texto-voce-sabia">
                A ortopedia se dedica a correção de traumas e deformidades do aparelho
                musculoesquelético. Portanto, o tratamento não adequado pode levar a sequelas
                físicas irreversíveis.
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
<div class="rodape-fixo" style="display:none;position: fixed;bottom: 0px;left: 0px;width: 100%;z-index: 99; background-color: #27448a">
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

<!-- Mascara -->
<script src="<?= base_url(); ?>arquivos/assets/js/mascara.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" defer></script>

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

        console.log("dia:"+dia+ " mes:"+ mes + " ano:"+ ano+ " hora: "+hora+" minuto: "+minuto)

        if (minuto >= 60)
        {
            hora++;
            minuto = 5;
        }

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

</body>
</html>

