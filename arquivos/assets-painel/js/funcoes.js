var Dados = {
    // 'url': "http://localhost/git/sos-dr-site/",
    'url': "https://sosdr.com/",
}


$(".excluirLead").click(function(){

    var id = $(this).data("id");
    var url = Dados.url + "lead-delete";
    var dados = new FormData;



    // Seta os dados
    dados.set("id", id);

    // Envia via Ajax
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

            if(data.tipo == true)
            {

                Swal.fire(
                    'Excluído!',
                    'O lead foi excluido com sucesso.',
                    'success'
                )

                setTimeout(function () {
                    location.reload();
                },1500)

            }
            else
            {
                Swal.fire(
                    'Erro!',
                    'Ocorreu um erro ao excluir.',
                    'error'
                )
            }
        }
    });






});


/*
==================================================
                  MASCARAS
==================================================
*/
$('.maskPreco').mask("#.##0,00",{reverse : true});
$('.maskCEP').mask("00000-000");
$('.mascara-tel-cel').mask("(00) 00000-0000");



/*
==================================================
            EXCLUIR UNIDADES
==================================================
*/
function apagarUnidadeServico(param) {

    Swal.fire({
        title: 'Deseja Realmente Excluir?',
        text: "O valor do serviço sera removido para essa unidade permanentemente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0D2849',
        cancelButtonColor: '#FF0000',
        confirmButtonText: 'Sim, excluir!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {

            // Excluir a publicação
            $.post(Dados.url + "painel/ajax-excluir-unidade-servico/"+param, function(data){

                console.log(data);

                if(data.tipo == true){

                    $("#unidade_"+param).css('display','none');

                    Swal.fire(
                        'Excluído!',
                        data.mensagem,
                        'success'
                    )

                }else {
                    Swal.fire(
                        'Erro!',
                        data.mensagem,
                        'error'
                    )
                }

            },"json");

        }
    })

}



/*
==================================================
           FORMULARIO UNIDADES ALTERAR
==================================================
*/
$("#formAlterarUnidade").submit(function(e) {

    document.getElementById("btnForm").disabled = true;
    document.getElementById("btnForm").innerHTML = "Alterando...";

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = new  FormData(this);

    $.ajax({
            type: "POST",
            dataType: 'json',
            mimeType: 'multipart/form-data',
            contentType: false,
            processData: false,
            cache: false,
            url: Dados.url + 'painel/ajax-editar-unidade',
            data: form, // serializes the form's elements.
            success: function (data) {

                if(data.tipo == true){

                    Swal.fire({
                        type: 'success',
                        title: 'Sucesso',
                        text: data.mensagem,
                    })

                    document.getElementById("formAlterarUnidade").reset();
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "ALTERAR";

                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);

                }else {

                    Swal.fire({
                        type: 'error',
                        title: 'Erro...',
                        text: data.mensagem,
                    })
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "ALTERAR";
                }

            }
        }
    );

});




/*
==================================================
           FORMULARIO UNIDADES INSERIR
==================================================
*/
$("#formCadastroUnidade").submit(function(e) {

    document.getElementById("btnForm").disabled = true;
    document.getElementById("btnForm").innerHTML = "Cadastrando...";

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = new  FormData(this);

    $.ajax({
            type: "POST",
            dataType: 'json',
            mimeType: 'multipart/form-data',
            contentType: false,
            processData: false,
            cache: false,
            url: Dados.url + 'painel/ajax-cadastrar-unidade',
            data: form, // serializes the form's elements.
            success: function (data) {

                if(data.tipo == true){

                    Swal.fire({
                        type: 'success',
                        title: 'Sucesso',
                        text: data.mensagem,
                    })

                    document.getElementById("formCadastroUnidade").reset();
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "CADASTRAR";

                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);

                }else {

                    Swal.fire({
                        type: 'error',
                        title: 'Erro...',
                        text: data.mensagem,
                    })
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "CADASTRAR";
                }

            }
        }
    );

});




/*
==================================================
            EXCLUIR UNIDADES
==================================================
*/
function ExcluirUnidade(param) {

    Swal.fire({
        title: 'Deseja Realmente Excluir?',
        text: "A unidade será excluído permanentemente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0D2849',
        cancelButtonColor: '#FF0000',
        confirmButtonText: 'Sim, excluir!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {

            // Excluir a publicação
            $.post(Dados.url + "painel/ajax-excluir-unidade/"+param, function(data){

                console.log(data);

                if(data.tipo == true){

                    $("#unidade_"+param).css('display','none');

                    Swal.fire(
                        'Excluído!',
                        data.mensagem,
                        'success'
                    )

                }else {
                    Swal.fire(
                        'Erro!',
                        data.mensagem,
                        'error'
                    )
                }

            },"json");

        }
    })

}




