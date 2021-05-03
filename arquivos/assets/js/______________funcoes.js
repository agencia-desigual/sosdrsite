var Dados = {
  usuario: '',
  categoria: "medica",
  id: "btnConsultaMedica",
  loginUsuario: false,
  token: '',
  urlAPI: 'https://www.drmob.net/api/v1.0/',
  urlAPIZenvia: 'https://api-rest.zenvia.com/services',
  urlAgenda: 'https://sosdr.com/agendamento/',
  // url: 'http://localhost/git/sos-dr-site/'
  url: 'https://sosdr.com/'

}

var typingTimer; //timer identifier

if(sessionStorage.visita != '' && sessionStorage.visita != null && sessionStorage.visita != undefined){
    ModalHome('fecha');
}else {
    ModalHome('abre');
    sessionStorage.setItem("visita", "visitou");
}

console.log(sessionStorage.visita);

// Ancoras de Links
jQuery(document).ready(function($) {

  $(".scroll").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:($(this.hash).offset().top - 44)}, 1500);
  });
});

/**
 * -----------------------------------------
 *          METODOS PARA CONSULTAS HOME
 * -----------------------------------------
 */

function Abre(abre,fecha1,fecha2) {

    $("#"+abre).css("display","block");
    $("#"+fecha1).css("display","none");
    $("#"+fecha2).css("display","none");

}


