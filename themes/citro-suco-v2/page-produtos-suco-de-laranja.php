<?php get_header(); ?>

<section class="container-home"></section>
<section class="container-banner ">
    <div class="container-banner-desktop"><?php the_field('banner_home_desktop'); ?></div>
    <div class="container-banner-mobile"><?php the_field('banner_home_mobile'); ?></div>
</section>

<section>
    <div class="container container-col-produtos-laranjas">
        <div class="row row-produtos-laranjas">
                <div id="produto-ingredientes-mobile" class="col col-produtos-laranjas">
                    <a href="<?php the_field('url_ingredientes'); ?>">
                        <div class="container-img-produtos">
                            <img class="img-produtos-laranjas" src="<?php the_field('imagem_ingredientes'); ?>" alt="">
                        </div>
                    </a>     
                </div>
            
                <div id="produto-inovacao-da-laranja-mobile" class="col col-produtos-laranjas">
                    <a href="<?php the_field('url_inovacoes_da_laranja'); ?>">
                        <div class="container-img-produtos">
                            <img class="img-produtos-laranjas" src="<?php the_field('imagem_inovacoes_da_laranja'); ?>" alt="">
                        </div>
                    </a>
                </div>
        </div>
    </div>
    <div class="container container-col-produtos-laranjas">
        <div class="row row-produtos-laranjas">

                
            
                <div id="produto-suco-de-laranja" class="col col-produtos-laranjas">
                    <a href="<?php the_field('url_suco_de_laranja'); ?>">
                        <div class="container-img-produtos">
                            <img class="img-produtos-laranjas" src="<?php the_field('imagem_suco_de_laranja'); ?>" alt="">
                        </div>
                    </a> 
                </div>
            
            
                <div id="produto-ingredientes" class="col col-produtos-laranjas">
                    <a href="<?php the_field('url_ingredientes'); ?>">
                        <div class="container-img-produtos">
                            <img class="img-produtos-laranjas" src="<?php the_field('imagem_ingredientes'); ?>" alt="">
                        </div>
                    </a>     
                </div>
            
                <div id="produto-inovacao-da-laranja" class="col col-produtos-laranjas">
                    <a href="<?php the_field('url_inovacoes_da_laranja'); ?>">
                        <div class="container-img-produtos">
                            <img class="img-produtos-laranjas" src="<?php the_field('imagem_inovacoes_da_laranja'); ?>" alt="">
                        </div>
                    </a>
                </div>
            
        </div>
    </div>

    <div class="container container-col-produtos-laranjas">

        <div class="row row-produtos-laranjas">
            <div class="container-produtos-all">
                <?php while( the_repeater_field('produtos') ): ?>
                    <div class="container-produtos-descricao">
                        <div class="container-img-title-produtos">
                            <img src="<?php the_sub_field('imagem_produto'); ?>" alt="">
                            <h2 class="title-produtos-descricao"><?php the_sub_field('nome_do_produtos'); ?></h2>
                        </div>
                        <div>
                            <div><?php the_sub_field('descricao_do_produto'); ?></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    
</section>


<?php get_footer();