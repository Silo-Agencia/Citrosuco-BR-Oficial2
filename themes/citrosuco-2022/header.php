<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package Citro-Suco-v2
    */
    ?>
    <!doctype html>
    <html <?php language_attributes(); ?>>
        <head>
            <meta charset="<?php bloginfo( 'charset' ); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="facebook-domain-verification" content="9fbb3om1rcfbe8ozf9xr2nmzy6lxrz" />
            <link rel="profile" href="https://gmpg.org/xfn/11">
            
            <?php wp_head(); ?>
          
            <?php if(is_home()): ?>
            <link rel="prefetch" href="<?php echo get_template_directory_uri(); ?>/assets/img/loading.gif" />
            <?php endif; ?>
            <?php if(is_page('tendencias')): ?>
            <link rel="prefetch" href="<?php echo get_template_directory_uri(); ?>/assets/img/mandala.png" />
            <link rel="prefetch" href="<?php echo get_template_directory_uri(); ?>/assets/img/img1.jpg" />
            <link rel="prefetch" href="<?php echo get_template_directory_uri(); ?>/assets/img/img2.jpg" />
            <link rel="prefetch" href="<?php echo get_template_directory_uri(); ?>/assets/img/img3.jpg" />
            <link rel="prefetch" href="<?php echo get_template_directory_uri(); ?>/assets/img/img4.jpg" />
            <link rel="prefetch" href="<?php echo get_template_directory_uri(); ?>/assets/img/img6.jpg" />
            <?php endif; ?>
        </head>
        <?php $page_id = get_queried_object_id(); ?>
        <body id="<?php echo "page-".$page_id ?>" class="bg-white <?php echo "page".$page_id ?>">
        
            <style>
            .container-sub-menu {
            justify-content: space-between;
            }
            </style>
            <!-- Menu -->
            <div class="container-sub-menu">
                <div class="btns-informacoes">
                    <div style="text-decoration: none; color: #fff; font-weight: 700">
                        <div class="text-acessibilidade acessibilidade">PT</div>
                    </div>
                    <div style="text-decoration: none; color: #fff; font-weight: 700">
                        <div class="text-acessibilidade acessibilidade"> | </div>
                    </div>
                    <div style="text-decoration: none; color: #fff; font-weight: 700">
                        <a href="https://citrosuco.com" class="text-acessibilidade acessibilidade">EN</a>
                    </div>
                    <div style="text-decoration: none; color: #fff; font-weight: 700">
                        <div class="text-acessibilidade acessibilidade"> | </div>
                    </div>
                    <div style="text-decoration: none; color: #fff; font-weight: 700">
                        <a href="https://citrosuco.com/cn"class="text-acessibilidade acessibilidade">CN</a>
                    </div>
                </div>
                <div class="btns-informacoes">
                    <div class="container-btns">
                        <a style="text-decoration: none; color: #fff; font-weight: 700"  href="https://www.contatoseguro.com.br/citrosuco" target="_blank"><div class="text-acessibilidade acessibilidade">Canal de Conduta</div></a>
                        <a style="text-decoration: none; color: #fff; font-weight: 700" href="<?php echo home_url('blog'); ?>"><div class="text-acessibilidade acessibilidade">Novidades </div></a>
                        <a style="text-decoration: none; color: #fff; font-weight: 700"  href="<?php echo home_url('fale-conosco'); ?>"><div class="text-acessibilidade acessibilidade">Fale Conosco </div></a>
                        <a style="text-decoration: none; color: #fff; font-weight: 700"  href="https://citrosucobrasil.sharepoint.com/sites/citrodoc/Paginas/Default.aspx" target="_blank"><div class="text-acessibilidade acessibilidade">GED </div></a>
                        
                        <a href="https://www.facebook.com/citrosucobrasil" target="_blank"><img class="facebook redes-sociais-footer" src="<?php uploads(); ?>/2021/02/face_branco.png"></a>
                        <a href="https://www.instagram.com/citrosuco.brasil/" target="_blank"><img style="margin-right: 5px;" class="linkedin redes-sociais-footer" src="<?php uploads(); ?>/2021/05/Insta_branco2.png"></a>
                        <a href="https://br.linkedin.com/company/citrosuco" target="_blank"><img style="margin-right: 5px;" class="linkedin redes-sociais-footer" src="<?php uploads(); ?>/2021/02/In_branco.png"></a>
                        <a href="https://www.youtube.com/channel/UCuBI3ruJ-hHxuOegVFOUj2A" target="_blank"><img style="margin-bottom: -5px" class="youtube redes-sociais-footer" src="<?php uploads(); ?>/2021/02/youtube_branco.png"></a>
                    </div>
                </div>
            </div>
            <nav id="desktop-none" class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php uploads(); ?>/2021/01/logo-citro-suco.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mobile-navbar-ul">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo home_url('a-citrosuco'); ?>">A CITROSUCO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo home_url('produtos-suco-de-laranja'); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                NOSSOS PRODUTOS
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo home_url('produtos-suco-de-laranja'); ?>">Suco de Laranja</a>
                                <a class="dropdown-item" href="<?php echo home_url('produtos-ingredientes'); ?>">Ingredientes</a>
                                <a class="dropdown-item" href="<?php echo home_url('produtos-inovacoes-da-laranja'); ?>">Inovações da Laranja</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url('suco-de-laranja'); ?>">SAÚDE E NUTRIÇÃO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url('pessoas'); ?>">PESSOAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url('sustentabilidade'); ?>">ESG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url('tendencias'); ?>">TENDÊNCIAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url('fornecedores'); ?>">FORNECEDORES</a>
                        </li>
                        
                        <style>
                        @media screen and (max-width: 720px) {
                        .container-sub-menu-mobile {
                        background: #12ba00;
                        padding: 10px 20px;
                        border-radius: 5px;
                        margin: 15px 0 0;
                        }
                        .container-sub-menu-mobile a {
                        color: #fff!important;
                        }
                        
                        .container-sub-menu {
                        display: none;
                        }
                        
                        .bg-light {
                        margin-top: 0;
                        }
                        }
                        </style>
                        
                        <div class="container-sub-menu-mobile">
                            <li class="nav-item">
                                <a class="nav-link"  style="text-decoration: none; color: #fff; font-weight: 700"  href="https://www.contatoseguro.com.br/citrosuco" target="_blank"><div class="text-acessibilidade acessibilidade">Canal de Conduta</div></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  style="text-decoration: none; color: #fff; font-weight: 700" href="<?php echo home_url('blog'); ?>"><div class="text-acessibilidade acessibilidade">Novidades </div></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="text-decoration: none; color: #fff; font-weight: 700"  href="<?php echo home_url('fale-conosco'); ?>"><div class="text-acessibilidade acessibilidade">Fale Conosco </div></a>
                            </li>
                            <li class="nav-item">
                                <div class="btns-informacoes">
                                    <div style="text-decoration: none; color: #fff; font-weight: 700" onclick="ptURL()"><div class="text-acessibilidade acessibilidade">PT</div></div>
                                    <div style="text-decoration: none; color: #fff; font-weight: 700"><div class="text-acessibilidade acessibilidade"> | </div></div>
                                    <div style="text-decoration: none; color: #fff; font-weight: 700" onclick="enURL()"><div class="text-acessibilidade acessibilidade">EN</div></div>
                                </div>
                            </li>
                        </div>
                        <style>
                        @media screen and (max-width: 720px) {
                        .container-mobile-icons-social {
                        background: #12ba00;
                        border-radius: 0 0 5px 5px;
                        padding: 10px;
                        }
                        }
                        
                        </style>
                        <div class="container-mobile-icons-social">
                            <a style="text-decoration: none; color: #fff; font-weight: 700"  href="https://citrosucobrasil.sharepoint.com/sites/citrodoc/Paginas/Default.aspx" target="_blank"><div class="text-acessibilidade acessibilidade">GED </div></a>
                            <a href="https://www.facebook.com/citrosucooficial/" target="_blank"><img class="facebook redes-sociais-footer" src="<?php uploads(); ?>/2021/02/face_branco.png"></a>
                            <a href="https://www.instagram.com/citrosuco.oficial/" target="_blank"><img style="margin-right: 5px;" class="linkedin redes-sociais-footer" src="<?php uploads(); ?>/2021/05/Insta_branco2.png"></a>
                            <a href="https://br.linkedin.com/company/citrosuco" target="_blank"><img style="margin-right: 5px;" class="linkedin redes-sociais-footer" src="<?php uploads(); ?>/2021/02/In_branco.png"></a>
                            <a href="https://www.youtube.com/channel/UCuBI3ruJ-hHxuOegVFOUj2A" target="_blank"><img style="margin-bottom: -5px" class="youtube redes-sociais-footer" src="<?php uploads(); ?>/2021/02/youtube_branco.png"></a>
                        </div>
                    </ul>
                </div>
            </nav>
            <nav id="mobile-none" class="menu-container navbar navbar-expand-xl navbar-light bg-light" role="navigation">
                <div class="container-menu-size">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <img src="<?php uploads(); ?>/2021/01/logo-citro-suco.png">
                        </a>
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'depth'             => 3,
                                'container'         => 'div',
                                'container_class'   => 'menus-list collapse navbar-collapse acessibilidade',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                        ?>
                        <div style="display: flex;">
                            <div class="btn btn-header" data-toggle="modal" data-target="#search"><img src="<?php uploads(); ?>/2021/04/Pesquisa.png"></div>
                            <div class="btn btn-header" data-toggle="modal" data-target="#search"><img src="<?php uploads(); ?>/2021/04/Acessibilidade.png"></div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="darkSwitch">
                                <label class="custom-control-label" for="darkSwitch"><div class="btn btn-header"><img src="<?php uploads(); ?>/2021/04/Contraste.png"></div></label>
                            </div>
                            <script src="<?= get_template_directory_uri() . '/js/dark-mode-switch.min.js' ?>"></script>
                        </div>
                    </div>
                </div>
            </nav>