/**
 * -----------------------------------------
 *          Métodos de Integração
 * -----------------------------------------
 */


 function API_Autenticacao() {
   var creds = "@agencia" + ":" + "!sos@2018";

   $.ajax({
      url: Dados.urlAPI + "login",
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        'Authorization': 'Basic ' + window.btoa(creds)
      },
      type: "GET",
      success: function(data)
      {
        // console.log(data.token);
        Dados.token = data.token;
      }
   });
 }




 function API_BuscaServicos(caminhoIcone, id)
 {
   var carregando = document.getElementById("carregando");

   // Busca os servicos
   $.ajax({
      url: Dados.urlAPI + "categoriasservicos",
      headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + Dados.token
      },
      data: {
        'idgruposervico': id,
        'ativo': 1
      },
      type: "GET",
      success: function(data)
      {
        // Campo
        var campo = document.getElementById("itensServicos");
        var item  = '';
        var item1 = '';
        var item2 = '';
        var item3 = '';
        var item4 = '';
        var token = '';
        var nome  = '';

        if (Dados.loginUsuario == true)
        {
          token = "/" + Dados.token;
        }

        // Percorre os dados
        data.forEach(function(x){
         item1 = '';
         
         // item2 =  "<a href=\""+ Dados.urlAgenda + x.idcategoriaservico + token +"\"><button style='margin: 30px 0px 0px 0px;'>Agendamento Online</button></a>";
         // item2 += "<a href='https://api.whatsapp.com/send?l=pt_BR&phone=5514997000922&text=Olá! Vi no site que vocês atendem " + x.nomecategoriaservico +" e gostaria de agendar um horário' target='_blank'><button style='margin: 10px 0px 20px 0px;'>Agendar via WhatsApp</button></a>";

         item2 = "<div class=\"botoes\">" +
                    "<a onclick=\"ModalAgendaExame('abre','"+ x.nomecategoriaservico +"')\"><button class=\"btn-telefone\">Agendar Telefone</button></a>" +
                    // "<a href=\""+ Dados.urlAgenda + x.idcategoriaservico + token +"\"><button class=\"btn-whats\">Agendar Online</button></a>" +
                    // "<a href='https://api.whatsapp.com/send?l=pt_BR&phone=5514997000922&text=Olá! Vi no site que vocês atendem " + x.nomecategoriaservico +" e gostaria de agendar um horário' target='_blank'><button class=\"btn-whats\">Agendar pelo WhatsApp</button></a>" +
                 "</div>";

                 
         item3 = "<span class=\"preco\" style=\"cursor: pointer;\" onclick=\"acaoModalLogin('abre')\">Ver Preço</span>";
         item3 = "<span class=\"preco\" style=\"cursor: pointer;\" onclick=\"API_BuscaServicoIndividual('"+ x.idcategoriaservico +"','preco')\">Ver Preço</span>";
         // item3 = "";
         item4 = x.descricaocategoriaservico;
         nome = x.nomecategoriaservico;

         switch(x.idcategoriaservico)
         {
            case 1953:
                item4 = "O Clínico Geral é o especialista que trata de pacientes adultos, acompanhando diferentes patologias. Vários sintomas são ponderados por esse especialista, entre eles temos: cefaleia, tontura, fadiga, diarreia e constipação. Exames laboratoriais diversos, ecocardiograma, raio-X de tórax e ultrassonografia abdominal total, podem ser solicitados para complemento de cada consulta.";
                break;
            case 1955:
                item4 = "Acnes, queda de cabelos, micose de unhas, alergias e manchas na pele estão entre os principais sintomas avaliados pelo Dermatologista, pois sua especialidade é reconhecer e tratar as doenças relacionadas à pele. O médico poderá pedir alguns exames e procedimentos para complementar sua consulta, como por exemplo biópsia de pele, eletrocauterização, curetagem e excisão cirúrgica.";
                break;
            case 1981:
                item4 = "Dores nas costas, dores nas articulações, dores nas juntas, dores na lombar, dor muscular, lombalgia, inchaço na articulação, desgaste dos ossos, desgaste das articulações e dificuldade de movimentos, são os principais sintomas avaliados pelo Ortopedista. Esse especialista trata das doenças e lesões nos ossos e músculos. O médico poderá pedir alguns exames, como radiografias, ressonância magnética, ultrassonografia musculoesquelética e tomografia computadorizada para complementar a consulta.";
                break;
            case 1985:
                item4 = "O Pediatra é o médico que se dedica ao acompanhamento da saúde da criança e do adolescente, realizando a prevenção, cuidando de doenças e acompanhando o crescimento de seus pacientes. Crises de chiado no peito, alergias, espirros, coriza e obstrução nasal estão entre os principais sintomas avaliados por esse médico, além de constipação intestinal, diarreia, dor abdominal, erros alimentares e falta de apetite. O pediatra pode solicitar exames como hemograma, ferro sérico, ferritina, urina I, urocultura, parasitológico de fezes, colesterol total e frações, triglicérides e glicemia para complementar sua consulta.";
                break;
            case 1991:
                item4 = "O Urologista é o médico responsável por cuidar dos órgãos reprodutores masculinos e tratar o sistema urinário das mulheres e dos homens. Esse especialista realiza exames de diagnóstico e prevenção de doenças relacionados ao trato urinário, como câncer de bexiga e infecções urinárias, por exemplo. Os principais sintomas investigados por esse médico, são: dificuldades para urinar, dor nos rins, dor durante as relações sexuais. O complemento da consulta poderá ser feito através de exames como PSA, espermograma, ultrassom de próstata, tomografia de abdome total e biópsia de próstata.";
                break;
            case 1995:
                item4 = "O Psicólogo analisa conflitos das relações humanas, orienta pais e filhos e ajuda a administrar crises em relacionamentos. Este especialista é responsável por acolher, avaliar e auxiliar na prevenção e no diagnóstico de doenças mentais, distúrbios emocionais e de personalidade. Além disso compreende atitudes, sentimentos e mecanismos psíquicos de cada paciente, através de emoções, ideias e valores.";
                break;
         }


         if(item4 == null || item4 == "")
         {
           item4 = "";
         }
         else
         {
           if(item4.length > 58)
           {
             item4 = item4.substr(0, 58) + "... <a onclick=\"API_BuscaServicoIndividual('"+ x.idcategoriaservico +"')\" style=\"cursor: pointer;\"><b>Saiba Mais</b></a>";
           }
         }



         // Verifica se possui descricao
         // if(x.descricaocategoriaservico != '' && x.descricaocategoriaservico != null)
         // {
         //   item1 = (x.descricaocategoriaservico).substring(130, 0);
         // }


         // Verifica se o usuario está logado
         if(Dados.loginUsuario == true)
         {
           if (x.valorservicoreferencia != null && x.valorservicoreferencia  != '')
           {
              if(x.idcategoriaservico == 1993)
              {
                nome = "Avaliação odontológica";
                item3 = "<span class=\"preco\">Gratuito</span>";
              }
              else 
              {
                item3 = "<span class=\"preco\">R$ "+ x.valorservicoreferencia  +"</span>";
              }
           }
           else
           {
             item3 = "<span class=\"preco\"></span>";
           }
         }


         // Verifica se é exame
         if(id == 146)
         {
           // item2 = "<a onclick=\"ModalAgendaExame('abre','" + x.nomecategoriaservico +"')\"><button style='margin: 30px 0px 0px 0px;'>Agendamento Online</button></a>";
           // item2 += "<a href='https://api.whatsapp.com/send?l=pt_BR&phone=5514997000922' target='_blank'><button style='margin: 10px 0px 20px 0px;'>Agendar por WhatsApp</button></a>";
           // item3 = "<span class=\"preco\"></span>";

           item2 = "<div class=\"botoes\">" +
                    "<a href='https://api.whatsapp.com/send?l=pt_BR&phone=5514997000922&text=Olá! Vi no site que vocês atendem " + x.nomecategoriaservico +" e gostaria de agendar um horário' target='_blank'><button class=\"btn-whats\">Agendar pelo WhatsApp</button></a>" +
                 "</div>";

           item3 = "";
         }




         // item2 = "<a onclick=\"ModalAgendaExame('abre','"+ nome +"')\"><button>Agendar</button></a>";


         item += "<div class=\"item\" data-nome='"+x.nomecategoriaservico.toLowerCase()+"'>" +
                    "<img src=\""+ caminhoIcone + x.idcategoriaservico +".png\">" +
                    "<h3>"+ (x.nomecategoriaservico).toLowerCase() + item3 + "</h3>" +
                    "<p>"+ item4 +"</p>" +
                    item2 +
                  "</div>";


          // item += "<div class=\"col-3\" data-nome=\""+ (x.nomecategoriaservico).toLowerCase() +"\">" +
          //           "<div class=\"p-20\">" +
          //             "<div class=\"item text-align-center\">" +
          //               "<div class=\"capa\">" +
          //                 "<img src=\""+ caminhoIcone + x.idcategoriaservico +".png\" alt=\""+ nome +"\" />" +
          //               "</div>" +
          //               "<h4 style=\"text-transform: capitalize;\">"+ nome +"</h4>" +

          //               "<p style=\"text-transform: lowercase; text-align: justify;\">" +
          //                 item4 +
          //                 // item1 +
          //                // "... <a onclick=\"API_BuscaServicoIndividual('"+ x.idcategoriaservico +"')\" style=\"cursor: pointer;\"><b>Saiba Mais</b></a>" +
          //               "</p>" +
          //                item3 +
          //                item2 +
          //             "</div>" +
          //           "</div>" +
          //         "</div>";
        });

        campo.innerHTML = item;
        carregando.style.display = "none";
        $("#faker").css('display','block');
      }
   });
 }





 function API_BuscaServicoIndividual(id, tipo = '')
 {
   // Busca os servicos
   $.ajax({
      url: Dados.urlAPI + "categoriasservicos",
      headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + Dados.token
      },
      data: {
        'idcategoriaservico': id
      },
      type: "GET",
      success: function(data)
      {
        var item4 = data[0].descricaocategoriaservico;

        if(tipo == "preco")
        {
          // Muda A cor
          $("#txtDescricao").addClass("txtPreco");

          if(data[0].idcategoriaservico == 1993 || data[0].idcategoriaservico == 4121)
          {
            item4 = "Faça um orçamento gratuito";
          }
          else
          {
            item4 = "R$ " + data[0].valorservicoreferencia;
          }
        }
        else
        {
          $("#txtDescricao").removeClass("txtPreco");
        }

        // switch(data[0].idcategoriaservico)
        // {
        //    case 1953:
        //        item4 = "O Clínico Geral é o especialista que trata de pacientes adultos, acompanhando diferentes patologias. Vários sintomas são ponderados por esse especialista, entre eles temos: cefaleia, tontura, fadiga, diarreia e constipação. Exames laboratoriais diversos, ecocardiograma, raio-X de tórax e ultrassonografia abdominal total, podem ser solicitados para complemento de cada consulta.";
        //        break;
        //    case 1955:
        //        item4 = "Acnes, queda de cabelos, micose de unhas, alergias e manchas na pele estão entre os principais sintomas avaliados pelo Dermatologista, pois sua especialidade é reconhecer e tratar as doenças relacionadas à pele. O médico poderá pedir alguns exames e procedimentos para complementar sua consulta, como por exemplo biópsia de pele, eletrocauterização, curetagem e excisão cirúrgica.";
        //        break;
        //    case 1981:
        //        item4 = "Dores nas costas, dores nas articulações, dores nas juntas, dores na lombar, dor muscular, lombalgia, inchaço na articulação, desgaste dos ossos, desgaste das articulações e dificuldade de movimentos, são os principais sintomas avaliados pelo Ortopedista. Esse especialista trata das doenças e lesões nos ossos e músculos. O médico poderá pedir alguns exames, como radiografias, ressonância magnética, ultrassonografia musculoesquelética e tomografia computadorizada para complementar a consulta.";
        //        break;
        //    case 1985:
        //        item4 = "O Pediatra é o médico que se dedica ao acompanhamento da saúde da criança e do adolescente, realizando a prevenção, cuidando de doenças e acompanhando o crescimento de seus pacientes. Crises de chiado no peito, alergias, espirros, coriza e obstrução nasal estão entre os principais sintomas avaliados por esse médico, além de constipação intestinal, diarreia, dor abdominal, erros alimentares e falta de apetite. O pediatra pode solicitar exames como hemograma, ferro sérico, ferritina, urina I, urocultura, parasitológico de fezes, colesterol total e frações, triglicérides e glicemia para complementar sua consulta.";
        //        break;
        //    case 1991:
        //        item4 = "O Urologista é o médico responsável por cuidar dos órgãos reprodutores masculinos e tratar o sistema urinário das mulheres e dos homens. Esse especialista realiza exames de diagnóstico e prevenção de doenças relacionados ao trato urinário, como câncer de bexiga e infecções urinárias, por exemplo. Os principais sintomas investigados por esse médico, são: dificuldades para urinar, dor nos rins, dor durante as relações sexuais. O complemento da consulta poderá ser feito através de exames como PSA, espermograma, ultrassom de próstata, tomografia de abdome total e biópsia de próstata.";
        //        break;
        //    case 1995:
        //        item4 = "O Psicólogo analisa conflitos das relações humanas, orienta pais e filhos e ajuda a administrar crises em relacionamentos. Este especialista é responsável por acolher, avaliar e auxiliar na prevenção e no diagnóstico de doenças mentais, distúrbios emocionais e de personalidade. Além disso compreende atitudes, sentimentos e mecanismos psíquicos de cada paciente, através de emoções, ideias e valores.";
        //        break;
        // }


        document.getElementById("txtTitulo").innerHTML = data[0].nomecategoriaservico;
        document.getElementById("txtDescricao").innerHTML = item4;
        // document.getElementById("link").href = Dados.urlAgenda + id;

        ModalServico("abre");
      }
   });
 }




 /**
  * -----------------------------------------
  *          Outros Métodos
  * -----------------------------------------
  */



