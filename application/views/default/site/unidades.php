    <?php $this->load->view("default/site/include/header"); ?>

    <!-- Capa de Serviços -->
     <section class="banner-geral" style="background-image: url('<?= base_url(); ?>arquivos/assets/img/bg/bg-ajuda.png');padding: 30px 0px;">
       <div class="centraliza text-align-center">
         <h1 class="titulo">Unidades</h1>

         <p class="subtitulo">
           Conheça nossas unidades
         </p>

           <div class="row">
               <form id="form_consulta">
                   <div class="input">
                       <select style="width: 50%;height: 40px;border-radius: 15px;border: 0px;margin-top: 20px" name="busca" id="unidades">
                           <option disabled="" selected="" value="">Selecione a unidade</option>
                           <?php if (!empty($unidades)) : ?>
                                <?php foreach ($unidades as $unidade) : ?>
                                   <option value="<?= $unidade->id_unidades ?>"><?= $unidade->nome ?></option>
                               <?php endforeach; ?>
                           <?php endif; ?>
                       </select>
                   </div>
               </form>

               <div class="clear"></div>
           </div>
       </div>
     </section>

    <?php if (!empty($unidades)) : ?>

    <section class="quer-ajuda p-t-80 p-b-80" id="pag_comeca">
       <div class="centraliza">

               <?php foreach ($unidades as $unidade) : ?>
                   <div class="col-3 unidade<?= $unidade->id_unidades ?> fecha" style="display: block">
                       <div class="p-30">
                           <div style="min-height: 200px" class="item bg-cinza text-align-center centraliza-itens">
                               <div>
                                   <img style="margin-bottom: 15px;" width="100%" src="<?= $unidade->imagem ?>" />
                                   <h4 class="color-azulEscuro size-12 p-b-30"><?= $unidade->nome ?></h4>
                                   <p style="text-align: left" class="color-cinza size-09">
                                       <?= $unidade->cep ?>
                                   </p>
                                   <p style="text-align: left" class="color-cinza size-09">
                                       <?= $unidade->cidade ?> - <?= $unidade->estado ?>
                                   </p>
                                   <p style="text-align: left" class="color-cinza size-09">
                                    <?= $unidade->endereco ?> N°<?= $unidade->numero ?>
                                   </p>
                                   <p style="text-align: left" class="color-cinza size-09">
                                       <?= $unidade->telefone ?>
                                   </p>
                                   <p style="text-align: left" class="color-cinza size-09">
                                       <?= $unidade->referencia ?>
                                   </p>
                               </div>
                           </div>
                       </div>
                   </div>
               <?php endforeach; ?>

         <div class="clear"></div>
       </div>
     </section>

    <?php endif; ?>




    <?php $this->load->view("default/site/include/footer"); ?>

    <script>

        var a = 0;

        $("#unidades").on("change",function () {

            var id = $(this).val();

            $('.fecha').css("display","none");

            $('.unidade'+id).css("display","block");
        });

    </script>

    </body>
  </html>
