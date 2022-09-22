<?php get_header(); ?>

<section class="sliderTopo">
    <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-brasil.png">
    </div>
</section>

<section id="do-brasil-para-o-mundo" class="colunas3 brasil">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 col-12">
                <img class="img left" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-brasil.png">
            </div>
            <div class="col-12 col-md-3 offset-md-1 align-self-center">
                <div class="conteudo">
                    <h2 class="title-col-quem-somos">Do Brasil para o Mundo</h2>
                    <p>A Citrosuco cultiva, produz e entrega alimentos de origem natural e sustentável para diversos países ao redor do mundo.</p>
                    <p>Desenvolvemos o nosso negócio baseado na integridade, com foco na promoção de um planeta e de pessoas saudáveis, nutrindo relações diversas e de influência com toda a cadeia.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="iconess">
    <div class="container">
        <div class="row icones justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="icone icone1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ic1.png">
                    <h2>Comercial</h2>
                    <p>7 escritórios ao redor do mundo: Brasil, EUA, Áustria, Austrália, Bélgica, Japão e China.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="icone icone2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ic2.png">
                    <h2>Empregados</h2>
                    <p>Contamos com 5.500 funcionários,chegando a mais de 12.000 durantea safra.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="icone icone3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ic3.png">
                    <h2>Agrícolas</h2>
                    <p>Temos 28 fazendas. As 25 de produção de laranja são todas auditadas externamente.</p>
                </div>
            </div>
        </div>
        <div class="row icones justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="icone icone4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ic4.png">
                    <h2>Indústria</h2>
                    <p>Possuímos quatro plantas, localizadas em: Matão (SP) - a maior planta de processamento de suco de laranja do mundo -, Catanduva (SP), Araras (SP) e Lake Wales (FL - EUA)</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="icone icone5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ic5.png">
                    <h2>Logística</h2>
                    <p>Temos 5 terminais marítimos, localizados em: Santos (BR), Wilmington (EUA), Gent (Bélgica),Toyohashi (Japão) e Newcastle (Austrália). Contamos com os nossos 5 navios de dedicados e 1 multicargo.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="icone icone6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ic6.png">
                    <h2>Mundo</h2>
                    <p>20% de participação no mercado global e 40% de todo o suco de laranja produzido é exportado pelo Brasil.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container container-mapa-mundo">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12">
                <?php echo do_shortcode("[mapsvg id='312']"); ?>
            </div>
        </div>
    </div>
</div>

<section class="img-bg">
    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/valores.png">
</section>

<section class="colunas2 video">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12 col-md-3">
                <h2 class="title-col-quem-somos">Conheça mais sobre a Citrosuco</h2>
                <p>Assista nosso vídeo institucional</p>
                <a class="btn-col-produtos" href="https://www.youtube.com/watch?v=IH5EpHt-w6o" target="_blank">Veja mais</a>
            </div>
        </div>
    </div>
</section>

<section id="governanca" class="colunas3 governa">
    <div class="container-fluid">
        <div class="row row-produtos">
            <div class="col-12 col-md-4 offset-md-1 align-self-center">
                <div class="container-col-produtos">
                    <h2>Governança</h2>
                    <h3>Gestão de Riscos, Código de Conduta e Compliance</h3>
                    <p>O nosso modelo de governança atua de maneira ética e transparente, respeitando pessoas, comunidade, legislação e focados na geração de valor sustentável.</p>
                    <a class="btn-col-produtos" href="<?php echo home_url('governanca'); ?>">Gestão ética e transparente</a>
                </div>
            </div>
            <div class="col-12 col-md-6 offset-md-1 col-produtos-img">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/governanca.png">
            </div>
        </div>
    </div>
</section>