/*
==================================================
            EXCLUIR SERVICOS
==================================================
*/
function ExcluirServico(param) {

    Swal.fire({
        title: 'Deseja Realmente Excluir?',
        text: "O servico será excluído permanentemente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0D2849',
        cancelButtonColor: '#FF0000',
        confirmButtonText: 'Sim, excluir!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {

            // Excluir a publicação
            $.post(Dados.url + "painel/ajax-excluir-servico/"+param, function(data){

                console.log(data);

                if(data.tipo == true){

                    $("#servico_"+param).css('display','none');

                    Swal.fire(
                        'Excluído!',
                        data.mensagem,
                        'success'
                    )

                }else {
                    Swal.fire(
                        'Erro!',
                        data.mensagem,
                        'error'
                    )
                }

            },"json");

        }
    })

}




/*
==================================================
           FORMULARIO LOGIN
==================================================
*/
$("#formLogin").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = new FormData(this);

    document.getElementById("btnFormLogin").disabled = true;
    document.getElementById("btnFormLogin").innerHTML = "VALIDANDO, AGUARDE...";

    $.ajax({
        type: "POST",
        dataType: 'json',
        mimeType: 'multipart/form-data',
        contentType: false,
        processData: false,
        cache: false,
        url: Dados.url + 'painel/ajax-login',
        data: form, // serializes the form's elements.
        success: function (data) {

            console.log(data);
            if(data.tipo == true){
                console.log(data);
                Swal.fire({
                    type: 'success',
                    title: 'Sucesso',
                    text: data.mensagem,
                })
                document.getElementById("formLogin").reset();

                setTimeout(() => {
                    location.href = Dados.url+'painel' ;
                }, 2000);

            }else {
                Swal.fire({
                    type: 'error',
                    title: 'Erro...',
                    text: data.mensagem,
                })
            }
            document.getElementById("btnFormLogin").disabled = false;
            document.getElementById("btnFormLogin").innerHTML = "FAZER LOGIN";

        },
        error: function (data) {
            Swal.fire({
                type: 'error',
                title: 'Erro...',
                text: data.mensagem,
            })
            document.getElementById("btnFormLogin").disabled = false;
            document.getElementById("btnFormLogin").innerHTML = "FAZER LOGIN";
        }

    });

    return false;
});




/*
==================================================
           FORMULARIO SERVIÇO ALTERAR
==================================================
*/
$("#formAlterar").submit(function(e) {

    document.getElementById("btnForm").disabled = true;
    document.getElementById("btnForm").innerHTML = "Alterando...";

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = new  FormData(this);

    $.ajax({
            type: "POST",
            dataType: 'json',
            mimeType: 'multipart/form-data',
            contentType: false,
            processData: false,
            cache: false,
            url: Dados.url + 'painel/ajax-editar-servico',
            data: form, // serializes the form's elements.
            success: function (data) {

                if(data.tipo == true){

                    Swal.fire({
                        type: 'success',
                        title: 'Sucesso',
                        text: data.mensagem,
                    })

                    document.getElementById("formAlterar").reset();
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "ALTERAR";

                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);

                }else {

                    Swal.fire({
                        type: 'error',
                        title: 'Erro...',
                        text: data.mensagem,
                    })
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "ALTERAR";
                }

            }
        }
    );

});




/*
==================================================
           FORMULARIO SERVIÇO INSERIR
==================================================
*/
$("#formCadastroServico").submit(function(e) {

    document.getElementById("btnForm").disabled = true;
    document.getElementById("btnForm").innerHTML = "Cadastrando...";

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = new  FormData(this);

    $.ajax({
            type: "POST",
            dataType: 'json',
            mimeType: 'multipart/form-data',
            contentType: false,
            processData: false,
            cache: false,
            url: Dados.url + 'painel/ajax-cadastrar-servico',
            data: form, // serializes the form's elements.
            success: function (data) {

                if(data.tipo == true){

                    Swal.fire({
                        type: 'success',
                        title: 'Sucesso',
                        text: data.mensagem,
                    })

                    document.getElementById("formCadastroServico").reset();
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "CADASTRAR";

                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);

                }else {

                    Swal.fire({
                        type: 'error',
                        title: 'Erro...',
                        text: data.mensagem,
                    })
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "CADASTRAR";
                }

            }
        }
    );

});




/*
==================================================
           FORMULARIO BLOG INSERIR
==================================================
*/
$("#formCadastroBlog").submit(function(e) {

    document.getElementById("btnForm").disabled = true;
    document.getElementById("btnForm").innerHTML = "Cadastrando...";

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = new  FormData(this);

    $.ajax({
            type: "POST",
            dataType: 'json',
            mimeType: 'multipart/form-data',
            contentType: false,
            processData: false,
            cache: false,
            url: Dados.url + 'painel/ajax-cadastrar-blog',
            data: form, // serializes the form's elements.
            success: function (data) {

                if(data.tipo == true){

                    Swal.fire({
                        type: 'success',
                        title: 'Sucesso',
                        text: data.mensagem,
                    })

                    document.getElementById("formCadastroBlog").reset();
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "CADASTRAR";

                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);

                }else {

                    Swal.fire({
                        type: 'error',
                        title: 'Erro...',
                        text: data.mensagem,
                    })
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "CADASTRAR";
                }

            }
        }
    );

});




