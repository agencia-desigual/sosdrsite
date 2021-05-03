<?php $this->load->view("default/site/include/header-lp"); ?>

<style>
    html
    {
        overflow-x: hidden;
    }

</style>

<!-- Banner -->
<div class="bg-lp-cardiologia-secao-1" style="background-image: url('<?= base_url() ?>arquivos/assets/img/lp-dermatologia/banner.png'); ">

    <div class="topo" style="position: relative">
        <div class="centraliza">
            <div class="col-2" style="margin-top: 100px; margin-right: 50px">
                <img style="width: 100px;margin-bottom: 50px;margin-top: -80px" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/logo.png"><br>
                <h1 style="color: white;font-size: 40px;">PROCURANDO<br>DERMATOLOGISTA?</h1><br>
                <h2 style="color: white">Se você chegou até aqui é porque algo em sua sáude está te preocupando.</h2><br>
                <h3 style="color: white;margin-right: 60px;">A partir de agora deixe conosco, que vamos cuidar de você e da sua sáude. Garantindo o melhor diagnóstico pelo menor preço!</h3><br>
                <a href="https://wa.me/5508005809771" style="margin-top:15px;width: 200px;padding: 20px;font-size: 15px;background-color: white;border: 0px;border-radius: 10px;color: #ee3e80;" class="animated infinite pulse"> AGENDE JÁ! </a>
            </div>
            <div class="clear"></div>
        </div>
    </div>

</div>



<!-- Depoimentos -->
<?php $this->load->view("default/site/lps/include/depoimentos"); ?>


<!-- Preços -->
<div style="width: 100%;">
    <div class="centraliza p-t-40 p-b-40">
       <div class="rolagem">
           <img src="<?= base_url() ?>arquivos/assets/img/lp-dermatologia/tabela.png" style="width: 1100px;" />
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
                O Instituto Nacional de Câncer (INCA) estima que para cada ano do
                biênio 2018/2019, sejam diagnosticados no Brasil 165.580 novos casos de
                câncer de pele. Altamente tratáveis quando descobertos precocemente.
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

</body>
</html>

