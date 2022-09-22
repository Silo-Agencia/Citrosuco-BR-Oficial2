<?php get_header(); ?>

<section class="container-home"></section>
<section class="container-banner ">
    <div class="container-banner-desktop"><?php the_field('banner_home_desktop'); ?></div>
    <div class="container-banner-mobile"><?php the_field('banner_home_mobile'); ?></div>
</section>

<section>
    <div style="background: #6ab916" class="container container-muito-alem-do-suco">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 class="title-col-muito-alem-do-suco"><?php the_field('titulo_governanca'); ?></h2>
                    <div class="paragrafo-col-muito-alem-do-suco">
                        <?php the_field('texto_governanca'); ?>
                    </div>
                </div>
            </div>
            <div class="col col-produtos-img col-sustentabilidade-img">
                <?php $imageGovernanca = get_field('imagem_governanca'); ?>
                <img src="<?php echo esc_url($imageGovernanca['url']); ?>" alt="<?php echo esc_attr($imageGovernanca['alt']); ?>">
            </div>
        </div>
    </div>
</section>

<section id="codigo-de-conduta">
    <div class="container container-pilares-de-sustentabilidade">
        <div class="row row-produtos">

            <div style="padding: 40px 0!important; align-items: flex-start!important" class="col col-produtos">
                <div class="container-col-produtos container-col-condutas">
                    <h2 class="title-conduta">Código de Conduta</h2>
                    <div class="paragrafo-col-pilares-de-sustentabilidade">
                        <?php the_field('texto_governanca_col_um'); ?>
                    </div>
                </div>
            </div>

            <div style="padding: 40px 0!important; align-items: flex-start!important" class="col col-produtos">
                <div class="container-col-produtos container-col-condutas">
                    <div class="paragrafo-col-pilares-de-sustentabilidade">
                        <?php the_field('texto_governanca_col_dois'); ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section>
    <div style="background: #f3c034!important" class="container container-relatorio-de-sustentabilidade programa_complice">
        <div class="row row-produtos">

            <div class="col col-produtos-img">
                <img src="<?php the_field('imagem_compliance'); ?>" alt="Programa de Compliance">
            </div>

            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 style="color: #005008!important" class="title-col-relatorio-de-sustentabilidade programa_complice"><?php the_field('titulo_compliance'); ?></h2>
                    <div style="color: #424242" class="paragrafo-col-relatorio-de-sustentabilidade programa_complice">
                        <?php the_field('texto_compliance'); ?>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="row row-icons_compliance">
            <div class="col col-icons_compliance">
                <div class="container-icons_compliance">
                    <img class="img-icons_compliance" src="/wp-content/uploads/2021/03/Governanca-Programas_03.png">
                    <h2 class="text-icons_compliance">A Aderência<br>a Regulamentação</h2>
                </div>
            </div>
            <div class="col col-icons_compliance">
                <div class="container-icons_compliance">
                    <img class="img-icons_compliance" src="/wp-content/uploads/2021/03/Governanca-Programas_05.png">
                    <h2 class="text-icons_compliance">A Prevenção<br>à Corrupção</h2>
                </div>
            </div>
            <div class="col col-icons_compliance">
                <div class="container-icons_compliance">
                    <img class="img-icons_compliance" src="/wp-content/uploads/2021/03/Governanca-Programas_10.png">
                    <h2 class="text-icons_compliance">Defesa da<br>Concorrência</h2>
                </div>
            </div>
            <div class="col col-icons_compliance">
                <div class="container-icons_compliance">
                    <img class="img-icons_compliance" src="/wp-content/uploads/2021/03/Governanca-Programas_07.png">
                    <h2 class="text-icons_compliance">A Prevenção<br>à Fraude</h2>
                </div>
            </div>
    
        </div>
        
    </div>
</section>

<section>
    <div class="container container-pilares-de-sustentabilidade">
        <div class="row row-produtos">

            <div style="padding: 40px 0!important; align-items: flex-start!important" class="col col-produtos">
                <div class="container-col-produtos container-col-condutas">
                    <div class="paragrafo-col-pilares-de-sustentabilidade">
                        <?php the_field('texto_compliance_col_um'); ?>
                    </div>
                </div>
            </div>

            <div style="padding: 40px 0!important; align-items: flex-start!important" class="col col-produtos">
                <div class="container-col-produtos container-col-condutas">
                    <div class="paragrafo-col-pilares-de-sustentabilidade">
                        <?php the_field('texto_compliance_col_dois'); ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>





<?php get_footer();