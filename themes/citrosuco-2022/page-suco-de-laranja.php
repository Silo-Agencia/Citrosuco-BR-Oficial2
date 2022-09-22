<?php get_header(); ?>

<section class="sliderTopo">
    <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-saude.png">
    </div>
</section>

<section>
    <div class="container container-produtos-citro-suco">
        <div style="background: #67bb00;" class="row row-produtos">
            <div class="col col-produtos-img">
            <video style="width: 100%; height: 100%; pointer-events: none; object-fit: cover" controls="false" autoplay loop  muted controlsList="nodownload">
                <source src="<?php the_field('video_saude_e_nutricao'); ?>" type="video/mp4">
            	Seu navegador não suporta vídeo.
            </video>
            </div>
        </div>
    </div>
</section>

<section id="informacoes-nutricionais" class="cadeia">
    <div class="container-fluid abs">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 offset-md-1 align-self-center">
                <h2>Tabela Nutricional</h2>
                <button class="nutri">Acesse aqui a tabela completa</button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="nutri">
                    <a target="_blank" href="<?php echo get_template_directory_uri(); ?>/assets/misc/National-Nutrient-Database-for-Standard-Reference-Release-1-April-2018-full.pdf">
                        <img class="img big" src="<?php echo get_template_directory_uri(); ?>/assets/img/tabela.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="colunas3 mito">
    <div class="container-fluid">
        <div class="row colunas3mito  ">
            <div class="col-12 col-md-3 offset-md-1 align-self-center">
                <div class="conteudo">
                    <h2 class="title-col-produtos">Mito</h2>

                    <p>Fazemos acontecer, com foco no futuro.</p>

                    <p>Suco de laranja não engorda. Estudo feito pela Unesp mostra que ele é um aliado na dieta e combate gordura no figado.</p>

                    <a class="btn-col-produtos" href="https://citrusbr.com/estudos/manutencao-do-peso/?portfolioCats=121" target="_blank">Veja mais</a>
                </div>
            </div>
            <div class="col-12 col-md-7 offset-md-1">
                <img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/mito.png">
            </div>
        </div>
    </div>
</section>

<section id="beneficios-do-suco-de-laranja-para-a-saude" class="sabia">
    <div class="container-tabela-nutricional">
        <div class="container_voce_sabia">
            <h2 class="title_voce_sabia">Você Sabia?</h2>
            <div><?php echo do_shortcode('[the_grid name="Você Sabia"]'); ?></div>
        </div>
    </div>
</section>

<section id="noticias" class="colunas3 noticias">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-7 col-12">
                <img class="img left" src="<?php echo get_template_directory_uri(); ?>/assets/img/noticias.png">
            </div>
            <div class="col-md-3 col-12 offset-md-1 align-self-center">
                <div class="conteudo">
                    <h2 class="title-col-produtos">Notícias</h2>
                    <p>Tudo o que você precisa saber sobre o suco de laranja em apenas um clique.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="noticas">
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <?php echo do_shortcode('[the_grid name="noticias Suco de Laranja"]'); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer();