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
                    <a href="<?php the_field('url_suco_de_laranja'); ?>">
                        <div class="container-img-produtos">
                            <img class="img-produtos-laranjas" src="<?php the_field('imagem_suco_de_laranja'); ?>" alt="">
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
<style>
.container-tooltip {
    margin: 0px 0 100px;
    padding: 0 30px;
}

.container-tooltip li {
    margin: 5px 0;
}

.title-tooltip {
    cursor: pointer;
    color: #005102;
}

.tooltip-1, .tooltip-2, .tooltip-3  {
  position: relative;
  display: inline-block;
}


.tooltip-1 .tooltiptext, .tooltip-2 .tooltiptext, .tooltip-3 .tooltiptext  {
    visibility: hidden;
    width: 250px;
    background-color: #fff;
    color: #000;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 0;
    left: 125%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 0.3s;
    text-align: left;
    font-size: 12px;
    padding: 20px;
    border: solid 1px gray;
    box-shadow: 5px 10px 15px 0px rgb(0 0 0 / 40%);
}

.tooltip-1:hover .tooltiptext, .tooltip-2:hover .tooltiptext, .tooltip-3:hover .tooltiptext  {
  visibility: visible;
  opacity: 1;
}

@media screen and (max-width: 468px) {
    .tooltip-1 .tooltiptext, .tooltip-2 .tooltiptext, .tooltip-3 .tooltiptext  {
        left: 20%;
    }
}

.img-position img {
    position: absolute;
}
</style>
<section>
    <div class="container container-col-produtos-laranjas">
        <div class="container-tooltip">
            
                <ul>
                    <li>
                        <div class="tooltip-1">
                            <h2 class="title-produtos-descricao title-tooltip">ÓLEO ESSENCIAL</h2>
                            <span class="tooltiptext">
                            <span>Óleo essencial de laranja. Obtido na prensagem da casca da laranja após a extração do suco. Utilizado em produtos alimentícios, cosméticos e perfumaria.</span>
                            <span class="img-position"><img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/04/Oleo-3.png"></span>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="tooltip-2">
                            <h2 class="title-produtos-descricao title-tooltip">ESSÊNCIA FASE OLEOSA</h2>
                            <span class="tooltiptext">
                            <span>Obtido na captação dos aromas voláteis durante a concentração do suco de laranja. Utilizado em industrias de aromas para alimentos e bebidas.</span>
                            <span class="img-position"><img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/04/Oleo-2.png"></span>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="tooltip-3">
                            <h2 class="title-produtos-descricao title-tooltip">ESSÊNCIA FASE AQUOSA</h2>
                            <span class="tooltiptext">
                            <span>Obtido na captação dos aromas voláteis durante a concentração do suco de laranja. Grande aplicação no realce de sabor em alimentos e bebidas.</span>
                            <span class="img-position"><img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/04/Oleo-1.png"></span>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="tooltip-3">
                            <h2 class="title-produtos-descricao title-tooltip">TERPENO CÍTRICO – D’LIMONENE</h2>
                            <span class="tooltiptext">
                            <span>Óleo fino, incolor e com leve aroma cítrico. Obtido da destilação do licor cítrico extraído do bagaço da laranja. Utilizado como solvente, produto de limpeza e na indústria química.</span>
                            <span class="img-position"><img src="http://webapp253255.ip-45-56-127-189.cloudezapp.io/wp-content/uploads/2021/04/Oleo-4.png"></span>
                            </span>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</section>

<?php get_footer();