<section id="cadeia-de-valor" class="cadeia">
    <div class="container-fluid abs margin">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 offset-md-1 align-self-center">
                <h2>Cadeia de valor</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid d-none d-lg-block">
        <div class="row justify-content-center">
            <div class="col-12">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/fase1.png">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/fase2.png">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/fase3.png">
            </div>
        </div>
    </div>
    <div class="container-fluid icones-mob d-block d-lg-none">
        <div class="row justify-content-center linha1">
            <div class="col-12">
                <h2>Fase 1</h2>
                <p class="tit">Agrícola</p>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/01.png">
                    <h3>Produção de mudas</h3>
                    <p>A combinação certa na produção das mudas é o que garante a sua qualidade, resistência e produtividade. É o primeiro passo para um pomar de sucesso.</p>
                </div>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/02.png">
                    <h3>Preparação do solo</h3>
                    <p>Raízes crescem em busca de água e nutrientes. Solo fértil é sustento para árvores fortes e saudáveis</p>
                </div>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/03.png">
                    <h3>Plantio e cultivo</h3>
                    <p>Na terra que foi preparada e adubada, plantamos nossas mudas, nossas novas gerações de pomares.</p>
                </div>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/04.png">
                    <h3>Manejo sustentável dos pomares</h3>
                    <p>Cuidamos dos pomares com ética e responsabilidade. Realizamos a nutrição, poda, irrigação, o controle de pragas e doenças, entre outros tratos culturais.</p>
                </div>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/06.png">
                    <h3>Colheita</h3>
                    <p>Laranja por laranja, cada talhão no seu momento, nossas frutas são colhidas.</p>
                </div>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/05.png">
                    <h3>Transporte fazenda-fábrica</h3>
                    <p>Nossas laranjas são carregadas e transportadas das fazendas às fábricas. Muitos produtores também ajudam no fornecimento da matéria prima para o nosso negócio.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center linha2">
            <div class="col-12">
                <h2>Fase 2</h2>
                <p class="tit">Indústria</p>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/07.png">
                    <h3>Descarregamento</h3>
                    <p>Ao chegar na fábrica, as frutas são descarregadas, selecionadas, lavadas e classificadas</p>
                </div>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/08.png">
                    <h3>Processamento</h3>
                    <p>O suco é extraído, filtrado e pasteurizado. Também extraído o óleo da casca. O bagaço, casca e sementes são destinados à fabricação de ingredientes específicos. Da laranja, tudo se aproveita!</p>
                </div>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/09.png">
                    <h3>Armazenamento</h3>
                    <p>Até serem transportados, o suco e os ingredientes ficam armazenados com cuidado, de acordo com as recomendações para cada tipo de suco, sempre visando à qualidade</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center linha3">
            <div class="col-12">
                <h2>Fase 3</h2>
                <p class="tit">Logística e distribuição</p>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/10.png">
                    <h3>Transporte terrestre</h3>
                    <p>Feito por caminhões, grande parte de nosso suco segue para exportação e uma parcela dele é comercializado internamento.</p>
                </div>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/11.png">
                    <h3>Terminal Marítimode Santos</h3>
                    <p>De nossas fábricas para o mundo.</p>
                </div>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/12.png">
                    <h3>Transporte marítimo e terminais no exterior</h3>
                    <p>Cinco navios compõem nossa frota e levam a produção para os terminais de Gent (Bélgica), Wilmington (EUA), Newcastle (Austrália) e Toyohashi (Japão.</p>
                </div>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/13.png">
                    <h3>Entrega para o cliente</h3>
                    <p>A partir dos terminais, nossa produção é entregue aos clientes</p>
                </div>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/14.png">
                    <h3>Nas mãos do consumidor</h3>
                    <p>Pessoas de mais de 100 países consomem o suco da Citrosuco</p>
                </div>
            </div>
            <div class="col-8">
                <div class="conteudo">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia/15.png">
                    <h3>Diversas aplicações</h3>
                    <p>Os ingredientes da laranja são aplicados em vários tipos de indústria. Dessa forma, podemos dizer que o que produzimos na Citrosuco chega a um número incontável de pessoas!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="linha-do-tempo" class="colunas3 tempo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-3 offset-md-1 align-self-center">
                <div class="conteudo">
                    <h2 class="title-col-produtos">Linha do tempo</h2>
                    
                    <p>Fazemos acontecer, com foco no futuro.</p>

                    <p>A construção da nossa história nos levou a ser uma empresa com grande representatividade no mercado mundial de suco e ingredientes originados da laranja</p>
                    <a class="btn-col-produtos" href="<?php echo home_url('linha-do-tempo'); ?>" target="_blank">Conheça nossa história</a>
                </div>
            </div>
            <div class="col-md-7 col-12 offset-md-1 ">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/tempo.png">
            </div>
        </div>
    </div>
</section>

<?php get_footer();