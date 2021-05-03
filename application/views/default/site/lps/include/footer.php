<!-- Econometro -->
<section class="econometro">
    <div class="centraliza">
        <h2>Econometro</h2>
        <p>Veja quanto os clientes da <b>SOS Dr</b> já economizaram.</p>
        <h4 id="econometroVal">Calculando...</h4>
    </div>
</section>

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
                <a style="text-decoration: none;" href="tel:551434334922">
                    <img class="icones-contato" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-fone.png">
                </a>
                <a style="text-decoration: none;" href="https://wa.me/5514981610303">
                    <img class="icones-contato" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-whats.png">
                </a>
            </div>

        </div>
        <div class="clear"></div>
    </div>

    <div style="width: 100%; height: auto; background-color: #013473; margin-bottom: 95px">
        <div class="centraliza-itens">
            <h2 style="padding: 50px 0px 50px 0px;" class="texto-voce-sabia">
                Rua Nove de Julho, 1397 - Unidade Marília
            </h2>
        </div>
    </div>

</div>
<div class="clear"></div>

<div class="rodape-fixo" style="position: fixed;bottom: 0px;left: 0px;width: 100%;z-index: 99; background-color: #27448a">
    <div style="padding: 20px" class="centraliza-itens">
        <button onclick="ModalLps('abre')" class="animated infinite pulse btn-agende-ja" style="width: 160px !important;padding: 17px !important;font-size: 13px !important;background-color: #c20e1a !important;border: 0px !important; border-radius: 10px !important;color: #ffffff !important;position: relative;left: -100px !important;"> AGENDE JÁ! </button>
    </div>
</div>


<!-- Plugin OWL -->
<script src="<?= base_url(); ?>arquivos/plugins/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

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