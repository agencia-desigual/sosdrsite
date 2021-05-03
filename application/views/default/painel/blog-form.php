<?php $this->load->view("default/painel/include/header"); ?>

    <body class="">

<div class="wrapper ">
    <div class="sidebar" data-color="blue">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="<?= base_url() ?>painel" class="simple-text logo-mini">
                <i class="now-ui-icons users_single-02"></i>
            </a>
            <a href="<?= base_url() ?>painel" class="simple-text logo-normal">
                <?php $nome = explode(" ",$_SESSION['SOS-USUARIO']['NOME']); ?>
                <?= $nome[0]; ?>
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">

                <li>
                    <a href="<?= base_url() ?>painel">
                        <i class="now-ui-icons design_app"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url() ?>painel/servicos">
                        <i class="fas fa-list"></i>
                        <p>Serviços</p>
                    </a>
                </li>

                <li class="active ">
                    <a href="<?= base_url() ?>painel/blog">
                        <i class="now-ui-icons education_paper"></i>
                        <p>Blog</p>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url() ?>painel/unidades">
                        <i class="now-ui-icons business_bank"></i>
                        <p>Unidades</p>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url() ?>painel/leads">
                        <i class="fas fa-list"></i>
                        <p>Leads</p>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url() ?>painel/usuarios">
                        <i class="fas fa-user"></i>
                        <p>Usuários</p>
                    </a>
                </li>

                <li class="active-pro">
                    <a href="<?= base_url(); ?>painel/sair">
                        <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                        <p>Sair</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel" id="main-panel">

    <div class="panel-header panel-header-md">
        <div class="text-center"><i style="font-size: 35px;font-weight: 700;color: #ffff;display: inline;margin-right: 15px;vertical-align: text-bottom;" class="now-ui-icons education_paper"></i><h3 style="font-size: 35px;font-weight: 700;color: #ffff;display: inline;">BLOG</h3></div>
        <canvas id="bigDashboardChart"></canvas>
    </div>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div style="padding: 50px">
                        <?php if(isset($blog)): ?>
                            <form id="formAlterarBlog">

                                <!-- ID do blog -->
                                <input name="id" value="<?= $blog[0]->id_blog ?>" type="hidden">

                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label>Titulo</label>
                                        <input required id="titulo" name="titulo" type="text" class="form-control url" maxlength="200" value="<?= $blog[0]->titulo ?>">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Categoria</label>
                                        <input required name="categoria" type="text" class="form-control" maxlength="200" value="<?= $blog[0]->categoria ?>">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputPassword4">Status</label><br>

                                        <?php if ($blog[0]->status == 1) : ?>
                                            <input checked name="status" type="checkbox">
                                        <?php else: ?>
                                            <input name="status" type="checkbox">
                                        <?php endif; ?>
                                        <label style="vertical-align: bottom;" class="form-check-label" for="inlineCheckbox1">Ativar?</label>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputPassword4">Post em destaque?</label><br>
                                        <?php if ($blog[0]->destaque == 1) : ?>
                                            <input checked name="destaque" type="checkbox">
                                        <?php else: ?>
                                            <input name="destaque" type="checkbox">
                                        <?php endif; ?>
                                        <label style="vertical-align: bottom;" class="form-check-label" for="inlineCheckbox1">Sim</label>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Descrição</label>
                                    <textarea required class="form-control" name="descricao" id="summernote"><?= $blog[0]->descricao ?></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label>Resumo</label>
                                            <input required name="resumo" type="text" maxlength="100" class="form-control" value="<?= $blog[0]->resumo ?>" >
                                        </div>

                                        <div class="col-md-4">
                                            <label>Tags (adicione vírgula sem espaços)</label>
                                            <input required name="tags" type="text" maxlength="200" class="form-control" value="<?= $blog[0]->tags ?>">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputAddress2">Imagem Capa</label>
                                            <input name="imagem" type="file" class="form-control">
                                        </div>

                                    </div>
                                </div>

                                <div style="display: none" class="form-group">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label>URL</label>
                                            <input required id="url" name="url" type="text" maxlength="100" class="form-control url"  value="<?= $blog[0]->url ?>">
                                        </div>

                                    </div>
                                </div>
                                <button style="background-color: #03428D" id="btnForm" type="submit" class="btn btn-primary">ALTERAR</button>
                            </form>
                        <?php else: ?>
                            <form id="formCadastroBlog">

                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label>Titulo</label>
                                        <input required id="titulo" name="titulo" type="text" class="form-control url" maxlength="200" placeholder="Titulo">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Categoria</label>
                                        <input required name="categoria" type="text" class="form-control" maxlength="200" placeholder="Categoria">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputPassword4">Status</label><br>
                                            <input checked name="status" type="checkbox">
                                            <label style="vertical-align: bottom;" class="form-check-label" for="inlineCheckbox1">Ativar</label>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputPassword4">Post em destaque?</label><br>
                                        <input name="destaque" type="checkbox">
                                        <label style="vertical-align: bottom;" class="form-check-label" for="inlineCheckbox1">Sim</label>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Descrição</label>
                                    <textarea required class="form-control" name="descricao" id="summernote"></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label>Resumo</label>
                                            <input required name="resumo" type="text" maxlength="100" class="form-control" >
                                        </div>

                                        <div class="col-md-4">
                                            <label>Tags (adicione vírgula sem espaços)</label>
                                            <input required name="tags" type="text" maxlength="200" class="form-control" >
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputAddress2">Imagem Capa</label>
                                            <input name="imagem" type="file" class="form-control">
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label>URL</label>
                                            <input required id="url" name="url" type="text" maxlength="100" class="form-control url" >
                                        </div>

                                    </div>
                                </div>
                                <button style="background-color: #03428D" id="btnForm" type="submit" class="btn btn-primary">CADASTRAR</button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php $this->load->view("default/painel/include/footer"); ?>
