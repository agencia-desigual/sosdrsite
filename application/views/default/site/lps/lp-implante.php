<?php $this->load->view("default/site/include/header-lp"); ?>

<style>
    html
    {
        overflow-x: hidden;
    }
    .img-preco-oftalmo
    {
        background-size: contain;
    }
    .bg-preco-ginecologista
    {
        margin: 40px;
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        height: 250px;
    }
    .container-texto
    {
        padding: 15px 50px;
    }

    .contatoLP
    {
        margin-top: 60px;
    }

    .contatoLP h1
    {
        color: #a30d82;
        font-size: 25px;
        margin-bottom: 30px;
    }

    .card-form
    {
        background-color: #eee;
        padding: 30px 75px 45px;
        margin-right: 71px;
    }

    .card-form input
    {
        width: 300px;
        height: 15px;
        padding: 5px 15px;
        border: 1px solid;
        margin-bottom: 10px;
    }

    .card-form select
    {
        height: 30px;
        width: 331px;
        padding: 5px 15px;
        border: 0px;
        margin-bottom: 10px;
    }

    @media only screen and (max-width: 425px) {
        #preco-img {
            margin: 0px !important;
            padding: 40px 20px !important;
        }

        .card-form
        {
            background-color: #eee;
            padding: 30px 30px 58px;
            margin-right: 0px;
        }

        .card-form input
        {
            width: 91%;
        }

        .card-form select
        {
            width: 100%;
        }
        .tamanho-100
        {
            width: 100% !important;
        }
    }
</style>

<style>

    .btn-whats-fixo
    {
        display: block;
        position: fixed;
        bottom: 15px;
        right: 15px;
        z-index: 999999;
    }

    @media (max-width: 425px) {

        .btn-whats-fixo img {
            width: 300px;
        }
    }

</style>
<div class="btn-whats-fixo">
    <a class="pulsando" target="_blank" href="https://api.whatsapp.com/send?phone=5508005809771?&amp;text=Quero agendar implante">
        <img src="<?= base_url() ?>arquivos/assets/img/lps/exame/btn-agenda-exame.png">
    </a>
