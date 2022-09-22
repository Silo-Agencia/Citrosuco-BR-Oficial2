<?php get_header(); ?>

<style>
    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 0px solid #ccc;
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

    .container-certificacoes-hidden {
        display: grid;
        grid-template-columns: auto auto auto auto auto;
        overflow-x: auto;
    }
    .container-relatorios-hidden {
        display: grid;
        grid-template-columns: auto auto auto auto;
        overflow-x: auto;
    }
    .container-certificacoes-hidden img {
        max-width: 260px
    }
    .container-certificacoes-hidden div, .container-relatorios-hidden div {
        text-align: center;
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

<section id="muito-alem-do-suco">
    <div class="container container-muito-alem-do-suco">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 class="title-col-muito-alem-do-suco"><?php the_field('titulo_muito_alem_do_suco'); ?></h2>
                    <div class="paragrafo-col-muito-alem-do-suco">
                        <?php the_field('texto_muito_alem_do_suco'); ?>
                    </div>
                </div>
            </div>
            <div class="col col-produtos-img">
                <?php $imageMuitoAlemDoSuco = get_field('imagem_muito_alem_do_suco'); ?>
                <img style="min-height: unset" src="<?php echo esc_url($imageMuitoAlemDoSuco['url']); ?>" alt="<?php echo esc_attr($imageMuitoAlemDoSuco['alt']); ?>">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container container-pilares-de-sustentabilidade">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <div class="paragrafo-col-pilares-de-sustentabilidade">
                        <?php the_field('texto_sustentabilidade_col_um'); ?>
                    </div>
                </div>
            </div>

            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <div class="paragrafo-col-pilares-de-sustentabilidade">
                        <?php the_field('texto_sustentabilidade_col_dois'); ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section>
    <div class="container container-pilares-de-sustentabilidade">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="produtos-saudaveis">
                    <?php $imageProdutosColUm = get_field('imagem_produtos_saudaveis_col_um'); ?>
                    <img src="<?php echo esc_url($imageProdutosColUm['url']); ?>" alt="<?php echo esc_attr($imageProdutosColUm['alt']); ?>">
                    <div style="background: #0c501b" class="container-text-produtos-saudaveis">
                        <h2 class="title-produtos-saudaveis"><?php the_field('titulo_produtos_saudaveis'); ?></h2>
                        <div class="text-produtos-saudaveis">
                            <?php the_field('texto_produtos_saudaveis_col_um'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-produtos">
                <div class="produtos-saudaveis">
                    <?php $imageProdutosColdois = get_field('imagem_produtos_saudaveis_col_dois'); ?>
                    <img src="<?php echo esc_url($imageProdutosColdois['url']); ?>" alt="<?php echo esc_attr($imageProdutosColdois['alt']); ?>">
                    <div style="background: #17a501" class="container-text-produtos-saudaveis">
                        <h2 class="title-produtos-saudaveis"><?php the_field('titulo_produtos_saudaveis_dois'); ?></h2>
                        <div class="text-produtos-saudaveis">
                            <?php the_field('texto_produtos_saudaveis_dois'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="produtos-saudaveis">
                    <?php $imageProdutosColtres = get_field('imagem_produtos_saudaveis_col_tres'); ?>
                    <img src="<?php echo esc_url($imageProdutosColtres['url']); ?>" alt="<?php echo esc_attr($imageProdutosColtres['alt']); ?>">
                    <div style="background: #17a501" class="container-text-produtos-saudaveis">
                        <h2 class="title-produtos-saudaveis"><?php the_field('titulo_produtos_saudaveis_tres'); ?></h2>
                        <div class="text-produtos-saudaveis">
                            <?php the_field('texto_produtos_saudaveis_tres'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-produtos">
                <div class="produtos-saudaveis">
                    <?php $imageProdutosColquatro = get_field('imagem_produtos_saudaveis_col_quatro'); ?>
                    <img src="<?php echo esc_url($imageProdutosColquatro['url']); ?>" alt="<?php echo esc_attr($imageProdutosColquatro['alt']); ?>">
                    <div style="background: #0c501b" class="container-text-produtos-saudaveis">
                        <h2 class="title-produtos-saudaveis"><?php the_field('titulo_produtos_saudaveis_quatro'); ?></h2>
                        <div class="text-produtos-saudaveis">
                            <?php the_field('texto_produtos_saudaveis_quatro'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="certificacoes">
    <div style="background: #ff8a06" class="container container-projetos-socioambientais">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 style="color: #6d390a" class="title-col-projetos-socioambientais"><?php the_field('titulo_certificacoes'); ?></h2>
                    <div style="color: #fff" class="paragrafo-col-projetos-socioambientais">
                        <?php the_field('texto_certificacoes'); ?>
                    </div>
                    <button style="cursor: pointer" class="btn-col-laranja-citro-suco tablinks certificacoes" onclick="toggleCertificacao(event, 'certificacoes-1')" id="defaultOpen">
                        <?php the_field('botao_certificacoes'); ?>
                    </button>
                </div>
            </div>
            <div class="col col-produtos-img">
                <?php $imageCertificacoes = get_field('imagem_certificacoes'); ?>
                <img src="<?php echo esc_url($imageCertificacoes['url']); ?>" alt="<?php echo esc_attr($imageCertificacoes['alt']); ?>">
            </div>
        </div>
    </div>
</section>

<section>
        <div class="container-passo-a-passo-width">
            <div style="display: none" id="certificacoes-1" class="tabcontent">
                <span onclick="toggleCertificacao(event, 'certificacoes-1')" class="topright">&times</span>
                <div>
                    <div class="container-certificacoes-2021">
                        <div class="container-img-jurado" >
                            <div style="margin: 20px 0">
                                <h2 style="padding: 40px" class="title-col-projetos-socioambientais">Política Sistema de Gestão Integrado – PC.0001</h2>
                                <div class="container-certificacoes-hidden">
                                    <div>
                                         <a href="/wp-content/uploads/2021/10/Politica-SGO-PC.0001-001.pdf" target="_blank"> 
                                            <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                            <img src="/wp-content/uploads/2021/04/Sustentabilidade_20.jpg">
                                                
                                                <div style="font-size: 12px; color:#024f09; text-align: center; font-weight: 300;">PC.0001 – rev001: Política do Sistema de<br> Gestão Operacional – SGO</div>
                                            </div>
                                         </a> 
                                    </div>
                                     <div>
                                        <a href="/wp-content/uploads/2021/10/PC.016-000-Politica-SSMA.pdf" target="_blank">
                                         <img src="/wp-content/uploads/2021/06/Sustentabilidade_19_new.jpg">
                                         <div style="font-size: 12px; color:#024f09; text-align: center; font-weight: 300;">PC.0016 – rev00: Política de SSMA</div>
                                        </a>
                                    </div>
                                    <!--
                                    <div>
                                        <a href="/wp-content/uploads/2021/04/Certificate-BR033557-ISO14001.pdf" target="_blank">
                                            <img src="/wp-content/uploads/2021/04/Sustentabilidade_21.jpg">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="/wp-content/uploads/2021/04/Certificate-BR033558-OHSAS18001.pdf" target="_blank">
                                            <img src="/wp-content/uploads/2021/04/Sustentabilidade_22.jpg">
                                        </a>
                                    </div>
                                </div> -->
                            </div>

                            <!-- <div style="margin: 20px 0">
                                <h2 style="padding: 40px" class="title-col-projetos-socioambientais">
                                    Sistema de Gestão de Segurança dos Alimentos - FSSC22000    
                                </h2>
                                <div class="container-certificacoes-hidden">
                                    <div>
                                        <a href="/wp-content/uploads/2021/04/FSSC22000-Terminal-Santos.pdf" target="_blank">
                                            <img src="/wp-content/uploads/2021/04/Sustentabilidade_24.jpg">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="/wp-content/uploads/2021/04/FSSC22000-Certificate-Matao.pdf" target="_blank">
                                        <img src="/wp-content/uploads/2021/04/Sustentabilidade_24.jpg">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="/wp-content/uploads/2021/04/FSSC-22000-Certificate-Araras.pdf" target="_blank">
                                        <img src="/wp-content/uploads/2021/04/Sustentabilidade_24.jpg">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="/wp-content/uploads/2021/04/FSSC22000-Certificate-Catanduva.pdf" target="_blank">
                                        <img src="/wp-content/uploads/2021/04/Sustentabilidade_24.jpg">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="/wp-content/uploads/2021/04/FSSC-22000-Armazem-29.pdf" target="_blank">
                                        <img src="/wp-content/uploads/2021/04/Sustentabilidade_24.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>                             -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section>
    <div class="container-pilares-de-sustentabilidade">
        <h2 style="padding: 40px 40px 0" class="title-col-projetos-socioambientais">Instituições certificadoras e auditorias externas</h2>
        <div class="container-img-instituicoes-certificadoras">
            <?php while( the_repeater_field('instituicoes_certificadoras') ): ?>
                <div>
                    <div class="width-img"><img src="<?php the_sub_field('imagens_instituicoes_certificacoes'); ?>"></div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>


<section id="parcerias-e-projetos">
    <div class="container container-projetos-socioambientais">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 class="title-col-projetos-socioambientais"><?php the_field('titulo_parcerias_e_projetos'); ?></h2>
                    <div style="color: #000!important" class="paragrafo-col-projetos-socioambientais">
                        <?php the_field('texto_parcerias_e_projetos'); ?>
                    </div>
                </div>
            </div>
            <div class="col col-produtos-img">
                <?php $imageParcerias = get_field('imagem_parcerias_e_projetos'); ?>
                <img src="<?php echo esc_url($imageParcerias['url']); ?>" alt="<?php echo esc_attr($imageParcerias['alt']); ?>">
            </div>
        </div>
    </div>
</section>

<section style="max-width: 1400px; margin: auto; width: 100%;"><div style="max-width: 1400px; margin: auto; width: 100%;"><?php echo do_shortcode('[the_grid name="Sustentabilidade"]'); ?></div></section>

<section id="relatorios-de-sustentabilidade">
    <div class="container container-relatorio-de-sustentabilidade">
        <div class="row row-produtos">
            <div class="col col-produtos">
                <div class="container-col-produtos">
                    <h2 class="title-col-relatorio-de-sustentabilidade"><?php the_field('titulo_relatorios_de_sustentabilidade'); ?></h2>
                    <div class="paragrafo-col-relatorio-de-sustentabilidade">
                        <?php the_field('texto_relatorios_de_sustentabilidade'); ?>
                    </div>
                    <button style="cursor: pointer" class="btn-col-laranja-citro-suco tablinks relatorios" onclick="toggleCertificacao(event, 'relatorios')" id="relatoriosDefault">
                        <?php the_field('botao_relatorios_de_sustentabilidade'); ?>
                    </button>
                </div>
            </div>
            <div class="col col-produtos-img">
                <?php $imageRelatorio = get_field('imagem_relatorios_de_sustentabilidade'); ?>
                <img src="<?php echo esc_url($imageRelatorio['url']); ?>" alt="<?php echo esc_attr($imageRelatorio['alt']); ?>">
            </div>
        </div>
    </div>
</section>

<section>
        <div style="margin-bottom: 0" class="container-passo-a-passo-width">
            <div style="display: none" id="relatorios" class="tabcontent">
                <span onclick="toggleCertificacao(event, 'relatorios')" class="topright">&times</span>
                <div>
                    <div class="container-certificacoes-2021">
                        <div class="container-img-jurado" >
                            <div style="margin: 20px 0">
                                <div class="container-relatorios-hidden">

                                <div>
                                 <a href="/wp-content/uploads/2021/07/Citrosuco_RS2020_02.pdf" target="_blank">
                                            <img src="/wp-content/uploads/2021/07/Sustentabilidade_2019.jpg">
                                        </a>
                                       
                                 </div> 
                                 <div>
                                 <a href="/wp-content/uploads/2021/04/RS_CS_2018_2019-1.pdf" target="_blank">
                                            <img src="/wp-content/uploads/2021/04/Sustentabilidade_60.jpg">
                                        </a>
                                       
                                 </div> 

                                    <div>
                                        
                                        <a href="/wp-content/uploads/2021/04/RS_CS_2017_2018-1.pdf" target="_blank">
                                            <img src="/wp-content/uploads/2021/04/Sustentabilidade_59.jpg">
                                        </a>
                                    </div>

                                    <div>
                                        
                                        <a href="/wp-content/uploads/2021/04/RS_CS_2016_2017-1.pdf" target="_blank">
                                            <img src="/wp-content/uploads/2021/04/Sustentabilidade_53.jpg">
                                        </a>
                                    </div>

                                    <div>
                                       

                                        <a href="/wp-content/uploads/2021/04/RS_CS_2015-2016_pt_20170316.pdf" target="_blank">
                                        <img src="/wp-content/uploads/2021/04/Sustentabilidade_51.jpg">
                                     </a>
                                    </div>

                                    <div>
                                       
                                        <a href="/wp-content/uploads/2021/04/RS-CS_2014_2015_WEB_PD_S_v5-1.pdf" target="_blank">
                                            <img src="/wp-content/uploads/2021/04/Sustentabilidade_49.jpg">
                                        </a>
                                    </div> 
                                    
                                    
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<script>
    function toggleCertificacao(evt, certificacao) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
	
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		var prev_state_display = document.getElementById(certificacao).style.display;
		
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		
		if( prev_state_display == "none"){
			document.getElementById(certificacao).style.display = "block";
			evt.currentTarget.className += " active";
		} else {
			document.getElementById(certificacao).style.display = "none";
			evt.currentTarget.className.replace(" active", "");
		}
	}
</script>



<?php get_footer();