/*
==================================================
           FORMULARIO SERVIÇO ALTERAR
==================================================
*/
$("#formAlterarBlog").submit(function(e) {

    document.getElementById("btnForm").disabled = true;
    document.getElementById("btnForm").innerHTML = "Alterando...";

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = new  FormData(this);

    $.ajax({
            type: "POST",
            dataType: 'json',
            mimeType: 'multipart/form-data',
            contentType: false,
            processData: false,
            cache: false,
            url: Dados.url + 'painel/ajax-editar-blog',
            data: form, // serializes the form's elements.
            success: function (data) {

                if(data.tipo == true){

                    Swal.fire({
                        type: 'success',
                        title: 'Sucesso',
                        text: data.mensagem,
                    })

                    document.getElementById("formAlterarBlog").reset();
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "ALTERAR";

                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);

                }else {

                    Swal.fire({
                        type: 'error',
                        title: 'Erro...',
                        text: data.mensagem,
                    })
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "ALTERAR";
                }

            }
        }
    );

});




/*
==================================================
            EXCLUIR BLOG
==================================================
*/
function ExcluirBlog(param) {

    Swal.fire({
        title: 'Deseja Realmente Excluir?',
        text: "A publicação será excluído permanentemente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0D2849',
        cancelButtonColor: '#FF0000',
        confirmButtonText: 'Sim, excluir!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {

            // Excluir a publicação
            $.post(Dados.url + "painel/ajax-excluir-blog/"+param, function(data){

                if(data.tipo == true){

                    $("#blog_"+param).css('display','none');

                    Swal.fire(
                        'Excluído!',
                        data.mensagem,
                        'success'
                    )

                }else {
                    Swal.fire(
                        'Erro!',
                        data.mensagem,
                        'error'
                    )
                }

            },"json");

        }
    })

}

/*
==================================================
                FORMULARIO USUARIO
==================================================
*/
$("#formCadastroUsuario").submit(function(e) {

    document.getElementById("btnForm").disabled = true;
    document.getElementById("btnForm").innerHTML = "Cadastrando...";

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = new  FormData(this);

    $.ajax({
            type: "POST",
            dataType: 'json',
            mimeType: 'multipart/form-data',
            contentType: false,
            processData: false,
            cache: false,
            url: Dados.url + 'painel/ajax-cadastrar-usuario',
            data: form, // serializes the form's elements.
            success: function (data) {

                if(data.tipo == true){

                    Swal.fire({
                        type: 'success',
                        title: 'Sucesso',
                        text: data.mensagem,
                    })

                    document.getElementById("formCadastroUsuario").reset();
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "CADASTRAR";

                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);

                }else {

                    Swal.fire({
                        type: 'error',
                        title: 'Erro...',
                        text: data.mensagem,
                    })
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "CADASTRAR";
                }

            }
        }
    );

});

$("#formAlterarUsuario").submit(function(e) {

    document.getElementById("btnForm").disabled = true;
    document.getElementById("btnForm").innerHTML = "Alterando...";

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = new  FormData(this);

    $.ajax({
            type: "POST",
            dataType: 'json',
            mimeType: 'multipart/form-data',
            contentType: false,
            processData: false,
            cache: false,
            url: Dados.url + 'painel/ajax-editar-usuario',
            data: form, // serializes the form's elements.
            success: function (data) {

                if(data.tipo == true){

                    Swal.fire({
                        type: 'success',
                        title: 'Sucesso',
                        text: data.mensagem,
                    })

                    document.getElementById("formAlterarUsuario").reset();
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "ALTERAR";

                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);

                }else {

                    Swal.fire({
                        type: 'error',
                        title: 'Erro...',
                        text: data.mensagem,
                    })
                    document.getElementById("btnForm").disabled = false;
                    document.getElementById("btnForm").innerHTML = "ALTERAR";
                }

            }
        }
    );

});

function ExcluirUsuario(param) {

    Swal.fire({
        title: 'Deseja Realmente Excluir?',
        text: "O usuário será excluído permanentemente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0D2849',
        cancelButtonColor: '#FF0000',
        confirmButtonText: 'Sim, excluir!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {

            // Excluir a publicação
            $.post(Dados.url + "painel/ajax-excluir-usuario/"+param, function(data){

                if(data.tipo == true){

                    $("#usuario_"+param).css('display','none');

                    Swal.fire(
                        'Excluído!',
                        data.mensagem,
                        'success'
                    )

                }else {
                    Swal.fire(
                        'Erro!',
                        data.mensagem,
                        'error'
                    )
                }

            },"json");

        }
    })

}