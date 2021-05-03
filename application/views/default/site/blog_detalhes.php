    <?php $this->load->view("default/site/include/header"); ?>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0&appId=320742601922640&autoLogAppEvents=1"></script>
    <style>

        .pulsando {

            transform: scale(1);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        .bg-blog-principal
        {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
            min-height: 300px;
        }
        .bg-blog
        {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
        }
        .bg-blog:hover
        {
            transform: scale(1.09);
            box-shadow: 10px 10px 25px 1px #898181;
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
            border-radius: 20px;
            margin-left: 5%;
            margin-bottom: -140px;
        }
        .categoria
        {
            background-color: #fff;
            padding: 3px 5px;
            font-size: 12px;
            font-weight: bold;
            color: #000;
            width: fit-content;
            border-radius: 20px;
            margin-bottom: 5px;
        }
        .bg-blog:hover .bg-opacity
        {
            background-color: rgba(0, 0, 0, 0.2);
        }
        .quer-ajuda img
        {
            max-width: 100% !important;
        }
        .quer-ajuda pre
        {
            white-space: break-spaces;
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .quer-ajuda p
        {
            white-space: break-spaces;
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>

    <!-- Capa de Serviços -->
     <section class="banner-geral bg-blog-principal" style="background-image: url('<?= base_url(); ?>arquivos/assets/img/blog/<?= $post[0]->imagem ?>');">
         <div class="bg-opacity centraliza-itens">
            <div class="centraliza text-align-center">
               <h1 class="titulo"><?= $post[0]->titulo ?></h1>

               <p class="subtitulo">
                   <?= $post[0]->categoria ?>
               </p>

               <a href="#pag_comeca" class="scroll">
                   <i class="fas fa-angle-down"></i>
               </a>
           </div>
         </div>
     </section>



     <section class="quer-ajuda p-t-80 p-b-80" id="pag_comeca">
         <div class="centraliza">
            <div style="text-align: justify;font-size: 17px">
                <?= $post[0]->descricao ?>
            </div>
             <div style="margin-top: 25px; margin-bottom: 25px;padding: 25px" class="centraliza-itens">
                 <div class="fb-comments" data-href="<?= base_url(); ?>blog/<?= $post[0]->url ?>" data-width="" data-numposts="100"></div>
             </div>
         </div>
     </section>


    <div class="btn-whats-fixo2" style="display:block; position: fixed;right: -35px;bottom: 30px;z-index: 99">

        <div class="ajuda-whats">
            <a href="https://api.whatsapp.com/send?phone=5508005809771?&text=Quero%20agendar%20um%20checkup%20express" target="_blank">
                <img class="img-mobile-whats" src="<?= base_url(); ?>arquivos/assets/img/pop-up-whats.png">
            </a>
        </div>

        <a class="mobile" href="https://api.whatsapp.com/send?phone=5508005809771?&text=Quero%20agendar%20um%20checkup%20express" target="_blank">
            <button class="pulsando" style="background-color: #25D366;height: 50px;padding-bottom: 7px; width: 240px;color: #ffffff;font-weight: 800;font-size: 13px;border-radius: 15px; border: none;" formtarget="_blank">
                Fale sem custo com especialista AGORA
            </button>
        </a>
    </div>

    <?php $this->load->view("default/site/include/footer"); ?>

    <style>

        .btn-whats-fixo
        {
            display: none !important;
        }

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

        .div-texto-preto
        {
            background-color: #000;
            position: relative;
            top: -190px;
            padding: 2px;
            width: 89%;
            left: 5%;
        }

        .btn-fechar-modal
        {
            position: relative;
            right: -40%;
            top: 35px;
        }

        .img-pop-up
        {
            height: 550px;
        }

        @media only screen and (max-width: 425px) {

            .btn-whats-fixo2
            {
                right: -16pc !important;
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
            .img-texto-pop-up
            {
                width: 85%;
            }
            .img-pop-up
            {
                width: 90%;
                height: auto;
            }

            .btn-da-pop-up{
                width: 300px !important;
                top: -130px !important;
            }

            .btn-fechar-modal
            {
                position: relative;
                right: -40%;
                top: 35px;
            }

            .div-texto-preto
            {
                background-color: #000;
                position: relative;
                top: -151px;
                padding: 6px;
                width: 87%;
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

    <div onclick="$('.pop-atencao').css('display','none')" class="pop-atencao centraliza-itens" style="z-index: 990;display: none;
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0px;
    opacity: 1;
    background-color: rgba(255, 255, 255, .5);
    -webkit-backdrop-filter: blur(1em);
    backdrop-filter: blur(1em);">

        <div style="z-index: 999;">
            <div class="btn-fechar-modal">
                <img src="<?= base_url(); ?>arquivos/assets/img/fechar.png">
            </div>
            <div style="width: 100%">
                <img class="img-pop-up" src="<?= base_url(); ?>arquivos/assets/img/pop-up.png"><br>
                <div class="div-texto-preto">
                    <img class="img-texto-pop-up" style="position: relative;width: 100%" src="<?= base_url(); ?>arquivos/assets/img/texto-baixo.png">
                </div>
                <div class="pulsando-texto">
                    <a class="mobile" href="https://api.whatsapp.com/send?phone=5508005809771?&text=Quero agendar um checkup express" target="_blank">
                        <button class="btn-da-pop-up" style="background-color: #25D366;
                    height: 50px;
                    padding-bottom: 7px;
                    width: 320px;
                    color: #ffffff;
                    font-weight: 800;
                    font-size: 16px;
                    border-radius: 15px;
                    border: none;
                    position: relative;
                    top: -160px;" formtarget="_blank">
                            Quero falar com um especialista sem custo
                        </button>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <?php

    $url = $_SERVER['REQUEST_URI'];

    if (strpos($url, '/blog') === false)
    {
        ?>

        <script>
            setTimeout(function () {
                $(".ajuda-whats").css("bottom","0px");
            },5000);
        </script>

    <?php   } else { ?>

        <script>
            if(sessionStorage.popupb != '' && sessionStorage.popupb != null && sessionStorage.popupb != undefined){
                $('.pop-atencao').css('display','none');
            }else {

                setTimeout(function () {
                    $('.pop-atencao').css('display','flex');
                    sessionStorage.setItem("popupb", "visitou");
                },15000)

            }
        </script>

    <?php  } ?>


    </body>
  </html>
