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

                <li class="active ">
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
                    <div style="padding: 50px">
                        <?php if(isset($servico)): ?>
                            <form id="formAlterar">

                                <input type="hidden" name="id" value="<?= $servico[0]->Id ?>">

                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>Categoria</label>
                                        <select name="categoria" id="categoria" class="form-control">
                                            <option disabled>Selecione</option>
                                            <?php if($servico[0]->categoria == 'exames') : ?>
                                                <option selected value="exames">Exames</option>
                                                <option value="consultas">Consultas</option>
                                                <option value="odontologia">Odontologia</option>
                                            <?php elseif($servico[0]->categoria == 'consultas'): ?>
                                                <option value="exames">Exames</option>
                                                <option selected value="consultas">Consultas</option>
                                                <option value="odontologia">Odontologia</option>
                                            <?php else: ?>
                                                <option value="exames">Exames</option>
                                                <option value="consultas">Consultas</option>
                                                <option selected value="odontologia">Odontologia</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Nome</label>
                                        <input required name="nome" type="text" class="form-control" id="nome" value="<?= $servico[0]->nome ?>">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Descrição</label>
                                    <textarea required class="form-control" name="descricao" rows="4" style="border: 1px solid #E3E3E3 !important; border-radius: 25px;"><?= $servico[0]->descricao ?></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <label for="inputAddress2">Icone</label>
                                            <input name="imagem" type="file" class="form-control" placeholder="Apartamento, hotel, casa, etc.">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Status</label><br>
                                            <?php if($servico[0]->status == 1): ?>
                                                <input checked name="status" type="checkbox">
                                                <label style="vertical-align: bottom;" class="form-check-label" for="inlineCheckbox1">Ativar?</label>
                                            <?php else: ?>
                                                <input name="status" type="checkbox">
                                                <label style="vertical-align: bottom;" class="form-check-label" for="inlineCheckbox1">Ativar?</label>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <h3>Valor em cada unidade</h3>

                                    <?php if (!empty($unidadeServicos)) : ?>
                                        <small style="position: relative; top: -20px">Valores cadastrados</small>
                                        <?php foreach ($unidadeServicos as $unidadeServico) : ?>
                                            <div id="unidade_<?= $unidadeServico->id_unidade_servico ?>" class="row mb-3">
                                                <div class="col-md-4">
                                                    <input class="form-control" type="text" readonly="true" value="<?= $unidadeServico->nome ?>">
                                                </div>
                                                <div class="col-md-3">
                                                    <?php if ($unidadeServico->tipo_preco == "rs") : ?>
                                                        <input class="form-control" type="tel" readonly="true" value="Valor em R$">
                                                    <?php endif; ?>

                                                    <?php if ($unidadeServico->tipo_preco == "apartir") : ?>
                                                        <input class="form-control" type="tel" readonly="true" value="A partir de">
                                                    <?php endif; ?>

                                                    <?php if ($unidadeServico->tipo_preco == "orcamento") : ?>
                                                        <input class="form-control" type="tel" readonly="true" value="Faça seu orçamento">
                                                    <?php endif; ?>

                                                    <?php if (empty($unidadeServico->tipo_preco)) : ?>
                                                        <input class="form-control" type="tel" readonly="true" value="">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-md-3">
                                                    <input class="form-control" type="tel" readonly="true" value="<?= number_format($unidadeServico->preco,2,'.',','); ?>">
                                                </div>
                                                <div class="col-md-2">
                                                    <button onclick="apagarUnidadeServico('<?= $unidadeServico->id_unidade_servico ?>')" style="width: 100%;position: relative;top: -15px;" type="button" class="btn btn-danger">Apagar</button>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                    <?php if (!empty($unidades)) : ?>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <select required name="unidade"  class="form-control">
                                                    <option selected disabled>Selecione a unidade</option>
                                                    <?php foreach ($unidades as $unidade) : ?>
                                                        <option value="<?= $unidade->id_unidades ?>"><?= $unidade->nome ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <select required name="tipo_preco" id="tipo_preco" class="form-control">
                                                    <option selected disabled>Selecione o tipo</option>
                                                    <option value="rs">Valor em R$</option>
                                                    <option value="apartir">A partir de</option>
                                                    <option value="orcamento">Faça um orçamento</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <input required name="valorUnidade" type="tel" class="form-control maskPreco" placeholder="R$ 25,00">
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                </div>

                                <button style="background-color: #03428D" id="btnForm" type="submit" class="btn btn-primary">Alterar</button>
                            </form>
                        <?php else: ?>
                            <form id="formCadastroServico">

                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>Categoria</label>
                                        <select name="Cadcategoria" id="Cadcategoria" class="form-control">
                                            <option selected disabled>Selecione a unidade</option>
                                            <option value="exames">Exames</option>
                                            <option value="consultas">Consultas</option>
                                            <option value="odontologia">Odontologia</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Nome</label>
                                        <input required name="Cadnome" type="text" class="form-control" id="Cadnome" placeholder="Nome">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Descrição</label>
                                    <textarea required class="form-control" name="Caddescricao" rows="4" style="border: 1px solid #E3E3E3 !important; border-radius: 25px;"></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <label for="inputAddress2">Icone</label>
                                            <input name="Cadimagem" type="file" class="form-control">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputPassword4">Status</label><br>
                                            <input checked name="Cadstatus" type="checkbox">
                                            <label style="vertical-align: bottom;" class="form-check-label" for="inlineCheckbox1">Ativar?</label>
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