$(window).scroll(function(){
  var atual = $(document).scrollTop();

  if(atual >= 200)
  {
    $('#menu').addClass('fixo animated bounceInDow');
  }
  else
  {
    $('#menu').removeClass('fixo animated bounceInDow');
  }

});




function btnAgenda(id, idCategoria)
{
  // Faz alterações visuais
  document.getElementById(Dados.id).className = "btn";
  document.getElementById(id).className = "btn selecionado";

  Dados.id = id;
  Dados.categoria = idCategoria;

  var campo = '';
  var mobile = false;

  // console.log(Dados.token);



  // Verifica se é exame
  if(idCategoria == 146)
  {
    // Caso seja exame tem que enviar para a pagina de ver todos,
    // pois possui milhares
    document.getElementById("btn_age").innerHTML = "VER TODOS";

    var campo = document.getElementById("campoBusca");
    campo.innerHTML = "<option value='exames'>Ver todos os exames</option>";
  }
  else
  {
    document.getElementById("btn_age").innerHTML = "AGENDAR";

    // Verifica se é mobile
    if($(window).width() <= 650)
    {
      mobile = true;
      $("#carregando").css("display","block");
      $("#form_busca").css("display","none");
    }


    // Busca os servicos
    $.ajax({
       url: Dados.urlAPI + "categoriasservicos",
       headers: {
         'Content-Type': 'application/json',
         'Authorization': 'Bearer ' + Dados.token
       },
       data: {
         'idgruposervico': idCategoria,
         'ativo': 1
       },
       type: "GET",
       success: function(data)
       {
         // Campo
         var campo = document.getElementById("campoBusca");
         var item = '<option disabled selected value="">Selecione a área</option>';

         // Percorre os dados
         data.forEach(function(x){

           var nome = x.nomecategoriaservico;


           if(x.idcategoriaservico == 1993){nome = "Avaliação odontológica";}

           // item += "<option value='"+ x.idcategoriaservico +"'>"+ nome +"</option>";
           item += "<option value='"+ nome +"'>"+ nome +"</option>";
         });

         campo.innerHTML = item;

         // Verifica se o carregando está ativado
         // se tiver tem que desativar e liberar o form
         if(mobile == true)
         {
           setTimeout(function(){
             $("#carregando").css("display","none");
             $("#form_busca").css("display","block");
           },1000);
         }
       }
    });
  }
}




function subMenuAcao(tipo)
{
  if(tipo == "abre")
  {
    var scroll = 500;
  }
  else
  {
    var scroll = 0;
  }


  $("#subMenu").animate({
    scrollLeft: scroll
  },'slow');
}




$("#fechaMenu").click(function(){

  $("menu").css("left","-300px");
  $("#fechaMenu").css("opacity","0");

  setTimeout(function(){
    $("#fechaMenu").css("display","none");
  },500);
});



$(".btn-responsivo").click(function(){
  $("menu").css("left","0px");
  $("#fechaMenu").css("display","block");

  setTimeout(function(){
    $("#fechaMenu").css("opacity","1");
  },500);
});

function ModalWhats(acao)
{
    if(acao == "fecha")
    {
        $("#modalLps2").css("opacity", "0");

        setTimeout(function(){
            $("#modalLps2").css("display", "none");
        },500);
    }
    else
    {
        $("#modalLps2").css("display", "flex")

        setTimeout(function(){
            $("#modalLps2").css("opacity", "1");
        },500);
    }
}

function ModalContatoLP(acao)
{
    if(acao == "fecha")
    {
        $("#modalLps3").css("opacity", "0");

        setTimeout(function(){
            $("#modalLps3").css("display", "none");
        },500);
    }
    else
    {
        $("#modalLps3").css("display", "flex")

        setTimeout(function(){
            $("#modalLps3").css("opacity", "1");
        },500);
    }
}

function ModalHome(acao)
{
    if(acao == "fecha")
    {
        $("#modalHome").css("opacity", "0");

        setTimeout(function(){
            $("#modalHome").css("display", "none");
        },500);
    }
    else
    {
        $("#modalHome").css("display", "flex")

        setTimeout(function(){
            $("#modalHome").css("opacity", "1");
        },500);
    }
}


function ModalServico(acao)
{
  if(acao == "fecha")
  {
    $("#modalServicos").css("opacity", "0");

    setTimeout(function(){
      $("#modalServicos").css("display", "none");
    },500);
  }
  else
  {
    $("#modalServicos").css("display", "flex")

    setTimeout(function(){
      $("#modalServicos").css("opacity", "1");
    },500);
  }
}


function ModalAgendaExame(acao,titulo)
{
  if(acao == "fecha")
  {
    $("#modalAgenda").css("opacity", "0");

    setTimeout(function(){
      $("#modalAgenda").css("display", "none");
    },500);
  }
  else
  {
    document.getElementById("txtTituloExame").innerHTML = titulo;

    var html = "<a href='https://api.whatsapp.com/send?l=pt_BR&phone=5514997000922&text=Olá! Vi no site que vocês atendem " + titulo +" e gostaria de agendar um horário' target='_blank'>" +
                    "<button class=\"btnModal\">Agendar Pelo WhatsApp</button>" +
                  "</a>";

    $("#addBtn").html(html);


    $("#modalAgenda").css("display", "flex")

    setTimeout(function(){
      $("#modalAgenda").css("opacity", "1");
    },500);
  }
}

function ModalValor(acao,titulo,valor,tipo_preco)
{

    var aux = null;

    if(acao == "fecha")
    {
        $("#modalValor").css("opacity", "0");

        setTimeout(function(){
            $("#modalValor").css("display", "none");
        },500);
    }
    else
    {

        aux = valor.replace(',','');
        $("#tituloServico").html(titulo);

        if (tipo_preco == "gratuito"){
            var html = "<p id=\"txtDescricao\" class=\"txtPreco\">Faça um orçamento gratuito</p>";
        } else if (tipo_preco == "a-partir") {
            var html = "<p id=\"txtDescricao\" class=\"txtPreco\">A partir de<br> R$ "+valor+" </p>";
        }else {
            var html = "<p id=\"txtDescricao\" class=\"txtPreco\">R$ "+valor+" </p>";

        }

        $("#valor").html(html);


        $("#modalValor").css("display", "flex")

        setTimeout(function(){
            $("#modalValor").css("opacity", "1");
        },500);
    }
}





function buscaServico(texto)
{
  if(texto == "")
  {
    $("[data-nome]").css("display","block");
  }
  else
  {
    texto = texto.toLowerCase();
    $("[data-nome]").css("display","none");
    $('*[data-nome^="'+ texto +'"]').css("display","block");
  }
}