</div>
    <!-- CONTADOR -->
    <div class="contador-timer">
        <div class="container">
            <div class="col-md-12 centraliza-itens">
                <p>Oportunidade única! Essa semana estamos com um <br>benefício no agendamento, nos chame para saber mais! <b class="contador"></b></p>
            </div>
        </div>
    </div>
    <!-- FIM >> CONTADOR -->

    <!-- Banner -->
    <div class="bg-lp-cardiologia-secao-1" style="margin-top: 0px;background-image: url('<?= base_url() ?>arquivos/assets/img/lp-implante/banner.png'); ">

        <div class="topo" style="position: relative">
            <div class="centraliza">
                <div class="col-2" style="margin-top: 60px; margin-right: 50px">
                    <form class="contatoLP">
                        <div class="card-form">

                            <h1>Deixe seu contato, um especialista vai entrar em contato ainda hoje!</h1>


                            <select name="id_unidade" required>
                                <option selected disabled>Selecione a unidade</option>
                                <?php foreach ($unidades as $unidade) : ?>
                                    <option value="<?= $unidade->id_unidades ?>"><?= $unidade->nome ?></option>
                                <?php endforeach; ?>
                            </select><br>
                            <input required name="lp" type="hidden" value="Landing page Implante">
                            <input required name="nome" type="text" maxlength="200" placeholder="Nome completo"><br>
                            <input required name="telefone" type="tel" class="celular" maxlength="50" placeholder="Telefone / Celular"><br>
                            <input name="email" type="email" maxlength="200" placeholder="Email"><br>
                            <label style="font-size: 13px;position: relative;top: -9px;">Não obrigatório</label><br>
                            <div style="margin-top: 20px" >
                                <button style="width: 100%;padding: 15px;font-size: 15px;background-color: #25D366;border: 0px;border-radius: 10px;color: #fff;" class="pulsando btnEnviaForm">
                                    Agendar contato
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clear"></div>
            </div>
        </div>

    </div>

    <!-- Depoimentos -->
    <section style="background-color: #0095d9 !important; height: auto; padding-bottom: 25px" class="depoimentos">
        <div class="centraliza">

            <div class="owl-carousel owl-theme" id="depoimentos">


                <!-- Item 1 -->
                <div class="item">
                    <div style="margin-top: 50px">
                        <div style="margin-bottom: -70px;"><img style="margin-left: 38%;border-radius: 50px; border: 5px solid white; width:85px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/sabrina.jpg"/></div>
                        <span><img style="margin-left: 35px; margin-bottom: 20px; width: 50px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/icone_depoimento.png"></span>
                        <div style="background-color: #EEEEEE; margin-top: -50px; margin-bottom: 50px; padding: 65px; border-radius: 10px; margin-right: 15px; margin-left: 15px;">
                            <div style="min-height: 200px" class="centraliza-itens">
                                <p style="text-align: center;font-weight: 600; color: #02428e;">Atendimento e ambientes excelentes. Super recomendo.</p>
                            </div>
                            <br>
                            <hr style="border-bottom: 5px solid #c8d4ed; width: 25%;">
                            <br>
                            <p style="font-size: 14px; text-align: center; text-transform: uppercase; font-weight: 600; color: #0095D9;">Sabrina Gasparini</p>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="item">
                    <div style="margin-top: 50px">
                        <div style="margin-bottom: -70px;"><img style="margin-left: 38%;border-radius: 50px; border: 5px solid white; width:85px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/1.jpg"/></div>
                        <span><img style="margin-left: 35px; margin-bottom: 20px; width: 50px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/icone_depoimento.png"></span>
                        <div style="background-color: #EEEEEE; margin-top: -50px; margin-bottom: 50px; padding: 65px; border-radius: 10px; margin-right: 15px; margin-left: 15px;">
                            <div style="min-height: 200px" class="centraliza-itens">
                                <p style="text-align: center;font-weight: 600; color: #02428e;">Ambiente agradável e atendimento ágil, parabéns continuem assim.</p>
                            </div>
                            <br>
                            <hr style="border-bottom: 5px solid #c8d4ed; width: 25%;">
                            <br>
                            <p style="font-size: 14px; text-align: center; text-transform: uppercase; font-weight: 600; color: #0095D9;">Dulcelena Chaves Garcia</p>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="item">
                    <div style="margin-top: 50px">
                        <div style="margin-bottom: -70px;"><img style="margin-left: 38%;border-radius: 50px; border: 5px solid white; width:85px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/joao.jpg"/></div>
                        <span><img style="margin-left: 35px; margin-bottom: 20px; width: 50px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/icone_depoimento.png"></span>
                        <div style="background-color: #EEEEEE; margin-top: -50px; margin-bottom: 50px; padding: 65px; border-radius: 10px; margin-right: 15px; margin-left: 15px;">
                            <div style="min-height: 200px" class="centraliza-itens">
                                <p style="text-align: center;font-weight: 600; color: #02428e;">Fantástica! Fui super bem atendido e muito ágil!</p>
                            </div>
                            <br>
                            <hr style="border-bottom: 5px solid #c8d4ed; width: 25%;">
                            <br>
                            <p style="font-size: 14px; text-align: center; text-transform: uppercase; font-weight: 600; color: #0095D9;">João Alves</p>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="item">
                    <div style="margin-top: 50px">
                        <div style="margin-bottom: -70px;"><img style="margin-left: 38%;border-radius: 50px; border: 5px solid white; width:85px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/1.jpg"/></div>
                        <span><img style="margin-left: 35px; margin-bottom: 20px; width: 50px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/icone_depoimento.png"></span>
                        <div style="background-color: #EEEEEE; margin-top: -50px; margin-bottom: 50px; padding: 65px; border-radius: 10px; margin-right: 15px; margin-left: 15px;">
                            <div style="min-height: 200px" class="centraliza-itens">
                                <p style="text-align: center;font-weight: 600; color: #02428e;">Amei a clínica tudo organizado, super atenciosos, médico então nem se fala. Vcs são ótimos. Sucesso sempre.</p>
                            </div>
                            <br>
                            <hr style="border-bottom: 5px solid #c8d4ed; width: 25%;">
                            <br>
                            <p style="font-size: 14px; text-align: center; text-transform: uppercase; font-weight: 600; color: #0095D9;">Cristiane Kotai</p>
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="item">
                    <div style="margin-top: 50px">
                        <div style="margin-bottom: -70px;"><img style="margin-left: 38%;border-radius: 50px; border: 5px solid white; width:85px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/1.jpg"/></div>
                        <span><img style="margin-left: 35px; margin-bottom: 20px; width: 50px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/icone_depoimento.png"></span>
                        <div style="background-color: #EEEEEE; margin-top: -50px; margin-bottom: 50px; padding: 65px; border-radius: 10px; margin-right: 15px; margin-left: 15px;">
                            <div style="min-height: 200px" class="centraliza-itens">
                                <p style="text-align: center;font-weight: 600; color: #02428e;">Atendimento Maravilhoso!!! Agilidade em todas as especialidades!!! Preço justo!!! Atendem até às 19h, que facilita para quem trabalha no comércio e/ou outras atividades!!! Parabéns S.O.S Dr.</p>
                            </div>
                            <br>
                            <hr style="border-bottom: 5px solid #c8d4ed; width: 25%;">
                            <br>
                            <p style="font-size: 14px; text-align: center; text-transform: uppercase; font-weight: 600; color: #0095D9;">Tânia Sueli Oliveira</p>
                        </div>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="item">
                    <div style="margin-top: 50px">
                        <div style="margin-bottom: -70px;"><img style="margin-left: 38%;border-radius: 50px; border: 5px solid white; width:85px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/marcio.jpg"/></div>
                        <span><img style="margin-left: 35px; margin-bottom: 20px; width: 50px" src="<?= base_url(); ?>arquivos/assets/img/depoimentos/icone_depoimento.png"></span>
                        <div style="background-color: #EEEEEE; margin-top: -50px; margin-bottom: 50px; padding: 65px; border-radius: 10px; margin-right: 15px; margin-left: 15px;">
                            <div style="min-height: 200px" class="centraliza-itens">
                                <p style="text-align: center;font-weight: 600; color: #02428e;">Ótima clínica com preços acessíveis.</p>
                            </div>
                            <br>
                            <hr style="border-bottom: 5px solid #c8d4ed; width: 25%;">
                            <br>
                            <p style="font-size: 14px; text-align: center; text-transform: uppercase; font-weight: 600; color: #0095D9;">Marcio Bitencourte</p>
                        </div>
                    </div>
                </div>


            </div>


        </div>

    </section>

    <!-- O que é -->
    <div style="width: 100%;">

        <div class="col-2">
            <div>
                <h3 style="text-align: center;font-size: 30px;margin-top: 80px;color: #c20e1a;">O que é o implante dentário?</h3>
                <div class="container-texto">
                    <p style="color: #02428e; font-size: 18px">Pode acontecer de qualquer um de nós é perdermos um ou mais dentes, não é mesmo? E, felizmente, <b>nós não precisamos mais ficar o resto da vida com aquele indesejada “janelinhas” em nosso sorriso.</b></p>
                    <br>
                    <p style="color: #02428e; font-size: 18px"><b>Os implantes dentários são suportes ou pinos de titânio que objetivam substituir as raízes dentárias,</b> mantendo a semelhança estética. Uma vez colocados, os implantes permitem ao dentista confeccionar dentes substitutos, as próteses dentárias, que serão incorporados à boca</b></p>
                    <br>
                    <p style="color: #02428e; font-size: 18px">Diferente da dentadura e da ponte-móvel, que apresentam desconforto ao paciente, os implantes são integrados ao osso, e <b>oferecem mais estabilidade e melhor</b></p>
                </div>
            </div>
        </div>

        <div class="col-2">
            <div id="preco-img" style="height: auto; background-color: #02428e;padding: 80px; color: #ffffff;">
                <div class="img-preco-oftalmo" style="background-image: url('<?= base_url() ?>arquivos/assets/img/lp-implante/dentes.png');"></div>
                <div style="display: none; width: 150%">

                </div>
            </div>
        </div>

    </div>
    <div class="clear"></div>

    <!-- Icones -->
    <div style="width: 100%; height: auto; background-color: #eeeeee">
        <div class="centraliza">
            <div class="centraliza-itens">
                <div style="margin-top: 30px; margin-bottom: 30px" class="col-4-icones">
                    <img style=" width: 150px;" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-1.png"><br>
                    <h2 style="font-size: 20px; color: #02428e;">Mais de<br>100.000<br>pacientes<br>atendidos.</h2>
                </div>
                <div style="margin-top: 30px; margin-bottom: 30px" class="col-4-icones">
                    <img style=" width: 150px;" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-2.png"><br>
                    <h2 style="font-size: 20px; color: #02428e;">Nota dada<br>por nossos<br>pacientes.<br><p style="font-size: 12px;">Fonte: pesquisa interna</p></h2>

                </div>
                <div style="margin-top: 30px; margin-bottom: 30px" class="col-4-icones">
                    <img style=" width: 150px;" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-3.png"><br>
                    <h2 style="font-size: 20px; color: #02428e;">Médicos com<br>experiência e<br>professores de<br>universidades.</h2>
                </div>
                <div style="margin-top: 30px; margin-bottom: 30px" class="col-4-icones">
                    <img style=" width: 150px;" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-4.png"><br>
                    <h2 style="font-size: 20px; color: #02428e;">Sem<br>Mensalidade.</h2>
                </div>
            </div>
        </div>
        <div class="centraliza">
            <div class="col-2"></div>
            <div class="col-2"></div>
        </div>
    </div>
    <div class="clear"></div>

    <!-- Textos -->
    <div style="width: 100%;">

        <div class="col-2">
                <div style="padding: 100px 50px">
                    <div style="background-color: #02428e; height: auto;border-radius: 15px; margin-bottom: 100px">
                        <div style="text-align: center">
                            <img style="margin-top: -30px;width: 95%;" src="<?= base_url() ?>arquivos/assets/img/lp-implante/titulo-1.png">
                        </div>
                        <div style="padding: 50px 25px">
                            <p style="color: #fff; font-weight: bold; font-size: 25px">Os implantes podem ser feitos utilizando vários materiais, seja simultaneamente ou não. Todos eles são completamente seguros para a saúde e podem ser utilizados tranquilamente, oferecendo segurança, resistência e durabilidade.</p>
                        </div>
                    </div>
                    <div style="background-color: #0094d8; height: auto;border-radius: 15px; margin-bottom: 100px">
                        <div style="text-align: center">
                            <img style="margin-top: -30px;width: 95%;" src="<?= base_url() ?>arquivos/assets/img/lp-implante/titulo-2.png">
                        </div>
                        <div style="padding: 50px 25px">
                            <p style="color: #fff; font-size: 25px">
                                <b>+ prótese ósseo-integrada:</b> é implantada diretamente no osso e feita em pequenas etapas;
                            </p>
                            <br>
                            <p style="color: #fff; font-size: 25px">
                                <b>+ prótese protocolo:</b> ideal para a reabilitação de pessoas que perderam muitos ou todos os dentes;
                            </p>
                            <br>
                            <p style="color: #fff; font-size: 25px">
                                <b>+ prótese overdenture:</b> prótese que pode ser removida pelo paciente;
                            </p>
                            <br>
                            <p style="color: #fff; font-size: 25px">
                                <b>+ implantes unitários:</b> feitos quando um ou poucos dentes foram perdidos.
                            </p>
                        </div>
                    </div>
                    <div style="background-color: #02428e; height: auto;border-radius: 15px; margin-bottom: 100px">
                        <div style="text-align: center">
                            <img style="padding: 30px; width: 85%; border-radius: 40px" src="<?= base_url() ?>arquivos/assets/img/lp-implante/dentes-texto.png">
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-2">
            <div style="margin-top:90px;background-color: #02428e; height: auto;border-radius: 15px; margin-bottom: 100px">
                <div style="text-align: center">
                    <img style="margin-top: -30px;width: 95%;" src="<?= base_url() ?>arquivos/assets/img/lp-implante/titulo-3.png">
                </div>
                <div style="padding: 50px 25px">
                    <p style="color: #fff; font-size: 25px">
                        <b>1 + Segurança</b><br>
                        A tecnologia na área odontológica evolui a cada dia, o que permite que o tratamento de implantes hoje tenha altos índices de sucesso, que chegam a 98%.
                    </p>
                    <br>
                    <p style="color: #fff; font-size: 25px">
                        <b>2 + Mastigação</b><br>
                        Possibilita uma melhora na oclusão (fechamento), o que devolve ao paciente as condições ideais da articulação da mandíbula e de alimentação.
                    </p>
                    <br>
                    <p style="color: #fff; font-size: 25px">
                        <b>3 + Estabilidade</b><br>
                        O implante dentário devolve estabilidade à arcada dentária, já quem um único dente torto pode causar o entortamento de vários outros.
                    </p>
                    <br>
                    <p style="color: #fff; font-size: 25px">
                        <b>4 + Indolor</b><br>
                        Atualmente, as técnicas avançadas para a realização de implantes praticamente eliminaram as possibilidades de dor no procedimento. A recuperação, com a ajuda de medicamentos analgésicos, também costuma ser rápida e tranquila.
                    </p>
                    <br>
                    <p style="color: #fff; font-size: 25px">
                        <b>5 + Eficiência</b><br>
                        A eficiência da mastigação dos dentes implantados é muito semelhante aos dentes naturais.
                    </p>
                    <br>
                    <p style="color: #fff; font-size: 25px">
                        <b>6 + Sociabilidade</b><br>
                        Quem faz implantes dentários perde o medo de falar em público, pois não existem chances de deslocamentos de implantes dentários.
                    </p>
                    <br>
                    <p style="color: #fff; font-size: 25px">
                        <b>7 + Fonética</b><br>
                        Alguns problemas de fonética estão relacionados à posição incorreta dos dentes. Corrigir isso, muitas vezes ajudará a melhorar a fonética do paciente.
                    </p>
                    <br>
                    <p style="color: #fff; font-size: 25px">
                        <b>8 + Estética</b><br>
                        Os tratamentos de implantes dentários promovem resultados estéticos incríveis.
                    </p>
                    <br>
                    <p style="color: #fff; font-size: 25px">
                        <b>9 + Investimento</b><br>
                        Os preços dos implantes dentários estão cada vez mais acessíveis. O custo/benefício é inquestionável.
                    </p>
                    <br>
                    <p style="color: #fff; font-size: 25px">
                        <b>10 + Autoestima</b><br>
                        Um sorriso faltando um dente tira a autoestima de qualquer pessoa. Os implantes dentários devolvem a alegria de viver!
                    </p>
                </div>
            </div>
        </div>

    </div>
    <div class="clear"></div>

    <div style="width: 100%">
        <div style="width: 30%"></div>
        <div class="tamanho-100" style="width: 40%;display: block;margin: 0 auto;margin-bottom: 75px;">
            <form class="contatoLP">
                <div class="card-form">

                    <h1>Deixe seu contato, um especialista vai entrar em contato ainda hoje!</h1>


                    <select name="id_unidade" required>
                        <option selected disabled>Selecione a unidade</option>
                        <?php foreach ($unidades as $unidade) : ?>
                            <option value="<?= $unidade->id_unidades ?>"><?= $unidade->nome ?></option>
                        <?php endforeach; ?>
                    </select><br>
                    <input required name="lp" type="hidden" value="Landing page Implante">
                    <input required name="nome" type="text" maxlength="200" placeholder="Nome completo"><br>
                    <input required name="telefone" type="tel" class="celular" maxlength="50" placeholder="Telefone / Celular"><br>
                    <input name="email" type="email" maxlength="200" placeholder="Email"><br>
                    <label style="font-size: 13px;position: relative;top: -9px;">Não obrigatório</label><br>
                    <div style="margin-top: 20px" >
                        <button style="width: 100%;padding: 15px;font-size: 15px;background-color: #25D366;border: 0px;border-radius: 10px;color: #fff;" class="pulsando btnEnviaForm">
                            Agendar contato
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div style="width: 30%"></div>
    </div>
    <div class="clear"></div>


    <!-- Rodapé -->
    <div style="width: 100%; height: auto; background-color: #013069">

        <div class="centraliza">

            <div style="height: auto; background-color: #013069">
                <div class="">
                    <h2 style="padding: 50px 0px 50px 0px;" class="texto-voce-sabia">
                        Gostou e quer nos conhecer melhor?<p style="font-size: 22px; display: inline">Acesse nosso site!</p>
                        <a href="https://sosdr.com" class="btn-sos-dr"> SOSDR.COM </a>
                    </h2>
                </div>
            </div>

            <hr style="border: 1px solid #27448a">

            <div style="margin-bottom: 30px; margin-top: 25px;height: auto; background-color: #013069">

                <div style="text-align: center" class="col-1">
                    <a href="https://play.google.com/store/apps/details?id=com.optimizeit.sosdrap" target="_blank">
                        <img style="margin-right: 15px;margin-top: 25px;margin-bottom: 25px" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-app.png">
                    </a>
                    <a href="https://www.instagram.com/sosdr.oficial/" target="_blank">
                        <img style="margin-right: 15px;margin-top: 25px;margin-bottom: 25px" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-insta.png">
                    </a>
                    <a href="https://www.facebook.com/sosdr.oficial" target="_blank">
                        <img style="margin-right: 15px;margin-top: 25px;margin-bottom: 25px" src="<?= base_url() ?>arquivos/assets/img/lp-cardiologia/icone-face.png">
                    </a>
                </div>

                <div style="display: none">
                    <a style="text-decoration: none;" href="https://wa.me/5508005809771">
                            <span>
                                <img style="width: 40px !important;" class="icones-contato" src="<?= base_url() ?>arquivos/assets/img/whats.png">
                                <p style="position: relative;top: -35px;display: inline; color: #ffffff;font-weight: bold;font-size: 30px;">0800 580 9771</p>
                            </span>
                    </a>
                </div>

            </div>
            <div class="clear"></div>
        </div>

        <div style="display: none; width: 100%; height: auto; background-color: #013473;">
            <div class="centraliza-itens">
                <h2 style="padding: 50px 0px 50px 0px;" class="texto-voce-sabia">
                    Rua Nove de Julho, 1397 - Unidade Marília
                </h2>
            </div>
        </div>

    </div>
    <div class="clear"></div>

    <!-- Fixo -->
    <div class="rodape-fixo" style="display:none;position: fixed;bottom: 0px;left: 0px;width: 100%;z-index: 99; background-color: #27448a">
        <div style="padding: 20px;margin-top: 10px;" class="centraliza-itens">
            <a href="https://wa.me/5508005809771" class="animated infinite pulse" style="width: 160px !important;padding: 17px !important;font-size: 13px !important;background-color: #c20e1a !important;border: 0px !important; border-radius: 10px !important;color: #ffffff !important;"> AGENDE JÁ! </a>
        </div>
    </div>

    <style>

        .ajuda-whats
        {
            display: block;
            width: 100%;
            left: -30px;
            position: relative;
            border: 10px;
            bottom: -150px;
        }

        .img-mobile-whats
        {
            width: 300px;
            display: block;
            left: -10px;
            position: relative;
            background-color: #fff;
            border-radius: 15px;
            border: 5px solid #75e39e;
            text-align: center;
        }

        @media only screen and (max-width: 425px) {
            .btn-whats-fixo .mobile
            {
                display: none !important;
            }
            .img-mobile-whats
            {
                width: 85%;


                display: block;
                left: 10%;
                position: relative;
                background-color: transparent;
                border-radius: 0px;
                border: 0px;
                text-align: center;
            }
            .ajuda-whats
            {
                display: block;
                width: 90%;
                left: 22px;
                position: relative;
                background-color: #fff;
                border-radius: 60px;
                border: 5px solid #75e39e;
                text-align: center;
            }
        }

    </style>

    <script>
        setTimeout(function () {
            $(".ajuda-whats").css("bottom","0px");
        },5000);
    </script>

    <!-- Plugin OWL -->
    <script src="<?= base_url(); ?>arquivos/plugins/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

    <!-- Mascara -->
    <script src="<?= base_url(); ?>arquivos/assets/js/mascara.js"></script>

    <!-- Mascara -->
    <script src="<?= base_url(); ?>arquivos/assets/js/funcoes.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" defer></script>


    <!-- JS Unico - referente a está pagina -->
    <script type="text/javascript">

        $( document ).ready(function() {
            console.log( "ready!" );

            var data = new Date(),
                dia  = data.getDate()+1,
                mes  = data.getMonth() + 1,
                ano  = data.getFullYear(),
                hora = data.getHours(),
                minuto = data.getMinutes() + 10;

            console.log("dia:"+dia+ " mes:"+ mes + " ano:"+ ano+ " hora: "+hora+" minuto: "+minuto)


            if (minuto >= 60)
            {
                hora++;
                minuto = 5;
            }


            $(".contador").countdown(ano+"/"+mes+"/"+dia+" "+hora+":"+minuto+":00", function(event) {
                $(this).text( event.strftime('%H:%M:%S') );
            });


            var SPMaskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                },
                spOptions = {
                    onKeyPress: function(val, e, field, options) {
                        field.mask(SPMaskBehavior.apply({}, arguments), options);
                    }
                };

            $('#campoCel1').mask(SPMaskBehavior, spOptions);
        });
        <?php if($msg != null): ?>

        <?php if($msg == true): ?>

        Swal.fire({
            type: 'success',
            title: 'Sucesso!',
            text: 'Contato enviado com sucesso. Em breve entraremos em contato.',
        });


        <?php else: ?>

        Swal.fire({
            type: 'error',
            title: 'Opss',
            text: 'Ocorreu um erro ao enviar contato, tente novamente.',
        });

        <?php endif; ?>

        <?php endif; ?>


        function ModalLps(acao)
        {
            if(acao == "fecha")
            {
                $("#modalLps").css("opacity", "0");

                setTimeout(function(){
                    $("#modalLps").css("display", "none");
                },500);
            }
            else
            {
                $("#modalLps").css("display", "flex")

                setTimeout(function(){
                    $("#modalLps").css("opacity", "1");
                },500);
            }
        }

        // Slide depoimentos
        $('#depoimentos').owlCarousel({
            loop: true,
            margin: 0,
            stagePadding: 0,
            nav: false,
            autoplay: false,
            items: 3,
            responsive : {
                320 : {
                    items: 1,
                    nav: false
                },
                450 : {
                    items: 1,
                    nav: false
                },
                600 : {
                    items: 2,
                    nav: false
                },
                850 : {
                    items: 3,
                    nav: false
                },
                1440 : {
                    items: 3
                }
            }
        });

    </script>

</body>
</html>