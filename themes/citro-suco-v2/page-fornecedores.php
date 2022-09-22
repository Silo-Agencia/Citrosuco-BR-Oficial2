<?php get_header(); ?>

<style>
    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 0px solid #ccc;
        background: #ebebd3;
    }

    .tablinks:focus {
        box-shadow: 0 0 0 0;
        border: 0 none;
        outline: 0;
    } 

    /* Style the close button */
    .topright {
        float: right;
        cursor: pointer;
        font-size: 28px;
    }

    .topright:hover {color: black;}

    .align-tab {
        display: flex;
        justify-content: center;
    }
    .passo-a-passo-1 {
        background-image: url('/wp-content/uploads/2021/04/Fornecedores_com-texto_1.png');
        background-size: 100%;
        background-repeat: no-repeat;
        width: 100%;
        max-width: 400px;
        height: 270px;
        padding: 0;
        cursor: pointer;
        display: block;
    }
    .passo-a-passo-1.active {
        background-image: url('/wp-content/uploads/2021/04/Fornecedores_com-texto_clicado_1.png');
        background-size: 100%;
        background-repeat: no-repeat;
        width: 100%;
        max-width: 400px;
        height: 270px;
        padding: 0;
    }

    .passo-a-passo-2 {
        background-image: url('/wp-content/uploads/2021/04/Fornecedores_com-texto_2.png');
        background-size: 100%;
        background-repeat: no-repeat;
        width: 100%;
        max-width: 400px;
        height: 270px;
        padding: 0;
        cursor: pointer;
        display: block;
    }
    .passo-a-passo-2.active {
        background-image: url('/wp-content/uploads/2021/04/Fornecedores_com-texto_clicado_2.png');
        background-size: 100%;
        background-repeat: no-repeat;
        width: 100%;
        max-width: 400px;
        height: 270px;
        padding: 0;
    }

    .passo-a-passo-3 {
        background-image: url('/wp-content/uploads/2021/04/Fornecedores_com-texto_3.png');
        background-size: 100%;
        background-repeat: no-repeat;
        width: 100%;
        max-width: 400px;
        height: 270px;
        padding: 0;
        cursor: pointer;
        display: block;
    }
    .passo-a-passo-3.active {
        background-image: url('/wp-content/uploads/2021/04/Fornecedores_com-texto_clicado_3.png');
        background-size: 100%;
        background-repeat: no-repeat;
        width: 100%;
        max-width: 400px;
        height: 270px;
        padding: 0;
    }

    .passo-a-passo-4 {
        background-image: url('/wp-content/uploads/2021/04/Fornecedores_com-texto_4.png');
        background-size: 100%;
        background-repeat: no-repeat;
        width: 100%;
        max-width: 400px;
        height: 270px;
        padding: 0;
        cursor: pointer;
        display: block;
    }
    .passo-a-passo-4.active {
        background-image: url('/wp-content/uploads/2021/04/Fornecedores_com-texto_clicado_4.png');
        background-size: 100%;
        background-repeat: no-repeat;
        width: 100%;
        max-width: 400px;
        height: 270px;
        padding: 0;
    }


    .container-passo-a-passo-width {
        max-width: 1400px;
        margin: auto;
        margin-bottom: 40px;
    }
    .container-passo-a-passo-2021 {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding: 20px 40px 0;
    }
    .tablinks {
        border: solid 0;
    }

    @media screen and (max-width: 500px) {
        .align-tab {
            display: block;
        }
    }
</style>

<section class="container-home"></section>
<section class="container-banner ">
    <div class="container-banner-desktop"><?php the_field('banner_home_desktop'); ?></div>
    <div class="container-banner-mobile"><?php the_field('banner_home_mobile'); ?></div>
</section>

<section>
    <div class="container container-pilares-de-sustentabilidade">
        <div class="row row-produtos">

            <div style="padding: 40px 0!important; align-items: flex-start!important" class="col col-produtos">
                <div class="container-col-produtos container-col-condutas">
                    <h2 class="title-conduta">Mensagem de valores e propósito</h2>
                    <div class="paragrafo-col-pilares-de-sustentabilidade">
                        <?php the_field('texto_valores_e_proposito_col_um'); ?>
                    </div>
                </div>
            </div>

            <div style="padding: 40px 0!important; align-items: flex-start!important" class="col col-produtos">
                <div class="container-col-produtos container-col-condutas">
                    <div class="paragrafo-col-pilares-de-sustentabilidade">
                        <?php the_field('texto_valores_e_proposito_col_dois'); ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section id="fornecedores">
    <div style="background: #ff8a05!important" class="container container-programas">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 style="color:#6e380c!important" class="title-col-quem-somos"><?php the_field('titulo_fornecedores_copiar'); ?></h2>
                    <div class="paragrafo-col-de-quem-somos">
                        <?php the_field('texto_fornecedores_copiar'); ?>
                    </div>
                </div>
            </div>
            <div class="col col-produtos-img col-programas-img">
                <?php $imageFornecedores = get_field('imagem_fornecedores'); ?>
                <img src="<?php echo esc_url($imageFornecedores['url']); ?>" alt="<?php echo esc_attr($imageFornecedores['alt']); ?>">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container container-fornecedores-inform">
        <div class="row">
            <div style="background-image: url(<?php the_field('imagem_background_se_tornar_fornecedor'); ?>)" class="col-sm col-fornecedores-info">
                <div>
                    <h3><div class="paragrafo-col-produtos"><?php the_field('titulo_se_tornar_fornecedor'); ?></div></h3>
                    <a class="btn-col-produtos" href="<?php the_field('botao_url_se_tornar_fornecedor'); ?> " target="_blank"><?php the_field('botao_se_tornar_fornecedor'); ?></a>
                </div>
            </div>
            <div style="background-image: url(<?php the_field('imagem_background_ja_tem_cadastro'); ?>)" class="col-sm col-fornecedores-info">
                <div>
                    <h3><div class="paragrafo-col-produtos"><?php the_field('titulo_ja_tem_cadastro'); ?></div></h3>
                    <a class="btn-col-produtos" href="<?php the_field('botao_url_ja_tem_cadastro'); ?>" target="_blank"><?php the_field('botao_ja_tem_cadastro'); ?></a>
                </div>
            </div>
            <div style="background-image: url(<?php the_field('imagem_background_ja_e_fornecedor'); ?>)" class="col-sm col-fornecedores-info">
                <div>
                    <h3><div class="paragrafo-col-produtos"><?php the_field('titulo_ja_e_fornecedor'); ?></div></h3>
                    <a class="btn-col-produtos" href="<?php the_field('botao_url_ja_e_fornecedor'); ?>" target="_blank"><?php the_field('botao_ja_e_fornecedor'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div style="background: #ffc117;" class="container container-produtos-citro-suco">
        <div class="row row-produtos">
            <div class="col col-produtos-img">
                <?php $imagePassoAPasso = get_field('imagem_background_passo_a_passo'); ?>
                <img src="<?php echo esc_url($imagePassoAPasso['url']); ?>" alt="<?php echo esc_attr($imagePassoAPasso['alt']); ?>">
            </div>
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 style="color: #007137;" class="title-col-produtos"><?php the_field('titulo_passo_a_passo'); ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section>

        <div class="container-passo-a-passo-width">
            <div class="tab align-tab">
                <button class="tablinks passo-a-passo-1" onclick="togglePassoPasso(event, 'passo-a-passo-1-2021')" id="defaultOpen"></button>
                <button class="tablinks passo-a-passo-2" onclick="togglePassoPasso(event, 'passo-a-passo-2-2021')"></button>
                <button class="tablinks passo-a-passo-3" onclick="togglePassoPasso(event, 'passo-a-passo-3-2021')"></button>
                <button class="tablinks passo-a-passo-4" onclick="togglePassoPasso(event, 'passo-a-passo-4-2021')"></button>
            </div>

            <div style="display: none" id="passo-a-passo-1-2021" class="tabcontent">
            <span onclick="togglePassoPasso(event, 'passo-a-passo-1-2021')" class="topright">&times</span>
            <div>
                <div class="container-passo-a-passo-2021">
                    <div class="container-img-jurado" >
                        <?php the_field('texto_contatos_central_cadastro'); ?>
                    </div>
                </div>
            </div>
            </div>

            <div style="display: none" id="passo-a-passo-2-2021" class="tabcontent">
            <span onclick="togglePassoPasso(event, 'passo-a-passo-2-2021')" class="topright">&times</span>
            <div>
                <div class="container-passo-a-passo-2021">
                    <div class="container-img-jurado" >
                        <?php the_field('texto_documentacao_para_homologacao'); ?>
                    </div>
                </div>
            </div> 
            </div>

            <div style="display: none" id="passo-a-passo-3-2021" class="tabcontent">
            <span onclick="togglePassoPasso(event, 'passo-a-passo-3-2021')" class="topright">&times</span>
            <div>
                <div class="container-passo-a-passo-2021">
                    <div class="container-img-jurado" >
                        <?php the_field('texto_duvidas_gerais'); ?>
                    </div>            
                </div>
            </div>
            
            </div>

            <div style="display: none" id="passo-a-passo-4-2021" class="tabcontent">
            <span onclick="togglePassoPasso(event, 'passo-a-passo-4-2021')" class="topright">&times</span>
            <div>
                <div class="container-passo-a-passo-2021">
                    <div class="container-img-jurado" >
                        <?php the_field('texto_formas_de_pagamento'); ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
</section>

<section style="margin-top: -40px">
    <div style="background: #ff5712;" class="container container-produtos-citro-suco">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 style="color: #fff;" class="title-col-produtos"><?php the_field('titulo_faturas'); ?></h2>
                </div>
            </div>
            <div class="col col-produtos-img">
                <?php $imageFaturas = get_field('imagem_faturas'); ?>
                <img src="<?php echo esc_url($imageFaturas['url']); ?>" alt="<?php echo esc_attr($imageFaturas['alt']); ?>">
            </div>
        </div>
    </div>
</section>

<section id="fornecedores-de-frutas">
    <div style="background: #009d01;" class="container container-produtos-citro-suco">
        <div class="row row-produtos">
            <div class="col col-produtos-img">
                <?php $imageFornecedoresDeFrutas = get_field('imagem_fornecedores_de_frutas'); ?>
                <img src="<?php echo esc_url($imageFornecedoresDeFrutas['url']); ?>" alt="<?php echo esc_attr($imageFornecedoresDeFrutas['alt']); ?>">
            </div>
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 style="color: #fff;" class="title-col-produtos"><?php the_field('titulo_fornecedores_de_frutas'); ?></h2>
                    <div style="margin-bottom: 20px" class="paragrafo-conceito-muito-alem-do-suco acessibilidade">
                        <?php the_field('texto_fornecedores_de_frutas'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="portal-do-citricultor">
    <div class="container container-programas">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 class="title-col-programa"><?php the_field('titulo_portal_do_citricultor'); ?></h2>
                     <div style="margin-bottom: 20px" class="paragrafo-conceito-muito-alem-do-suco acessibilidade">
                        <?php the_field('texto_portal_do_citricultor'); ?>
                    </div>
                    <a class="btn-col-laranja-citro-suco" href="<?php the_field('botao_url_portal_do_citricultor'); ?>" target="_blank"><?php the_field('botao_portal_do_citricultor'); ?></a>
                </div>
            </div>
            <div class="col col-produtos-img col-programas-img">
                <?php $imageCitricultor = get_field('imagem_portal_do_citricultor'); ?>
                <img src="<?php echo esc_url($imageCitricultor['url']); ?>" alt="<?php echo esc_attr($imageCitricultor['alt']); ?>">
            </div>
        </div>
    </div>
</section>

<section id="programa-trilhar">
    <div class="container container-produtos-citro-suco">
        <div class="row row-produtos">
            <div style="background-image: url(<?php the_field('imagem_background_contatos_escritorios'); ?>)" class="col col-pessoas-img">
                <div class="col col-pessoas-citro-suco">
                    <h2 style="color:#fff" class="text-pessoas-citro-suco"><?php the_field('titulo_contatos_escritorios'); ?></h2>
                    <div class="paragrafo-pessoas-citro-suco acessibilidade">
                        <?php the_field('texto_contatos_escritorios'); ?>
                    </div>
                </div> 
            </div>

            <div style="background-image: url(<?php the_field('imagem_background_programa_trilhar'); ?>)" class="col col-sustentabilidade">
                <div class="container-col-sustentabilidade">
                    <h2 style="color:#fff" class="title-col-produtos"><?php the_field('titulo_programa_trilhar'); ?></h2>
                    <div style="margin-bottom: 20px" class="paragrafo-conceito-muito-alem-do-suco acessibilidade">
                        <?php the_field('texto_programa_trilhar'); ?>
                    </div>
                    <a class="btn-col-produtos" href="<?php the_field('botao_url_programa_trilhar'); ?>" target="_blank"><?php the_field('botao_programa_trilhar'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="lista-protecitrus">
    <div style="background: #d3dd18; " class="container container-programas">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 class="title-col-programa"><?php the_field('titulo_protecitrus'); ?></h2>
                     <div style="margin-bottom: 20px; color: #005008" class="paragrafo-conceito-muito-alem-do-suco acessibilidade">
                        <?php the_field('texto_protecitrus'); ?>
                    </div>
                    <button style="cursor: pointer"class="btn-col-laranja-citro-suco tablinks passo-a-passo-5" onclick="togglePassoPasso(event, 'passo-a-passo-5-2021')"><?php the_field('botao_protecitrus'); ?></button>
                </div>
            </div>
            <div class="col col-produtos-img col-programas-img">
                <?php $imageProteCitrus = get_field('imagem_protecitrus'); ?>
                <img src="<?php echo esc_url($imageProteCitrus['url']); ?>" alt="<?php echo esc_attr($imageProteCitrus['alt']); ?>">
            </div>
        </div>
    </div>
</section>

<section>
        <div style="margin-bottom: 0" class="container-passo-a-passo-width">
            <div style="display: none" id="passo-a-passo-5-2021" class="tabcontent">
                <span onclick="togglePassoPasso(event, 'passo-a-passo-5-2021')" class="topright">&times</span>
                <div>
                    <div style="margin: 20px 0">
                        <div style="display: grid; grid-template-columns: auto auto" class="container-relatorios-hidden">
                            <div>
                                <a href="/wp-content/uploads/2021/08/protecitrus_2021-08-13.pdf" target="_blank">
                                
                                    <img src="/wp-content/uploads/2021/05/Icones_Protecitrus.png">
                                    <p class="text-laranja-citro-suco">Produtos para Proteção da Citricultura</p>
                                </a>
                            </div>
                            <div>
                                <a href="/wp-content/uploads/2021/08/lmr_2021-08-13.pdf" target="_blank">
                                    <img src="/wp-content/uploads/2021/05/Icones_LMR.png">
                                    <p class="text-laranja-citro-suco">LMR - Limite Máximo de Resíduos</p>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
</section>


<script>
    function togglePassoPasso(evt, passo) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
	
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		var prev_state_display = document.getElementById(passo).style.display;
		
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		
		if( prev_state_display == "none"){
			document.getElementById(passo).style.display = "block";
			evt.currentTarget.className += " active";
		} else {
			document.getElementById(passo).style.display = "none";
			evt.currentTarget.className.replace(" active", "");
		}
	}
</script>


<?php get_footer();