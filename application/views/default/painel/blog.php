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
                    <div class="card-header">
                        <h4 class="card-title"> Todos as Notícias</h4> <a href="<?= base_url() ?>painel/blog/cadastrar/" class="btn" style="background-color: #03428D;border-radius: 25px;font-weight: bold;color: #ffffff" >CADASTRAR</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead style="color: #03428D !important;" class="text-primary">
                                <tr style="text-align: center"><th>Titulo</th>
                                    <th>Categoria</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Destaque</th>
                                    <th colspan="2" class="text-center">Acões</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($blog as $b): ?>
                                <tr style="text-align: center" id="blog_<?= $b->id_blog ?>">
                                    <td><?= $b->titulo ?></td>
                                    <td><?= $b->categoria ?></td>

                                    <?php if($b->status == 1): ?>
                                        <td class="text-center"><p style="color: #14c314" class="status">Ativo</p></td>
                                    <?php else: ?>
                                        <td class="text-center"><p style="color: #d80c0c" class="status">Inativo</p></td>
                                    <?php endif; ?>

                                    <?php if($b->destaque == 1): ?>
                                        <td class="text-center"><p style="color: #14c314" class="status">Sim</p></td>
                                    <?php else: ?>
                                        <td class="text-center"><p style="color: #d80c0c" class="status">Não</p></td>
                                    <?php endif; ?>

                                    <td><a href="<?= base_url() ?>painel/blog/editar/<?= $b->id_blog ?>" class="btn" style="background-color: #03428D;border-radius: 25px;font-weight: bold;color: #ffffff" >EDITAR</a></td>
                                    <td><a onclick="ExcluirBlog(<?= $b->id_blog ?>)" class="btn" style="background-color: red;border-radius: 25px;font-weight: bold;color: #ffffff">EXCLUIR</a></td>

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