/**
 * Realiza a busca na Home,
 * enviando o usuário para a pagina de agendamento.
 */
jQuery("#form_busca").submit(function(){
  var IdEspecialidade = document.getElementById("campoBusca").value;
  var aux = '';

  if(Dados.loginUsuario == true)
  {
    aux = "/" + Dados.token;
  }


  // alert(IdEspecialidade);

  if(IdEspecialidade == null || IdEspecialidade == "")
  {
    Materialize.Toast.removeAll();
    Materialize.toast("Escolha uma área.", 3000);
  }
  else
  {
    // // Verifica se é Exame
    if(IdEspecialidade == "exames")
    {
      // Caso seja exame deve redirecionar para a pagina de servicos -> exames
      location.href = Dados.url + "servicos/exames-diversos";
    }
    else
    {
      // Se não for, manda para a pagina de agendamento.
      // location.href = Dados.urlAgenda + IdEspecialidade + aux;
      ModalAgendaExame('abre', IdEspecialidade);
    }
  }


  return false;
});




/**
 * Envia os dados do formulário de Trabalhe conosco
 */
jQuery("#form_trabalheConosco").submit(function(){
  var dados = new FormData(this);

  var url = Dados.url + "ajax/trabalhe-conosco";

  document.getElementById("btn_envia").disabled = true;
  document.getElementById("btn_envia").innerHTML = "Enviando, aguarde...";

  $.ajax({
      url: url,
      type: 'POST',
      dataType: 'JSON',
      data:  dados,
      mimeType:"multipart/form-data",
      contentType: false,
      cache: false,
      processData:false,
      success: function(data)
      {
         document.getElementById("btn_envia").disabled = false;
         document.getElementById("btn_envia").innerHTML = "Enviar";

         // Manda o ALerta na tela
         Materialize.toast(data.mensagem, 4000);

         if(data.tipo == true)
         {
           // Limpa os Campos dos formulários
           $('#form_trabalheConosco').each (function(){this.reset();});
         }
      }
  });

  return false;
});





/**
 * Envia os dados do formulário de Cadastro
 */
jQuery("#form_cadastro").submit(function(){
  var dados = new FormData(this);

  var cpf = apenasNumeros(dados.get('cpf'));
  var telefone = apenasNumeros(dados.get('telefone'));

  // console.log(cpf + " " + telefone + " " + dados.get('nome').toUpperCase());

  document.getElementById("btn_CadLogin").disabled = true;
  document.getElementById("btn_CadLogin").innerHTML = "Cadastrando, aguarde...";

  $.ajax({
      url: Dados.urlAPI + "app/pacientes",
      headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + Dados.token
      },
      data: JSON.stringify({
        'paciente': {
          'nomepaciente': dados.get('nome').toUpperCase(),
          'cpf': cpf,
          'idpacientefonte': 6
        },
        'usuario': {
          'login': telefone
        }
      }),
      type: "POST",
      success: function(data)
      {
        var html = $("#avisoTxtCadastro");

        document.getElementById("btn_CadLogin").disabled = false;
        document.getElementById("btn_CadLogin").innerHTML = "CADASTRAR";

        if(data.paciente.idpaciente != null && data.paciente.idpaciente != '')
        {
          html.html("");

          $("#avisoTxtLogin").html("Cadastro Realizado! Enviamos sua senha por SMS.");
          $("#avisoTxtLogin").css({"color": "#34bb34", "display": "block"});

          // Limpa os Campos dos formulários
          $('#form_cadastro').each (function(){this.reset();});
          $("#icone1").css("opacity","0");

          // 3 segunda volta para login
          setTimeout(escolheAcao('login'),4000);
          document.getElementById("campoCel1").value = telefone;
          document.getElementById("campoCel1").focus();
        }
        else
        {
          html.html("Ocorreu um erro ao realizar cadastro");
          html.css({"color": "#e60b0b", "display": "block"});
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        var html = $("#avisoTxtCadastro");

        document.getElementById("btn_CadLogin").disabled = false;
        document.getElementById("btn_CadLogin").innerHTML = "CADASTRAR";

        html.html("Ocorreu um erro ao realizar cadastro");
        html.css({"color": "#e60b0b", "display": "block"});
      }
  });

  return false;
});




/**
 * Envia os dados do formulário de Contato
 */
jQuery("#form_contato").submit(function(){
  var dados = new FormData(this);

  var url = Dados.url + "ajax/contato";

  document.getElementById("btn_envia").disabled = true;
  document.getElementById("btn_envia").innerHTML = "Enviando, aguarde...";

  $.ajax({
      url: url,
      type: 'POST',
      dataType: 'JSON',
      data:  dados,
      mimeType:"multipart/form-data",
      contentType: false,
      cache: false,
      processData:false,
      success: function(data)
      {
         document.getElementById("btn_envia").disabled = false;
         document.getElementById("btn_envia").innerHTML = "Enviar";

         // Manda o ALerta na tela
         Materialize.toast(data.mensagem, 4000);

         if(data.tipo == true)
         {
           // Limpa os Campos dos formulários
           $('#form_contato').each (function(){this.reset();});
         }
      }
  });

  return false;
});




/**
 *
 *  Realiza o login do usuario
 */

 jQuery("#form_login").submit(function(){
   var dados = new FormData(this);

   var creds = apenasNumeros(dados.get("telefone")) + ":" + dados.get("senha");

   $.ajax({
      // url: "http://54.207.100.97:8084/api/v1.0/login",
      url: Dados.urlAPI + "login",
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        'Authorization': 'Basic ' + window.btoa(creds)
      },
      type: "GET",
      success: function(data)
      {
        var html = $("#avisoTxtLogin");

        if(data.token != null && data.token != '')
        {
          html.css({"color": "#3cbb40", "display": "block"});
          html.html("Login realizado com sucesso!");

          Dados.token = data.token;
          Dados.loginUsuario = true;

          console.log(data.token);

          $.post(Dados.url + "ajax/login",{token: data.token, nome: data.usuario.nome, telefone: data.usuario.login},function(x){

            if(x.tipo == true)
            {
              location.href = window.location.href;
            }
          },"json");
        }
        else
        {
          html.css({"color": "#e60b0b", "display": "block"});
          html.html("Dados informados estão incorretos!");
        }

      },
      error: function (xhr, ajaxOptions, thrownError) {
        var html = $("#avisoTxtLogin");

        html.css({"color": "#e60b0b", "display": "block"});
        html.html("Dados informados estão incorretos!");
      }
   });

   return false;
 });





 /**
  *
  *  Realiza o login do usuario
  */

  jQuery("#form_recupera").submit(function(){
    event.preventDefault();


    var dados = new FormData(this);

    var telefone = apenasNumeros(dados.get("telefone"));
    var cpf = apenasNumeros(dados.get("cpf"));

    $.ajax({
       url: Dados.urlAPI + "app/pacientes/recupera-senha",
       headers: {
         'Content-Type': 'application/x-www-form-urlencoded',
         'Authorization': 'Bearer ' + Dados.token
       },
       data: {
         'usuario': {
           'cpf': cpf,
           'login': telefone
         }
       },
       type: "POST",
       success: function(data)
       {
         $("#avisoTxtLogin").css({"color": "#3cbb40", "display": "block"});
         $("#avisoTxtLogin").html("Enviamos sua nova senha por SMS.");

         escolheAcao('login');

         // Limpa os Campos dos formulários
         $('#form_login').each (function(){this.reset();});
         $('#form_recupera').each (function(){this.reset();});

         document.getElementById("campoCel1").value = dados.get("telefone");
         document.getElementById("campoSenha").focus();
       },
       error: function (xhr, ajaxOptions, thrownError) {
         var html = $("#avisoTxtRecupera");

         html.css({"color": "#e60b0b", "display": "block"});
         html.html("Dados informados estão incorretos!");
       }
    });

    return false;
  });






  /**
   * Envia os dados do formulário de NewsLetter
   */
  jQuery("#form_newsletter").submit(function(){
    var dados = new FormData(this);

    var url = Dados.url + "ajax/newsletter";

    document.getElementById("btn_newsletter").disabled = true;
    document.getElementById("btn_newsletter").innerHTML = "Cadastrando, aguarde...";

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data:  dados,
        mimeType:"multipart/form-data",
        contentType: false,
        cache: false,
        processData:false,
        success: function(data)
        {
           document.getElementById("btn_newsletter").disabled = false;
           document.getElementById("btn_newsletter").innerHTML = "Cadastrar";

           // Manda o ALerta na tela
           Materialize.toast(data.mensagem, 4000);

           if(data.tipo == true)
           {
             // Limpa os Campos dos formulários
             $('#form_newsletter').each (function(){this.reset();});
           }
        }
    });

    return false;
  });


