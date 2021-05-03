<?php $this->load->view("default/site/include/header-lp"); ?>

<!-- Banner -->
<div class="bg-lp-cardiologia-secao-1" style="background-image: url('<?= base_url() ?>arquivos/assets/img/lp-endocrinologista/banner.png'); ">

    <div class="topo" style="position: relative">
        <div class="centraliza">
            <div class="col-2" style="margin-top: 100px; margin-right: 50px">
                <img style="width: 100px;margin-bottom: 50px;margin-top: -80px" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/logo.png"><br>
                <h1 style="color: white;font-size: 40px;">PROCURANDO<br>ENDOCRINOLOGISTA?</h1><br>
                <h2 style="color: white">Se você chegou até aqui é porque algo em sua sáude está te preocupando.</h2><br>
                <h3 style="color: white;margin-right: 60px;">A partir de agora deixe conosco, que vamos cuidar de você e da sua sáude. Garantindo o melhor diagnóstico pelo menor preço!</h3><br>
                <button onclick="ModalLps('abre')" style="width: 200px;padding: 20px;font-size: 15px;background-color: white;border: 0px;border-radius: 10px;color: #782B90;" class="animated infinite pulse"> AGENDE JÁ! </button>
            </div>
            <div class="clear"></div>
        </div>
    </div>

</div>

<!-- Depoimentos -->
<?php $this->load->view("default/site/lps/include/depoimentos"); ?>

<!-- Preços -->
<div style="width: 100%;">

    <div class="col-2">
        <div style="height: 70px; background-color: #dae8ee">
            <h2 class="text-align-center" style="color: #0094d6;padding: 15px;">PREÇO BRASIL*:</h2>
        </div>
        <div style="height: auto; background-color: #ffffff">
            <div style="padding: 25px; margin-bottom: 30px;margin-top: 10px" class="centraliza">
                <div class="col-2"><h3 style="color: #013575" class="text-align-center">Consulta</h3></div>
                <div class="col-2"><h3 style="color: #c20e1a" class="text-align-center">R$350,00</h3></div>
            </div>
            <hr style="margin-left: 80px;margin-right: 80px;margin-top: 20px;">
            <div style="padding: 25px; margin-bottom: 30px;margin-top: 10px" class="centraliza">
                <div class="col-2"><h3 style="color: #013575" class="text-align-center">TSH</h3></div>
                <div class="col-2"><h3 style="color: #c20e1a" class="text-align-center">R$90,00</h3></div>
            </div>
            <hr style="margin-left: 80px;margin-right: 80px;margin-top: 20px;">
            <div style="padding: 25px; margin-bottom: 30px;margin-top: 10px" class="centraliza">
                <div class="col-2"><h3 style="color: #013575" class="text-align-center">Perfil Lipídico</h3></div>
                <div class="col-2"><h3 style="color: #c20e1a" class="text-align-center">...</h3></div>
            </div>
            <hr style="margin-left: 80px;margin-right: 80px;margin-top: 20px;">
            <div style="padding: 25px; margin-bottom: 30px;margin-top: 10px" class="centraliza">
                <div class="col-2"><h3 style="color: #013575" class="text-align-center">Glicemia</h3></div>
                <div class="col-2"><h3 style="color: #c20e1a" class="text-align-center">...</h3></div>
            </div>
            <hr style="margin-left: 80px;margin-right: 80px;margin-top: 20px;">
            <div style="padding: 25px; margin-bottom: 30px;margin-top: 10px" class="centraliza">
                <div class="col-2"><h3 style="color: #013575" class="text-align-center">Retorno</h3></div>
                <div class="col-2"><h3 style="color: #c20e1a" class="text-align-center">R$350,00</h3></div>
            </div>
            <div class="clear"></div>
            <div style="padding: 25px" class="centraliza-itens">
                <div style="background-color: #c20e1a;height: auto;padding: 10px;width: 250px;border-radius: 25px;">
                    <div class="col-2"><h3 style="color: #ffffff;margin-top: 10px;margin-bottom: 10px;" class="text-align-center">Total</h3></div>
                    <div class="col-2"><h3 style="color: #ffffff;margin-top: 10px;margin-bottom: 10px;" class="text-align-center">R$ </h3></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="col-2">
        <div style="height: 70px; background-color: #013575">
            <h2 class="text-align-center" style="color: white;padding: 15px;">PREÇO SOS DR.:</h2>
        </div>
        <div style="height: auto; background-color: #02428e;padding: 80px; color: #ffffff;">
            <h1>Consulta</h1>
            <h1>+TSH</h1>
            <h1>+Perfil Lipídico</h1>
            <h1>+Glicemia</h1>
            <h1>+Retorno</h1>
            <div class="img-preco-oftalmo" style="background-image: url('<?= base_url() ?>arquivos/assets/img/lp-endocrinologista/btn.png');"></div>
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
                O INCA estima que para cada ano sejam diagnosticados 9.610 novos
                casos de câncer de tireoide, sendo que o diagnóstico precoce garante
                altos índices de cura.
            </h2>
        </div>
    </div>
    <div class="col-2">
        <div style="height: auto; background-color: #ffffff">
            <h2 style="color: #013069;font-size: 18px; margin-top: 20px" class="texto-voce-sabia">
                Agende sua consulta agora mesmo,
                de forma rápida e prática, clicando
                no botão abaixo<br><br>
                <button onclick="ModalLps('abre')" style="width: 200px;padding: 20px;font-size: 15px;background-color: #c20e1a;border: 0px;border-radius: 10px;color: #ffffff;" class="animated infinite pulse"> AGENDE JÁ! </button>

            </h2>
        </div>

    </div>

</div>
<div class="clear"></div>

<!-- footer -->
<?php $this->load->view("default/site/lps/include/footer"); ?>

</body>
</html>

