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

                <li>
                    <a href="<?= base_url() ?>painel/blog">
                        <i class="now-ui-icons education_paper"></i>
                        <p>Blog</p>
                    </a>
                </li>

                <li class="active ">
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
        <div class="text-center"><i style="font-size: 35px;font-weight: 700;color: #ffff;display: inline;margin-right: 15px;vertical-align: text-bottom;" class="now-ui-icons business_bank"></i><h3 style="font-size: 35px;font-weight: 700;color: #ffff;display: inline;">UNIDADES</h3></div>
        <canvas id="bigDashboardChart"></canvas>
    </div>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div style="padding: 50px">
                        <?php if(isset($unidade)): ?>
                            <form id="formAlterarUnidade">

                                <input type="hidden" name="id_unidades" value="<?= $unidade[0]->id_unidades ?>">

                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>Nome unidade</label>
                                        <input required name="nome" type="text" class="form-control" id="nome" value="<?= $unidade[0]->nome ?>">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Endereço</label>
                                        <input required name="endereco" type="text" class="form-control" id="endereco" value="<?= $unidade[0]->endereco ?>">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>CEP</label>
                                        <input required name="cep" type="text" class="form-control maskCEP" id="cep" value="<?= $unidade[0]->cep ?>">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Estado</label>
                                        <input required name="estado" type="text" class="form-control" id="estado" value="<?= $unidade[0]->estado ?>">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Cidade</label>
                                        <input required name="cidade" type="text" class="form-control" id="cidade" value="<?= $unidade[0]->cidade ?>">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Número</label>
                                        <input required name="numero" type="text" class="form-control" id="numero" value="<?= $unidade[0]->numero ?>">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Contato</label>
                                        <input required name="telefone" type="tel" class="form-control maskContato" id="telefone" value="<?= $unidade[0]->telefone ?>">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Email Contato</label>
                                        <input required name="email_contato" type="email" class="form-control" id="email_contato" value="<?= $unidade[0]->email_contato ?>">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Email Trabalhe Conosco</label>
                                        <input required name="email_trabalhe_conosco" type="email" class="form-control" id="email_trabalhe_conosco" value="<?= $unidade[0]->email_trabalhe_conosco ?>">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="referencia">Ponto de referência</label><br>
                                        <small>Informe um ponto de referência próximo a unidade</small>
                                        <input required name="referencia" type="text" class="form-control" id="referencia" value="<?= $unidade[0]->referencia ?>">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="imagem">Nova imagem da loja</label><br>
                                        <small>O tamanho ideal é <b>500x500px</b></small>
                                        <input name="imagem" type="file" id="imagem" class="form-control">
                                    </div>

                                </div>

                                <button style="background-color: #03428D" id="btnForm" type="submit" class="btn btn-primary">Alterar</button>
                            </form>
                        <?php else: ?>
                            <form id="formCadastroUnidade">

                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>Nome unidade</label>
                                        <input required name="nome" type="text" class="form-control" id="nome">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Endereço</label>
                                        <input required name="endereco" type="text" class="form-control" id="endereco">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>CEP</label>
                                        <input required name="cep" type="text" class="form-control maskCEP" id="cep">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Estado</label>
                                        <input required name="estado" type="text" class="form-control" id="estado">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Cidade</label>
                                        <input required name="cidade" type="text" class="form-control" id="cidade">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Número</label>
                                        <input required name="numero" type="text" class="form-control" id="numero">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Contato</label>
                                        <input required name="telefone" type="tel" class="form-control mascara-tel-cel" id="telefone">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Email Contato</label>
                                        <input required name="email_contato" type="email" class="form-control" id="email_contato">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Email Trabalhe Conosco</label>
                                        <input required name="email_trabalhe_conosco" type="email" class="form-control" id="email_trabalhe_conosco">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="referencia">Ponto de referência</label><br>
                                        <small>Informe um ponto de referência próximo a unidade</small>
                                        <input required name="referencia" type="text" class="form-control" id="referencia">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="imagem">Imagem da loja</label><br>
                                        <small>O tamanho ideal é <b>500x500px</b></small>
                                        <input name="imagem" type="file" id="imagem" class="form-control">
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