<?php $this->load->view("default/site/include/header-lp"); ?>

<!-- Banner -->
<div class="bg-lp-cardiologia-secao-1" style="background-image: url('<?= base_url() ?>arquivos/assets/img/lp-dermatologia/banner.png'); ">

    <div class="topo" style="position: relative">
        <div class="centraliza">
            <div class="col-2" style="margin-top: 100px; margin-right: 50px">
                <img style="width: 100px;margin-bottom: 50px;margin-top: -80px" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/logo.png"><br>
                <h1 style="color: white;font-size: 40px;">PROCURANDO<br>DERMATOLOGISTA?</h1><br>
                <h2 style="color: white">Se você chegou até aqui é porque algo em sua sáude está te preocupando.</h2><br>
                <h3 style="color: white;margin-right: 60px;">A partir de agora deixe conosco, que vamos cuidar de você e da sua sáude. Garantindo o melhor diagnóstico pelo menor preço!</h3><br>
                <button onclick="ModalLps('abre')" style="width: 200px;padding: 20px;font-size: 15px;background-color: white;border: 0px;border-radius: 10px;color: #ee3e80;" class="animated infinite pulse"> AGENDE JÁ! </button>
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

