<?php get_header(); ?>

<section class="container-home"></section>
<section class="container-banner ">
    <div class="container-banner-desktop"><?php the_field('banner_home_desktop'); ?></div>
    <div class="container-banner-mobile"><?php the_field('banner_home_mobile'); ?></div>
</section>

<section>
    <div class="container container-citrosuco-valorizamos">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 class="title-col-citrosuco-valorizamos"><?php the_field('titulo_na_citrosuco'); ?></h2>
                    <div class="paragrafo-col-citrosuco-valorizamos">
                        <?php the_field('texto_na_citrosuco'); ?>
                    </div>
                </div>
            </div>
            <div class="col col-produtos-img">
                <?php $imageNaCitrosuco = get_field('imagem_na_citrosuco'); ?>
                <img src="<?php echo esc_url($imageNaCitrosuco['url']); ?>" alt="<?php echo esc_attr($imageNaCitrosuco['alt']); ?>">
            </div>
        </div>
    </div>
</section>

<section id="pilares-da-cultura">
    <div class="container container-4pilares-de-sustentabilidade">
        <div class="row row-produtos">
            <div class="col col-4pilares-img">
                <?php $imagePilares = get_field('imagem_pilares_de_cultura'); ?>
                <img src="<?php echo esc_url($imagePilares['url']); ?>" alt="<?php echo esc_attr($imagePilares['alt']); ?>">
            </div>

            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <p>
                        <div class="container-icon-4pilares">
                            <div class="text-4pilares-dicas">
                                <h2 class="pilares-4 title-4pilares-dicas">Desafia</h2>
                                <p class="paragrafo-4pilares"><?php the_field('pilar_um'); ?></p>
                            </div>
                        </div>
                        <div class="container-icon-4pilares">
                            <div class="text-4pilares-integra">
                                <h2 class="pilares-4 title-4pilares-integra">Integra</h2>
                                <p class="paragrafo-4pilares"><?php the_field('pilar_dois'); ?></p>
                            </div>
                        </div>
                        <div class="container-icon-4pilares">
                            <div class="text-4pilares-reconhece">
                                <h2 class="pilares-4 title-4pilares-reconhece">Reconhece</h2>
                                <p class="paragrafo-4pilares"><?php the_field('pilar_tres'); ?></p>
                            </div>
                        </div>
                        <div class="container-icon-4pilares">
                            <div class="text-4pilares-antecipa">
                                <h2 class="pilares-4 title-4pilares-antecipa">Antecipa</h2>
                                <p class="paragrafo-4pilares"><?php the_field('pilar_quatro'); ?></p>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section id="programas">
    <div class="container container-programas">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 class="title-col-programa"><?php the_field('titulo_nossos_programas'); ?></h2>
                    <div class="paragrafo-col-relatorio-de-sustentabilidade">
                        <?php the_field('texto_nossos_programas'); ?>
                    </div>
                </div>
            </div>
            <div class="col col-produtos-img col-programas-img">
                <?php $imageNossosProgramas = get_field('imagem_nossos_programas'); ?>
                <img src="<?php echo esc_url($imageNossosProgramas['url']); ?>" alt="<?php echo esc_attr($imageNossosProgramas['alt']); ?>">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container container-sustentabilidade">
        <div class="row row-sustentabilidade row-programas-container">
                <div class="container-programas-all">
                    <?php $imageNossosProgramasSemear = get_field('imagem_semear'); ?>
                    <img class="img-container-programas" src="<?php echo esc_url($imageNossosProgramasSemear['url']); ?>" alt="<?php echo esc_attr($imageNossosProgramasSemear['alt']); ?>">
                    <div>
                        <?php the_field('texto_-_programa_de_estagio_semear'); ?>
                    </div>
                </div>
                <div class="container-programas-all">
                    <?php $imageNossosProgramasParaTodos = get_field('imagem_para_todos'); ?>
                    <img class="img-container-programas" src="<?php echo esc_url($imageNossosProgramasParaTodos['url']); ?>" alt="<?php echo esc_attr($imageNossosProgramasParaTodos['alt']); ?>">
                    <div>
                        <?php the_field('texto_-_programa_de_diversidade'); ?>
                    </div>
                </div>
        </div>
    </div>
</section>

<section id="trabalhe-conosco">
    <div class="container container-trabalhe-conosco-socioambientais">
        <div class="row row-produtos">
            <div class="col col-produtos-img col-programas-img">
                <?php $imageTrabalheConosco = get_field('imagem_trabalhe_conosco'); ?>
                <img src="<?php echo esc_url($imageTrabalheConosco['url']); ?>" alt="<?php echo esc_attr($imageTrabalheConosco['alt']); ?>">
            </div>
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 class="title-col-trabalhe-conosco-socioambientais"><?php the_field('titulo_trabalhe_conosco'); ?></h2>
                    <div class="paragrafo-col-trabalhe-conosco-socioambientais">
                        <?php the_field('texto_trabalho_conosco'); ?>
                    </div>
                    <div class="container-btn-mobile">
                        <a class="btn-trabalhe-conosco bg-btn-trabalhe-conosco" href="<?php the_field('botao_url_carreiras'); ?>" target="_blank"><?php the_field('botao_carreiras'); ?></a>
                        <a class="btn-trabalhe-conosco" href="<?php the_field('botao_url_linkedin'); ?>"  target="_blank"><?php the_field('botao_linkedin'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer();