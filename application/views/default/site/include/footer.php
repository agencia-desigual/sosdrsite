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
        .img-texto-pop-up
        {
            width: 85%;
        }
        .img-pop-up
        {
            width: 90%;
        }

        .btn-da-pop-up{
            width: 210px !important;
            top: -130px !important;
        }
    }

    .pulsando-texto {transform: scale(1);animation: pulse 5s infinite;}

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

</style>

<?php $url = $_SERVER['REQUEST_URI']; ?>

<?php if (strpos($url, '/blog') === false) : ?>

    <div class="btn-whats-fixo" style="display:none; position: fixed;right: 20px;bottom: 30px;z-index: 99">

        <div class="ajuda-whats">
            <a href="https://api.whatsapp.com/send?phone=5508005809771?&text=Gostaria de fazer um agendamento" target="_blank">
                <img class="img-mobile-whats" src="<?= base_url(); ?>arquivos/assets/img/pop-up-whats.png">
            </a>
        </div>

        <a class="mobile" href="https://api.whatsapp.com/send?phone=5508005809771?&amp;text=Gostaria de fazer um agendamento" target="_blank">
            <button class="pulsando" style="background-color: #25D366;height: 50px;padding-bottom: 7px;width: 240px;color: #ffffff;font-weight: 800;font-size: 13px;border-radius: 15px;border: none;margin: 0 auto;display: block;" formtarget="_blank">
                Fale sem custo com um atendente AGORA
            </button>
        </a>
    </div>

<?php else: ?>

    <div class="btn-whats-fixo" style="display:none; position: fixed;right: 20px;bottom: 30px;z-index: 99">

        <div class="ajuda-whats">
            <a href="https://api.whatsapp.com/send?phone=5508005809771?&text=Quero fazer um check up express" target="_blank">
                <img class="img-mobile-whats" src="<?= base_url(); ?>arquivos/assets/img/pop-up-whats.png">
            </a>
        </div>

        <a class="mobile" href="https://api.whatsapp.com/send?phone=5508005809771?&amp;text=Quero fazer um check up express" target="_blank">
            <button class="pulsando" style="background-color: #25D366;height: 50px;padding-bottom: 7px;width: 240px;color: #ffffff;font-weight: 800;font-size: 13px;border-radius: 15px;border: none;margin: 0 auto;display: block;" formtarget="_blank">
                Fale sem custo com um atendente AGORA
            </button>
        </a>
    </div>

<?php endif;?>

<!-- Footer -->
<footer>
  <div class="centraliza">

    <!-- Footer com a logo e Menu -->
    <div class="superior">
      <img src="<?= base_url(); ?>arquivos/assets/img/logos/branca.png" alt="Logo SOSDr" />

      <nav>
        <ul>
          <li><a href="<?= base_url(); ?>">Início</a></li>
          <li><a href="<?= base_url(); ?>quem-somos">Quem Somos</a></li>
          <li><a href="<?= base_url(); ?>unidades">Unidades</a></li>
<!--          <li><a href="--><?//= base_url(); ?><!--quer-ajuda">Quer Ajuda?</a></li>-->
          <li><a href="<?= base_url(); ?>trabalhe-conosco">Trabalhe Conosco</a></li>
          <li><a href="<?= base_url(); ?>contato">Contato</a></li>
        </ul>
      </nav>
    </div>

    <!-- Dados Juridicos -->
    <div class="inferior">
      <p>
        <a href="http://fb.com/sosdr.oficial" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href="https://instagram.com/sosdr.oficial" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://api.whatsapp.com/send?phone=5508005809771" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </br>
        </br>

        CNPJ: 30.044.102/0001-70 </br>
        TEL: 0800 580 9771 </br></br>

        CRM CLÍNICA 981695</br>
        CRM RT DRa. MARCIA NOBREGA  Nº 75.365</br>
        CROSP CL 19898</br>
          CRO RT EUNILDO BRESCIANI NETO Nº 139021</br></br>


        Copyright <?= date("Y"); ?> | SOSDr - Todos os direitos reservado.
      </p>

      <a href="http://desigual.com.br/" target="_blank">
        <img src="<?= base_url(); ?>arquivos/assets/img/desigual.png" class="desigual" alt="Desigual" />
      </a>

      <div class="clear"></div>
    </div>

  </div>
</footer>

<!-- Plugin OWL -->
<script src="<?= base_url(); ?>arquivos/plugins/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Plugin Aniview (Scroll Magic) -->
<!-- <script src="<?= base_url(); ?>arquivos/plugins/aniview/jquery.aniview.js"></script> -->

<!-- JavaScript -->
<script src='<?= base_url(); ?>arquivos/assets/js/mascara.js'></script>
<script src='<?= base_url(); ?>arquivos/assets/js/funcoes.js'></script>

<!-- Materialize -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<?php

        if (strpos($url, '/blog') === false)
        {
?>

            <script>
                setTimeout(function () {
                    $(".ajuda-whats").css("bottom","0px");
                },5000);
            </script>

<?php   } ?>


<!-- <script type="text/javascript">
  <?php if($this->session->logou == true): ?>

    Dados.token = "<?= $this->session->token ?>";
    Dados.loginUsuario = true;

  <?php else: ?>
    API_Autenticacao();
  <?php endif; ?>
</script> -->
