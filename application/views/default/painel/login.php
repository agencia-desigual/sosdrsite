<?php $this->load->view("default/painel/include/header"); ?>

    <body class="">
    <!-- CONTEUDO -->
    <div class="wrapper ">

        <!-- CABECALHO -->
        <div style="height: 35vh">
            <div class="panel-header panel-header" style="height: 35vh">
                <h2 style="color: #FFFFFF; font-weight: bold" class="text-center">FAÇA O LOGIN</h2>
                <h2 style="color: #FFFFFF; font-weight: lighter; font-size: 15px" class="text-center">Insira suas credenciais</h2>
            </div>
        </div>
        <!-- FIM CABECALHO -->

        <!-- FORMULARIO -->
        <div style="height: calc(100vh - 35vh); background-color: #FFFFFF;">

            <div class="container">
                <div class="row">

                    <div class="col-md-3"></div>
                    <div style="margin-top: -50px" class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title"></h5>
                            </div>
                            <div class="card-body">

                                <form id="formLogin">

                                    <div style="padding: 10px" class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h5>Email</h5>
                                                <input required="" name="email" type="email" class="form-control" placeholder="E-mail" value="">
                                            </div>
                                        </div>

                                    </div>
                                    <div style="padding: 10px" class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h5>Senha</h5>
                                                <input required="" name="senha" type="password" class="form-control" placeholder="Senha" value="">

                                            </div>
                                        </div>

                                    </div>

                                    <button id="btnFormLogin" type="submit" class="btn" style="vertical-align: super;background-color: #03428D;border-radius: 25px;font-weight: bold;float: right">FAZER LOGIN</button>

                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>

                </div>
            </div>

            <footer class="footer" style="text-align: center !important;">
                <div class="container-fluid" style="text-align: center !important;">
                    <div class="copyright" id="copyright" style="text-align: center !important;">
                        &copy;
                        <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                        </script>, Criado por
                        <a style="color: #0D2849; text-align: center !important;" href="http://www.desigual.com.br/site/" target="_blank">Desigual</a>.
                    </div>
                </div>
            </footer>

        </div>
        <!-- FIM FORMULARIO -->

    </div>
    <!-- FIM CONTEUDO -->


<?php $this->load->view("default/painel/include/footer"); ?>