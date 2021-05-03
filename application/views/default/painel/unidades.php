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
        <div class="text-center"><i style="font-size: 35px;font-weight: 700;color: #ffff;display: inline;margin-right: 15px;vertical-align: text-bottom;" class="fas fa-list"></i><h3 style="font-size: 35px;font-weight: 700;color: #ffff;display: inline;">SERVIÇOS</h3></div>
        <canvas id="bigDashboardChart"></canvas>
    </div>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Todos as Unidades</h4> <a href="<?= base_url() ?>painel/unidades/cadastrar/" class="btn" style="background-color: #03428D;border-radius: 25px;font-weight: bold;color: #ffffff" >CADASTRAR</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead style="color: #03428D !important;" class="text-primary">
                                <tr><th>Nome</th>
                                    <th>Cidade</th>
                                    <th class="text-center">Contato</th>
                                    <th class="text-center">Acões</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($unidades as $unidade): ?>
                                <tr id="unidade_<?= $unidade->id_unidades ?>">
                                    <td><?= $unidade->nome ?></td>
                                    <td><?= $unidade->cidade ?></td>
                                    <td class="text-center"><p style="color: #14c314" class="status"><?= $unidade->telefone ?></p></td>
                                    <td><a href="<?= base_url() ?>painel/unidades/editar/<?= $unidade->id_unidades ?>" class="btn" style="background-color: #03428D;border-radius: 25px;font-weight: bold;color: #ffffff" >EDITAR</a></td>
                                    <td><a onclick="ExcluirUnidade(<?= $unidade->id_unidades ?>)" class="btn" style="background-color: red;border-radius: 25px;font-weight: bold;color: #ffffff">EXCLUIR</a></td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php $this->load->view("default/painel/include/footer"); ?>