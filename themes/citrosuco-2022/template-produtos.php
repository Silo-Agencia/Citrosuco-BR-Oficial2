<?php /* Template Name: Produtos Page Template */  ?>
<?php get_header(); ?>

<section class="sliderTopo">
    <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-produtos.png">
    </div>
</section>

<section class="ingredientes-inovacoes-container-section">


    <div class="container container-col-produtos-laranjas mt-5 mb-5">
        <div class="container-produtos-all">
            <a href="<?php echo home_url('produtos-suco-de-laranja');?>" class="container-produtos-descricao text-center icons-menus <?php echo is_page('produtos-suco-de-laranja') ?  'active' : ''; ?>">
                <div class="icon-menu-cicle">

                    <img class="the_image" src="<?php echo get_template_directory_uri(); ?>/assets/img/templates/produtos/icon-suco-de-laranja.png" alt="">
                </div>
                <h2 class="mt-3 mb-2 title-produtos-descricao">Suco de laranja</h2>
            </a>
            <a href="<?php echo home_url('produtos-ingredientes');?>" class="container-produtos-descricao text-center icons-menus <?php echo is_page('produtos-ingredientes') ? 'active' : ''; ?>">
                <div class="icon-menu-cicle">
                    <img class="the_image" src="<?php echo get_template_directory_uri(); ?>/assets/img/templates/produtos/ingredientes.png" alt="">
                </div>
                <h2 class="mt-3 mb-2 title-produtos-descricao">Ingredientes</h2>
            </a>
            <a href="<?php echo home_url('produtos-inovacoes-da-laranja');?>" class="container-produtos-descricao text-center icons-menus <?php echo is_page('produtos-inovacoes-da-laranja') ? 'active' : ''; ?>">
                <div class="icon-menu-cicle">

                    <img class="the_image" src="<?php echo get_template_directory_uri(); ?>/assets/img/templates/produtos/inovacoes-da-laranja.png" alt="">
                </div>
                <h2 class="mt-3 mb-2 title-produtos-descricao">Inovações da laranja</h2>
            </a>
        </div>
    </div>


    <div class="container container-col-produtos-laranjas produtos-all-list">
        <div class="row row-produtos-laranjas">
            <div class="container-produtos-all">
                <?php while (the_repeater_field('produtos')) : ?>
                    <div class="container-produtos-descricao text-center">
                        <img src="<?php the_sub_field('imagem_produto'); ?>" alt="">
                        <h2 class="mt-3 mb-2 title-produtos-descricao"><?php the_sub_field('nome_do_produtos'); ?></h2>

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
    body.bg-white, .ingredientes-inovacoes-container-section {
    background: #fbe7cd !important;
}

.title-produtos-descricao {
    color: #52a247;
}

.container-produtos-descricao.text-center p {
    font-weight: 200;
}

.icons-menus.active .icon-menu-cicle {
    background: #50a146;
}
.icons-menus:hover .icon-menu-cicle {
    background: #9BC74C;
}

.icons-menus img {
    width: 68px;
}

.icons-menus .icon-menu-cicle {
    height: 140px;
    width: 140px;
    background: #655046;
    border-radius: 50%;
    text-align: center;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

.icons-menus.active h2 {
    color: #52a247;
}

.icons-menus:hover h2 {
    color: #9BC74C;
}

.icons-menus h2 {
    color: #655046;
}

.produtos-all-list .container-produtos-descricao.text-center img {
    border-radius: 50%;
}
</style>

<?php get_footer();