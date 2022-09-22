<?php get_header(); ?>
<?php if (isset($_GET['i'])) {
    $link = true;
    $link_content = $_GET['i'];
} else {
    $link = false;
} ?>

<section class="container-mandala-compromisso indica">
    <div id="mandala" class="container-fluid">
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-12 col-md-10 col-lg-6">
                <div class="conteudo">
                    <div class="mandala-img">
                        <img class="compro" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/indicadores.png">
                    </div>
                </div>
            </div>
            <div class="col-8 col-md-2 col-lg-3 offset-lg-1 align-self-end">
                <img class="compro" src="<?php echo get_template_directory_uri(); ?>/assets/img/indicadores.png">
                <p>Conscientes de que a sustentabilidade é uma jornada, demos mais um passo para construir uma empresa cada vez mais sustentável e, assim, criar valor de longo prazo para todos e todas.</p>
                <p>Esses compromissos direcionam os temas materiais e nossos esforços atuais e futuros conectados ao propósito de Nutrir a vida, vivendo legados.</p>
                <p>Conheça os nossos compromissos ESG 2030 e acompanhe a nossa jornada:</p>
            </div>
        </div>
    </div>
</section>

<!-- <ul class="">
    <li>Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul> -->

<section id="compromissos" class="comproticioas">
    <div class="container-fluid">
        <div class="row itens  nav nav-tabs justify-content-center">
            <a data-toggle="tab" href="#carbono" class="item c i carbono col-4 col-md-2 align-self-center">
                <div class="conteudo">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/5.png">
                    </div>
                </div>
            </a>
            <a data-toggle="tab" href="#bio" class="item c i bio col-4 col-md-2 align-self-center">
                <div class="conteudo">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/4.png">
                    </div>
                </div>
            </a>
            <a data-toggle="tab" href="#agua" class="item c i agua col-4 col-md-2 align-self-center">
                <div class="conteudo">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/6.png">
                    </div>
                </div>
            </a>
            <a data-toggle="tab" href="#gestao" class="item c i gestao col-4 col-md-2 align-self-center">
                <div class="conteudo">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/2.png">
                    </div>
                </div>
            </a>
            <a data-toggle="tab" href="#diversidade" class="item c i diversidade col-4 col-md-2 align-self-center">
                <div class="conteudo">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/1.png">
                    </div>
                </div>
            </a>
            <a data-toggle="tab" href="#cadeia" class="item c i cadeiav col-4 col-md-2 align-self-center">
                <div class="conteudo">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/3.png">
                    </div>
                </div>
            </a>
        </div>
        <div id="conteudo" class="conteudo tab-content">
            <div id="carbono" class="tab-pane fade<?php if((!$link) OR ($link_content == 'carbono')) {echo ' in active show';} ?>">
                <div class="row header justify-content-center">
                    <div class="col-12 col-lg-7">
                        <h2>Contribuir para a resiliência climática</h2>
                        <p>Reduzir 28% de emissões de CO2 eq;</p>
                        <p>Remoção líquida de 1.6 MM ton de CO2 eq.</p>
                    </div>
                    <div class="col-12 col-lg-3 text-right align-self-start">
                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/paginas-novas/agua/icones-menu-debaixo_03.png"> Ambiental</span>
                    </div>
                </div>
                <div class="row content justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="line">
                            <p>A emergência climática é um dos grandes desafios do nosso tempo. Reduzir as emissões de gases do efeito estufa é o primeiro passo para contribuirmos com a resiliência climática.</p>

                            <p>A Citrosuco atua com transparência nesta agenda, publicando inventários de emissões GEE (Gases de Efeito Estufa) e investindo em projetos de eficiência e uso de energia renovável.</p>

                            <p>Nossa matriz energética é +65% renovável e substituímos insumos agrícolas, privilegiando manejo sustentável.</p>

                            <p>Temos o compromisso de reduzir as emissões em 28% nos escopos 1 e 2 até 2030, e aumentar as remoções líquidas, tendo o balanço líquido de remoções e emissões de GEE cada vez mais positivo.</p> 

                            <p>Com nossos pomares perenes de laranja, contribuímos diretamente para a remoção de carbono da atmosfera, capturando mais de 500 mil Ton CO2 por ano.</p>

                            <p>Estamos alinhados ao compromisso well below 2°C do SBTi. Neste momento, priorizamos as metas para os escopos 1 e 2, mas como líderes da cadeia sabemos do nosso papel de reduzir as emissões do escopo 3.</p>

                            <img class="compromisso" src="<?php echo get_template_directory_uri(); ?>/assets/img/resiliencia-climatica/selo_13.png">

                            <div class="table">
                                <table>
                                    <tr>
                                        <td>Meta 2030</td>
                                        <td>
                                            <p>•  Reduzir 28% de emissões de CO2 eq¹;</p>
                                            <p>•  Remoção líquida de 1,6 MM ton de CO2 eq².</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Objetivo central 2030</td>
                                        <td><p>Promover a neutralização das emissões de GEE mediante redução de emissões diretas, indiretas, compensação remoção e restauração de ecossistemas.</p></td>
                                    </tr>
                                    <tr>
                                        <td>Status em<br> 2020/2021</td>
                                        <td>
                                            <p>Emissões de CO2 equivalente³</p>
                                            <p>•  Escopo1: 406 Kton</p>
                                            <p>•  Escopo2: 30 Kton</p>
                                            <p>•  Escopo3: 374Kton4</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row content justify-content-center">
                    <div class="col-12 col-lg-6">
                        <p>1. Considerando escopos 1 e 2.</p>

                        <p>2. Balanço líquido resultante das remoções de pomares próprios com as emissões do escopo 1 e 2.</p>

                        <p>3. Inventário de emissões 2019 passou por complementar revisão técnica mediante metodologias ISO 14064-3 (2007) e Especificações de Revisão do Programa Brasileiro GHG Protocol, executado por empresa acreditada pelo INMETRO.</p>

                        <p>4. Em sua trajetória a Citrosuco já removeu da atmosfera volume de CO2 eq, porém, para efeito de meta e por disponibilidade metodológica, as remoções serão contabilizadas a partir de 2021 nos pomares próprios da companhia.</p>
                    </div>
                </div>
                <div class="footer row justify-content-center">
                    <img src='data:image/svg+xml;utf8,%3C%3Fxml version="1.0" standalone="no"%3F%3E%3C!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd"%3E%3Csvg version="1.0" xmlns="http://www.w3.org/2000/svg" width="3255.000000pt" height="681.000000pt" viewBox="0 0 3255.000000 681.000000" preserveAspectRatio="xMidYMid meet"%3E%3Cg transform="translate(0.000000,681.000000) scale(0.100000,-0.100000)" fill="%2350A146" stroke="none"%3E%3Cpath d="M13750 6799 c-3678 -74 -7315 -814 -10725 -2184 -526 -211 -1059 -443 -1620 -705 -238 -112 -978 -481 -1225 -612 l-175 -93 -3 -1602 -2 -1603 16275 0 16275 0 0 398 0 398 -142 105 c-1735 1285 -3749 2450 -5754 3330 -3462 1517 -7113 2369 -10904 2544 -670 31 -1300 38 -2000 24z"/%3E%3C/g%3E%3C/svg%3E'>
                    <div class="col-12 col-lg-6">
                        <a href="<?php echo home_url('carbono'); ?>"><button>Voltar para a página de compromissos</button></a>
                    </div>
                </div>
            </div>
            <div id="bio" class="tab-pane fade<?php if(($link) AND ($link_content == 'bio')) {echo ' in active show';} ?>">
                <div class="row header justify-content-center">
                    <div class="col-12 col-lg-7">
                        <h2>Fomentar a biodiversidade</h2>
                        <p>Projetos estruturados de conservação da biodiversidade para 100% dos hectares destinados a proteção ambiental</p>
                    </div>
                    <div class="col-12 col-lg-3 text-right align-self-start">
                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/paginas-novas/agua/icones-menu-debaixo_03.png"> Ambiental</span>
                    </div>
                </div>
                <div class="row content justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="line">
                            <p>A atuação ativa de fomento em nossas áreas verdes possibilita a coexistência sustentável com nosso sistema de produção agrícola. Gerimos mais de 19,1 mil hectares destinados à conservação da fauna e da flora, distribuídos entre os biomas do Cerrado e da Mata Atlântica. </p>

                            <p>Resguardamos os entornos de nascentes, rios e lagos que têm o papel fundamentalna biodiversidade e nos recursos hídricos.</p>

                            <p>Desde 2018, atuamos proativamente em projetos de avistamento de animais silvestres e desenvolvimento da cadeia de abelhas em coexistência em nossos pomares, promovendo um ecossistema mais sustentável.</p>

                            <p>Para 2030, nos comprometemos em intensificar o desenvolvimento de projetos estruturados para 100% dos hectares destinados à proteção ambiental, fortalecendo nosso impacto positivo. </p>

                            <p>A nossa jornada de Biodiversidade será sustentada mediante a expansão da produção de abelhas e mel; caracterização e monitoramento faunístico e florístico; expansão de viveiro de mudas nativas, incrementando plantação de pomares.</p>

                            <img class="compromisso" src="<?php echo get_template_directory_uri(); ?>/assets/img/paginas-novas/agua/Slide-1.png">

                            <div class="table">
                                <table>
                                    <tr>
                                        <td>Meta 2030</td>
                                        <td>
                                            <p>Projetos estruturados de conservação da biodiversidade para 100% dos hectares destinados a proteção ambiental</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Objetivo central 2030</td>
                                        <td><p>Assegurar proteção e restauração da natureza nas operaçoes em coexistencia com moedelo de produção sustentável e transparente</p></td>
                                    </tr>
                                    <tr>
                                        <td>Status em<br> 2020/2021</td>
                                        <td>
                                            <p>2 projetos de biodiversidade (CitroApis em 4 fazendas e avistamento de animais em 25 fazendas).</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer row justify-content-center">
                    <img src='data:image/svg+xml;utf8,%3C%3Fxml version="1.0" standalone="no"%3F%3E%3C!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd"%3E%3Csvg version="1.0" xmlns="http://www.w3.org/2000/svg" width="3255.000000pt" height="681.000000pt" viewBox="0 0 3255.000000 681.000000" preserveAspectRatio="xMidYMid meet"%3E%3Cg transform="translate(0.000000,681.000000) scale(0.100000,-0.100000)" fill="%23005E33" stroke="none"%3E%3Cpath d="M13750 6799 c-3678 -74 -7315 -814 -10725 -2184 -526 -211 -1059 -443 -1620 -705 -238 -112 -978 -481 -1225 -612 l-175 -93 -3 -1602 -2 -1603 16275 0 16275 0 0 398 0 398 -142 105 c-1735 1285 -3749 2450 -5754 3330 -3462 1517 -7113 2369 -10904 2544 -670 31 -1300 38 -2000 24z"/%3E%3C/g%3E%3C/svg%3E'>
                    <div class="col-12 col-lg-6">
                        <a href="<?php echo home_url('biodiversidade'); ?>"><button>Voltar para a página de compromissos</button></a>
                    </div>
                </div>
            </div>
            <div id="agua" class="tab-pane fade<?php if(($link) AND ($link_content == 'agua')) {echo ' in active show';} ?>">
                <div class="row header justify-content-center">
                    <div class="col-12 col-lg-7">
                        <h2>Gerir racionalmente os recursos hídricos</h2>
                        <p>Racionalizar a captação de água em 100% das bacias hidrográficas críticas, contribuindo para o aumento da disponibilidade hídrica aos stakeholders</p>
                        <p>Aumentar em 20% a eficiência do uso da água na operação industrial (m3/ton)</p>
                    </div>
                    <div class="col-12 col-lg-3 text-right align-self-start">
                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/paginas-novas/agua/icones-menu-debaixo_03.png"> Ambiental</span>
                    </div>
                </div>
                <div class="row content justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="line">
                            <p>A água é um bem essencial ao nosso planeta, nutrindo a vida. É com a fundamental participação da água que damos vazão ao impacto positivo através do nosso negócio.</p>

                            <p>Mais de 80% do consumo de água da Citrosuco está concentrado na irrigação de fazendas, em função das condições climáticas nas regiões em que atuamos.</p>

                            <p>O sistema eficiente de gotejamento leva a água e os nutrientes direto às raízes das plantas. </p>

                            <p>Em nossas 4 indústrias localizadas no Brasil e nos Estados Unidos, investimentos tecnológicos permitem tratamento e reúso da água, fortalecendo a recirculação de mais de 900 mil m3 de recursos hídricos nas últimas 3 safras.</p>

                            <p>Para 2030, vamos garantir ainda mais racionalidade na captação de recursos hídricos nas operações agrícolas, mediante reservatórios e ações de manejo ao entorno de bacias hidrográficas.¹ </p>

                            <p>Em nossas fábricas, vamos incrementar a eficiência do uso da água, mediante monitoramento e tecnologia, assegurando menor consumo de recursos para desenvolvimento dos nossos produtos. </p>

                            <p>Ambos os movimentos impactarão positivamente a disponibilidade de água aos stakeholders.</p>

                            <img class="compromisso" src="<?php echo get_template_directory_uri(); ?>/assets/img/mandala/compro/ic.jpg">

                            <div class="table">
                                <table>
                                    <tr>
                                        <td>Meta 2030</td>
                                        <td>
                                            <p>•  Racionalizar a captação de água em 100% das bacias hidrográficas críticas, contribuindo apra o aumento da disponibilidade hídrica aos stakeholders.</p>
                                            <p>•  Aumentar em 20% a eficiência do uso da água na operação industrial (m³/ton)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Objetivo central 2030</td>
                                        <td><p>Gerir os recursos hídricos com eficiência sistêmica, garantindo a competitividade do negócio e disponibilidade aos stakeholders</p></td>
                                    </tr>
                                    <tr>
                                        <td>Status em<br> 2020/2021</td>
                                        <td>
                                            <p>• Operações agrícolas: Captura outorgada anual de 40 milhões de m³ em 8 fazendas   selecionadas de regiões de bacias hidrográficas críticas;</p>

                                            <p>• 16.089 hectares irrigados;</p>

                                            <p>• Operações industriais: 2,3m³/ton de água consumida</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer row justify-content-center">
                    <img src='data:image/svg+xml;utf8,%3C%3Fxml version="1.0" standalone="no"%3F%3E%3C!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd"%3E%3Csvg version="1.0" xmlns="http://www.w3.org/2000/svg" width="3255.000000pt" height="681.000000pt" viewBox="0 0 3255.000000 681.000000" preserveAspectRatio="xMidYMid meet"%3E%3Cg transform="translate(0.000000,681.000000) scale(0.100000,-0.100000)" fill="%2315352E" stroke="none"%3E%3Cpath d="M13750 6799 c-3678 -74 -7315 -814 -10725 -2184 -526 -211 -1059 -443 -1620 -705 -238 -112 -978 -481 -1225 -612 l-175 -93 -3 -1602 -2 -1603 16275 0 16275 0 0 398 0 398 -142 105 c-1735 1285 -3749 2450 -5754 3330 -3462 1517 -7113 2369 -10904 2544 -670 31 -1300 38 -2000 24z"/%3E%3C/g%3E%3C/svg%3E'>
                    <div class="col-12 col-lg-6">
                        <a href="<?php echo home_url('agua'); ?>"><button>Voltar para a página de compromissos</button></a>
                    </div>
                </div>
            </div>
            <div id="gestao" class="tab-pane fade<?php if(($link) AND ($link_content == 'gestao')) {echo ' in active show';} ?>">
                <div class="row header justify-content-center">
                    <div class="col-12 col-lg-7">
                        <h2>Impulsionar a transformação social</h2>
                        <p>Redução da maior vulnerabilidade social em 100% dos territórios priorizados onde atuamos, através de agenda integrada de atuação social e fortalecimento de políticas públicas</p>
                    </div>
                    <div class="col-12 col-lg-3 text-right align-self-start">
                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/transformacao-social/icones-menu-debaixo_05.png"> Social</span>
                    </div>
                </div>
                <div class="row content justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="line">
                            <p>Atuar no desenvolvimento socioeconômico das comunidades onde operamos é parte do nosso legado, mediante intervenções de impacto positivo.</p>

                            <p>Em 16 territórios de influência, desenvolvemos projetos de investimento social, alocando mais de R$ 2 milhões por ano para o enfrentamento das vulnerabilidades locais junto aos stakeholders, incluindo: programas educacionais, proteção de direitos das crianças e adolescentes, saúde pública e fortalecimento da atuação dos jovens em cidadania. </p>

                            <p>Os principais projetos são:<br> PVE - Parceria pela Valorização da Educação;<br> Projeto Pescar - iniciação profissional de jovens;<br> Programa Cidadania – fomento à Educação Política;<br> Apoio à Gestão Pública (AGP) – qualificação de gestão da saúde pública.</p>

                            <p>Para 2030, iremos atuar para reduzir a maior vulnerabilidade social identificada em 100% dos territórios de influência priorizados. Desenvolveremos intervenções integradas mediante investimento social e de impacto, em sinergia com políticas públicas, vocações locais e atores do ecossistema de cada território.</p>

                            <img class="compromisso" src="<?php echo get_template_directory_uri(); ?>/assets/img/transformacao-social/selo_8.png">

                            <div class="table">
                                <table>
                                    <tr>
                                        <td>Meta 2030</td>
                                        <td>
                                            <p>Redução da maior vulnerabilidade social em 100% dos terrítórios priorizados onde atuamos, através de agenda integrada de atuação social e fortalecimento de políticas públicas</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Objetivo central 2030</td>
                                        <td><p>Ampliar e ganhar robustez na gestão social integrada ao negócio, visando promover a geração de valor compartilhado e incluso nas localidades com engajamento e participação dos públicos de relacionamento</p></td>
                                    </tr>
                                    <tr>
                                        <td>Status em<br> 2020/2021</td>
                                        <td>
                                            <p>16 territórios de atuação com +15 projetos com foco na área de Educação, Cidadania e fortalecimento de políticas públicas, totalizando mais de R$ 2 milhões em investimento anual.</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer row justify-content-center">
                    <img src='data:image/svg+xml;utf8,%3C%3Fxml version="1.0" standalone="no"%3F%3E%3C!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd"%3E%3Csvg version="1.0" xmlns="http://www.w3.org/2000/svg" width="3255.000000pt" height="681.000000pt" viewBox="0 0 3255.000000 681.000000" preserveAspectRatio="xMidYMid meet"%3E%3Cg transform="translate(0.000000,681.000000) scale(0.100000,-0.100000)" fill="%23F79431" stroke="none"%3E%3Cpath d="M13750 6799 c-3678 -74 -7315 -814 -10725 -2184 -526 -211 -1059 -443 -1620 -705 -238 -112 -978 -481 -1225 -612 l-175 -93 -3 -1602 -2 -1603 16275 0 16275 0 0 398 0 398 -142 105 c-1735 1285 -3749 2450 -5754 3330 -3462 1517 -7113 2369 -10904 2544 -670 31 -1300 38 -2000 24z"/%3E%3C/g%3E%3C/svg%3E'>
                    <div class="col-12 col-lg-6">
                        <a href="<?php echo home_url('gestao'); ?>"><button>Voltar para a página de compromissos</button></a>
                    </div>
                </div>
            </div>
            <div id="diversidade" class="tab-pane fade<?php if(($link) AND ($link_content == 'diversidade')) {echo ' in active show';} ?>">
                <div class="row header justify-content-center">
                    <div class="col-12 col-lg-7">
                        <h2>Promover a diversidade, equidade e inclusão</h2>
                        <p>Assegurar a evolução da carreira profissional das pessoas com deficiência, garantindo aprendizagem e crescimento</p>
                        <p>30% das mulheres e/ou negros na liderança (supervisores acima)</p>
                    </div>
                    <div class="col-12 col-lg-3 text-right align-self-start">
                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/transformacao-social/icones-menu-debaixo_05.png"> Social</span>
                    </div>
                </div>
                <div class="row content justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="line">
                            <p>As pessoas dão vida ao nosso propósito.</p>

                            <p>Em 2015, criamos o Programa Para Todos, em que trabalhamos temas e ações sobre a importância da Diversidade, Equidade e Inclusão.</p>

                            <p>Avançamos muito na inclusão de PCD´s e possuímos mais de 400 PCD´s incluídos em nosso ambiente, sendo que 16% já demonstram evolução na carreira.</p>

                            <p>Para continuarmos avançando, iremos proporcionar maior representatividade de mulheres e negros em nossa liderança, sendo que 16% de mulheres e negros já estão em cargos de supervisão acima. </p>

                            <p>Para 2030, nos comprometemos em ampliar oportunidades e acesso aos cargos de liderança atingindo no mínimo 30% de representatividade. </p>

                            <p>Esse programa será fomentado pela liderança e campanhas para conscientização e engajamento, adicionados à revisão constante dos processos e práticas.</p>

                            <img class="compromisso" src="<?php echo get_template_directory_uri(); ?>/assets/img/diversidade/selo_5.png">

                            <img class="compromisso" src="<?php echo get_template_directory_uri(); ?>/assets/img/diversidade/selo_10.png">

                            <div class="table">
                                <table>
                                    <tr>
                                        <td>Meta 2030</td>
                                        <td>
                                            <p>•  30% de mulheres e/ou negros na liderança (supervisores acima);</p>
                                            <p>•  Assegurar a evolução da carreira profissional das pessoas com deficiência, garantindo aprendizagem e crescimento.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Objetivo central 2030</td>
                                        <td><p>Tornar-se uma empresa desejada em razão de nossas práticas de gestao, sendo reconhecida por seu ambiente diverso, valorizando as pessoas como elas são através do seu potencial, agregando valor aos negócios com suas diferentes visões e experiências.</p></td>
                                    </tr>
                                    <tr>
                                        <td>Status em<br> 2020/2021</td>
                                        <td>
                                            <p>16% mulheres e negros em liderança (supervisores acima); </p>
                                            <p>5 % de PCD’s e 16% de evolução da carreira.</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer row justify-content-center">
                    <img src='data:image/svg+xml;utf8,%3C%3Fxml version="1.0" standalone="no"%3F%3E%3C!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd"%3E%3Csvg version="1.0" xmlns="http://www.w3.org/2000/svg" width="3255.000000pt" height="681.000000pt" viewBox="0 0 3255.000000 681.000000" preserveAspectRatio="xMidYMid meet"%3E%3Cg transform="translate(0.000000,681.000000) scale(0.100000,-0.100000)" fill="%23E8672E" stroke="none"%3E%3Cpath d="M13750 6799 c-3678 -74 -7315 -814 -10725 -2184 -526 -211 -1059 -443 -1620 -705 -238 -112 -978 -481 -1225 -612 l-175 -93 -3 -1602 -2 -1603 16275 0 16275 0 0 398 0 398 -142 105 c-1735 1285 -3749 2450 -5754 3330 -3462 1517 -7113 2369 -10904 2544 -670 31 -1300 38 -2000 24z"/%3E%3C/g%3E%3C/svg%3E'>
                    <div class="col-12 col-lg-6">
                        <a href="<?php echo home_url('diversidade'); ?>"><button>Voltar para a página de compromissos</button></a>
                    </div>
                </div>
            </div>
            <div id="cadeia" class="tab-pane fade<?php if(($link) AND ($link_content == 'cadeia')) {echo ' in active show';} ?>">
                <div class="row header justify-content-center">
                    <div class="col-12 col-lg-7">
                        <h2>Liderar a cadeia de valor sustentável</h2>
                        <p>100% do fornecimento de fruta sustentável</p>
                    </div>
                    <div class="col-12 col-lg-3 text-right align-self-start">
                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia-de-valor/icones-menu-debaixo_07.png"> Governança</span>
                    </div>
                </div>
                <div class="row content justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="line">
                            <p>A Citrosuco já opera 100% das 25 fazendas próprias certificadas de acordo com a SAI Platform nível ouro, atuando de acordo com as mais robustas práticas agrícolas internacionais.</p>

                            <p>Em 2016, criamos o Programa Trilhar, que tem por objetivo estreitar o relacionamento com nossos fornecedores de fruta e disseminar as melhores práticas de sustentabilidade, ampliando assim a participação das frutas certificadas e auditadas internacionalmente em nossa produção. </p>

                            <p>Um passo importante nessa trilha foi o compromisso assumido em 2020 junto ao Sustainable Juice Covenant, pacto global que visa assegurar 100% da cadeia de valor sustentável até 2030. </p>

                            <p>Essas ações fortalecem o papel líder da Citrosuco em fomentar as melhores práticas socioambientais em suas fazendas e com seus parceiros.</p>

                            <p>Continuaremos evoluindo frente ao nosso compromisso 2030 de atingir uma cadeia 100% sustentável mediante fomento, articulação e parcerias para viabilizar certificações de sustentabilidade em produtores parceiros.</p>

                            <img class="compromisso" src="<?php echo get_template_directory_uri(); ?>/assets/img/cadeia-de-valor/selo_12.png">

                            <div class="table">
                                <table>
                                    <tr>
                                        <td>Meta 2030</td>
                                        <td>
                                            <p>100% do fornecimento de fruta sustentável</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Objetivo central 2030</td>
                                        <td><p>Assegurar cadeia de produção de fruta fortalecida com melhores práticas de sustentabilidade, conforme critérios de certificação independentes.</p></td>
                                    </tr>
                                    <tr>
                                        <td>Status em<br> 2020/2021</td>
                                        <td>
                                            <p>100% de fruta própria certificada com SAI Pratform nível ouro.</p>
                                            <p>43% de fruta de produtores terceiros certificada de acordo com SAI Pratform, Raiforest ou Fairtrade</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer row justify-content-center">
                    <img src='data:image/svg+xml;utf8,%3C%3Fxml version="1.0" standalone="no"%3F%3E%3C!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd"%3E%3Csvg version="1.0" xmlns="http://www.w3.org/2000/svg" width="3255.000000pt" height="681.000000pt" viewBox="0 0 3255.000000 681.000000" preserveAspectRatio="xMidYMid meet"%3E%3Cg transform="translate(0.000000,681.000000) scale(0.100000,-0.100000)" fill="%23655046" stroke="none"%3E%3Cpath d="M13750 6799 c-3678 -74 -7315 -814 -10725 -2184 -526 -211 -1059 -443 -1620 -705 -238 -112 -978 -481 -1225 -612 l-175 -93 -3 -1602 -2 -1603 16275 0 16275 0 0 398 0 398 -142 105 c-1735 1285 -3749 2450 -5754 3330 -3462 1517 -7113 2369 -10904 2544 -670 31 -1300 38 -2000 24z"/%3E%3C/g%3E%3C/svg%3E'>
                    <div class="col-12 col-lg-6">
                        <a href="<?php echo home_url('cadeia'); ?>"><button>Voltar para a página de compromissos</button></a>
                    </div>
                </div>
            </div>
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