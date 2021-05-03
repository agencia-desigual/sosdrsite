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
            border-radius: 20px;
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
    </style>

    <!-- Capa de Serviços -->
     <section class="banner-geral" style="background-image: url('<?= base_url(); ?>arquivos/assets/img/bg/bg-ajuda.png');">
       <div class="centraliza text-align-center">
         <h1 class="titulo">Quer Algumas Dicas?</h1>

         <p class="subtitulo">
           Nós vamos te ajudar!
         </p>

         <a href="#pag_comeca" class="scroll">
           <i class="fas fa-angle-down"></i>
         </a>
       </div>
     </section>



     <section class="quer-ajuda p-t-80 p-b-80" id="pag_comeca">
         <div class="centraliza">

        <!-- VERIFICANDO SE TEM PUBLICAÇÃO EM DESTAQUE-->
         <?php if(!empty($destaques)): ?>

                 <!-- Destaques -->
                     <?php foreach ($destaques as $destaque) : ?>
                        <a href="<?= base_url(); ?>blog/<?= $destaque->url ?>">
                            <div class="col-2">
                         <div class="p-30">
                             <div class="item bg-cinza text-align-center bg-blog" style="background-image: url('<?= base_url() ?>arquivos/assets/img/blog/<?= $destaque->imagem ?>');">
                                 <div class="bg-opacity">
                                     <div style="text-align: left !important;">
                                         <h4 style="text-transform: uppercase; margin-top: 250px" class="color-branco size-20 m-l-20"><?= substr($destaque->titulo,0,25).'...'; ?></h4>
                                         <p style="text-transform: uppercase" class="color-cinza size-09 m-l-20 categoria">
                                             <?= substr($destaque->categoria,0,25).'...'; ?>
                                         </p>
                                         <p style="text-transform: inherit" class="color-branco size-09 m-l-20">
                                             <?= $destaque->resumo ?>...
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                        </a>
                     <?php endforeach; ?>
                     <div class="clear"></div>
                 <!-- Fim destaquies -->

                 <!-- Blog -->
                     <?php foreach ($blog as $item) : ?>
                        <a href="<?= base_url(); ?>blog/<?= $item->url ?>">
                            <div style="display: none" class="col-3">
                             <div class="p-30">
                                 <img class="img-blog" src="<?= base_url(); ?>arquivos/assets/img/blog/<?= $item->imagem ?>">
                                 <div style="min-height: 330px !important;" class="item bg-cinza text-align-center">
                                     <div style="text-align: left !important;">
                                         <h4 style="text-transform: uppercase; margin-top: 150px" class="color-azulEscuro size-20 m-l-20"><?= substr($item->titulo,0,25).'...'; ?></h4>
                                         <p style="text-transform: uppercase" class="color-cinza size-09 m-l-20 categoria">
                                             <?= substr($item->categoria,0,25).'...'; ?>
                                         </p>
                                         <p style="text-transform: inherit" class="color-azul size-09 m-l-20">
                                             <?= $item->resumo ?>...
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                            <div class="col-3">
                     <div class="p-30">
                         <div class="item bg-cinza text-align-center bg-blog" style="background-image: url('<?= base_url() ?>arquivos/assets/img/blog/<?= $item->imagem ?>');">
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

                 <!-- Fim Blog -->
         <?php else: ?>

             <?php foreach ($blog as $item) : ?>
                 <a href="<?= base_url(); ?>blog/<?= $item->url ?>">
                     <div style="display: none" class="col-3">
                         <div class="p-30">
                             <img class="img-blog" src="<?= base_url(); ?>arquivos/assets/img/blog/<?= $item->imagem ?>">
                             <div style="min-height: 330px !important;" class="item bg-cinza text-align-center">
                                 <div style="text-align: left !important;">
                                     <h4 style="text-transform: uppercase; margin-top: 150px" class="color-azulEscuro size-20 m-l-20"><?= substr($item->titulo,0,25).'...'; ?></h4>
                                     <p style="text-transform: uppercase" class="color-cinza size-09 m-l-20 categoria">
                                         <?= substr($item->categoria,0,25).'...'; ?>
                                     </p>
                                     <p style="text-transform: inherit" class="color-azul size-09 m-l-20">
                                         <?= $item->resumo ?>...
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-3">
                         <div class="p-30">
                             <div class="item bg-cinza text-align-center bg-blog" style="background-image: url('<?= base_url() ?>arquivos/assets/img/blog/<?= $item->imagem ?>');">
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

         <?php endif; ?>
        <!-- FIM DESTAQUE -->

         </div>
     </section>



    <?php $this->load->view("default/site/include/footer"); ?>

    </body>
  </html>