<script>
    $(document).ready(function() {
        $('.url').on('keyup', function() {

            var v1 = document.getElementById("titulo").value ;

            var find = ["ã","à","á","ä","â","è","é","ë","ê","ì","í","ï","î","ò","ó","ö","ô","ù","ú","ü","û","ñ","ç"]; "à","á","ä","â","è","é","ë","ê","ì","í","ï","î","ò","ó","ö","ô","ù","ú","ü","û","ñ","ç"
            var replace = ["a","a","a","a","a","e","e","e","e","i","i","i","i","o","o","o","o","u","u","u","u","n","c"];

            // Remove os especiais
            v1 = v1.replace("?","");
            v1 = v1.replace("!","");
            v1 = v1.replace("/","");
            v1 = v1.replace("\"","");
            v1 = v1.replace("]","");
            v1 = v1.replace("[","");
            v1 = v1.replace(")","");
            v1 = v1.replace("(","");
            v1 = v1.replace("^","");
            v1 = v1.replace(":","");
            v1 = v1.replace(";","");
            v1 = v1.replace(",","");
            v1 = v1.replace(".","");
            v1 = v1.replace("_","");
            v1 = v1.replace("º","");
            v1 = v1.replace("ª","");
            v1 = v1.replace("#","");
            v1 = v1.replace("@","");
            v1 = v1.replace("+","");
            v1 = v1.replace("%","");
            v1 = v1.replace("$","");
            v1 = v1.replace("*","");
            v1 = v1.replace("£","");
            v1 = v1.replace("|","");
            v1 = v1.replace("ÿ","");
            v1 = v1.replace('"',"");
            v1 = v1.replace("'","");
            v1 = v1.replace("`","");
            v1 = v1.replace("´","");

            for (var i = 0; i < find.length; i++) {
                v1 = v1.replace(new RegExp(find[i], 'gi'), replace[i]);
            }

            var desired = v1.replace(/\s+/g, '-');
            desired = desired.toLowerCase();

            var v2 = document.getElementById("url").value = desired;

        });
    })
</script>
