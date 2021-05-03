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

    <meta charset="utf-8">
    <title>Agendamento | SOS Dr</title>
    <meta name="google-site-verification" content="zK2sUWwMFyBM5caBS1e5MMr0359CBm9iooxYo8uUe7Y" />
    
    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>arquivos/assets/img/favicon.png"/>
  </head>
  <body style="overflow: hidden;">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK8LP6V"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <iframe src="https://www.drmob.net/agenda-sos/#!/centro-medico/<?= $id; ?>/<?= $token; ?>"style="padding: 0px; margin: 0px; width: 100%; height: 100%; position: absolute; top: 0px; left: 0px; border: 0px;"></iframe>
  </body>
</html>
