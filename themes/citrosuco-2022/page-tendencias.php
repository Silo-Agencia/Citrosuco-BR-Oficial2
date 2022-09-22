<?php get_header(); ?>
<?php if (isset($_GET['i'])) {
    echo '<input class="filter '.$_GET['i'].'" type="hidden" value="'.$_GET['i'].'" />';
} ?>

<section class="container-mandala">
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
    <div id="mandala" class="container">
        <div class="row">
            <div class="col-12">
                <div class="conteudo">
                    <h2>Clique na mandala e conheça as tendências que têm impactado<br> a forma como interagimos com as pessoas e com o mundo</h2>
                    <div class="mandala-div">
                        <a href="#infograficos">
                            <img class="parte parte1" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/mandala1.png" label="bem-estar" />
                            <span>Bem-estar</span>
                        </a>
                        <a href="#infograficos">
                            <img class="parte parte2" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/mandala2.svg" label="habitat" />
                            <span>Habitat</span>
                        </a>
                        <a href="#infograficos">
                            <img class="parte parte3" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/mandala3.svg" label="tecnologia" />
                            <span>Tecnologia</span>
                        </a>
                        <a href="#infograficos">
                            <img class="parte parte4" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/mandala4.svg" label="comunidade" />
                            <span>Comunidade</span>
                        </a>
                        <div class="img bg">
                            <img class="mandala" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $queryPost = new WP_Query(array( 
    'post_type' => 'infografico',
    'posts_per_page' => -1,
    'order' => 'DESC'
 )); ?>
 <?php if($queryPost->have_posts()): ?>
<section id="infograficos" class="noticiatrend">
    <div class="modal fade info" id="info-graficos" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <span class="topright" data-dismiss="modal" aria-label="Close">&times</span>
                    <iframe name="infos"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row itens justify-content-center">
            <div class="none <?php the_field('categoria'); ?> col-12 col-md-8 align-self-center">
                <div class="conteudo">
                    <h2>Nenhum conteúdo com o filtro selecionado</h2>
                </div>
            </div>
            <?php while($queryPost->have_posts()): $queryPost->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="item <?php the_field('categoria'); ?> col-12 col-md-6 col-lg-4 align-self-center">
                <div class="conteudo">
                    <img src="<?php the_field('thumb'); ?>" />
                </div>
            </a>
            <?php endwhile; ?>
            <a href="#" class="delete <?php the_field('categoria'); ?> col-12 align-self-center">
                <div class="conteudo">
                    <h2>Todas as categorias</h2>
                </div>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

</section><script type="text/javascript">
    function preload(sources, callback) {
        if(sources.length) {
            var preloaderDiv = $('<div style="display: none;"></div>').prependTo(document.body);

            $.each(sources, function(i,source) {
                $("<img/>").attr("src", source).appendTo(preloaderDiv);

                if(i == (sources.length-1)) {
                    $(preloaderDiv).imagesLoaded(function() {
                        $(this).remove();
                        if(callback) callback();
                    });
                }
            });
        } else {
            if(callback) callback();
        }
    }
    preload([
        '<?php echo get_template_directory_uri(); ?>/assets/img/mandala.png',
        '<?php echo get_template_directory_uri(); ?>/assets/img/img1.jpg',
        '<?php echo get_template_directory_uri(); ?>/assets/img/img2.jpg',
        '<?php echo get_template_directory_uri(); ?>/assets/img/img3.jpg',
        '<?php echo get_template_directory_uri(); ?>/assets/img/img4.jpg',
        '<?php echo get_template_directory_uri(); ?>/assets/img/img6.jpg'
    ], function() { 
        console.log("done"); 
    });
</script>

<?php get_footer();