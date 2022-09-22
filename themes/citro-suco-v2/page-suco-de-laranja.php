<?php get_header(); ?>

<section class="container-home"></section>
<section class="container-banner ">
    <div class="container-banner-desktop"><?php the_field('banner_home_desktop'); ?></div>
    <div class="container-banner-mobile"><?php the_field('banner_home_mobile'); ?></div>
</section>

<section>
    <div class="container container-produtos-citro-suco">
        <div style="background: #67bb00;" class="row row-produtos">
            <div style="text-align: center" class="col col-produtos-img">
                <img style="max-width: 500px;" src="<?php the_field('imagem_nuvem'); ?>" alt="Nuvem de Palavras">
            </div>
            <div class="col col-produtos-img">
            <video style="width: 100%; height: 100%; pointer-events: none; object-fit: cover" controls="false" autoplay loop  muted controlsList="nodownload"> 
                <source src="<?php the_field('video_saude_e_nutricao'); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            </div>
        </div>
    </div>
</section>

<section id="informacoes-nutricionais">
    <div style="background: #ff8a05!important" class="container container-programas">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 style="color:#6e380c!important" class="title-col-quem-somos"><?php the_field('titulo_tabela_nutricional'); ?></h2>
                    <br>
                    <a class="btn-col-produtos" href="<?php the_field('url_botao_tabela_nutricional'); ?>" target="_blank"><?php the_field('botao_tabela_nutricional'); ?></a>
                </div>
            </div>
            <div style="background: #ebebd4;" class="col col-produtos-img col-programas-img">
                <img class="tabela-nutricional" src="<?php the_field('imagem_tabela_nutricional'); ?>" alt="Tabela Nutricional">
            </div>
        </div>
    </div>
</section>

<section id="beneficios-do-suco-de-laranja-para-a-saude">
    <div style="background-image: url(<?php the_field('imagem_mito'); ?>)" class="container container-laranja-citro-suco container-laranja_Mito">
        <div class="row row-laranja-citro-suco">
            <div class="col col-laranja-citro-suco">
                <h2 class="text-laranja-citro-suco"><?php the_field('titulo_mito'); ?></h2>
                <div class="paragrafo-laranja-citro-suco acessibilidade">
                    <?php the_field('texto_mito'); ?>
                </div>
                <a class="btn-col-laranja-citro-suco" href="<?php the_field('url_botao_linha_do_tempo'); ?>" target="_blank"><?php the_field('botao_mito'); ?></a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-tabela-nutricional">
        <div class="container_voce_sabia">
            <h2 class="title_voce_sabia">Você Sabia</h2>
            <div><?php echo do_shortcode('[the_grid name="Você Sabia"]'); ?></div>
        </div>
    </div>
</section>

<section id="noticias">
    <div class="container container-citrocultores-citro-suco">
        <div class="row row-produtos">
            
                <div class="col col-produtos-img">
                    <img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/03/Suco-de-Laranja-V2_09.png">
                </div>
                <div class="col col-fale-conosco">
                    <div class="col container-col-fale-conosco">
                        <h2 class="title-col_noticias">Notícias</h2>
                        <p class="paragrafo-col-_noticias">
                            Tudo o que você precisa saber sobre o suco de laranja em apenas um clique.
                        </p>  
                    </div>
                </div>

        </div>
    </div>
</section>

<section>
    <div class="container-single-dicas blog-dicas">
        <?php echo do_shortcode('[the_grid name="noticias Suco de Laranja"]'); ?>
    </div>
</section>


<?php get_footer();