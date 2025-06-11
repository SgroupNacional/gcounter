@extends('site.template')

@section('corpo')

    <!-- START SECTION HEADINGS -->
    <header class="heading-6 fixed-top" id="heading">
        <div class="container">
            <a href="/" class="logo">
                <img src="/images/logo-brown.png" alt="financetop">
            </a>
            <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="get-quote hidden-lg-down">
                <a target="_blank" href="https://wa.me/5585999505692">
                    <p>Agende uma visita</p>
                </a>
            </div>
            <nav id="main-menu" class="collapse">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/Sobre">Sobre</a></li>
                    <li><a data-scroll href="#Servicos">Serviços</a></li>
                    <li><a href="/Portfolio">Portfólio</a></li>
                    <li><a data-scroll href="#Contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="headings-6">
        <div id="particles-js"></div>
        <div class="text-heading text-center">
            <div class="container">
                <h1>INTELIGÊNCIA DE NEGÓCIOS</h1>
                <p class="hidden-sm-down">Transformando Dados em Informações relevantes para tomada de decisão dos clientes.</p>
            </div>
        </div>
        <div class="arrow-down text-center">
            <a data-scroll href="#info"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->


    <!-- START SECTION INFO -->
    <section class="info-about text-center" id="info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 cell cel-1">
                    <i class="fa fa-pie-chart" aria-hidden="true"></i>
                    <h3>Projetos de BI</h3>
                    <p class="text-center">Tenha o PROJETO DE BI da sua empresa 100% implementado com confiança.</p>
                </div>
                <div class="col-lg-4 col-md-6 cell cel-2">
                    <a href="/Portfolio"><i class="fa fa-tachometer" aria-hidden="true"></i></a>
                    <h3>Dashboards Interativas</h3>
                    <p class="text-center">Através de Dashboards interativas é possível detectar, por exemplo: Clientes que mais compram, Curvas de consumo, Produtos que geram maior capital de venda, etc...</p>
                </div>
                <div class="col-lg-4 col-md-6 cell cel-3">
                    <i class="fa fa-file-text" aria-hidden="true"></i>
                    <h3>Consultoria</h3>
                    <p class="text-center">Reduza os riscos do negócio por meio de análises e orientações dos processos gerenciais da sua empresa.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION INFO -->

    <!-- START WHAT WE OFFER -->
    <section class="choosing" id="Servicos">
        <div class="container">
            <div class="section-title">
                <div class="title-style">
                    <h2><span>OS BENEFÍCIOS DA </span>INTELIGÊNCIA DE NEGÓCIOS (BI)<span> PARA SUA EMPRESA</span></h2>
                    <div class="title-icon">
                        <i class="fa fa-crosshairs" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 cons hovblue hover-effect">
                    <div class="offer-inner">
                        <div class="offer-img" style="background-image: url('images/what-we-offer/choosing-1.jpg'); background-size: cover; background-position: center center;">
                        </div>
                        <div class="offer-details">
                            <h3><a href="#"><small>INFORMAÇÕES ESTRATÉGIAS EM TEMPO REAL</small></a></h3>
                            <p style="text-align: justify;">Por meio de informações em tempo real é possível tomar decisões mais agéis e assertivas para ações estratégicas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 cons hovblue hover-effect">
                    <div class="offer-inner">
                        <div class="offer-img" style="background-image: url('images/what-we-offer/choosing-2.jpg'); background-size: cover; background-position: center center;">
                        </div>
                        <div class="offer-details">
                            <h3><a href="#"><small>TOMADA DE DECISÃO EMBASADA EM CIÊNCIA DE DADOS</small></a></h3>
                            <p style="text-align: justify;">Possibilita tomar decisões embasadas em números e fatos reais e não por feeling, com fontes de dados 100% seguras. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hovblue hover-effect">
                    <div class="offer-inner">
                        <div class="offer-img" style="background-image: url('images/what-we-offer/choosing-3.jpg'); background-size: cover; background-position: center center;">
                        </div>
                        <div class="offer-details">
                            <h3><a href="#"><small>AUMENTO DA LUCRATIVIDADE DA EMPRESA</small></a></h3>
                            <p style="text-align: justify;">Aumente o lucro da sua empresa através de análise de indicadores identificando oportunidades para redução de gastos e aumento das receitas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4 cons hovblue hover-effect">
                    <div class="offer-inner">
                        <div class="offer-img" style="background-image: url('images/what-we-offer/choosing-4.jpg'); background-size: cover; background-position: center center;">
                        </div>
                        <div class="offer-details">
                            <h3><a href="#"><small>INTEGRAÇÃO COM TODOS OS BANCOS DE DADOS E SISTEMAS</small></a></h3>
                            <p style="text-align: justify;">Integração com todos os tipos de sistemas e bancos de dados: Oracle, MySQL, SQL. Além de ERPs como TOTVS, SAP, entre outros.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 cons hovblue hover-effect">
                    <div class="offer-inner">
                        <div class="offer-img" style="background-image: url('images/what-we-offer/choosing-5.jpg'); background-size: cover; background-position: center center;">
                        </div>
                        <div class="offer-details">
                            <h3><a href="#"><small>IDENTIFICAÇÃO DE OPORTUNIDADES PARA O NEGÓCIO</small></a></h3>
                            <p style="text-align: justify;">Oportunidades podem surgir por meio de estudos embasados em dados históricos: Market Share, Costumer Share, Upsell, Cross Sell.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hovblue hover-effect">
                    <div class="offer-inner">
                        <div class="offer-img" style="background-image: url('images/what-we-offer/choosing-6.jpg'); background-size: cover; background-position: center center;">
                        </div>
                        <div class="offer-details">
                            <h3><a href="#"><small>DESENVOLVER CULTURA DA EMPRESA PARA DATA DRIVEN</small></a></h3>
                            <p style="text-align: justify;">Quando o BI é imprementado das empresas, os colaboradores passam a ter um perfil analítico tomando decisões mais assertivas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END START WHAT WE OFFER -->

    <!-- START SECTION SERVICES -->
    <main class="services">
        <div class="container">
            <div class="section-title">
                <div class="title-style">
                    <h2><span>Outros </span>Serviços</h2>
                    <div class="title-icon">
                        <i class="fa fa-crosshairs" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="row service-1">
                <article class="col-lg-4 col-md-6 col-xs-12 serv">
                    <div class="serv-flex">
                        <div class="art-1">
                            <i class="fa fa-building" aria-hidden="true"></i>
                            <h3>Abertura de empresas</h3>
                        </div>
                        <div class="service-text-p">
                            <p style="text-align: justify;">A abertura de empresa é o início de uma jornada de empreendedorismo. Estamos a sua disposição para abertura do seu negócio.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-xs-12 serv">
                    <div class="serv-flex">
                        <div class="art-1">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            <h3>Contabilidade</h3>
                        </div>
                        <div class="service-text-p">
                            <p style="text-align: justify;">Escrituração e gestão Contábil, Fiscal e Pessoal, mantendo atualizada a contabilidade, bem como as obrigações fiscais, societarias e de pessoal.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-xs-12 serv hidden-md-down">
                    <div class="serv-flex">
                        <div class="art-1">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <h3>Treinamentos</h3>
                        </div>
                        <div class="service-text-p">
                            <p style="text-align: justify;">Elaboramos treinamentos nas áreas Contábil, Fiscal e Tributária, conforme o perfil e necessidades da empresa, com objetivo de melhor qualificação da equipe.</p>
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </main>
    <!-- END SECTION SERVICES -->

    <!-- START SECTION REPORT -->
    <section class="report">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="report-info">
                        <div class="sec-title">
                            <h2><span>O QUE É BUSSINES INTELLIGENCE E QUAL A SUA IMPORTÂNCIA PARA OS NEGÓCIOS?</span></h2>
                        </div>
                        <p style="text-align: justify;"> <strong>Business Intelligence</strong> ou, simplesmente, <strong>BI</strong>, é uma forma de agrupar e explorar informações para descobrir vantagens para o seu negócio. Assim, o objetivo central dele é auxiliar na interpretação e análise de dados e informações, para identificar oportunidades ou riscos.</p>
                        <p style="text-align: justify;"> Com o BI, as empresas conseguem construir estratégias com melhores chances de sucesso, pois são baseadas em informações concretas relacionadas ao negócio e ao meio em que está inserido.</p>
                        <p style="text-align: justify;"> O business intelligence tem uma série de benefícios, tais como:
                        <ul>
                            <ol><i class="fa fa-check" aria-hidden="true"></i>Ajuda a conhecer o negócio;</ol>
                            <ol><i class="fa fa-check" aria-hidden="true"></i>Melhora o processo de tomada de decisão;</ol>
                            <ol><i class="fa fa-check" aria-hidden="true"></i>Simplifica o compartilhamento de informações para a gestão;</ol>
                            <ol><i class="fa fa-check" aria-hidden="true"></i>Facilita a identificação de perdas e reduz riscos;</ol>
                            <ol><i class="fa fa-check" aria-hidden="true"></i>Identifica oportunidades de melhoria;</ol>
                            <ol><i class="fa fa-check" aria-hidden="true"></i>Obtém informações valiosas sobre o comportamento dos clientes.</ol>
                        </ul>
                        </p>
                        <p style="text-align: justify;"> Ter uma solução de BI, deve ser uma prioridade para o seu negócio. Isso porque há uma grande necessidade em coletar os dados encontrados em várias fontes, e torná-los em informações úteis. Assim, há um melhor monitoramento, fazendo com que a empresa conheça por exemplo: os hábitos de consumo dos seus clientes e ainda possa realizar uma auto avaliação e avaliar seus concorrentes.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="report-graphic">
                        <img src="images/bg/report-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION REPORT -->

@endsection
