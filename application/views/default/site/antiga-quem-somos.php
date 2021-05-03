    <?php $this->load->view("default/site/include/header"); ?>

    <!-- modal video -->
    <div class="modalVd centraliza-itens" id="modalVideo" style="opacity: 0; display: none;">
      <iframe src="" id="iframeVideo" frameborder="0" allowfullscreen></iframe>
      <div class="fundo-preto" onclick="acaoVideo('fecha')"></div>
    </div>



     <section class="quem-somos">


       <!-- Barra informativa - Quem é SOSDr -->
       <div class="barra-sobre">
         <div class="imagem"></div>

         <div class="centraliza">
           <img src="<?= base_url(); ?>arquivos/assets/img/quem-somos/fachada.jpg" class="none-img" />
           <div class="texto">
             <h1>SOS Dr</h1>

             <p>
              Rapidez, tratamento digno e muita modernidade, essas são as primeiras coisas
              que devemos pensar quando ouvirmos o nome SOS Doutor.
              Claro que é importante saber que aqui tem consultas em diversas áreas,
              procedimentos odontológicos modernos e também exames laboratoriais e de
              imagem, mas pra gente o que vale mesmo é você estar feliz, sabendo que sua
              saúde está (literalmente) em boas mãos.
              Com a SOS Doutor a sua saúde não precisa entrar em uma fila de espera gigante e
              você tem um tratamento rápido e eficaz, sem abrir mão da qualidade.
             </p>
           </div>
         </div>

         <div class="clear"></div>
       </div>



       <!-- Visão, Misão e Valores -->
       <div class="barra-mvv">
         <div class="centraliza">

           <div class="owl-carousel owl-theme" id="slide-mvv">

             <!-- Item 1 -->
             <div class="item">
               <div class="col-2">
                 <div class="p-10">
                   <img src="<?= base_url(); ?>arquivos/assets/img/quem-somos/missao.png" alt="Missão" />

                   <div class="texto">
                     <h3>Nossa <span>Missão</span></h3>
                     <hr>
                     <p>
                       Garantir bem-estar a todos, tornando a saúde uma realidade
                       independente de tempo, classe social e localidade.
                     </p>
                   </div>
                 </div>
               </div>
               <div class="col-2">
                 <div class="p-10">
                   <img src="<?= base_url(); ?>arquivos/assets/img/quem-somos/visao.png" alt="Visão" />

                   <div class="texto">
                     <h3>Nossa <span>Visão</span></h3>
                     <hr>
                     <p>
                       Até 2023, estar disponível, levando bem-estar para
                       3,5 milhões de pessoas.
                     </p>
                   </div>
                 </div>
               </div>
             </div>

             <!--  Item 2 -->
             <div class="item">
               <div class="p-10">
                 <img src="<?= base_url(); ?>arquivos/assets/img/quem-somos/valores.png" alt="Valores" />

                 <div class="texto">
                   <h3>Nossos <span>Valores</span></h3>
                   <hr>

                   <div class="clear"></div>

                   <ul>
                     <li><p>Paixão por resultado.</p></li>
                     <li><p>Se for bom para o paciente, é bom para nós.</p></li>
                     <li><p>Simplicidade até no nome.</p></li>
                     <li><p>Gente que cuida de gente.</p></li>
                     <li><p>Ética não se discute.</p></li>
                   </ul>

                   <ul class="lista2">
                     <li><p>Excelência em primeiro lugar.</p></li>
                     <li><p>Não deixar nada para amanhã.</p></li>
                     <li><p>A melhor ideia é a que prevalece.</p></li>
                     <li><p>Autonomia com responsabilidade.</p></li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>

         </div>
       </div>


       <!-- Video -->
       <div class="barra-video centraliza-itens">
         <button onclick="acaoVideo('abre')">
           <i class="far fa-play-circle"></i>
         </button>

         <div class="bg-video">
            <video autoplay src="<?= base_url(); ?>arquivos/assets/video/video.mp4" loop muted></video>
         </div>
       </div>


       <!-- Mulher com mãe -->
       <div class="barra-slider">
         <div class="imagem"></div>


         <div class="centraliza">
           <div class="alinha">
             <img src="<?= base_url(); ?>arquivos/assets/img/quem-somos/familia.jpg" class="none-img" />

             <div class="alinha-slide">
               <div class="owl-carousel owl-theme" id="slide-dente">
                 <!-- Item 1 -->
                 <!-- <div class="item">
                   <div class="p-15">
                     <h4>Se for bom para o paciente, </br> é bom para nós.</h4>
                     <hr>

                     <p>
                       Claro que é importante saber que aqui tem consultas em diversas
                       especialidades, procedimentos odontológicos modernos e também exames
                       laboratoriais e de imagem, mas pra gente o que vale mesmo é você estar
                       feliz, sabendo que sua saúde está (literalmente) em boas mãos, e mais
                       importante, sem pagar um valor exorbitante para ter um atendimento de
                       primeira qualidade.
                     </p>
                   </div>
                 </div> -->

                 <!-- Item 2 -->
                 <div class="item">
                   <div class="p-15">
                     <h4>Sua saúde não precisa </br> entrar em fila de espera.</h4>

                     <p>
                       Ainda pensando no seu bem-estar e comodidade, a SOS Doutor oferece a opção de
                       agendamentos sem sair de casa, através do site ou até mesmo pelo aplicativo,
                       é tudo muito rápido e fácil. </br></br>

                       Algumas especialidade podem ser agendadas para a mesma semana ou ainda para
                       o mesmo dia. Chegando na SOS Doutor, um sistema totalmente integrado e
                       profissionais eficientes, garantem que a permanência média da unidade seja
                       entre 30 e 45 minutos, do momento da chegada até o atendimento.
                     </p>
                   </div>
                 </div>

                 <!-- Item 3 -->
                 <div class="item">
                   <div class="p-15">
                     <h4>Qualidade indiscutível</h4>

                     <p>
                        Para manter a qualidade dos atendimentos e para proporcionar uma
                        experiência satisfatória a todos pacientes, os médicos e demais funcionários
                        contratados pela empresa passam por um rigoroso processo de seleção. </br></br>

                        São diversas áreas e serviços de ponta com atendimento humanizado, que
                        agora estão à disposição de todos.</br></br>

                        Na SOS Doutor você também pode cuidar da sua saúde bucal. Uma completa
                        clínica odontológica e uma equipe altamente capacitada, têm o objetivo de
                        deixar o seu sorriso ainda mais bonito e saudável.</br></br>

                        Ao término de cada consulta, quando invariavelmente são solicitados exames
                        a fim de confirmar os diagnósticos, você pode agendar os mesmos, sem sair
                        das instalações da SOS Doutor. São diversos exames laboratoriais e de imagem,
                        disponíveis para todos os pacientes.
                     </p>
                   </div>
                 </div>

                 <!-- item 4 -->
                 <div class="item">
                   <div class="p-15">
                     <h4>Sem dor de cabeça</h4>

                     <p>
                        Na maioria das vezes falar de saúde causa uma grande dor de cabeça. Se
                        focarmos nos serviços públicos, a “demora” com certeza é um dos principais
                        sintomas, e se o foco estiver nos serviços particulares, a dor geralmente é no
                        bolso.</br></br>

                        Diante dessas circunstâncias a SOS Doutor surge com a missão de garantir bem-
                        estar a todos, tornando a saúde uma realidade independente de tempo, classe
                        social e localidade.
                     </p>
                   </div>
                 </div>


               </div>

               <div class="btn-direita centraliza-itens">
                 <button onclick="playSlide('next')"> <i class="fas fa-angle-right"></i> </button>
               </div>

               <div class="btn-esquerda centraliza-itens">
                 <button onclick="playSlide('prev')"> <i class="fas fa-angle-left"></i> </button>
               </div>
             </div>

             <div class="clear"></div>
           </div>
           <div class="clear"></div>
         </div>




       </div>


       <!-- Icones -->
       <div class="barra-icones">
         <div class="centraliza text-align-center">
           <!-- Recepção -->
           <div class="item">
             <div class="imagem"></div>

             <p>
               Recepção ampla e climatizada com
               sistemas integrados de agendamento e
               equipe treinada.
             </p>
           </div>

           <!-- Comunicação -->
           <div class="item">
             <div class="imagem"></div>

             <p>
               Comunicação interna orientada a
               facilitar o alto fluxo de pacientes.
             </p>
           </div>

           <!-- Triagem -->
           <div class="item">
             <div class="imagem"></div>

             <p>
               Sistema de triagem preparado para
               otimizar o processo clínico.
             </p>
           </div>

           <!-- Análise -->
           <div class="item">
             <div class="imagem"></div>

             <p>
               Sala para análise
               clínicas e coletas.
             </p>
           </div>

           <!-- Consultórios -->
           <div class="item">
             <div class="imagem"></div>

             <p>
               Consultórios completos, atendendo
               diversas áreas.
             </p>
           </div>

           <!-- Odonto -->
           <div class="item">
             <div class="imagem"></div>

             <p>
               Consultórios preparos para todas as
               áreas odontológicas.
             </p>
           </div>

           <!-- Banheiros -->
           <div class="item">
             <div class="imagem"></div>

             <p>
               Banheiros e corredores
               totalmente adaptados.
             </p>
           </div>

           <div class="clear"></div>
         </div>
       </div>


       <div class="barra-bola">
         <div class="centraliza">

           <div class="texto">
             <h2>Sistema Integrado e Otimizado</h2>
             <p>
               Como sistemas totalmente integrados, o dia a dia dos médicos
               e dentistas torna-se mais fluído e toda a equipe interna consegue trocar
               informações de forma mais fácil e rápida.
             </p>
           </div>

           <img src="<?= base_url(); ?>arquivos/assets/img/quem-somos/todo-interligado.png" class="tudo" alt="Tudo interligado" />

           <div class="conteudo">
             <div class="seta-esquerda centraliza-itens">
                <button onclick="rodaGira('mais')"><i class="fas fa-angle-left"></i></button>
             </div>

             <div class="seta-direita centraliza-itens">
                <button onclick="rodaGira('menos')"><i class="fas fa-angle-right"></i></button>
             </div>

             <div class="gm">
               <div class="circulo">
                 <img src="<?= base_url(); ?>arquivos/assets/img/quem-somos/roda.png"  id="imagemBola" alt="Roda" />
               </div>

               <div class="degrade"></div>
             </div>

           </div>
         </div>
       </div>




       <!-- Instagram -->
       <section class="instagram">
         <div class="centraliza">

           <div class="col-2">
             <div class="texto">
               <h3>Siga a SOS Dr</h3>

               <p>
                 Acompanhe nossas <b>redes sociais</b> e </br>
                 receba informações valiosas sobre saúde e bem-estar.
               </p>

               <a href="http://fb.com/sosdr.oficial" target="_blank">
                 <span class="icone color-branco">
                   <i class="fab fa-facebook-square"></i>
                 </span>
               </a>

               <a href="http://instagram.com/sosdr.oficial" target="_blank">
                 <span class="icone color-branco">
                   <i class="fab fa-instagram"></i>
                 </span>
               </a>
             </div>
           </div>

           <div class="col-2 aniview" data-av-animation="fadeIn" id="instaImg"></div>
         </div>
         <div class="clear"></div>
       </section>


     </section>


    <?php $this->load->view("default/site/include/footer"); ?>


    <script type="text/javascript">

      var Dados = {
        rotate: 0
      }

      function rodaGira(tipo)
      {
        var grau = Dados.rotate;

        if(tipo == "mais")
        {
          grau = grau + 60;
        }
        else
        {
          grau = grau - 60;
        }

        Dados.rotate = grau;

        document.getElementById("imagemBola").style.transform = "rotate("+ grau +"deg)";
      }


      function acaoVideo(tipo)
      {
        // alert("aaa");
         if(tipo == "abre")
         {
            document.getElementById('iframeVideo').src = "https://player.vimeo.com/video/281366053?autoplay=1";

            $("#modalVideo").css("display","flex");
            setTimeout(function(){
              $("#modalVideo").css("opacity","1");
            },600);
         }
         else
         {
           document.getElementById('iframeVideo').src = "";

           $("#modalVideo").css("opacity","0");
           setTimeout(function(){
             $("#modalVideo").css("display","none");
           },600);
         }
      }


      // instagram
      var feed = new Instafeed({
          get: 'user',
          tagName: 'sosdr.oficial',
          target: 'instaImg',
          userId: '7447108373',
          clientId: '	f31c272b31974fc2848ff3ddadff98f5',
          accessToken: '7447108373.1677ed0.225d48ac24bb4927a4e504975b351b24',
          sortBy: 'most-recent',
          resolution: 'standard_resolution',
          limit: 5,
          template: '<img src="{{image}}" class="img-instagram" />'
      });
      feed.run();



      $('#slide-mvv').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        autoplay:true,
        autoplayTimeout:6000,
        autoplayHoverPause:true,
        items: 1
      });

      $('#slide-dente').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        autoplay:true,
        autoplayTimeout:6000,
        autoplayHoverPause:true,
        items: 1
      });
    </script>

    </body>
  </html>
