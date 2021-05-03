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

<!--                <li class="active ">-->
<!--                    <a href="--><?//= base_url() ?><!--painel/usuarios">-->
<!--                        <i class="fas fa-users"></i>-->
<!--                        <p>Usuários</p>-->
<!--                    </a>-->
<!--                </li>-->

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
            <div class="text-center"><i style="font-size: 35px;font-weight: 700;color: #ffff;display: inline;margin-right: 15px;vertical-align: text-bottom;" class="fas fa-users"></i><h3 style="font-size: 35px;font-weight: 700;color: #ffff;display: inline;">USUÁRIOS</h3></div>
            <canvas id="bigDashboardChart"></canvas>
        </div>
        <div class="content">
            <div class="row">


            </div>
        </div>

<?php $this->load->view("default/painel/include/footer"); ?>