<?php $this->load->view("default/painel/include/header"); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

<style>
    .multiselect-item.filter
    {
        display: none !important;
    }
</style>

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

                <li class="active">
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
        <div class="text-center"><i style="font-size: 35px;font-weight: 700;color: #ffff;display: inline;margin-right: 15px;vertical-align: text-bottom;" class="fas fa-list"></i><h3 style="font-size: 35px;font-weight: 700;color: #ffff;display: inline;">USUÁRIOS</h3></div>
        <canvas id="bigDashboardChart"></canvas>
    </div>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div style="padding: 50px">
                        <?php if(isset($usuario)): ?>
                            <form id="formAlterarUsuario">

                                <input type="hidden" name="id" value="<?= $usuario[0]->Id ?>">

                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>Nome</label>
                                        <input value="<?= $usuario[0]->nome ?>" required name="nome" type="text" class="form-control" id="Cadnome" placeholder="Nome">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input value="<?= $usuario[0]->email ?>" required name="email" type="text" class="form-control" id="Cademail" placeholder="Email">
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="form-group col-md-12">
                                        <label>Nova Senha</label>
                                        <input name="senha" type="password" class="form-control" id="Cadsenha" placeholder="*****">
                                    </div>

                                </div>

                                <button style="background-color: #03428D" id="btnForm" type="submit" class="btn btn-primary">ALTERAR</button>
                            </form>
                        <?php else: ?>
                            <form id="formCadastroUsuario">

                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>Nome</label>
                                        <input required name="nome" type="text" class="form-control" id="Cadnome" placeholder="Nome">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input required name="email" type="text" class="form-control" id="Cademail" placeholder="Email">
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>Senha</label>
                                        <input required name="senha" type="password" class="form-control" id="Cadsenha" placeholder="*****">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Confirmar Senha</label>
                                        <input required name="c_senha" type="password" class="form-control" id="CadcSenha" placeholder="*****">
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
        <script>
            $('#framework').multiselect({
                nonSelectedText: 'Unidades',
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,
                buttonWidth:'80%'
            });
        </script>
