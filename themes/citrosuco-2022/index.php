<?php get_header(); ?>

<section class="sliderTopo">
    <div class="slider">
        <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/01.jpg">
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/02.jpg">
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/03.jpg">
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/04.jpg">
        </div>
    </div>
</section>

<!-- <section class="container-mandala">
    <img class="colina colina1" src="<?php echo get_template_directory_uri(); ?>/assets/img/colina.png" />
    <img class="colina colina2" src="<?php echo get_template_directory_uri(); ?>/assets/img/colina2.png" />
    <span class="menu">Tendência / 
        <span>
            <strong class="bem-estar">Bem-estar</strong>
            <strong class="habitat">Habitat</strong>
            <strong class="tecnologia">Tecnologia</strong>
            <strong class="comunidade">Comunidade</strong>
        </span>
    </span>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="conteudo">
                    <h2>Interaja com a mandala e conheça os pilares da nossa atuação.</h2>
                    <div class="mandala-div">
                        <img class="parte parte1" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/mandala1.png" label="bem-estar" />
                        <span>Bem-estar</span>

                        <img class="parte parte2" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/mandala2.svg" label="habitat" />
                        <span>Habitat</span>

                        <img class="parte parte3" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/mandala3.svg" label="tecnologia" />
                        <span>Tecnologia</span>

                        <img class="parte parte4" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/mandala4.svg" label="comunidade" />
                        <span>Comunidade</span>

                        <div class="img bg">
                            <img class="mandala" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="container-citro-suco">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mundo.png">

                <h1 class="text-citro-suco">A Citrosuco cultiva, produz e entrega alimentos de origem natural e sustentável para diversos países ao redor do mundo.</h1>

                <a class="btn-col-produtos btn-novo" href="<?php echo home_url('a-citrosuco'); ?>"><?php the_field('botao_produzimos_suco'); ?></a>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container container-produtos-citro-suco">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 class="title-col-produtos"><?php the_field('titulo_produtos'); ?></h2>
                    <div class="paragrafo-col-produtos bra">
                        <?php the_field('texto_produtos'); ?>
                    </div>
                    <a class="btn-col-produtos lar" href="<?php echo home_url('produtos-suco-de-laranja'); ?>"><?php the_field('botao_produtos'); ?></a>
                </div>
            </div>
            <div class="col col-produtos-img">
                <?php $imageProdutosHome = get_field('imagem_produtos'); ?>
                <img src="<?php echo esc_url($imageProdutosHome['url']); ?>" alt="<?php echo esc_attr($imageProdutosHome['alt']); ?>">
            </div>
        </div>
    </div>
</section>

<section>
    <?php $imageBgSaudeENutricao = get_field('imagem_background_saude_e_nutricao'); ?>
    
    <div style="background-image: url(<?php echo esc_url($imageBgSaudeENutricao['url']); ?>)" class="container container-laranja-citro-suco">

        <div class="row row-laranja-citro-suco">
            <div class="col col-laranja-citro-suco">
                <h2 class="text-laranja-citro-suco"><?php the_field('titulo_saude_e_nutricao'); ?></h2>
                <div class="paragrafo-col-produtos">
                    <?php the_field('texto_saude_e_nutricao'); ?>
                </div>
                <a class="btn-col-laranja-citro-suco" href="<?php echo home_url('suco-de-laranja'); ?>"><?php the_field('botao_saude_e_nutricao'); ?></a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container container-produtos-citro-suco itens">
        <div class="row row-produtos justify-content-center">
            <?php $imageBgPessoas = get_field('imagem_background_pessoas'); ?>
            
            <div class="col-3 d-none d-lg-block">
                <img style="margin-left: -15px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/pessoas.png">
            </div>
            <div class="col-12 col-md-5 col-lg-3 col-pessoas-img">
                <div class="col col-pessoas-citro-suco">
                    <h2 class="text-pessoas-citro-suco"><?php the_field('titulo_pessoas'); ?></h2>
                    <div class="paragrafo-col-produtos">
                        <?php the_field('texto_pessoas'); ?>
                    </div>
                    <a class="btn-col-produtos" href="<?php echo home_url('pessoas'); ?>"><?php the_field('botao_pessoas'); ?></a>
                </div> 
            </div>

            <div class="col-12 col-md-5 col-lg-3 col-sustentabilidade">
                <div class="container-col-sustentabilidade text-md-right">
                    <h2 class="title-col-produtos"><?php the_field('titulo_sustentabilidade'); ?></h2>
                    <div class="paragrafo-col-produtos">
                        <?php the_field('texto_sustentabilidade'); ?>
                    </div>
                    <a class="btn-col-produtos" href="<?php echo home_url('sustentabilidade'); ?>"><?php the_field('botao_sustentabilidade'); ?></a>
                </div>
            </div>

            <div class="col-3  d-none d-lg-block">
                <img style="display: block; margin: 0px -15px 0px auto;" src="<?php echo get_template_directory_uri(); ?>/assets/img/sustentabilidade.png">
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container container-citrocultores-citro-suco itens">
        <div class="row row-produtos">
            <div class="col-12 col-md-4 col-fornecedores-img">
                <div class="col col-fornecedores-citro-suco">
                    <h2 class="text-fornecedores-citro-suco"><?php the_field('titulo_fornecedores'); ?></h2>
                    <div class="paragrafo-col-produtos">
                        <?php the_field('texto_fornecedores'); ?>
                    </div>
                    <a class="btn-col-produtos" href="<?php echo home_url('fornecedores'); ?>"><?php the_field('botao_fornecedores'); ?></a>
                </div> 
            </div>

            <div class="col-12 col-md-4 offset-md-2 col-novidades">
                <div class="container-col-novidades">
                    <h2 class="title-col-produtos lar"><?php the_field('titulo_novidades'); ?></h2>
                    <div class="paragrafo-col-produtos">
                        <?php the_field('texto_novidades'); ?>
                    </div>
                    <a class="btn-col-produtos" href="<?php echo home_url('blog'); ?>"><?php the_field('botao_novidades'); ?></a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section>
    <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg3.jpg)" class="container-fluid container-laranja-citro-suco">
        <div class="row row-laranja-citro-suco">
            <div class="col-12 col-laranja-citro-suco">
                <h2 style="color: #fff" class="text-laranja-citro-suco"><?php the_field('titulo_codigo_de_conduta'); ?></h2>
                <div class="paragrafo-col-produtos bra">
                    <?php the_field('texto_codigo_de_conduta'); ?>
                </div>
                <a class="btn-col-produtos" href="<?php echo home_url('a-citrosuco#governanca'); ?>"><?php the_field('botao_codigo_de_conduta'); ?></a>
            </div>
        </div>
    </div>
</section>

<section class="colunas2 linkedin">
    <div class="container-fluid">
        <div class="row justify-content-center">
            
                <div class="col-12 col-sm-6 col-md-4 align-self-center">
                    <div class="conteudo">
                        <h2 class="title-col-trabalhe-conosco"><?php the_field('titulo_trabalhe_conosco'); ?></h2>
                        <div class="paragrafo-col-produtos">
                            <?php the_field('texto_trabalho_conosco'); ?>
                        </div>
                        <div class="container-btn-mobile">
                            <a class="btn-col-produtos red" href="https://citrosucost1.valhalla19.stage.jobs2web.com/" target="_blank"><?php the_field('botao_carreiras'); ?></a><br>
                            <a class="btn-col-produtos ora" href="https://www.linkedin.com/company/citrosuco/jobs/?viewAsMember=true" target="_blank"><?php the_field('botao_linkedin'); ?></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-2 d-none d-md-block">
                    <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-roda.png">
                </div>

                <div class="col-12 col-sm-6 col-md-4 offset-md-1 align-self-center">
                    <div class="conteudo">
                        <h2 class="title-col-fale-conosco"><?php the_field('titulo_fale_conosco'); ?></h2>
                        <div class="paragrafo-col-fale-conosco">
                            <?php the_field('texto_fale_conosco'); ?>
                        </div>
                        <div class="container-btn-mobile">
                            <a class="btn-col-produtos red" href="<?php the_field('botao_url_acesse_fale_conosco'); ?>">Leia o código de conduta</a><br>
                            <a class="btn-col-produtos ora" href="<?php echo home_url('fale-conosco'); ?>"><?php the_field('botao_acesse_fale_conosco'); ?></a>
                        </div>  
                    </div>
                </div>

        </div>
        
    </div>
</section>

<div style="max-width: 1400px;margin: auto;display: flex;justify-content: flex-end;">
    <a class="link-btn-covid" href="/cuidados-com-a-covid-19/">
        <img class="container-btn-covid" src="<?php uploads(); ?>/2021/05/CITRO_Covid1.png">
    </a>
</div>

<?php get_footer();