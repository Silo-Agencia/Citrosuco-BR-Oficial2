<?php get_header(); ?>

<section class="sliderTopo">
    <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-fornecedores.png">
    </div>
</section>

<section class="colunas2 valores">

    <div class="container">
        <div class="row">

            <div class="col-12 align-self-center">
                <h2 class="title-conduta">Mensagem de valores e propósito</h2>
            </div>
            <div class="col-12 col-md-6">
                <?php the_field('texto_valores_e_proposito_col_um'); ?>
            </div>

            <div class="col-12 col-md-6">
                <?php the_field('texto_valores_e_proposito_col_dois'); ?>
            </div>

        </div>
    </div>

</section>

<section id="fornecedores" class="colunas2 modulo fornecedores">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <h2 class="title-col-quem-somos"><?php the_field('titulo_fornecedores_copiar'); ?></h2>
                <?php the_field('texto_fornecedores_copiar'); ?>
            </div>
        </div>
    </div>
</section>

<section class="linhas">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="item">
                    <h3><?php the_field('titulo_se_tornar_fornecedor'); ?></h3>
                    <a class="btn-col-produtos" href="http://citrosuco.sourcing.ariba.com/ad/selfRegistration" target="_blank"><?php the_field('botao_se_tornar_fornecedor'); ?></a>
                </div>
                <div class="item">
                    <h3><?php the_field('titulo_ja_tem_cadastro'); ?></h3>
                    <a class="btn-col-produtos" href="https://service.ariba.com/Sourcing.aw/124993012/aw?awh=r&awssk=DrrXrfvC&dard=1" target="_blank"><?php the_field('botao_ja_tem_cadastro'); ?></a>
                </div>
                <div class="item">
                    <h3><?php the_field('titulo_ja_e_fornecedor'); ?></h3>
                    <a class="btn-col-produtos" href="https://fiori.citrosuco.com.br:44303/citroportal" target="_blank"><?php the_field('botao_ja_e_fornecedor'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="passo">
    <img class="img passo" src="<?php echo get_template_directory_uri(); ?>/assets/img/passo.png">
    <div class="container">
        <div class="row icones nav nav-tabs" role="tablist">
            <a class="col-3 col-md-3 nav-link" id="um-tab" data-toggle="tab" href="#um" role="tab" aria-selected="false">
                <div class="icone icone1 nav-item">
                    <div></div>
                    <h2>1) Contatos da central cadastro de fornecedores</h2>
                </div>
            </a>
            <a class="col-3 col-md-3 nav-link" id="dois-tab" data-toggle="tab" href="#dois" role="tab" aria-selected="false">
                <div class="icone icone2 nav-item">
                    <div></div>
                    <h2>2) Documentos para homologação</h2>
                </div>
            </a>
            <a class="col-3 col-md-3 nav-link" id="tres-tab" data-toggle="tab" href="#tres" role="tab" aria-selected="false">
                <div class="icone icone3 nav-item">
                    <div></div>
                    <h2>3) Documentos para homologação</h2>
                </div>
            </a>
            <a class="col-3 col-md-3 nav-link" id="quatro-tab" data-toggle="tab" href="#quatro" role="tab" aria-selected="false">
                <div class="icone icone4 nav-item">
                    <div></div>
                    <h2>4) Dúvidas gerais</h2>
                </div>
            </a>
        </div>
        <div class="row">
            <div class="col-12 tab-content">
                <div class="tab-pane fade" id="um" role="tabpanel">
                    <p><strong>Email:</strong> central.cad.fornecedor@citrosuco.com.br</p>
                    <br>
                    <p><strong>Cassia Brito</strong> – (16) 3383-8767</p>
                    <p><strong>Eduardo Figueiredo</strong> – (16) 3383-8528</p>
                </div>

                <div class="tab-pane fade" id="dois" role="tabpanel">
                    <p>Os documentos listados ao lado são necessários para o processo de homologação e fundamentais para que o fornecedor se torne nosso parceiro.</p>
                    <p>OBS: Para o fornecimento de itens e serviços considerados críticos para nossos processos, é necessário um processo de homologação específico.</p>
                    <br>
                    <ul>
                        <li><strong>Estatuto Social e Ata de eleição dos atuais Diretores ou Contrato Social em vigor e a última alteração;</strong></li>
                        <li><strong>Certidões (SRF/INSS e FGTS);</strong></li>
                        <li><strong>Consulta SERASA;</strong></li>
                        <li><strong>Consulta Inscrição e Situação Cadastral, junto à Receita Federal;</strong></li>
                        <li><strong>Consulta SINTEGRA;</strong></li>
                        <li><strong>Certificado ISO9001, ISO TS16949, Questionário de Autoavaliação, ISO14001 e demais documentos que atendam à Legislação Ambiental/Qualidade, quando necessário;</strong></li>
                        <li><strong>Formulário de Compliance (Código de Conduta e SSMA).</strong></li>
                </div>

                <div class="tab-pane fade" id="tres" role="tabpanel">
                    <p>A Citrosuco trabalha com duas opções de pagamento: boleto registrado e crédito em conta corrente (bancos preferenciais: Itaú, Bradesco e Banco do Brasil).</p>

                    <p>Para escolher a opção de crédito em conta, é necessário apresentar um comprovante com as seguintes informações: razão social, CNPJ, banco, agência e conta bancária (Ex.: folha de cheque ou declaração do banco).</p>

                    <p>Como informação adicional, a Citrosuco concentra seus pagamentos sempre nos dias 10, 20 e 30 de cada mês.</p>
                </div>

                <div class="tab-pane fade" id="quatro" role="tabpanel">
                <p><strong>• Quem pode se cadastrar?</strong><br>Qualquer pessoa jurídica, domiciliada ou sediada no Brasil, que atenda plenamente às condições de cadastramento, mediante a apresentação da documentação solicitada pela Citrosuco.</p>

                <p><strong>• Documentos para homologação de itens críticos (insumos e materiais)</strong><br>Para o fornecimento de itens e serviços considerados críticos para nossos processos, é necessária uma homologação específica, que exige a apresentação de outros documentos, dependendo do tipo de material e criticidade envolvida.</p>

                <p><strong>• Posso cadastrar mais de um CNPJ?</strong><br>Sim. Matriz e filiais podem ser cadastradas de forma independente.</p>
 
                <p><strong>• Posso alterar o CNPJ cadastrado no perfil Citrosuco?</strong><br>Não. Você pode somente atualizar os dados cadastrais e Inscrição Estadual.<br>Para incluir outro CNPJ, deve ser realizado um novo cadastro.</p>

                </div>
            </div>
        </div>
    </div>
