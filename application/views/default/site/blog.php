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


        /* Reset Select */
        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            appearance: none;
            outline: 0;
            box-shadow: none;
            border: 0 !important;
            background: #03428D;
            background-image: none;
        }
        /* Remove IE arrow */
        select::-ms-expand {
            display: none;
        }
        /* Custom Select */
        .select {
            position: relative;
            display: flex;
            width: 350px;
            height: 3em;
            line-height: 3;
            background: #03428D;
            overflow: hidden;
            border-radius: .25em;
            font-size: 15px;
            font-weight: bold;
        }
        select {
            flex: 1;
            padding: 0 .5em;
            color: #fff;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
        }
        /* Arrow */
        .select::after {
            content: '\25BC';
            position: absolute;
            top: 0;
            right: 0;
            padding: 0 1em;
            background: #004A9D;
            cursor: pointer;
            pointer-events: none;
            -webkit-transition: .25s all ease;
            -o-transition: .25s all ease;
            transition: .25s all ease;
        }
        /* Transition */
        .select:hover::after {
            color: #fff;
        }
        h4{ font-size: 1.5em; !important; }

    </style>

    <!-- Capa de Serviços -->
     <section class="banner-geral" style="background-image: url('<?= base_url(); ?>arquivos/assets/img/bg/bg-blog.png'); height: 130px; background-repeat: no-repeat; background-size: cover">
       <div class="centraliza text-align-center">
         <h1 class="titulo">Blog</h1>

         <p class="subtitulo">
           Notícias e dicas toda semana!
         </p>

       </div>
     </section>

     <section class="quer-ajuda p-t-80 p-b-80" id="pag_comeca">
         <div class="centraliza">

             <div class="row">
                 <div class="col-1" style="float: right;">
                     <div class="select">
                         <select id="filtroBlog" onchange="filtrarBlog()">
                                 <option style="text-transform: capitalize; font-weight: bold; font-size: 15px" value="todas">Selecione uma categoria</option>
                                 <option style="text-transform: capitalize; font-weight: bold; font-size: 15px" value="todas">Todas Publicação</option>
                             <?php foreach ($categorias as $categoria) : ?>
                                 <option style="text-transform: capitalize; font-weight: bold; font-size: 15px" value="<?= $categoria->categoria ?>"><?= $categoria->categoria ?></option>
                             <?php endforeach; ?>
                         </select>
                     </div>
                 </div>
                 <div class="clear"></div>
             </div>

        <!-- VERIFICANDO SE TEM PUBLICAÇÃO EM DESTAQUE-->
             <?php if ($filtro != null) : ?>

                 <!-- Filtro -->
                 <?php foreach ($filtro as $item) : ?>
                     <a href="<?= base_url(); ?>blog/<?= $item->url ?>">
                         <div class="col-3">
                             <div class="p-30">
                                 <div class="item bg-cinza text-align-center bg-blog" style="background-image: url('<?= base_url() ?>arquivos/assets/img/blog/<?= $item->imagem ?>');">
                                     <div class="bg-opacity">
                                         <div style="text-align: left !important;">
                                             <h4 style="text-transform: uppercase; margin-top: 250px" class="color-branco size-20 m-l-20"><?= $item->titulo ?></h4>
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
                 <!-- Fim filtro -->

             <?php else: ?>
                 <?php if(!empty($destaques)): ?>

                     <!-- Destaques -->
                     <?php foreach ($destaques as $destaque) : ?>
                         <a href="<?= base_url(); ?>blog/<?= $destaque->url ?>">
                             <div class="col-2">
                                 <div class="p-30">
                                     <div class="item bg-cinza text-align-center bg-blog" style="background-image: url('<?= base_url() ?>arquivos/assets/img/blog/<?= $destaque->imagem ?>');">
                                         <div class="bg-opacity">
                                             <div style="text-align: left !important;">
                                                 <h4 style="text-transform: uppercase; margin-top: 250px" class="color-branco size-20 m-l-20"><?= substr($destaque->titulo,0,20).'...'; ?></h4>
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
                                             <h4 style="text-transform: uppercase; margin-top: 150px" class="color-azulEscuro size-20 m-l-20"><?= substr($item->resumo,0,25).'...'; ?></h4>
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
             <?php endif; ?>
        <!-- FIM DESTAQUE -->

         </div>
     </section>



    <?php $this->load->view("default/site/include/footer"); ?>

    <script>
        function filtrarBlog() {
            var categoria = document.getElementById("filtroBlog").value;
            location.href = "http://sosdr.com.br/blog/?&categoria=" + categoria;
        }
    </script

    </body>
  </html>
