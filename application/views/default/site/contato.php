    <?php $this->load->view("default/site/include/header"); ?>

    <!-- Capa de Serviços -->
     <section class="banner-geral" style="background-image: url('<?= base_url(); ?>arquivos/assets/img/bg/bg-contato.png');">
       <div class="centraliza text-align-center">
         <h1 class="titulo">Quer trocar uma ideia?</h1>

         <p class="subtitulo">
           Preencha corretamente o formulário </br>
           nos campos indicados e mande sua dúvida </br>
           ou sugestão para a SOS Dr. </br></br>
           Assim que possível daremos um retorno!
         </p>

         <a href="#pag_comeca" class="scroll">
           <i class="fas fa-angle-down"></i>
         </a>
       </div>
     </section>


     <section class="trabalhe-conosco p-t-80 p-b-80 bg-cinza" id="pag_comeca">
       <div class="centraliza">
         <form id="form_contato">

           <div class="row">
             <label>Nome</label>
             <input type="text" name="nome" />
           </div>

           <div class="row">
             <label>E-mail</label>
             <input type="email" name="email" />
           </div>


           <div class="row">
             <div class="col-2">
               <div class="p-r-10">
                 <label>Celular</label>
                 <input type="tel" name="celular" id="campoCelular" />
               </div>
             </div>

             <div class="col-2">
               <div class="p-l-10">
                 <label>Selecione o canal</label>
                 <div class="select">
                   <select name="setor">
                     <option value="Reclamações">Reclamações</option>
                     <option value="Sugestões">Sugestões</option>
                     <option value="Franquias">Franquias</option>
                     <option value="Duvidas">Dúvidas</option>
                     <option value="Outros">Outros</option>
                   </select>
                   <i class="fas fa-arrow-circle-down"></i>
                 </div>
               </div>
             </div>
           </div>

           <div class="row">
                 <div class="col-1">
                     <div class="">
                         <label>Selecione a unidade</label>
                         <div class="select">
                             <select name="unidade">
                                 <option selected disabled>Selecione</option>

                                 <?php foreach ($unidades as $unidade) :  ?>
                                     <option value="<?= $unidade->id_unidades ?>"><?= $unidade->nome ?></option>
                                 <?php endforeach; ?>

                             </select>
                             <i class="fas fa-arrow-circle-down"></i>
                         </div>
                     </div>
                 </div>
             </div>

           <div class="row">
             <label>Mensagem</label>
             <textarea name="mensagem" rows="7" cols="70"></textarea>
           </div>


           <div class="row text-align-center">
             <button type="submit" id="btn_envia" class="btn-azul">Enviar</button>
           </div>

         </form>
       </div>
     </section>


    <?php $this->load->view("default/site/include/footer"); ?>

    </body>
  </html>
