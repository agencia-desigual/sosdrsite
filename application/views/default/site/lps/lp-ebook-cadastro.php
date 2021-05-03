<?php $this->load->view("default/site/include/header-lp"); ?>
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '603745110434037');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=603745110434037&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->
<title>SOSDR - SABIA QUE VOCÊ PODE NÃO ESTAR EMAGRECENDO</title>
<style>
    html
    {
        overflow-x: hidden;
    }
    .fundo-escuro{
        height: 100vh;
        width: 100%;
        background-color: #35134ce3;
        opacity: 1;
        position: fixed;
        z-index: 99999999;
    }
    .conteudo{
        height: 300px;
        width: 400px;
        background-color: #fff;
        border-radius: 50px;
        padding: 50px;
    }
    .conteudo p {
        text-align: left;
        font-size: 23px;
        font-weight: bold;
        color: #7229a6;
    }
</style>

<div class="fundo-escuro centraliza-itens" style="display: inline-flex">
    <div class="conteudo">
        <p>DIGITE O CÓDIGO QUE ENVIAMOS POR SMS PARA O SEU CELULAR</p>
<!--        <img onclick="$('.fundo-escuro').css('display','none')" style="position: relative; top: -80px; right: -215px;" src="--><?//= base_url(); ?><!--arquivos/assets/img/lp-ebook/close.png">-->
        <br>
        <br>
        <form id="formCodigo">
            <h1 class="label-form" style="text-align: left">Código</h1>
            <input class="input-form" style="" type="text" name="codigo" required>
            <p id="condigo-invalido" style="display: none;color: red; text-align: center">Código inválido tente novamente</p>

            <button id="btn_confirma" type="submit" class="btn-download-lp" style="padding: 25px;">CONFIRMAR</button>
            <button onclick="(location.href='https://sosdr.com/arquivos/download/ebook.pdf')" id="btn_ebook" type="submit" class="btn-download-lp" style="padding: 25px;display: none; background-color: #FF14A9;">BAIXAR E-BOOK</button>
        </form>
    </div>
</div>

<!-- Banner -->
<div class="bg-lp-cardiologia-secao-1" style="height: auto !important;background: linear-gradient(to right, rgba(137,63,186,1) 0%, rgba(161,43,157,1) 48%, rgba(215,45,153,1) 100%);">

    <div class="topo" style="position: relative">
        <div class="centraliza">
            <div class="col-2" style="margin-top: 100px;">
                <img style="width: 100px;margin-bottom: 50px;margin-top: -80px" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/logo.png"><br>
                <h1 style="color: white;font-size: 40px;font-weight: 400;">
                    SABIA QUE VOCÊ<br>
                    PODE <b>NÃO ESTAR</b><br>
                    <b>EMAGRECENDO</b><br>
                    POR FATORES<br>
                    HORMONAIS<br>
                </h1>
                <br>
                <h2 style="color: white; font-weight: 400; font-size: 20px">
                    A SOS DR. TEM UM PRESENTE PARA VOCÊ
                </h2><br>
                <h3 style="color: white;margin-right: 60px;">
                    UM LIVRO COM INFORMAÇÕES <br> E DICAS SOBRE EMAGRECIMENTO.
                </h3><br>
                <img width="300px" src="<?= base_url(); ?>arquivos/assets/img/lp-ebook/preco.png">
                <br>
                <h1 style="color: white;font-size: 40px;font-weight: 400;margin-bottom: 50px">
                    <b>INDIQUE UM</b><br>
                    <b>AMIGO E GANHE</b><br>
                </h1>
            </div>
            <div class="col-2" style="margin-top: 50px;">
                <form id="formEbook">
                    <div class="centraliza">
                        <div class="espaco-branco-form">
                            <div class="linha">
                                <div class="espaco-titulo">
                                    <span style="padding: 10px" class="centraliza-itens">
                                      <img style="display: inline;width: 35px;" src="<?= base_url(); ?>arquivos/assets/img/lp-ebook/book.png"><p style="color: #7229a6;display: inline;font-weight: bold;font-size: 1.1em; margin-left: 15px">PREENCHA E BAIXE AGORA MESMO</p>
                                    </span>
                                </div>
                            </div>

                            <!-- CAMPOS DO FORM -->
                            <div class="espaco-form">
                                <p class="label-form">SEU NOME</p>
                                <input class="input-form" style="" type="text" name="nome" required>

                                <br>
                                <br>

                                <p class="label-form">SEU CELULAR</p>
                                <input class="input-form celular" type="tel" name="celular" required>

                                <br>
                                <br>

                                <p class="label-form">NOME DO SEU AMIGO</p>
                                <input class="input-form" type="text" name="nomeAmigo" required>

                                <br>
                                <br>

                                <p class="label-form">CELULAR DO SEU AMIGO</p>
                                <input class="input-form celular" type="tel" name="celularAmigo">

                                <button id="btn_download" type="submit" class="btn-download-lp">FAZER DOWNLOAD!</button>

                            </div>

                        </div>
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>

