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

                    <li class="active ">
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

<!--                    <li>-->
<!--                        <a href="--><?//= base_url() ?><!--painel/usuarios">-->
<!--                            <i class="fas fa-users"></i>-->
<!--                            <p>Usuários</p>-->
<!--                        </a>-->
<!--                    </li>-->

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
                <div class="text-center"><i style="font-size: 35px;font-weight: 700;color: #ffff;display: inline;margin-right: 15px;vertical-align: text-bottom;" class="now-ui-icons design_app"></i><h3 style="font-size: 35px;font-weight: 700;color: #ffff;display: inline;">DASHBOARD</h3></div>
                <canvas id="bigDashboardChart"></canvas>
            </div>
            <div class="content">
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Servicos ativos</h5>
                                <h4 class="card-title">Serviços</h4>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                        <i class="now-ui-icons loader_gear"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="<?= base_url() ?>painel/servicos">Gerenciar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div style="height: 100px !important;" class="chart-area">
                                    <h2 style="margin-left: 20px; font-size: 60px;color: #03428D; font-weight: bold" class="text-left">
                                        <i style="font-size: 30px;vertical-align: unset;margin-right: -10px;" class="fas fa-list"></i>
                                        <?= $servicos ?>
                                    </h2>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="now-ui-icons arrows-1_refresh-69"></i> Atualizado recentemente
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Usuários ativos</h5>
                                <h4 class="card-title">Usuários</h4>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                        <i class="now-ui-icons loader_gear"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="<?= base_url() ?>painel/usuarios">Gerenciar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div style="height: 100px !important;" class="chart-area">
                                    <h2 style="margin-left: 20px; font-size: 60px;color: #03428D; font-weight: bold" class="text-left">
                                        <i style="font-size: 30px;vertical-align: unset;margin-right: -10px;" class="fas fa-users"></i>
                                        <?= $usuarios ?>
                                    </h2>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="now-ui-icons arrows-1_refresh-69"></i> Atualizado recentemente
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

<?php $this->load->view("default/painel/include/footer"); ?>