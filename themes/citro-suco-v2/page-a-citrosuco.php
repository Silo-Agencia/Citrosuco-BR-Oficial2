<?php get_header(); ?>

<section class="container-home"></section>
<section class="container-banner ">
    <div class="container-banner-desktop"><?php the_field('banner_home_desktop'); ?></div>
    <div class="container-banner-mobile"><?php the_field('banner_home_mobile'); ?></div>
</section>



<section id="do-brasil-para-o-mundo">
    <div style="background: #ff8a05!important" class="container container-programas">
        <div class="row row-produtos">
            <div class="col col-produtos-img col-programas-img">
                <?php $imageDoBrasilParaOMundo = get_field('imagem_do_brasil_para_o_mundo'); ?>
                <img src="<?php echo esc_url($imageDoBrasilParaOMundo['url']); ?>" alt="<?php echo esc_attr($imageDoBrasilParaOMundo['alt']); ?>">
            </div>
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 style="color:#6e380c!important" class="title-col-quem-somos"><?php the_field('titulo_do_brasil_para_o_mundo'); ?></h2>
                    <div class="paragrafo-col-de-quem-somos">
                        <?php the_field('texto_do_brasil_para_o_mundo'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>

    <div>
        <div class="container container-icons-brasil-para-o-mundo">
            <div class="row row-icons-brasil-para-o-mundo">
                <div class="col col-icons-brasil-para-o-mundo">
                    <div class="container-info-brasil-para-o-mundo">
                        <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Do-Brasil-para-o-Mundoi_08.png">
                        <div>
                            <h3 style="color: #bcd799; margin: 0; font-size: 24px;">Comercial</h3>
                            <p>Sete escritórios ao redor do mundo: Brasil, EUA, Bélgica, Japão, Austrália, Áustria e China.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-icons-brasil-para-o-mundo">
                    <div class="container-info-brasil-para-o-mundo">
                        <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Do-Brasil-para-o-Mundoi_10.png">
                        <div>
                            <h3 style="color: #ffc200; margin: 0; font-size: 24px;">Empregados</h3>
                            <p>Contamos com 5500 funcionários, chegando a mais de 12000 durante a safra.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-icons-brasil-para-o-mundo">
                    <div class="container-info-brasil-para-o-mundo">
                        <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Do-Brasil-para-o-Mundoi_12.png">
                        <div>
                            <h3 style="color: #aa662b; margin: 0; font-size: 24px;">Agrícola</h3>
                            <p>Temos 28 fazendas. As 25 de produção de laranja são todas auditadas externamente.</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>

    <div class="container-mapa-mundo">
        <?php echo do_shortcode("[mapsvg id='312']"); ?>
    </div>

    <div>
        <div class="container container-icons-brasil-para-o-mundo">
            <div class="row row-icons-brasil-para-o-mundo">
                <div class="col col-icons-brasil-para-o-mundo">
                    <div class="container-info-brasil-para-o-mundo">
                        <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Do-Brasil-para-o-Mundoi_17.png">
                        <div>
                            <h3 style="color: #60b700; margin: 0; font-size: 24px;">Indústria</h3>
                            <p>Possuímos quatro plantas, localizadas em Matão (SP) – a maior planta de processamento de suco de laranja do mundo –, Catanduva (SP), Araras (SP) e Lake Wales (EUA).</p>
                        </div>
                    </div>
                </div>
                <div class="col col-icons-brasil-para-o-mundo">
                    <div class="container-info-brasil-para-o-mundo">
                        <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Do-Brasil-para-o-Mundoi_19.png">
                        <div>
                            <h3 style="color: #005622; margin: 0; font-size: 24px;">Lógistica</h3>
                            <p>Temos 5 terminais marítimos, localizados em: Santos (BR), Wilmington (EUA), Gent (Bélgica), Toyohashi (Japão) e Newcastle (Austrália). Contamos com os nossos 5 navios dedicados e 1 multicargo.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-icons-brasil-para-o-mundo">
                    <div class="container-info-brasil-para-o-mundo">
                        <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Do-Brasil-para-o-Mundoi_21.png">
                        <div>
                            <h3 style="color: #a45d1e; margin: 0; font-size: 24px;">Mundo</h3>
                            <p>20% de participação no mercado global e 40% de todo o suco de laranja exportado pelo Brasil</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>

</section>

<section>
    <div style="background-image: url(<?php the_field('imagem_conheca_mais_sobre'); ?>)!important;" class="container container-video-institucional-citro-suco">
        <div class="row row-video-institucional-citro-suco">
            <div class="col">
                
            </div>
            <div class="col col-video-institucional-citro-suco">
                <h2 style="color: #fff" class="text-video-institucional-citro-suco"><?php the_field('titulo_conheca_mais_sobre'); ?></h2>
                <div style="color: #fff" class="paragrafo-video-institucional-citro-suco acessibilidade">
                    <?php the_field('texto_conheca_mais_sobre'); ?>
            </div>
                <a class="btn-col-laranja-citro-suco" href="<?php the_field('url_botao_conheca_mais_sobre'); ?>" target="_blank"><?php the_field('botao_conheca_mais_sobre'); ?></a>
            </div>
        </div>
    </div>
</section>

<section>
    <div style="background: #009b19" class="container container-muito-alem-do-suco">
        <div class="row row-missao-visao-valor">
            <div class="col col-md-5 col-missao-visao-valor">
                <div class="container-missao-visao-valor">
                    <h2 class="title-missao-visao-valor">Propósito Maior</h2>
                    <p class="paragrafo-missao-visao-valor">
                        Prover alimentos originados de frutas para uma vida com energia e mais saudável.
                    </p>
                </div>

                <div class="container-missao-visao-valor">
                    <h2 class="title-missao-visao-valor">Visão de Futuro</h2>
                    <p class="paragrafo-missao-visao-valor">
                        Ser a melhor empresa de suco e ingredientes naturais de frutas na indústria global de alimentos.
                    </p>
                </div>

            </div>
            <div class="col col-missao-visao-valor">
                <div class="container-missao-visao-valor">
                    <h2 class="title-missao-visao-valor">Valores</h2>
                        <div class="container container-icons-missao-visao-valor">
                            <div class="row row-icons-missao-visao-valor">
                                <div class="col col-container-missao-visao-valor-infos">
                                    <div class="container-missao-visao-valor-informs">
                                        <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/001-green@3x.png">
                                        <div class="div-text-missao-visao-valor">
                                            <p class="title-missao-visao-valor-icons">Sustentabilidade</p>
                                            <p class="info-missao-visao-valor-icons">Ambiental, social e econômica.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-container-missao-visao-valor-infos">
                                    <div class="container-missao-visao-valor-informs">
                                        <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/006-dart@3x.png">
                                        <div class="div-text-missao-visao-valor">
                                            <p class="title-missao-visao-valor-icons">Geração de Valor</p>
                                            <p class="info-missao-visao-valor-icons">Foco em resultado.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-icons-missao-visao-valor">
                                <div class="col col-container-missao-visao-valor-infos">
                                    <div class="container-missao-visao-valor-informs">
                                        <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/005-like@3x.png">
                                        <div class="div-text-missao-visao-valor">
                                            <p class="title-missao-visao-valor-icons">Meritocracia</p>
                                            <p class="info-missao-visao-valor-icons">Valorização e desenvolvimento das pessoas; reconhecimento pela performance.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-container-missao-visao-valor-infos">
                                    <div class="container-missao-visao-valor-informs">
                                        <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/003-law@3x.png">
                                        <div class="div-text-missao-visao-valor">
                                            <p class="title-missao-visao-valor-icons">Integridade</p>
                                            <p class="info-missao-visao-valor-icons">Confiabilidade, transparência, respeito e ética.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-icons-missao-visao-valor">
                                <div class="col col-container-missao-visao-valor-infos">
                                    <div class="container-missao-visao-valor-informs">
                                        <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/004-medical-protection@3x.png">
                                        <div class="div-text-missao-visao-valor">
                                            <p class="title-missao-visao-valor-icons">Segurança e Saúde</p>
                                            <p class="info-missao-visao-valor-icons">Ambiente de trabalho seguros e saudável.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-container-missao-visao-valor-infos">
                                    <div class="container-missao-visao-valor-informs">
                                        <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/002-creative@3x.png">
                                        <div class="div-text-missao-visao-valor">
                                            <p class="title-missao-visao-valor-icons">Empreendedorismo</p>
                                            <p class="info-missao-visao-valor-icons">Busca constante por explorar oportunidade além dos recursos disponíveis; inconformismo permanente.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="governanca">
    <div style="background: #ff8a05!important" class="container container-programas">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 style="color:#6e380c!important;" class="title-col-programa"><?php the_field('titulo_governanca'); ?></h2>
                     <div style="margin-bottom: 20px" class="paragrafo-conceito-muito-alem-do-suco acessibilidade">
                        <?php the_field('texto_governanca'); ?>
                    </div>
                    <a class="btn-col-laranja-citro-suco" href="<?php the_field('botao_url_governanca'); ?>"><?php the_field('botao_governanca'); ?></a>
                </div>
            </div>
            <div class="col col-produtos-img col-programas-img">
                <?php $imageGovernanca = get_field('imagem_governanca'); ?>
                <img src="<?php echo esc_url($imageGovernanca['url']); ?>" alt="<?php echo esc_attr($imageGovernanca['alt']); ?>">
            </div>
        </div>
    </div>
</section>


<section id="cadeia-de-valor">
    <div style="background: #623b17!important"  class="container container-programas">
        <div class="row row-produtos">
            <div class="col col-produtos-img col-programas-img">
                <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Do-Brasil-para-o-Mundoi_35.png" alt="Relatório de Sustentabilidade ">
            </div>
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 style="color: #d5db4a;" class="title-col-quem-somos">Cadeia de Valor</h2>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="container-cadeia-de-valor">
        <div class="container-div-img bg-container-div-img">
            <div class="container-div-img">
                <div class="container container-icons-fase">
                    <div class="icons-title-fases">
                            <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/icone-title-fase-1.png">
                    </div>
                    <div class="row row-icons-fase">
                        
                        <div class="col col-icons-fase">
                            <div class="div-icons-fase">
                                <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_04.png">
                                <div class="div-container-icons-fase">
                                    <h2 class="title-icons-fase">Produção de Mudas</h2>
                                    <p class="paragrafos-icons-fase">
                                    A combinação certa na produção das mudas é o que garante a sua qualidade, 
                                    resistência e produtividade. 
                                    É o primeiro passo para um pomar de sucesso.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-icons-fase">
                            <div class="div-icons-fase">
                                <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_06.png">
                                <div class="div-container-icons-fase">
                                    <h2 class="title-icons-fase">Preparação do Solo</h2>
                                    <p class="paragrafos-icons-fase">
                                    Raízes crescem em busca de água e nutrientes. 
                                    Solo fértil é sustento para árvores fortes e saudáveis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-icons-fase row-icons-fase-part2">
                        <div class="col col-icons-fase">
                            <div class="div-icons-fase">
                                <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_13.png">
                                <div class="div-container-icons-fase">
                                    <h2 class="title-icons-fase">Manejo Sustentável dos Pomares</h2>
                                    <p class="paragrafos-icons-fase">
                                    Cuidamos do pomares com ética e responsabilidade. 
                                    Realizamos a nutrição, poda, irrigação, o controle de pragas e 
                                    doenças, entre outros tratos culturais.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-icons-fase">
                            <div class="div-icons-fase">
                                <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_14.png">
                                <div class="div-container-icons-fase">
                                    <h2 class="title-icons-fase">Plantio e Cultivo</h2>
                                    <p class="paragrafos-icons-fase">
                                    Na terra que foi preparada e adubada, 
                                    plantamos nossas mudas, nossas novas gerações de pomares.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-icons-fase row-icons-fase-part2">
                        <div class="col col-icons-fase">
                            <div class="div-icons-fase">
                                <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_21.png">
                                <div class="div-container-icons-fase">
                                    <h2 class="title-icons-fase">Colheita</h2>
                                    <p class="paragrafos-icons-fase">
                                    Laranja por laranja, cada talhão no seu momento, nossas frutas são colhidas.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-icons-fase">
                            <div class="div-icons-fase">
                                <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_23.png">
                                <div class="div-container-icons-fase">
                                    <h2 class="title-icons-fase">Transporte fazenda-fábrica</h2>
                                    <p class="paragrafos-icons-fase">
                                    Nossas laranjas são carregadas e transportadas das fazendas às fábricas. 
                                    Muitos produtores também ajudam no fornecimento da matéria prima para o nosso negócio.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-container-div-fase2">
            <div class="container-div-img">
                <div>
                    <div class="container container-icons-fase2">
                        <div style="text-align: left!important" class="icons-title-fases">
                                <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/icone-title-fase-2.png">
                        </div>
                        <div class="row row-icons-fase2">
                            <div class="col col-icons-display-none"></div>
                            <div class="col col-icons-fase2">
                                <div class="div-icons-fase div-icons-fase2">
                                    <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_32.png">
                                    <div class="div-container-icons-fase2">
                                        <h2 class="title-icons-fase2">Descarregamento</h2>
                                        <p class="paragrafos-icons-fase2">
                                        Ao chegar na fábrica, as frutas são descarregadas, selecionadas, lavadas e classificadas.
                                        </p>
                                    </div>
                                </div>

                                <div class="div-icons-fase div-icons-fase2">
                                    <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_36.png">
                                    <div class="div-container-icons-fase2">
                                        <h2 class="title-icons-fase2">Processamento</h2>
                                        <p class="paragrafos-icons-fase2">
                                        O suco é extraído, filtrado e pasteurizado. Também é extraído o óleo da casca. 
                                        O bagaço, casca e sementes são destinados à fabricação de ingredientes específicos. 
                                        Da laranja, tudo se aproveita!
                                        </p>
                                    </div>
                                </div>

                                <div class="div-icons-fase div-icons-fase2">
                                    <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_40.png">
                                    <div class="div-container-icons-fase">
                                        <h2 class="title-icons-fase2">Armazenamento</h2>
                                        <p class="paragrafos-icons-fase2">
                                        Até serem transportados, o suco e os ingredientes ficam 
                                        armazenados com cuidado, 
                                        de acordo com as recomendações para cada tipo de suco, 
                                        sempre visando à qualidade.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-div-img bg-container-div-img-fase3">
            <div class="container-div-img">
                <div class="container container-icons-fase">
                        <div class="icons-title-fases">
                                <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/icone-title-fase-3.png">
                        </div>
                    <div class="row row-icons-fase3">
                        <div class="col col-icons-fase">
                            <div class="div-icons-fase">
                                <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_48.png">
                                <div class="div-container-icons-fase">
                                    <h2 class="title-icons-fase3">Terminal Marítimo de Santos</h2>
                                    <p class="paragrafos-icons-fase3">
                                        De nossas fábricas para o mundo.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-icons-fase">
                            <div class="div-icons-fase">
                                <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_51.png">
                                <div class="div-container-icons-fase3">
                                    <h2 class="title-icons-fase3">Transporte terrestre</h2>
                                    <p class="paragrafos-icons-fase3">
                                    Feito por caminhões, grande parte de nosso suco segue para exportação 
                                    e uma parcela dele é comercializada internamente.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-icons-fase row-icons-fase-part2">
                        <div class="col col-icons-fase">
                            <div class="div-icons-fase">
                                <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_56.png">
                                <div class="div-container-icons-fase3">
                                    <h2 class="title-icons-fase3">Transporte Marítimo e terminais no Exterior</h2>
                                    <p class="paragrafos-icons-fase3">
                                    Cinco navios compõem nossa frota e levam a produção para os 
                                    terminais de Gent (Bélgica), 
                                    Wilmington (Estados Unidos), Newcastle (Austrália) e 
                                    Toyohashi (Japão).
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-icons-fase">
                            <div class="div-icons-fase">
                                <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_59.png">
                                <div class="div-container-icons-fase3">
                                    <h2 class="title-icons-fase3">Entrega para o cliente</h2>
                                    <p class="paragrafos-icons-fase3">
                                    A partir dos terminais, nossa produção é entregue aos clientes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-icons-fase row-icons-fase-part2">
                        <div class="col col-icons-fase">
                            <div class="div-icons-fase">
                                <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_64.png">
                                <div class="div-container-icons-fase3">
                                    <h2 class="title-icons-fase3">Diversas aplicações</h2>
                                    <p class="paragrafos-icons-fase3">
                                    Os ingredientes da laranja são aplicados em vários tipos de indústria. 
                                    Dessa forma, podemos dizer que o que produzido na Citrosuco 
                                    chega a um número incontável de pessoas!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col col-icons-fase">
                            <div class="div-icons-fase">
                                <img class="img-icons-fase" src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Cadeia-de-valor-Infograf_66.png">
                                <div class="div-container-icons-fase3">
                                    <h2 class="title-icons-fase3">Nas mãos do consumidor</h2>
                                    <p class="paragrafos-icons-fase3">
                                        Pessoas de mais de 100 países consomem o suco da Citrosuco.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="linha-do-tempo">
    <div style="background-image:url(<?php the_field('imagem_linha_do_tempo'); ?>);" class="container container-linha-do-tempo-new-page">
        <div class="row row-laranja-citro-suco">
            <div class="col col-conceito-muito-alem-do-suco">
                <h2 style="color: #d5db4a!important; margin-bottom: 0;" class="text-laranja-citro-suco"><?php the_field('titulo_linha_do_tempo'); ?></h2>
                <div style="margin-bottom: 20px" class="paragrafo-conceito-muito-alem-do-suco acessibilidade">  
                    <?php the_field('texto_linha_do_tempo'); ?>
                </div>
                <a class="btn-col-laranja-citro-suco" href="<?php the_field('url_botao_linha_do_tempo'); ?>"><?php the_field('botao_linha_do_tempo'); ?></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer();