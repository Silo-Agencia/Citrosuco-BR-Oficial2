<?php get_header(); ?>

    <section class="sliderTopo">
        <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/o_tempo.png">
        </div>
    </section>



    <section id="cadeia-de-valor" class="cadeia">
        <div class="container-fluid container-programas">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 offset-md-5 offset-lg-8">
                    <div class="col-produtos-img col-programas-img col-timeline-events">
                        <p>Construímos a nossa história, que nos levou a ser uma empresa com representatividade no mercado, que enxerga as oportunidades e faz acontecer!</p>
                        <div class="title-timeline-events">Legenda</div>
                        <ul class="itens">
                            <li class="um">Citrosuco (Fischer S.A.)</li>
                            <li class="dois">Citrovita</li>
                            <li class="tres">Citrosuco</li>
                        </ul>
                        <div class="title-timeline-events">A Linha do Tempo</div>

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="um-tab" data-toggle="tab" href="#um" role="tab" aria-selected="true">1963 a 1984</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="dois-tab" data-toggle="tab" href="#dois" role="tab" aria-selected="false">1989 a 2012</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tres-tab" data-toggle="tab" href="#tres" role="tab" aria-selected="false">2012 +</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <section class="timeline">
            <div class="container">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="um">
                        <?php echo do_shortcode("[et id='196']"); ?>
                    </div>

                    <div class="tab-pane fade" id="dois" role="tabpanel">
                        <?php echo do_shortcode('[et id="151"]'); ?>
                    </div>

                    <div class="tab-pane fade" id="tres" role="tabpanel">
                        <?php echo do_shortcode("[et id='195']"); ?>
                    </div>
                </div>
            </div>
        </section>
    </section>

<?php get_footer();