/**
 * ===============================================
 *            Modal de Login e Cadastro
 * ===============================================
 */


function acaoModalLogin(tipo)
{
  if(tipo == "abre")
  {
    escolheAcao("login");

    $("#modalLogin").css("display","flex");

    setTimeout(function(){
      $("#modalLogin").css("opacity","1");
    },700);
  }
  else
  {
    $("#modalLogin").css("opacity","0");

    setTimeout(function(){
      $("#modalLogin").css("display","none");
    },700);
  }
}



function aberCadastro()
{
  escolheAcao("cadastro");
}



function escolheAcao(tipo)
{

  $("#cad_login").css("display","none");
  $("#cad_cadastro").css("display","none");
  $("#cad_recupera").css("display","none");


  $("#cad_" + tipo).css("display","block");
}



function apenasNumeros(string)
{
    var numsStr = string.replace(/[^0-9]/g,'');
    return parseInt(numsStr);
}



$('#campoCPF').keyup(function(){


  if($("#campoCPF").val)
  {
    var string = document.getElementById('campoCPF').value;
    var numsStr = string.replace(/[^0-9]/g,'');
    var item = parseInt(numsStr);

    console.log(item.length);

    item = item + " ";

    if(item.length >= 12)
    {
      exibeIcone("campoCPF", "icone1", "");
    }
  }


});





$('#campoCpf2').keyup(function() {

  if($("#campoCpf2").val)
  {
    var string = document.getElementById('campoCpf2').value;
    var numsStr = string.replace(/[^0-9]/g,'');
    var item = parseInt(numsStr);

    console.log(item.length);

    item = item + " ";

    if(item.length >= 12)
    {
      exibeIcone("campoCpf2", "icone2", "campoCel3");
    }
  }

});



function exibeIcone(campo, icone, proximo)
{
  var valor = document.getElementById(campo).value;

  $.post(Dados.url + "ajax/verifica-cpf",{cpf: valor},function(x){

    if(x.tipo == true)
    {
      $("#" + icone).css("opacity","1");

      if(proximo != "" && proximo != null)
      {
        document.getElementById(proximo).focus();
      }
    }
    else
    {
      $("#" + icone).css("opacity","0");
    }

  },"json");
}



$('#campoCel2').keyup(function()
{
  if($("#campoCel2").val)
  {
    var string = document.getElementById('campoCel2').value;
    var numsStr = string.replace(/[^0-9]/g,'');
    var item = parseInt(numsStr);

    console.log(item.length);

    item = item + " ";

    if(item.length >= 12)
    {
      setTimeout(function(){
        document.getElementById("campoCPF").focus();
      }, 200);
    }
  }
});



$('#campoCel1').keyup(function()
{
  if($("#campoCel1").val)
  {
    var string = document.getElementById('campoCel1').value;
    var numsStr = string.replace(/[^0-9]/g,'');
    var item = parseInt(numsStr);

    console.log(item.length);

    item = item + " ";

    if(item.length >= 12)
    {
      setTimeout(function(){
        document.getElementById("campoSenha").focus();
      }, 200);
    }
  }
});


function playSlide(tipo)
{
   $('#slide-dente').trigger(tipo + '.owl.carousel', [300]);
}


// Verifica se já possui um tojken
// if(Dados.token == '')
// {
//   API_Autenticacao();
// }


// Mascaras
$(".celular").mask("(99) 99999-9999");
$("#campoCel3").mask("(99) 99999-9999");
$("#campoCPF").mask("999.999.999-99");
$("#campoCpf2").mask("999.999.999-99");



/**
 * Envia os dados do formulário da LP EBOOK
 *  @url sosdr.com/lp-ebook
 */
jQuery("#formEbook").submit(function(){
    var dados = new FormData(this);

    var url = Dados.url + "ajax/ebook";


    /* VARIVEIS NESSESARIA PARA O ZENVIA */
    dataEnvio = new Date;
    var dia = dataEnvio.getDay();
    var mes = dataEnvio.getMonth();
    var ano = dataEnvio.getFullYear();
    var hora = dataEnvio.getHours();
    var minuto = dataEnvio.getMinutes();

    document.getElementById("btn_download").disabled = true;
    document.getElementById("btn_download").innerHTML = "AGUARDE ...";

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data:  dados,
        mimeType:"multipart/form-data",
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {

            if (data.tipo == true)
            {
                var envia = {
                    from : "SOSDR",
                    to : '55'+data.objeto.celular,
                    schedule: ano+'-'+mes+'-'+dia+'T'+hora+':'+minuto+':00',
                    msg : data.mensagem,
                    callbackOption: "NONE",
                    // id: "003",
                    aggregateId: "51518",
                    flashSms: false
                };

                // ENVIA A MSG PARA A PESSOA
                sendSms(envia.msg,envia.from,envia.to,'',envia.aggregateId,envia.schedule,envia.callbackOption,'','');

                setTimeout(function () {

                    document.getElementById("btn_download").disabled = false;
                    document.getElementById("btn_download").innerHTML = "FAZER DOWNLOAD!";

                    // Limpa os Campos dos formulários
                    $('#formEbook').each (function(){this.reset();});

                    // Redireciiona para o /cadastro para capturar o leed
                    window.location.href =  Dados.url + 'ebook/cadastro';

                },2000);



            }
            else if(data.tipo == 'tem-cadastro')
            {
                var envia = {
                    from : "SOSDR",
                    to : '55'+data.objeto.celular,
                    schedule: ano+'-'+mes+'-'+dia+'T'+hora+':'+minuto+':00',
                    msg : data.mensagem,
                    callbackOption: "NONE",
                    // id: "003",
                    aggregateId: "51518",
                    flashSms: false
                };

                // ENVIA A MSG PARA A PESSOA
                sendSms(envia.msg,envia.from,envia.to,'',envia.aggregateId,envia.schedule,envia.callbackOption,'','');

                setTimeout(function () {

                    document.getElementById("btn_download").disabled = false;
                    document.getElementById("btn_download").innerHTML = "FAZER DOWNLOAD!";

                    // Limpa os Campos dos formulários
                    $('#formEbook').each (function(){this.reset();});

                    // Redireciiona para o /cadastro para capturar o leed
                    window.location.href =  Dados.url + 'ebook/cadastro';

                },2000);


            }
        }
    });

    return false;
});


/**
 * Envia os dados do formulário da LP EBOOK
 *  @url sosdr.com/lp-ebook
 */
jQuery("#formWhats").submit(function(){

    var dados = new FormData(this);

    var url = Dados.url + "ajax/whats";


    document.getElementById("btn_envia_whats").disabled = true;
    document.getElementById("btn_envia_whats").innerHTML = "AGUARDE ...";

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data:  dados,
        mimeType:"multipart/form-data",
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {

            if (data.tipo == true)
            {
                document.getElementById("btn_envia_whats").disabled = false;
                document.getElementById("btn_envia_whats").innerHTML = "ENVIAR";

                setTimeout(function () {
                    location.href = "https://wa.me/5514981610303";
                },500);
            }
            else
            {

            }
        }
    });

    return false;
});

/**
 * Envia os dados do formulário da LP EBOOK
 *  @url sosdr.com/lp-ebook
 */
jQuery("#formContatoLP").submit(function(){

    var dados = new FormData(this);

    var url = Dados.url + "ajax/whats";


    document.getElementById("btn_envia_whats").disabled = true;
    document.getElementById("btn_envia_whats").innerHTML = "AGUARDE ...";

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data:  dados,
        mimeType:"multipart/form-data",
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {

            if (data.tipo == true)
            {
                $(".inputCelular").val();
                $(".inputCelular").val();

                document.getElementById("btn_envia_whats").disabled = false;
                document.getElementById("btn_envia_whats").innerHTML = "ENVIAR";

                setTimeout(function () {
                    location.href = "tel:+5514981610303";
                },500);
            }
            else
            {

            }
        }
    });

    return false;
});

/**
 * Envia os dados do formulário da LP EBOOK
 *  @url sosdr.com/lp-ebook
 */
jQuery("#formCodigo").submit(function(){
    var dados = new FormData(this);

    var url = Dados.url + "ajax/codigo";


    document.getElementById("btn_confirma").disabled = true;
    document.getElementById("btn_confirma").innerHTML = "AGUARDE ...";

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data:  dados,
        mimeType:"multipart/form-data",
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {

            if(data.tipo == true)
            {
                $("#condigo-invalido").css('display','none');
                //Removendo o botão do form e adicionando o de Download
                setTimeout(function () {
                    $("#btn_ebook").css('display','inline');
                    $("#btn_confirma").css('display','none');

                },2000);

            }
            else
            {
                $("#condigo-invalido").css('display','block');
                document.getElementById("btn_confirma").disabled = false;
                document.getElementById("btn_confirma").innerHTML = "CONFIRMA!";

            }


        }
    });

    return false;
});




/**
 * Envia os dados do formulário da LP EBOOK
 *  @url sosdr.com/lp-ebook
 */
jQuery("#formEbook2").submit(function(){
    var dados = new FormData(this);

    var url = Dados.url + "ajax/ebook";


    /* VARIVEIS NESSESARIA PARA O ZENVIA */
    dataEnvio = new Date;
    var dia = dataEnvio.getDay();
    var mes = dataEnvio.getMonth();
    var ano = dataEnvio.getFullYear();
    var hora = dataEnvio.getHours();
    var minuto = dataEnvio.getMinutes();

    document.getElementById("btn_download").disabled = true;
    document.getElementById("btn_download").innerHTML = "AGUARDE ...";

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data:  dados,
        mimeType:"multipart/form-data",
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {

            if (data.tipo == true)
            {
                var envia = {
                    from : "SOSDR",
                    to : '55'+data.objeto.celular,
                    schedule: ano+'-'+mes+'-'+dia+'T'+hora+':'+minuto+':00',
                    msg : data.mensagem,
                    callbackOption: "NONE",
                    // id: "003",
                    aggregateId: "51518",
                    flashSms: false
                };

                // ENVIA A MSG PARA A PESSOA
                sendSms(envia.msg,envia.from,envia.to,'',envia.aggregateId,envia.schedule,envia.callbackOption,'','');

                setTimeout(function () {

                    document.getElementById("btn_download").disabled = false;
                    document.getElementById("btn_download").innerHTML = "FAZER DOWNLOAD!";

                    // Limpa os Campos dos formulários
                    $('#formEbook').each (function(){this.reset();});

                    // Redireciiona para o /cadastro para capturar o leed
                    window.location.href =  Dados.url + 'ebook2/cadastro2';

                },2000);



            }
            else if(data.tipo == 'tem-cadastro')
            {
                var envia = {
                    from : "SOSDR",
                    to : '55'+data.objeto.celular,
                    schedule: ano+'-'+mes+'-'+dia+'T'+hora+':'+minuto+':00',
                    msg : data.mensagem,
                    callbackOption: "NONE",
                    // id: "003",
                    aggregateId: "51518",
                    flashSms: false
                };

                // ENVIA A MSG PARA A PESSOA
                sendSms(envia.msg,envia.from,envia.to,'',envia.aggregateId,envia.schedule,envia.callbackOption,'','');

                setTimeout(function () {

                    document.getElementById("btn_download").disabled = false;
                    document.getElementById("btn_download").innerHTML = "FAZER DOWNLOAD!";

                    // Limpa os Campos dos formulários
                    $('#formEbook').each (function(){this.reset();});

                    // Redireciiona para o /cadastro para capturar o leed
                    window.location.href =  Dados.url + 'ebook2/cadastro2';

                },2000);


            }
        }
    });

    return false;
});




/**
 * Envia os dados do formulário da LP EBOOK
 *  @url sosdr.com/lp-ebook
 */
jQuery("#formCodigo2").submit(function(){
    var dados = new FormData(this);

    var url = Dados.url + "ajax/codigo";


    document.getElementById("btn_confirma").disabled = true;
    document.getElementById("btn_confirma").innerHTML = "AGUARDE ...";

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data:  dados,
        mimeType:"multipart/form-data",
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {

            if(data.tipo == true)
            {
                $("#condigo-invalido").css('display','none');
                //Removendo o botão do form e adicionando o de Download
                setTimeout(function () {
                    $("#btn_ebook").css('display','inline');
                    $("#btn_confirma").css('display','none');

                },2000);

            }
            else
            {
                $("#condigo-invalido").css('display','block');
                document.getElementById("btn_confirma").disabled = false;
                document.getElementById("btn_confirma").innerHTML = "CONFIRMA!";

            }


        }
    });

    return false;
});




/**
 * Envia os dados do formulário da LP EBOOK
 *  @url sosdr.com/lp-ebook
 */
jQuery("#formGanheConsulta1").submit(function(){

    var dados = new FormData(this);

    var url = Dados.url + "ajax/ganhe_consulta_1";

    document.getElementById("btn_ganhar1").disabled = true;
    document.getElementById("btn_ganhar1").innerHTML = "AGUARDE ...";

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data:  dados,
        mimeType:"multipart/form-data",
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {

            if (data.tipo == true)
            {
                setTimeout(function () {

                    //Pegando o ID do usuario
                    sessionStorage.setItem("idConsulta", data.objeto.id_consulta);

                    document.getElementById("btn_ganhar1").disabled = false;
                    document.getElementById("btn_ganhar1").innerHTML = "QUERO GANHAR!";

                    // Limpa os Campos dos formulários
                    $('#formGanheConsulta1').each (function(){this.reset();});

                    //Redireciona para inserir o cupom
                    window.location.href = Dados.url + "ganhe-consulta/amigos";



                },2000);

            }
            else if(data.tipo == 'tem-cadastro')
            {
                var envia = {
                    from : "SOSDR",
                    to : '55'+data.objeto.celular,
                    schedule: ano+'-'+mes+'-'+dia+'T'+hora+':'+minuto+':00',
                    msg : data.mensagem,
                    callbackOption: "NONE",
                    // id: "003",
                    aggregateId: "51518",
                    flashSms: false
                };

                setTimeout(function () {

                    //Pegando o ID do usuario
                    sessionStorage.setItem("idConsulta", data.objeto.id_consulta);

                    document.getElementById("btn_ganhar1").disabled = false;
                    document.getElementById("btn_ganhar1").innerHTML = "QUERO GANHAR!";

                    // Limpa os Campos dos formulários
                    $('#formGanheConsulta1').each (function(){this.reset();});

                    //Redireciona para inserir o cupom
                    window.location.href = Dados.url + "ganhe-consulta/amigos";

                },2000);

                sendSms(envia.msg,envia.from,envia.to,'',envia.aggregateId,envia.schedule,envia.callbackOption,'','');

            }
            else if(data.tipo == false)
            {
                Swal.fire({
                    type: 'success',
                    title: 'Sucesso',
                    text: data.mensagem,
                })

                // Limpa os Campos dos formulários
                $('#formGanheConsulta1').each (function(){this.reset();});

                document.getElementById("btn_ganhar1").disabled = false;
                document.getElementById("btn_ganhar1").innerHTML = "QUERO GANHAR!";
            }
        }
    });

    return false;
});




/**
 * Envia os dados do formulário da LP EBOOK
 *  @url sosdr.com/lp-ebook
 */
jQuery("#formGanheConsulta2").submit(function(){

    // Verifica se existe o idConsulta
    if(sessionStorage.idConsulta != '' && sessionStorage.idConsulta != null && sessionStorage.idConsulta != undefined){

        var dados = new FormData(this);

        var url = Dados.url + "ajax/ganhe_consulta_2/"+sessionStorage.idConsulta;

        /* VARIVEIS NESSESARIA PARA O ZENVIA */
        dataEnvio = new Date();
        var dia = dataEnvio.getDay();
        var mes = dataEnvio.getMonth();
        var ano = dataEnvio.getFullYear();
        var hora = dataEnvio.getHours();
        var minuto = dataEnvio.getMinutes();

        document.getElementById("btn_ganhar2").disabled = true;
        document.getElementById("btn_ganhar2").innerHTML = "AGUARDE ...";

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
            data:  dados,
            mimeType:"multipart/form-data",
            contentType: false,
            cache: false,
            processData:false,
            success: function(data) {

                if (data.tipo == true)
                {
                    var envia = {
                        from : "SOSDR",
                        to : '55'+data.objeto.celular,
                        schedule: ano+'-'+mes+'-'+dia+'T'+hora+':'+minuto+':00',
                        msg : data.mensagem,
                        callbackOption: "NONE",
                        // id: "003",
                        aggregateId: "51518",
                        flashSms: false
                    };

                    sendSms(envia.msg,envia.from,envia.to,'',envia.aggregateId,envia.schedule,envia.callbackOption,'','');

                    setTimeout(function () {

                        document.getElementById("btn_ganhar2").disabled = false;
                        document.getElementById("btn_ganhar2").innerHTML = "QUERO GANHAR!";

                        // Limpa os Campos dos formulários
                        $('#formGanheConsulta2').each (function(){this.reset();});

                        //Redireciona para inserir o cupom
                        window.location.href = Dados.url + "ganhe-consulta/cadastro";

                    },2000);



                }
                else
                {
                    Swal.fire({
                        type: 'error',
                        title: 'Erro',
                        text: data.mensagem,
                    })

                    // Limpa os Campos dos formulários
                    $('#formGanheConsulta2').each (function(){this.reset();});

                    document.getElementById("btn_ganhar2").disabled = false;
                    document.getElementById("btn_ganhar2").innerHTML = "QUERO GANHAR!";

                    setTimeout(function () {

                        window.location.href = Dados.url + "ganhe-consulta/amigos";

                    },4000);

                }
            }
        });

    }else {

        //Redireciona para inserir
        window.location.href = Dados.url + "ganhe-consulta";

    }

    return false;
});




/**
 * Envia os dados do formulário da LP EBOOK
 *  @url sosdr.com/lp-ebook
 */
jQuery("#formCodigoConsulta").submit(function(){
    var dados = new FormData(this);

    var url = Dados.url + "ajax/consulta";


    document.getElementById("btn_confirma").disabled = true;
    document.getElementById("btn_confirma").innerHTML = "AGUARDE ...";

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data:  dados,
        mimeType:"multipart/form-data",
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {

            if(data.tipo == true)
            {

                document.getElementById("btn_confirma").disabled = true;
                document.getElementById("btn_confirma").innerHTML = "AGUARDE ...";

                setTimeout(function () {

                    // Remove a modal de validação do codigo
                    $('.fundo-escuro').css('display','none');

                    Swal.fire({
                        type: 'success',
                        title: 'Sucesso',
                        text: 'Contato verificado, aguarde nosso retorno',
                    })

                },2000);

                setTimeout(function () {

                    //Redireciona para o inicio
                    window.location.href = Dados.url + "ganhe-consulta";

                },5000);


            }
            else
            {
                $("#condigo-invalido").css('display','block');
                document.getElementById("btn_confirma").disabled = false;
                document.getElementById("btn_confirma").innerHTML = "CONFIRMA!";

            }


        }
    });

    return false;
});






















/**
 * Envia os dados do formulário da LP EBOOK
 *  @url sosdr.com/lp-ebook
 */
jQuery("#formGanheConsulta1-2").submit(function(){

    var dados = new FormData(this);

    var url = Dados.url + "ajax/ganhe_consulta_1";

    document.getElementById("btn_ganhar1").disabled = true;
    document.getElementById("btn_ganhar1").innerHTML = "AGUARDE ...";

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data:  dados,
        mimeType:"multipart/form-data",
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {

            if (data.tipo == true)
            {
                setTimeout(function () {

                    //Pegando o ID do usuario
                    sessionStorage.setItem("idConsulta", data.objeto.id_consulta);

                    document.getElementById("btn_ganhar1").disabled = false;
                    document.getElementById("btn_ganhar1").innerHTML = "QUERO GANHAR!";

                    // Limpa os Campos dos formulários
                    $('#formGanheConsulta1-2').each (function(){this.reset();});

                    //Redireciona para inserir o cupom
                    window.location.href = Dados.url + "ganhe-consulta2/amigos2";



                },2000);

            }
            else if(data.tipo == 'tem-cadastro')
            {
                var envia = {
                    from : "SOSDR",
                    to : '55'+data.objeto.celular,
                    schedule: ano+'-'+mes+'-'+dia+'T'+hora+':'+minuto+':00',
                    msg : data.mensagem,
                    callbackOption: "NONE",
                    // id: "003",
                    aggregateId: "51518",
                    flashSms: false
                };

                setTimeout(function () {

                    //Pegando o ID do usuario
                    sessionStorage.setItem("idConsulta", data.objeto.id_consulta);

                    document.getElementById("btn_ganhar1").disabled = false;
                    document.getElementById("btn_ganhar1").innerHTML = "QUERO GANHAR!";

                    // Limpa os Campos dos formulários
                    $('#formGanheConsulta1-2').each (function(){this.reset();});

                    //Redireciona para inserir o cupom
                    window.location.href = Dados.url + "ganhe-consulta2/amigos2";

                },2000);

                sendSms(envia.msg,envia.from,envia.to,'',envia.aggregateId,envia.schedule,envia.callbackOption,'','');

            }
            else if(data.tipo == false)
            {
                Swal.fire({
                    type: 'success',
                    title: 'Sucesso',
                    text: data.mensagem,
                })

                // Limpa os Campos dos formulários
                $('#formGanheConsulta1-2').each (function(){this.reset();});

                document.getElementById("btn_ganhar1").disabled = false;
                document.getElementById("btn_ganhar1").innerHTML = "QUERO GANHAR!";
            }
        }
    });

    return false;
});




