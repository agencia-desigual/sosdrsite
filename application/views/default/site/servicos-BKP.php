    <?php $this->load->view("default/site/include/header"); ?>

    <style type="text/css">
      .modalServicos .bloco p.txtPreco,
      .modalServicos .bloco #txtDescricao.txtPreco
      {
        text-align: center;
        font-size: 2.5em;
        font-weight: bold;
        color: #ef2d30;
      }
    </style>

    <!-- Modal -->
    <div class="modalServicos centraliza-itens" id="modalServicos">
      <div class="bloco">
        <button class="fecha" onclick="ModalServico('fecha')">
          <img src="<?= base_url(); ?>arquivos/assets/img/btn-close.png" alt="Botão Fecha" />
        </button>


        <h4 id="txtTitulo">Titulo Teste</h4>
        <p id="txtDescricao">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
          sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <!-- <a href="#" id="link">
          <button class="agenda">AGENDAR</button>
        </a> -->
      </div>

      <div class="fundoPreto" onclick="ModalServico('fecha')"></div>
    </div>


    <!-- Modal Exame -->
    <div class="modalServicos centraliza-itens" id="modalAgenda">
      <div class="bloco">
        <button class="fecha" onclick="ModalAgendaExame('fecha')">
          <img src="<?= base_url(); ?>arquivos/assets/img/btn-close.png" alt="Botão Fecha" />
        </button>


        <h4 id="txtTituloExame">Titulo Teste</h4>
        <p style="text-align: center; padding-top: 20px;">
          Para realizar o agendamento ligue:

          <span style="display: block; font-size: 1.7em; padding-top: 5px; color: #0094d6; font-weight: bold;">
            (14) 3433-4922
          </span>
        </p>

      </div>

      <div class="fundoPreto" onclick="ModalAgendaExame('fecha')"></div>
    </div>



    <!-- Capa de Serviços -->
     <section class="servicos capa" style="background-image: url('<?= base_url(); ?>arquivos/assets/img/bg/<?= $capa; ?>');">
       <div class="centraliza text-align-center">
         <h1 class="titulo"><?= $titulo; ?></h1>

         <p class="subtitulo"><?= $descricao; ?></p>

         <div class="input">
           <!-- <form id="form_busca"> -->
             <input type="text" name="busca" onkeyup="buscaServico(this.value)" placeholder="Pesquise por nome ou sinônimo" />
             <button class="centraliza-itens">
               <i class="fas fa-search"></i>
             </button>
           <!-- </form> -->
         </div>

         <a href="#pag_comeca" class="scroll">
           <i class="fas fa-angle-down"></i>
         </a>
       </div>
     </section>


     <!-- Itens -->
     <section class="servicos itens" id="pag_comeca">
      <div class="centraliza">

        <div id="itensServicos"></div>

        <div id="carregando">
          <img src="<?= base_url(); ?>arquivos/assets/img/carregando.svg" alt="Carregando" />
        </div>

        <div class="clear"></div>

      </div>
     </section>



    <?php $this->load->view("default/site/include/footer"); ?>


      <script type="text/javascript">
        setTimeout(function(){
          API_BuscaServicos('<?= base_url() . $icones ?>', '<?= $idgruposervico; ?>');
        },3000);
      </script>

    </body>
  </html>
