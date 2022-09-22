<?php get_header(); ?>

<section class="container-home"></section>
<section class="container-banner ">
    <div class="container-banner-desktop"><?php the_field('banner_home_desktop'); ?></div>
    <div class="container-banner-mobile"><?php the_field('banner_home_mobile'); ?></div>
</section>

<section>
    <div class="container container-citro-suco">
        <div class="row row-citro-suco">
            <div class="col col-citro-suco">
                <?php $imageProduzimosSuco = get_field('imagem_produzimos_sucos'); ?>
                <img src="<?php echo esc_url($imageProduzimosSuco['url']); ?>" alt="<?php echo esc_attr($imageProduzimosSuco['alt']); ?>">
                <h1 class="text-citro-suco"><?php the_field('titulo_produzimos_sucos'); ?></h1>
                <p class="paragrafo-citro-suco acessibilidade"><?php the_field('texto_produzimos_suco'); ?></p>
                <a class="btn-col-produtos" href="<?php the_field('url_botao_produzimos_suco'); ?>"><?php the_field('botao_produzimos_suco'); ?></a>
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
                    <div class="paragrafo-col-produtos">
                        <?php the_field('texto_produtos'); ?>
                    </div>
                    <a class="btn-col-produtos" href="<?php the_field('url_botao_produtos'); ?>"><?php the_field('botao_produtos'); ?></a>
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
                <div class="paragrafo-laranja-citro-suco acessibilidade">
                    <?php the_field('texto_saude_e_nutricao'); ?>
                </div>
                <a class="btn-col-laranja-citro-suco" href="<?php the_field('url_botao_saude_e_nutricao'); ?>"><?php the_field('botao_saude_e_nutricao'); ?></a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container container-produtos-citro-suco">
        <div class="row row-produtos">
            <?php $imageBgPessoas = get_field('imagem_background_pessoas'); ?>
            <div style="background-image: url(<?php echo esc_url($imageBgPessoas['url']); ?>)" class="col col-pessoas-img">
                <div class="col col-pessoas-citro-suco">
                    <h2 class="text-pessoas-citro-suco"><?php the_field('titulo_pessoas'); ?></h2>
                    <div class="paragrafo-pessoas-citro-suco acessibilidade">
                        <?php the_field('texto_pessoas'); ?>
                    </div>
                    <a class="btn-col-pessoas-citro-suco" href="<?php the_field('botao_url_pessoas'); ?>"><?php the_field('botao_pessoas'); ?></a>
                </div> 
            </div>

            <div style="background-image: url(<?php the_field('imagem_background_sustentabilidade'); ?>)" class="col col-sustentabilidade">
                <div class="container-col-sustentabilidade">
                    <h2 class="title-col-produtos"><?php the_field('titulo_sustentabilidade'); ?></h2>
                    <div class="paragrafo-col-produtos">
                        <?php the_field('texto_sustentabilidade'); ?>
                    </div>
                    <a class="btn-col-produtos" href="<?php the_field('botao_url_sustentabilidade'); ?>"><?php the_field('botao_sustentabilidade'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container container-citrocultores-citro-suco">
        <div class="row row-produtos">
            <div class="col col-fornecedores-img">
                <div class="col col-fornecedores-citro-suco">
                    <h2 class="text-fornecedores-citro-suco"><?php the_field('titulo_fornecedores'); ?></h2>
                    <div class="paragrafo-fornecedores-citro-suco acessibilidade">
                        <?php the_field('texto_fornecedores'); ?>
                    </div>
                    <a class="btn-col-produtos" href="<?php the_field('botao_url_fornecedores'); ?>"><?php the_field('botao_fornecedores'); ?></a>
                </div> 
            </div>

            <div style="background-image: url(<?php the_field('imagem_background_-_novidades'); ?>)" class="col col-novidades">
                <div class="container-col-novidades">
                    <h2 class="title-col-produtos"><?php the_field('titulo_novidades'); ?></h2>
                    <div class="paragrafo-col-produtos">
                        <?php the_field('texto_novidades'); ?>
                    </div>
                    <a class="btn-col-produtos" href="<?php the_field('botao_url_novidades'); ?>"><?php the_field('botao_novidades'); ?></a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section>
    <?php $imageBgCodigoDeConduta = get_field('imagem_background_codigo_de_conduta'); ?>
    <div style="background-image: url(<?php echo esc_url($imageBgCodigoDeConduta['url']); ?>)" class="container container-laranja-citro-suco">
        <div class="row row-laranja-citro-suco">
            <div class="col col-laranja-citro-suco">
                <h2 style="color: #fff" class="text-laranja-citro-suco"><?php the_field('titulo_codigo_de_conduta'); ?></h2>
                <div style="color: #fff;" class="paragrafo-laranja-citro-suco acessibilidade">
                    <?php the_field('texto_codigo_de_conduta'); ?>
                </div>
                <a class="btn-col-laranja-citro-suco" href="<?php the_field('botao_url_codigo_de_conduta'); ?>"><?php the_field('botao_codigo_de_conduta'); ?></a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container container-citrocultores-citro-suco">
        <div class="row row-produtos">
            
                <div class="col col-trabalhe-conosco">
                    <div class="col container-col-trabalhe-conosco">
                        <h2 class="title-col-trabalhe-conosco"><?php the_field('titulo_trabalhe_conosco'); ?></h2>
                        <div class="paragrafo-col-trabalhe-conosco">
                            <?php the_field('texto_trabalho_conosco'); ?>
                        </div>
                        <div class="container-btn-mobile">
                            <a class="btn-col-produtos" href="<?php the_field('botao_url_carreiras'); ?>" target="_blank"><?php the_field('botao_carreiras'); ?></a>
                            <a class="btn-col-produtos" href="<?php the_field('botao_url_linkedin'); ?>" target="_blank"><?php the_field('botao_linkedin'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col col-fale-conosco">
                    <div class="col container-col-fale-conosco">
                        <h2 class="title-col-fale-conosco"><?php the_field('titulo_fale_conosco'); ?></h2>
                        <div class="paragrafo-col-fale-conosco">
                            <?php the_field('texto_fale_conosco'); ?>
                        </div>
                        <div class="container-btn-mobile">
                            <a class="btn-col-fale-conosco" href="<?php the_field('botao_url_acesse_fale_conosco'); ?>"><?php the_field('botao_acesse_fale_conosco'); ?></a>
                        </div>  
                    </div>
                </div>

        </div>
        
    </div>
</section>

<div style="max-width: 1400px;margin: auto;display: flex;justify-content: flex-end;">
    <a class="link-btn-covid" href="/cuidados-com-a-covid-19/">
        <img class="container-btn-covid" src="/wp-content/uploads/2021/05/CITRO_Covid1.png">
    </a>
</div>





<?php get_footer();