</section>



<section id="fornecedores-de-frutas" class="colunas3 frutas">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12 col-md-7">
                <img class="img left" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-frutas.png">
            </div>
            <div class="col-12 col-md-3 offset-md-1 align-self-center">
                <div class="conteudo">
                    <h2 class="title-col-quem-somos">Fonecedores de frutas</h2>
                    <p>Olá produtor (a),</p>

                    <p>Caso tenha interesse em ser nosso(a) parceiro(a) no fornecimento de frutas para nossa indústria, entre em contato com um dos nossos escritórios regionais e teremos o prazer em ajuda-lo(a) nesse processo.</p>

                    <p>Conheça o Programa Trilhar, acesse também o Portal do Citricultor e a lista Protecitrus.</p>

                    <p>O time de Suprimentos de Frutas da Citrosuco está à sua disposição!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="portal-do-citricultor" class="colunas3 citricultor">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-5 offset-md-1 align-self-center">
                <div class="conteudo">
                <h2 class="title-col-quem-somos">Portal do citricultor</h2>
                    <p>O Portal do Citricultor é uma ferramenta criada pela Citrosuco, vinculado como o novo SAP 4 Hana, onde você consegue fazer seus informes quinzenais das pulverizações dos pomares e, também, acessar informações importantes do seu negócio como extrato financeiro e recebimento de frutas em nossas indústrias.  </p>

                    <p>O portal está mais prático, dinâmico e pode até ser acessado pelo seu celular. Clique aqui para acessar seu Portal do Citricultor.</p>

                    <p><strong>Caso ainda não tenha solicitado seu cadastro ou tenha alguma dúvida, por favor entre em contato pelo: agroquimicos@citrosuco.com.br ou WhatsApp (16) 99752-3860</strong></p>

                    <a class="btn-col-produtos" href="https://portalcitrosuco-xsvqeqiy4d.dispatcher.us2.hana.ondemand.com/" target="_blank">Acesse aqui o portal do citricultor</a>
                </div>
            </div>
            <div class="col-12 col-md-5 offset-md-1">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-portal.png">
            </div>
        </div>
    </div>
</section>

<section id="programa-trilhar" class="colunas3 trilhar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="img left" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-trilhar.png">
            </div>
            <div class="col-12 col-md-4 offset-md-1 align-self-center">
                <div class="conteudo">
                    <h2 class="title-col-quem-somos">Programa Trilhar</h2>
                    <p>Programa de apoio para elevação das práticas socioambientais e produtivas da cadeia de fornecimento de frutas de produtores terceiros.</p>

                    <p>Clique e saiba mais sobre o nosso programa.</p>

                    <a class="btn-col-produtos" href="https://www.programatrilhar.com/" target="_blank">Acesse aqui</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="lista-protecitrus" class="colunas3 protecitrus">
    <div class="container-fluid">
        <div class="row">
            <div class="col-7 col-md-3 offset-md-1 order-1 align-self-center align-self-md-start text-right text-md-left">
                <div class="conteudo">
                    <h2 class="title-col-programa">Contatos escritórios regionais</h2>
                    <p>Seguem os contatos dos escritórios regionais:</p>
                    <ul>
                        <li>Centro: (16) 3383-8524</li>
                        <li>Norte: (17) 3531-6128</li>
                        <li>Sul: (19) 3321-6060</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-5 order-3 order-md-2">
                <div class="conteudo">
                    <h2 class="title-col-programa"><?php the_field('titulo_protecitrus'); ?></h2>
                    <p>A ProteCitrus – Produtos para Proteção da Citricultura substitui a antiga Lista PIC. Com a reformulação, o novo modelo deixa de ser apenas uma lista de indicação de defensivos agrícolas e eleva seu status para um programa voluntário do setor para a proteção da citricultura, ampliando os requisitos para a inscrição de um produto no rol e se antecipando a tendências e regulamentações dos diversos mercados internacionais.</p>

                    <p>A ProteCitrus é composta por um comitê, formado por institutos de pesquisa, consultores e indústrias produtoras de suco, que se reúne periodicamente para análises e atualizações. O objetivo é conectar o citricultor com as exigências dos governos e dos clientes diante da demanda global por uma produção de alimentos com o menor impacto ambiental possível, aprimorando ainda mais as técnicas sustentáveis praticadas na citricultura brasileira. (Fonte: Fundecitrus)</p>

                    <a class="btn-col-produtos" data-toggle="modal" data-target="#Vejamais">Acesse aqui a lista de produtos permitidos</a>
                </div>
            </div>
            <div class="col-4 col-md-2 offset-1 order-2 order-md-3">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-protecitrus.png">
            </div>
        </div>
    </div>
</section>


<div class="modal fade vejamais" id="Vejamais" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <section class="modal-body">

                <div style="margin-bottom: 0; text-align: center;" class="container-passo-a-passo-width">
                    <div id="passo-a-passo-5-2021" >
                        <span data-dismiss="modal" aria-label="Close">&times</span>
                        <div>
                            <div style="margin: 20px 0">
                                <div class="container-relatorios-hidden row justify-content-center">
                                    <div class="col-12 col-md-4">
                                        <a href="<?php echo home_url(); ?>/wp-content/uploads/2021/08/protecitrus_2021-08-13.pdf" target="_blank">

                                            <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/05/Icones_Protecitrus.png">
                                            <p class="text-laranja-citro-suco">Produtos para Proteção da Citricultura</p>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <a href="<?php echo home_url(); ?>/wp-content/uploads/2021/08/lmr_2021-08-13.pdf" target="_blank">
                                            <img src="<?php echo home_url(); ?>/wp-content/uploads/2021/05/Icones_LMR.png">
                                            <p class="text-laranja-citro-suco">LMR - Limite Máximo de Resíduos</p>
                                        </a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>

<?php get_footer();
