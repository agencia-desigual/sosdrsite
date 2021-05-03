<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123913380-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-123913380-1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WK8LP6V');</script>
    <!-- End Google Tag Manager -->

      <!-- Facebook Pixel Code -->
      <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
              n.callMethod.apply(n,arguments):n.queue.push(arguments)};
              if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
              n.queue=[];t=b.createElement(e);t.async=!0;
              t.src=v;s=b.getElementsByTagName(e)[0];
              s.parentNode.insertBefore(t,s)}(window,document,'script',
              'https://connect.facebook.net/en_US/fbevents.js');

          fbq('init', '603745110434037');
          fbq('track', 'PageView');
      </script>
      <noscript>
          <img height="1" width="1"
               src="https://www.facebook.com/tr?id=603745110434037&ev=PageView
&noscript=1"/>
      </noscript>
      <!-- End Facebook Pixel Code -->


    <meta charset="utf-8">
    <title><?= $seo['titulo']; ?></title>

      <!-- Init code pzw.io  //-->
<!--      <script>-->
<!--          var $_PowerZAP = { defaultCountry: '+55', widget_id: '12336', company: "15571" }; -->
<!--          (function(i,s,o,g,r,a,m){ i[r]={context:{id:'b05af1a80c2928d5c5f5eba59bab59ec'}};a=o;o=s.createElement(o); -->
<!--          o.async=1;o.src=g;m=s.getElementsByTagName(a)[0];m.parentNode.insertBefore(o,m); })(window,document,'script','https://js.huggy.chat/widget.min.js?v=8.0.0','pwz');-->
<!--      </script>-->
      <!-- End code pzw.io  //-->

    <!-- Meta Tags -->
    <meta name="google-site-verification" content="zK2sUWwMFyBM5caBS1e5MMr0359CBm9iooxYo8uUe7Y" />
    <meta name="keywords" content="<?= $seo['palavras']; ?>">
    <meta name="description" content="<?= $seo['descricao']; ?>">
    <meta name="author" content="SOS Dr">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="googlebot" content="all, index, follow">
    <meta name="revisit" content="10 days">
    <meta name="Revisit-After" content="10 Days">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="format-detection" content="telephone=no">

    <!-- Facebook -->
    <meta property="og:locale" content="pt_BR">
    <?php if(!empty($smo['url'])) : ?>
    <meta property="og:image" content="<?= $smo['url'] ?>">
    <?php else: ?>
    <meta property="og:url" content="<?= $url; ?>">
    <?php endif; ?>
    <meta property="og:title" content="<?= $smo['titulo']; ?>">
    <meta property="og:site_name" content="SOS Dr">
    <meta property="og:description" content="<?= $smo['descricao']; ?>">
    <?php if(!empty($smo['imagem'])) : ?>
    <meta property="og:image" content="<?= $smo['imagem'] ?>">
    <?php else: ?>
    <meta property="og:image" content="<?= base_url(); ?>arquivos/assets/img/imagem-fb.png">
    <?php endif; ?>
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">

    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>arquivos/assets/img/favicon.png"/>

    <!-- Plugin OWL -->
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/plugins/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/plugins/owl.carousel/dist/assets/owl.theme.default.css" />

    <!-- Icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Arquivos De Modelagem da Página -->
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/animacoes.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/fontes.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/estilo.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/costumizavel.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>arquivos/assets/css/responsivo.css" />

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Mascara -->
    <script src="<?= base_url(); ?>arquivos/assets/js/mascara.js"></script>


    <!-- Instagram -->
    <script type="text/javascript" src="<?= base_url() ?>arquivos/plugins/instagram/insta.min.js"></script>
    
    <!-- Alerta -->
    <script type="text/javascript" src="<?= base_url() ?>arquivos/plugins/sweetalert/sweetalert2.all.js"></script>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK8LP6V"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="modalLogin centraliza-itens" id="modalLogin">
      <div class="conteudo">
        <button class="fecha" onclick="acaoModalLogin('fecha')">
          <img src="<?= base_url(); ?>arquivos/assets/img/btn-close.png" alt="Botão Fecha" />
        </button>

        <img src="<?= base_url(); ?>arquivos/assets/img/logos/azul.png"  alt="SOS Dr" />

        <!-- Formulario de Login -->
        <div id="cad_login">
          <form id="form_login">
            <input type="tel" name="telefone" id="campoCel1" placeholder="Seu celular" required />
            <input type="password" name="senha" id="campoSenha" placeholder="Senha" required />

            <p class="aviso" id="avisoTxtLogin">E-mail ou senha informados está incorreto.</p>

            <div class="row">
              <button type="submit" id="btn_acessar">ACESSAR</button>
              <a onclick="escolheAcao('recupera')" class="esqueceu">Esqueceu a senha?</a>

              <div class="clear"></div>
            </div>
          </form>

          <p class="cadastro">Não é cadastrado? <a onclick="escolheAcao('cadastro')">Cadastre-se agora!</a></p>
        </div>



        <!-- Formulario de Cadastro -->
        <div id="cad_cadastro">
          <form id="form_cadastro">
            <input type="text" name="nome" placeholder="Nome completo" required />
            <input type="tel" name="telefone" id="campoCel2" placeholder="Celular" required />
            <div class="campo-cpf">
              <input type="tel" name="cpf" id="campoCPF" placeholder="CPF" required />
              <i class="far fa-check-circle" id="icone1"></i>
            </div>


            <p class="aviso" id="avisoTxtCadastro">E-mail ou senha informados está incorreto.</p>

            <div class="row">
              <button type="submit" id="btn_CadLogin" style="float: initial; width: 100%; padding: 10px 0px;">CADASTRAR</button>
            </div>
          </form>

          <p class="cadastro">Já possui cadastro? <a onclick="escolheAcao('login')">Acessar conta!</a></p>
        </div>


        <!-- Formulario de Recupera -->
        <div id="cad_recupera">
          <form id="form_recupera">
            <div class="campo-cpf">
              <input type="tel" name="cpf" id="campoCpf2" placeholder="Seu CPF" required />
              <i class="far fa-check-circle" id="icone2"></i>
            </div>

            <input type="tel" name="telefone" id="campoCel3" placeholder="Celular" required />

            <p class="aviso" id="avisoTxtRecupera">E-mail ou senha informados está incorreto.</p>

            <div class="row">
              <button type="submit" id="btn_CadRecupera" style="float: initial; width: 100%; padding: 10px 0px;">NOVA SENHA</button>
            </div>
          </form>

          <p class="cadastro">Não é cadastrado? <a onclick="escolheAcao('cadastro')">Cadastre-se agora!</a></p>
        </div>
      </div>

      <div class="fundo" onclick="acaoModalLogin('fecha')"></div>
    </div>

    

    <div class="modalServicos centraliza-itens" id="modalAgenda">
      <div class="bloco">
        <button class="fecha" onclick="ModalAgendaExame('fecha')">
          <img src="<?= base_url(); ?>arquivos/assets/img/btn-close.png" alt="Botão Fecha" />
        </button>


        <h4 id="txtTituloExame">Titulo Teste</h4>
        <p style="text-align: center; padding-top: 10px;">
          Para realizar o agendamento ligue:

          <span style="padding-top: 13px; display: block; font-size: 1.7em; color: #0094d6; font-weight: bold;">
              <a style="text-decoration: none; color: #02428E !important;" href="tel:5508005809771">0800 580 9771</a>
          </span>
        </p>

        <p style="text-align: center; padding-top: 10px;">
          Ou agende pelo WhatsApp: 
          <div id="addBtn">
            <a href=""><button class="btnModal">Agendar Pelo WhatsApp</button></a>
          </div>
        </p>

      </div>

      <div class="fundoPreto" onclick="ModalAgendaExame('fecha')"></div>
    </div>




    <menu>
      <div class="logo">
        <a href="<?= base_url(); ?>">
          <img src="<?= base_url(); ?>arquivos/assets/img/logos/branca.png" alt="logo SOSDr" />
        </a>
      </div>


      <div class="tudo" id="subMenu">
        <div class="conteudo">
          <ul>
            <li class="submenu"><a onclick="subMenuAcao('abre')">Serviços <i class="fas fa-angle-right"></i></a></li>
            <li style="display: none"><a href="<?= base_url(); ?>medicinadotrabalho">Medicina do Trabalho</a></li>
            <li><a href="<?= base_url(); ?>quem-somos">Quem Somos</a></li>
            <li><a href="<?= base_url(); ?>unidades">Unidades</a></li>