/**
 * Envia os dados do formulário da LP EBOOK
 *  @url sosdr.com/lp-ebook
 */
jQuery("#formGanheConsulta2-2").submit(function(){

    // Verifica se existe o idConsulta
    if(sessionStorage.idConsulta != '' && sessionStorage.idConsulta != null && sessionStorage.idConsulta != undefined){

        var dados = new FormData(this);

        var url = Dados.url + "ajax/ganhe_consulta_2/"+sessionStorage.idConsulta;

        /* VARIVEIS NESSESARIA PARA O ZENVIA */
        dataEnvio = new Date();
        var dia = dataEnvio.getDay();
        var mes = dataEnvio.getMonth();
        var ano = dataEnvio.getFullYear();
        var hora = dataEnvio.getHours();
        var minuto = dataEnvio.getMinutes();

        document.getElementById("btn_ganhar2").disabled = true;
        document.getElementById("btn_ganhar2").innerHTML = "AGUARDE ...";

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
            data:  dados,
            mimeType:"multipart/form-data",
            contentType: false,
            cache: false,
            processData:false,
            success: function(data) {

                if (data.tipo == true)
                {
                    var envia = {
                        from : "SOSDR",
                        to : '55'+data.objeto.celular,
                        schedule: ano+'-'+mes+'-'+dia+'T'+hora+':'+minuto+':00',
                        msg : data.mensagem,
                        callbackOption: "NONE",
                        // id: "003",
                        aggregateId: "51518",
                        flashSms: false
                    };

                    sendSms(envia.msg,envia.from,envia.to,'',envia.aggregateId,envia.schedule,envia.callbackOption,'','');

                    setTimeout(function () {

                        document.getElementById("btn_ganhar2").disabled = false;
                        document.getElementById("btn_ganhar2").innerHTML = "QUERO GANHAR!";

                        // Limpa os Campos dos formulários
                        $('#formGanheConsulta2-2').each (function(){this.reset();});

                        //Redireciona para inserir o cupom
                        window.location.href = Dados.url + "ganhe-consulta2/cadastro2";

                    },2000);



                }
                else
                {
                    Swal.fire({
                        type: 'error',
                        title: 'Erro',
                        text: data.mensagem,
                    })

                    // Limpa os Campos dos formulários
                    $('#formGanheConsulta2-2').each (function(){this.reset();});

                    document.getElementById("btn_ganhar2").disabled = false;
                    document.getElementById("btn_ganhar2").innerHTML = "QUERO GANHAR!";

                    setTimeout(function () {

                        window.location.href = Dados.url + "ganhe-consulta2/amigos2";

                    },4000);

                }
            }
        });

    }else {

        //Redireciona para inserir
        window.location.href = Dados.url + "ganhe-consulta2";

    }

    return false;
});




/**
 * Envia os dados do formulário da LP EBOOK
 *  @url sosdr.com/lp-ebook
 */
jQuery("#formCodigoConsulta-2").submit(function(){
    var dados = new FormData(this);

    var url = Dados.url + "ajax/consulta";


    document.getElementById("btn_confirma").disabled = true;
    document.getElementById("btn_confirma").innerHTML = "AGUARDE ...";

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data:  dados,
        mimeType:"multipart/form-data",
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {

            if(data.tipo == true)
            {

                document.getElementById("btn_confirma").disabled = true;
                document.getElementById("btn_confirma").innerHTML = "AGUARDE ...";

                setTimeout(function () {

                    // Remove a modal de validação do codigo
                    $('.fundo-escuro').css('display','none');

                    Swal.fire({
                        type: 'success',
                        title: 'Sucesso',
                        text: 'Contato verificado, aguarde nosso retorno',
                    })

                },2000);

                setTimeout(function () {

                    //Redireciona para o inicio
                    window.location.href = Dados.url + "ganhe-consulta2";

                },5000);


            }
            else
            {
                $("#condigo-invalido").css('display','block');
                document.getElementById("btn_confirma").disabled = false;
                document.getElementById("btn_confirma").innerHTML = "CONFIRMA!";

            }


        }
    });

    return false;
});




/**
 * A funções a seguir é responsavel por fazer
 * envio de msg por SMS atráves da integração do Zenvia
 */

function makeBaseAuth(e, t){
    var n = e + ":" + t;
    var r = btoa(n);
    return "Basic " + r
}

function sendSms(msg, from, mobile, messageId, aggregateId, schedule, callbackOption, doneFunction, failFunction){

    var sendSmsUrl = Dados.urlAPIZenvia + "/send-sms";
    var stringg = JSON.stringify(serializeSendSmsRequest(msg, from, mobile, messageId, aggregateId, schedule, callbackOption));
    callPost(stringg, sendSmsUrl, doneFunction, failFunction);

}

function callPost(data, url, doneFunction, failFunction) {

    console.log(data);
    console.log(url);
    console.log(doneFunction);
    console.log(failFunction);

    if(typeof doneFunction == "undefined"){
        doneFunction = function(data){  defaultDoneFunction(data); }
    }

    if(typeof failFunction == "undefined"){
        failFunction = function(data){ defaultFailFunction(data) };
    }

    $.ajax({
        headers: {
            "Accept": "application/json",
            "Content-type": "application/json",
            "Authorization": makeBaseAuth('sosdr.corp.api','BCWUnFR3xQ')
        },
        cache: false,
        type: "POST",
        data: data,
        url: url,
        crossDomain: true
    }).done(doneFunction)
        .fail(failFunction);
}

function serializeSendSmsRequest(msg, from, mobile, messageId, aggregateId, schedule, callbackOption){

    var string = "{\"sendSmsRequest\":  { \"aggregateId\" : \"" + aggregateId + "\", ";
    string = string + "\"msg\" : \"" + msg + "\", ";
    string = string + "\"id\" : \"" + messageId + "\", ";
    string = string + "\"from\" : \"" + from + "\", ";
    string = string + "\"to\" : \"" + mobile + "\", ";
    string = string + "\"schedule\" : \"" + schedule + "\", ";
    string = string + "\"callbackOption\" : \"" + callbackOption + "\" ";

    string = string + " } } ";

    return $.parseJSON(string);

}
