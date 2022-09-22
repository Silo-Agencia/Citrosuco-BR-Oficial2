<?php get_header(); ?>

<section class="container-mandala-compromisso">
    <div id="mandala" class="container-fluid">
        <div class="row justify-content-center justify-content-lg-end">
            <div class="col-12 col-md-10 col-lg-6 offset-lg-1 order-1 order-lg-2">
                <div class="conteudo">
                    <div class="mandala-div">

                        <a href="#compromissos">
                            <img class="parte-c parte1" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/1.svg" label="bio" />
                            <span>Biodiversidade</span>
                        </a>
                        <a href="#compromissos">
                            <img class="parte-c parte2" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/2.svg" label="gestao" />
                            <span>Gestão<br> social</span>
                        </a>
                        <a href="#compromissos">
                            <img class="parte-c parte3" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/3.svg" label="cadeiav" />
                            <span>Cadeia<br> de valor</span>
                        </a>
                        <a href="#compromissos">
                            <img class="parte-c parte4" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/4.svg" label="diversidade" />
                            <span>Diversidade</span>
                        </a>
                        <a href="#compromissos">
                            <img class="parte-c parte5" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/5.svg" label="carbono" />
                            <span>Carbono</span>
                        </a>
                        <a href="#compromissos">
                            <img class="parte-c parte6" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/6.svg" label="agua" />
                            <span>Água</span>
                        </a>
                        <div class="img bg bg0">
                            <img class="mandala" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala-c.png" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-2 col-lg-3 align-self-center order-2 order-lg-1">
                <img class="compro" src="<?php echo get_template_directory_uri(); ?>/assets/img/compromissos.png">
                <p>Interaja com a mandala e conheça os detalhes dos nossos compromissos 2030!</p>
            </div>
        </div>
    </div>
</section>


<section id="compromissos" class="comproticioas">
    <div class="container-fluid">
        <div class="row itens justify-content-center">
            <a href="<?php echo home_url('compromissos/carbono'); ?>" class="item c carbono col-12 col-md-6 col-lg-4 align-self-center">
                <div class="conteudo">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/5.png">
                        <h2>Contribuir para a resiliência climática</h2>
                    </div>
                </div>
            </a>
            <a href="<?php echo home_url('compromissos/biodiversidade'); ?>" class="item c bio col-12 col-md-6 col-lg-4 align-self-center">
                <div class="conteudo">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/4.png">
                        <h2>Fomentar a biodiversidade</h2>
                    </div>
                </div>
            </a>
            <a href="<?php echo home_url('compromissos/agua'); ?>" class="item c agua col-12 col-md-6 col-lg-4 align-self-center">
                <div class="conteudo">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/6.png">
                        <h2>Gerir racionalmente os recursos hídricos</h2>
                    </div>
                </div>
            </a>
            <a href="<?php echo home_url('compromissos/gestao'); ?>" class="item c gestao col-12 col-md-6 col-lg-4 align-self-center">
                <div class="conteudo">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/2.png">
                        <h2>Impulsionar a transformação social</h2>
                    </div>
                </div>
            </a>
            <a href="<?php echo home_url('compromissos/diversidade'); ?>" class="item c diversidade col-12 col-md-6 col-lg-4 align-self-center">
                <div class="conteudo">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/1.png">
                        <h2>Promover a diversidade, equidade e inclusão</h2>
                    </div>
                </div>
            </a>
            <a href="<?php echo home_url('compromissos/cadeia'); ?>" class="item c cadeiav col-12 col-md-6 col-lg-4 align-self-center">
                <div class="conteudo">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/3.png">
                        <h2>Liderar a cadeia sustentável</h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

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
