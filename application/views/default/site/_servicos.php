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

      .espaco {
          margin-top: 40px;
          /*margin-bottom: 40px;*/
          overflow:hidden;
      }

      .espaco-banner {
          float:left;
          margin-right:20px;
          width:270px;
      }
      .espaco-itens {
          overflow:hidden;
          margin-top: -20px;
      }

      .servico-banner{
          border-top-left-radius: 15px;
          border-top-right-radius: 15px;
          min-height: 250px;
      }
      .servico-titulo{
          text-transform: uppercase;
          color: white;
          font-size: 25px;
      }
      .servico-descricao{
         display: none;
      }
      .servico-espaco-texto{
          margin-top: -120px;
          padding: 25px;
      }

      .input-busca{
          position: absolute;
          top: 0px; left: 0px;
          height: 100%;
          width: calc(100% - 130px);
          padding: 0px 0px 0px 30px;
          border: 0px;
          background: transparent;
          font-size: 1.5em;
          width: 90%;
          max-width: 750px;
          display: block;
          margin: 0 auto;
          background-color: #fff;
          border-radius: 10px;
          height: 70px;
          position: relative;
      }

      .btn-busca{
          position: absolute;
          right: 0px;
          top: 0px;
          height: 100%;
          font-size: 3em;
          color: #0096d8;
          background: #eee;
          border: none;
          width: 100px;
          border-radius: 0px 10px 10px 0px;
      }

      @media screen and (max-width: 1050px) {
          .espaco-banner {
              float: none;
              margin-right:0;
              width:auto;
              border:0;
          }
          .espaco-itens {
              margin-top: 50px;
          }
          .servico-banner{
              background-size: auto 310%;
              background-position: center;
              height: 300px;
          }

          .servico-titulo{
              text-transform: uppercase;
              color: white;
              font-size: 40px;
          }
          .servico-descricao{
              display: block;
              color: white;
              font-size: 18px;
          }
          .servico-espaco-texto{
              margin-top: -180px;
          }
      }

      @media screen and (max-width: 683px) {
          .servico-titulo{
              font-size: 25px;
          }
          .servico-descricao{
              font-size: 16px;
          }
      }
      @media screen and (max-width: 385px) {
          .servico-espaco-texto{
              margin-top: -210px;
          }
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

    <div class="centraliza">

        <div class="espaco">
            <div class="espaco-banner">
                <div class="servico-banner" style="background-image: url('<?= base_url(); ?>arquivos/assets/img/bg/<?= $capa; ?>');"></div>

                <div class="servico-espaco-texto">

                    <h1 class="servico-titulo"><?= $titulo; ?></h1>
                    <p class="servico-descricao"><?= $descricao; ?></p>

                </div>

                <section class="servicos capa">
                    <div class="centraliza text-align-center">
                        <div class="input">
                            <!-- <form id="form_busca"> -->
                            <input class="input-busca" type="text" name="busca" onkeyup="buscaServico(this.value)" placeholder="Pesquise por nome ou sinônimo" />
                            <button class="centraliza-itens btn-busca">
                                <i class="fas fa-search"></i>
                            </button>
                            <!-- </form> -->
                        </div>
                    </div>
                </section>


            </div>


            <div class="espaco-itens">

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

            </div>


        </div>

    </div>


    <?php $this->load->view("default/site/include/footer"); ?>

      <script type="text/javascript">
        setTimeout(function(){
          API_BuscaServicos('<?= base_url() . $icones ?>', '<?= $idgruposervico; ?>');
        },3000);
      </script>

    </body>
  </html>
