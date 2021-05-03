<?php $this->load->view("default/painel/include/header"); ?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.0.3/css/dataTables.dateTime.min.css">




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

                <li class="active ">
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
            <div class="text-center"><i style="font-size: 35px;font-weight: 700;color: #ffff;display: inline;margin-right: 15px;vertical-align: text-bottom;" class="fas fa-list"></i><h3 style="font-size: 35px;font-weight: 700;color: #ffff;display: inline;">Leads</h3></div>
            <canvas id="bigDashboardChart"></canvas>
        </div>
        <div class="content">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Todos os Leads</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <div style="margin-bottom: 40px" class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Data ínicio:</label><br>
                                                <input type="text" id="min" name="min">
                                            </div>
                                            <div class="col-md-5">
                                                <label>Data fim:</label><br>
                                                <input type="text" id="max" name="max">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <table id="example" class="display nowrap" style="width:100%">
                                    <thead style="color: #03428D !important;" class="text-primary">
                                    <tr><th>Nome</th>
                                        <th>Landing Page</th>
                                        <th>Telefone</th>
                                        <th>Unidade</th>
                                        <th>Data cadastro</th>
                                        <th class="text-center">Acões</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($leads as $lead): ?>
                                        <tr id="lead<?= $lead->id_lead ?>">

                                            <td><?= $lead->nome ?></td>
                                            <td><?= $lead->lp ?></td>
                                            <td><?= $lead->telefone ?></td>
                                            <td><?= $lead->unidade->nome ?></td>
                                            <td><?= date("Y/m/d", strtotime($lead->data_cadastro)) ?></td>

                                            <td class="text-center">
                                                <a href="#" class="btn excluirLead" style="margin-bottom: 10px;background-color: #d61111;border-radius: 25px;font-weight: bold;color: #ffffff" data-id="<?= $lead->id_lead ?>">EXCLUIR</a><br>
                                                <a href="#" class="btn" style="background-color: #03428D;border-radius: 25px;font-weight: bold;color: #ffffff" data-toggle="modal" data-target="#modal<?= $lead->id_lead ?>">DETALHES</a>
                                            </td>

                                        </tr>


                                        <!-- MODAL UNIDADE -->
                                        <div class="modal fade" id="modal<?= $lead->id_lead ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle"><?= $lead->nome ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="recipient-name" class="col-form-label">NOME:</label>
                                                                        <input type="text" class="form-control" value="<?= $lead->nome ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="col-form-label">LANDING PAGE:</label>
                                                                        <input type="text" class="form-control" value="<?= $lead->lp ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="recipient-name" class="col-form-label">TELEFONE:</label>
                                                                        <input type="text" class="form-control" value="<?= $lead->telefone ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="col-form-label">EMAIL:</label>
                                                                        <input type="text" class="form-control" value="<?= $lead->email ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="recipient-name" class="col-form-label">UNIDADE:</label>
                                                                        <input type="text" class="form-control" value="<?= $lead->unidade->nome ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="recipient-name" class="col-form-label">DATA CADASTRO:</label>
                                                                        <input type="text" class="form-control" value="<?= date("d/m/Y H:i:s", strtotime($lead->data_cadastro)) ?>">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="https://cdn.datatables.net/datetime/1.0.3/js/dataTables.dateTime.min.js"></script>


        <script>
            var minDate, maxDate;

            // Custom filtering function which will search data in column four between two values
            $.fn.dataTable.ext.search.push(
                function( settings, data, dataIndex ) {
                    var min = minDate.val();
                    var max = maxDate.val();
                    var date = new Date( data[4] );

                    if (
                        ( min === null && max === null ) ||
                        ( min === null && date <= max ) ||
                        ( min <= date   && max === null ) ||
                        ( min <= date   && date <= max )
                    ) {
                        return true;
                    }
                    return false;
                }
            );

            $(document).ready(function() {

                $('#example').DataTable( {language: {url: 'https://cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json'}} );

                // Create date inputs
                minDate = new DateTime($('#min'), {
                    format: 'D/M/YYYY'
                });
                maxDate = new DateTime($('#max'), {
                    format: 'D/M/YYYY'
                });

                // DataTables initialisation
                var table = $('#example').DataTable();

                // Refilter the table
                $('#min, #max').on('change', function () {
                    table.draw();
                });
            });
        </script>