<!--            <li><a href="--><?//= base_url(); ?><!--quer-ajuda">Quer Ajuda?</a></li>-->
            <li><a href="<?= base_url(); ?>trabalhe-conosco">Trabalhe Conosco</a></li>
            <li><a href="<?= base_url(); ?>contato">Contato</a></li>

            <?php if($this->session->logou == true): ?>
              <li class="login"><a href="<?= base_url(); ?>logouf"><i class="fas fa-sign-in-alt"></i> Sair</a></li>
            <?php else: ?>
                <li><a <?php if($pag == "blog"){echo 'class="ativo"';} ?> href="<?= base_url(); ?>blog">Blog</a></li>
                <!--              <li class="login"><a onclick="acaoModalLogin('abre')"><i class="fas fa-sign-in-alt"></i> Login</a></li>-->
            <?php endif; ?>

          </ul>


          <ul>
            <li class="subvoltar"><a onclick="subMenuAcao('voltar')"><i class="fas fa-angle-left"></i> Voltar</a></li>
            <li><a href="<?= base_url(); ?>servicos/exames-diversos">Exames</a></li>
            <li><a href="<?= base_url(); ?>servicos/consultas-medicas">Consultas</a></li>
            <li><a href="<?= base_url(); ?>servicos/consultas-odontologicas">Odontologia</a></li>
          </ul>
        </div>
      </div>
    </menu>

    <div id="fechaMenu"></div>


    <!-- <div class="espaco-vermelho">
      <p>Você está em: <b>UNIDADE MARÍLIA</b></p>
    </div> -->

    <!-- Header -->
    <header id="menu">
      <div class="centraliza">
        <a href="<?= base_url(); ?>">
          <img src="<?= base_url(); ?>arquivos/assets/img/logos/azul.png" class="logo-azul" alt="logo SOSDr" />
          <img src="<?= base_url(); ?>arquivos/assets/img/logos/branca.png" class="logo-bnc" alt="logo SOSDr" />
        </a>

        <nav>
          <ul>
            <li class="submenu">
              <a href="#" <?php if($pag == "servico"){echo 'class="ativo"';} ?>>Serviços <i class="fas fa-arrow-down"></i></a>
              <ul>
                <li style="padding-top: 20px;"><a href="<?= base_url(); ?>servicos/exames-diversos">Exames</a></li>
                <li><a href="<?= base_url(); ?>servicos/consultas-medicas">Consultas</a></li>
                <li style="padding-bottom: 10px;"><a href="<?= base_url(); ?>servicos/consultas-odontologicas">Odontologia</a></li>
              </ul>
            </li>
            <li style="display: none"><a href="<?= base_url(); ?>medicinadotrabalho">Medicina do Trabalho</a></li>
            <li><a <?php if($pag == "quem-somos"){echo 'class="ativo"';} ?> href="<?= base_url(); ?>quem-somos">Quem Somos</a></li>
            <li><a <?php if($pag == "unidades"){echo 'class="ativo"';} ?> href="<?= base_url(); ?>unidades">Unidades</a></li>
            <li><a <?php if($pag == "trabalhe-conosco"){echo 'class="ativo"';} ?> href="<?= base_url(); ?>trabalhe-conosco">Trabalhe Conosco</a></li>
            <li><a <?php if($pag == "contato"){echo 'class="ativo"';} ?> href="<?= base_url(); ?>contato">Contato</a></li>
            <?php if($this->session->logou == true): ?>
              <li class="login">
                <a onclick="menuSair()"><i class="fas fa-sign-in-alt"></i> <?= $this->session->nome; ?></a>
                <ul id="subSair">
                  <li style="font-size: 0.65em;"><?= $this->session->telefone; ?></li>
                  <li><a href="<?= base_url(); ?>logouf"> <button>Sair</button> </a></li>
                </ul>
              </li>
            <?php else: ?>
                <li><a <?php if($pag == "blog"){echo 'class="ativo"';} ?> href="<?= base_url(); ?>blog">Blog</a></li>
                <!--              <li class="login"><a onclick="acaoModalLogin('abre')"><i class="fas fa-sign-in-alt"></i> Login</a></li>-->
            <?php endif; ?>
          </ul>
        </nav>

        <button class="btn-responsivo">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </header>

    <div class="gambis-header"></div>