</div>

<!-- Rodapé -->
<div style="width: 100%; height: auto; background-color: #7229a6">

    <div class="centraliza">

        <div style="height: auto; background-color: #7229a6">
            <div class="">
                <h2 style="padding: 50px 0px 50px 0px;" class="texto-voce-sabia">
                    Gostou e quer nos conhecer melhor?<p style="font-size: 22px; display: inline">Acesse nosso site!</p>
                    <a style="background-color: #ffdd33 !important; color: #7229A6 !important;" href="https://sosdr.com" class="btn-sos-dr"> SOSDR.COM </a>
                </h2>
            </div>
        </div>

        <hr style="border: 1px solid #803faf">

        <div style="margin-bottom: 30px; margin-top: 25px;height: auto; background-color: #7229a6">

            <div style="border-right: 1px solid #803faf" class="col-2">
                <a href="https://www.instagram.com/sosdr.oficial/" target="_blank">
                    <img style="margin-right: 15px;margin-top: 25px;margin-bottom: 25px" src="<?= base_url() ?>arquivos/assets/img/lp-ebook/icone-insta.png">
                </a>
                <a href="https://www.facebook.com/sosdr.oficial" target="_blank">
                    <img style="margin-right: 15px;margin-top: 25px;margin-bottom: 25px" src="<?= base_url() ?>arquivos/assets/img/lp-ebook/icone-face.png">
                </a>
            </div>

            <div>
                <a style="text-decoration: none;" href="tel:551434334922">
                    <img class="icones-contato" src="<?= base_url() ?>arquivos/assets/img/lp-ebook/icone-fone.png">
                </a>
                <a style="text-decoration: none;" href="tel:5514981610303">
                    <img class="icones-contato" src="<?= base_url() ?>arquivos/assets/img/lp-ebook/icone-whats.png">
                </a>
            </div>

        </div>
        <div class="clear"></div>
    </div>

    <div style="background-color: #ffdd33; width: 100%">
        <div class="centraliza">
            <div class="linha">
                <div class="col-2 text-left">
                    <h2 style="padding: 20px 0px 20px 0px; color: #7229a6; font-size: 13px" class="texto-voce-sabia">
                        *Promoção válida até 31/12/2019.
                    </h2>
                </div>
                <div class="col-2 text-align-right">
                    <h2 style="padding: 20px 0px 20px 0px; color: #7229a6; font-size: 15px" class="texto-voce-sabia">
                        Rua Nove de Julho, 1397 - Unidade Marília
                    </h2>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

</div>
<div class="clear"></div>

<!-- Plugin OWL -->
<script src="<?= base_url(); ?>arquivos/plugins/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

<!-- JavaScript -->
<script src='<?= base_url(); ?>arquivos/assets/js/mascara.js'></script>
<script src='<?= base_url(); ?>arquivos/assets/js/funcoes.js'></script>

</body>
</html>
